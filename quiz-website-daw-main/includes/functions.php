<?php
/**
 * Core Logic Functions
 */

/**
 * Handles the login logic with Persistent Database Lockouts
 */
function loginSystem($pdo, $inputUser, $inputPass, $maxAttempts)
{
    try {
        // 1. Fetch user from DB
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$inputUser]);
        $user = $stmt->fetch();

        if (!$user) {
            return ["status" => "FAILED", "message" => "Invalid credentials."];
        }

        // 2. Check for Lockout
        if ($user['locked_until']) {
            $lockTime = strtotime($user['locked_until']);
            $now = time();
            if ($now < $lockTime) {
                $remaining = ceil(($lockTime - $now) / 60);
                return [
                    "status" => "LOCKED",
                    "message" => "Account locked. Try again in $remaining minutes."
                ];
            } else {
                // Lock expired, reset purely for state management
                $stmt = $pdo->prepare("UPDATE users SET locked_until = NULL, failed_attempts = 0 WHERE id = ?");
                $stmt->execute([$user['id']]);
                // Refresh user data
                $user['failed_attempts'] = 0;
            }
        }

        // 3. Verify Password
        if (password_verify($inputPass, $user['password'])) {
            // Success: Reset failures
            $stmt = $pdo->prepare("UPDATE users SET failed_attempts = 0, locked_until = NULL WHERE id = ?");
            $stmt->execute([$user['id']]);

            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            return ["status" => "SUCCESS"];
        } else {
            // Failure: Increment attempts
            $newAttempts = $user['failed_attempts'] + 1;

            if ($newAttempts >= $maxAttempts) {
                // Lock the account (10 minutes)
                $lockUntil = date('Y-m-d H:i:s', strtotime('+10 minutes'));
                $stmt = $pdo->prepare("UPDATE users SET failed_attempts = ?, locked_until = ? WHERE id = ?");
                $stmt->execute([$newAttempts, $lockUntil, $user['id']]);
                return ["status" => "LOCKED", "message" => "Too many failures. Locked for 10 minutes."];
            } else {
                $stmt = $pdo->prepare("UPDATE users SET failed_attempts = ? WHERE id = ?");
                $stmt->execute([$newAttempts, $user['id']]);
                $remaining = $maxAttempts - $newAttempts;
                return ["status" => "FAILED", "message" => "Invalid credentials. $remaining attempts remaining."];
            }
        }

    } catch (\PDOException $e) {
        return ["status" => "ERROR", "message" => "Database error: " . $e->getMessage()];
    }
}

/**
 * Registers a new user in the database
 */
function registerUser($pdo, $username, $password)
{
    try {
        // 1. Check if username exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            return ["status" => "FAILED", "message" => "Username already taken."];
        }

        // 2. Hash password and insert
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hash]);

        return ["status" => "SUCCESS", "message" => "Account created! You can now login."];

    } catch (\PDOException $e) {
        return ["status" => "ERROR", "message" => "Database error: " . $e->getMessage()];
    }
}

/**
 * Filters the question pool by difficulty
 */
function getRandomQuestionsByDifficulty($pool, $topic, $difficulty)
{
    // 1. Safety check for topic
    if (!isset($pool[$topic]))
        return [];

    $topicPool = $pool[$topic];

    // 2. Filter by difficulty
    $filtered = array_filter($topicPool, function ($q) use ($difficulty) {
        return $q['difficulty'] === $difficulty;
    });

    $filtered = array_values($filtered);
    shuffle($filtered);

    // 3. Return up to 15 questions
    return array_slice($filtered, 0, 15);
}

/**
 * Processes quiz answers and returns score data
 */
function checkAnswers($userAnswers, $correctAnswersData)
{
    if (!$userAnswers)
        $userAnswers = [];
    $score = 0;
    $total = count($correctAnswersData);
    $results = [];

    foreach ($correctAnswersData as $q) {
        $qId = $q['id'];
        $userAns = isset($userAnswers[$qId]) ? $userAnswers[$qId] : null;
        $isCorrect = ($userAns === $q['answer']);
        if ($isCorrect)
            $score++;
        $results[] = [
            "question" => $q['question'],
            "user_answer" => $userAns,
            "correct_answer" => $q['answer'],
            "is_correct" => $isCorrect
        ];
    }

    $percentage = ($total > 0) ? ($score / $total) * 100 : 0;
    $remark = ($percentage >= 90) ? "Excellent" : (($percentage >= 70) ? "Good" : "Needs Improvement");

    return [
        "score" => $score,
        "total" => $total,
        "percentage" => $percentage,
        "remark" => $remark,
        "details" => $results
    ];
}

/**
 * Saves a quiz attempt to the database
 */
function saveQuizAttempt($pdo, $userId, $topic, $difficulty, $score, $total, $percentage, $remark, $details = null) {
    try {
        $jsonDetails = $details ? json_encode($details) : null;
        $stmt = $pdo->prepare("INSERT INTO quiz_attempts (user_id, topic, difficulty, score, total_questions, percentage, remark, details) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$userId, $topic, $difficulty, $score, $total, $percentage, $remark, $jsonDetails]);
    } catch (\PDOException $e) {
        return false;
    }
}

/**
 * Calculates global average score for a user
 */
function getGlobalAverage($pdo, $userId) {
    try {
        $stmt = $pdo->prepare("SELECT AVG(percentage) as avg_score FROM quiz_attempts WHERE user_id = ?");
        $stmt->execute([$userId]);
        $res = $stmt->fetch();
        return $res['avg_score'] ? round($res['avg_score'], 1) : 0;
    } catch (\PDOException $e) {
        return 0;
    }
}

/**
 * Calculates mastery stats per category for a user
 */
function getUserMasteryStats($pdo, $userId) {
    $topics = ['PHP', 'Database', 'HTML_CSS', 'AppDev'];
    $stats = [];
    
    foreach ($topics as $topic) {
        try {
            $stmt = $pdo->prepare("SELECT AVG(percentage) as avg_p, AVG(score) as avg_s FROM quiz_attempts WHERE user_id = ? AND topic = ?");
            $stmt->execute([$userId, $topic]);
            $res = $stmt->fetch();
            
            $percentage = $res['avg_p'] ? round($res['avg_p'], 1) : 0;
            $score = $res['avg_s'] ? round($res['avg_s'], 1) : 0;
            
            $remark = "None";
            if ($percentage > 0) {
                $remark = ($percentage >= 90) ? "Excellent" : (($percentage >= 70) ? "Good" : "Needs Improvement");
            }

            $stats[$topic] = [
                "avg_percentage" => $percentage,
                "avg_score" => $score,
                "remark" => $remark
            ];
        } catch (\PDOException $e) {
            $stats[$topic] = ["avg_percentage" => 0, "avg_score" => 0, "remark" => "Error"];
        }
    }
    return $stats;
}

/**
 * Fetches all quiz history for a user
 */
function getQuizHistory($pdo, $userId) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM quiz_attempts WHERE user_id = ? ORDER BY created_at DESC");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    } catch (\PDOException $e) {
        return [];
    }
}

/**
 * Fetches a single quiz attempt by ID and verifies user ownership
 */
function getQuizAttemptById($pdo, $id, $userId) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM quiz_attempts WHERE id = ? AND user_id = ?");
        $stmt->execute([$id, $userId]);
        $attempt = $stmt->fetch();
        
        if ($attempt && $attempt['details']) {
            $attempt['details'] = json_decode($attempt['details'], true);
        }
        return $attempt;
    } catch (\PDOException $e) {
        return null;
    }
}
?>
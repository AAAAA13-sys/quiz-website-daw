<?php
/**
 * Core Logic Functions
 */

/**
 * Handles the login logic with Persistent Database Lockouts
 */
function loginSystem($pdo, $inputUser, $inputPass, $maxAttempts) {
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
function registerUser($pdo, $username, $password) {
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
function getRandomQuestionsByDifficulty($pool, $difficulty) {
    $filtered = array_filter($pool, function($q) use ($difficulty) {
        return $q['difficulty'] === $difficulty;
    });
    $filtered = array_values($filtered);
    shuffle($filtered);
    // Only return 15 questions
    return array_slice($filtered, 0, 15);
}

/**
 * Processes quiz answers and returns score data
 */
function checkAnswers($userAnswers, $correctAnswersData) {
    if (!$userAnswers) $userAnswers = [];
    $score = 0;
    $total = count($correctAnswersData);
    $results = [];

    foreach ($correctAnswersData as $q) {
        $qId = $q['id'];
        $userAns = isset($userAnswers[$qId]) ? $userAnswers[$qId] : null;
        $isCorrect = ($userAns === $q['answer']);
        if ($isCorrect) $score++;
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
?>

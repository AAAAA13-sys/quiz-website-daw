<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    header("Location: index.php");
    exit();
}

$userId = $_SESSION['user_id'];
$isHistorical = false;
$res = null;

// Handle historical view
if (isset($_GET['id'])) {
    $attemptId = $_GET['id'];
    $attempt = getQuizAttemptById($pdo, $attemptId, $userId);
    
    if (!$attempt) {
        header("Location: index.php?page=profile");
        exit();
    }
    
    $isHistorical = true;
    $res = [
        "score" => $attempt['score'],
        "total" => $attempt['total_questions'],
        "percentage" => $attempt['percentage'],
        "remark" => $attempt['remark'],
        "details" => isset($attempt['details']) ? $attempt['details'] : []
    ];
    $topicName = $attempt['topic'];
} 
// Handle fresh results view
else {
    if (!isset($_SESSION['quiz_done']) || $_SESSION['quiz_done'] === false) {
        header("Location: index.php");
        exit();
    }

    $res = $_SESSION['results'];
    $topicName = isset($_SESSION['topic']) ? $_SESSION['topic'] : "Unknown";

    // Save to DB if not already saved
    if (!isset($_SESSION['saved_to_db'])) {
        $difficulty = isset($_SESSION['difficulty']) ? $_SESSION['difficulty'] : "Unknown";
        saveQuizAttempt($pdo, $userId, $topicName, $difficulty, $res['score'], $res['total'], $res['percentage'], $res['remark'], $res['details']);
        $_SESSION['saved_to_db'] = true;
    }

    if (isset($_GET['retry'])) {
        unset($_SESSION['quiz_done']);
        unset($_SESSION['results']);
        unset($_SESSION['questions']);
        unset($_SESSION['difficulty']);
        unset($_SESSION['topic']);
        unset($_SESSION['saved_to_db']);
        header("Location: index.php?page=catalog");
        exit();
    }
}

include 'partials/header.php';
?>

<h1><?php echo $isHistorical ? "Past Results" : "Results"; ?></h1>
<div class="subtitle"><?php echo htmlspecialchars($topicName); ?> Assessment</div>

<div class="score-circle">
    <div class="score-val"><?php echo $res['score']; ?>/<?php echo $res['total']; ?></div>
    <div style="font-size: 0.9rem; color: #94a3b8;"><?php echo round($res['percentage']); ?>%</div>
</div>
<div class="remark"><?php echo $res['remark']; ?></div>

<div class="review-section">
    <h3 style="margin-bottom: 20px; color: var(--primary);">Review Answers:</h3>
    <?php if (empty($res['details'])): ?>
        <p style="text-align: center; color: #94a3b8; padding: 20px;">No question details available for this attempt.</p>
    <?php else: ?>
        <?php foreach ($res['details'] as $detail): ?>
            <div class="details-item">
                <p style="font-weight: 600; margin-bottom: 10px; color: white;"><?php echo htmlspecialchars($detail['question']); ?></p>
                <?php if ($detail['is_correct']): ?>
                    <div class="correct-ans">
                        <span style="font-size: 1.2rem;">✓</span> <?php echo htmlspecialchars($detail['user_answer']); ?>
                    </div>
                <?php else: ?>
                    <div class="wrong-ans" style="margin-bottom: 5px;">
                        <span style="font-size: 1.2rem;">✗</span> <?php echo htmlspecialchars($detail['user_answer'] ?: "No Answer"); ?>
                    </div>
                    <div class="correct-ans" style="font-size: 0.85rem; opacity: 0.9;">
                        Correct: <?php echo htmlspecialchars($detail['correct_answer']); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<div style="margin-top: 30px; display: flex; flex-direction: column; gap: 12px;">
    <?php if ($isHistorical): ?>
        <a href="index.php?page=profile" class="btn">Back to Profile</a>
    <?php else: ?>
        <a href="index.php?page=results&retry=true" class="btn">Pick Another Difficulty</a>
    <?php endif; ?>
    <a href="index.php?page=logout" class="btn btn-outline">Logout</a>
</div>

<?php include 'partials/footer.php'; ?>
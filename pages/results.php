<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    header("Location: index.php");
    exit();
}

if (!isset($_SESSION['quiz_done']) || $_SESSION['quiz_done'] === false) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['retry'])) {
    unset($_SESSION['quiz_done']);
    unset($_SESSION['results']);
    unset($_SESSION['questions']);
    unset($_SESSION['difficulty']);
    header("Location: index.php");
    exit();
}

$res = $_SESSION['results'];

include 'partials/header.php';
?>

<h1>Results</h1>
<div class="score-circle">
    <div class="score-val"><?php echo $res['score']; ?>/<?php echo $res['total']; ?></div>
    <div style="font-size: 0.9rem; color: #94a3b8;"><?php echo round($res['percentage']); ?>%</div>
</div>
<div class="remark"><?php echo $res['remark']; ?></div>

<div class="review-section">
    <h3 style="margin-bottom: 10px;">Review Answers:</h3>
    <?php foreach ($res['details'] as $detail): ?>
        <div class="details-item">
            <p style="font-weight: 500; margin-bottom: 5px;"><?php echo htmlspecialchars($detail['question']); ?></p>
            <?php if ($detail['is_correct']): ?>
                <p class="correct-ans">✓ <?php echo htmlspecialchars($detail['user_answer']); ?></p>
            <?php else: ?>
                <p class="wrong-ans">✗ <?php echo htmlspecialchars($detail['user_answer'] ?: "No Answer"); ?></p>
                <p class="correct-ans">Correct: <?php echo htmlspecialchars($detail['correct_answer']); ?></p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<div style="margin-top: 30px; display: flex; flex-direction: column; gap: 10px;">
    <a href="index.php?page=results&retry=true" class="btn">Pick Another Difficulty</a>
    <a href="index.php?page=logout" class="btn btn-outline">Logout</a>
</div>

<?php include 'partials/footer.php'; ?>

<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
require_once 'includes/data.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['topic'])) {
    $_SESSION['topic'] = $_GET['topic'];
}

if (!isset($_SESSION['topic'])) {
    header("Location: index.php?page=catalog");
    exit();
}

$currentTopic = $_SESSION['topic'];

if (isset($_POST['set_difficulty'])) {
    $diff = $_POST['difficulty'];
    $_SESSION['difficulty'] = $diff;
    $_SESSION['questions'] = getRandomQuestionsByDifficulty($questionPool, $currentTopic, $diff);
    header("Location: index.php?page=quiz");
    exit();
}

include 'partials/header.php';
?>

<h1>Select Difficulty</h1>
<p class="subtitle">Choose your challenge level</p>

<form method="POST" action="index.php?page=difficulty" class="difficulty-options">
    <?php foreach ($difficulty_levels as $level): ?>
        <button type="submit" name="difficulty" value="<?php echo $level; ?>" class="difficulty-card">
            <span class="diff-title"><?php echo $level; ?></span>
            <span class="diff-desc">
                <?php
                if ($level === 'Easy')
                    echo "Perfect for beginners.";
                if ($level === 'Medium')
                    echo "For those who know the basics.";
                if ($level === 'Hard')
                    echo "Test your expert knowledge.";
                ?>
            </span>
            <input type="hidden" name="set_difficulty" value="1">
        </button>
    <?php endforeach; ?>
</form>

<div style="text-align: center; margin-top: 20px;">
    <a href="index.php?page=logout" class="logout-link">Logout</a>
</div>

<?php include 'partials/footer.php'; ?>
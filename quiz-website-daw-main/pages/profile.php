<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    header("Location: index.php");
    exit();
}

$userId = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Fetch Stats
$globalAvg = getGlobalAverage($pdo, $userId);
$masteryStats = getUserMasteryStats($pdo, $userId);

include 'partials/header.php';
?>

<div class="profile-header">
    <div class="profile-info">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p class="subtitle">Your Mastery Journey</p>
    </div>
    <div class="global-stat-card">
        <span class="stat-label">Global Avg.</span>
        <span class="stat-value"><?php echo $globalAvg; ?>%</span>
    </div>
</div>

<div class="category-stats-grid">
    <?php 
    $icons = [
        'PHP' => '📄',
        'Database' => '🗄️',
        'HTML_CSS' => '🎨',
        'AppDev' => '📱'
    ];
    $displayNames = [
        'PHP' => 'PHP Mastery',
        'Database' => 'Database Mastery',
        'HTML_CSS' => 'HTML / CSS Mastery',
        'AppDev' => 'App Development'
    ];
    
    foreach ($masteryStats as $topic => $stats): 
    ?>
    <a href="index.php?page=difficulty&topic=<?php echo $topic; ?>" class="mastery-card-link">
        <div class="mastery-card">
            <div class="mastery-icon"><?php echo $icons[$topic]; ?></div>
            <div class="mastery-content">
                <h3><?php echo $displayNames[$topic]; ?></h3>
                <div class="stats-row">
                    <div class="stat-item">
                        <span class="label">Score</span>
                        <span class="value"><?php echo $stats['avg_score']; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="label">Percentage</span>
                        <span class="value"><?php echo $stats['avg_percentage']; ?>%</span>
                    </div>
                </div>
                <div class="remark-badge <?php echo strtolower(str_replace(' ', '-', $stats['remark'])); ?>">
                    <?php echo $stats['remark']; ?>
                </div>
            </div>
        </div>
    </a>
    <?php endforeach; ?>
</div>

<div class="history-section">
    <h2>Recent Activity</h2>
    <?php include 'pages/history.php'; ?>
</div>

<div style="margin-top: 30px; text-align: center;">
    <a href="index.php?page=catalog" class="btn">Take a New Quiz</a>
</div>

<?php include 'partials/footer.php'; ?>

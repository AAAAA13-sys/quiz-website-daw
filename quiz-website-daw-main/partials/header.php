<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System ni Tomas</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Modular Styling (forced refresh) -->
    <link rel="stylesheet" href="assets/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="blob"></div>

    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): 
        require_once 'includes/functions.php';
        $navStats = getUserMasteryStats($pdo, $_SESSION['user_id']);
    ?>
    <nav class="top-nav">
        <div class="nav-wrapper">
            <div class="nav-links">
                <?php $currentTopic = $_GET['topic'] ?? ''; ?>
                
                <a href="index.php?page=difficulty&topic=PHP" class="nav-item <?php echo $currentTopic === 'PHP' ? 'active' : ''; ?>">
                    <span class="nav-label">PHP Mastery</span>
                    <span class="nav-stat"><?php echo $navStats['PHP']['avg_percentage']; ?>%</span>
                </a>
                <a href="index.php?page=difficulty&topic=Database" class="nav-item <?php echo $currentTopic === 'Database' ? 'active' : ''; ?>">
                    <span class="nav-label">Database Mastery</span>
                    <span class="nav-stat"><?php echo $navStats['Database']['avg_percentage']; ?>%</span>
                </a>
                <a href="index.php?page=difficulty&topic=HTML_CSS" class="nav-item <?php echo $currentTopic === 'HTML_CSS' ? 'active' : ''; ?>">
                    <span class="nav-label">HTML / CSS Mastery</span>
                    <span class="nav-stat"><?php echo $navStats['HTML_CSS']['avg_percentage']; ?>%</span>
                </a>
                <a href="index.php?page=difficulty&topic=AppDev" class="nav-item <?php echo $currentTopic === 'AppDev' ? 'active' : ''; ?>">
                    <span class="nav-label">App Development</span>
                    <span class="nav-stat"><?php echo $navStats['AppDev']['avg_percentage']; ?>%</span>
                </a>
            </div>
            <div class="nav-actions">
                <a href="index.php?page=profile" class="profile-emoji" title="User Profile">👤</a>
                <a href="index.php?page=logout" class="logout-link" title="Logout">Logout</a>
            </div>
        </div>
    </nav>
    <?php endif; ?>
    <div class="container">
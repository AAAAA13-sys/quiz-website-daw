<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    header("Location: index.php");
    exit();
}

include 'partials/header.php';
?>

<h1>Quiz Catalog</h1>
<p class="subtitle">Choose your mastery path</p>

<div class="catalog-grid">
    <!-- PHP Mastery Card -->
    <a href="index.php?page=difficulty&topic=PHP" class="catalog-card">
        <div class="card-icon">📄</div>
        <div class="card-content">
            <h3>PHP Mastery</h3>
            <p>Master server-side logic, arrays, variables, and core PHP syntax.</p>
            <span class="badge">100 Questions</span>
        </div>
    </a>

    <!-- Database Mastery -->
    <a href="index.php?page=difficulty&topic=Database" class="catalog-card">
        <div class="card-icon">🗄️</div>
        <div class="card-content">
            <h3>Database Mastery</h3>
            <p>SQL queries, relational design, and database management secrets.</p>
            <span class="badge">100 Questions</span>
        </div>
    </a>

    <!-- HTML / CSS Mastery -->
    <a href="index.php?page=difficulty&topic=HTML_CSS" class="catalog-card">
        <div class="card-icon">🎨</div>
        <div class="card-content">
            <h3>HTML / CSS Mastery</h3>
            <p>Responsive design, semantic structure, and modern aesthetics.</p>
            <span class="badge">100 Questions</span>
        </div>
    </a>

    <!-- App Development -->
    <a href="index.php?page=difficulty&topic=AppDev" class="catalog-card">
        <div class="card-icon">📱</div>
        <div class="card-content">
            <h3>App Development</h3>
            <p>Native and hybrid application development fundamentals.</p>
            <span class="badge">100 Questions</span>
        </div>
    </a>
</div>

<style>
    .catalog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .catalog-card {
        background: var(--glass);
        border: 1px solid var(--glass-border);
        border-radius: 20px;
        padding: 25px;
        text-decoration: none;
        color: var(--text);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .catalog-card:hover {
        transform: translateY(-8px);
        background: rgba(255, 255, 255, 0.15);
        border-color: var(--primary);
        box-shadow: 0 15px 35px -10px rgba(99, 102, 241, 0.5);
    }

    .catalog-card.coming-soon {
        opacity: 0.6;
        cursor: not-allowed;
        filter: grayscale(0.5);
    }

    .card-icon {
        font-size: 3rem;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .catalog-card:hover .card-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .card-content h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--primary);
    }

    .card-content p {
        font-size: 0.9rem;
        color: #94a3b8;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .badge-outline {
        background: transparent;
        border: 1px solid var(--glass-border);
        color: #94a3b8;
    }
</style>

<?php include 'partials/footer.php'; ?>
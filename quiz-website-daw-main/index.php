<?php
require_once 'includes/config.php';

// --- ROUTER LOGIC ---

// 1. Handle Logout
if (isset($_GET['page']) && $_GET['page'] === 'logout') {
    include 'pages/logout.php';
    exit();
}

// 2. Auth Guard
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === false) {
    if (isset($_GET['page']) && $_GET['page'] === 'register') {
        include 'pages/register.php';
    } else {
        include 'pages/login.php';
    }
    exit();
}

// 3. Logged-in Routing
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'register': // Should redirect to index if already logged in (handled in register.php)
    case 'login':
        header("Location: index.php");
        exit();

    case 'catalog':
        include 'pages/catalog.php';
        break;

    case 'profile':
        include 'pages/profile.php';
        break;

    case 'history':
        include 'pages/history.php';
        break;

    case 'difficulty':
        include 'pages/difficulty.php';
        break;

    case 'quiz':
        // Ensure difficulty is selected
        if (!isset($_SESSION['difficulty'])) {
            header("Location: index.php?page=difficulty");
            exit();
        }
        include 'pages/quiz.php';
        break;

    case 'results':
        // Ensure quiz is done
        if (!isset($_SESSION['quiz_done'])) {
            header("Location: index.php");
            exit();
        }
        include 'pages/results.php';
        break;

    default:
        // Default Landing: Profile
        include 'pages/profile.php';
        break;
}
?>
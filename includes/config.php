<?php
/**
 * Configuration and Session Management
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Connection
require_once 'db.php';

// Constants
$max_attempts = 3;
$lockout_time = 10; // minutes

// Difficulty Settings
$difficulty_levels = ["Easy", "Medium", "Hard"];
?>

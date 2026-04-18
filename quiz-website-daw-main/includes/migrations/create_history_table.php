<?php
require_once 'includes/db.php';

$sql = "CREATE TABLE IF NOT EXISTS quiz_attempts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    topic VARCHAR(100) NOT NULL,
    difficulty VARCHAR(50) NOT NULL,
    score INT NOT NULL,
    total_questions INT NOT NULL,
    percentage DECIMAL(5,2) NOT NULL,
    remark VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)";

try {
    $pdo->exec($sql);
    echo "Table 'quiz_attempts' created successfully.";
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

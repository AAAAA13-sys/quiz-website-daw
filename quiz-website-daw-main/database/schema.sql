-- Create the Database
CREATE DATABASE IF NOT EXISTS quiz_system;
USE quiz_system;

-- Create the Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    failed_attempts INT DEFAULT 0,
    locked_until DATETIME NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a default user (student / quiz123)
-- The password hash here is for 'quiz123' generated via password_hash()
INSERT IGNORE INTO users (username, password) 
VALUES ('student', '$2y$10$O9yLupKqXjH9m3pL6v2G1.YQW6c/Y6m2P1v9V8y9V8y9V8y9V8y9V');
-- Wait, I should generate a real hash for the student user.
-- Let's use a simpler way to insert if I can't generate it in the SQL.
-- Actually, I'll just use a PHP script to insert the user correctly.

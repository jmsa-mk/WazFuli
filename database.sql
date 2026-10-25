-- Import this file in phpMyAdmin to create the database and both tables.
CREATE DATABASE IF NOT EXISTS `db_wazfuli`
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `db_wazfuli`;

-- TASK 1: User accounts. This schema is provided for the exercise.
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    `role` enum('analyst', 'manager', 'director') NOT NULL DEFAULT 'analyst',
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- TASK 2 AND 3: Each file belongs to one user through user_id.
CREATE TABLE IF NOT EXISTS `files` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `original_name` varchar(255) NOT NULL,
    `stored_name` varchar(255) NOT NULL,
    `file_size` int(11) NOT NULL,
    `file_type` varchar(50) NOT NULL,
    `uploaded_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Test accounts. The password values below are generated with PASSWORD_BCRYPT.
-- Username: manager  | Password: Manager123!
-- Username: director | Password: Director123!
-- Existing usernames or emails are skipped when this file is imported again.
INSERT IGNORE INTO `users` (`username`, `email`, `password`, `role`) VALUES
    ('manager', 'manager@wazfuli.test', '$2y$10$auaVTJyTPuLWQOv4nXHky.wP9SCyor0JnKRzcNypMFxRYJwgN8ywa', 'manager'),
    ('director', 'director@wazfuli.test', '$2y$10$p4CKq0SaQNfr2ovV1N13sOcqsr25ANlbWucIw9MqsaHjVxc17CvZK', 'director');

-- New accounts from the registration form must always have the analyst role.

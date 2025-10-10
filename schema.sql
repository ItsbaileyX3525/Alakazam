--Schema for the website
--Run this file to set up the complete database structure
--WARNING: This will DROP the existing database and ALL DATA will be lost!

DROP DATABASE IF EXISTS `Alakazam`;

--Create fresh database
CREATE DATABASE `Alakazam` 
    CHARACTER SET utf8mb4 
    COLLATE utf8mb4_unicode_ci;

USE `Alakazam`;

--Users Table
CREATE TABLE IF NOT EXISTS `users` (
    `userID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`userID`),
    INDEX `idx_username` (`username`),
    INDEX `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--Comments Table
CREATE TABLE IF NOT EXISTS `comments` (
    `comment_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `character_name` VARCHAR(100) NOT NULL,
    `user_id` INT UNSIGNED NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `comment_text` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`comment_id`),
    INDEX `idx_character_name` (`character_name`),
    INDEX `idx_user_id` (`user_id`),
    INDEX `idx_created_at` (`created_at`),
    CONSTRAINT `fk_comments_user` 
        FOREIGN KEY (`user_id`) 
        REFERENCES `users`(`userID`) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

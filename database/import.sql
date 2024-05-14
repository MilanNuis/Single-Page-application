-- Drop database if it exists
DROP DATABASE IF EXISTS deepdive;

-- Create database if it does not exist
CREATE DATABASE IF NOT EXISTS deepdive;

-- Switch to the deepdive database
USE deepdive;

-- Create categories table (if not already created)
CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255)
);

-- Create customers table
CREATE TABLE IF NOT EXISTS `customers` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(255),
  `description` TEXT,
  `email` VARCHAR(255),
  `password` VARCHAR(255),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `country` VARCHAR(255),
  `isAdmin` BOOLEAN
);

-- Create products table with foreign key reference to categories
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255),
  `price` DECIMAL(10, 2),
  `stock` INT,
  `category` INT,
  CONSTRAINT `fk_product_category` FOREIGN KEY (`category`) REFERENCES `categories` (`id`)
);

-- Create payments table
CREATE TABLE IF NOT EXISTS `payments` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `ownerId` INT,
  `paymentId` VARCHAR(255),
  FOREIGN KEY (`ownerId`) REFERENCES `customers` (`id`)
);

-- Create addresses table
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `postal` VARCHAR(255),
  `street` VARCHAR(255),
  `country` VARCHAR(255),
  `houseNumber` INT
);

-- Create orders table
CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `orderOwner` INT,
  `status` ENUM('complete', 'pending', 'cancelled'),
  `orderDate` DATE,
  `totalPrice` DECIMAL(10, 2),
  `addressInformation` INT,
  `paymentInformation` INT,
  FOREIGN KEY (`orderOwner`) REFERENCES `customers` (`id`),
  FOREIGN KEY (`addressInformation`) REFERENCES `addresses` (`id`),
  FOREIGN KEY (`paymentInformation`) REFERENCES `payments` (`id`)
);

-- Active: 1673897391206@@127.0.0.1@3306@glowguru

DROP DATABASE IF EXISTS glowguru;
CREATE DATABASE glowguru;
USE glowguru;




drop TABLE IF EXISTS `admin`;

create table admin (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);


INSERT INTO admin (username, password, email, first_name, last_name, created_at, updated_at)
VALUES
    ('admin', 'admin', 'admin@gmail.com', 'elmahdi', 'elhjuojy', '2023-01-01', '2023-01-01');


drop TABLE IF EXISTS `makeup_products`;
CREATE TABLE makeup_products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT ,
    product_name VARCHAR(255) NOT NULL,
    product_description TEXT NOT NULL,
    product_image VARCHAR(255) NOT NULL,
    product_category VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    product_price DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    product_rating DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    product_quantity INT NOT NULL DEFAULT 0
);

INSERT INTO makeup_products (product_id, product_name, product_description, product_image, product_category, brand, product_price, product_rating, product_quantity) 
VALUES
    (1, 'Lipstick', 'Matte red lipstick', 'lipstick.jpg', 'Lipstick', 'MAC', 12.99, 4.5, 100),
    (2, 'Mascara', 'Volumizing mascara', 'mascara.jpg', 'Mascara', 'LOreal', 14.99, 3.8, 50),
    (3, 'Eyeshadow', 'Neutral eyeshadow palette', 'eyeshadow.jpg', 'Eyeshadow', 'Urban Decay', 29.99, 4.7, 20),
    (4, 'Foundation', 'Full coverage foundation', 'foundation.jpg', 'Foundation', 'Estée Lauder', 34.99, 4.2, 30),
    (5, 'Blush', 'Peach blush', 'blush.jpg', 'Blush', 'Nars', 24.99, 4.9, 40),
    (6, 'Concealer', 'Full coverage concealer', 'concealer.jpg', 'Concealer', 'Tarte', 19.99, 4.1, 50),
    (7, 'Lip gloss', 'Clear lip gloss', 'lipgloss.jpg', 'Lip gloss', 'Buxom', 15.99, 3.5, 40),
    (8, 'Eyeliner', 'Black liquid eyeliner', 'eyeliner.jpg', 'Eyeliner', 'Stila', 22.99, 4.6, 20),
    (9, 'Eyebrow pencil', 'Brown eyebrow pencil', 'eyebrowpencil.jpg', 'Eyebrow pencil', 'Anastasia Beverly Hills', 18.99, 4.3, 30),
    (10, 'Setting powder', 'Translucent setting powder', 'settingpowder.jpg', 'Setting powder', 'Laura Mercier', 39.99, 4.8, 50);


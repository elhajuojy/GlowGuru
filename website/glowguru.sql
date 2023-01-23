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
    (1, 'Lipstick', 'Matte red lipstick', 'https://plus.unsplash.com/premium_photo-1661503181781-b595c001b581?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWFrZSUyMHVwJTIwdG9vbHN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60', 'Lipstick', 'MAC', 12.99, 4.5, 100),
    (2, 'Mascara', 'Volumizing mascara', 'https://images.unsplash.com/photo-1583882483713-6314403234c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bWFrZSUyMHVwJTIwdG9vbHN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60', 'Mascara', 'LOreal', 14.99, 3.8, 50),
    (3, 'Eyeshadow', 'Neutral eyeshadow palette', 'https://images.unsplash.com/photo-1617220376311-1b90accbb9e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fG1ha2UlMjB1cCUyMHRvb2xzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Eyeshadow', 'Urban Decay', 29.99, 4.7, 20),
    (4, 'Foundation', 'Full coverage foundation', 'https://plus.unsplash.com/premium_photo-1661503181781-b595c001b581?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWFrZSUyMHVwJTIwdG9vbHN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60', 'Foundation', 'Estée Lauder', 34.99, 4.2, 30),
    (5, 'Blush', 'Peach blush', 'blush.jpg', 'Blush', 'Nars', 24.99, 4.9, 40),
    (6, 'Concealer', 'Full coverage concealer', 'https://images.unsplash.com/photo-1596704017254-9b121068fb31?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fG1ha2UlMjB1cHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60', 'Concealer', 'Tarte', 19.99, 4.1, 50),
    (7, 'Lip gloss', 'Clear lip gloss', 'https://images.unsplash.com/photo-1487412912498-0447578fcca8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Lip gloss', 'Buxom', 15.99, 3.5, 40),
    (8, 'Eyeliner', 'Black liquid eyeliner', 'eyeliner.jpg', 'Eyeliner', 'Stila', 22.99, 4.6, 20),
    (9, 'Eyebrow pencil', 'Brown eyebrow pencil', 'https://images.unsplash.com/photo-1503236823255-94609f598e71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80', 'Eyebrow pencil', 'Anastasia Beverly Hills', 18.99, 4.3, 30),
    (10, 'Setting powder', 'Translucent setting powder', 'https://images.unsplash.com/photo-1631730486572-226d1f595b68?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=475&q=80', 'Setting powder', 'Laura Mercier', 39.99, 4.8, 50);


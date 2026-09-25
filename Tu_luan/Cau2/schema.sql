CREATE DATABASE IF NOT EXISTS store_db;
USE store_db;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(12,2) NOT NULL,
    quantity INT NOT NULL DEFAULT 0
);

INSERT INTO products (name, price, quantity) VALUES
('Bàn phím cơ', 550000, 15),
('Chuột không dây', 250000, 30),
('Tai nghe Bluetooth', 450000, 20),
('Màn hình 24 inch', 3200000, 5);
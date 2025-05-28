CREATE DATABASE IF NOT EXISTS snowshop 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE snowshop;

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    product VARCHAR(100) NOT NULL,
    status ENUM('new', 'processing', 'completed', 'cancelled') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX (status),
    INDEX (created_at)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image_url VARCHAR(255),
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY (name)
) ENGINE=InnoDB;

INSERT INTO products (name, description, price, category) VALUES
('All-Mountain Pro', 'Универсальный сноуборд для всех типов склонов', 35999.00, 'all-mountain'),
('Freestyle Air', 'Идеальный выбор для трюков и паркового катания', 32499.00, 'freestyle'),
('Powder Explorer', 'Специально разработан для глубокого снега', 39999.00, 'powder');

CREATE USER IF NOT EXISTS 'snowshop_user'@'localhost' IDENTIFIED BY 'secure_password_123';
GRANT ALL PRIVILEGES ON snowshop.* TO 'snowshop_user'@'localhost';
FLUSH PRIVILEGES;
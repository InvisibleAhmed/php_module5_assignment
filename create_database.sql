-- Create a new database
CREATE DATABASE IF NOT EXISTS module5;

-- Use the database
USE module5;

-- Create a table for user roles
CREATE TABLE IF NOT EXISTS user_roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL
);

-- Insert roles (admin, manager, user)
INSERT INTO user_roles (role_name) VALUES
('admin'),
('manager'),
('user');

-- Create a table for users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES user_roles(id)
);

-- Insert sample users
INSERT INTO users (username, email, password, role_id) VALUES
('admin', 'admin@gmail.com', '123', 1),
('manager', 'manager@gmail.com', '1234', 2),
('user', 'user@gmail.com', '12345', 3);

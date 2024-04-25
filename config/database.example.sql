-- Create your own database (change 'database_name' to the desired name):
CREATE DATABASE database_name;

-- Select your database (change 'database_name' to your database name):
USE DATABASE database_name;

-- Create your own users table:
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(200) NOT NULL,
    token VARCHAR(200) NOT NULL
);

-- Create your own tasks table:
CREATE TABLE tasks (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(125) NOT NULL,
    description VARCHAR(255),
    user_id INT,
    completed INT(1) DEFAULT 0,
    deleted INT(1) DEFAULT 0,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

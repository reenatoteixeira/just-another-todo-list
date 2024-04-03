-- Create your own database (change 'database_name' to the desired name):
CREATE DATABASE database_name;

-- Select your database (change 'database_name' to your database name):
USE DATABASE database_name;

-- Create your own table (change 'table_name' to the desired name):
CREATE TABLE table_name (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(125) NOT NULL,
    description VARCHAR(255),
    completed INT(1) DEFAULT 0,
    deleted INT(1) DEFAULT 0
);

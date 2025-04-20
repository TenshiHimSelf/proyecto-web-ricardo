-- Active: 1744229740805@@127.0.0.1@3306@user_db

--Requiere conexion con la base de datos para poder trabajar con este archivo


--Se necesita crear una base de datos de manera local llamada user_db 

--CREATE DATABASE user_db;

--Se necesita crear una tabla users con los siguientes parametros:
/*CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);*/


USE user_db;

SELECT * FROM users;

DELETE FROM users WHERE id =  X;--ID num;


SELECT * FROM users WHERE id = 1;--ID num;



-- Script SQL donde se guardará la información de contacto de la página personal.
-- Base de datos: information
-- Tabla: contact_form
-- 1. CREAR LA BASE DE DATOS
CREATE DATABASE IF NOT EXISTS information CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE information;

-- Crear la tabla 'contact_form'
CREATE TABLE IF NOT EXISTS contact_form (
    id_message INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(100) NOT NULL,
    sender_email VARCHAR(100) NOT NULL,
    message_content TEXT NOT NULL,
    receipt_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

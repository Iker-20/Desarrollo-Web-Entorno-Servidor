CREATE DATABASE IF NOT EXISTS alumnos_eso;

USE alumnos_eso;

CREATE TABLE IF NOT EXISTS alumnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    curso INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    contrasenia VARCHAR(100) NOT NULL
);
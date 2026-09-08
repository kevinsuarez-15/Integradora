CREATE DATABASE IF NOT EXISTS integradora;

USE integradora;

CREATE TABLE IF NOT EXISTS productos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    cantidad INT(11) NOT NULL,
    descripcion TEXT NOT NULL,
    fecha_registro DATE NOT NULL,
    PRIMARY KEY (id)
);
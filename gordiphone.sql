CREATE DATABASE gordiphone;
USE gordiphone;

CREATE TABLE productos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT(11) NOT NULL,
    descripcion TEXT,
    imagen VARCHAR(255),
    PRIMARY KEY (id)
);
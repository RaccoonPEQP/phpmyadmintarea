CREATE DATABASE registro_autos;

USE registro_autos;

CREATE TABLE AUTOMOVILES(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    marca_auto VARCHAR(10) NOT NULL,
    numero_serie VARCHAR(20) NOT NULL,
    modelo_auto VARCHAR(10) NOT NULL
);
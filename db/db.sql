DROP DATABASE IF EXISTS db_form;
CREATE DATABASE db_form;
USE db_form;
CREATE TABLE usuario(
    idusu INT,
    idemp INT (50),
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    correo VARCHAR(100),
    sexo TINYINT
);

CREATE TABLE empresa(
    idemp INT,
    nomemp VARCHAR(50),
    nit INT
);

ALTER TABLE empresa
    ADD PRIMARY KEY (idemp);

ALTER TABLE usuario
    ADD PRIMARY KEY (idusu),
    ADD KEY usuxemp (idemp);

ALTER TABLE usuario
    ADD CONSTRAINT usuxemp FOREIGN KEY (idemp) REFERENCES empresa (idemp);
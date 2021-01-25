CREATE DATABASE DB_USUARIO;

USE DB_USUARIO;

CREATE TABLE TB_USUARIO(
    id_usuario int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50),
    telefone varchar(15),
    email varchar(50)
);
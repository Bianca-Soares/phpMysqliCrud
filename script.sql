-- Host: localhost    Database: id11043282_db_usuario

-- Schema db_usuario
-- DROP SCHEMA IF EXISTS `db_usuario` ;

CREATE SCHEMA IF NOT EXISTS `id11043282_db_usuario`;

USE `id11043282_db_usuario` ;
-- -----------------------------------------------------
-- Table `tb_usuario`
-- -----------------------------------------------------
-- DROP TABLE IF EXISTS `tb_usuario` ;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(50) NOT NULL,
  `telefone` VARCHAR(16) NULL,
  `endereco` VARCHAR(120) NULL,
  PRIMARY KEY (`id_usuario`));
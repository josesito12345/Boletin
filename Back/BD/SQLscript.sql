-- MySQL Script generated by MySQL Workbench
-- Thu Nov  9 11:29:03 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema BV
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BV
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BV` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `BV` ;

-- -----------------------------------------------------
-- Table `BV`.`AC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`AC` (
  `idAC` INT NOT NULL AUTO_INCREMENT,
  `idalumno` INT NOT NULL,
  `idcurso` INT NOT NULL,
  PRIMARY KEY (`idAC`, `idalumno`, `idcurso`),
  INDEX `fk_AC_alumno1_idx` (`idalumno` ASC) VISIBLE,
  INDEX `fk_AC_curso1_idx` (`idcurso` ASC) VISIBLE,
  CONSTRAINT `fk_AC_alumno1`
    FOREIGN KEY (`idalumno`)
    REFERENCES `BV`.`alumno` (`idalumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_AC_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `BV`.`curso` (`idcurso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`ACPMC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`ACPMC` (
  `idACPMC` INT NOT NULL AUTO_INCREMENT,
  `idalumno` INT NOT NULL,
  `idcurso` INT NOT NULL,
  `idpreceptor` INT NOT NULL,
  `idmodalidad` INT NOT NULL,
  `idciclo` INT NOT NULL,
  PRIMARY KEY (`idACPMC`, `idalumno`, `idcurso`, `idpreceptor`, `idmodalidad`, `idciclo`),
  INDEX `fk_ACPMC_alumno1_idx` (`idalumno` ASC) VISIBLE,
  INDEX `fk_ACPMC_curso1_idx` (`idcurso` ASC) VISIBLE,
  INDEX `fk_ACPMC_preceptor1_idx` (`idpreceptor` ASC) VISIBLE,
  INDEX `fk_ACPMC_modalidad1_idx` (`idmodalidad` ASC) VISIBLE,
  INDEX `fk_ACPMC_ciclo_lectivo1_idx` (`idciclo` ASC) VISIBLE,
  CONSTRAINT `fk_ACPMC_alumno1`
    FOREIGN KEY (`idalumno`)
    REFERENCES `BV`.`alumno` (`idalumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `BV`.`curso` (`idcurso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_preceptor1`
    FOREIGN KEY (`idpreceptor`)
    REFERENCES `BV`.`preceptor` (`idpreceptor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_modalidad1`
    FOREIGN KEY (`idmodalidad`)
    REFERENCES `BV`.`modalidad` (`idmodalidad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_ciclo_lectivo1`
    FOREIGN KEY (`idciclo`)
    REFERENCES `BV`.`ciclo_lectivo` (`idciclo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`AP`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`AP` (
  `idAP` INT NOT NULL AUTO_INCREMENT,
  `idalumno` INT NOT NULL,
  `idpreceptor` INT NOT NULL,
  PRIMARY KEY (`idAP`, `idalumno`, `idpreceptor`),
  INDEX `fk_AP_alumno1_idx` (`idalumno` ASC) VISIBLE,
  INDEX `fk_AP_preceptor1_idx` (`idpreceptor` ASC) VISIBLE,
  CONSTRAINT `fk_AP_alumno1`
    FOREIGN KEY (`idalumno`)
    REFERENCES `BV`.`alumno` (`idalumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_AP_preceptor1`
    FOREIGN KEY (`idpreceptor`)
    REFERENCES `BV`.`preceptor` (`idpreceptor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`CA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`CA` (
  `idCA` INT NOT NULL AUTO_INCREMENT,
  `idcurso` INT NOT NULL,
  `idasignatura` INT NOT NULL,
  PRIMARY KEY (`idCA`, `idcurso`, `idasignatura`),
  INDEX `fk_CA_asignatura1_idx` (`idasignatura` ASC) VISIBLE,
  INDEX `fk_CA_curso1_idx` (`idcurso` ASC) VISIBLE,
  CONSTRAINT `fk_CA_asignatura1`
    FOREIGN KEY (`idasignatura`)
    REFERENCES `BV`.`asignatura` (`idasignatura`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CA_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `BV`.`curso` (`idcurso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`CCAMPPA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`CCAMPPA` (
  `idCCAMPPA` INT NOT NULL AUTO_INCREMENT,
  `idcalificacion` INT NOT NULL,
  `idcurso` INT NOT NULL,
  `idalumno` INT NOT NULL,
  `idmodalidad` INT NOT NULL,
  `idpreceptor` INT NOT NULL,
  `idprofesor` INT NOT NULL,
  `idasignatura` INT NOT NULL,
  PRIMARY KEY (`idCCAMPPA`, `idcalificacion`, `idcurso`, `idalumno`, `idmodalidad`, `idpreceptor`, `idprofesor`, `idasignatura`),
  INDEX `fk_CCAMPPA_calificacion1_idx` (`idcalificacion` ASC) VISIBLE,
  INDEX `fk_CCAMPPA_alumno1_idx` (`idalumno` ASC) VISIBLE,
  INDEX `fk_CCAMPPA_preceptor1_idx` (`idpreceptor` ASC) VISIBLE,
  INDEX `fk_CCAMPPA_profesor1_idx` (`idprofesor` ASC) VISIBLE,
  INDEX `fk_CCAMPPA_asignatura1_idx` (`idasignatura` ASC) VISIBLE,
  INDEX `fk_CCAMPPA_curso1_idx` (`idcurso` ASC) VISIBLE,
  INDEX `fk_CCAMPPA_modalidad1_idx` (`idmodalidad` ASC) VISIBLE,
  CONSTRAINT `fk_CCAMPPA_calificacion1`
    FOREIGN KEY (`idcalificacion`)
    REFERENCES `BV`.`calificacion` (`idcalificacion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_alumno1`
    FOREIGN KEY (`idalumno`)
    REFERENCES `BV`.`alumno` (`idalumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_preceptor1`
    FOREIGN KEY (`idpreceptor`)
    REFERENCES `BV`.`preceptor` (`idpreceptor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_profesor1`
    FOREIGN KEY (`idprofesor`)
    REFERENCES `BV`.`profesor` (`idprofesor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_asignatura1`
    FOREIGN KEY (`idasignatura`)
    REFERENCES `BV`.`asignatura` (`idasignatura`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `BV`.`curso` (`idcurso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_modalidad1`
    FOREIGN KEY (`idmodalidad`)
    REFERENCES `BV`.`modalidad` (`idmodalidad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`MC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`MC` (
  `idMC` INT NOT NULL AUTO_INCREMENT,
  `idmodalidad` INT NOT NULL,
  `idcurso` INT NOT NULL,
  PRIMARY KEY (`idMC`, `idmodalidad`, `idcurso`),
  INDEX `fk_MC_modalidad1_idx` (`idmodalidad` ASC) VISIBLE,
  INDEX `fk_MC_curso1_idx` (`idcurso` ASC) VISIBLE,
  CONSTRAINT `fk_MC_modalidad1`
    FOREIGN KEY (`idmodalidad`)
    REFERENCES `BV`.`modalidad` (`idmodalidad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_MC_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `BV`.`curso` (`idcurso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`UPPAA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`UPPAA` (
  `idUPPAA` INT NOT NULL AUTO_INCREMENT,
  `dni` INT NOT NULL,
  `idpreceptor` INT NOT NULL,
  `idprofesor` INT NOT NULL,
  `idalumno` INT NOT NULL,
  `idadministrador` INT NOT NULL,
  PRIMARY KEY (`idUPPAA`, `dni`, `idpreceptor`, `idprofesor`, `idalumno`, `idadministrador`),
  INDEX `fk_UPPAA_usuario1_idx` (`dni` ASC) VISIBLE,
  INDEX `fk_UPPAA_alumno1_idx` (`idalumno` ASC) VISIBLE,
  INDEX `fk_UPPAA_preceptor1_idx` (`idpreceptor` ASC) VISIBLE,
  INDEX `fk_UPPAA_profesor1_idx` (`idprofesor` ASC) VISIBLE,
  INDEX `fk_UPPAA_administrador1_idx` (`idadministrador` ASC) VISIBLE,
  CONSTRAINT `fk_UPPAA_usuario1`
    FOREIGN KEY (`dni`)
    REFERENCES `BV`.`usuario` (`dni`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_alumno1`
    FOREIGN KEY (`idalumno`)
    REFERENCES `BV`.`alumno` (`idalumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_preceptor1`
    FOREIGN KEY (`idpreceptor`)
    REFERENCES `BV`.`preceptor` (`idpreceptor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_profesor1`
    FOREIGN KEY (`idprofesor`)
    REFERENCES `BV`.`profesor` (`idprofesor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_administrador1`
    FOREIGN KEY (`idadministrador`)
    REFERENCES `BV`.`administrador` (`idadministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`administrador` (
  `idadministrador` INT NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(30) NOT NULL,
  `apellido` CHAR(30) NOT NULL,
  `dni` INT NOT NULL,
  `cuil` INT NOT NULL,
  PRIMARY KEY (`idadministrador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BV`.`alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`alumno` (
  `idalumno` INT NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(30) NOT NULL,
  `apellido` CHAR(30) NOT NULL,
  `dni` INT NOT NULL,
  `cuil` INT NOT NULL,
  PRIMARY KEY (`idalumno`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`asignatura` (
  `idasignatura` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idasignatura`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`calificacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`calificacion` (
  `idcalificacion` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `observacion` CHAR(100) NULL DEFAULT NULL,
  `calificacion` INT NOT NULL,
  `trimestre` CHAR(30) NOT NULL,
  PRIMARY KEY (`idcalificacion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`ciclo_lectivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`ciclo_lectivo` (
  `idciclo` INT NOT NULL,
  `fecha_ini` DATE NOT NULL,
  `fecha_fin` DATE NOT NULL,
  PRIMARY KEY (`idciclo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`curso` (
  `idcurso` INT NOT NULL AUTO_INCREMENT,
  `año` INT NOT NULL,
  `division` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idcurso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`modalidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`modalidad` (
  `idmodalidad` INT NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(150) NOT NULL,
  PRIMARY KEY (`idmodalidad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`preceptor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`preceptor` (
  `idpreceptor` INT NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(30) NOT NULL,
  `apellido` CHAR(30) NOT NULL,
  `dni` INT NOT NULL,
  `cuil` INT NOT NULL,
  PRIMARY KEY (`idpreceptor`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BV`.`profesor` (
  `idprofesor` INT NOT NULL AUTO_INCREMENT,
  `nombre` CHAR(30) NOT NULL,
  `apellido` CHAR(30) NOT NULL,
  `dni` INT NOT NULL,
  `cuil` INT NOT NULL,
  PRIMARY KEY (`idprofesor`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `BV`.`usuario`
-- -----------------------------------------------------
/*
CREATE TABLE IF NOT EXISTS `BV`.`usuario` (
  `dni` INT NOT NULL,
  `contraseña` VARCHAR(15) NOT NULL,
  `nombre` CHAR(30) NOT NULL,
  `email` VARCHAR(60) NULL,
  `telefono` INT NULL,
  `permiso` CHAR(45) NOT NULL,
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE,
  PRIMARY KEY (`dni`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;
*/
CREATE TABLE IF NOT EXISTS `BV`.`usuario` (
  `dni` INT NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `nombre` CHAR(30) NOT NULL,
  `email` VARCHAR(60) NULL,
  `telefono` INT NULL,
  `permiso` INT NOT NULL,
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE,
  PRIMARY KEY (`dni`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

CREATE DATABASE  IF NOT EXISTS `bv` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bv`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bv
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ac`
--

DROP TABLE IF EXISTS `ac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ac` (
  `idAC` int NOT NULL AUTO_INCREMENT,
  `idalumno` int NOT NULL,
  `idcurso` int NOT NULL,
  PRIMARY KEY (`idAC`,`idalumno`,`idcurso`),
  KEY `fk_AC_alumno1_idx` (`idalumno`),
  KEY `fk_AC_curso1_idx` (`idcurso`),
  CONSTRAINT `fk_AC_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_AC_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ac`
--

LOCK TABLES `ac` WRITE;
/*!40000 ALTER TABLE `ac` DISABLE KEYS */;
/*!40000 ALTER TABLE `ac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acpmc`
--

DROP TABLE IF EXISTS `acpmc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acpmc` (
  `idACPMC` int NOT NULL AUTO_INCREMENT,
  `idalumno` int NOT NULL,
  `idcurso` int NOT NULL,
  `idpreceptor` int NOT NULL,
  `idmodalidad` int NOT NULL,
  `idciclo` int NOT NULL,
  PRIMARY KEY (`idACPMC`,`idalumno`,`idcurso`,`idpreceptor`,`idmodalidad`,`idciclo`),
  KEY `fk_ACPMC_alumno1_idx` (`idalumno`),
  KEY `fk_ACPMC_curso1_idx` (`idcurso`),
  KEY `fk_ACPMC_preceptor1_idx` (`idpreceptor`),
  KEY `fk_ACPMC_modalidad1_idx` (`idmodalidad`),
  KEY `fk_ACPMC_ciclo_lectivo1_idx` (`idciclo`),
  CONSTRAINT `fk_ACPMC_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_ciclo_lectivo1` FOREIGN KEY (`idciclo`) REFERENCES `ciclo_lectivo` (`idciclo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_modalidad1` FOREIGN KEY (`idmodalidad`) REFERENCES `modalidad` (`idmodalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ACPMC_preceptor1` FOREIGN KEY (`idpreceptor`) REFERENCES `preceptor` (`idpreceptor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acpmc`
--

LOCK TABLES `acpmc` WRITE;
/*!40000 ALTER TABLE `acpmc` DISABLE KEYS */;
/*!40000 ALTER TABLE `acpmc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrador` (
  `idadministrador` int NOT NULL AUTO_INCREMENT,
  `nombre` char(30) NOT NULL,
  `apellido` char(30) NOT NULL,
  `dni` int NOT NULL,
  `cuil` int NOT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno` (
  `idalumno` int NOT NULL AUTO_INCREMENT,
  `nombre` char(30) NOT NULL,
  `apellido` char(30) NOT NULL,
  `dni` int NOT NULL,
  `cuil` int NOT NULL,
  PRIMARY KEY (`idalumno`),
  UNIQUE KEY `dni_UNIQUE` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ap`
--

DROP TABLE IF EXISTS `ap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ap` (
  `idAP` int NOT NULL AUTO_INCREMENT,
  `idalumno` int NOT NULL,
  `idpreceptor` int NOT NULL,
  PRIMARY KEY (`idAP`,`idalumno`,`idpreceptor`),
  KEY `fk_AP_alumno1_idx` (`idalumno`),
  KEY `fk_AP_preceptor1_idx` (`idpreceptor`),
  CONSTRAINT `fk_AP_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_AP_preceptor1` FOREIGN KEY (`idpreceptor`) REFERENCES `preceptor` (`idpreceptor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ap`
--

LOCK TABLES `ap` WRITE;
/*!40000 ALTER TABLE `ap` DISABLE KEYS */;
/*!40000 ALTER TABLE `ap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignatura` (
  `idasignatura` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idasignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca`
--

DROP TABLE IF EXISTS `ca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ca` (
  `idCA` int NOT NULL AUTO_INCREMENT,
  `idcurso` int NOT NULL,
  `idasignatura` int NOT NULL,
  PRIMARY KEY (`idCA`,`idcurso`,`idasignatura`),
  KEY `fk_CA_asignatura1_idx` (`idasignatura`),
  KEY `fk_CA_curso1_idx` (`idcurso`),
  CONSTRAINT `fk_CA_asignatura1` FOREIGN KEY (`idasignatura`) REFERENCES `asignatura` (`idasignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CA_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca`
--

LOCK TABLES `ca` WRITE;
/*!40000 ALTER TABLE `ca` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificacion`
--

DROP TABLE IF EXISTS `calificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calificacion` (
  `idcalificacion` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `observacion` char(100) DEFAULT NULL,
  `calificacion` int NOT NULL,
  `trimestre` char(30) NOT NULL,
  PRIMARY KEY (`idcalificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificacion`
--

LOCK TABLES `calificacion` WRITE;
/*!40000 ALTER TABLE `calificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `calificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ccamppa`
--

DROP TABLE IF EXISTS `ccamppa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ccamppa` (
  `idCCAMPPA` int NOT NULL AUTO_INCREMENT,
  `idcalificacion` int NOT NULL,
  `idcurso` int NOT NULL,
  `idalumno` int NOT NULL,
  `idmodalidad` int NOT NULL,
  `idpreceptor` int NOT NULL,
  `idprofesor` int NOT NULL,
  `idasignatura` int NOT NULL,
  PRIMARY KEY (`idCCAMPPA`,`idcalificacion`,`idcurso`,`idalumno`,`idmodalidad`,`idpreceptor`,`idprofesor`,`idasignatura`),
  KEY `fk_CCAMPPA_calificacion1_idx` (`idcalificacion`),
  KEY `fk_CCAMPPA_alumno1_idx` (`idalumno`),
  KEY `fk_CCAMPPA_preceptor1_idx` (`idpreceptor`),
  KEY `fk_CCAMPPA_profesor1_idx` (`idprofesor`),
  KEY `fk_CCAMPPA_asignatura1_idx` (`idasignatura`),
  KEY `fk_CCAMPPA_curso1_idx` (`idcurso`),
  KEY `fk_CCAMPPA_modalidad1_idx` (`idmodalidad`),
  CONSTRAINT `fk_CCAMPPA_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_asignatura1` FOREIGN KEY (`idasignatura`) REFERENCES `asignatura` (`idasignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_calificacion1` FOREIGN KEY (`idcalificacion`) REFERENCES `calificacion` (`idcalificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_modalidad1` FOREIGN KEY (`idmodalidad`) REFERENCES `modalidad` (`idmodalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_preceptor1` FOREIGN KEY (`idpreceptor`) REFERENCES `preceptor` (`idpreceptor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_CCAMPPA_profesor1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccamppa`
--

LOCK TABLES `ccamppa` WRITE;
/*!40000 ALTER TABLE `ccamppa` DISABLE KEYS */;
/*!40000 ALTER TABLE `ccamppa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciclo_lectivo`
--

DROP TABLE IF EXISTS `ciclo_lectivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ciclo_lectivo` (
  `idciclo` int NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`idciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciclo_lectivo`
--

LOCK TABLES `ciclo_lectivo` WRITE;
/*!40000 ALTER TABLE `ciclo_lectivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciclo_lectivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curso` (
  `idcurso` int NOT NULL AUTO_INCREMENT,
  `año` int NOT NULL,
  `division` varchar(20) NOT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mc`
--

DROP TABLE IF EXISTS `mc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mc` (
  `idMC` int NOT NULL AUTO_INCREMENT,
  `idmodalidad` int NOT NULL,
  `idcurso` int NOT NULL,
  PRIMARY KEY (`idMC`,`idmodalidad`,`idcurso`),
  KEY `fk_MC_modalidad1_idx` (`idmodalidad`),
  KEY `fk_MC_curso1_idx` (`idcurso`),
  CONSTRAINT `fk_MC_curso1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_MC_modalidad1` FOREIGN KEY (`idmodalidad`) REFERENCES `modalidad` (`idmodalidad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mc`
--

LOCK TABLES `mc` WRITE;
/*!40000 ALTER TABLE `mc` DISABLE KEYS */;
/*!40000 ALTER TABLE `mc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidad`
--

DROP TABLE IF EXISTS `modalidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modalidad` (
  `idmodalidad` int NOT NULL AUTO_INCREMENT,
  `nombre` char(150) NOT NULL,
  PRIMARY KEY (`idmodalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidad`
--

LOCK TABLES `modalidad` WRITE;
/*!40000 ALTER TABLE `modalidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `modalidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preceptor`
--

DROP TABLE IF EXISTS `preceptor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preceptor` (
  `idpreceptor` int NOT NULL AUTO_INCREMENT,
  `nombre` char(30) NOT NULL,
  `apellido` char(30) NOT NULL,
  `dni` int NOT NULL,
  `cuil` int NOT NULL,
  PRIMARY KEY (`idpreceptor`),
  UNIQUE KEY `dni_UNIQUE` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preceptor`
--

LOCK TABLES `preceptor` WRITE;
/*!40000 ALTER TABLE `preceptor` DISABLE KEYS */;
/*!40000 ALTER TABLE `preceptor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor` (
  `idprofesor` int NOT NULL AUTO_INCREMENT,
  `nombre` char(30) NOT NULL,
  `apellido` char(30) NOT NULL,
  `dni` int NOT NULL,
  `cuil` int NOT NULL,
  PRIMARY KEY (`idprofesor`),
  UNIQUE KEY `dni_UNIQUE` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uppaa`
--

DROP TABLE IF EXISTS `uppaa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uppaa` (
  `idUPPAA` int NOT NULL AUTO_INCREMENT,
  `dni` int NOT NULL,
  `idpreceptor` int NOT NULL,
  `idprofesor` int NOT NULL,
  `idalumno` int NOT NULL,
  `idadministrador` int NOT NULL,
  PRIMARY KEY (`idUPPAA`,`dni`,`idpreceptor`,`idprofesor`,`idalumno`,`idadministrador`),
  KEY `fk_UPPAA_usuario1_idx` (`dni`),
  KEY `fk_UPPAA_alumno1_idx` (`idalumno`),
  KEY `fk_UPPAA_preceptor1_idx` (`idpreceptor`),
  KEY `fk_UPPAA_profesor1_idx` (`idprofesor`),
  KEY `fk_UPPAA_administrador1_idx` (`idadministrador`),
  CONSTRAINT `fk_UPPAA_administrador1` FOREIGN KEY (`idadministrador`) REFERENCES `administrador` (`idadministrador`),
  CONSTRAINT `fk_UPPAA_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_preceptor1` FOREIGN KEY (`idpreceptor`) REFERENCES `preceptor` (`idpreceptor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_profesor1` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_UPPAA_usuario1` FOREIGN KEY (`dni`) REFERENCES `usuario` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uppaa`
--

LOCK TABLES `uppaa` WRITE;
/*!40000 ALTER TABLE `uppaa` DISABLE KEYS */;
/*!40000 ALTER TABLE `uppaa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `dni` int NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `nombre` char(30) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `permiso` char(45) NOT NULL,
  PRIMARY KEY (`dni`),
  UNIQUE KEY `dni_UNIQUE` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (20,'holamundo','jose','josegoras.22@gmail.com',3757,'alumno'),(46239170,'lkmfsdfsdfsdf','jose','josegoras22gmailcom',3757,'alumno');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-09 23:02:06

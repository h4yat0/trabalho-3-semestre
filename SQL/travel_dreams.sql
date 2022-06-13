CREATE DATABASE  IF NOT EXISTS `travel_dreams` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `travel_dreams`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: travel_dreams
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `cep` varchar(255) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data_cadastro` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_cliente_usuario_idx` (`usuario_id`),
  CONSTRAINT `fk_cliente_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compra` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `passsagem_codigo` int NOT NULL,
  `id_usuario` int NOT NULL,
  `info_compra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_compra_passsagem1_idx` (`passsagem_codigo`),
  KEY `fk_compra_usuario1_idx` (`id_usuario`) USING BTREE,
  CONSTRAINT `fk_compra_cliente1` FOREIGN KEY (`id_usuario`) REFERENCES `cliente` (`codigo`),
  CONSTRAINT `fk_compra_passsagem1` FOREIGN KEY (`passsagem_codigo`) REFERENCES `passsagem` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_chegada`
--

DROP TABLE IF EXISTS `info_chegada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_chegada` (
  `passsagem_codigo` int NOT NULL,
  `data_chegada` varchar(20) DEFAULT NULL,
  `hora_chegada` varchar(45) DEFAULT NULL,
  `local_chegada` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`passsagem_codigo`),
  CONSTRAINT `fk_info_chegada_passsagem1` FOREIGN KEY (`passsagem_codigo`) REFERENCES `passsagem` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_chegada`
--

LOCK TABLES `info_chegada` WRITE;
/*!40000 ALTER TABLE `info_chegada` DISABLE KEYS */;
/*!40000 ALTER TABLE `info_chegada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_compra`
--

DROP TABLE IF EXISTS `info_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_compra` (
  `data_compra` varchar(20) NOT NULL,
  `hora_compra` varchar(45) NOT NULL,
  `compra_codigo` int NOT NULL,
  PRIMARY KEY (`compra_codigo`),
  CONSTRAINT `fk_info_compra_compra1` FOREIGN KEY (`compra_codigo`) REFERENCES `compra` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_compra`
--

LOCK TABLES `info_compra` WRITE;
/*!40000 ALTER TABLE `info_compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `info_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_partida`
--

DROP TABLE IF EXISTS `info_partida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_partida` (
  `passsagem_codigo` int NOT NULL,
  `data_pardita` varchar(20) DEFAULT NULL,
  `hora_partida` varchar(45) DEFAULT NULL,
  `local_partida` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`passsagem_codigo`),
  CONSTRAINT `fk_info_partida_passsagem1` FOREIGN KEY (`passsagem_codigo`) REFERENCES `passsagem` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_partida`
--

LOCK TABLES `info_partida` WRITE;
/*!40000 ALTER TABLE `info_partida` DISABLE KEYS */;
/*!40000 ALTER TABLE `info_partida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passsagem`
--

DROP TABLE IF EXISTS `passsagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `passsagem` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `info_partida` varchar(45) DEFAULT NULL,
  `info_chegada` varchar(45) DEFAULT NULL,
  `companhia_aerea` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `tipo_passagem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passsagem`
--

LOCK TABLES `passsagem` WRITE;
/*!40000 ALTER TABLE `passsagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `passsagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa_fisica`
--

DROP TABLE IF EXISTS `pessoa_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa_fisica` (
  `cliente_codigo` int NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nome_completo` varchar(255) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `rg` varchar(9) DEFAULT NULL,
  `data_nascimento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cliente_codigo`),
  CONSTRAINT `fk_pessoa_fisica_cliente1` FOREIGN KEY (`cliente_codigo`) REFERENCES `cliente` (`codigo`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa_fisica`
--

LOCK TABLES `pessoa_fisica` WRITE;
/*!40000 ALTER TABLE `pessoa_fisica` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa_juridica`
--

DROP TABLE IF EXISTS `pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa_juridica` (
  `cliente_codigo` int NOT NULL,
  `razao_social` varchar(255) DEFAULT NULL,
  `nome_empresa` varchar(255) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`cliente_codigo`),
  CONSTRAINT `fk_pessoa_juridica_cliente1` FOREIGN KEY (`cliente_codigo`) REFERENCES `cliente` (`codigo`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa_juridica`
--

LOCK TABLES `pessoa_juridica` WRITE;
/*!40000 ALTER TABLE `pessoa_juridica` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoa_juridica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'travel_dreams'
--

--
-- Dumping routines for database 'travel_dreams'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-13  8:35:43

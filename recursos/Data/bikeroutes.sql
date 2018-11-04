-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.23 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bikeroutes
CREATE DATABASE IF NOT EXISTS `bikeroutes` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bikeroutes`;

-- Volcando estructura para tabla bikeroutes.amigos
CREATE TABLE IF NOT EXISTS `amigos` (
  `IdAmigo` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(45) DEFAULT NULL,
  `IdGrupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdAmigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.amigos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `amigos` DISABLE KEYS */;
/*!40000 ALTER TABLE `amigos` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.bicicleta
CREATE TABLE IF NOT EXISTS `bicicleta` (
  `IdBicicleta` int(11) NOT NULL AUTO_INCREMENT,
  `Talla` varchar(45) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdBicicleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.bicicleta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `bicicleta` DISABLE KEYS */;
/*!40000 ALTER TABLE `bicicleta` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.chat
CREATE TABLE IF NOT EXISTS `chat` (
  `IdChat` int(11) NOT NULL AUTO_INCREMENT,
  `Mensaje` varchar(45) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdAmigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdChat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.chat: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `Ciudad` varchar(45) DEFAULT NULL,
  `IdDepartamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCiudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.ciudad: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.departamento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.grupo
CREATE TABLE IF NOT EXISTS `grupo` (
  `IdGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` varchar(45) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `FechaCreacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.grupo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.grupo_puntoencuentro
CREATE TABLE IF NOT EXISTS `grupo_puntoencuentro` (
  `IdGrupoPuntoEncuentro` int(11) NOT NULL AUTO_INCREMENT,
  `IdGrupo` int(11) DEFAULT NULL,
  `IdPuntoEncuentro` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdGrupoPuntoEncuentro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.grupo_puntoencuentro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_puntoencuentro` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo_puntoencuentro` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.logro
CREATE TABLE IF NOT EXISTS `logro` (
  `IdLogro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Nivel` varchar(45) DEFAULT NULL,
  `PracticaDeportiva_idPracticadeportiva` int(11) DEFAULT NULL,
  `Ruta_IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdLogro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.logro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `logro` DISABLE KEYS */;
/*!40000 ALTER TABLE `logro` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.mapa
CREATE TABLE IF NOT EXISTS `mapa` (
  `IdRuta` int(11) NOT NULL AUTO_INCREMENT,
  `Latitud` varchar(45) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Altitud` varchar(45) DEFAULT NULL,
  `RutaExistente_IdRuta` int(11) DEFAULT NULL,
  `Cordenadas` varchar(45) DEFAULT NULL,
  `Longitud` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdRuta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.mapa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mapa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapa` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.muro
CREATE TABLE IF NOT EXISTS `muro` (
  `IdMuro` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime DEFAULT NULL,
  `Foto` varchar(145) DEFAULT NULL,
  `IdRuta` int(11) DEFAULT NULL,
  `IdTiempoRecorrido` int(11) DEFAULT NULL,
  `Comentario` varchar(100) DEFAULT NULL,
  `IdLogro` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdMuro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.muro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `muro` DISABLE KEYS */;
/*!40000 ALTER TABLE `muro` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.practicadeportiva
CREATE TABLE IF NOT EXISTS `practicadeportiva` (
  `idPracticadeportiva` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `FechaRegistro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPracticadeportiva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.practicadeportiva: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `practicadeportiva` DISABLE KEYS */;
/*!40000 ALTER TABLE `practicadeportiva` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.puntoencuentro
CREATE TABLE IF NOT EXISTS `puntoencuentro` (
  `IdPuntoEncuentro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Mapa_IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdPuntoEncuentro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.puntoencuentro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `puntoencuentro` DISABLE KEYS */;
/*!40000 ALTER TABLE `puntoencuentro` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.ruta
CREATE TABLE IF NOT EXISTS `ruta` (
  `IdRuta` int(11) NOT NULL AUTO_INCREMENT,
  `PuntoPartida` varchar(45) DEFAULT NULL,
  `PuntoFinal` varchar(45) DEFAULT NULL,
  `Distancia` varchar(45) DEFAULT NULL,
  `FechaRegistro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdRuta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.ruta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ruta` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruta` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.rutaexistente
CREATE TABLE IF NOT EXISTS `rutaexistente` (
  `IdRuta` int(11) NOT NULL AUTO_INCREMENT,
  `PuntoPartida` varchar(45) DEFAULT NULL,
  `PuntoFinal` varchar(45) DEFAULT NULL,
  `Distancia` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Ruta_IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdRuta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.rutaexistente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rutaexistente` DISABLE KEYS */;
/*!40000 ALTER TABLE `rutaexistente` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.tiemporecorrido
CREATE TABLE IF NOT EXISTS `tiemporecorrido` (
  `IdTiempoRecorrido` int(11) NOT NULL AUTO_INCREMENT,
  `FechaRegistro` timestamp NULL DEFAULT NULL,
  `FechaRecorrido` datetime DEFAULT NULL,
  `IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTiempoRecorrido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.tiemporecorrido: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tiemporecorrido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiemporecorrido` ENABLE KEYS */;

-- Volcando estructura para tabla bikeroutes.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Estatura` int(11) DEFAULT NULL,
  `Peso` varchar(45) DEFAULT NULL,
  `AceptaTerminos` tinyint(1) DEFAULT '0',
  `UsuarioActivo` tinyint(1) DEFAULT '0',
  `IdCiudad` int(11) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `IdBicicleta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bikeroutes.usuario: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Alias`, `Contrasena`, `FechaNacimiento`, `Estatura`, `Peso`, `AceptaTerminos`, `UsuarioActivo`, `IdCiudad`, `IdCategoria`, `IdBicicleta`) VALUES
	(1, NULL, NULL, 'zuyto@zuyto.co', NULL, 'Zuyto', '1234', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
	(2, NULL, NULL, 'prueba@prueba.com', NULL, 'Prueba', '1234', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

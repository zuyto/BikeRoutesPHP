-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-11-2018 a las 22:02:21
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bikeroutes`
--
CREATE DATABASE IF NOT EXISTS `bikeroutes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bikeroutes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE IF NOT EXISTS `amigos` (
  `IdAmigo` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(45) DEFAULT NULL,
  `IdGrupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdAmigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `amigos`
--

TRUNCATE TABLE `amigos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicicleta`
--

DROP TABLE IF EXISTS `bicicleta`;
CREATE TABLE IF NOT EXISTS `bicicleta` (
  `IdBicicleta` int(11) NOT NULL AUTO_INCREMENT,
  `Talla` varchar(45) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdBicicleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `bicicleta`
--

TRUNCATE TABLE `bicicleta`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `categoria`
--

TRUNCATE TABLE `categoria`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `IdChat` int(11) NOT NULL AUTO_INCREMENT,
  `Mensaje` varchar(45) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdAmigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdChat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `chat`
--

TRUNCATE TABLE `chat`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `Ciudad` varchar(45) DEFAULT NULL,
  `IdDepartamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCiudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `ciudad`
--

TRUNCATE TABLE `ciudad`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `departamento`
--

TRUNCATE TABLE `departamento`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `IdGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` varchar(45) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `FechaCreacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `grupo`
--

TRUNCATE TABLE `grupo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_puntoencuentro`
--

DROP TABLE IF EXISTS `grupo_puntoencuentro`;
CREATE TABLE IF NOT EXISTS `grupo_puntoencuentro` (
  `IdGrupoPuntoEncuentro` int(11) NOT NULL AUTO_INCREMENT,
  `IdGrupo` int(11) DEFAULT NULL,
  `IdPuntoEncuentro` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdGrupoPuntoEncuentro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `grupo_puntoencuentro`
--

TRUNCATE TABLE `grupo_puntoencuentro`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

DROP TABLE IF EXISTS `logro`;
CREATE TABLE IF NOT EXISTS `logro` (
  `IdLogro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Nivel` varchar(45) DEFAULT NULL,
  `PracticaDeportiva_idPracticadeportiva` int(11) DEFAULT NULL,
  `Ruta_IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdLogro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `logro`
--

TRUNCATE TABLE `logro`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

DROP TABLE IF EXISTS `mapa`;
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

--
-- Truncar tablas antes de insertar `mapa`
--

TRUNCATE TABLE `mapa`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muro`
--

DROP TABLE IF EXISTS `muro`;
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

--
-- Truncar tablas antes de insertar `muro`
--

TRUNCATE TABLE `muro`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practicadeportiva`
--

DROP TABLE IF EXISTS `practicadeportiva`;
CREATE TABLE IF NOT EXISTS `practicadeportiva` (
  `idPracticadeportiva` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `FechaRegistro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPracticadeportiva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `practicadeportiva`
--

TRUNCATE TABLE `practicadeportiva`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntoencuentro`
--

DROP TABLE IF EXISTS `puntoencuentro`;
CREATE TABLE IF NOT EXISTS `puntoencuentro` (
  `IdPuntoEncuentro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Mapa_IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdPuntoEncuentro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `puntoencuentro`
--

TRUNCATE TABLE `puntoencuentro`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

DROP TABLE IF EXISTS `ruta`;
CREATE TABLE IF NOT EXISTS `ruta` (
  `IdRuta` int(11) NOT NULL AUTO_INCREMENT,
  `PuntoPartida` varchar(45) DEFAULT NULL,
  `PuntoFinal` varchar(45) DEFAULT NULL,
  `Distancia` varchar(45) DEFAULT NULL,
  `FechaRegistro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdRuta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `ruta`
--

TRUNCATE TABLE `ruta`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutaexistente`
--

DROP TABLE IF EXISTS `rutaexistente`;
CREATE TABLE IF NOT EXISTS `rutaexistente` (
  `IdRuta` int(11) NOT NULL AUTO_INCREMENT,
  `PuntoPartida` varchar(45) DEFAULT NULL,
  `PuntoFinal` varchar(45) DEFAULT NULL,
  `Distancia` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Ruta_IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdRuta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `rutaexistente`
--

TRUNCATE TABLE `rutaexistente`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiemporecorrido`
--

DROP TABLE IF EXISTS `tiemporecorrido`;
CREATE TABLE IF NOT EXISTS `tiemporecorrido` (
  `IdTiempoRecorrido` int(11) NOT NULL AUTO_INCREMENT,
  `FechaRegistro` timestamp NULL DEFAULT NULL,
  `FechaRecorrido` datetime DEFAULT NULL,
  `IdRuta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTiempoRecorrido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tiemporecorrido`
--

TRUNCATE TABLE `tiemporecorrido`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Alias`, `Contrasena`, `FechaNacimiento`, `Estatura`, `Peso`, `AceptaTerminos`, `UsuarioActivo`, `IdCiudad`, `IdCategoria`, `IdBicicleta`) VALUES
(1, NULL, NULL, 'zuyto@zuyto.co', NULL, 'Zuyto', '1234', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(2, NULL, NULL, 'prueba@prueba.com', NULL, 'Prueba', '1234', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(3, NULL, NULL, 'mauro@mauro.com', NULL, 'mauro', '1234', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

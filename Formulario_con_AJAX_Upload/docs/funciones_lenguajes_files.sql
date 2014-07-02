-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2014 a las 05:42:17
-- Versión del servidor: 5.5.25
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tutos_cazaresluis_2014`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones_lenguajes_files`
--

CREATE TABLE `funciones_lenguajes_files` (
  `id_lista` int(11) NOT NULL AUTO_INCREMENT,
  `lista_lenguaje` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del lenguaje',
  `lista_funcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la función',
  `lista_descripcion` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Breve descripción de la función',
  `lista_tips` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Tips sobre el uso de la función',
  `lista_archivo` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del archivo',
  PRIMARY KEY (`id_lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Lista de funciones de programación web' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

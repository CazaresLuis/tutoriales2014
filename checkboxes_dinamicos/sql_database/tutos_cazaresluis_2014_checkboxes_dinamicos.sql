-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-07-2014 a las 07:19:55
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `ajax_checkboxes`
--

CREATE TABLE `ajax_checkboxes` (
  `id_registro` smallint(2) NOT NULL AUTO_INCREMENT COMMENT 'id de producto',
  `registro_nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del producto',
  `registro_inv` int(3) NOT NULL COMMENT 'inventario',
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabla de productos' AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ajax_checkboxes`
--

INSERT INTO `ajax_checkboxes` (`id_registro`, `registro_nombre`, `registro_inv`) VALUES
(1, 'Fechas dinámicas con jQuery datepicker', 100),
(2, 'Formulario con AJAX Upload, PHP y MySQL', 45),
(3, 'Formulario dinámico jQuery con AJAX y PHP', 5),
(4, 'WordPress donde comprar plantillas y recursos para sitios web', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_checkboxes`
--

CREATE TABLE `lista_checkboxes` (
  `id_lista` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='lista de platicas';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

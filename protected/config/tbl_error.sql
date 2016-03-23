-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2016 a las 13:36:04
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bagoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_error`
--

CREATE TABLE IF NOT EXISTS `tbl_error` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(3) NOT NULL,
  `idoma` varchar(4) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_error`
--

INSERT INTO `tbl_error` (`id`, `codigo`, `idoma`, `texto`) VALUES
(1, 404, 'es', 'Recurso no encontrado'),
(2, 404, 'pt', 'O recurso requisitado não foi encontrado'),
(3, 404, 'en', 'The requested resource could not be found');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

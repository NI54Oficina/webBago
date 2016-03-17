-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-03-2016 a las 14:48:32
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
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE IF NOT EXISTS `tbl_pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(130) NOT NULL,
  `icon` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `short` varchar(2) NOT NULL,
  `lng` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` (`id`, `nombre`, `icon`, `url`, `short`, `lng`) VALUES
(1, 'Argentina', 0, 'argentina', 'ar', 'es'),
(2, 'Brasil', 0, 'brasil', 'br', 'pt'),
(5, 'Bolivia', 0, 'Bolivia', 'bo', 'es'),
(6, 'México', 0, 'Mxico', 'mx', 'es'),
(7, 'Uruguay', 0, 'Uruguay', 'uy', 'es'),
(8, 'General', 0, 'General', '##', 'es'),
(9, 'USA', 0, 'USA', 'us', 'en');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

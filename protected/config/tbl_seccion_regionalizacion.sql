-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2016 a las 16:33:17
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bagoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_seccion_regionalizacion`
--

CREATE TABLE `tbl_seccion_regionalizacion` (
  `id` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `pais` int(11) NOT NULL,
  `nombre` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_seccion_regionalizacion`
--

INSERT INTO `tbl_seccion_regionalizacion` (`id`, `idCategoria`, `pais`, `nombre`) VALUES
(6, 2, 2, 'Biológicos'),
(7, 1, 2, 'Aftosa'),
(8, 3, 2, 'Antiparasitários externos'),
(9, 4, 2, 'Antiparasitários internos'),
(10, 5, 2, 'Endectocidas'),
(11, 6, 2, 'Antibióticos'),
(12, 7, 2, 'Reprodutivos'),
(13, 8, 2, 'Vitamínicos e minerais'),
(14, 1, 7, 'Aftosa'),
(15, 1, 9, 'Foot and Mouth Disease'),
(16, 2, 9, 'Biologicals'),
(17, 4, 9, 'Endoparasiticides'),
(18, 3, 9, 'Ectoparasiticides'),
(19, 5, 9, 'Endectocides'),
(20, 6, 9, 'Antibiotics'),
(21, 7, 9, 'Reproductive'),
(22, 8, 9, 'Vitamins and Minerals'),
(23, 9, 9, 'Pharmaceutical'),
(24, 10, 9, 'Environmental Health'),
(25, 11, 2, 'Nutrição'),
(26, 10, 2, 'Saúde Ambiental');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_seccion_regionalizacion`
--
ALTER TABLE `tbl_seccion_regionalizacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_seccion_regionalizacion`
--
ALTER TABLE `tbl_seccion_regionalizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

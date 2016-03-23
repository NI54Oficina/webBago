-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2016 a las 14:05:13
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
-- Estructura de tabla para la tabla `tbl_revista`
--

CREATE TABLE IF NOT EXISTS `tbl_revista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `bajada` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `tbl_revista`
--

INSERT INTO `tbl_revista` (`id`, `numero`, `fecha`, `titulo`, `bajada`) VALUES
(1, 30, '0000-00-00', 'MOLINO 30: Bien preparados', 'Un plan recomendado por especialistas para evitar o dismunuir pérdidas cuando las lluvias intensas llegan al campo. Guías y ...'),
(2, 29, '0000-00-00', 'MOLINO 29: Protagonistas del cambio', 'En este número especial conozca el rol que asumen los veterinarios frente a las oportunidades de mejorar los índices ...'),
(3, 28, '0000-00-00', 'MOLINO 28: El desafío de llegar a la Frontera Productiva', 'Conozca las últimas novedades y tendencias en nuestro especial "Fronteras Productivas"'),
(4, 27, '0000-00-00', 'MOLINO 27', 'El desafío Chino'),
(5, 26, '0000-00-00', 'MOLINO 26 - Cría Bovina', 'El primer eslabón de la cadena ganadera tiene mucho que mejorar en cuestión de eficiencia productiva. Los países del Cono ...'),
(6, 25, '0000-00-00', 'MOLINO 25 - Las razas del futuro', 'BRANGUS Y BRAFORD SE AFIANZAN EN EL NORTE ARGENTINO Y CRECEN EXPONENCIALMENTE EN PARAGUAY, URUGUAY Y BRASIL.POR SUS ...'),
(7, 24, '0000-00-00', 'MOLINO 24 - Combustible para la Carne', 'El auge de los biocombustibles generó inversiones para lograr etanol a partir de maíz. \nEn este proceso también se obtiene ...'),
(8, 23, '0000-00-00', 'MOLINO 23 - Un escenario heterogeneo', 'La lechería en el Mercosur atraviesa un buen momento,aunque con diferencias en el resultado para los productores de acuerdo ...'),
(9, 22, '0000-00-00', 'MOLINO 22- GANADERÍA Buen tiempo para invertir ', 'Momento ideal para proyectar el futuro y prepararse para el despegue.'),
(10, 21, '0000-00-00', 'MOLINO 21 - GANADERÍA. LA POTENCIA DE LA REGIÓN', 'Productores ganaderos del Mercosur apuestan por una producción sustentable para responder a la importante demanda mundial de ...'),
(11, 20, '0000-00-00', 'MOLINO 20-GANADERÍA. EL PULMÓN DE TODO UN PUEBLO ', 'En la ciudad bonaerense de Rauch, esta actividad es la columna vertebral que determina la fisonomía económico-social de la ...'),
(12, 19, '0000-00-00', 'MOLINO 19 - Dieta y alimentación. Nos vamos para arriba', 'No se puede faenar animales de menos de 300 kilos. Habrá que diseñar nuevas estrategias para lograrlo de una manera ...'),
(13, 18, '0000-00-00', 'MOLINO 18 - Terneros. La cría resentida', 'Luego de tres años de sequía, los productores buscan las alternativas para lograr más terneros y aumentar la oferta de ...'),
(14, 17, '0000-00-00', 'MOLINO 17 - Pensar en verde. Producción agropecuaria, sociedad y ambiente', 'Conceptos básicos para diseñar un desarrollo sustenteble. Porque lo que es malo para la producción también lo es para el ...'),
(15, 16, '0000-00-00', 'MOLINO 16 - Estrés calórico. Escapándole al rayo de sol ', 'Llegan las temperaturas altas y el tambo puede empezar a perder productividad. Aquí ofrecemos recomendaciones para mantener ...'),
(16, 15, '0000-00-00', 'MOLINO 15 - Ante el avance de la agricultura. Ganaderia por ambientes', 'Los productores de punta ya ponen en práctica este manejo que les permite diferenciar cargas y prever la producción ...'),
(17, 0, '0000-00-00', 'Soluciones ante la sequía. Como pasar el invierno', 'Importantes referentes de la actividad ganadera describen cómo afecta la falta de forraje y evalúan qué hacer para llegar ...'),
(18, 0, '0000-00-00', 'Nuevos productos contra los parásitos externos ', 'Los parásitos externos siguen siendo el gran desafío de la ciencia veterinaria, aún cuando algunos descubrimientos ...'),
(19, 0, '0000-00-00', 'Técnicas para feedlot. A destetar se ha dicho', 'En un esquema afinado al máximo, un feedlot desteta sistemáticamente 3.500 terneros en el año. Hacen ciclo completo y estan ...'),
(20, 0, '0000-00-00', 'Una opción rentable. Cría bovina intensiva ', 'Detalles y recomendaciones de este sistema que esta logrando buenos márgenes en La Pampa Húmeda y ahora busca la adaptación ...'),
(21, 0, '0000-00-00', 'Un sector clásico. Se viene los ovinos ', 'La cría de ovejas comenzó a crecer. Sin embargo, todavía se necesita orientar la producción a una demanda más exigente. ...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
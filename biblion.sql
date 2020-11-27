-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-11-2020 a las 22:34:01
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Autor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Editorial` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` year(4) NOT NULL,
  `ISBN` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID`, `Autor`, `Titulo`, `Editorial`, `Fecha`, `ISBN`, `Genero`, `Descripcion`) VALUES
(48, 'Gianni Rodari', 'Las aventuras de Pinocho', 'Ediciones del Laberinto S. L, 2012.', 1974, '9788484836223', 'Cuentos Infantiles', 'Este álbum ilustrado es el homenaje que Gianni Rodari quiso hacerle a uno de los personajes más célebres de la literatura mundial. Fiel al texto original y a las secuencias narrativas, Gianni Rodari crea un largo poema rimado en pareados para acercar a los lectores más jóvenes la obra maestra de Carlo Collodi y fascinar con ella a los más grandes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Nivel` varchar(13) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Usuario',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Correo`, `Sexo`, `Password`, `Nivel`) VALUES
(1, 'fygtjuhdrtf', 'dgfhjfghj', 'sdfrhgsd@gmail.com', 'Femenino', 'Paco', 'Usuario'),
(2, 'Jacob', 'Díaz', 'jacob.diaz@alumnos.udg.mx', 'Maculino', 'Paco', 'Administrador'),
(9, 'sdf', 'dsf', 'correo@gmail.com', 'Femenino', 'qwert', 'Administrador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

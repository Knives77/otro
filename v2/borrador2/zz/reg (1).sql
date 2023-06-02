-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2023 a las 16:51:57
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `z`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg`
--

CREATE TABLE `reg` (
  `número` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `telefono_fijo` int(13) NOT NULL,
  `telefono_movil` bigint(10) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero_int` varchar(5) NOT NULL,
  `numero_ext` varchar(5) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `numero_de_targeta` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reg`
--

INSERT INTO `reg` (`número`, `nombre`, `apellido`, `edad`, `genero`, `telefono_fijo`, `telefono_movil`, `calle`, `numero_int`, `numero_ext`, `colonia`, `localidad`, `municipio`, `estado`, `pais`, `correo`, `password`, `numero_de_targeta`) VALUES
(1, 'knives', '77', 18, 'mayonesa', 448123123, 448123123, 'insanos', '69', 'S/N', 'Aña´s', 'Aña city', 'Potaxio', 'Nachos', 'Tacoland', 'knives77@knives.com', '123123123', 123456789101112),
(2, 'Vincent', 'Law', 18, 'proxy', 1, 1, 'cupula', '', '', 'cupula', 'cupula', 'cupula', 'cupula', '??', 'p@77.com', '122222222', 1234567891234567);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`número`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reg`
--
ALTER TABLE `reg`
  MODIFY `número` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

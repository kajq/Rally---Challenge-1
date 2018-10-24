-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2018 a las 04:23:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rallyunodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `codigo` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `codigo`, `nombre`) VALUES
(0, 111, 'PRINCIPIOS DE PROGRAMACIÓN '),
(1, 112, 'FUNDAMENTOS DE INFORMÁTICA '),
(2, 113, 'MATEMÁTICAS DISCRETAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_carrera`
--

CREATE TABLE `estudiante_carrera` (
  `id_estudiante` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante_carrera`
--
ALTER TABLE `estudiante_carrera`
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante_carrera`
--
ALTER TABLE `estudiante_carrera`
  ADD CONSTRAINT `estudiante_carrera_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id`),
  ADD CONSTRAINT `estudiante_carrera_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

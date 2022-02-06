-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2022 a las 21:26:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sga_belgrano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumat`
--

CREATE TABLE `alumat` (
  `alumat_id` int(11) NOT NULL,
  `alumat_alu_dni` int(11) NOT NULL,
  `alumat_mat_cod` int(11) NOT NULL,
  `alumat_notas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `alu_dni` int(11) NOT NULL,
  `alu_nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `alu_apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`alu_dni`, `alu_nombre`, `alu_apellido`) VALUES
(12345678, 'Juani', 'Foyt'),
(15333791, 'Cachi', 'Moyano'),
(16222796, 'Daniel', 'Soloa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `mat_cod` int(11) NOT NULL,
  `mat_nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mat_prof_dni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `prof_dni` int(11) NOT NULL,
  `prof_nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prof_apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prof_titulo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumat`
--
ALTER TABLE `alumat`
  ADD PRIMARY KEY (`alumat_id`),
  ADD KEY `alumat_alu_dni` (`alumat_alu_dni`),
  ADD KEY `alumat_mat_cod` (`alumat_mat_cod`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`alu_dni`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`mat_cod`),
  ADD KEY `mat_prof_dni` (`mat_prof_dni`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`prof_dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumat`
--
ALTER TABLE `alumat`
  MODIFY `alumat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `alu_dni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16222797;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumat`
--
ALTER TABLE `alumat`
  ADD CONSTRAINT `alumat_ibfk_1` FOREIGN KEY (`alumat_alu_dni`) REFERENCES `alumnos` (`alu_dni`),
  ADD CONSTRAINT `alumat_ibfk_2` FOREIGN KEY (`alumat_mat_cod`) REFERENCES `materias` (`mat_cod`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`mat_prof_dni`) REFERENCES `profesor` (`prof_dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

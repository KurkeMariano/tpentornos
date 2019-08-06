-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-08-2019 a las 02:37:18
-- Versión del servidor: 10.3.16-MariaDB
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
-- Base de datos: `id10250668_trabajopractico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumentos`
--

CREATE TABLE `instrumentos` (
  `id_instrumento` int(11) NOT NULL,
  `instrumento` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` time NOT NULL,
  `profesor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instrumentos`
--

INSERT INTO `instrumentos` (`id_instrumento`, `instrumento`, `turno`, `horario`, `profesor`, `profesor_id`) VALUES
(1, 'Guitarra', 'M', '11:30:00', 'Checok Maria', 1),
(1, 'Guitarra', 'T', '15:30:00', 'Checok Maria', 1),
(1, 'Guitarra', 'N', '19:30:00', 'Checok Maria', 1),
(2, 'Bajo', 'M', '11:00:00', 'Suarez Pedro', 2),
(2, 'Bajo', 'T', '15:00:00', 'Suarez Pedro', 2),
(2, 'Bajo', 'N', '19:00:00', 'Suarez Pedro', 2),
(3, 'Bateria', 'M', '10:00:00', 'Ruiz Esteban', 3),
(3, 'Bateria', 'T', '14:00:00', 'Ruiz Esteban', 3),
(3, 'Bateria', 'N', '18:00:00', 'Ruiz Esteban', 3),
(4, 'Chelo', 'M', '10:00:00', 'Garcia Jose', 4),
(4, 'Chelo', 'T', '14:00:00', 'Garcia Jose', 4),
(4, 'Chelo', 'N', '18:00:00', 'Garcia Jose', 4),
(5, 'Flauta', 'M', '10:30:00', 'Lara Sofia', 5),
(5, 'Flauta', 'T', '14:30:00', 'Lara Sofia', 5),
(5, 'Flauta', 'N', '18:30:00', 'Lara Sofia', 5),
(6, 'Piano', 'M', '09:30:00', 'Tigliatti Javier', 6),
(6, 'Piano', 'T', '13:30:00', 'Tigliatti Javier', 6),
(6, 'Piano', 'N', '17:00:00', 'Tigliatti Javier', 6),
(7, 'Saxo', 'M', '09:30:00', 'De las Nieves Maria', 7),
(7, 'Saxo', 'T', '13:30:00', 'De las Nieves Maria', 7),
(7, 'Saxo', 'N', '17:00:00', 'De las Nieves Maria', 7),
(8, 'Violin', 'M', '11:30:00', 'Medina Jorge', 8),
(8, 'Violin', 'T', '15:30:00', 'Medina Jorge', 8),
(8, 'Violin', 'N', '17:00:00', 'Medina Jorge', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` bigint(5) NOT NULL,
  `materia` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_anio` int(11) NOT NULL,
  `turno` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profesor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `materia`, `id_anio`, `turno`, `profesor`, `dias`, `horario`) VALUES
(1, 'Lenguaje 1', 1, 'M', 'Tigliatti, Javier', 'Lun y Mar', '11:30:00'),
(2, 'Lenguaje 2', 2, 'M', 'de las nieves, maria', 'Lun y Vier', '11:00:00'),
(3, 'Lenguaje 3', 3, 'M', 'suarez, pedro', 'Mar y Jue', '10:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_alumno`
--

CREATE TABLE `materias_alumno` (
  `materia` varchar(20) NOT NULL,
  `profesor` varchar(20) NOT NULL,
  `alumno` varchar(30) DEFAULT NULL,
  `dias` varchar(20) NOT NULL,
  `horario` time NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias_alumno`
--

INSERT INTO `materias_alumno` (`materia`, `profesor`, `alumno`, `dias`, `horario`, `id_alumno`, `id_materia`) VALUES
('Lenguaje 1', 'tigliatti, javier', 'kurke, mariano', 'Lun y Mar', '11:30:00', 37701493, 1),
('Lenguaje 1', 'tigliatti, javier', 'moroni, milena', 'Lun y Mar', '11:30:00', 36136113, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` smallint(2) NOT NULL,
  `provincia_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `provincia_nombre`) VALUES
(1, 'Buenos Aires'),
(2, 'Capital Federal'),
(3, 'Catamarca'),
(4, 'Chaco'),
(5, 'Chubut'),
(6, 'Cordoba'),
(7, 'Corrientes'),
(8, 'Entre Rios'),
(9, 'Formosa'),
(10, 'Jujuy'),
(11, 'La Pampa'),
(12, 'La Rioja'),
(13, 'Mendoza'),
(14, 'Misiones'),
(15, 'Neuquen'),
(16, 'Rio Negro'),
(17, 'Salta'),
(18, 'San Juan'),
(19, 'San Luis'),
(20, 'Santa Cruz'),
(21, 'Santa Fe'),
(22, 'Santiago del Estero'),
(23, 'Tierra del Fuego'),
(24, 'Tucuman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `tipo_usuario` int(1) NOT NULL,
  `desc_usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DNI` bigint(9) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` bigint(30) NOT NULL,
  `provincia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `piso` int(2) DEFAULT NULL,
  `dpto` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instrumento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date DEFAULT NULL,
  `activo` int(1) NOT NULL,
  `nota_parcial` int(11) DEFAULT NULL,
  `nota_final` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`tipo_usuario`, `desc_usuario`, `DNI`, `usuario`, `password`, `nombre`, `apellido`, `fecha_nacimiento`, `mail`, `telefono`, `provincia`, `ciudad`, `direccion`, `piso`, `dpto`, `instrumento`, `fecha_ingreso`, `fecha_egreso`, `activo`, `nota_parcial`, `nota_final`) VALUES
(0, 'admin', 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'mariano', 'kurke', '1994-10-13', 'mek1994@hotmail.com', 3412739108, 'Santa Fe', 'Rosario', 'Santa Fe 1111', 8, 'D', '', '2019-08-04', '0000-00-00', 1, 0, 0),
(1, 'alumno', 37701493, 'kurkemariano493', '981f74c3ee98bef79c78f2338535696a', 'mariano', 'kurke', '1994-10-13', 'mek1994@hotmail.com', 3412739108, 'Santa Fe', 'Rosario', 'Santa Fe 1111', 8, 'D', 'Bateria', '2019-08-04', '0000-00-00', 1, 0, 0),
(1, 'alumno', 36136113, 'moronimilena113', '40b38d75d12b5f7ff2219b7526e9ae7f', 'milena', 'moroni', '1994-08-19', 'moroni-milena@hotmail.com', 3416487256, 'Santa Fe', 'Rosario', 'Pellegrini 1111', 3, 'B', 'Violin', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 11111111, 'suarezpedro111', '93b16f52e9c46519ca083bfc3cdf0b88', 'pedro', 'suarez', '1994-08-19', 'suarez-pedro@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 1111', 3, 'B', 'Bajo', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 22222222, 'ruizesteban222', '244b8cb8372837138f03906d41e9af55', 'esteban', 'ruiz', '1994-08-19', 'ruiz-esteban@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 2222', 3, 'B', 'Bateria', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 33333333, 'garciajose333', 'bde8cf9b606ed0c4cb2164a576f14d13', 'jose', 'garcia', '1994-08-19', 'garcia-jose@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 3333', 3, 'B', 'Chelo', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 44444444, 'checokmaria444', '4ee2c18dba61a55aef273145b261c24c', 'maria', 'checok', '1994-08-19', 'checok-maria@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 4444', 3, 'B', 'Guitarra', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 55555555, 'larasofia555', '85491951cd91d50e3b74e5a67c7eb239', 'sofia', 'lara', '1994-08-19', 'checok-maria@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 5555', 3, 'B', 'Flauta', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 66666666, 'tigliattijavier666', '4397462aafec5c0e76c09d3712e4417a', 'javier', 'tigliatti', '1994-08-19', 'tigliatti-javier@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 6666', 3, 'B', 'Piano', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 77777777, 'delasnievesmaria777', 'ae23a9682d4058bbb8453c5f3cc2d55f', 'maria', 'de las nieves', '1994-08-19', 'tigliatti-javier@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 7777', 3, 'B', 'Saxo', '2019-08-04', '0000-00-00', 1, 0, 0),
(2, 'docente', 88888888, 'medinajorge888', '7d3818baa2c17c8b3fdc0b2582932552', 'jorge', 'medina', '1994-08-19', 'tigliatti-javier@hotmail.com', 341254585, 'Santa Fe', 'Rosario', 'Salta 8888', 3, 'B', 'Violin', '2019-08-04', '0000-00-00', 1, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

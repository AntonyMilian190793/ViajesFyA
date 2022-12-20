-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 22:14:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viajesfya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE `colegios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`id`, `nombre`) VALUES
(1, 'Fe y Alegría 1 - Lima - San Martín de Porres'),
(2, 'Fe y Alegría 2 - Lima - San Martín de Porres'),
(3, 'Fe y Alegría 3 - Lima - San Juan de Miraflores'),
(4, 'Fe y Alegría 4 - Lima - San Juan de Lurigancho'),
(5, 'Fe y Alegría 5 - Lima - San Juan de Lurigancho'),
(6, 'Fe y Alegría 6 - Lima - San Martín de Porres'),
(7, 'Fe y Alegría 7 - Lima - Comas'),
(8, 'Fe y Alegría 8 - Lima - Comas'),
(9, 'Fe y Alegría 9 - Lima - Comas'),
(10, 'Fe y Alegría 10 - Lima - Comas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`) VALUES
(1, 'Directivos'),
(2, 'EPTT'),
(5, 'Logística'),
(7, 'EBR Urbano - EBR Rural'),
(8, 'EBA'),
(9, 'Contabilidad'),
(10, 'Sistemas'),
(11, 'Recursos Humanos'),
(12, 'Legal'),
(13, 'Recaudo y Voluntariado'),
(18, 'Proyectos'),
(19, 'FyA Digítal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE `directivos` (
  `id` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `documento` text NOT NULL,
  `foto` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `sexo` text NOT NULL,
  `horarioE` time NOT NULL,
  `horarioS` time NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`id`, `id_consulta`, `apellido`, `nombre`, `documento`, `foto`, `usuario`, `clave`, `sexo`, `horarioE`, `horarioS`, `rol`) VALUES
(2, 1, 'Cavassa', 'Ernesto', '90909991', 'Vistas/img/Padres/Pad-199.png', 'ecavassa', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(29, 10, 'Verano', 'Jhony', '21223455', '', 'jverano', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(30, 9, 'Guevara', 'Carlos', '12344567', '', 'cguevara', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(31, 11, 'Vargas', 'Julia', '7033122', '', 'jvargas', '123', 'Femenino', '08:00:00', '23:00:00', 'Directivo'),
(32, 5, 'Alania', 'Angela', '12098611', '', 'aalania', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(34, 12, 'Acero Cáceres', 'Katheryn', '23123455', '', 'kacero', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(39, 2, 'Alencastre', 'Ava', '87112333', '', 'aalencastre', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(40, 8, 'Arana', 'Alicia', '78733211', '', 'aarana', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(41, 13, 'Tapia', 'Edgar', '98171122', '', 'etapia', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(42, 18, 'Caminada', 'Nancy', '17612311', '', 'ncaminada', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(43, 19, 'Reque', 'Gladys', '98711233', '', 'greque', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(44, 7, 'Helfer', 'Susana', '87611221', '', 'shelfer', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `intro` text NOT NULL,
  `horaE` time NOT NULL,
  `horaS` time NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `direccion` text NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `intro`, `horaE`, `horaS`, `telefono`, `correo`, `direccion`, `logo`, `favicon`) VALUES
(1, 'antony', '00:00:00', '00:00:00', '993753004', 'jmilian@feyalegria.org.pe', 'Jirón Cahuide 884 - Jesús María', 'Vistas/img/logo.jpeg', 'Vistas/img/favicon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefesarea`
--

CREATE TABLE `jefesarea` (
  `id` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `documento` text NOT NULL,
  `foto` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `rol` text NOT NULL,
  `sexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefesarea`
--

INSERT INTO `jefesarea` (`id`, `id_consulta`, `apellido`, `nombre`, `documento`, `foto`, `usuario`, `clave`, `rol`, `sexo`) VALUES
(1, 1, 'Quijaite', 'Víctor', '98716111', 'Vistas/img/Administracion/administracion115.png', 'vquijaite', '123', 'JefeArea', 'Masculino'),
(2, 2, 'Morelli ', 'Oscar', '0987122', '', 'omorelli', '123', 'JefeArea', 'Masculino'),
(7, 7, 'Alencastre ', 'Ava', '09871122', '', 'aalencastre', '123', 'JefeArea', 'Femenino'),
(8, 8, 'Piñeyro ', 'Javier', '0987112', '', 'jpineyro', '123', 'JefeArea', 'Masculino'),
(9, 9, 'Guevara', 'Carlos', '0987611', '', 'cguevara', '123', 'JefeArea', 'Masculino'),
(10, 10, 'Verano', 'Jhony', '89765122', '', 'jverano', '123', 'JefeArea', 'Masculino'),
(11, 11, 'Vargas', ' Julia', '0987122', '', 'jvargas', '123', 'JefeArea', 'Femenino'),
(12, 12, 'Acero', 'Katheryn', '70511233', '', 'kacero', '123', 'JefeArea', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logistica`
--

CREATE TABLE `logistica` (
  `id` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `documento` text NOT NULL,
  `apellido` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL,
  `sexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logistica`
--

INSERT INTO `logistica` (`id`, `id_consulta`, `usuario`, `clave`, `nombre`, `documento`, `apellido`, `foto`, `rol`, `sexo`) VALUES
(15, 1, 'aalania', '123', 'Angela', '70541233', 'Alania', 'Vistas/img/Otros/O-55.jpg', 'Logistica', 'Femino'),
(20, 1, 'jvargas', '123', 'Julia', '68726221', 'Vargas', '', 'Logistica', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otrostrabajadores`
--

CREATE TABLE `otrostrabajadores` (
  `id` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `documento` text NOT NULL,
  `foto` text NOT NULL,
  `usuario` text NOT NULL,
  `sexo` text NOT NULL,
  `clave` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `otrostrabajadores`
--

INSERT INTO `otrostrabajadores` (`id`, `id_consulta`, `apellido`, `nombre`, `documento`, `foto`, `usuario`, `sexo`, `clave`, `rol`) VALUES
(1, 10, 'Milian Montalvo', 'Jorge Antony', '70311233', '', 'jmilian', 'Masculino', '123', 'otrosTrabajadores'),
(35, 9, 'Chávez', 'Fabiola', '70431211', '', 'fchavez', 'Femenino', '123', 'otrosTrabajadores'),
(36, 10, 'Verano', 'Jhony', '89765122', '', 'jverano', 'Masculino', '123', 'otrosTrabajadores'),
(37, 1, 'Dirección de Gestión', 'P.Nino', '87611233', '', 'svasquez', 'Femenino', '123', 'otrosTrabajadores'),
(38, 1, 'Directora de Planificación', 'Susana Helfer', '87611233', '', 'shelfer', 'Femenino', '123', 'otrosTrabajadores'),
(39, 1, 'Administrador', 'Víctor Quijaite', '87611233', '', 'vquijaite', 'Masculino', '123', 'otrosTrabajadores'),
(40, 1, 'Directora de Propuesta Pedagogíca', 'Mirella Uehara', '98711233', '', 'mhuehara', 'Femenino', '123', 'otrosTrabajadores'),
(41, 1, 'Secretario General', 'P. Oscar', '98711244', '', 'omorelli', 'Femenino', '123', 'otrosTrabajadores'),
(42, 1, 'Coordinador de Identidad y Misión', 'P. Javier', '98711233', '', 'jquiros', 'Femenino', '123', 'otrosTrabajadores'),
(43, 1, 'Coordinadora de Cominiación e Incidencia', 'Hísela Culqui', '87661122', '', 'hculqui', 'Femenino', '123', 'otrosTrabajadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `documento` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `id_consulta`, `usuario`, `clave`, `nombre`, `apellido`, `documento`, `foto`, `rol`) VALUES
(1, 10, 'jmilian', '123', 'Jorge Antony', 'Milian Montalvo', '70311233', 'Vistas/img/Sistemas/Sis-432.jpg.jpg', 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `id_administracion` int(11) NOT NULL,
  `nyaP` text NOT NULL,
  `documento` text NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id`, `id_padre`, `id_consulta`, `id_administracion`, `nyaP`, `documento`, `inicio`, `fin`, `comentario`) VALUES
(19, 2, 1, 5, 'Jorge Milian', '70311233', '2022-07-19 13:00:00', '2022-07-19 14:00:00', ''),
(20, 2, 1, 5, 'Jorge Milian', '70311233', '2022-07-20 13:00:00', '2022-07-20 14:00:00', ''),
(21, 2, 1, 5, 'Jorge Milian', '70311233', '2022-07-18 13:00:00', '2022-07-18 14:00:00', ''),
(22, 2, 1, 5, 'Jorge Milian', '70311233', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(39, 2, 1, 5, 'Jorge Milian', '70311233', '2022-07-20 05:00:00', '2022-07-20 06:00:00', ''),
(40, 2, 1, 1, 'Víctor Quijaite', '98716111', '2022-07-20 10:00:00', '2022-07-20 11:00:00', ''),
(41, 2, 1, 5, 'Jorge Milian', '70311233', '2022-07-21 13:00:00', '2022-07-21 14:00:00', ''),
(42, 2, 1, 0, 'Milian Jorge', '70311233', '2022-07-25 14:00:00', '2022-07-25 15:00:00', ''),
(43, 2, 1, 0, 'Víctor Quijaite', '70311233', '2022-07-26 14:00:00', '2022-07-26 15:00:00', ''),
(44, 2, 1, 6, 'Jhony Verano', '7011233', '2022-07-27 14:00:00', '2022-07-27 15:00:00', ''),
(64, 2, 1, 6, 'Jhony Verano', '7011233', '2022-08-03 16:00:00', '2022-08-03 17:00:00', ''),
(67, 2, 1, 0, 'Katheryn Acero', '', '2022-07-28 14:00:00', '2022-07-28 15:00:00', ''),
(68, 2, 1, 0, 'Hanns Esquivel', '', '2022-07-29 14:00:00', '2022-07-29 15:00:00', ''),
(71, 2, 1, 0, 'Katheryn Acero', '', '2022-07-25 21:00:00', '2022-07-25 22:00:00', ''),
(72, 16, 8, 1, 'Víctor Quijaite', '98716111', '2022-08-01 12:00:00', '2022-08-01 13:00:00', ''),
(74, 2, 1, 0, 'Jorge Milian', '', '2022-08-03 04:00:00', '2022-08-03 05:00:00', ''),
(75, 2, 1, 0, 'Jhony Verano', '', '2022-08-04 03:00:00', '2022-08-04 04:00:00', ''),
(76, 2, 1, 1, 'Víctor Quijaite', '98716111', '2022-08-04 09:00:00', '2022-08-04 10:00:00', ''),
(77, 2, 1, 9, 'Angela Alania', '7033122', '2022-08-04 16:00:00', '2022-08-04 17:00:00', ''),
(91, 19, 11, 1, 'Víctor Quijaite', '98716111', '2022-08-02 10:00:00', '2022-08-02 11:00:00', ''),
(92, 22, 13, 1, 'Víctor Quijaite', '98716111', '2022-08-04 23:00:00', '0000-00-00 00:00:00', ''),
(93, 2, 1, 0, 'Angela Alania', '', '2022-08-05 16:00:00', '2022-08-05 17:00:00', ''),
(94, 2, 1, 0, 'Trabajador...', '', '2022-08-05 23:00:00', '0000-00-00 00:00:00', ''),
(96, 17, 10, 0, 'Jorge Milian', '', '2022-08-05 10:00:00', '2022-08-05 11:00:00', ''),
(98, 2, 1, 2, 'Ernesto Cavassa ', '', '2022-08-08 12:00:00', '2022-08-08 13:00:00', ''),
(99, 0, 0, 5, 'Jorge Milian', '70311233', '2022-08-09 13:00:00', '2022-08-09 14:00:00', ''),
(100, 0, 0, 5, 'Jorge Milian', '70311233', '2022-08-09 08:00:00', '2022-08-09 09:00:00', ''),
(101, 15, 9, 0, 'Jorge Milian', '', '2022-08-09 08:00:00', '2022-08-09 09:00:00', ''),
(102, 2, 1, 2, 'Ernesto Cavassa ', '', '2022-08-09 15:00:00', '2022-08-09 16:00:00', ''),
(103, 6, 1, 15, 'Angela Alania', '', '2022-08-09 19:00:00', '2022-08-09 20:00:00', ''),
(104, 19, 11, 15, 'Angela Alania', '', '2022-08-09 19:00:00', '2022-08-09 20:00:00', ''),
(105, 3, 1, 15, 'Angela Alania', '', '2022-08-25 10:00:00', '2022-08-25 11:00:00', ''),
(106, 2, 1, 2, 'Ernesto Cavassa ', '', '2022-08-25 06:00:00', '2022-08-25 07:00:00', ''),
(107, 30, 9, 2, 'Ernesto Cavassa ', '', '2022-08-25 09:00:00', '2022-08-25 10:00:00', ''),
(108, 2, 1, 1, 'Víctor Quijaite', '98716111', '2022-08-25 08:00:00', '2022-08-25 09:00:00', ''),
(109, 2, 1, 0, 'Trabajador...', '', '2022-08-25 10:00:00', '2022-08-25 11:00:00', ''),
(110, 2, 1, 0, 'Víctor Quijaite', '', '2022-08-25 11:00:00', '2022-08-25 12:00:00', ''),
(111, 29, 10, 2, 'Ernesto Cavassa ', '', '2022-08-25 15:00:00', '2022-08-25 16:00:00', ''),
(112, 29, 10, 2, 'Ernesto Cavassa ', '', '2022-08-25 15:00:00', '2022-08-25 16:00:00', ''),
(113, 0, 0, 0, 'Trabajador...', '', '2022-08-25 03:00:00', '2022-08-25 04:00:00', ''),
(114, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-25 15:00:00', '2022-08-25 16:00:00', ''),
(115, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-24 07:00:00', '2022-08-24 08:00:00', ''),
(116, 0, 0, 0, 'Trabajador...', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(117, 2, 1, 15, 'Angela Alania', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(118, 2, 1, 15, 'Angela Alania', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(119, 2, 1, 15, 'Angela Alania', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(120, 2, 1, 15, 'Angela Alania', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(121, 2, 1, 0, 'Víctor Quijaite', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(122, 2, 1, 0, 'Víctor Quijaite', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(123, 2, 1, 0, 'Víctor Quijaite', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(124, 2, 1, 0, 'Jhony Verano', '', '2022-08-27 11:00:00', '2022-08-27 12:00:00', ''),
(125, 2, 1, 0, 'Víctor Quijaite', '', '2022-08-27 19:00:00', '2022-08-27 20:00:00', ''),
(126, 2, 1, 0, 'Víctor Quijaite', '', '2022-08-27 19:00:00', '2022-08-27 20:00:00', ''),
(127, 2, 1, 0, 'Jhony Verano', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(128, 2, 1, 0, 'Víctor Quijaite', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(129, 2, 1, 0, 'Víctor Quijaite', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(130, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-25 07:00:00', '2022-08-25 08:00:00', ''),
(131, 30, 9, 2, 'Ernesto Cavassa ', '', '2022-08-25 18:00:00', '2022-08-25 19:00:00', ''),
(132, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-23 14:00:00', '2022-08-23 15:00:00', ''),
(133, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-27 14:00:00', '2022-08-27 15:00:00', ''),
(134, 2, 1, 15, 'Angela Alania', '', '2022-08-25 15:00:00', '2022-08-25 16:00:00', ''),
(135, 2, 1, 15, 'Angela Alania', '', '2022-08-25 17:00:00', '2022-08-25 18:00:00', ''),
(136, 2, 1, 15, 'Angela Alania', '', '2022-08-25 12:00:00', '2022-08-25 13:00:00', ''),
(137, 0, 0, 0, 'Trabajador...', '', '2022-08-27 20:00:00', '2022-08-27 21:00:00', ''),
(138, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-27 10:00:00', '2022-08-27 11:00:00', ''),
(139, 2, 1, 11, 'Jhony Verano', '89765122', '2022-08-24 08:00:00', '2022-08-24 09:00:00', ''),
(140, 11, 10, 0, 'Víctor Quijaite', '', '2022-08-26 16:00:00', '2022-08-26 17:00:00', ''),
(141, 11, 10, 0, 'Jhony Verano', '', '2022-08-27 19:00:00', '2022-08-27 20:00:00', ''),
(142, 11, 10, 0, 'Jhony Verano', '', '2022-08-27 19:00:00', '2022-08-27 20:00:00', ''),
(143, 11, 10, 0, 'Trabajador...', '', '2022-08-27 10:00:00', '2022-08-27 11:00:00', ''),
(144, 11, 10, 0, 'Trabajador...', '', '2022-08-27 15:00:00', '2022-08-27 16:00:00', ''),
(145, 11, 10, 0, 'Víctor Quijaite', '', '2022-08-23 16:00:00', '2022-08-23 17:00:00', ''),
(146, 29, 10, 2, 'Ernesto Cavassa ', '', '2022-08-27 15:00:00', '2022-08-27 16:00:00', ''),
(147, 11, 10, 0, 'Maria Portilla', '', '2022-08-27 15:00:00', '2022-08-27 16:00:00', ''),
(156, 32, 0, 2, 'Ernesto Cavassa ', '', '2022-08-30 07:00:00', '2022-08-30 08:00:00', ''),
(157, 1, 1, 0, 'Katheryn Acero', '', '2022-08-29 06:00:00', '2022-08-29 07:00:00', ''),
(158, 1, 1, 0, 'Katheryn Acero', '', '2022-08-29 06:00:00', '2022-08-29 07:00:00', ''),
(159, 1, 1, 0, 'Trabajador...', '', '2022-08-29 00:00:00', '2022-08-29 01:00:00', ''),
(160, 1, 1, 0, 'Trabajador...', '', '2022-08-29 00:00:00', '2022-08-29 01:00:00', ''),
(161, 2, 1, 0, 'Katheryn Acero', '', '2022-08-29 00:00:00', '2022-08-29 01:00:00', ''),
(162, 2, 1, 0, 'Trabajador...', '', '2022-08-29 04:00:00', '2022-08-29 05:00:00', ''),
(163, 2, 1, 0, 'Katheryn Acero', '', '2022-08-29 05:00:00', '2022-08-29 06:00:00', ''),
(164, 11, 10, 0, 'Trabajador...', '', '2022-09-01 07:00:00', '2022-09-01 08:00:00', ''),
(165, 11, 10, 0, 'Trabajador...', '', '2022-09-01 07:00:00', '2022-09-01 08:00:00', ''),
(166, 2, 1, 0, 'Jorge Antony Milian Montalvo', '', '2022-08-29 07:00:00', '2022-08-29 08:00:00', ''),
(167, 2, 1, 0, 'Jorge Antony Milian Montalvo', '', '2022-08-29 07:00:00', '2022-08-29 08:00:00', ''),
(168, 2, 0, 15, 'Angela Alania', '', '2022-08-31 00:00:00', '2022-08-31 01:00:00', ''),
(169, 2, 0, 15, 'Angela Alania', '', '2022-08-29 15:00:00', '2022-08-29 16:00:00', ''),
(170, 29, 0, 15, 'Angela Alania', '', '2022-08-29 13:00:00', '2022-08-29 14:00:00', ''),
(171, 0, 0, 0, 'Trabajador...', '', '2022-09-04 01:00:00', '2022-09-04 02:00:00', ''),
(172, 29, 0, 15, 'Angela Alania', '', '2022-09-01 13:00:00', '2022-09-01 14:00:00', ''),
(173, 29, 0, 15, 'Angela Alania', '', '2022-09-01 14:00:00', '2022-09-01 15:00:00', ''),
(174, 29, 0, 15, 'Angela Alania', '', '2022-09-01 19:00:00', '2022-09-01 20:00:00', ''),
(184, 11, 10, 0, 'Trabajador...', '', '2022-08-31 10:00:00', '2022-08-31 11:00:00', ''),
(185, 11, 10, 0, 'Trabajador...', '', '2022-08-31 10:00:00', '2022-08-31 11:00:00', ''),
(186, 0, 0, 0, 'Trabajador...', '', '2022-09-01 01:00:00', '2022-09-01 02:00:00', ''),
(187, 0, 0, 0, 'Katheryn Acero', '', '2022-09-01 16:00:00', '2022-09-01 17:00:00', ''),
(188, 0, 0, 0, 'Víctor Quijiate', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(189, 2, 0, 15, 'Angela Alania', '', '2022-09-01 18:00:00', '2022-09-01 19:00:00', ''),
(190, 2, 0, 15, 'Angela Alania', '', '2022-09-01 18:00:00', '2022-09-01 19:00:00', ''),
(191, 30, 0, 15, 'Angela Alania', '', '2022-09-01 17:00:00', '2022-09-01 18:00:00', ''),
(192, 30, 0, 15, 'Angela Alania', '', '2022-09-01 17:00:00', '2022-09-01 18:00:00', ''),
(193, 30, 0, 15, 'Angela Alania', '', '2022-09-01 17:00:00', '2022-09-01 18:00:00', ''),
(194, 30, 0, 15, 'Angela Alania', '', '2022-09-01 17:00:00', '2022-09-01 18:00:00', ''),
(195, 30, 0, 15, 'Angela Alania', '', '2022-09-01 17:00:00', '2022-09-01 18:00:00', ''),
(196, 30, 0, 15, 'Angela Alania', '', '2022-09-01 17:00:00', '2022-09-01 18:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vueloslogistica`
--

CREATE TABLE `vueloslogistica` (
  `id` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `id_logistica` int(11) NOT NULL,
  `nyaP` text NOT NULL,
  `documento` text NOT NULL,
  `colegio` text NOT NULL,
  `comentario` text NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vueloslogistica`
--

INSERT INTO `vueloslogistica` (`id`, `id_padre`, `id_consulta`, `id_logistica`, `nyaP`, `documento`, `colegio`, `comentario`, `inicio`, `fin`, `color`) VALUES
(127, 2, 1, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', 'Es importante el vuelo!', '2022-09-20 12:00:00', '2022-09-23 13:00:00', '#183367'),
(128, 2, 1, 0, 'Ernesto Cavassa', '098711233', 'Fe y Alegría 6 - Lima - San Martín de Porres ', 'Urgente!', '2022-09-20 16:00:00', '2022-09-22 17:00:00', '#e811c1'),
(129, 2, 1, 0, 'Jhony Verano', '98171122', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', '', '2022-09-20 02:00:00', '2022-09-20 03:00:00', '#4337e6'),
(130, 29, 10, 0, 'Jorge Antony Milian Montalvo', '12331111', 'Fe y Alegría 3 - Lima - San Juan de Miraflores ', '1', '2022-09-20 09:00:00', '2022-09-20 10:00:00', '#782b2b'),
(131, 29, 10, 0, 'Nataly Egoavil', '5444222', 'Fe y Alegría 9 - Lima - Comas ', '123', '2022-09-20 11:00:00', '2022-09-20 12:00:00', '#d1311f'),
(132, 2, 1, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 6 - Lima - San Martín de Porres ', 'Ya fue!', '2022-09-22 05:00:00', '2022-09-22 06:00:00', '#b8ab1e'),
(137, 2, 1, 0, 'Víctor Quijiate', '121212', 'Fe y Alegría 7 - Lima - Comas ', '1212', '2022-10-03 15:00:00', '2022-10-03 16:00:00', '#000000'),
(146, 2, 1, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 6 - Lima - San Martín de Porres ', 'Es urgente!', '2022-09-26 20:00:00', '2022-09-29 20:00:00', '#bc9015'),
(148, 2, 1, 0, 'Víctor Quijiate', '70311233', 'Fe y Alegría 6 - Lima - San Martín de Porres ', 'se va urgente', '2022-09-25 18:35:00', '2022-09-30 18:36:00', '#baa01c'),
(152, 34, 12, 0, 'Katheryn Acero', '76544321', 'Fe y Alegría 1 - Lima - San Martín de Porres ', '11111', '2022-09-25 21:35:00', '2022-09-27 21:35:00', '#16d813'),
(154, 6, 2, 0, 'Jorge Antony Milian Montalvo', '98112111', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', '', '2022-09-26 07:30:00', '2022-09-28 08:00:00', '#00ff80'),
(158, 30, 9, 0, 'Fabiola Chávez', '11111', 'Fe y Alegría 1 - Lima - San Martín de Porres ', '111', '2022-09-25 23:21:00', '2022-09-30 23:21:00', '#0ac70e'),
(160, 30, 9, 15, 'Fabiola Chávez', '12221122', 'Fe y Alegría 8 - Lima - Comas ', '112', '2022-09-26 09:03:00', '2022-09-29 12:06:00', '#c624a9'),
(161, 29, 10, 0, 'Katheryn Acero', '121212', 'Fe y Alegría 1 - Lima - San Martín de Porres ', '1212', '2022-09-26 09:36:00', '2022-09-28 09:36:00', '#cfc90c'),
(162, 31, 11, 0, 'Jorge Antony Milian Montalvo', '7022133', 'Fe y Alegría 1 - Lima - San Martín de Porres ', '', '2022-09-28 08:06:00', '2022-10-02 08:06:00', '#9d1cd9'),
(163, 31, 11, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 7 - Lima - Comas ', 'listo!', '2022-10-01 11:46:00', '2022-10-03 11:47:00', '#000000'),
(164, 31, 11, 0, 'Fabiola Casas', '12112121', 'Fe y Alegría 1 - Lima - San Martín de Porres ', '', '2022-09-30 11:47:00', '2022-10-08 11:47:00', '#dd2cbc'),
(171, 2, 1, 0, 'Jhony Verano', '12112121', 'Fe y Alegría 3 - Lima - San Juan de Miraflores ', '121212', '2022-10-07 14:56:00', '2022-10-15 14:56:00', '#33B679'),
(176, 2, 1, 0, 'Jorge Antony Milian Montalvo', '12122112', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', '12', '2022-10-10 09:49:00', '2022-10-11 14:49:00', '#8E24AA'),
(177, 2, 1, 0, 'Jorge Antony Milian Montalvo', '12121212', 'Fe y Alegría 7 - Lima - Comas ', '', '2022-10-10 09:58:00', '2022-10-14 09:58:00', '#039BE5'),
(178, 2, 1, 0, 'Nataly Egoavil', '12121212', 'Fe y Alegría 2 - Lima - San Martín de Porres ', '', '2022-10-10 10:03:00', '2022-10-15 10:03:00', '#D50000'),
(180, 29, 10, 0, 'Jorge Antony Milian Montalvo', '7031123', 'Fe y Alegría 6 - Lima - San Martín de Porres ', '', '2022-10-10 10:11:00', '2022-10-13 14:15:00', '#039BE5'),
(181, 29, 10, 0, 'Jorge Antony Milian Montalvo', '01010101', 'Fe y Alegría 6 - Lima - San Martín de Porres ', '', '2022-10-10 11:15:00', '2022-10-15 10:14:00', '#E67C73'),
(182, 2, 1, 0, 'Nataly Egoavil', '121212', 'Fe y Alegría 1 - Lima - San Martín de Porres ', '12', '2022-10-10 11:33:00', '2022-10-12 11:33:00', '#3F51B5'),
(185, 29, 10, 0, 'Jorge Antony Milian Montalvo', '12121212', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', '', '2022-10-11 12:00:00', '2022-10-13 13:11:00', '#8E24AA'),
(186, 29, 10, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 9 - Lima - Comas ', '', '2022-10-11 11:01:00', '2022-10-12 11:01:00', '#039BE5'),
(187, 2, 1, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 9 - Lima - Comas ', '', '2022-10-11 11:11:00', '2022-10-27 11:11:00', '#039BE5'),
(188, 29, 10, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 6 - Lima - San Martín de Porres ', 'URGENTE!', '2022-10-12 11:11:00', '2022-10-14 11:01:00', '#3F51B5'),
(191, 30, 9, 0, 'Fabiola Chávez', '70431211', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', '', '2022-10-11 09:34:00', '2022-10-15 09:34:00', '#F6BF26'),
(193, 29, 10, 0, 'Jhony Verano', '89765122', 'Fe y Alegría 10 - Lima - Comas ', '', '2022-10-11 12:09:00', '2022-10-13 12:09:00', '#8E24AA'),
(194, 2, 1, 0, 'Jhony Verano', '89765122', 'Fe y Alegría 2 - Lima - San Martín de Porres ', 'asaas', '2022-10-11 12:10:00', '2022-10-15 12:10:00', '#8E24AA'),
(195, 30, 9, 0, 'Fabiola Chávez', '70431211', 'Fe y Alegría 9 - Lima - Comas ', '', '2022-10-11 16:57:00', '2022-10-15 16:57:00', '#33B679'),
(196, 29, 10, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 9 - Lima - Comas ', '', '2022-10-13 11:11:00', '2022-10-15 11:01:00', '#F6BF26'),
(198, 29, 10, 0, 'Jorge Antony Milian Montalvo', '70311233', 'Fe y Alegría 3 - Lima - San Juan de Miraflores ', '', '2022-11-28 17:00:00', '2022-12-01 17:00:00', '#616161'),
(199, 2, 1, 15, 'Jorge Antony Milian Montalvo', '21111111', 'Fe y Alegría 5 - Lima - San Juan de Lurigancho ', '', '2022-11-28 17:38:00', '2022-12-01 17:38:00', '#3F51B5'),
(200, 31, 11, 0, 'Jorge Antony Milian Montalvo 70311233', 'Jorge Antony Milian Montalvo 70311233', 'Fe y Alegría 1 - Lima - San Martín de Porres ', 'se va de vacaciones por salud!', '2022-12-19 12:00:00', '2022-12-20 11:00:00', '#8E24AA'),
(201, 2, 1, 0, 'Jorge Antony Milian Montalvo 70311233', 'Jorge Antony Milian Montalvo 70311233', 'Fe y Alegría 3 - Lima - San Juan de Miraflores ', 'URGENTE!', '2022-12-19 11:58:00', '2022-12-23 11:58:00', '#D50000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colegios`
--
ALTER TABLE `colegios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefesarea`
--
ALTER TABLE `jefesarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logistica`
--
ALTER TABLE `logistica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `otrostrabajadores`
--
ALTER TABLE `otrostrabajadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vueloslogistica`
--
ALTER TABLE `vueloslogistica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colegios`
--
ALTER TABLE `colegios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefesarea`
--
ALTER TABLE `jefesarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `logistica`
--
ALTER TABLE `logistica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `otrostrabajadores`
--
ALTER TABLE `otrostrabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `vueloslogistica`
--
ALTER TABLE `vueloslogistica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

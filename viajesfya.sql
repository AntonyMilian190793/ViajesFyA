-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2022 a las 02:54:37
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
(1, 'Administración'),
(2, 'Identidad y misión'),
(5, 'Logística'),
(7, 'EBR'),
(8, 'EBA'),
(9, 'Contabilidad'),
(10, 'Sistemas'),
(11, 'Recursos Humanos'),
(12, 'Legal'),
(13, 'Secretaria');

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
(2, 1, 'Cavassa ', 'Ernesto', '90909991', 'Vistas/img/Padres/Pad-199.png', 'ecavassa', '123', 'Masculino', '08:00:00', '18:00:00', 'Directivo'),
(3, 8, 'Piñeyro', 'Javier', '', 'Vistas/img/Padres/Pad-113.png', 'jpineyro', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(6, 2, 'Morelli', 'Oscar', '', 'Vistas/img/Padres/Pad-177.png', 'oscar', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(29, 10, 'Verano', 'Jhony', '', '', 'jverano', '123', 'Masculino', '00:00:00', '00:00:00', 'Padre'),
(30, 9, 'Guevara', 'Carlos', '', '', 'cguevara', '123', 'Masculino', '00:00:00', '00:00:00', 'Padre'),
(31, 11, 'Vargas', 'Julia', '', '', 'jvargas', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre'),
(32, 5, 'Alania', 'Angela', '', '', 'aalania', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre'),
(34, 12, 'Acero Cáceres', 'Katheryn', '', '', 'kacero', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre'),
(35, 7, 'Alencastre', 'Ava', '', '', 'aalencastre', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre'),
(36, 13, 'Portilla', 'María', '', '', 'mportilla', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre');

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
(1, 'Está página se utilizará para...', '06:00:00', '05:00:00', '993753004', 'jmilian@feyalegria.org.pe', 'Jirón Cahuide 884 - Jesús María', 'Vistas/img/logo.png', 'Vistas/img/favicon.png');

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
(10, 10, 'Verano', 'Jhony', '89765122', '', 'jverano', '123', 'JefeArea', 'Masculino'),
(12, 12, 'Acero', 'Katheryn', '70511233', '', 'kacero', '123', 'JefeArea', 'Femenino'),
(15, 9, 'Guevara', 'Carlos', '0987611', '', 'cguevara', '123', 'JefeArea', 'Masculino'),
(16, 8, 'Piñeyro ', 'Javier', '0987112', '', 'jpineyro', '123', 'JefeArea', 'Masculino'),
(17, 7, 'Alencastre ', 'Ava', '09871122', '', 'aalencastre', '123', 'JefeArea', 'Femenino'),
(18, 2, 'Morelli ', 'Oscar', '0987122', '', 'omorelli', '123', 'JefeArea', 'Masculino'),
(19, 5, 'Alania ', 'Angela', '7876122', '', 'aalania', '123', 'JefeArea', 'Femenino'),
(20, 11, 'Vargas', ' Julia', '0987122', '', 'jvargas', '123', 'JefeArea', 'Femenino'),
(21, 13, 'Portilla', 'María', '09871211', '', 'mportilla', '123', 'JefeArea', 'Femenino');

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
(1, 1, 'mary', '123', 'María', '', 'Portilla', 'Vistas/img/Otros/O-94.jpg', 'Otros', ''),
(15, 1, 'aalania', '123', 'Angela', '70541233', 'Alania', '', 'Logistica', 'Femino');

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
(20, 1, 'Acero', 'Katheryn', '703221231', '', 'kacero', 'Femenino', '123', 'otrosTrabajadores'),
(21, 1, 'Quijiate', 'Víctor', '79881122', '', 'vquijaite', '', '123', 'otrosTrabajadores'),
(22, 1, 'Verano', 'Jhony', '8735332', '', 'jverano', 'Masculino', '123', 'otrosTrabajadores'),
(23, 2, 'Cavassa', 'Ernesto', '8474633', '', 'ecavassa', '', '123', 'otrosTrabajadores'),
(24, 0, 'Portilla', 'Maria', '098761', '', 'mportilla', '', '123', 'otrosTrabajadores'),
(25, 0, 'Atausupa', 'Víctor', '89766122', '', 'vatausupa', '', '123', 'otrosTrabajadores'),
(26, 0, 'Egoavil', 'Nataly', '09871622', '', 'negoavil', '', '123', 'otrosTrabajadores'),
(27, 0, 'Casas', 'Fabiola', '87611211', '', 'fcasas', '', '123', 'otrosTrabajadores'),
(28, 0, 'Chávez', 'Fabiola', '098711611', '', 'fchavez', '', '123', 'otrosTrabajadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `foto`, `rol`) VALUES
(1, 'jmilian', '123', 'Jorge Antony', 'Milian Montalvo', 'Vistas/img/Sistemas/Sis-432.jpg.jpg', 'Sistemas');

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
  `comentario` text NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vueloslogistica`
--

INSERT INTO `vueloslogistica` (`id`, `id_padre`, `id_consulta`, `id_logistica`, `nyaP`, `documento`, `comentario`, `inicio`, `fin`) VALUES
(14, 2, 1, 15, 'Víctor Atausupa', '121221', '', '2022-09-11 08:00:00', '2022-09-11 09:00:00'),
(15, 2, 1, 0, 'Katheryn Acero', '70511222', '', '2022-09-11 12:00:00', '2022-09-11 13:00:00'),
(16, 2, 1, 15, 'Fabiola Casas', '70411233', 'No se fue de viaje', '2022-09-11 20:00:00', '2022-09-11 21:00:00'),
(17, 30, 1, 15, 'Fabiola Chávez', '878787', '', '2022-09-11 17:00:00', '2022-09-11 18:00:00'),
(19, 2, 1, 15, 'Nataly Egoavil', '121221', '', '2022-09-11 23:00:00', '0000-00-00 00:00:00'),
(20, 2, 1, 15, 'Maria Portilla', '121`2122', '', '2022-09-11 01:00:00', '2022-09-11 02:00:00'),
(22, 29, 10, 15, 'Jorge Antony Milian Montalvo', '70311233', '', '2022-09-11 19:00:00', '2022-09-11 20:00:00'),
(23, 2, 1, 0, 'Ernesto Cavassa', '122112', '', '2022-09-11 18:00:00', '2022-09-11 19:00:00'),
(26, 29, 10, 0, 'Jorge Antony Milian Montalvo', 'asaassa', '', '2022-09-11 23:00:00', '0000-00-00 00:00:00'),
(27, 29, 10, 0, 'Jorge Antony Milian Montalvo', '70311233', '', '2022-09-12 18:00:00', '2022-09-12 19:00:00'),
(28, 34, 12, 0, 'Katheryn Acero', 'assasa', '', '2022-09-12 07:00:00', '2022-09-12 08:00:00'),
(29, 2, 1, 0, 'Fabiola Casas', 'assaas', '', '2022-09-13 08:00:00', '2022-09-13 09:00:00'),
(30, 2, 1, 0, 'Maria Portilla', '09781511', 'Todo bien!', '2022-09-14 08:00:00', '2022-09-14 09:00:00');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `otrostrabajadores`
--
ALTER TABLE `otrostrabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

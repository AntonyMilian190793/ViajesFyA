-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2022 a las 19:55:00
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

INSERT INTO `directivos` (`id`, `id_consulta`, `apellido`, `nombre`, `foto`, `usuario`, `clave`, `sexo`, `horarioE`, `horarioS`, `rol`) VALUES
(2, 1, 'Cavassa ', 'Ernesto', 'Vistas/img/Padres/Pad-199.png', 'ernesto', '123', 'Masculino', '08:00:00', '18:00:00', 'Directivo'),
(3, 1, 'Piñeyro', 'Javier', 'Vistas/img/Padres/Pad-113.png', 'javier', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(6, 2, 'Morelli', 'Oscar', 'Vistas/img/Padres/Pad-177.png', 'oscar', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(29, 10, 'Verano Bonifacio', 'Jhony', '', 'jverano', '123', 'Masculino', '00:00:00', '00:00:00', 'Padre'),
(30, 9, 'Guevara', 'Carlos', '', 'cguevara', '123', 'Masculino', '00:00:00', '00:00:00', 'Padre'),
(31, 11, 'Vargas', 'Julia', '', 'jvargas', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre'),
(32, 5, 'Alnia', 'Angela', '', 'aalania', '123', 'Femenino', '00:00:00', '00:00:00', 'Padre');

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
(11, 10, 'Verano', 'Jhony', '89765122', '', 'jverano', '123', 'JefeArea', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logistica`
--

CREATE TABLE `logistica` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logistica`
--

INSERT INTO `logistica` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `foto`, `rol`) VALUES
(1, 'mary', '123', 'María', 'Portilla', 'Vistas/img/Otros/O-94.jpg', 'Otros'),
(15, 'aalania', '123', 'Angela', 'Alania', '', 'Logistica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otrostrabajadores`
--

CREATE TABLE `otrostrabajadores` (
  `id` int(11) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `documento` text NOT NULL,
  `foto` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `otrostrabajadores`
--

INSERT INTO `otrostrabajadores` (`id`, `apellido`, `nombre`, `documento`, `foto`, `usuario`, `clave`, `rol`) VALUES
(1, 'Milian Montalvo', 'Jorge Antony', '70311233', '', 'jmilian', '123', 'otrosTrabajadores');

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
(95, 2, 1, 0, 'Angela Alania', '', '2022-08-05 22:00:00', '2022-08-05 23:00:00', ''),
(96, 17, 10, 0, 'Jorge Milian', '', '2022-08-05 10:00:00', '2022-08-05 11:00:00', ''),
(97, 2, 1, 2, 'Ernesto Cavassa ', '', '2022-08-04 05:00:00', '2022-08-04 06:00:00', ''),
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
(114, 0, 0, 0, 'Víctor Quijaite', '', '2022-08-25 15:00:00', '2022-08-25 16:00:00', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefesarea`
--
ALTER TABLE `jefesarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `logistica`
--
ALTER TABLE `logistica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `otrostrabajadores`
--
ALTER TABLE `otrostrabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

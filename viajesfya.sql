-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2022 a las 22:53:39
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
(321, 'Fe y Alegria N 1 - Lima - San Martín de Porres - Lima  -  EBR'),
(322, 'Fe y Alegria N 2 - Lima - San Martínn de Porres - Lima  -  EBR'),
(323, 'Fe y Alegria N 3 - Lima - San Juan de Miraflores - Lima  -  EBR'),
(324, 'Fe y Alegria N 4 - Lima - San Juan de Lurigancho - Lima  -  EBR'),
(325, 'Fe y Alegria N 5 - Lima - San Juan de Lurigancho - Lima  -  EBR'),
(326, 'Fe y Alegria N 7 - Lima - Comas - Lima  -  CEBA'),
(327, 'Fe y Alegria N 8 - Lima - Comas - Lima  -  EBR'),
(328, 'Fe y Alegria N 10 - Lima - Comas - Lima  -  EBR'),
(329, 'Fe y Alegria N 11 - Lima - Comas - Lima  -  EBR'),
(330, 'Fe y Alegria N 12 - Lima - Puente Piedra - Lima  -  EBR'),
(331, 'Fe y Alegria N 13 - Lima - Comas - Lima  -  EBR'),
(332, 'Fe y Alegria N 14 - Ancash - Nuevo Chimbote - Santa  -  EBR'),
(333, 'Fe y Alegria N 15 - Piura - Castilla - Piura  -  EBR'),
(334, 'Fe y Alegria N 16 - Ancash - Chimbote - Santa  -  EBR'),
(335, 'Fe y Alegria N 17 - Lima - Villa El Salvador - Lima  -  EBR'),
(336, 'Fe y Alegria N 18 - Piura - Sullana - Sullana  -  EBR'),
(337, 'Fe y Alegria N 19 - Ancash - Huaraz       - Huaraz        -  EBR'),
(338, 'Fe y Alegria N 20 - Cusco - Santiago - Cusco  -  EBR'),
(339, 'Fe y Alegria N 21 - Cusco - San Jerónimo - Cusco  -  EBR'),
(340, 'Fe y Alegria N 21 - Cusco - San Jerónimo - Cusco  -  CETPRO'),
(341, 'Fe y Alegria N 22 - Cajamarca - Jaén - Jaén  -  EBR'),
(342, 'Fe y Alegria N 23 - Lima - Villa María del Triunfo - Lima  -  EBR'),
(343, 'Fe y Alegria N 23 - Lima - Villa Mar?a del Triunfo - Lima  -  CETPRO'),
(344, 'Fe y Alegria N 24 - Lima - Villa Mar?a del Triunfo - Lima  -  EBR'),
(345, 'Fe y Alegria N 25 - Lima - San Juan de Lurigancho - Lima  -  EBR'),
(346, 'Fe y Alegria N 25 - Lima - San Juan de Lurigancho - Lima  -  CETPRO'),
(347, 'Fe y Alegria N 26 - Lima - San Juan de Lurigancho - Lima  -  EBR'),
(348, 'Fe y Alegria N 27 - Puno - Macarí - Melgar  -  EBR'),
(349, 'Fe y Alegria N 28 - Lambayeque - Chiclayo - Chiclayo  -  EBR'),
(350, 'Fe y Alegria N 29 - Callao - Ventanilla - Callao  -  EBR'),
(351, 'Fe y Alegria N 30 - Ica - Pueblo Nuevo - Chincha  -  EBR'),
(352, 'Fe y Alegria N 31 - Amazonas - La Peca - Bagua  -  EBR'),
(353, 'Fe y Alegria N 32 - Lima - San Juan de Lurigancho - Lima  -  EBR'),
(354, 'Fe y Alegria N 32 - Lima - San Juan de Lurigancho - Lima  -  CETPRO'),
(355, 'Fe y Alegria N 33 - Callao - Mi Perú - Ventanilla  -  EBR'),
(356, 'Fe y Alegria N 34 - Lima - Chorrillos - Lima  -  EBR'),
(357, 'Fe y Alegria N 35 - Lima Provincia - Barranca - Barranca  -  EBR'),
(358, 'Fe y Alegria N 36 - La Libertad - La Esperanza - Trujillo  -  EBR'),
(359, 'Fe y Alegria N 37 - Lima - San Juan de Lurigancho - Lima  -  EBR'),
(360, 'Fe y Alegria N 38 - Amazonas - Bagua Grande - Utcubamba  -  EBR'),
(361, 'Fe y Alegria N 39 - Lima - El Agustino - Lima  -  EBR'),
(362, 'Fe y Alegria N 40 - Tacna - Tacna - Tacna  -  EBR'),
(363, 'Fe y Alegria N 41 - Lima - Lurigancho - Lima  -  EBR'),
(364, 'Fe y Alegria N 42 - Ancash - Chimbote - Santa  -  CEBE'),
(365, 'Fe y Alegria N 43 - Callao - Ventanilla - Callao  -  EBR'),
(366, 'Fe y Alegria N 43 - Callao - Ventanilla - Callao  -  CETPRO'),
(367, 'Fe y Alegria N 44 - Cusco - Andahuaylillas - Quispicanchi  -  RED RURAL'),
(368, 'Fe y Alegria N 44 - Cusco - Andahuaylillas - Quispicanchi  -  EBR'),
(369, 'Fe y Alegria N 45 - Arequipa - Paucarpata - Arequipa  -  EBR'),
(370, 'Fe y Alegria N 45 - Arequipa - Paucarpata - Arequipa  -  CEBA'),
(371, 'Fe y Alegria N 46 - Loreto - San Juan Bautista - Iquitos  -  EBR'),
(372, 'Fe y Alegria N 47 - Loreto - San Juan Bautista - Iquitos  -  RED RURAL'),
(373, 'Fe y Alegria N 47 - Loreto - San Juan Bautista - Iquitos  -  CAEM'),
(374, 'Fe y Alegria N 47 - Loreto - San Juan Bautista - Iquitos  -  CETPRO'),
(375, 'Fe y Alegria N 47 - Loreto - San Juan Bautista - Iquitos  -  IESTP'),
(376, 'Fe y Alegria N 48 - Piura - Tambogrande - Piura  -  RED RURAL'),
(377, 'Fe y Alegria N 48 - Piura - Tambogrande - Piura  -  CETPRO'),
(378, 'Fe y Alegria N 48 - Piura - Tambogrande - Piura  -  CEBA'),
(379, 'Fe y Alegria N 49 - Piura - Piura - Piura  -  EBR'),
(380, 'Fe y Alegria N 50 - Ayacucho - San Juan Bautista - Huamanga  -  EBR'),
(381, 'Fe y Alegria N 51 - Arequipa - Cerro Colorado - Arequipa  -  EBR'),
(382, 'Fe y Alegria N 52 - Moquegua - Ilo - Ilo  -  EBR'),
(383, 'Fe y Alegria N 53 - Lima - Ate - Lima  -  EBR'),
(384, 'Fe y Alegria N 54 - Ancash - Moro - Santa  -  RED RURAL'),
(385, 'Fe y Alegria N 56 - Puno - San Juan del Oro - Sandia  -  EBR'),
(386, 'Fe y Alegria N 56 - Puno - San Juan del Oro - Sandia  -  CETPRO'),
(387, 'Fe y Alegria N 57 - La Libertad - Trujillo - Trujillo  -  IESTP'),
(388, 'Fe y Alegria N 57 - Cajamarca - Cajamarca - Cajamarca  -  IESTP'),
(389, 'Fe y Alegria N 57 - Cajamarca - Cajamarca - Cajamarca  -  CETPRO '),
(390, 'Fe y Alegria N 57 - La Libertad - Trujillo - Trujillo  -  CETPRO '),
(391, 'Fe y Alegria N 57 - La Libertad - Trujillo - Trujillo  -  CCC'),
(392, 'Fe y Alegria N 58 - Lima - Lurigancho - Lima  -  EBR'),
(393, 'Fe y Alegria N 59 - Callao - Ventanilla - Callao  -  EBR'),
(394, 'Fe y Alegria N 60 - Ayacucho - Los Morochucos - Cangallo  -  IESTP'),
(395, 'Fe y Alegria N 61 - Lima - Villa El Salvador - Lima  -  CETPRO'),
(396, 'Fe y Alegria N 61 - Lima - Villa El Salvador - Lima  -  IESTP'),
(397, 'Fe y Alegria N 62 - Amazonas - Imaza - Bagua  -  EBR'),
(398, 'Fe y Alegria N 63 - La Libertad - El Porvenir - Trujillo  -  EBR'),
(399, 'Fe y Alegria N 64 - Hu?nuco - Tingo Mar?a - Leoncio Prado  -  EBR'),
(400, 'Fe y Alegria N 65 - Lima - San Juan de Miraflores - Lima  -  EBR'),
(401, 'Fe y Alegria N 66 - Junín - Huancayo - Huancayo  -  EBR'),
(402, 'Fe y Alegria N 67 - Junín - Tarma - Tarma  -  EBR'),
(403, 'Fe y Alegria N 68 - Ica - San Clemente - Pisco  -  EBR'),
(404, 'Fe y Alegria N 69 - Cajamarca - Cutervo - Cutervo  -  EBR'),
(405, 'Fe y Alegria N 69 - Cajamarca - Cutervo - Cutervo  -  CEBA'),
(406, 'Fe y Alegria N 69 - Cajamarca - S?cota - Cutervo  -  CETPRO'),
(407, 'Fe y Alegria N 70 - Ica - Nueva Esperanza - Ica  -  EBR'),
(408, 'Fe y Alegria N 71 - Junín - Pancán - Jauja  -  EBR'),
(409, 'Fe y Alegria N 72 - Ucayali - Pucallpa - Coronel Portillo  -  RED RURAL'),
(410, 'Fe y Alegria N 73 - Piura - Paita - Paita  -  EBR'),
(411, 'Fe y Alegria N 74 - Amazonas - Santa María de Nieva - Condorcanqui  -  IESTP'),
(412, 'Fe y Alegria N 75 - Lima - San Juan de Miraflores - Lima  -  IESTP'),
(413, 'Fe y Alegria N 76 - Callao - Ventanilla - Callao  -  EBR'),
(414, 'Fe y Alegria N 77 - Ica - Tupac Amaru Inca - Pisco  -  EBR'),
(415, 'Fe y Alegria N 78 - Cajamarca - Pucará - Jaén  -  EBR'),
(416, 'Fe y Alegria N 79 - Huancavelica - Acobamba - Acobamba  -  RED RURAL'),
(417, 'Fe y Alegria N 80 - Loreto - Lagunas - Alto Amazonas  -  EBR'),
(418, 'Fe y Alegria N 80 - Loreto - Lagunas - Alto Amazonas  -  CETPRO'),
(419, 'Fe y Alegria N 81 - Piura - Paita - Paita  -  EBR'),
(420, 'Fe y Alegria N 82 - Ica - Ica - Ica  -  CEBA');

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
(11, 'Vacaciones'),
(12, 'Legal'),
(13, 'Recaudo y Voluntariado'),
(18, 'Proyectos'),
(19, 'FyA Digítal'),
(25, 'Identidad y Misión'),
(26, 'Comunicación e Incidencia ');

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
(44, 7, 'Helfer', 'Susana', '87611221', '', 'shelfer', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo'),
(47, 25, 'Quiros Piñeyro', 'Luis Javier', '29707416', '', 'jquiros', '123', 'Masculino', '00:00:00', '00:00:00', 'Directivo'),
(48, 26, 'Culqui Julca', 'Juana Hisela', '09556035', '', 'hculqui', '123', 'Femenino', '00:00:00', '00:00:00', 'Directivo');

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
(1, 'Bienvenido comunidad de Fe y Alegría, esta plataforma tiene como finalidad ...', '00:00:00', '00:00:00', '993753004', 'jmilian@feyalegria.org.pe', 'Jirón Cahuide 884 - Jesús María', 'Vistas/img/logo.jpeg', 'Vistas/img/favicon.png');

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
(20, 1, 'jvargas', '123', 'Julia', '68726221', 'Vargas', '', 'Logistica', ''),
(21, 0, 'negoavil', '75129856', 'Nataly Grecia', '75129856', ' Egoavil Cuadrado	', '', 'Logistica', '');

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
(115, 1, '- Directivos', 'Ernesto Marco Julio Cavassa Canessa', '07806170', '', 'ecavassa', 'Masculino', '07806170', 'otrosTrabajadores'),
(116, 1, '- Directivos', 'Víctor Alberto Quijaite Agurto', '07503892', '', 'vquijaite', 'Masculino', '07503892', 'otrosTrabajadores'),
(117, 1, '- Directivos', 'Saturnino Vasquez Carranza', '05645468', '', 'svasquez', 'Masculino', '05645468', 'otrosTrabajadores'),
(118, 1, '- Directivos', 'Ana Mirella Uehara Shiroma', '10573832', '', 'auehara', 'Femenino', '10573832', 'otrosTrabajadores'),
(119, 1, '- Directivos', 'Susana Carola Helfer Llerena', '29290328', '', 'shelfer', 'Femenino', '29290328', 'otrosTrabajadores'),
(120, 1, '- Directivos', 'Maria Arminda Portilla Bustamante', '09206130', '', 'mportilla', 'Femenino', '09206130', 'otrosTrabajadores'),
(121, 2, '- EPTT', 'Ava Valentina Alencastre Begazo', '07459258', '', 'aalencastre', 'Femenino', '07459258', 'otrosTrabajadores'),
(122, 2, '- EPTT', 'Flor Edith Laura Salinas', '10297742', '', 'flaura', 'Femenino', '10297742', 'otrosTrabajadores'),
(123, 2, '- EPTT', 'Miriam Andrea Aguilar Chipane', '43243396', '', 'maguilar', 'Femenino', '43243396', 'otrosTrabajadores'),
(124, 2, '- EPTT', 'Vladimir Unapillco Champi', '41236561', '', 'vunapillco', 'Masculino', '41236561', 'otrosTrabajadores'),
(125, 2, '- EPTT', 'Yovana Rosario Caso Escobar', '10254260', '', 'ycaso', 'Femenino', '10254260', 'otrosTrabajadores'),
(126, 2, '- EPTT', 'Katherine Patricia Oriundo Nu?ez', '45675506', '', 'koriundo', 'Femenino', '45675506', 'otrosTrabajadores'),
(127, 2, '- EPTT', 'Leoncio Bermeo Tuesta', '10325111', '', 'lbermeo', 'Masculino', '10325111', 'otrosTrabajadores'),
(128, 2, '- EPTT', 'Jose Augusto Aguedo Villacorta', '02846853', '', 'jaguedo', 'Masculino', '02846853', 'otrosTrabajadores'),
(129, 5, '- Logistica', 'Moises Ulpiano Moreno Caceres', '07815981', '', 'mmoreno', 'Masculino', '07815981', 'otrosTrabajadores'),
(130, 5, '- Logistica', 'Sinecio Ocampo Tafur', '07190700', '', 'socampo', 'Masculino', '07190700', 'otrosTrabajadores'),
(131, 5, '- Logistica', 'Raul Ceron Salazar', '41616558', '', 'rceron', 'Masculino', '41616558', 'otrosTrabajadores'),
(132, 5, '- Logistica', 'Rosa De La Cruz Espinoza', '40270249', '', 'rcruz', 'Femenino', '40270249', 'otrosTrabajadores'),
(133, 5, '- Logistica', 'Pedro Ocampo Tafur', '10834533', '', 'pocampo', 'Masculino', '10834533', 'otrosTrabajadores'),
(134, 5, '- Logistica', 'Miguel Angel Leandro Rojas', '09967572', '', 'mleandro', 'Masculino', '09967572', 'otrosTrabajadores'),
(135, 5, '- Logistica', 'Jaharixa Rosario Paucar Tamayo', '74294689', '', 'jpaucar', 'Femenino', '74294689', 'otrosTrabajadores'),
(136, 5, '- Logistica', 'Anaiz Angela  Alania Malqui', '71381607', '', 'aalania', 'Femenino', '71381607', 'otrosTrabajadores'),
(137, 7, '- EBR Urbano - EBR Rural', 'Cecilia Ines Villegas Kanashiro', '06748732', '', 'cvillegas', 'Femenino', '06748732', 'otrosTrabajadores'),
(138, 7, '- EBR Urbano - EBR Rural', 'Alina Otilia Anglas Carpena', '09670126', '', 'aanglas', 'Femenino', '09670126', 'otrosTrabajadores'),
(139, 7, '- EBR Urbano - EBR Rural', 'Peggi Rocio Monzon Ponce', '09652698', '', 'pmonzon', 'Femenino', '09652698', 'otrosTrabajadores'),
(140, 7, '- EBR Urbano - EBR Rural', 'Isolino Juan Velasquez Pacci', '80391197', '', 'ivelasquez', 'Masculino', '80391197', 'otrosTrabajadores'),
(141, 7, '- EBR Urbano - EBR Rural', 'Maricruz Daniela Cerro Acha', '40048651', '', 'mcerro', 'Femenino', '40048651', 'otrosTrabajadores'),
(142, 7, '- EBR Urbano - EBR Rural', 'Rosa Elvira Vilchez De Sanchez', '03561221', '', 'rvilchez', 'Femenino', '03561221', 'otrosTrabajadores'),
(143, 7, '- EBR Urbano - EBR Rural', 'Consuelo Maribel Cordova Sanchez', '19098773', '', 'ccordova', 'Femenino', '19098773', 'otrosTrabajadores'),
(144, 7, '- EBR Urbano - EBR Rural', 'David Julio Cuenca Chamorro', '09978128', '', 'dcuenca', 'Masculino', '09978128', 'otrosTrabajadores'),
(145, 7, '- EBR Urbano - EBR Rural', 'Patricia Carmen Huarez Sosa', '08684899', '', 'phuarez', 'Femenino', '08684899', 'otrosTrabajadores'),
(146, 7, '- EBR Urbano - EBR Rural', 'Yliana Cecilia Galdos Rodriguez', '25567688', '', 'ygaldos', 'Femenino', '25567688', 'otrosTrabajadores'),
(147, 7, '- EBR Urbano - EBR Rural', 'Cynthia Selena See Wu Rodriguez', '02867558', '', 'cseewu', 'Femenino', '02867558', 'otrosTrabajadores'),
(148, 7, '- EBR Urbano - EBR Rural', 'Luz Marina Loayza Polo', '24464584', '', 'lloayza', 'Femenino', '24464584', 'otrosTrabajadores'),
(149, 7, '- EBR Urbano - EBR Rural', 'Irma Lucia Mariño Vargas ', '06757955', '', 'imarino', 'Femenino', '06757955', 'otrosTrabajadores'),
(150, 7, '- EBR Urbano - EBR Rural', 'Rocio Edith Garcia Palma', '15721524', '', 'rgarcia', 'Femenino', '15721524', 'otrosTrabajadores'),
(151, 7, '- EBR Urbano - EBR Rural', 'Gloria Tuse Llacsahuanga', '02840593', '', 'gtuse', 'Femenino', '02840593', 'otrosTrabajadores'),
(152, 7, '- EBR Urbano - EBR Rural', 'Alyson Lisset Rosales Huaynate', '47856266', '', 'arosales', 'Femenino', '47856266', 'otrosTrabajadores'),
(153, 8, '- EBA', 'Alicia Maria Arana Wimpon', '07960819', '', 'aarana', 'Femenino', '07960819', 'otrosTrabajadores'),
(154, 8, '- EBA', 'Maria Gladys Trujillo Bolivar', '09241676', '', 'gtrujillo', 'Femenino', '09241676', 'otrosTrabajadores'),
(155, 8, '- EBA', 'Brigitte Mercedes Vasquez Carhuaricra', '73711756', '', 'bvasquez', 'Femenino', '73711756', 'otrosTrabajadores'),
(156, 8, '- EBA', 'Rina Eufemia Fenandez Collado', '06264398', '', 'rfenandez', 'Femenino', '06264398', 'otrosTrabajadores'),
(157, 9, '- Contabilidad ', 'Carlos Enrique Guevara Quispe', '10670262', '', 'cguevara', 'Masculino', '10670262', 'otrosTrabajadores'),
(158, 9, '- Contabilidad ', 'Ada Rosa Liendo Moran', '10585949', '', 'aliendo', 'Femenino', '10585949', 'otrosTrabajadores'),
(159, 9, '- Contabilidad ', 'Fabiola Medalith Casas Espilco', '46145906', '', 'fcasas', 'Femenino', '46145906', 'otrosTrabajadores'),
(160, 9, '- Contabilidad ', 'Fabiola Maricela Chavez Palomino', '73188050', '', 'fchavez', 'Femenino', '73188050', 'otrosTrabajadores'),
(161, 10, '- Sistemas', 'Jhony Verano Bonifacio', '20051781', '', 'jverano', 'Masculino', '20051781', 'otrosTrabajadores'),
(162, 10, '- Sistemas', 'Jorge Antony Milian Montalvo ', '70311233', '', 'jmilian', 'Masculino', '70311233', 'otrosTrabajadores'),
(163, 11, '- Recursos Humanos ', 'Julia Maria E. Vargas Barbieri', '08668154', '', 'jvargas', 'Femenino', '08668154', 'otrosTrabajadores'),
(164, 11, '- Recursos Humanos ', 'Nataly Grecia Egoavil Cuadrado', '75129856', '', 'negoavil', 'Femenino', '75129856', 'otrosTrabajadores'),
(165, 12, '- Legal', 'Katheryn Allison Acero Caceres', '70125476', '', 'kacero', 'Femenino', '70125476', 'otrosTrabajadores'),
(166, 13, '- Recaudo Y Voluntariado', 'Oscar Francisco Morelli Müller', '29730740', '', 'omorelli', 'Masculino', '29730740', 'otrosTrabajadores'),
(167, 13, '- Recaudo Y Voluntariado', 'Edgar Omar Tapia Burgos', '07621393', '', 'etapia', 'Masculino', '07621393', 'otrosTrabajadores'),
(168, 13, '- Recaudo Y Voluntariado', 'Stephany Angelica Aguilar Rodriguez', '47214884', '', 'saguilar', 'Femenino', '47214884', 'otrosTrabajadores'),
(169, 13, '- Recaudo Y Voluntariado', 'Fabiola Trelles Thorne ', '25838877', '', 'ftrelles', 'Femenino', '25838877', 'otrosTrabajadores'),
(170, 13, '- Recaudo Y Voluntariado', 'Jose Luis Gonzales Solis ', '45169420', '', 'jgonzales', 'Masculino', '45169420', 'otrosTrabajadores'),
(171, 18, '- Proyectos', 'Nancy Georgina Caminada Bravo', '23850784', '', 'ncaminada', 'Femenino', '23850784', 'otrosTrabajadores'),
(172, 18, '- Proyectos', 'Cesar Marcaquispe Ore', '42423205', '', 'cmarcaquispe', 'Masculino', '42423205', 'otrosTrabajadores'),
(173, 18, '- Proyectos', 'Jorge Osvaldo Nuñez Mendoza', '25773809', '', 'jnunez', 'Masculino', '25773809', 'otrosTrabajadores'),
(174, 18, '- Proyectos', 'Ricardo Arturo Torralba Casas', '06774930', '', 'rtorralba', 'Masculino', '06774930', 'otrosTrabajadores'),
(175, 19, '- FyA Digital', 'Gladys Reque Garcia', '09282796', '', 'greque', 'Femenino', '09282796', 'otrosTrabajadores'),
(176, 19, '- FyA Digital', 'Alberto Martin Chocano Saldiva', '06660992', '', 'mchocano', 'Masculino', '06660992', 'otrosTrabajadores'),
(177, 19, '- FyA Digital', 'Jorge Fernando Tagle Villanueva', '07530813', '', 'jtagle', 'Masculino', '07530813', 'otrosTrabajadores'),
(178, 26, '- Comunicación E Incidencia ', 'Jose Ruben Yeren Cassina', '25798003', '', 'jyeren', 'Masculino', '25798003', 'otrosTrabajadores'),
(179, 26, '- Comunicación E Incidencia ', 'Juana Hisela Culqui Julca', '09556035', '', 'hculqui', 'Femenino', '09556035', 'otrosTrabajadores'),
(180, 25, '- Identidad Y Mision ', 'Luis Javier Quiros Pi?eyro', '29707416', '', 'jquiros', 'Masculino', '29707416', 'otrosTrabajadores'),
(181, 25, '- Identidad Y Mision ', 'Maria Teresa Izquierdo Rojas', '07203021', '', 'mizquierdo', 'Femenino', '07203021', 'otrosTrabajadores');

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
  `sexo` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `id_consulta`, `usuario`, `clave`, `nombre`, `apellido`, `documento`, `sexo`, `foto`, `rol`) VALUES
(1, 10, 'jmilian', '70311233', 'Jorge Antony', 'Milian Montalvo', '70311233', 'Masculino', 'Vistas/img/Sistemas/Sis-432.jpg.jpg', 'Sistemas'),
(2, 10, 'jverano', '123', 'Jhony', 'Verano Bonifacio	', '20051781', 'Masculino', '', 'Sistemas'),
(4, 10, 'ASAAS', 'ASAS', 'a', 'AS', '12222222', 'Femenino', '', 'Sistemas');

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
(201, 2, 1, 0, 'Jorge Antony Milian Montalvo 70311233', 'Jorge Antony Milian Montalvo 70311233', 'Fe y Alegría 3 - Lima - San Juan de Miraflores ', 'URGENTE!', '2022-12-19 11:58:00', '2022-12-23 11:58:00', '#D50000'),
(227, 30, 9, 0, 'Jose Ruben Yeren Cassina - Comunicación E Incidencia  - 25798003', 'Jose Ruben Yeren Cassina - Comunicación E Incidencia  - 25798003', 'Colegio...', '', '2022-12-28 15:53:00', '2022-12-29 15:53:00', '#D50000'),
(228, 29, 10, 0, 'Jorge Antony Milian Montalvo  - Sistemas - 70311233', 'Jorge Antony Milian Montalvo  - Sistemas - 70311233', 'Fe y Alegria N 5 - Lima - San Juan de Lurigancho - Lima  -  EBR ', 'URGENTE!', '2022-12-28 16:20:00', '2022-12-31 16:20:00', '#004063');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `otrostrabajadores`
--
ALTER TABLE `otrostrabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `vueloslogistica`
--
ALTER TABLE `vueloslogistica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2020 a las 21:56:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `out-mobilis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumen`
--

CREATE TABLE `resumen` (
  `Fecha` date NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resumen`
--

INSERT INTO `resumen` (`Fecha`, `Usuario`, `Total`) VALUES
('2020-05-28', 'Adriana Lizhet Rojas Banda', '1450'),
('2020-05-29', 'Maki Nishikino', '601'),
('2020-05-29', 'Maki Nishikino', '3654'),
('2020-06-03', 'Maki Nishikino', '1489'),
('2020-12-14', 'Nuevo Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666'),
('0000-00-00', 'Nino', '6666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicios` int(4) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `Tiempo` time NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicios`, `Nombre`, `Precio`, `Tiempo`, `Descripcion`) VALUES
(1, 'Alineación de llantas', '450', '00:30:00', 'La alineación es el proceso en el que se ajustan las llantas de un vehículo para que miren hacia el frente, es decir, los neumáticos de tu auto deben quedar paralelos entre sí y perpendiculares al camino, (el tiempo óptimo para realizar este servicio, se encuentra en el manual de propietario)'),
(2, 'Frenos', '598', '02:40:00', 'Tener los frenos del coche en buen estado es esencial para garantizar la seguridad. De hecho, la Dirección General de Tráfico lanza campañas cada cierto tiempo respecto a este aspecto del mantenimiento del coche. Y es que, ¿cuántas veces has visto o incluso has vivido un golpe por detrás atascado en tráfico? Este y otros muchos accidentes comunes y de distinta gravedad se producen por el incorrecto mantenimiento de los frenos'),
(3, 'Cambio de aceite', '3200', '00:30:00', 'Un cambio de aceite es cuando se reemplaza el aceite de su auto. Un cambio de aceite es simplemente el proceso de retirar el aceite usado y el filtro de aceite y de colocar aceite nuevo (y un nuevo filtro) en el auto.'),
(4, 'Holograma', '434', '00:10:00', 'Se trata de un programa dirigido al control de las emisiones contaminantes mediante la inspección de dichas emisiones directamente en los vehículos a través de sondas y bancas electrónicas, para su posterior aprobación o rechazo. Un centro encargado de realizar esta operación es comúnmente llamado Verificentro.'),
(5, 'Revision general', '150', '00:30:00', 'Para alargar la vida de su coche es muy recomendable realizar periódicamente una revision general. Una revisión general de su vehículo es muy importante para la seguridad y eficiencia del mismo. Realizar una revisión no te garantiza que el vehículo se vaya o no a averiar, pero permite prevenirlos mas fácilmente. Cada fabricante recomienda revisar el automóvil cada cierto numero de kilometros o incluso cada cierto espacio de tiempo. Consulte el manual del vehículo para conocer el programa recomendado de controles y mantenimientos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `n_ticket` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `servicios` text NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`n_ticket`, `fecha`, `cliente`, `servicios`, `total`) VALUES
(10, '2020-05-28', 'Naruto Uzumaki', '3', '1039'),
(11, '2020-05-28', 'Naruto Uzumaki', '2', '3654'),
(12, '2020-05-31', 'Elizabeth Torner', '3', '4092'),
(13, '2020-06-01', 'Elizabeth Torner', '3', '1201'),
(15, '2020-06-05', 'Elizabeth Torner', '3', '1489'),
(21, '2020-05-29', 'Maki Nishikino', '2', '3654'),
(22, '2020-06-03', 'Maki Nishikino', '3', '1489'),
(24, '2020-06-09', 'Maki Nishikino', '2', '1051'),
(25, '2020-06-12', 'Juan Carlos Vargas D', '3', '4092'),
(26, '2020-06-12', 'Carlos', '3', '1489'),
(27, '2020-06-12', 'Ricardo', '3', '3804'),
(28, '2020-06-12', 'Isabel', '4', '4692'),
(29, '2020-05-30', 'Juan Carlos Vargas D', '5', '4842'),
(30, '2020-06-05', 'Juan Carlos Vargas D', '2', '889'),
(31, '2020-06-06', 'Juan Carlos Vargas D', '3', '3804'),
(32, '2020-06-03', 'm', '2', '1051'),
(33, '2020-06-12', 'Juan Carlos Vargas D', '2', '1051'),
(34, '2020-05-30', 'Juan Carlos Vargas D', '0', '0');

--
-- Disparadores `ticket`
--
DELIMITER $$
CREATE TRIGGER `logResumen` BEFORE INSERT ON `ticket` FOR EACH ROW INSERT INTO `resumen` SET fecha = "2020-12-34", Usuario = "Nino", Total = 6666
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Tipo` varchar(15) DEFAULT NULL,
  `En_servicio` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Username`, `Clave`, `Tipo`, `En_servicio`) VALUES
('Juan', 'admin', '1234', 'admin', 1),
('Juan Carlos', 'nichovd', '12345', 'Usuario', 1),
('Maki Nishikino', 'maki', 'nishikino', 'Usuario', 1),
('polo', 'nino14', '567', 'Usuario', NULL),
('Goku', 'guku_Z', 'milk', 'Usuario', NULL),
('Altamar', 'laCausa', '105', 'Usuario', NULL),
('Elizabeth Torner', 'eliza', 'bell', 'Usuario', 1),
('Naruto Uzumaki', 'Naruto', 'konoha', 'Usuario', 1),
('Juan Carlos Vargas Delgad', 'JCVD', '12345', 'Usuario', 1),
('Carlos', 'Alberto', '1234', 'Usuario', 1),
('Ricardo', 'Rrojas', '1234', 'Usuario', 1),
('Isabel', 'bell', '1234', 'Usuario', 1),
('m', 'm', 'm', 'Usuario', 1),
('Carlos', 'juan.vargas14', '92020', 'Usuario', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `anio` year(4) NOT NULL,
  `color` varchar(20) NOT NULL,
  `puertas` int(4) NOT NULL,
  `motor` text NOT NULL,
  `transmision` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `disponibles` int(4) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`marca`, `modelo`, `anio`, `color`, `puertas`, `motor`, `transmision`, `descripcion`, `disponibles`, `imagen`, `precio`) VALUES
('Chevrolet', 'Camaro', 2020, 'Rojo', 2, '3.6 L V6, 6.2 L V8', 'Automática de 8 & 10 velocidades', 'Chevrolet Camaro 2020 Automóvil deportivo\r\nColor Rojo con vestiduras de Piel, transmisión Automática,dirección Asistida\r\nEn condicíon: Excelente', 5, 'imagenes\\Autos\\Chevrolet_Camaro.png', '778700'),
('Jeep', 'Wrangler', 2016, 'Negro', 5, '2.0 L 4 motor en línea, 3.6 L V6\r\n', 'Automática de 8 velocidades', 'JEEP Wrangler 2016 Unlimited Sport 4x4 Automático\r\nColor Negro con vestiduras de Piel, ransmisión Automática,dirección Asistida\r\n', 3, 'imagenes\\Autos\\Jeep-Wrangler.png', '750900'),
('Mazda', 'SPORT', 2020, 'Negro', 4, '2.5 L Turbo SKYACTIV-G', 'Atomática de 6 velocidades', 'Su gama está estructurada en torno a dos carrocerías, una sedán de cuatro puertas y otra familiar denominada Wagon. La carrocería de cuatro puertas alcanza los 4,86 metros de longitud, 1,84 metros de ancho y 1,45 metros de alto.', 2, 'imagenes\\Autos\\Mazda6-Sport.png', '474900'),
('BMW', 'Serie 2 Coupé M', 2017, 'Azul', 2, '3.0 L 6 motor en línea', 'Manual de 6 & 7 velocidades', 'Emocionante. Deportivo. Rebelde. El BMW M2 Competition ofrece adrenalina pura con cada detalle. Las entradas de aire ampliadas y la parrilla delantera con el logo \"M2\" dominan el frontal. Empezando en el impresionante capó, la característica silueta de coupé se extiende hasta la musculosa zaga.', 1, 'imagenes\\Autos\\BMW-M2.png', '1300000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`n_ticket`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `n_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

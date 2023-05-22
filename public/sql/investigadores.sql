-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 12:47:30
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
-- Base de datos: `investigadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `IdEquipo` char(4) NOT NULL,
  `Idfacultad` int(5) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`IdEquipo`, `Idfacultad`, `Descripcion`) VALUES
('C342', 1, 'Robot todo terreno Pioneer 2 AT'),
('C344', 1, 'Robots PPRK'),
('D234', 2, '	Cargador para baterias Radioshack'),
('G234', 3, 'Imanes Circulares'),
('G323', 4, 'IBM Thinkpad'),
('H235', 3, 'Multimetro digital FLUKE'),
('H324', 3, 'Maquina de Whimshurst'),
('H422', 2, 'Generador de Van Der Graff'),
('H503', 3, 'Telemetro laser SICK'),
('K231', 3, 'Lente para camara FUJINON-TV'),
('L234', 4, 'Estacion de trabajo Silicon Graphics'),
('M234', 3, 'Cámara digital SONY'),
('M342', 3, 'Fuente de Voltaje TEKTRONIX'),
('P098', 4, 'Cámara ZOOMCAM USB'),
('P342', 4, 'Puente de red inalambrico Proxim'),
('U422', 4, 'Haar Hygrometer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `IdFacultad` int(5) NOT NULL,
  `NomFacultad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`IdFacultad`, `NomFacultad`) VALUES
(1, 'Ciencias Exactas'),
(2, 'Ciencias Naturales'),
(3, 'Ciencia y Tecnología'),
(4, 'Bioquímica y Ciencias Biológicas'),
(5, 'Ingenieria de datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigadores`
--

CREATE TABLE `investigadores` (
  `DNI` varchar(10) NOT NULL,
  `NomInvestigador` varchar(35) DEFAULT NULL,
  `ApellInvestigador` varchar(50) DEFAULT NULL,
  `IdFacultad` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `investigadores`
--

INSERT INTO `investigadores` (`DNI`, `NomInvestigador`, `ApellInvestigador`, `IdFacultad`) VALUES
('23435343P', 'JUAN', 'BASTARDES SOTO', 2),
('32544333I', 'ELIOT', 'BIDAULT CULLERÉS', 4),
('37879998D', 'LLUÍS', 'VISO GILABERT', 4),
('38486831X', 'ESTEFANIA', 'LÓPEZ DE PABLO GARCIA UCEDA', 1),
('56234233K', 'QUERALT', 'ANGUERA VILAFRANCA', 1),
('87654321A', 'SAMUEL', 'LOPEZ SANCHEZ', 3),
('X3543098R', 'RAQUEL', 'RAYA GAVILAN', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `IdReserva` int(5) NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `IdEquipo` char(4) NOT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`IdReserva`, `DNI`, `IdEquipo`, `FechaInicio`, `FechaFin`) VALUES
(1, '37879998D', 'H235', '2005-09-09 00:00:00', '2005-09-23 00:00:00'),
(2, '38486831X', 'H324', '2005-09-09 00:00:00', '2005-09-14 00:00:00'),
(3, '32544333I', 'C342', '2005-09-13 00:00:00', '2005-09-21 00:00:00'),
(4, '38486831X', 'P342', '2005-09-16 00:00:00', '2005-10-01 00:00:00'),
(5, '56234233K', 'K231', '2005-09-20 00:00:00', '2005-09-25 00:00:00'),
(6, 'X3543098R', 'M234', '2005-09-21 00:00:00', '2005-09-29 00:00:00'),
(7, '56234233K', 'M234', '2005-09-24 00:00:00', '2005-10-02 00:00:00'),
(8, '37879998D', 'L234', '2005-09-27 00:00:00', '2005-10-11 00:00:00'),
(9, '56234233K', 'C342', '2005-10-03 00:00:00', '2005-10-14 00:00:00'),
(10, '56234233K', 'U422', '2005-10-06 00:00:00', '2005-10-10 00:00:00'),
(11, '37879998D', 'C344', '2005-10-08 00:00:00', '2005-10-19 00:00:00'),
(12, '56234233K', 'H235', '2005-10-12 00:00:00', '2005-10-23 00:00:00'),
(13, '37879998D', 'H324', '2005-10-17 00:00:00', '2005-10-24 00:00:00'),
(14, '23435343P', 'H324', '2005-10-18 00:00:00', '2005-10-25 00:00:00'),
(15, '38486831X', 'M342', '2005-10-20 00:00:00', '2005-10-27 00:00:00'),
(16, '23435343P', 'U422', '2023-05-22 12:32:00', '2005-10-29 00:00:00'),
(17, '37879998D', 'M342', '2005-10-23 00:00:00', '2005-10-28 00:00:00'),
(18, '56234233K', 'U422', '2005-10-31 00:00:00', '2005-11-07 00:00:00'),
(19, '38486831X', 'M234', '2005-11-06 00:00:00', '2005-11-10 00:00:00'),
(20, '56234233K', 'C342', '2005-11-15 00:00:00', '2005-11-24 00:00:00'),
(21, '56234233K', 'K231', '2005-11-20 00:00:00', '2005-11-30 00:00:00'),
(22, '23435343P', 'H503', '2005-11-23 00:00:00', '2005-12-07 00:00:00'),
(23, '32544333I', 'C344', '2005-11-26 00:00:00', '2005-12-06 00:00:00'),
(24, '32544333I', 'P342', '2005-11-28 00:00:00', '2005-12-05 00:00:00'),
(25, '38486831X', 'P342', '2005-11-30 00:00:00', '2005-12-07 00:00:00'),
(26, '23435343P', 'G234', '2005-12-01 00:00:00', '2005-12-05 00:00:00'),
(27, 'X3543098R', 'P098', '2005-12-04 00:00:00', '2005-12-11 00:00:00'),
(28, '23435343P', 'M234', '2005-12-09 00:00:00', '2005-12-14 00:00:00'),
(29, '23435343P', 'H235', '2005-12-13 00:00:00', '2005-12-28 00:00:00'),
(30, 'X3543098R', 'P342', '2005-12-14 00:00:00', '2005-12-23 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IdEquipo`),
  ADD KEY `Idfacultad` (`Idfacultad`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`IdFacultad`);

--
-- Indices de la tabla `investigadores`
--
ALTER TABLE `investigadores`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `IdFacultad` (`IdFacultad`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`IdReserva`,`DNI`,`IdEquipo`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `IdEquipo` (`IdEquipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `IdFacultad` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `IdReserva` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`Idfacultad`) REFERENCES `facultad` (`IdFacultad`);

--
-- Filtros para la tabla `investigadores`
--
ALTER TABLE `investigadores`
  ADD CONSTRAINT `investigadores_ibfk_1` FOREIGN KEY (`IdFacultad`) REFERENCES `facultad` (`IdFacultad`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `investigadores` (`DNI`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`IdEquipo`) REFERENCES `equipo` (`IdEquipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

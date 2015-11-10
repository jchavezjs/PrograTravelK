-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2015 a las 20:38:29
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agencia_viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aerolineas`
--

CREATE TABLE IF NOT EXISTS `aerolineas` (
`idaerolinea` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
`idhotel` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `ruta_foto` varchar(100) NOT NULL,
  `idpais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
`idpais` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ruta_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
`idreserva` int(11) NOT NULL,
  `idtarjeta` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpais` int(11) NOT NULL,
  `idvuelo` int(11) NOT NULL,
  `idhotel` int(11) NOT NULL,
  `numeroPersona` int(11) NOT NULL,
  `numeroDias` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE IF NOT EXISTS `tarjeta` (
`idtarjeta` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `numeroTarjeta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE IF NOT EXISTS `vuelo` (
`idvuelo` int(11) NOT NULL,
  `idpais` int(11) NOT NULL,
  `idaerolinea` int(11) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aerolineas`
--
ALTER TABLE `aerolineas`
 ADD PRIMARY KEY (`idaerolinea`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`idhotel`), ADD KEY `idpais` (`idpais`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
 ADD PRIMARY KEY (`idpais`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
 ADD PRIMARY KEY (`idreserva`), ADD KEY `idtarjeta` (`idtarjeta`,`idusuario`,`idpais`,`idvuelo`,`idhotel`), ADD KEY `idusuario` (`idusuario`), ADD KEY `idpais` (`idpais`), ADD KEY `idvuelo` (`idvuelo`), ADD KEY `idhotel` (`idhotel`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
 ADD PRIMARY KEY (`idtarjeta`), ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
 ADD PRIMARY KEY (`idvuelo`), ADD KEY `idpais` (`idpais`,`idaerolinea`), ADD KEY `idaerolinea` (`idaerolinea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aerolineas`
--
ALTER TABLE `aerolineas`
MODIFY `idaerolinea` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
MODIFY `idhotel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
MODIFY `idpais` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
MODIFY `idtarjeta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
MODIFY `idvuelo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `pais` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
ADD CONSTRAINT `pais_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `vuelo` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idtarjeta`) REFERENCES `tarjeta` (`idtarjeta`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`idpais`) REFERENCES `pais` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reserva_ibfk_4` FOREIGN KEY (`idvuelo`) REFERENCES `vuelo` (`idvuelo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reserva_ibfk_5` FOREIGN KEY (`idhotel`) REFERENCES `hotel` (`idhotel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
ADD CONSTRAINT `vuelo_ibfk_1` FOREIGN KEY (`idaerolinea`) REFERENCES `aerolineas` (`idaerolinea`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2016 a las 05:48:33
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `spde`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

CREATE TABLE IF NOT EXISTS `accion` (
  `idAccion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idAccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica`
--

CREATE TABLE IF NOT EXISTS `caracteristica` (
  `idCaracteristica` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idCaracteristica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE IF NOT EXISTS `clasificacion` (
  `idClasificacion` int(11) NOT NULL AUTO_INCREMENT,
  `desertor` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `idEstudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`idClasificacion`),
  KEY `fk_idEstudiante` (`idEstudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE IF NOT EXISTS `entrenamiento` (
  `idEntrenamiento` int(11) NOT NULL AUTO_INCREMENT,
  `idClasificacion` int(11) DEFAULT NULL,
  `idCaracteristica` int(11) DEFAULT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idEntrenamiento`),
  KEY `fk_idClasificacion` (`idClasificacion`),
  KEY `fk_idCaracteristica` (`idCaracteristica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `idEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `tipoIdentificacion` int(11) DEFAULT NULL,
  `identificacion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `nombres` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  UNIQUE KEY `codigo` (`codigo`),
  UNIQUE KEY `identificacion` (`identificacion`),
  KEY `fk_tipoIdentificacionEst` (`tipoIdentificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientoestudiante`
--

CREATE TABLE IF NOT EXISTS `seguimientoestudiante` (
  `idSeguimientoEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `idAccion` int(11) DEFAULT NULL,
  `idEstudiante` int(11) DEFAULT NULL,
  `observaciones` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `asignadoA` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSeguimientoEstudiante`),
  KEY `fk_idEstudianteSeg` (`idEstudiante`),
  KEY `fk_idAccion` (`idAccion`),
  KEY `fk_asignadoA` (`asignadoA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE IF NOT EXISTS `tipoidentificacion` (
  `idTipoIdentificacion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(4) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idTipoIdentificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipoUsuario` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idTipoUsuario`),
  UNIQUE KEY `tipoUsuario` (`tipoUsuario`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `tipoUsuario`, `descripcion`) VALUES
(1, 1, 'uno uno dos'),
(2, 2, 'Docente'),
(3, 4, 'administrativovdfv'),
(4, 5, 'empleado'),
(5, 6, 'Tipo usuario numero uno'),
(6, 7, 'septimo'),
(7, 8, 'octavo usuario'),
(8, 9, 'noveno usuario'),
(9, 10, 'decimo'),
(10, 11, 'onceavo'),
(11, 12, 'doceavo'),
(12, 13, 'trece'),
(13, 14, 'catorce'),
(14, 15, 'quince'),
(15, 16, 'dieciseis'),
(16, 17, 'diecisiete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoIdentificacion` int(11) DEFAULT NULL,
  `identificacion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `nombres` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_tipoIdentificacion` (`idTipoIdentificacion`),
  KEY `fk_tipousuario` (`idTipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorol`
--

CREATE TABLE IF NOT EXISTS `usuariorol` (
  `idUsuarioRol` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `idRol` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuarioRol`),
  KEY `fk_idUsuario` (`idUsuario`),
  KEY `fk_idRol` (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD CONSTRAINT `fk_idEstudiante` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`);

--
-- Filtros para la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD CONSTRAINT `fk_idCaracteristica` FOREIGN KEY (`idCaracteristica`) REFERENCES `caracteristica` (`idCaracteristica`),
  ADD CONSTRAINT `fk_idClasificacion` FOREIGN KEY (`idClasificacion`) REFERENCES `clasificacion` (`idClasificacion`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_tipoIdentificacionEst` FOREIGN KEY (`tipoIdentificacion`) REFERENCES `tipoidentificacion` (`idTipoIdentificacion`);

--
-- Filtros para la tabla `seguimientoestudiante`
--
ALTER TABLE `seguimientoestudiante`
  ADD CONSTRAINT `fk_asignadoA` FOREIGN KEY (`asignadoA`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `fk_idAccion` FOREIGN KEY (`idAccion`) REFERENCES `accion` (`idAccion`),
  ADD CONSTRAINT `fk_idEstudianteSeg` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tipoIdentificacion` FOREIGN KEY (`idTipoIdentificacion`) REFERENCES `tipoidentificacion` (`idTipoIdentificacion`),
  ADD CONSTRAINT `fk_tipousuario` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`);

--
-- Filtros para la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD CONSTRAINT `fk_idRol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRole`),
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

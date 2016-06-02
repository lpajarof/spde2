-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 13:31:27
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
-- Estructura Stand-in para la vista `calmodelo`
--
CREATE TABLE IF NOT EXISTS `calmodelo` (
`id` bigint(20)
,`desertor` varchar(11)
,`probabilidad` decimal(24,4)
,`mediaC1` double
,`varianzac1` double
,`mediac2` double
,`varianzac2` double
,`mediac3` double
,`varianzac3` double
,`mediac4` double
,`varianzac4` double
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica`
--

CREATE TABLE IF NOT EXISTS `caracteristica` (
  `idCaracteristica` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idCaracteristica`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `caracteristica`
--

INSERT INTO `caracteristica` (`idCaracteristica`, `descripcion`) VALUES
(4, 'Forma de pago (1 Contado, 2 Icetex, 3 cheque)'),
(3, 'Número de asignaturas cursadas'),
(1, 'Promedio'),
(2, 'Semestre');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=146 ;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idClasificacion`, `desertor`, `anio`, `periodo`, `idEstudiante`) VALUES
(1, 0, 2015, 1, 202),
(2, 1, 2015, 1, 203),
(3, 0, 2015, 1, 204),
(4, 1, 2015, 1, 206),
(5, 0, 2015, 1, 207),
(6, 0, 2015, 1, 208),
(9, 1, 2015, 1, 219),
(11, 0, 2015, 1, 220),
(12, 0, 2015, 1, 221),
(13, 0, 2015, 1, 222),
(14, 0, 2015, 1, 223),
(15, 0, 2015, 1, 224),
(16, 0, 2015, 1, 225),
(17, 0, 2015, 1, 226),
(18, 0, 2015, 1, 227),
(20, 1, 2015, 1, 228),
(21, 1, 2015, 1, 229),
(22, 1, 2015, 1, 230),
(23, 1, 2015, 1, 231),
(24, 1, 2015, 1, 232),
(25, 1, 2015, 1, 233),
(26, 1, 2015, 1, 234),
(27, 1, 2015, 1, 235),
(28, 1, 2015, 1, 236),
(29, 1, 2015, 1, 237),
(30, 1, 2015, 1, 238),
(31, 1, 2015, 1, 239),
(32, 1, 2015, 1, 240),
(33, 1, 2015, 1, 241),
(34, 1, 2015, 1, 242),
(35, 1, 2015, 1, 243),
(36, 1, 2015, 1, 244),
(37, 1, 2015, 1, 245),
(38, 1, 2015, 1, 246),
(39, 1, 2015, 1, 247),
(40, 1, 2015, 1, 248),
(41, 1, 2015, 1, 249),
(42, 1, 2015, 1, 250),
(43, 1, 2015, 1, 251),
(44, 1, 2015, 1, 252),
(45, 1, 2015, 1, 253),
(46, 1, 2015, 1, 254),
(47, 1, 2015, 1, 255),
(48, 1, 2015, 1, 256),
(49, 1, 2015, 1, 257),
(50, 1, 2015, 1, 258),
(51, 1, 2015, 1, 259),
(52, 1, 2015, 1, 260),
(53, 1, 2015, 1, 261),
(54, 1, 2015, 1, 262),
(55, 1, 2015, 1, 263),
(56, 1, 2015, 1, 264),
(57, 1, 2015, 1, 265),
(58, 1, 2015, 1, 266),
(59, 1, 2015, 1, 267),
(60, 1, 2015, 1, 268),
(61, 1, 2015, 1, 269),
(62, 1, 2015, 1, 270),
(63, 1, 2015, 1, 271),
(64, 1, 2015, 1, 272),
(65, 1, 2015, 1, 273),
(66, 1, 2015, 1, 274),
(67, 1, 2015, 1, 275),
(68, 1, 2015, 1, 276),
(69, 1, 2015, 1, 277),
(83, 0, 2015, 1, 278),
(84, 0, 2015, 1, 279),
(85, 0, 2015, 1, 280),
(86, 0, 2015, 1, 281),
(87, 0, 2015, 1, 282),
(88, 0, 2015, 1, 283),
(89, 0, 2015, 1, 284),
(90, 0, 2015, 1, 285),
(91, 0, 2015, 1, 286),
(92, 0, 2015, 1, 287),
(93, 0, 2015, 1, 288),
(94, 0, 2015, 1, 289),
(95, 0, 2015, 1, 290),
(96, 0, 2015, 1, 291),
(97, 0, 2015, 1, 292),
(98, 0, 2015, 1, 293),
(99, 0, 2015, 1, 294),
(100, 0, 2015, 1, 295),
(101, 0, 2015, 1, 296),
(102, 0, 2015, 1, 297),
(103, 0, 2015, 1, 298),
(104, 0, 2015, 1, 299),
(105, 0, 2015, 1, 300),
(106, 0, 2015, 1, 301),
(107, 0, 2015, 1, 302),
(108, 0, 2015, 1, 303),
(109, 0, 2015, 1, 304),
(110, 0, 2015, 1, 305),
(111, 0, 2015, 1, 306),
(112, 0, 2015, 1, 307),
(113, 0, 2015, 1, 308),
(114, 0, 2015, 1, 309),
(115, 0, 2015, 1, 310),
(116, 0, 2015, 1, 311),
(117, 0, 2015, 1, 312),
(118, 0, 2015, 1, 313),
(119, 0, 2015, 1, 314),
(120, 0, 2015, 1, 315),
(121, 0, 2015, 1, 316),
(122, 0, 2015, 1, 317),
(123, 0, 2015, 1, 318),
(124, 0, 2015, 1, 319),
(125, 0, 2015, 1, 320),
(126, 0, 2015, 1, 321),
(127, 0, 2015, 1, 322),
(128, 0, 2015, 1, 323),
(129, 0, 2015, 1, 324),
(130, 0, 2015, 1, 325),
(131, 0, 2015, 1, 326),
(132, 0, 2015, 1, 327);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE IF NOT EXISTS `entrenamiento` (
  `identrenamiento` int(11) NOT NULL AUTO_INCREMENT,
  `desertor` int(2) NOT NULL,
  `c1` float DEFAULT NULL,
  `c2` float DEFAULT NULL,
  `c3` float DEFAULT NULL,
  `c4` float DEFAULT NULL,
  `idestudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`identrenamiento`),
  KEY `fk_idestudiante2` (`idestudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `entrenamiento`
--

INSERT INTO `entrenamiento` (`identrenamiento`, `desertor`, `c1`, `c2`, `c3`, `c4`, `idestudiante`) VALUES
(1, 1, 6, 180, 12, 1, 202),
(2, 1, 5.92, 190, 11, 1, 203),
(3, 1, 5.58, 170, 12, 1, 204),
(4, 1, 5.92, 165, 10, 1, 205),
(9, 0, 5, 100, 6, 1, 210),
(10, 0, 5.5, 150, 8, 1, 211),
(11, 0, 5.42, 130, 7, 1, 212),
(12, 0, 5.75, 150, 9, 1, 213);

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
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `programa` int(11) NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  UNIQUE KEY `codigo` (`codigo`),
  UNIQUE KEY `identificacion` (`identificacion`),
  KEY `fk_tipoIdentificacionEst` (`tipoIdentificacion`),
  KEY `fk_programa` (`programa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=401 ;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idEstudiante`, `codigo`, `tipoIdentificacion`, `identificacion`, `nombres`, `apellidos`, `email`, `telefono`, `direccion`, `programa`) VALUES
(202, '124488', 1, '5825971', 'LUIS FELIPE ANDRES', 'ZAMBRANO NOVOA', '', '7887100', 'CR 45', 3),
(203, '124491', 1, '7546740', 'LUIS EDUARDO', 'ZAMBRANO CALVACHE', '', '5438200', 'CL 70 BIS 119 24', 4),
(204, '124506', 1, '7547556', 'LUIS CARLOS', 'ZABALA GUZMAN', '', '3656300', 'CR 11 C 65 59 SUR', 5),
(205, '124511', 1, '7706521', 'LIZETH LORENA', 'WALTEROS PACAVITA', '', '8293400', 'CR 54 2 A 54', 5),
(206, '124520', 1, '13702156', 'LIRIS YANETH', 'VILLAR COHECHA', '', '3723500', 'TV 5 F BIS 44 38', 5),
(207, '125969', 1, '14396683', 'LINA MARIA', 'VILLAMIL CASALLAS', '', '5678600', 'CR 6 D ES 113 55 SUR', 5),
(208, '125975', 1, '16188763', 'LILIANA FABIOLA', 'VILLALBA AMAYA', '', '7161700', 'CR 42 82 SUR 83', 5),
(209, '125977', 1, '16944858', 'LEYLA MAGNOLIA', 'VEGA GARZON', '', '7842800', 'CR 88 A 59 C 30', 5),
(210, '125978', 1, '17691012', 'LEYDY JANETH', 'VASQUEZ SALINAS', '', '5722900', 'CR 52 ESTE 50  61 CD', 5),
(211, '125979', 1, '18402156', 'LEIDY TATIANA', 'VARGAS RODRIGUEZ', '', '7906100', 'CR 78 D SUR 4376', 5),
(212, '125981', 1, '20505042', 'LEIDY ROCÍO', 'VALERA LARA', '', '7606110', 'TV 12 B 40 07 SUR', 5),
(213, '125982', 1, '20879326', 'LEIDY PAOLA', 'VALDES CASALLAS', '', '2071120', 'CR 14 ESTE 42 09', 5),
(214, '125987', 1, '21087980', 'LAURA VALENTINA', 'TRIANA ORDOÑEZ', '', 'X130000', 'VEREDA SAN FRANCISCO GUASCA CUND', 5),
(215, '125988', 1, '26543152', 'LAURA MILENA', 'TOVAR CORTES', '', '5761140', 'CR 82 B 62 D 85', 5),
(216, '125989', 1, '28556594', 'LAURA JHISELL', 'TORRES OLMOS', '', '7921150', 'CR 17 B BIS A 66 62', 5),
(217, '125991', 1, '31970146', 'LAURA CAROLINA', 'TORRES MURCIA', '', '2096160', 'DG 4 6 B ES 05', 3),
(218, '125992', 1, '36346674', 'LAURA CAMILA', 'TORRES GONZALEZ', '', '4504170', 'CR 8 B ES 18 46', 3),
(219, '125995', 1, '38211459', 'LAURA CAMILA', 'TORO CORRAL', '', '7479180', 'CR 1 A 74 A 20 SUR', 3),
(220, '125997', 1, '38247728', 'LAURA', 'TORO BARRERA', '', '6106190', 'CR 21 87 25', 3),
(221, '125999', 1, '39536519', 'LADY VIVIANA', 'TIQUE CEBALLOS', '', '6960200', 'CR 21 Ã‘ 39B-25 APT 101', 3),
(222, '126000', 1, '39542310', 'KATHERINE', 'TINJACA DEL CASTILLO', '', '7174210', 'CR 43 A 68 B 11 SUR 09', 3),
(223, '126001', 1, '39572081', 'KAREN JULIETH', 'TARAZONA MONTEALEGRE', '', '7178220', 'CR 73 70 55', 3),
(224, '126002', 1, '40077466', 'KAREN GISELA', 'TAMAYO URREA', '', '2794230', 'DG 45 B BIS 16 A 37', 3),
(225, '126003', 1, '40383285', 'KAREN DANIELA', 'SIERRA NIEVES', '', '7720240', 'CR 2 49 56 SUR', 3),
(226, '126004', 1, '46376145', 'JULY CAROLINA', 'SARMIENTO PICO', '', '7151250', 'CL 63 A 33 SUR 11', 3),
(227, '126005', 1, '46451153', 'JULIAN ANDRES', 'SANDOVAL FERNANDEZ', '', '7605260', 'CL 48 W 5 30', 3),
(228, '126006', 1, '46680440', 'JULIAN', 'SANDINO SERRANO', '', '7179270', 'TV 73 H 75 22 SUR', 3),
(229, '126007', 1, '51632239', 'JUDY ALEJANDRA', 'SANCHEZ SOCHE', '', '4346280', 'CL 64 C 111 74', 3),
(230, '126008', 1, '51910606', 'JUAN SEBASTIAN', 'SANCHEZ SAAVEDRA', '', '2070290', 'CR 68 H 67 22', 3),
(231, '126009', 1, '51941919', 'JUAN SEBASTIAN', 'SANCHEZ RAMIREZ', '', '9019300', 'CR 8 A 7 C 21 BRR DUCALES AP 205 TO 6', 5),
(232, '126010', 1, '52005322', 'JUAN DAVID', 'SANCHEZ OCHOA', '', '2151310', 'CL 72 C 111 27', 5),
(233, '126011', 1, '52059980', 'JOSE GABRIEL', 'SÁNCHEZ MURCIA', '', '2698320', 'CR 8 47 SUR 81', 5),
(234, '126012', 1, '52066010', 'JORGE LUIS HERNANDO', 'CASAS MORENO', '', '3717330', 'DG 48 B 14 54 SUR ES', 5),
(235, '126013', 1, '52203742', 'JORGE ELIECER', 'CASAS SUAREZ', '', '0.34', '.', 3),
(236, '126014', 1, '52265496', 'JORGE ELIECER', 'CASASBUENAS VIVAS', '', '8632350', 'CL 7 1 19', 3),
(237, '126015', 1, '52354061', 'JONATHAN JAPSON', 'CELEMIN VELASQUEZ', '', '(091360', 'CALL 58 A 19 - 37 APTO 402', 3),
(238, '126016', 1, '52382901', 'JOHN ALEXANDER', 'CHAMORRO ROSERO', '', '3166370', 'kRA 102 86 A 46 INT.11-502                   ', 3),
(239, '126017', 1, '52397325', 'JOHANNA LISETTE', 'CHIQUIZA BALLESTEROS', '', '(000380', 'Carrera 3 No 13A-57', 3),
(240, '126018', 1, '52426253', 'JOHANA ANDREA', 'CIFUENTES GONZALEZ', '', '(000390', 'CALLE 8 11-01 CASA 35', 5),
(241, '126019', 1, '52434211', 'JHALILE AISSA', 'CIFUENTES MARTIN', '', '3105400', 'Calle 34 sur # 3a - 45 este int 4            ', 5),
(242, '126020', 1, '52450613', 'JHAIR STEEVEN', 'COLLAZOS CASTRO', '', '410', 'CRA 101 NO 83 90', 5),
(243, '126021', 1, '52461538', 'JENNY STELLA', 'COLMENARES BARBUDO', '', '0.42', '.', 4),
(244, '126022', 1, '52472581', 'JENNIFER ESTEFANIA', 'CORONEL PRIETO', '', '(000430', 'DERECHO 2102476', 5),
(245, '126024', 1, '52473015', 'JENNIFER ANDREA', 'DAZA VARELA', '', '3204450', 'KR 69 N N    65 61   NORTE CS', 5),
(246, '126025', 1, '52503368', 'JEISSON STEVEN', 'DEL CAMPO CAMACHO', '', '(000460', 'CR 14 BIS A 27 83 SUR', 3),
(247, '126026', 1, '52523195', 'JEISSON ANDRES', 'DELGADO SCARPETTA', '', '2781470', 'CR 9 17 64 CHIA', 3),
(248, '126027', 1, '52562568', 'JEIDY JOHANNA', 'DIAZ RIVERA', '', '4800000', 'CRA 99 14 78', 3),
(249, '126028', 1, '52588617', 'JASBLEIDY ALEJANDRA', 'DIAZ ROA', '', '(091490', 'CALLE 4 NO. 36-31', 3),
(250, '126029', 1, '52705143', 'JAIRO', 'DIAZ RODRIGUEZ', '', '(000500', 'Carrera 70 No. 22 - 75 int 39 apartament     ', 3),
(251, '126030', 1, '52761323', 'JAIME ORLANDO', 'DUQUE MORALES', '', '5702510', 'CL 80 N.103B-25 I.3 B.50 A.402', 3),
(252, '126031', 1, '52797206', 'IVAN SANTIAGO', 'ESCOBAR CORREDOR', '', '(000520', 'CR 7 45 19 AP 401', 3),
(253, '126032', 1, '52823865', 'IVAN DARIO', 'ESGUERRA MORA', '', '2859530', 'CR 20 40 78 AP 104', 3),
(254, '126033', 1, '52850493', 'INGRY TATIANA', 'ESPINOSA HERRERA', '', '(311540', 'DIAG 9 D SUR NO 8 19 ESTE', 3),
(255, '126034', 1, '52868243', 'IDALIA', 'FLOREZ ESPINOSA', '', '2452550', 'CALLE 117 N.9C- 53', 3),
(256, '126035', 1, '52914522', 'HENRY GEOVANNY', 'FONSECA SOTELO', '', '560', 'CLL.  87   102   60', 3),
(257, '126036', 1, '52928530', 'HELMER ROBERTO', 'FORERO MARTINEZ', '', '(300570', 'CRA 96G BIS  N 16A-50', 3),
(258, '126037', 1, '52928978', 'HEIDY DANIELA', 'FORERO MUÑOZ', '', '(000580', 'cra 26 N. 32 a 18 Sur', 3),
(259, '126038', 1, '52956256', 'HAURYN JULISSA', 'FORERO MUÑOZ', '', '(312590', 'CRA 31 N.48-20 SUR', 3),
(260, '126039', 1, '53011268', 'HAROLD HEDER', 'FUENTES LESMES', '', '6000000', 'CALLE 23 F NUMERO 104 A - 12', 5),
(261, '126040', 1, '53070300', 'HAROLD ANDRES', 'GACHARNÁ BERMEO', '', '(091610', 'SISTEMAS 624028', 5),
(262, '126041', 1, '53075730', 'GREGORIO ESTEBAN', 'GALINDO LLANOS', '', '(000620', 'TRANS. 77 N. 6D-89 APTO. 104', 5),
(263, '126042', 1, '53135741', 'GINA CAROLAY', 'GALLEGO SICUAMIA', '', '(000630', 'carrera15 No 2a - 15', 5),
(264, '126043', 1, '53154845', 'GEORGY PAOLO', 'GARCIA CRISTANCHO', '', '(310640', 'INGENIERÍA INDUSTRIAL 535569', 3),
(265, '126044', 1, '55235988', 'GEORGE STIVENS', 'GARCIA PEREZ', '', '(000650', 'CLL  64C  68  B  98 APT. 102', 3),
(266, '126045', 1, '63315463', 'FERNANDO', 'GARZON FLORIAN', '', '(000660', 'CL 35 A   SUR 4 A   69                       ', 3),
(267, '126046', 1, '65782142', 'FABIAN STIVEN', 'GARZON GONZALEZ', '', '(315670', 'CL 159 B 8 D 43 AP 301', 3),
(268, '126047', 1, '71217740', 'FABIAN LEONARDO', 'GASPAR MOLINA', '', '(000680', 'CR 13 93 85 AP 304', 3),
(269, '126048', 1, '73187017', 'FABIAN GIOVANNY', 'GERENA PAEZ', '', '(311690', 'CR 19 131 69 AP 906 TO 2', 5),
(270, '126049', 1, '79255073', 'FABIAN ENRIQUE', 'GOMEZ GIRALDO', '', '7000000', 'CL 143 45 21 IN 15 AP 401', 5),
(271, '126050', 1, '79348470', 'ERICA', 'GOMEZ PARDO', '', '(000710', 'CL 24 53 28', 5),
(272, '126051', 1, '79452934', 'EDWIN YEZID', 'GOMEZ SILVA', '', '(000720', 'CR 59 22 B 31', 4),
(273, '126052', 1, '79716785', 'EDISON OSVALDO', 'GONZALEZ BENITEZ', '', '730', 'TV 1 A 57 09 AP 301 ED TREVERIS', 4),
(274, '126053', 1, '79745488', 'EDILMA DANIELA', 'GONZALEZ CAMERO', '', '7400000', 'CR 8 A 15 63 LC 129', 4),
(275, '126054', 1, '79777610', 'EDGAR YECID', 'GONZALEZ LUGO', '', '(301750', 'CL 109 20 10 AP 604', 4),
(276, '126055', 1, '79858493', 'DIEGO RICARDO', 'GONZALEZ NOVA', '', '3191760', 'TV 55 N115 69', 5),
(277, '126056', 1, '80073879', 'DIEGO LUBIN', 'GONZALEZ REYES', '', '6171770', 'CL 7 A BIS 78 F 07 AP 117', 5),
(278, '126057', 2, '80098682', 'DIEGO FERNANDO', 'GONZALEZ ROMERO', '', '6330780', 'CR 5 131 14', 5),
(279, '126058', 2, '80179804', 'DIEGO ALEJANDRO', 'GORDILLO ALVAREZ', '', '6148790', 'CL 118 19 72 AP 402', 3),
(280, '126059', 1, '80191794', 'DIEGO', 'GREEN VILLAMIL', '', '2884800', 'CR 90 A 76 A 48', 3),
(281, '126060', 1, '80449178', 'DIANA YULIET', 'GRUESO MALDONADO', '', '4298810', 'CL 127 B 6 A 50 AP 203', 3),
(282, '126061', 1, '80489361', 'DIANA PATRICIA', 'GUERRERO RANGEL', '', '3128820', 'CL 168 8 H 40 IN 2 AP 204', 3),
(283, '126062', 1, '80490732', 'DIANA PATRICIA', 'GUTIERREZ TINTIN', '', '3418830', 'DG 187 A 20 25 BL 9 AP 201', 3),
(284, '150674', 1, '80768756', 'DIANA MILENA', 'HERNANDEZ MORALES', '', '6374840', 'TV 16 A 47 48', 3),
(285, '231393', 2, '80807039', 'DIANA MERCEDES', 'HERRERA SUAREZ', '', '6431850', 'CL 187 BIS 20 45 CA 35', 3),
(286, '231398', 2, '80834018', 'DIANA MARCELA', 'HURTADO RODRIGUEZ', '', '2923860', 'CL 111 45 A 70 IN 3 AP 101', 3),
(287, '231404', 1, '85470347', 'DIANA FARLEY', 'LEON GARZON', '', '3472870', 'CL 22 D 86 61 CA 47', 3),
(288, '231407', 1, '93236610', 'DIANA CAROLINA', 'LEON JOVEN', '', '4281880', 'CR 28 A 102 BRR SANTA ISABEL', 3),
(289, '231412', 1, '93362013', 'DIANA CAROLINA', 'LEÓN RODRIGUEZ', '', '2720890', 'cra 68I # 17 - 29 sur', 3),
(290, '231413', 2, '93371348', 'DEYSI ADRIANA', 'LOAIZA GRANDE', '', '6295900', 'CR 24 12 06', 3),
(291, '231416', 1, '1001053538', 'DERLY EMELINA', 'LOPEZ ', '', '7403910', 'CR 52 44 C 52 AP 102 B', 3),
(292, '231417', 1, '1010223231', 'DAVID RICARDO', 'LOPEZ AYALA', '', '3362920', 'CR 16 50 31', 3),
(293, '231424', 1, '1012440040', 'DAVID LEONARDO', 'LOPEZ BARRETO', '', '6703930', 'CR 34 91 93', 3),
(294, '231430', 2, '1013577835', 'DAVID FELIPE', 'LOPEZ BRIÑEZ', '', '2323940', 'CL 60 B    67 43   SUR', 5),
(295, '300439', 1, '1013585973', 'DAVID ESTEBAN', 'LOPEZ CORTES', '', '3277950', 'CR 21 6 80', 5),
(296, '300448', 1, '1013681133', 'DANIEL ALBERTO', 'LOPEZ GRANADA', '', '3320960', 'CR 1 ESTE 77 34 AP 502', 5),
(297, '300449', 2, '1014185886', 'CRISTIAN LEONARDO', 'LÓPEZ SÁENZ', '', '6332970', 'CR 23 36 50 AP 503', 4),
(298, '319882', 1, '1014253275', 'CRISTIAN DAVID', 'MANCILLA ', '', '4066980', 'CR 7 49 28 AP 702', 4),
(299, '319887', 2, '1014256266', 'CLAUDIA PATRICIA', 'MANRIQUE GUTIERREZ', '', '(000990', 'CR 13 33 01 AP 514 TO 3', 4),
(300, '319895', 1, '1014262254', 'CLAUDIA MILENA', 'MARTINEZ CAMARGO', '', '8262100', 'DG 130 7 20 AP 504', 4),
(301, '319907', 2, '1014291166', 'CLARA VANESSA', 'MARTINEZ CASTAÑO', '', '3157101', 'CL 81 110 34 BL 8 AP 202', 5),
(302, '319912', 1, '1015395761', 'CARLOS MARIO', 'MARTINEZ CHAVARRO', '', '2499102', 'CL 6 3 40 NEIVA', 5),
(303, '319918', 1, '1015406491', 'CARLOS ANDRES', 'MEDINA VELASQUEZ', '', '1040000', 'CL 146 16 47 BRR LAS MARGARITOS', 3),
(304, '319921', 2, '1015458513', 'CARLOS ANDRES', 'MEJÍA GIL', '', '2458105', 'CL 96 17 69 AP 201', 3),
(305, '319922', 1, '1015463129', 'CAMILO ANDRES', 'MEJIA RAMIREZ', '', '3458106', 'CR 13 29 24', 3),
(306, '319925', 1, '1015999893', 'BRIAN LEONARDO', 'MELENDRO ALCAZAR', '', '2688107', 'CL 19 7 48 PI 7', 5),
(307, '319937', 1, '1016018773', 'BLANCA ROCIO', 'MELGAREJO TORRES', '', '3232108', 'cll 5 a no 71 g 30', 5),
(308, '319944', 1, '1016049902', 'BLANCA ESPERANZA', 'MENDEZ FLOREZ', '', '4600109', 'CR 16 A 64 A 66 SUR', 5),
(309, '319952', 1, '1016087207', 'BLANCA CECILIA', 'MENDEZ NEIRA', '', '6156110', 'CR 18 41 90 AP 201', 4),
(310, '340908', 1, '1016090327', 'BLADIMIR', 'MENDEZ NEIRA', '', '4359111', 'CL 67 9 42 AP 301', 4),
(311, '340924', 2, '1022430833', 'ANGIE TATIANA', 'MONTENEGRO FONSECA', '', '8722112', 'CR 10 73 20 AP 102', 4),
(312, '340928', 1, '1022424635', 'ANGELA CAROLINA', 'MONTILLA BASTO', '', '315 113', 'CL 138 54 01 BL 8 AP 405', 4),
(313, '340931', 1, '1022418804', 'ANGELA', 'MORALES CARDENAS', '', '2741114', 'CR 22 148 32', 5),
(314, '340932', 1, '1020828398', 'ANGEL EDUARDO', 'MORALES JAIMES', '', '6183115', 'CL 72 B SUR 79 57 BRR BOSA ISRAELITA', 5),
(315, '340934', 1, '1020815021', 'ANGE PAOLA', 'MORENO CASALLAS', '', '5600116', 'CL 24 85 B 09 AP 603 TO 5', 5),
(316, '340935', 2, '1019128226', 'ANDRES FELIPE', 'MORENO FRANCO', '', '3420117', 'CL 65 3B 10 AP 204', 3),
(317, '350890', 1, '1019119348', 'ANDRES FABIAN', 'MUÑOZ SANCHEZ', '', '1180000', 'CL 136 A 109 A 34 VILLA MARIA SUBA', 4),
(318, '350891', 1, '1019109016', 'YULY ANDREA', 'NARANJO GAONA', '', '7657119', 'CR 51 151 B 15 AP 122', 4),
(319, '425964', 1, '1019052554', 'YULY ANDREA', 'NEIRA MARIN', '', '3203120', 'CR 10 A 119 30 AP 501', 4),
(320, '425965', 1, '1018502392', 'YULIETH VANESSA', 'ORTIZ PRADA', '', '3455121', 'CR 14 134 A 42', 5),
(321, '425974', 1, '1018498516', 'YULI PAOLA', 'ORTIZ ROJAS', '', '3460122', 'CL 172 55 74', 5),
(322, '425976', 1, '1018490386', 'YENY PAOLA', 'OTALORA IBARRA', '', '2262123', 'CL 43 A 69 D 80 TO 1 AP 203', 5),
(323, '425983', 1, '1018483247', 'YENY ANDREA', 'PABON MORALES', '', '2749124', 'CL 161 54 18 AP 104 TO 5', 3),
(324, '425991', 1, '1018480368', 'YENNY MARCELA', 'PAEZ SIERRA', '', '7193125', 'DG 44 SUR 50 97', 3),
(325, '425999', 1, '1018460843', 'YAMID', 'PAJARITO LONDOÑO', '', '4296126', 'TV 41 114 71 IN 9 C', 3),
(326, '426041', 1, '1018445756', 'WILLIAM ALFREDO', 'PARDO GONZALEZ', '', '3481127', 'CL 6 B BIS 79 C 06 BL 13 IN 6 AP 301', 5),
(327, '426073', 1, '1018432122', 'WILLIAM ALFREDO', 'PARRA TURRIAGO', '', '6877128', 'CL 128 B 78 90 CA 6', 5),
(328, '426075', 1, '1018415491', 'VALENTINA', 'PATIÑO ALZATE', '', '2714129', 'CL 56 7 63 AP 301', 5),
(329, '426119', 1, '1018412518', 'STEVEN ALEJANDRO', 'PEÑA MEJIA', '', '6123130', 'CL 65 1 A 26 AP 602 B', 4),
(330, '426124', 1, '1018406619', 'SONIA ALEXANDRA', 'PEÑA SUÁREZ', '', '3123131', 'CL 142 13 44', 4),
(331, '426129', 1, '1018403998', 'SOLY YAMILE', 'PERALTA HERNANDEZ', '', '6710132', 'TV 21 106 A 31', 4),
(332, '426165', 1, '1018403982', 'SERGIO ESTEBAN', 'PEREIRA RAMIREZ', '', '4163133', 'CR 59 A 136 50 AP 325', 4),
(333, '426168', 1, '1022961312', 'SERGIO DUVÁN', 'PEREZ CONDE', '', '8004134', 'CL 54 4 A 29 IN 1', 5),
(334, '426170', 1, '1023872033', 'SANDRA MILENA', 'PÉREZ JÁCOME', '', '7108135', 'CR 13 146 33 AP 203', 5),
(335, '426200', 1, '1024570254', 'SANDRA MILENA', 'PEREZ RIVERA', '', '6242136', 'CR 88 70 B 04', 5),
(336, '426206', 1, '1081154744', 'RUTH MARCELA', 'PICO TORRES', '', '2927137', 'CR 19 145 71', 4),
(337, '426208', 1, '1075684985', 'RUBY YUDITH', 'PINEDA NIÑO', '', '6215138', 'CR 20 A 188 A 25 AP 301', 4),
(338, '426215', 1, '1075683835', 'RODRIGO ALEJANDRO', 'PINEDA NOMEZQUE', '', '5431139', 'CR 58 135 49 BL 3 AP 1201', 4),
(339, '426216', 1, '1075672546', 'RODOLFO', 'PINZON PORRAS', '', '5450140', 'CR 110 C 71 F 26', 5),
(340, '426223', 1, '1075668219', 'ROBERTH CAMILO', 'POLANIA CALDERON', '', '2580141', 'CL 48 14 39 AP 304', 5),
(341, '426236', 1, '1072652966', 'RICARDO', 'POSADA DIAZ', '', '2142142', 'DG 63 18 32', 5),
(342, '426238', 1, '1072644983', 'RAUL FERNEY', 'PRIETO OYAGA', '', '6435143', 'CR 1 A 6 27 CA 29', 3),
(343, '440688', 1, '1070981565', 'PAULA DANIELA', 'PRIETO PERALTA', '', '2498144', 'CR 60 BIS A 70 40', 3),
(344, '440689', 1, '1070942257', 'PAULA ANDREA', 'QUINTERO FARFAN', '', '6274145', 'CL 97 70 C 69 TO 7 AP 304', 3),
(345, '440692', 1, '1069722450', 'PAULA ANDREA', 'QUINTERO LOPEZ', '', '4301146', 'CL 72 A 20 A 50 OF 201', 5),
(346, '440702', 1, '1067810357', 'PAULA ALEJANDRA', 'RAMIREZ MARIN', '', '6150147', 'CL 14 9 87', 5),
(347, '450613', 1, '1052409050', 'PAOLA PATRICIA', 'RAMIREZ TORRES', '', '6717148', 'CL 129 54 07 AP 304', 5),
(348, '450615', 1, '1050948147', 'PAOLA CAROLINA', 'RANGEL NARANJO', '', '6137149', 'CL 48 17 37', 4),
(349, '450623', 1, '1033801847', 'PAOLA ALEXANDRA', 'REINA PEÑA', '', '2291150', 'CR 74 48 73 NORMANDIA', 4),
(350, '470724', 1, '1033733746', 'ORLANDO ALIRIO', 'RENGIFO HERRERA', '', '3112151', 'CL 94 9 25 AP 601', 4),
(351, '470727', 1, '1032496562', 'OLGA ALEXANDRA', 'RINCON DELGADO', '', '3101152', 'CR 51 A 169 A 65 IN 2', 4),
(352, '470739', 1, '1032476176', 'NICOLAS ANDRES', 'RINCON RINCON', '', '3820153', 'CL 75 84 65', 5),
(353, '470744', 1, '1032462813', 'NICOLÁS', 'ROA MONTOYA', '', '7043154', 'Trav. 80A Nº 80-81 Bloque L Apto 201 Afidro', 5),
(354, '470746', 1, '1032425868', 'NANCY', 'ROA PEREZ', '', '8018155', 'CR 10 14 28 PI 6', 5),
(355, '470751', 1, '1032423786', 'MONICA VANESSA', 'RODRIGUEZ ', '', '2494156', 'CR 10 14 33 PI 2', 3),
(356, '506048', 1, '1032421356', 'MIRLEIDY', 'RODRIGUEZ ', '', '3108157', 'AV CL 63 73 A 31 IN 1 AP 1007', 5),
(357, '506077', 1, '1030681529', 'MILTON ALFREDO', 'RODRIGUEZ CASTIBLANCO', '', '2266158', 'CL 3 50 60', 5),
(358, '506087', 1, '1030670289', 'MICHEL', 'RODRIGUEZ GALINDO', '', '2329159', 'AV SUBA 104 25', 5),
(359, '506146', 1, '1030651933', 'MERCEDES', 'RODRIGUEZ MORENO', '', '2632160', 'CR 65 43 18', 4),
(360, '506147', 1, '1030619532', 'MELBA TATIANA', 'RODRIGUEZ PEÑA', '', '2573161', 'XX', 4),
(361, '506204', 1, '1030606092', 'MAURICIO JAVIER', 'RODRIGUEZ ROMERO', '', '6715162', '.', 4),
(362, '506268', 1, '1030576532', 'MATEO', 'RODRIGUEZ SEGURA', '', '2527163', '.', 4),
(363, '506270', 1, '1030526181', 'MARTHA LILIANA', 'RODRIGUEZ TABARES', '', '(311164', '.', 5),
(364, '506285', 1, '1026592614', 'MARTHA CONSUELO', 'ROJAS AVILA', '', '(311165', '.', 5),
(365, '506286', 1, '1026585789', 'MARTHA ALEJANDRA', 'ACERO RIVERA', '', '1660000', '.', 5),
(366, '506304', 1, '1026560597', 'MARLY JOHANNA', 'ACEVEDO AGUIRRE', '', '1670000', '.', 5),
(367, '506307', 1, '1026275226', 'MARITZA YAMILE', 'ACEVEDO TOCANCIPA', '', '4280168', '.', 3),
(368, '506398', 1, '1026258607', 'MARISOL', 'ACEVEDO VILLAMIL', '', '5555169', '.', 5),
(369, '539417', 1, '1026255747', 'MARILYN FERNANDA', 'ALONSO GARAVITO', '', '8526170', '.', 5),
(370, '539558', 1, '1026255564', 'MARILUZ', 'AMAYA GEREDA', '', '6308171', '.', 5),
(371, '539559', 1, '1026254261', 'MARIA YINETH', 'APONTE MARTINEZ', '', 'XX17200', '.', 4),
(372, '539564', 1, '1085294101', 'MARIA VICTORIA', 'ARCE TIERRADENTRO', '', '3277173', '.', 4),
(373, '539566', 1, '1090418005', 'MARIA TERESA', 'ARIAS ACOSTA', '', '0.174', '.', 4),
(374, '539567', 1, '1094267468', 'MARIA PAULA', 'ARIZA MAHECHA', '', '0.175', '.', 4),
(375, '550779', 1, '1094905877', 'MARÍA ELISA', 'AVENDAÑO AVENDAÑO', '', '0.176', '.', 5),
(376, '550789', 1, '1105673641', 'MARIA DILIA', 'AVILA NAVARRETE', '', '0.177', 'CL 129 57 22', 5),
(377, '560240', 1, '1109382684', 'MARIA DE LOS ANGELES', 'AYALA PALENCIA', '', '0.178', '.', 3),
(378, '625588', 2, '1110450762', 'MARIA ALEJANDRA', 'BALLEN GARAVITO', '', '0.179', 'CR 10 27 63', 3),
(379, '625629', 1, '1110455249', 'MARIA', 'BALLEN GÜIZA', '', '0.18', 'CL 46 13 72', 3),
(380, '625637', 1, '1110469805', 'LUZ DARY', 'BARRERO GONZALEZ', '', '3277181', 'Cra 10b · 25-82 suir', 5),
(381, '702197', 1, '1110505042', 'LUZ DARI', 'BARRIOS GARCIA', '', '0.182', 'KR 83 23 B 55 IN BR                          ', 5),
(382, '1103942', 1, '1110527152', 'LUZ CECILIA', 'BERDUGO BENITEZ', '', '0.183', 'CL 5 69 C 56 CA 5', 5),
(383, '1104032', 1, '1115186569', 'LUZ ADRIANA', 'BERMUDEZ VASQUEZ', '', '0.184', 'cr 3c 19-55', 4),
(384, '1104069', 1, '1116723383', 'LUISA FERNANDA', 'BERROCAL LLORENTE', '', '0.185', 'CL 159 A NORTE 91 65 CS BR SUB', 4),
(385, '1230028', 1, '1117501098', 'LUISA FERNANDA', 'BOSA GALINDO', '', '0.186', 'CL 44 B SUR 17 47 ESTE', 4),
(386, '1230056', 1, '1233494385', 'ANDREA PAOLA', 'BRICEÑO ALVARADO', '', '0.187', 'CR 73 62 F 32 SUR AP 302', 4),
(387, '1230058', 1, '96110607455', 'ANDREA JOHANNA', 'BUSTAMANTE ENCIANLES', '', '0.188', 'CR 31 D 6 04 SUR', 5),
(388, '1230084', 1, '97011512317', 'ANDREA JOHANNA', 'BUSTOS PEREZ', '', '0.189', 'CL 151 13 26', 5),
(389, '1230122', 1, '97013014179', 'ANDREA CAROLINA', 'CALVO BELLO', '', '624190', 'CR 35 42 39', 5),
(390, '2111576', 1, '97031207022', 'ANA SHIRLEY', 'CARRILLO QUINTERO', '', '0.191', 'AV CARACAS 47 08', 4),
(391, '2111754', 1, '97071315642', 'ANA MILENA', 'ROJAS LOPEZ', '', '2822192', 'KR 86 F 5 A 21 BR TAYRONA', 4),
(392, '2111764', 1, '97092022068', 'ANA MARIA', 'ROLDAN MARTINEZ', '', '2881193', 'CLL  99   33  20', 4),
(393, '2111796', 1, '97111609776', 'ANA BEATRIZ', 'RUBIANO GOMEZ', '', '(000194', 'CL 12 C 61 71', 5),
(394, '2111812', 1, '98011053408', 'ALEXANDRA', 'RUBIANO RANGEL', '', '(000195', 'Calle 90 No. 13 - 23', 5),
(395, '2111884', 1, '98011560733', 'ALEXANDER', 'RUIZ ARISMENDI', '', '8108196', 'ccalle 63 a No. 26 27', 5),
(396, '2111957', 1, '98031252407', 'ALEXANDER', 'RUSSI LADINO', '', '1970000', 'DG 7 A BIS C 73 B 42', 3),
(397, '2111981', 1, '98041058790', 'ALAN ESTEBAN', 'SALAMANCA GUTIERREZ', '', '1980000', 'CARRERA 94 N 22 A 90', 3),
(398, '12500007', 1, '98072868552', 'ADRIANA', 'SALAMANCA VARGAS', '', '3675199', 'CALLE 35 SR #33A-24', 3),
(399, '12500019', 1, '98090201417', 'ABELARDO ANDREY', 'SALAZAR VALDERRAMA', '', '7190200', 'CALLE 63 N. 14-43 AP. 502', 5),
(400, '111111', 1, '1111117', 'Tonys', 'Starks', 'tony@konradlorenzedu.co', '00000011', 'Malibu 102034', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
  `idPrograma` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idPrograma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idPrograma`, `codigo`, `descripcion`) VALUES
(3, '1020', 'Administración de Empresas'),
(4, '1022', 'Sicología'),
(5, '1023', 'Ingeniería de sistemas');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`idTipoIdentificacion`, `tipo`, `descripcion`) VALUES
(1, '1', 'Cédula de ciudadanía'),
(2, '2', 'Tarjeta de identidad');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=18 ;

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
(16, 17, 'diecisiete'),
(17, 1021, 'Sicología');

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

-- --------------------------------------------------------

--
-- Estructura para la vista `calmodelo`
--
DROP TABLE IF EXISTS `calmodelo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calmodelo` AS select 1 AS `id`,if((`entrenamiento`.`desertor` = '1'),'Desertor',`entrenamiento`.`desertor`) AS `desertor`,(count(`entrenamiento`.`identrenamiento`) / (select count(`entrenamiento`.`identrenamiento`) from `entrenamiento`)) AS `probabilidad`,avg(`entrenamiento`.`c1`) AS `mediaC1`,var_samp(`entrenamiento`.`c1`) AS `varianzac1`,avg(`entrenamiento`.`c2`) AS `mediac2`,var_samp(`entrenamiento`.`c2`) AS `varianzac2`,avg(`entrenamiento`.`c3`) AS `mediac3`,var_samp(`entrenamiento`.`c3`) AS `varianzac3`,avg(`entrenamiento`.`c4`) AS `mediac4`,var_samp(`entrenamiento`.`c4`) AS `varianzac4` from `entrenamiento` where (`entrenamiento`.`desertor` = 1) union select 0 AS `id`,if((`entrenamiento`.`desertor` = '0'),'No Desertor',`entrenamiento`.`desertor`) AS `desertor`,(count(`entrenamiento`.`identrenamiento`) / (select count(`entrenamiento`.`identrenamiento`) from `entrenamiento`)) AS `probabilidad`,avg(`entrenamiento`.`c1`) AS `mediaC1`,var_samp(`entrenamiento`.`c1`) AS `varianzac1`,avg(`entrenamiento`.`c2`) AS `mediac2`,var_samp(`entrenamiento`.`c2`) AS `varianzac2`,avg(`entrenamiento`.`c3`) AS `mediac3`,var_samp(`entrenamiento`.`c3`) AS `varianzac3`,avg(`entrenamiento`.`c4`) AS `mediac4`,var_samp(`entrenamiento`.`c4`) AS `varianzac4` from `entrenamiento` where (`entrenamiento`.`desertor` = 0);

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
  ADD CONSTRAINT `fk_idestudiante2` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`idEstudiante`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_programa` FOREIGN KEY (`programa`) REFERENCES `programa` (`idPrograma`),
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

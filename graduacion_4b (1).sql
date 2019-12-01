-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2019 a las 18:57:40
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graduacion_4b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `numero`, `area`) VALUES
(1, 1, ''),
(2, 2, ''),
(3, 3, ''),
(4, 4, ''),
(5, 5, ''),
(6, 6, ''),
(7, 7, ''),
(8, 8, ''),
(9, 9, ''),
(10, 10, ''),
(11, 11, ''),
(12, 12, ''),
(13, 13, ''),
(14, 14, ''),
(15, 15, ''),
(16, 16, ''),
(17, 17, ''),
(18, 18, ''),
(19, 19, ''),
(20, 20, ''),
(21, 21, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id` int(11) NOT NULL,
  `idSilla` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `paquete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

CREATE TABLE `sillas` (
  `id` int(11) NOT NULL,
  `idMesa` int(11) NOT NULL,
  `posicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sillas`
--

INSERT INTO `sillas` (`id`, `idMesa`, `posicion`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 2, 1),
(10, 2, 2),
(11, 2, 3),
(12, 2, 4),
(13, 2, 5),
(14, 2, 6),
(15, 2, 7),
(16, 2, 8),
(17, 3, 1),
(18, 3, 2),
(19, 3, 3),
(20, 3, 4),
(21, 3, 5),
(22, 3, 6),
(23, 3, 7),
(24, 3, 8),
(25, 4, 1),
(26, 4, 2),
(27, 4, 3),
(28, 4, 4),
(29, 4, 5),
(30, 4, 6),
(31, 4, 7),
(32, 4, 8),
(33, 5, 1),
(34, 5, 2),
(35, 5, 3),
(36, 5, 4),
(37, 5, 5),
(38, 5, 6),
(39, 5, 7),
(40, 5, 8),
(41, 6, 1),
(42, 6, 2),
(43, 6, 3),
(44, 6, 4),
(45, 6, 5),
(46, 6, 6),
(47, 6, 7),
(48, 6, 8),
(49, 7, 1),
(50, 7, 2),
(51, 7, 3),
(52, 7, 4),
(53, 7, 5),
(54, 7, 6),
(55, 7, 7),
(56, 7, 8),
(57, 8, 1),
(58, 8, 2),
(59, 8, 3),
(60, 8, 4),
(61, 8, 5),
(62, 8, 6),
(63, 8, 7),
(64, 8, 8),
(65, 9, 1),
(66, 9, 2),
(67, 9, 3),
(68, 9, 4),
(69, 9, 5),
(70, 9, 6),
(71, 9, 7),
(72, 9, 8),
(73, 10, 1),
(74, 10, 2),
(75, 10, 3),
(76, 10, 4),
(77, 10, 5),
(78, 10, 6),
(79, 10, 7),
(80, 10, 8),
(81, 11, 1),
(82, 11, 2),
(83, 11, 3),
(84, 11, 4),
(85, 11, 5),
(86, 11, 6),
(87, 11, 7),
(88, 11, 8),
(89, 12, 1),
(90, 12, 2),
(91, 12, 3),
(92, 12, 4),
(93, 12, 5),
(94, 12, 6),
(95, 12, 7),
(96, 12, 6),
(97, 12, 7),
(98, 12, 8),
(99, 13, 1),
(100, 13, 2),
(101, 13, 3),
(102, 13, 4),
(103, 13, 5),
(104, 13, 6),
(105, 13, 7),
(106, 13, 8),
(107, 14, 1),
(108, 14, 2),
(109, 14, 3),
(110, 14, 4),
(111, 14, 5),
(112, 14, 6),
(113, 14, 7),
(114, 14, 8),
(115, 15, 1),
(116, 15, 2),
(117, 15, 3),
(118, 15, 4),
(119, 15, 5),
(120, 15, 6),
(121, 15, 7),
(122, 15, 8),
(123, 16, 1),
(124, 16, 2),
(125, 16, 3),
(126, 16, 4),
(127, 16, 5),
(128, 16, 6),
(129, 16, 7),
(130, 16, 8),
(131, 17, 1),
(132, 17, 2),
(133, 17, 3),
(134, 17, 4),
(135, 17, 5),
(136, 17, 6),
(137, 17, 7),
(138, 17, 8),
(139, 18, 1),
(140, 18, 2),
(141, 18, 3),
(142, 18, 4),
(143, 18, 5),
(144, 18, 6),
(145, 18, 7),
(146, 18, 8),
(147, 19, 1),
(148, 19, 2),
(149, 19, 3),
(150, 19, 4),
(151, 19, 5),
(152, 19, 6),
(153, 19, 7),
(154, 19, 8),
(155, 20, 1),
(156, 20, 2),
(157, 20, 3),
(158, 20, 4),
(159, 20, 5),
(160, 20, 6),
(161, 20, 7),
(162, 20, 8),
(163, 21, 1),
(164, 21, 2),
(165, 21, 3),
(166, 21, 4),
(167, 21, 5),
(168, 21, 6),
(169, 21, 7),
(170, 21, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lugares` int(11) DEFAULT '0',
  `paquete` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`, `email`, `lugares`, `paquete`) VALUES
(1, 'hohofa', '125d18ce27fe932c0c108ec2dbc6a83616c3169c5ed0c45f5738f442136ddd7548bdc959fa2130d8844cdb228c0d3acc61ab5d00e61e52f9ac5993e460e8d810', 'lolffo@gmail.com', 0, NULL),
(2, 'hohof', 'cce08bba3f2e3c029cd257104b06d4b075772d5f514cf1b7789506f9a69d53c51464881d2c18445ab290553b302f67a24b1c69e3e737a46215deaf43517e4960', 'lolfdfo@gmail.com', 0, NULL),
(3, 'brian', '4925da7da7a56260baf1c37925a8fa24e46ad8b107dcd21f44e39e4751bae1304fc70de7acb847ffa96126bb372de005f5320f1ede6f9df07c7d53f9c160f022', 'haha@gmail.com', 0, NULL),
(4, 'ayuwoki', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2', 'ayu@gmail.com', 0, NULL),
(5, 'ayuyu', '2f9959b230a44678dd2dc29f037ba1159f233aa9ab183ce3a0678eaae002e5aa6f27f47144a1a4365116d3db1b58ec47896623b92d85cb2f191705daf11858b8', 'ayuyu@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_paquetes`
--

CREATE TABLE `usuarios_paquetes` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `paquete` int(11) NOT NULL,
  `lugares` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_paquetes`
--

INSERT INTO `usuarios_paquetes` (`id`, `idUsuario`, `paquete`, `lugares`) VALUES
(25, 3, 2, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sillas`
--
ALTER TABLE `sillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `sillas`
--
ALTER TABLE `sillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

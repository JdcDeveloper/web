-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2018 a las 21:33:00
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargara`
--

CREATE TABLE `cargara` (
  `id` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargara`
--

INSERT INTO `cargara` (`id`, `ano`) VALUES
(1, 1987),
(2, 1988),
(3, 1989),
(4, 1990),
(5, 1991),
(6, 1992),
(7, 1993),
(8, 1994),
(9, 1995),
(10, 1996),
(11, 1997),
(12, 1998),
(13, 1999),
(14, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargard`
--

CREATE TABLE `cargard` (
  `id` int(11) NOT NULL,
  `dia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargard`
--

INSERT INTO `cargard` (`id`, `dia`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargarm`
--

CREATE TABLE `cargarm` (
  `id` int(11) NOT NULL,
  `mes` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargarm`
--

INSERT INTO `cargarm` (`id`, `mes`) VALUES
(1, 'enero'),
(2, 'febrero'),
(3, 'marzo'),
(4, 'abril'),
(5, 'mayo'),
(6, 'junio'),
(7, 'julio'),
(8, 'agosto'),
(9, 'septiembre'),
(10, 'octubre'),
(11, 'noviembre'),
(12, 'diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` varchar(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `correo`, `usuario`, `contrasena`, `dia`, `mes`, `ano`) VALUES
(1, 'algo@hotmail.com', 'rarin', 123, 1, 'enero', 1970),
(2, 'cramis@hotmail.com', 'carmen', 222, 1, 'enero', 2000),
(3, 'perro@hotmail.com', 'asma', 444, 1, 'enero', 2000),
(4, 'azabache@gmail.com', 'chocolate', 444, 1, 'enero', 2000),
(5, 'rosa@hotmail.com', 'gg', 123, 0, 'agosto', 2004),
(6, 'yuin@gmail.com', 'konin1', 123, 14, 'agosto', 1997);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargara`
--
ALTER TABLE `cargara`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargard`
--
ALTER TABLE `cargard`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargarm`
--
ALTER TABLE `cargarm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargara`
--
ALTER TABLE `cargara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cargard`
--
ALTER TABLE `cargard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `cargarm`
--
ALTER TABLE `cargarm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

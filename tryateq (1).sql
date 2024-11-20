-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2024 a las 06:39:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tryateq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` text NOT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `empresa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `telefono`, `mensaje`, `empresa`) VALUES
(5, 'Armando Candelas Alvarado', '482300209@alumnos.utzac.edu.mx', '4925449982', 'Dinero', 'Cotuchas'),
(6, 'Licenciado LV', 'Amlocogeburras@gmail.com', '2085548788', 'MISNSUSBS', 'Luis Vuitton'),
(7, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sss', 'w'),
(8, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'dd'),
(9, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 's', 's'),
(10, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dddd', 'hhh'),
(11, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sss', 'Luis Vuitton'),
(12, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddddd jjajjaaj ggggg', 'w'),
(13, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddddd jjajjaaj ggggg', 'w'),
(14, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddddd jjajjaaj ggggg', 'w'),
(15, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dddd', 'dddd'),
(16, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sss', 'sss'),
(17, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'jwbkwbjkwbdjbwd', 'guuiel'),
(18, 'Mini Lic', 'arrobaminilic5.7@gmail.com', '3320844063', 's', 's'),
(19, 'jonathan perez', 'anunezmuro@gmail.com', '3313977051', 'ss', 'ss'),
(20, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'fffff', 'googooog'),
(21, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'JJJJ', 'hhh'),
(22, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'goggogogg', 'w'),
(23, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'dd'),
(24, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'gdggd', 'amlo sa de cv'),
(25, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 's'),
(26, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'n', 'hhh'),
(27, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ee', 'eee'),
(28, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'h', 'hh'),
(29, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 's'),
(30, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 's', 's'),
(31, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 's', 's'),
(32, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'd', 'd'),
(33, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'sss'),
(34, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 's'),
(35, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'sssss'),
(36, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'sss'),
(37, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 'ss'),
(38, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'e', 'eee'),
(39, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 'ss'),
(40, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'd', 'ss'),
(41, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'ss'),
(42, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 's'),
(43, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'd', 'dddd'),
(44, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'e', 'e'),
(45, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'hh', 's'),
(46, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 's'),
(47, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sssss', 'w'),
(48, 'Mini Lic', 'arrobaminilic5.7@gmail.com', '2085548788', 'ddddd', 's'),
(49, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'd'),
(50, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ss'),
(51, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'dd'),
(52, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ssss', 'w'),
(53, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddd', 'w'),
(54, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'xx', 'xxx'),
(55, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dddddddd', 'ggggggf'),
(56, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'hh', 'ss'),
(57, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ff', 'dff'),
(58, 'dd', 'jonathanperxza@gmail.com', '3313977051', 'd', 'd'),
(59, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'dd'),
(60, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dddd', 'ddd'),
(61, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ddd', 'ddd'),
(62, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ghhhg', 'gggg'),
(63, 'Armandio', 'armando@gmail.com', '4921234567', 'gANAR DINERO', 'uTZAC'),
(64, 'yuya', 'login@gmail.com', '4921445544', 'chambiar', 'gogoogog'),
(65, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddd', 'w'),
(66, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'dddd'),
(67, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 'ss'),
(68, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 's'),
(69, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'd'),
(70, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'fff', 'ff'),
(71, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ss'),
(72, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'fff', 'fff'),
(73, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(74, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(75, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddd', 'dd'),
(76, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'd'),
(77, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'dd', 'ddd'),
(78, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sss', 'sss'),
(79, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'ss'),
(80, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'dd'),
(81, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'sss'),
(82, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'sss'),
(83, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sss', 'sss'),
(84, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ff', 'ff'),
(85, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'ddd'),
(86, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dd', 'ddd'),
(87, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(88, 'luis lopez lopezss', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'sss'),
(89, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(90, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ss'),
(91, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'kk', 'w'),
(92, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(93, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(94, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'sss', 'ss'),
(95, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'dddd'),
(96, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 's', 's'),
(97, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 's', 'ss'),
(98, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ss'),
(99, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ddd', 's'),
(100, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(101, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ss'),
(102, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(103, 'jonathan perez', 'jonathanperxza@gmail.com', '3320844063', 'd', 's'),
(104, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'fwfw', 'dfef'),
(105, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'lll', 'ss'),
(106, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'DD', 'DDD'),
(107, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'xx', 'xxx'),
(108, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ssss'),
(109, 'jonathan perez', 'jonathanperxza@gmail.com', '3320844063', 'ss', 's'),
(110, 'luis lopez lopezs', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 's'),
(111, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'sss', 'ssss'),
(112, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'sss', 'sss'),
(113, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'd', 'd'),
(114, 'luis lopez lopezs', 'memoriesofyourchildhood@gmail.com', '2085548788', 'ss', 'ss'),
(115, 'jonathan perez', 'jonathanperxza@gmail.com', '3320844063', 'sss', 'ss'),
(116, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'ss', 'ss'),
(117, 'Mini Lic', 'arrobaminilic5.7@gmail.com', '3313977051', 'ss', 'ss'),
(118, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'sss', 'sss'),
(119, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'hdhdkdjhda', 'kjajdhkhjda'),
(120, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'vvv', 's'),
(121, 'knkkk', 'spartax347@gmail.com', '3313977051', 'jj', 'jj'),
(122, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'dd', 'dd'),
(123, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'pppp', 'kllkkll'),
(124, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'kkk', 'hhhh'),
(125, 'Jonathan', 'jonathan@gmail.com', '3313977795', 'bibiibibib', 'hshsh'),
(126, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'hohho', 'gsgggdd'),
(127, 'zip zip zip', 'zip@zip.com', '4921449350', 'zip zip zip zip', 'zip'),
(128, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'yyy', 'hhh'),
(129, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'hh', 'hhhh'),
(130, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'dddd', 'ggg'),
(131, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'hh', 'gggg'),
(132, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'kkk', 'jjjj'),
(133, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'gg', 'fff'),
(134, 'jonathan perez', 'jonathanperxza@gmail.com', '3313977051', 'uhh', 'w'),
(135, 'luis lopez lopez', 'memoriesofyourchildhood@gmail.com', '2085548788', 'jj', 'jj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'prueba@ejemplo.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2019 a las 08:36:22
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `altaCasas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `localidad` varchar(60) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `nombrePropietario` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` int(20) NOT NULL,
  `capacidad` int(5) NOT NULL,
  `habitaciones` int(5) NOT NULL,
  `entera` varchar(5) NOT NULL,
  `servicios` text,
  `actividades` text,
  `fecha` varchar(20) NOT NULL,
  `fechacons` varchar(20) NOT NULL,
  `edadcasa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`ID`, `nombre`, `localidad`, `provincia`, `nombrePropietario`, `dni`, `email`, `telefono`, `capacidad`, `habitaciones`, `entera`, `servicios`, `actividades`, `fecha`, `fechacons`, `edadcasa`) VALUES
(9, 'La casa Gran', 'Montaverner', 'Valencia', 'Joana', '48600973H', 'joamahiques@gmail.com', 690032781, 100, 10, 'si', 'comidas:', 'yoga:', '12/15/2018', '12/01/2005', 13),
(11, 'MasQi', 'Banyeres de Mariola', 'Alicante', 'Sonia Gomez', '47500268H', 'info@masqi.com', 680505098, 30, 10, '', 'comidas:piscina:masajes:', 'yoga:meditacion:senderismo:', '28-12-2018', '05/01/2015', 3),
(12, 'La Maga', 'XÃ¡tiva', 'Valencia', 'Lorena Castell', '49622541L', 'lorena@lamaga.com', 692258741, 500, 100, '', 'piscina:', 'yoga:', '28/12/2018', '08/01/2003', 15),
(13, 'La Casa Roja', 'BellÃºs', 'Alava', 'Pepe Soler', '56255987M', 'pepe@gmail.com', 658874123, 20, 5, 'si', 'comidas:mascotas si:', 'senderismo:', '28/12/2018', '09/06/2015', 3),
(14, 'Els horts del Palomar', 'El Palomar', 'Valencia', 'Josefa Santacatalina', '48600951J', 'josefasanta@gmail.com', 685235966, 30, 10, '', 'comidas:piscina:mascotas si:', 'senderismo:', '29/12/2018', '', 0),
(19, 'Casa Albets', 'Lladurs', 'Tarragona', 'Jose Albets', '52630985M', 'casaalbets@gmail.com', 658814520, 25, 10, 'no', 'comidas:piscina:mascotas si:', 'senderismo:', '30/11/2018', '', 0),
(20, 'Casa Rural Ahora', 'Malaga', 'Malaga', 'Toni Sanchez', '47500123D', 'ahora@gmail.com', 652214785, 20, 10, '', 'comidas:piscina:gimnasio:', 'yoga:', '22/08/2018', '', 0),
(21, 'La Casa Toya', 'Zaragoza', 'Zaragoza', 'Amador Hernandez', '45966235A', 'info@lacasatoya.com', 651142332, 35, 15, 'si', 'comidas:masajes:', 'meditacion:tai chi:senderismo:', '30/12/2018', '12/05/2004', 14),
(29, 'Superior', 'Monta', 'Alava', 'Loli', '48600973H', 'loli@gmial.com', 690032781, 50, 20, '', 'piscina:mascotas si:', 'senderismo:', '30/12/2018', '12/01/2010', 8),
(31, 'Kakiko', 'Denia', 'Alicante', 'Kiko', '48500671D', 'kiko@gmail.com', 690032781, 50, 50, '', 'comidas:', 'yoga:', '02/01/2019', '01/01/2018', 1),
(32, 'Set Milles', 'Valdelinares', 'Teruel', 'Agueda Bataller', '4875632D', 'info@setmilles.com', 652214441, 100, 40, 'no', 'comidas:mascotas si:', 'senderismo:', '04/01/2019', '01/01/2000', 19),
(33, 'Las casas de Ali', 'Alicante', 'Alicante', 'Hector Garcia', '74500123S', 'lascasasdeali@gmail.com', 654412147, 200, 30, 'no', 'comidas:piscina:mascotas si:', 'senderismo:', '02/01/2018', '10/04/2000', 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casas`
--
ALTER TABLE `casas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

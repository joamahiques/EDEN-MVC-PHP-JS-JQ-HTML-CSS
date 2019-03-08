-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-03-2019 a las 20:50:38
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
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `ID` int(3) NOT NULL,
  `IDclient` int(11) NOT NULL,
  `IDproducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`ID`, `IDclient`, `IDproducto`, `nombre`, `cantidad`, `precio`, `total`) VALUES
(41, 19, 11, 'MasQi', 1, 0, 0),
(48, 19, 11, 'MasQi', 1, 0, 0),
(49, 19, 14, 'Els horts del Palomar', 1, 45, 45);

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
  `edadcasa` int(3) NOT NULL,
  `precionoche` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`ID`, `nombre`, `localidad`, `provincia`, `nombrePropietario`, `dni`, `email`, `telefono`, `capacidad`, `habitaciones`, `entera`, `servicios`, `actividades`, `fecha`, `fechacons`, `edadcasa`, `precionoche`) VALUES
(9, 'La casa Gran', 'Montaverner', 'VALENCIA', 'Joana', '48600973H', 'joamahiques@gmail.com', 690032781, 100, 10, 'si', 'comidas:', 'yoga:', '12/15/2018', '12/01/2005', 13, 0),
(11, 'MasQi', 'Banyeres de Mariola', 'ALICANTE', 'Sonia Gomez', '47500268H', 'info@masqi.com', 680505098, 30, 10, 'no', 'comidas:piscina:masajes:', 'yoga:meditacion:senderismo:', '28-12-2018', '05/01/2015', 3, 0),
(12, 'La Maga', 'XÃ¡tiva', 'VALENCIA', 'Lorena Castell', '49622541L', 'lorena@lamaga.com', 692258741, 500, 100, 'no', 'piscina:', 'yoga:', '28/12/2018', '08/01/2003', 15, 0),
(14, 'Els horts del Palomar', 'El Palomar', 'ÃLAVA', 'Josefa Santacatalina', '48600951J', 'josefasanta@gmail.com', 685235966, 30, 10, 'no', 'comidas:piscina:mascotas si:', 'senderismo:', '29/12/2018', '05/04/2002', 16, 45),
(19, 'Casa Albets', 'Lladurs', 'TARRAGONA', 'Jose Albets', '52630985M', 'casaalbets@gmail.com', 658814520, 25, 10, 'no', 'comidas:piscina:mascotas si:', 'senderismo:', '30/11/2018', '01/02/2019', 0, 0),
(20, 'Casa Rural Ahora', 'Malaga', 'MÃLAGA', 'Toni Sanchez', '47500123D', 'ahora@gmail.com', 652214785, 20, 10, 'no', 'comidas:piscina:gimnasio:', 'yoga:senderismo:', '22/08/2018', '08/02/2000', 18, 0),
(21, 'La Casa Toya', 'Zaragoza', 'ZARAGOZA', 'Amador Hernandez', '45966235A', 'info@lacasatoya.com', 651142332, 35, 15, 'si', 'comidas:masajes:', 'meditacion:tai chi:senderismo:', '30/12/2018', '12/05/2004', 14, 0),
(29, 'Superior', 'Montaverner', 'ÃLAVA', 'Loli', '48600973H', 'loli@gmial.com', 690032781, 50, 20, 'no', 'piscina:mascotas si:', 'senderismo:', '30/12/2018', '12/01/2010', 8, 0),
(31, 'Kakiko', 'Denia', 'ALICANTE', 'Kiko', '48500671D', 'kiko@gmail.com', 690032781, 50, 50, 'no', 'comidas:mascotas si:', 'yoga:', '02/01/2019', '06/06/1997', 21, 0),
(32, 'Set Milles', 'Valdelinares', 'TERUEL', 'Agueda Bataller', '4875632D', 'info@setmilles.com', 652214441, 100, 40, 'no', 'comidas:mascotas si:', 'senderismo:', '04/01/2019', '01/01/2000', 19, 0),
(33, 'Las casas de Ali', 'Alicante', 'ALICANTE', 'Hector Garcia', '74500123S', 'lascasasdeali@gmail.com', 654412147, 200, 30, 'no', 'comidas:piscina:mascotas si:', 'senderismo:', '02/01/2018', '10/04/2000', 18, 0),
(34, 'Alqueria Blanca', 'Cazorla', 'BURGOS', 'Valeriano', '48600975S', 'valeriano@gmail.com', 692258741, 18, 9, 'no', 'comidas:', 'meditacion:', '16/01/2019', '04/01/2005', 13, 30),
(35, 'Madre Pepa', 'Cabrales', 'PRINCIPADO DE ASTURIAS', 'Valeriano', '48600975S', 'valeriano@gmail.com', 692258741, 18, 9, 'no', 'masajes:', 'tai chi:', '16/01/2019', '01/01/2000', 19, 0),
(36, 'Villa Ambasaguas', 'Cangas de Onis', 'PRINCIPADO DE ASTURIAS', 'Mercedes', '52368741A', 'ambasahuas@info.com', 632258963, 21, 14, 'si', 'masajes:', 'meditacion:', '16/01/2019', '01/01/2000', 19, 0),
(37, 'Masia de la Carrasca', 'Navajas', 'CASTELLÃ“N', 'Nuria Ferri', '62300147P', 'ingo@lacarrasca.com', 625587412, 100, 35, 'no', 'comidas:piscina:masajes:mascotas si:', 'yoga:senderismo:', '18/01/2019', '03/01/2000', 18, 0),
(38, 'Gamioko Borda', 'Ziga', 'COMUNIDAD FORAL DE NAVARRA', 'Xavi Cisco', '48600521S', 'info@gamioko.com', 652232563, 10, 4, 'si', 'mascotas si:', 'senderismo:', '22/01/2019', '01/01/2015', 4, 0),
(39, 'La aldea', 'Altea', 'ALICANTE', 'Paquito Salas', '48500214R', 'paquito@mmmmm.com', 630021458, 120, 50, 'no', 'comidas:piscina:mascotas si:', 'yoga:senderismo:', '22/01/2019', '09/11/2005', 13, 0),
(40, 'La masia de la carrasca', 'Montaverner', 'VALENCIA', 'Irma Soler', '74500214L', 'masiadelacarrasca@gmail.com', 632202221, 60, 20, 'no', 'comidas:piscina:hidromasaje:mascotas si:', 'yoga:senderismo:', '30/01/2019', '11/04/2006', 12, 0),
(41, 'Luz de Hadas', 'Montaverner', 'VALENCIA', 'Rafa Segrelles', '96522321Q', 'luzdehadas@gamil.com', 980620455, 10, 4, 'si', 'masajes:mascotas si:', 'senderismo:', '31/01/2019', '04/01/2016', 2, 0),
(42, 'Terra Blanca del Benicadell', 'Beniatjar', 'VALENCIA', 'Jose Soler', '56233102F', 'terrablanca@gmail.com', 658131985, 10, 5, 'si', 'piscina:mascotas si:', 'senderismo:', '09/02/2019', '11/06/2007', 11, 0),
(43, 'nono', 'momo', 'ÃLAVA', 'Nono', '48500216k', 'momo@gmail.com', 630023458, 50, 25, 'no', 'masajes:mascotas si:', 'meditacion:', '09/02/2019', '07/02/2019', 0, 0),
(44, 'Casa Domi', 'Santa Cruz de Tenerife', 'SANTA CRUZ DE TENERIFE', 'Pedro GuzmÃ¡n', '56788951F', 'info@domi.com', 652212123, 4, 2, 'si', 'piscina:mascotas si:', 'senderismo:', '21/02/2019', '03/02/2009', 9, 0),
(45, 'Casa Solana', 'Montaverner', 'VALENCIA', 'Piluka Soler', '48600985F', 'info@solanamontaverner.com', 690032587, 10, 4, 'si', 'piscina:mascotas si:', 'senderismo:', '03/03/2019', '02/03/1965', 0, 25),
(47, 'Sandomera', 'Montaverner', 'VALENCIA', 'Sandy', '48622315D', 'sandy@gmail.com', 692255874, 20, 15, 'no', 'comidas:mascotas si:', 'senderismo:', '03/03/2019', '12/03/2002', 16, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `codigo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(3) NOT NULL,
  `id_product` int(3) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `precio` int(3) NOT NULL,
  `total` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos1`
--

CREATE TABLE `favoritos1` (
  `user_id` int(3) NOT NULL,
  `home_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favoritos1`
--

INSERT INTO `favoritos1` (`user_id`, `home_id`) VALUES
(18, 9),
(18, 11),
(18, 29),
(18, 33),
(19, 31),
(19, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userpass` longtext NOT NULL,
  `type` varchar(25) NOT NULL,
  `avatar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userpass`, `type`, `avatar`) VALUES
(18, 'joa', 'joamahiques@gmail.com', '$2y$10$c9NHhZ18zzf2Xy7dcjI27uphy/nSrmd2hu8YAxJWpAuIgse5hLDOq', 'admin', 'https://www.gravatar.com/avatar/7afb4808ad6f43e800b2adb687d37727?s=40&d=identicon'),
(19, 'Piluka', 'pilu@gmail.com', '$2y$10$ZwvwNQuY4uoHuepBdZp9vOSXmu49RlS2Vt5FeZHOEz6o69B1WjCMe', 'client', 'https://www.gravatar.com/avatar/a81decb5bd3205318c929c75e512a5af?s=40&d=identicon'),
(20, 'jose', 'jrvidalnadal@gmail.com', '$2y$10$ya27RhijCOdPHC6eN/phqO1zevh5RO0JkikAzYXbBszHhG5.zheiW', 'client', 'https://www.gravatar.com/avatar/0f2e7033fac4db4e693805ca24df8bc7?s=40&d=identicon');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `favoritos1`
--
ALTER TABLE `favoritos1`
  ADD PRIMARY KEY (`user_id`,`home_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `casas`
--
ALTER TABLE `casas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

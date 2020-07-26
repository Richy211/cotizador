-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2018 a las 22:06:02
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotizador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `contacto` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `rut` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `giro` varchar(100) COLLATE ucs2_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `cliente`, `contacto`, `rut`, `direccion`, `giro`) VALUES
(1, 'U del desarrollo', 'Macarena Flores Fernandez', '12.553.454-6', 'El corregidor 1453', 'Educación Universitaria'),
(2, 'Paris Tiendas', 'Maria Angelica Cristi', '12.543.765-6', 'El Olimpo 2541', 'Retail'),
(3, 'Monarch', 'Andrea carrasco', '10.232.543-6', 'Av Maraton 3245', 'Vestuario'),
(11, 'Ripley', 'Juan Mora', '34.242.423-4', 'Las acacias 9843', 'Grandes Tiendas'),
(12, 'Be Brand', 'Francisco Oportus', '11.323.564-6', 'Las Tinajas 2434', 'Publicidad'),
(13, 'Pez Creativo', 'AndrÃ©s Gonzalez', '10.284.765-k', 'Gran Avenida 3457 ', 'Publicidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_presupuesto`
--

CREATE TABLE `detalle_presupuesto` (
  `id_detalle` int(10) NOT NULL,
  `id_presupuesto` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `material` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `terminaciones` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `valorM2` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_presupuesto`
--

INSERT INTO `detalle_presupuesto` (`id_detalle`, `id_presupuesto`, `id_cliente`, `material`, `terminaciones`, `valorM2`, `cantidad`) VALUES
(1, 1, 1, 'Adhesivo mate 1,20 x 300', 'Laminado mate', '45000', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_material` int(12) NOT NULL,
  `material` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `terminaciones` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `valorM2` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_material`, `material`, `marca`, `terminaciones`, `valorM2`) VALUES
(5, 'adhesivo brillante', 'arclad', 'laminado mate', 8000),
(6, 'Adhesivo vinilo colores', 'Arclad', 'Corte', 7500),
(7, 'Adhesivo transparente mate', 'arclad', 'laminado mate', 6500),
(8, 'Adhesivo transparente brillante', 'arclad', 'Corte a borde', 6500),
(9, 'Adh. Transparente', 'arclad', 'emplacado blanco', 7800),
(10, 'Adhesivo rotulación vehicular', 'Arlon', 'fundido', 22500),
(11, 'window vision', 'arclad', 'corte', 17000),
(12, 'window vision', 'arclad', 'corte', 17000),
(13, 'adhesivo muro', '3M', 'corte', 20000),
(14, 'adhesivo muro', '3M', 'Laminado', 23500),
(15, 'Adhesivo Blackout', 'arclad', 'laminado', 7500),
(16, 'Adhesivo Vinilo colores', 'arclad', 'ploter de corte', 9000),
(17, 'Adh. Transparente', 'arclad', 'emplacado blanco', 0),
(18, 'Adh. Transparente', 'arclad', 'emplacado blanco', 0),
(19, 'Adh. Transparente', 'arclad 2', 'emplacado blanco', 0),
(20, 'Adh. Transparente', 'arclad', 'emplacado blanco', 7800),
(21, 'Adh. Transparente', 'arclad 2', 'emplacado blanco', 8000),
(22, 'adhesivo matte', 'arclad', '', 6500),
(23, 'window vision', 'arclad', 'corte', 0),
(24, 'adhesivo brillante', 'arclad', 'laminado mate', 7580),
(25, 'Adh. Transparente', 'arclad', 'emplacado blanco', 7800),
(27, 'adhesivo brillante', 'arclad', 'corte', 6500),
(28, 'adhesivo brillante', 'arclad', 'corte', 6500),
(29, 'adhesivo brillante', 'arclad', 'emplacado blanco', 6500),
(30, 'window vision', 'arclad', 'cortes', 17000),
(31, 'adhesivo brillante', 'arclad', 'Laminado', 6500),
(32, 'adhesivo mate', 'arclad', 'laminado mate', 7500),
(33, 'adhesivo brillante', 'arclad', 'Laminado', 6500),
(34, 'adhesivo brillante', 'arclad', 'corte', 6500),
(35, 'adhesivo brillante', 'arclad', 'emplacado blanco', 6500),
(36, 'adhesivo brillante', 'arclad', 'emplacado blanco', 6500),
(37, 'adhesivo brillante', 'arclad', 'corte', 6500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `id_producto` int(10) NOT NULL,
  `presupuesto` varchar(250) COLLATE ucs2_spanish_ci NOT NULL,
  `cliente` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `proyecto` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `presupuesto`
--

INSERT INTO `presupuesto` (`id_producto`, `presupuesto`, `cliente`, `proyecto`, `fecha`) VALUES
(1, '181211', 'Be Brand', 'Local Alameda', '2018-12-20'),
(2, '181214', 'U del desarrollo', 'Pendon Roller', '2018-12-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle_presupuesto`
--
ALTER TABLE `detalle_presupuesto`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `detalle_presupuesto`
--
ALTER TABLE `detalle_presupuesto`
  MODIFY `id_detalle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_material` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2022 a las 13:34:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasteleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(90) NOT NULL,
  `usuario` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `clipassword` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `usuario`, `name`, `email`, `phone`, `address`, `clipassword`, `created`, `modified`, `status`) VALUES
(1, 'Admin', 'Santiago', 'santiago@gmail.com', '900099900', 'calle56#113-20', 'ciao123', '2022-06-20 00:00:00', '2022-06-20 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE `mis_productos` (
  `id` int(90) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,3) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `image`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 0x50617374656c205175696e636561c3b165726f, 'Fantasia Quinceañero', 'Un pastel a base de tres leches de mora y otros frutos del bosque.', 30.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(2, 0x43757063616b657320466573746976616c, 'Cupcakes Endulzados', 'Cupcakes esponjosos y polvoreados con azucar refinada', 15.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(3, 0x43686565736563616b65204672657361, 'Cheesecake Fresa', 'Base de galleta relleno de fresas con flan de vainilla', 25.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(4, 0x4176656e74757261204d264d, 'Aventura M&M', 'Un pastel de chocolate con relleno de arequipe y pastillaje amarillo', 40.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(5, 0x416e746f6a6f206465204d656469616e6f636865, 'Antojo de Medianoche', 'Hojaldres rellenos de chantilly cubiertos de chocolate', 5.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(6, 0x547261646963696f6e616c206465206c6120416275656c61, 'Tradicional de la Abuela', 'Torta de canela a base de galleta y cubierta de canela molida', 20.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(7, 0x5461727461206465205a616e61686f726961, 'Tarta de Zanahoria', 'Ponque con harina de zanahoria cubierto de chocolate blanco', 30.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(8, 0x506f7374726520646520546972616d697375, 'Tres leches Tiramisu', 'base de torta negra y capas de queso con sabor a tiramisu', 20.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(9, 0x467275746f732064652043686f636f6c617465, 'Frutos de Chocolate', 'Postre con diferentes capas de gelatina de diferentes chocolates', 30.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(10, 0x43757063616b65204372656d6f736f, 'Cupcake Blanco', 'Cupcake de torta negra sabor cacao con crema chantilly encima', 2.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(11, 0x546f72746120467275746f7320526f6a6f73, 'Torta Frutos Rojos', 'Torta mojada, rellena de frutos rojos y cubierto en crema', 15.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1'),
(12, 0x47616c6c6574612064656c20626f73717565, 'Galleta del Bosque', 'Pastel con frutos del bosque a base de galleta y tres leches', 35.000, '2022-05-12 00:00:00', '2022-05-12 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,3) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 10:32:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xtrablog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `Categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `Categoria`) VALUES
(1, 'categoria1'),
(2, 'categoria2'),
(3, 'categoria3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201104090807', '2020-11-04 10:12:55', 2051),
('DoctrineMigrations\\Version20201104091456', '2020-11-04 10:15:06', 581),
('DoctrineMigrations\\Version20201104092346', '2020-11-04 10:23:55', 2092);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `comments` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createby` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `img`, `mensaje`, `title`, `description`, `title2`, `date`, `comments`, `createby`, `categoria_id`) VALUES
(1, 'img-01.jpg', 'New Product', 'Simple and useful HTML layout', 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog ', 'Travel . Events', '2020-01-24', '36 comments', 'by Admin Nat', 1),
(2, 'img-02.jpg', 'New Product', 'Multi-purpose blog template', 'is a multi-purpose HTML CSS template from TemplateMo website. \n                  Blog list, single post, about, contact pages are included. Left sideb', 'Creative . Design . Business', '2020-01-16', '48 comments', 'by Admin Sam', 1),
(3, 'img-03.jpg', NULL, 'How can you apply Xtra Blog', 'You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. \n                  You can also ', 'Music . Audio', '2020-01-11', '24 comments', 'by John Walker', 1),
(4, 'img-04.jpg', NULL, 'A little restriction to apply', ' You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection\n                  website. This is st', 'Artworks . Design', '2020-01-04', '72 comments', 'by Admin Sam', 1),
(5, 'img-05.jpg', NULL, 'Color hexa values of Xtra Blog', ' If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.', 'Creative . Video . Audio ', '2020-05-31', '84 comments', 'by Admin Sam', 1),
(6, 'img-06.jpg', NULL, 'Donec convallis varius risus', 'Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor ', 'Visual . Artworks', '2020-01-16', '96 comments', 'by Admin Sam', 1),
(7, 'party.jpg', 'New Product', 'Simple and useful HTML layout2', 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog ', 'Travel . Events', '2020-01-24', '36 comments', 'by Admin Nat', 2),
(8, 'Partycolors.jpg', 'New Product', 'Multi-purpose blog template', 'is a multi-purpose HTML CSS template from TemplateMo website. \n                  Blog list, single post, about, contact pages are included. Left sideb', 'Creative . Design . Business', '2020-01-16', '48 comments', 'by Admin Sam', 2),
(9, 'pez.jpg', NULL, 'How can you apply Xtra Blog', 'You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. \n                  You can also ', 'Music . Audio', '2020-01-11', '24 comments', 'by John Walker', 2),
(10, 'TV.jpg', NULL, 'A little restriction to apply', ' You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection\n                  website. This is st', 'Artworks . Design', '2020-01-04', '72 comments', 'by Admin Sam', 2),
(11, 'atardecer.jpg', NULL, 'Color hexa values of Xtra Blog', ' If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.', 'Creative . Video . Audio ', '2020-05-31', '84 comments', 'by Admin Sam', 2),
(12, 'cara.jpg', NULL, 'Donec convallis varius risus', 'Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor ', 'Visual . Artworks', '2020-01-16', '96 comments', 'by Admin Sam', 2),
(13, 'flor.jpg', 'New Product', 'Simple and useful HTML layout3', 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog ', 'Travel . Events', '2020-01-24', '36 comments', 'by Admin Nat', 3),
(14, 'agua.jpg', 'New Product', 'Multi-purpose blog template', 'is a multi-purpose HTML CSS template from TemplateMo website. \n                  Blog list, single post, about, contact pages are included. Left sideb', 'Creative . Design . Business', '2020-01-16', '48 comments', 'by Admin Sam', 3),
(15, 'gospel.jpg', NULL, 'How can you apply Xtra Blog', 'You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. \n                  You can also ', 'Music . Audio', '2020-01-11', '24 comments', 'by John Walker', 3),
(16, 'luna.jpg', NULL, 'A little restriction to apply', ' You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection\n                  website. This is st', 'Artworks . Design', '2020-01-04', '72 comments', 'by Admin Sam', 3),
(17, 'playa.jpg', NULL, 'Color hexa values of Xtra Blog', ' If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.', 'Creative . Video . Audio ', '2020-05-31', '84 comments', 'by Admin Sam', 3),
(18, 'paisaje.jpg', NULL, 'Donec convallis varius risus', 'Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor ', 'Visual . Artworks', '2020-01-16', '96 comments', 'by Admin Sam', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_767490E63397707A` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_767490E63397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

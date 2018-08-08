-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2018 a las 06:16:12
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `faltauno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `comentario` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `autor`, `comentario`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'gaspar', 'Que bien que juega este master', 1, '2018-08-08 06:28:28', '2018-08-08 06:28:28'),
(2, 'gaspar', 'Que bien que juega este master', 1, '2018-08-08 06:28:37', '2018-08-08 06:28:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `created_at`, `updated_at`, `direccion`, `barrio`, `Zona`) VALUES
(1, '2018-07-31 18:27:15', '2018-07-31 18:27:15', 'Caca', 'Culo', 'Norte'),
(2, '2018-07-31 18:28:08', '2018-07-31 18:28:08', 'Caca', 'Culo', 'Norte'),
(3, '2018-07-31 18:31:07', '2018-07-31 18:31:07', 'Caca', 'Culo', 'Norte'),
(4, '2018-07-31 18:31:45', '2018-07-31 18:31:45', 'Caca', 'Culo', 'Norte'),
(5, '2018-07-31 18:32:27', '2018-07-31 18:32:27', 'Caca', 'Culo', 'Norte'),
(6, '2018-07-31 18:33:24', '2018-07-31 18:33:24', 'Caca', 'Culo', 'Norte'),
(7, '2018-07-31 18:33:45', '2018-07-31 18:33:45', 'Caca', 'Culo', 'Norte'),
(8, '2018-07-31 18:36:11', '2018-07-31 18:36:11', 'Caca', 'Culo', 'Norte'),
(9, '2018-07-31 18:36:44', '2018-07-31 18:36:44', 'Caca', 'Culo', 'Norte'),
(10, '2018-07-31 18:38:44', '2018-07-31 18:38:44', 'Caca', 'Culo', 'Norte'),
(11, '2018-07-31 18:39:20', '2018-07-31 18:39:20', 'Caca', 'Culo', 'Norte'),
(12, '2018-07-31 18:43:29', '2018-07-31 18:43:29', 'Caca', 'Culo', 'Norte'),
(13, '2018-08-08 05:59:29', '2018-08-08 05:59:29', 'dada', 'dasda', 'asda'),
(14, '2018-08-08 07:02:02', '2018-08-08 07:02:02', 'dcdec', 'cece', 'cece'),
(15, '2018-08-08 07:03:50', '2018-08-08 07:03:50', 'dcdec', 'cece', 'cece'),
(16, '2018-08-08 07:04:20', '2018-08-08 07:04:20', 'dcdec', 'cece', 'cece'),
(17, '2018-08-08 07:04:52', '2018-08-08 07:04:52', 'dcdec', 'cece', 'cece'),
(18, '2018-08-08 07:05:19', '2018-08-08 07:05:19', 'dcdec', 'cece', 'cece'),
(19, '2018-08-08 07:05:49', '2018-08-08 07:05:49', 'dcdec', 'cece', 'cece'),
(20, '2018-08-08 07:06:05', '2018-08-08 07:06:05', 'dcdec', 'cece', 'cece'),
(21, '2018-08-08 07:06:56', '2018-08-08 07:06:56', 'ccccc', 'ccc', 'cccc'),
(22, '2018-08-08 07:07:21', '2018-08-08 07:07:21', 'ccccc', 'ccc', 'cccc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_12_141220_tabla_partidos', 1),
(4, '2018_07_12_141258_tabla_modalidad', 1),
(5, '2018_07_12_141350_tabla_tipo_partido', 1),
(6, '2018_07_12_141421_tabla_lugares', 1),
(7, '2018_07_16_152621_partido_mod', 2),
(8, '2018_07_16_154111_modalidad_mod', 2),
(9, '2018_07_16_154245_tipo_partido_mod', 2),
(10, '2018_07_16_154321_lugares_mod', 2),
(11, '2018_07_16_161427_user_partido', 3),
(12, '2018_07_16_161826_partidoid_user', 3),
(13, '2018_07_31_144131_mod_zona', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lugar_id` int(191) NOT NULL,
  `tipo_partido_id` int(191) NOT NULL,
  `dia_partido` date NOT NULL,
  `hora_partido` time NOT NULL,
  `jugadores_faltantes` smallint(6) NOT NULL,
  `partido_completo` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `created_at`, `updated_at`, `lugar_id`, `tipo_partido_id`, `dia_partido`, `hora_partido`, `jugadores_faltantes`, `partido_completo`, `user_id`) VALUES
(1, '2018-07-31 18:39:20', '2018-07-31 18:39:20', 11, 3, '2018-07-12', '20:00:00', 3, 0, 3),
(2, '2018-07-31 18:43:29', '2018-07-31 18:43:29', 12, 4, '2018-07-12', '20:00:00', 3, 0, 3),
(3, '2018-08-08 05:59:30', '2018-08-08 05:59:30', 13, 5, '1000-02-03', '00:01:00', 3, 0, 4),
(4, '2018-08-08 07:02:02', '2018-08-08 07:02:02', 14, 6, '1000-01-01', '00:00:00', 8, 0, 4),
(5, '2018-08-08 07:03:50', '2018-08-08 07:03:50', 15, 7, '1000-01-01', '00:00:00', 8, 0, 4),
(6, '2018-08-08 07:04:20', '2018-08-08 07:04:20', 16, 8, '1000-01-01', '00:00:00', 8, 0, 4),
(7, '2018-08-08 07:04:52', '2018-08-08 07:04:52', 17, 9, '1000-01-01', '00:00:00', 8, 0, 4),
(8, '2018-08-08 07:05:19', '2018-08-08 07:05:19', 18, 10, '1000-01-01', '00:00:00', 8, 0, 4),
(9, '2018-08-08 07:05:49', '2018-08-08 07:05:49', 19, 11, '1000-01-01', '00:00:00', 8, 0, 4),
(10, '2018-08-08 07:06:06', '2018-08-08 07:06:06', 20, 12, '1000-01-01', '00:00:00', 8, 0, 4),
(11, '2018-08-08 07:06:56', '2018-08-08 07:06:56', 21, 13, '1000-01-01', '00:00:00', 9, 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_partidos`
--

CREATE TABLE `tipo_partidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cant_jugadores` smallint(6) NOT NULL,
  `superficie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_partidos`
--

INSERT INTO `tipo_partidos` (`id`, `created_at`, `updated_at`, `cant_jugadores`, `superficie`) VALUES
(1, '2018-07-31 18:36:44', '2018-07-31 18:36:44', 7, 'Sintetico'),
(2, '2018-07-31 18:38:44', '2018-07-31 18:38:44', 7, 'Sintetico'),
(3, '2018-07-31 18:39:20', '2018-07-31 18:39:20', 7, 'Sintetico'),
(4, '2018-07-31 18:43:29', '2018-07-31 18:43:29', 7, 'Sintetico'),
(5, '2018-08-08 05:59:30', '2018-08-08 05:59:30', 5, 'Sintetico'),
(6, '2018-08-08 07:02:02', '2018-08-08 07:02:02', 5, 'Sintetico'),
(7, '2018-08-08 07:03:50', '2018-08-08 07:03:50', 5, 'Sintetico'),
(8, '2018-08-08 07:04:20', '2018-08-08 07:04:20', 5, 'Sintetico'),
(9, '2018-08-08 07:04:52', '2018-08-08 07:04:52', 5, 'Sintetico'),
(10, '2018-08-08 07:05:19', '2018-08-08 07:05:19', 5, 'Sintetico'),
(11, '2018-08-08 07:05:49', '2018-08-08 07:05:49', 5, 'Sintetico'),
(12, '2018-08-08 07:06:05', '2018-08-08 07:06:05', 5, 'Sintetico'),
(13, '2018-08-08 07:06:56', '2018-08-08 07:06:56', 5, 'Sintetico'),
(14, '2018-08-08 07:07:21', '2018-08-08 07:07:21', 5, 'Sintetico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `posicion` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `descripcion`, `posicion`) VALUES
(1, 'Juan Pablo Boti', 'juanpboti@gmail.com', '$2y$10$UmBS1T9uSZzWk6SATe0pU.805Z8D5M8Ks4hjE.jHfiXx.nxh6XN7G', 'Uc5JIn9cHhemOiB6i1zhVsWZNdHnbxdwqTeZLGqqzE7bof3m1gvBLG41Tsw1', '2018-07-16 20:44:10', '2018-07-16 20:44:10', NULL, NULL),
(2, 'Pepito', 'pepito@hotmail.com', '$2y$10$qlRN3z8nFH1dmawbSjZRb.Kf6p/do18U/FMR9krBF30DC6u0SWlF6', NULL, '2018-07-16 21:15:56', '2018-07-16 21:15:56', NULL, NULL),
(3, 'quepasa', 'quepasa@coneseperro.com', '$2y$10$PQ.PAZ31d2oKvC.HCYAtq.DQQvIoD7L/FDAjlsdINEoTlKtJXb1lW', '5MvaMn0bnBNWUWlBjy3mZbtP4KV4PgPd4TtcFXL8H5dzmiQVQNlBinFcYuYf', '2018-07-31 16:48:40', '2018-07-31 16:48:40', NULL, NULL),
(4, 'gaspar', 'gaspar.jac@hotmail.com', '$2y$10$wbFSATfUmvPYwp0WO6vyl.2u06C9yutS8.vvlypmC5DpothJs7ttO', NULL, '2018-08-08 05:59:08', '2018-08-08 06:58:47', 'Sos de la B', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tipo_partidos`
--
ALTER TABLE `tipo_partidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tipo_partidos`
--
ALTER TABLE `tipo_partidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

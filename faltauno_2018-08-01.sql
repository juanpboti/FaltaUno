# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Base de datos: faltauno
# Tiempo de Generación: 2018-08-01 19:09:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla lugares
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lugares`;

CREATE TABLE `lugares` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;

INSERT INTO `lugares` (`id`, `created_at`, `updated_at`, `direccion`, `barrio`, `Zona`)
VALUES
	(1,'2018-07-31 15:27:15','2018-07-31 15:27:15','Caca','Culo','Norte'),
	(2,'2018-07-31 15:28:08','2018-07-31 15:28:08','Caca','Culo','Norte'),
	(3,'2018-07-31 15:31:07','2018-07-31 15:31:07','Caca','Culo','Norte'),
	(4,'2018-07-31 15:31:45','2018-07-31 15:31:45','Caca','Culo','Norte'),
	(5,'2018-07-31 15:32:27','2018-07-31 15:32:27','Caca','Culo','Norte'),
	(6,'2018-07-31 15:33:24','2018-07-31 15:33:24','Caca','Culo','Norte'),
	(7,'2018-07-31 15:33:45','2018-07-31 15:33:45','Caca','Culo','Norte'),
	(8,'2018-07-31 15:36:11','2018-07-31 15:36:11','Caca','Culo','Norte'),
	(9,'2018-07-31 15:36:44','2018-07-31 15:36:44','Caca','Culo','Norte'),
	(10,'2018-07-31 15:38:44','2018-07-31 15:38:44','Caca','Culo','Norte'),
	(11,'2018-07-31 15:39:20','2018-07-31 15:39:20','Caca','Culo','Norte'),
	(12,'2018-07-31 15:43:29','2018-07-31 15:43:29','Caca','Culo','Norte');

/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_07_12_141220_tabla_partidos',1),
	(4,'2018_07_12_141258_tabla_modalidad',1),
	(5,'2018_07_12_141350_tabla_tipo_partido',1),
	(6,'2018_07_12_141421_tabla_lugares',1),
	(7,'2018_07_16_152621_partido_mod',2),
	(8,'2018_07_16_154111_modalidad_mod',2),
	(9,'2018_07_16_154245_tipo_partido_mod',2),
	(10,'2018_07_16_154321_lugares_mod',2),
	(11,'2018_07_16_161427_user_partido',3),
	(12,'2018_07_16_161826_partidoid_user',3),
	(13,'2018_07_31_144131_mod_zona',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla modalidad
# ------------------------------------------------------------

DROP TABLE IF EXISTS `modalidad`;

CREATE TABLE `modalidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Volcado de tabla partidos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `partidos`;

CREATE TABLE `partidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lugar_id` int(191) NOT NULL,
  `tipo_partido_id` int(191) NOT NULL,
  `dia_partido` date NOT NULL,
  `hora_partido` time NOT NULL,
  `jugadores_faltantes` smallint(6) NOT NULL,
  `partido_completo` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `partidos` WRITE;
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;

INSERT INTO `partidos` (`id`, `created_at`, `updated_at`, `lugar_id`, `tipo_partido_id`, `dia_partido`, `hora_partido`, `jugadores_faltantes`, `partido_completo`, `user_id`)
VALUES
	(1,'2018-07-31 15:39:20','2018-07-31 15:39:20',11,3,'2018-07-12','20:00:00',3,0,3),
	(2,'2018-07-31 15:43:29','2018-07-31 15:43:29',12,4,'2018-07-12','20:00:00',3,0,3);

/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Volcado de tabla tipo_partidos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_partidos`;

CREATE TABLE `tipo_partidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cant_jugadores` smallint(6) NOT NULL,
  `superficie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tipo_partidos` WRITE;
/*!40000 ALTER TABLE `tipo_partidos` DISABLE KEYS */;

INSERT INTO `tipo_partidos` (`id`, `created_at`, `updated_at`, `cant_jugadores`, `superficie`)
VALUES
	(1,'2018-07-31 15:36:44','2018-07-31 15:36:44',7,'Sintetico'),
	(2,'2018-07-31 15:38:44','2018-07-31 15:38:44',7,'Sintetico'),
	(3,'2018-07-31 15:39:20','2018-07-31 15:39:20',7,'Sintetico'),
	(4,'2018-07-31 15:43:29','2018-07-31 15:43:29',7,'Sintetico');

/*!40000 ALTER TABLE `tipo_partidos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Juan Pablo Boti','juanpboti@gmail.com','$2y$10$UmBS1T9uSZzWk6SATe0pU.805Z8D5M8Ks4hjE.jHfiXx.nxh6XN7G','Uc5JIn9cHhemOiB6i1zhVsWZNdHnbxdwqTeZLGqqzE7bof3m1gvBLG41Tsw1','2018-07-16 17:44:10','2018-07-16 17:44:10'),
	(2,'Pepito','pepito@hotmail.com','$2y$10$qlRN3z8nFH1dmawbSjZRb.Kf6p/do18U/FMR9krBF30DC6u0SWlF6',NULL,'2018-07-16 18:15:56','2018-07-16 18:15:56'),
	(3,'quepasa','quepasa@coneseperro.com','$2y$10$PQ.PAZ31d2oKvC.HCYAtq.DQQvIoD7L/FDAjlsdINEoTlKtJXb1lW','5MvaMn0bnBNWUWlBjy3mZbtP4KV4PgPd4TtcFXL8H5dzmiQVQNlBinFcYuYf','2018-07-31 13:48:40','2018-07-31 13:48:40');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

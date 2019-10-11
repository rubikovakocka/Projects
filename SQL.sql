-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for phptest
CREATE DATABASE IF NOT EXISTS `phptest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phptest`;

-- Dumping structure for table phptest.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(320) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `developer_type` varchar(50) DEFAULT NULL,
  `technology` varchar(50) DEFAULT NULL,
  `framework` varchar(50) DEFAULT NULL,
  `microframework` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table phptest.users: ~12 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `name`, `password`, `developer_type`, `technology`, `framework`, `microframework`) VALUES
	(1, 'acagali97@gmail.com', 'Aleksandar Galic', 'sifra1', 'backend', 'php', 'laravel', 'lumen'),
	(2, 'gale_destroyer@gmail.com', 'Gale Destroyer', 'sifra2', 'frontend', 'react', 'reactnative', NULL),
	(3, 'primer@primer.com', 'Dragoljub Petrovic', '123321', 'frontend', 'angular', 'angularjs', NULL),
	(4, 'jane@example.com', 'JaneDoe', 'sifra4', 'frontend', 'angular', 'angular2', NULL),
	(5, 'janedoe@example.com', 'ExemplePerson', 'wqe', 'backend', 'nodejs', 'express', NULL),
	(6, 'little@gmail.com', 'Little', '123321', 'backend', 'nodejs', 'nestjs', NULL),
	(9, 'maja@gmail.com', 'Maja', 'maja123', 'backend', 'php', 'symfony', 'silex'),
	(10, 'proba@gmail.com', 'Proba Proba', '123321', 'backend', 'php', 'laravel', 'lumen'),
	(12, 'nece@gmail.com', 'Nece nece', 'nece', 'backend', 'php', 'laravel', 'lumen'),
	(13, 'bani@gmail.com', 'Bani bani', 'banibani', 'frontend', 'angular', 'symphony', NULL),
	(14, 'mira@gmail.com', 'Mira Miric', 'mira', 'frontend', 'vue', NULL, NULL),
	(15, 'gina@gmail.com', 'Gina Valentina', 'gina', 'frontend', 'vue', NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

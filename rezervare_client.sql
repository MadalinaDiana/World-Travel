-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table worldtravel.rezervare_client: ~6 rows (approximately)
/*!40000 ALTER TABLE `rezervare_client` DISABLE KEYS */;
INSERT INTO `rezervare_client` (`id`, `name`, `email`, `phone`, `tara`, `oras`, `cerinte`) VALUES
	(1, 'Madalina', 'madalinadiana728@yahoo.com', 7777777, 'Romania', 'Baia Mare', '0'),
	(2, 'Andrei', 'andrei@yahoo.com', 222222222, 'Romania', 'Baia Mare', '0'),
	(3, 'Dana', 'dana@yahoo.com', 78888888, 'Romania', 'Baia Mare', '0'),
	(4, 'Dimitrache', 'dimi@yahoo.com', 7888888, 'Romania', 'Baia Mare', '0'),
	(5, 'Ana', 'ana@yahoo.com', 7888200, 'Romania', 'Baia Mare', ''),
	(6, 'Andreea', 'andreea@yahoo.com', 7888888, 'Romania', 'Oradea', '0'),
	(8, 'Adina', 'adina@yahoo.com', 88888, 'Romania', 'Baia Sprie', '0'),
	(9, 'Alin', 'alin@yahoo.com', 123456, 'Romania', 'Baia Sprie', '0');
/*!40000 ALTER TABLE `rezervare_client` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

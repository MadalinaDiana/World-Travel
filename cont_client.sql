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

-- Dumping data for table worldtravel.cont_client: ~5 rows (approximately)
/*!40000 ALTER TABLE `cont_client` DISABLE KEYS */;
INSERT INTO `cont_client` (`id`, `name0`, `mail0`, `mobile0`) VALUES
	(1, 'Tomas', 'tom@yahoo.com', 78899922),
	(2, 'Ana Maria', 'ana@yahoo.com', 788888822),
	(3, 'Floare', 'flo@yahoo.com', 8999999),
	(7, 'Razvan', 'razi@yahoo.com', 78889999),
	(12, 'Mihaita', 'dan@yahoo.com', 999999);
/*!40000 ALTER TABLE `cont_client` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

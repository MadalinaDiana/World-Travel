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

-- Dumping data for table worldtravel.cont_partener: ~5 rows (approximately)
/*!40000 ALTER TABLE `cont_partener` DISABLE KEYS */;
INSERT INTO `cont_partener` (`id`, `firstname`, `lastname`, `email`, `newpass`, `phone`) VALUES
	(1, 'Lucas', 'Floare', 'lucas@yahoo.com', 'lucasfloare1234', 788443322),
	(2, 'Laszlo', 'Madalina', 'ceva@yahoo.com', '123456', 751222222),
	(8, 'Angela', 'Dimitrache', 'dimistrache@yahoo.com', '123456', 788888888),
	(11, 'Pascalopol', 'Florinache', 'florina@yahoo.com', '677888', 999999);
/*!40000 ALTER TABLE `cont_partener` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

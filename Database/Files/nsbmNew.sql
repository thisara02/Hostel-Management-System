-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.33 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nsbmproject
CREATE DATABASE IF NOT EXISTS `nsbmproject` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nsbmproject`;

-- Dumping structure for table nsbmproject.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.admin: ~0 rows (approximately)
INSERT INTO `admin` (`admin_id`, `email`, `password`, `verification_code`) VALUES
	(2, 'rvdo.development@gmail.com', 'kajja1245', '65ee64e10d527');

-- Dumping structure for table nsbmproject.gender
CREATE TABLE IF NOT EXISTS `gender` (
  `gender_id` int NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.gender: ~0 rows (approximately)
INSERT INTO `gender` (`gender_id`, `gender`) VALUES
	(1, 'Male'),
	(2, 'Female');

-- Dumping structure for table nsbmproject.landloaders
CREATE TABLE IF NOT EXISTS `landloaders` (
  `landloaders_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `r_date` datetime NOT NULL,
  `gender_gender_id` int NOT NULL,
  `verification_code` varchar(45) NOT NULL,
  PRIMARY KEY (`landloaders_id`),
  KEY `fk_landloaders_gender1_idx` (`gender_gender_id`),
  CONSTRAINT `fk_landloaders_gender1` FOREIGN KEY (`gender_gender_id`) REFERENCES `gender` (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.landloaders: ~0 rows (approximately)
INSERT INTO `landloaders` (`landloaders_id`, `firstname`, `lastname`, `email`, `password`, `mobile`, `r_date`, `gender_gender_id`, `verification_code`) VALUES
	(10, 'Saveen', 'Kudagama', 'saveenkudagama2002@gmail.com', 'landlord', '0766088374', '2024-03-10 13:43:24', 1, '65ee60d3d7a9c'),
	(11, 'Saveen', 'Kudagama', 'saveenkudagama2@gmail.com', '1254788', '0766088375', '2024-03-10 13:46:03', 1, '');

-- Dumping structure for table nsbmproject.stubooking
CREATE TABLE IF NOT EXISTS `stubooking` (
  `st_book_id` int NOT NULL AUTO_INCREMENT,
  `status` int DEFAULT NULL,
  `student_student_id` int NOT NULL,
  `uploadHostels_uploadHostels_id` int NOT NULL,
  `landlordApproved` int DEFAULT NULL,
  PRIMARY KEY (`st_book_id`),
  KEY `fk_stuBooking_student1_idx` (`student_student_id`),
  KEY `fk_stuBooking_uploadHostels1_idx` (`uploadHostels_uploadHostels_id`),
  CONSTRAINT `fk_stuBooking_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`),
  CONSTRAINT `fk_stuBooking_uploadHostels1` FOREIGN KEY (`uploadHostels_uploadHostels_id`) REFERENCES `uploadhostels` (`uploadHostels_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.stubooking: ~0 rows (approximately)
INSERT INTO `stubooking` (`st_book_id`, `status`, `student_student_id`, `uploadHostels_uploadHostels_id`, `landlordApproved`) VALUES
	(2, 1, 1, 1, 1),
	(3, 1, 1, 2, 1),
	(4, 1, 1, 4, 1);

-- Dumping structure for table nsbmproject.student
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `r_date` datetime NOT NULL,
  `gender_gender_id` int NOT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  KEY `fk_student_gender_idx` (`gender_gender_id`),
  CONSTRAINT `fk_student_gender` FOREIGN KEY (`gender_gender_id`) REFERENCES `gender` (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.student: ~0 rows (approximately)
INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `email`, `password`, `mobile`, `r_date`, `gender_gender_id`, `verification_code`) VALUES
	(1, 'Sajeew', 'Kudagama', 'saveenkudagama2002@gmail.com', 'student', '0766088374', '2024-03-11 10:20:05', 1, '65efaa3dbc0d5');

-- Dumping structure for table nsbmproject.uploadhostels
CREATE TABLE IF NOT EXISTS `uploadhostels` (
  `uploadHostels_id` int NOT NULL AUTO_INCREMENT,
  `imgPath` text NOT NULL,
  `description` text NOT NULL,
  `latitude` varchar(45) NOT NULL,
  `logitude` varchar(45) NOT NULL,
  `placeName` varchar(45) NOT NULL,
  `price` double NOT NULL,
  `landloaders_landloaders_id` int NOT NULL,
  `dateTimeAdded` datetime NOT NULL,
  `wardenApprovel_bookingApprovel_id` int DEFAULT NULL,
  PRIMARY KEY (`uploadHostels_id`),
  KEY `fk_uploadHostels_landloaders1_idx` (`landloaders_landloaders_id`),
  KEY `fk_uploadHostels_wardenApprovel1_idx` (`wardenApprovel_bookingApprovel_id`),
  CONSTRAINT `fk_uploadHostels_landloaders1` FOREIGN KEY (`landloaders_landloaders_id`) REFERENCES `landloaders` (`landloaders_id`),
  CONSTRAINT `fk_uploadHostels_wardenApprovel1` FOREIGN KEY (`wardenApprovel_bookingApprovel_id`) REFERENCES `wardenapprovel` (`bookingApprovel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.uploadhostels: ~9 rows (approximately)
INSERT INTO `uploadhostels` (`uploadHostels_id`, `imgPath`, `description`, `latitude`, `logitude`, `placeName`, `price`, `landloaders_landloaders_id`, `dateTimeAdded`, `wardenApprovel_bookingApprovel_id`) VALUES
	(1, 'resources/uploadHostelsImg/Saveen_65f1a5642b1de.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 40000, 10, '2024-03-13 18:38:52', 1),
	(2, 'resources/uploadHostelsImg/Saveen_65f14aab2abaf.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 40000, 10, '2024-03-13 12:14:27', 1),
	(3, 'resources/uploadHostelsImg/Saveen_65f1a581cea00.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 40000, 10, '2024-03-13 18:39:21', 2),
	(4, 'resources/uploadHostelsImg/Saveen_65f14aab2abaf.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 40000, 10, '2024-03-13 12:14:27', 1),
	(5, 'resources/uploadHostelsImg/Saveen_65f14aab2abaf.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 40000, 10, '2024-03-13 12:14:27', 2),
	(6, 'resources/uploadHostelsImg/Saveen_65f14aab2abaf.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 35000, 10, '2024-03-13 12:14:27', 1),
	(7, 'resources/uploadHostelsImg/Saveen_65f14aab2abaf.jpeg', 'Well-Conditioned\r\nSpacious', '6.9271', '79.8612', 'Colombo', 35000, 10, '2024-03-13 12:14:27', 1),
	(8, 'resources/uploadHostelsImg/Saveen_65f2636963000.jpeg', 'Good-Conditioned', '6.8018', '79.9227', 'Piliyandala', 20000, 10, '2024-03-14 08:09:37', 1),
	(9, 'resources/uploadHostelsImg/Saveen_65f2684ac6ac0.jpeg', 'Spacious', '5.9740', '80.3622', 'Homagama', 26000, 10, '2024-03-14 08:30:26', 1);

-- Dumping structure for table nsbmproject.warden
CREATE TABLE IF NOT EXISTS `warden` (
  `warden_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `r_date` datetime DEFAULT NULL,
  `gender_gender_id` int NOT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`warden_id`),
  KEY `fk_Warden_gender1_idx` (`gender_gender_id`),
  CONSTRAINT `fk_Warden_gender1` FOREIGN KEY (`gender_gender_id`) REFERENCES `gender` (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.warden: ~0 rows (approximately)
INSERT INTO `warden` (`warden_id`, `firstname`, `lastname`, `email`, `password`, `mobile`, `r_date`, `gender_gender_id`, `verification_code`) VALUES
	(1, 'Saveen', 'Kudagama', 'saveenkudagama2002@gmail.com', 'warden', '0766088374', '2024-03-12 07:22:33', 1, NULL),
	(2, 'Saveen', 'Kudagama', 'saveenkudagama@gmail.com', '200226', '0766088375', '2024-03-12 07:23:50', 1, NULL);

-- Dumping structure for table nsbmproject.wardenapprovel
CREATE TABLE IF NOT EXISTS `wardenapprovel` (
  `bookingApprovel_id` int NOT NULL AUTO_INCREMENT,
  `bookingStatus` varchar(20) NOT NULL,
  PRIMARY KEY (`bookingApprovel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nsbmproject.wardenapprovel: ~0 rows (approximately)
INSERT INTO `wardenapprovel` (`bookingApprovel_id`, `bookingStatus`) VALUES
	(1, 'Approved'),
	(2, 'Reject');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

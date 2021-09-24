-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.31 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_peralta
CREATE DATABASE IF NOT EXISTS `db_peralta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_peralta`;

-- Dumping structure for table db_peralta.tbl_appointment
CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `apt_id` int(11) NOT NULL AUTO_INCREMENT,
  `apt_fname` varchar(255) NOT NULL,
  `apt_lname` varchar(255) NOT NULL,
  `apt_minit` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `apt_contactno` varchar(255) NOT NULL,
  `apt_address` varchar(255) NOT NULL,
  `apt_patient_type` varchar(255) NOT NULL,
  `apt_time` varchar(255) NOT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `apt_visit_reason` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`apt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_peralta.tbl_appointment: ~13 rows (approximately)
DELETE FROM `tbl_appointment`;
/*!40000 ALTER TABLE `tbl_appointment` DISABLE KEYS */;
INSERT INTO `tbl_appointment` (`apt_id`, `apt_fname`, `apt_lname`, `apt_minit`, `email`, `apt_contactno`, `apt_address`, `apt_patient_type`, `apt_time`, `end_time`, `apt_visit_reason`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(26, 'Jeffrey', 'Lozada', '0', NULL, '09123123123', 'Fatima Extension, Dasmarinas', 'Existing', '2021-09-22 11:15', '2021-09-22 12:15', 'checkup', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(27, 'Didz', 'Arcilla', 'O', NULL, '0931231', 'Area C', 'Existing', '2021-09-16 09:15', '2021-09-16 10:15', 'Inquiry of Products', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(28, 'Juan', 'John', 'J', NULL, '09312312', 'Laguna', 'Existing', '2021-09-16 08:00', '2021-09-16 08:30', 'Cat Checkup', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(30, 'Anna', 'Anne', 'A', NULL, '09321312', 'Batangas City', 'New', '2021-09-22 09:20', '2021-09-22 10:20', 'Check up Dogs and Cats', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(31, 'Luffy', 'Monkey', 'D', NULL, '092312312', 'One Piece', 'Existing', '2021-09-22 09:15', '2021-09-22 10:15', 'One Piece', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(32, 'Marco', 'Phoenix', 'D', NULL, '09312312', 'Whitebeard Pirates', 'New', '2021-09-14 11:11', '2021-09-14 12:11', 'Whitebeard visit', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(33, 'STUDENTD', '2D', 'AD', NULL, '092312311', 'AAAAAAD', 'Existing', '2021-09-17 12:18', '2021-09-17 13:18', 'REASON SAMPLEDD', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(34, 'Employee', 'Peralta', 'O', NULL, '092312312', 'Dasmarinas Pet Clinic', 'Existing', '2021-09-19 11:00', '2021-09-19 12:00', 'HOLIDAY', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(35, 'Employee 11', 'Peralta 1', 'O', NULL, '0912312312', 'PERALTA CLINIC 1', 'Existing', '2021-09-28 11:00', '2021-09-28 12:00', 'BIRTHDAY 11', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(40, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasdasdasd', 'New', '2021-09-23 16:30', '2021-09-22 17:30', 'Consultation', '1', '2021-09-20 21:07:06', '2021-09-23 20:26:09', NULL),
	(48, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasdasd', 'New', '2021-09-23 16:40', '2021-09-22 17:40', 'Vaccination', '1', '2021-09-20 21:07:06', '2021-09-23 20:26:06', NULL),
	(49, 'joshua', 'blando', 'H', NULL, '09988619866', 'asddwewrwrewwr', 'New', '2021-09-16 16:00', '2021-09-16 17:00', 'Veterinary Surgery', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(50, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasd', 'New', '2021-09-16 14:00', '2021-09-16 15:00', 'Veterinary Surgery', '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL);
/*!40000 ALTER TABLE `tbl_appointment` ENABLE KEYS */;

-- Dumping structure for table db_peralta.tbl_cms
CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `section` varchar(50) DEFAULT NULL,
  `content` json DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_cms: 5 rows
DELETE FROM `tbl_cms`;
/*!40000 ALTER TABLE `tbl_cms` DISABLE KEYS */;
INSERT INTO `tbl_cms` (`section`, `content`, `updated_at`) VALUES
	('banner', '{"images": ["uploads/cms/61484e1c1323f.jpg"]}', '2021-09-20 02:02:20'),
	('services', NULL, '2021-09-19 20:50:02'),
	('our_teams', NULL, '2021-09-19 20:50:23'),
	('about_us', '{"images": ["uploads/cms/61484f797f77e.jpg", "uploads/cms/61484f797fa97.jpg", "uploads/cms/61484f797fc7f.jpg", "uploads/cms/61484f797fe4d.jpg", "uploads/cms/61484f79800b3.jpg"], "history": "SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0LiBUaGUgcG9pbnQgb2YgdXNpbmcgTG9yZW0gSXBzdW0gaXMgdGhhdCBpdCBoYXMgYSBtb3JlLW9yLWxlc3Mgbm9ybWFsIGRpc3RyaWJ1dGlvbiBvZiBsZXR0ZXJzLCBhcyBvcHBvc2VkIHRvIHVzaW5nICdDb250ZW50IGhlcmUsIGNvbnRlbnQgaGVyZScsIG1ha2luZyBpdCBsb29rIGxpa2UgcmVhZGFibGUgRW5nbGlzaC4gTWFueSBkZXNrdG9wIHB1Ymxpc2hpbmcgcGFja2FnZXMgYW5kIHdlYiBwYWdlIGVkaXRvcnMgbm93IHVzZSBMb3JlbSBJcHN1bSBhcyB0aGVpciBkZWZhdWx0IG1vZGVsIHRleHQsIGFuZCBhIHNlYXJjaCBmb3IgJ2xvcmVtIGlwc3VtJyB3aWxsIHVuY292ZXIgbWFueSB3ZWIgc2l0ZXMgc3RpbGwgaW4gdGhlaXIgaW5mYW5jeS4gVmFyaW91cyB2ZXJzaW9ucyBoYXZlIGV2b2x2ZWQgb3ZlciB0aGUgeWVhcnMsIHNvbWV0aW1lcyBieSBhY2NpZGVudCwgc29tZXRpbWVzIG9uIHB1cnBvc2UgKGluamVjdGVkIGh1bW91ciBhbmQgdGhlIGxpa2UpLg=="}', '2021-09-20 02:08:09'),
	('settings', '{"images": ["uploads/cms/614d8907dde42.png"], "comp_no": "09095020288", "comp_name": "Sofia Hermosa", "comp_email": "hermosasofia@gmail.com", "comp_address": "NjggQ2FtZXJpbm8gQXZlLCBEYW1hcmnDsWFzIENpdHksIDQxMTQgQ2F2aXRl"}', '2021-09-24 01:34:16');
/*!40000 ALTER TABLE `tbl_cms` ENABLE KEYS */;

-- Dumping structure for table db_peralta.tbl_inquiries
CREATE TABLE IF NOT EXISTS `tbl_inquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `content` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_inquiries: 5 rows
DELETE FROM `tbl_inquiries`;
/*!40000 ALTER TABLE `tbl_inquiries` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_inquiries` ENABLE KEYS */;

-- Dumping structure for table db_peralta.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_users: 0 rows
DELETE FROM `tbl_users`;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.31 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
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
  `decline_reason` longtext,
  `status` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_peralta.tbl_appointment: ~16 rows (approximately)
DELETE FROM `tbl_appointment`;
/*!40000 ALTER TABLE `tbl_appointment` DISABLE KEYS */;
INSERT INTO `tbl_appointment` (`id`, `user_id`, `apt_fname`, `apt_lname`, `apt_minit`, `email`, `apt_contactno`, `apt_address`, `apt_patient_type`, `apt_time`, `end_time`, `apt_visit_reason`, `decline_reason`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(26, 0, 'Jeffrey', 'Lozada', '0', NULL, '09123123123', 'Fatima Extension, Dasmarinas', 'Existing', '2021-09-22 11:15', '2021-09-22 12:15', 'checkup', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(27, 0, 'Didz', 'Arcilla', 'O', NULL, '0931231', 'Area C', 'Existing', '2021-09-16 09:15', '2021-09-16 10:15', 'Inquiry of Products', 'c2FtcGxl', '3', '2021-09-20 21:07:06', '2021-11-18 22:38:42', NULL),
	(28, 1, 'Juan', 'John', 'J', NULL, '09312312', 'Laguna', 'Existing', '2021-09-16 08:00', '2021-09-16 08:30', 'Cat Checkup', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0LiBUaGUgcG9pbnQgb2YgdXNpbmcgTG9yZW0gSXBzdW0=', '3', '2021-09-20 21:07:06', '2021-10-28 20:46:40', NULL),
	(30, 0, 'Anna', 'Anne', 'A', NULL, '09321312', 'Batangas City', 'New', '2021-09-22 09:20', '2021-09-22 10:20', 'Check up Dogs and Cats', 'U2FtcGxlIHJlYXNvbg==', '3', '2021-09-20 21:07:06', '2021-11-18 23:01:07', NULL),
	(31, 0, 'Luffy', 'Monkey', 'D', NULL, '092312312', 'One Piece', 'Existing', '2021-09-22 09:15', '2021-09-22 10:15', 'One Piece', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(32, 1, 'Marco', 'Phoenix', 'D', NULL, '09312312', 'Whitebeard Pirates', 'New', '2021-09-14 11:11', '2021-09-14 12:11', 'Whitebeard visit', NULL, '3', '2021-09-20 21:07:06', '2021-10-28 20:40:08', NULL),
	(33, 0, 'STUDENTD', '2D', 'AD', NULL, '092312311', 'AAAAAAD', 'Existing', '2021-09-17 12:18', '2021-09-17 13:18', 'REASON SAMPLEDD', NULL, '3', '2021-09-20 21:07:06', '2021-10-09 21:22:27', '2021-10-09 21:22:27'),
	(34, 0, 'Employee', 'Peralta', 'O', NULL, '092312312', 'Dasmarinas Pet Clinic', 'Existing', '2021-09-19 11:00', '2021-09-19 12:00', 'HOLIDAY', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(35, 0, 'Employee 11', 'Peralta 1', 'O', NULL, '0912312312', 'PERALTA CLINIC 1', 'Existing', '2021-09-28 11:00', '2021-09-28 12:00', 'BIRTHDAY 11', NULL, '3', '2021-09-20 21:07:06', '2021-10-21 22:50:00', '2021-10-21 22:50:00'),
	(40, 0, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasdasdasd', 'New', '2021-09-23 16:30', '2021-09-22 17:30', 'Consultation', NULL, '1', '2021-09-20 21:07:06', '2021-09-23 20:26:09', NULL),
	(48, 1, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasdasd', 'New', '2021-09-23 16:40', '2021-09-22 17:40', 'Vaccination', NULL, '1', '2021-09-20 21:07:06', '2021-10-28 20:40:12', NULL),
	(49, 0, 'joshua', 'blando', 'H', NULL, '09988619866', 'asddwewrwrewwr', 'New', '2021-09-16 16:00', '2021-09-16 17:00', 'Veterinary Surgery', NULL, '1', '2021-09-20 21:07:06', '2021-11-18 23:04:45', '2021-10-09 21:21:46'),
	(50, 0, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasd', 'New', '2021-09-16 14:00', '2021-09-16 15:00', 'Veterinary Surgery', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(51, 0, 'joshua', 'blando', '', NULL, '09988619866', '                                            asdasdasd', 'Existing', '2021-10-13 14:30', '2021-10-13 15:30', 'General Checkup', 'c2FtcGxl', '1', '2021-10-14 20:59:59', '2021-11-18 23:04:42', NULL),
	(52, 1, 'joshua', 'blando', '', NULL, '09988619866', '                                            asdasdasd', 'Existing', '2021-10-12 16:00', '2021-10-12 17:00', 'Veterinary Surgery', 'c2FtcGxl', '3', '2021-10-28 21:13:39', '2021-11-18 23:13:01', NULL),
	(53, 1, 'joshua', 'blando', '', NULL, '09988619866', '                                            asdasdasd', 'Existing', '2021-10-14 11:00', '2021-10-14 12:00', 'Vaccination', 'U2FtcGxl', '2', '2021-10-28 21:30:44', '2021-11-18 23:42:37', NULL);
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
	('settings', '{"images": ["uploads/cms/61511073e9c7a.png"], "comp_no": "09319949704", "comp_name": "Peralta Dog and Cat Clinic", "comp_email": "hermosasofia@gmail.com", "comp_address": "NjggQ2FtZXJpbm8gQXZlLCBEYW1hcmnDsWFzIENpdHksIDQxMTQgQ2F2aXRl"}', '2021-10-10 10:51:04');
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
  `replied_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_inquiries: 1 rows
DELETE FROM `tbl_inquiries`;
/*!40000 ALTER TABLE `tbl_inquiries` DISABLE KEYS */;
INSERT INTO `tbl_inquiries` (`id`, `name`, `email`, `contact_no`, `content`, `created_at`, `updated_at`, `replied_at`, `deleted_at`) VALUES
	(1, 'Jane Doe ', 'janedoe@gmail.com', '029423423423', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0LiBUaGUgcG9pbnQgb2YgdXNpbmcgTG9yZW0gSXBzdW0gaXMgdGhhdCBpdCBoYXMgYSBtb3JlLW9yLWxlc3Mgbm9ybWFsIGRpc3RyaWJ1dGlvbiBvZiBsZXR0ZXJzLCBhcyBvcHBvc2VkIHRvIHVzaW5nICdDb250ZW50IGhlcmUsIGNvbnRlbnQgaGVyZScsIG1ha2luZyBpdCBsb29rIGxpa2UgcmVhZGFibGUgRW5nbGlzaC4gTWFueSBkZXNrdG9wIHB1Ymxpc2hpbmcgcGFja2FnZXMgYW5kIHdlYiBwYWdlIGVkaXRvcnMgbm93IHVzZSBMb3JlbSBJcHN1bSBhcyB0aGVpciBkZWZhdWx0IG1vZGVsIHRleHQsIGFuZCBhIHNlYXJjaCBmb3IgJ2xvcmVtIGlwc3VtJyB3aWxsIHVuY292ZXIgbWFueSB3ZWIgc2l0ZXMgc3RpbGwgaW4gdGhlaXIgaW5mYW5jeS4gVmFyaW91cyB2ZXJzaW9ucyBoYXZlIGV2b2x2ZWQgb3ZlciB0aGUgeWVhcnMsIHNvbWV0aW1lcyBieSBhY2NpZGVudCwgc29tZXRpbWVzIG9uIHB1cnBvc2UgKGluamVjdGVkIGh1bW91ciBhbmQgdGhlIGxpa2UpLgoK', '2021-09-25 14:13:53', '2021-10-09 21:13:54', '2021-09-25 15:21:54', NULL);
/*!40000 ALTER TABLE `tbl_inquiries` ENABLE KEYS */;

-- Dumping structure for table db_peralta.tbl_services
CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logo` longtext,
  `name` varchar(50) DEFAULT NULL,
  `description` longtext,
  `time_interval` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_services: 6 rows
DELETE FROM `tbl_services`;
/*!40000 ALTER TABLE `tbl_services` DISABLE KEYS */;
INSERT INTO `tbl_services` (`id`, `logo`, `name`, `description`, `time_interval`, `price`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'uploads/services/61a3a345d281d.svg', 'Vaccination', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '00:30', '200', '2', '2021-10-03 18:11:55', '2021-11-28 23:41:57', NULL),
	(2, 'uploads/services/61a3a3355804a.svg', 'Acupuncture', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '01:00', '200', '2', '2021-10-03 18:39:08', '2021-11-28 23:41:41', NULL),
	(3, 'uploads/services/61a3a2ccd96b4.svg', 'Laser therapy', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '00:30', '150', '2', '2021-10-03 18:39:51', '2021-11-28 23:39:56', NULL),
	(4, 'uploads/services/61a3a322bbcad.svg', 'Annual Checkup', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '00:30', '150', '2', '2021-10-03 18:40:25', '2021-11-28 23:41:22', NULL),
	(5, 'uploads/services/61a3a481028aa.svg', 'Medication', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '01:00', '200', '1', '2021-10-03 18:41:04', '2021-11-28 23:47:13', NULL),
	(6, 'uploads/services/61a3a2f1ee093.svg', 'Food Therapy', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '02:00', '600', '2', '2021-10-03 18:41:42', '2021-11-28 23:40:33', NULL);
/*!40000 ALTER TABLE `tbl_services` ENABLE KEYS */;

-- Dumping structure for table db_peralta.tbl_teams
CREATE TABLE IF NOT EXISTS `tbl_teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profile` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `description` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_teams: 2 rows
DELETE FROM `tbl_teams`;
/*!40000 ALTER TABLE `tbl_teams` DISABLE KEYS */;
INSERT INTO `tbl_teams` (`id`, `profile`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'uploads/teams/61690dee8ae08.png', 'sample 123', 'ICAgICAgICAgICAgICAgIGFzZGFzZGFzZGFzZA==', '2021-10-14 21:43:39', '2021-10-14 22:17:32', '2021-10-14 22:17:32'),
	(3, 'uploads/teams/61691d2adc566.jpg', 'Lorem Ipsum', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0LiAgIA==', '2021-10-14 23:18:18', '2021-10-14 23:18:52', NULL);
/*!40000 ALTER TABLE `tbl_teams` ENABLE KEYS */;

-- Dumping structure for table db_peralta.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `address` longtext,
  `gender` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `password` longtext,
  `activated` int(11) DEFAULT '1',
  `user_type` int(11) DEFAULT '2',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_users: 4 rows
DELETE FROM `tbl_users`;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `middle_name`, `address`, `gender`, `profile`, `email`, `contact_no`, `uname`, `password`, `activated`, `user_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'joshua', 'blando', '', 'ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhc2Rhc2Rhc2Q=', 'Male', NULL, 'jblando1996@gmail.com', '09988619866', 'jblando', '$2y$10$vdXViJx2RW9fuQOLnFL4buLCHM.ZEMenD9vqXoeZ/.uo.nj7rfBl.', 1, 2, '2021-10-08 01:49:53', '2021-10-14 20:50:04', NULL),
	(2, 'Employee 11', 'Peralta ', '', 'ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhc2Rhc2RhZGFzZA==', 'Male', NULL, 'hermosasofia1118@gmail.com', '09988619866', 'sofiaH', '$2y$10$bwAfJyE0ab1qSaH/a5GN1.h8gjZoB1UaVu5J0KWwtrLELQuvWT4kC', 1, 2, '2021-10-08 03:34:28', '2021-10-21 21:23:08', '2021-10-21 21:23:08'),
	(3, 'Jeffrey', 'Lozada', '', 'ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBnaGZoZmhmZ2Rmc2dkZHNkZ3Nkc2dkZnNkcw==', 'Male', NULL, 'janedoe@gmail.com', '09123123123', 'test_user', '$2y$10$foKKJcRYWBdaKvOH4WUZWe4NidRrdcCiQGs.5mfws/d0HjuD6LiTG', 1, 2, '2021-10-08 11:56:38', '2021-10-10 12:00:38', NULL),
	(4, 'Peralta', 'Administrator', '', 'ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBnaGZoZmhmZ2Rmc2dkZHNkZ3Nkc2dkZnNkcw==', 'Male', NULL, 'peralta.admin@gmail.com', '09319949704', 'admin', '$2y$10$CP6lgj3bCUuBBCG7Lrv/UO4/b9xzPBvn5BUcSG2xT.yGajxiLCXna', 1, 1, '2021-10-10 10:06:30', '2021-10-10 12:09:00', NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

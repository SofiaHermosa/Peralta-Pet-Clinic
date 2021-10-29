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

-- Dumping data for table db_peralta.tbl_appointment: ~14 rows (approximately)
DELETE FROM `tbl_appointment`;
/*!40000 ALTER TABLE `tbl_appointment` DISABLE KEYS */;
INSERT INTO `tbl_appointment` (`id`, `user_id`, `apt_fname`, `apt_lname`, `apt_minit`, `email`, `apt_contactno`, `apt_address`, `apt_patient_type`, `apt_time`, `end_time`, `apt_visit_reason`, `decline_reason`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(26, 0, 'Jeffrey', 'Lozada', '0', NULL, '09123123123', 'Fatima Extension, Dasmarinas', 'Existing', '2021-09-22 11:15', '2021-09-22 12:15', 'checkup', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(27, 0, 'Didz', 'Arcilla', 'O', NULL, '0931231', 'Area C', 'Existing', '2021-09-16 09:15', '2021-09-16 10:15', 'Inquiry of Products', NULL, '2', '2021-09-20 21:07:06', '2021-10-02 22:39:27', NULL),
	(28, 1, 'Juan', 'John', 'J', NULL, '09312312', 'Laguna', 'Existing', '2021-09-16 08:00', '2021-09-16 08:30', 'Cat Checkup', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0LiBUaGUgcG9pbnQgb2YgdXNpbmcgTG9yZW0gSXBzdW0=', '3', '2021-09-20 21:07:06', '2021-10-28 20:46:40', NULL),
	(30, 0, 'Anna', 'Anne', 'A', NULL, '09321312', 'Batangas City', 'New', '2021-09-22 09:20', '2021-09-22 10:20', 'Check up Dogs and Cats', NULL, '2', '2021-09-20 21:07:06', '2021-09-26 20:55:18', NULL),
	(31, 0, 'Luffy', 'Monkey', 'D', NULL, '092312312', 'One Piece', 'Existing', '2021-09-22 09:15', '2021-09-22 10:15', 'One Piece', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(32, 1, 'Marco', 'Phoenix', 'D', NULL, '09312312', 'Whitebeard Pirates', 'New', '2021-09-14 11:11', '2021-09-14 12:11', 'Whitebeard visit', NULL, '3', '2021-09-20 21:07:06', '2021-10-28 20:40:08', NULL),
	(33, 0, 'STUDENTD', '2D', 'AD', NULL, '092312311', 'AAAAAAD', 'Existing', '2021-09-17 12:18', '2021-09-17 13:18', 'REASON SAMPLEDD', NULL, '3', '2021-09-20 21:07:06', '2021-10-09 21:22:27', '2021-10-09 21:22:27'),
	(34, 0, 'Employee', 'Peralta', 'O', NULL, '092312312', 'Dasmarinas Pet Clinic', 'Existing', '2021-09-19 11:00', '2021-09-19 12:00', 'HOLIDAY', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(35, 0, 'Employee 11', 'Peralta 1', 'O', NULL, '0912312312', 'PERALTA CLINIC 1', 'Existing', '2021-09-28 11:00', '2021-09-28 12:00', 'BIRTHDAY 11', NULL, '3', '2021-09-20 21:07:06', '2021-10-21 22:50:00', '2021-10-21 22:50:00'),
	(40, 0, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasdasdasd', 'New', '2021-09-23 16:30', '2021-09-22 17:30', 'Consultation', NULL, '1', '2021-09-20 21:07:06', '2021-09-23 20:26:09', NULL),
	(48, 1, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasdasd', 'New', '2021-09-23 16:40', '2021-09-22 17:40', 'Vaccination', NULL, '1', '2021-09-20 21:07:06', '2021-10-28 20:40:12', NULL),
	(49, 0, 'joshua', 'blando', 'H', NULL, '09988619866', 'asddwewrwrewwr', 'New', '2021-09-16 16:00', '2021-09-16 17:00', 'Veterinary Surgery', NULL, '3', '2021-09-20 21:07:06', '2021-10-09 21:21:46', '2021-10-09 21:21:46'),
	(50, 0, 'joshua', 'blando', 'H', NULL, '09988619866', 'asdasd', 'New', '2021-09-16 14:00', '2021-09-16 15:00', 'Veterinary Surgery', NULL, '1', '2021-09-20 21:07:06', '2021-09-20 21:07:06', NULL),
	(51, 0, 'joshua', 'blando', '', NULL, '09988619866', '                                            asdasdasd', 'Existing', '2021-10-13 14:30', '2021-10-13 15:30', 'General Checkup', NULL, '2', '2021-10-14 20:59:59', '2021-10-14 20:59:59', NULL),
	(52, 1, 'joshua', 'blando', '', NULL, '09988619866', '                                            asdasdasd', 'Existing', '2021-10-12 16:00', '2021-10-12 17:00', 'Veterinary Surgery', NULL, '2', '2021-10-28 21:13:39', '2021-10-28 21:14:20', NULL),
	(53, 1, 'joshua', 'blando', '', NULL, '09988619866', '                                            asdasdasd', 'Existing', '2021-10-14 11:00', '2021-10-14 12:00', 'Vaccination', NULL, '2', '2021-10-28 21:30:44', '2021-10-28 21:30:44', NULL);
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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_peralta.tbl_services: 7 rows
DELETE FROM `tbl_services`;
/*!40000 ALTER TABLE `tbl_services` DISABLE KEYS */;
INSERT INTO `tbl_services` (`id`, `logo`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '<svg stroke="currentColor" fill="currentColor" viewBox="0 0 478.637 478.637"  xmlns="http://www.w3.org/2000/svg"><path d="m35.318 478.637h392c4.418 0 8-3.582 8-8v-16c-.025-22.081-17.919-39.975-40-40h-10.381l7.3-41.556 22.485-9.886c2.449-1.076 4.198-3.305 4.661-5.94l23.517-133.951c.764-4.352-2.145-8.499-6.497-9.262-.001 0-.002 0-.003-.001l-15.759-2.766 5.534-31.518 15.758 2.766c4.347.768 8.493-2.133 9.26-6.48.001-.007.002-.013.004-.02.764-4.352-2.145-8.499-6.497-9.262-.001 0-.002 0-.003-.001l-47.278-8.3c-4.352-.764-8.499 2.144-9.263 6.496s2.144 8.499 6.496 9.263l15.759 2.767-5.534 31.518-15.752-2.767c-4.352-.764-8.499 2.144-9.263 6.496 0 .001-.001.003-.001.004l-23.519 133.951c-.462 2.635.423 5.326 2.359 7.172l17.773 16.954-7.782 44.323h-71.674l37.552-16.689c2.888-1.285 4.749-4.15 4.748-7.311v-56c-.01-8.832-7.168-15.99-16-16h-42.584l-5.942-14.855c-6.031-15.221-20.766-25.198-37.139-25.145h-59.965c-11.426.003-22.306 4.888-29.9 13.425l-52.063 58.575h-60.407c-4.418 0-8 3.582-8 8v112c0 4.419 3.582 8 8 8zm382.558-251.6 7.879 1.384-5.537 31.516-7.879-1.383zm-23.639-4.15 7.879 1.383-5.534 31.519-7.879-1.384zm-21.395 121.85 13.094-74.578 15.754 2.766h.01l15.754 2.766-2.766 15.759-15.76-2.767-2.767 15.759 15.76 2.767-2.767 15.759-15.759-2.767-2.767 15.759 15.759 2.767-2.026 11.541-17.605 7.74zm-65.524-10.1h16v16h-10c-3.312-.003-5.997-2.688-6-6zm-264 32h56c2.285 0 4.461-.977 5.979-2.685l18.021-20.273v43.181c0 22.091 17.909 40 40 40s40-17.909 40-40v-68.223c0-4.418-3.582-8-8-8s-8 3.582-8 8v68.223c0 13.255-10.745 24-24 24s-24-10.745-24-24v-60.223c-.001-.301-.019-.601-.053-.9l20.486-23.047c4.556-5.121 11.083-8.051 17.937-8.053h59.965c9.824-.032 18.665 5.954 22.283 15.087l7.954 19.884c1.215 3.037 4.157 5.029 7.428 5.029h16v10c.014 12.145 9.855 21.986 22 22h10v18.8l-65.7 29.2h-11.88l-21.984-14.656c-3.663-2.47-8.635-1.503-11.105 2.161-2.47 3.663-1.503 8.635 2.161 11.105.023.015.046.031.069.046l24 16c1.315.877 2.86 1.344 4.44 1.344h152c13.249.015 23.985 10.751 24 24v8h-376v-96z"/><path d="m243.318 350.637c4.418 0 8-3.582 8-8v-8c0-4.418-3.582-8-8-8s-8 3.582-8 8v8c0 4.419 3.582 8 8 8z"/><path d="m337.856 57.794h-20v-20c0-4.418-3.582-8-8-8h-32c-4.418 0-8 3.582-8 8v20h-20c-4.418 0-8 3.582-8 8v32c0 4.418 3.582 8 8 8h20v20c0 4.418 3.582 8 8 8h32c4.418 0 8-3.582 8-8v-20h20c4.418 0 8-3.582 8-8v-32c0-4.418-3.581-8-8-8zm-8 32h-20c-4.418 0-8 3.582-8 8v20h-16v-20c0-4.418-3.582-8-8-8h-20v-16h20c4.418 0 8-3.582 8-8v-20h16v20c0 4.418 3.582 8 8 8h20z"/><path d="m348.776 21.362c-36.816-31.747-92.398-27.637-124.144 9.18s-27.637 92.398 9.18 124.144c29.646 25.563 72.612 28.477 105.438 7.151l30.3 2.061c4.408.301 8.225-3.029 8.526-7.437.052-.759-.005-1.521-.168-2.263l-6.507-29.661c16.258-35.594 7.036-77.649-22.625-103.175zm6.408 103.927 4.808 21.925-22.394-1.523c-1.819-.128-3.627.373-5.12 1.42-32.63 22.727-77.505 14.698-100.232-17.932s-14.698-77.505 17.932-100.232 77.505-14.698 100.232 17.932c15.017 21.561 17.096 49.591 5.425 73.132-.812 1.634-1.042 3.496-.651 5.278z"/></svg>', 'Vaccination', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-03 18:11:55', '2021-10-03 18:43:13', NULL),
	(2, '<svg stroke="currentColor" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m6.5 15c-.276 0-.5-.224-.5-.5v-7c0-.276.224-.5.5-.5s.5.224.5.5v7c0 .276-.224.5-.5.5z"/><path d="m7.5 8h-2c-.276 0-.5-.224-.5-.5v-4c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5v4c0 .276-.224.5-.5.5zm-1.5-1h1v-3.5c0-.276-.224-.5-.5-.5s-.5.224-.5.5z"/><path d="m17.5 14c-.276 0-.5-.224-.5-.5v-7c0-.276.224-.5.5-.5s.5.224.5.5v7c0 .276-.224.5-.5.5z"/><path d="m18.5 7h-2c-.276 0-.5-.224-.5-.5v-4c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5v4c0 .276-.224.5-.5.5zm-1.5-1h1v-3.5c0-.276-.224-.5-.5-.5s-.5.224-.5.5z"/><path d="m21.5 23h-19c-1.378 0-2.5-1.122-2.5-2.5v-8.021c0-.158.074-.306.201-.4s.289-.124.44-.079c3.644 1.073 7.051.128 10.348-.786 4.15-1.15 8.446-2.341 12.807.863.128.093.204.242.204.402v8.021c0 1.378-1.122 2.5-2.5 2.5zm-20.5-9.871v7.371c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-7.765c-3.899-2.732-7.711-1.676-11.744-.559-3.244.899-6.592 1.828-10.256.953z"/><path d="m1.5 21c-.441 0-.875-.117-1.253-.338-.238-.14-.318-.446-.179-.685.14-.238.445-.318.685-.179.222.13.487.202.747.202.827 0 1.5-.673 1.5-1.5s-.673-1.5-1.5-1.5c-.26 0-.525.072-.747.202-.24.138-.544.059-.685-.179-.139-.238-.06-.545.179-.685.378-.221.812-.338 1.253-.338 1.378 0 2.5 1.122 2.5 2.5s-1.122 2.5-2.5 2.5z"/><path d="m9.5 18c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5 1.5.673 1.5 1.5-.673 1.5-1.5 1.5zm0-2c-.276 0-.5.224-.5.5s.224.5.5.5.5-.224.5-.5-.224-.5-.5-.5z"/><path d="m23 18c-1.103 0-2-.897-2-2s.897-2 2-2c.236 0 .457.04.676.122.258.097.389.385.292.644-.097.258-.387.387-.644.292-.611-.228-1.324.274-1.324.942s.712 1.169 1.324.942c.258-.096.547.033.644.292s-.034.547-.292.644c-.219.082-.44.122-.676.122z"/><path d="m16.5 20c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5 1.5.673 1.5 1.5-.673 1.5-1.5 1.5zm0-2c-.276 0-.5.224-.5.5s.224.5.5.5.5-.224.5-.5-.224-.5-.5-.5z"/></svg>', 'Acupuncture', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-03 18:39:08', '2021-10-03 18:39:15', NULL),
	(3, '<svg stroke="currentColor" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"><path d="m104.596 381.574c-17.625 0-31.965 14.339-31.965 31.965s14.339 31.965 31.965 31.965 31.965-14.339 31.965-31.965-14.339-31.965-31.965-31.965zm0 43.93c-6.598 0-11.965-5.367-11.965-11.965s5.367-11.965 11.965-11.965 11.965 5.367 11.965 11.965-5.367 11.965-11.965 11.965z"/><path d="m412.244 381.574c-17.625 0-31.965 14.339-31.965 31.965s14.34 31.965 31.965 31.965 31.965-14.339 31.965-31.965-14.34-31.965-31.965-31.965zm0 43.93c-6.598 0-11.965-5.367-11.965-11.965s5.367-11.965 11.965-11.965 11.965 5.367 11.965 11.965-5.368 11.965-11.965 11.965z"/><path d="m268.38 394.129c-2.065-5.041-8.042-7.488-13.06-5.41-5.032 2.083-7.499 8.025-5.41 13.06 2.086 5.029 8.027 7.498 13.06 5.41 5.022-2.083 7.504-8.034 5.41-13.06z"/><path d="m512.001 263.221c0-5.523-4.478-10-10-10h-45.144c-12.559 0-24.739 5.207-33.417 14.284-7.421 7.765-18.989 6.573-26.117-.744-8.731-8.732-20.341-13.541-32.689-13.541h-62.745c-5.522 0-10 4.477-10 10s4.478 10 10 10h62.745c7.007 0 13.594 2.728 18.547 7.683 14.958 15.23 39.625 16.209 54.717.422 4.924-5.15 11.834-8.104 18.96-8.104h35.144v47.097c-16.344-.699-32.831 3.342-46.979 11.568-20.484 11.915-45.941 11.915-66.393.025-25.926-15.26-59.032-15.456-85.247-.776-21.336 11.949-46.621 12.692-68.069.583-26.528-15.267-60.344-15.203-86.187.139-20.238 11.713-46.233 11.707-66.49.029-15.811-9.202-34.448-13.201-52.637-11.169v-47.496h194.001c5.523 0 10-4.477 10-10s-4.477-10-10-10h-204c-5.523 0-10 4.477-10 10l-.001 199.719c0 3.101 1.439 6.027 3.895 7.92 2.456 1.892 5.65 2.54 8.651 1.75 17.041-4.488 34.812-2.081 50.044 6.778 26.707 15.502 59.865 15.501 86.62-.052 19.902-11.831 45.949-11.811 66.354.049 26.691 15.514 59.852 15.513 86.542-.001 20.341-11.829 46.391-11.844 66.427.001 26.458 15.382 60.085 15.389 86.542 0 13.02-7.567 30.309-10.583 45.123-7.869 2.919.535 5.925-.255 8.204-2.155s3.598-4.714 3.598-7.681zm-66.978 198.875c-20.488 11.915-45.944 11.913-66.374.036-26.197-15.487-60.347-15.304-86.595-.037-20.179 11.728-46.258 11.729-66.439 0-26.582-15.451-60.584-15.43-86.54 0-20.167 11.723-46.247 11.721-66.437.001-16.12-9.376-34.428-13.204-52.638-11.169v-110.027c14.66-2.131 29.781.83 42.588 8.278 26.404 15.337 60.174 15.519 86.538-.003 19.934-11.586 46.02-11.576 66.473.02 26.538 15.409 59.726 15.052 86.387.051 20.377-11.469 46.241-12.08 66.55-.07 13.35 7.761 28.312 11.642 43.276 11.641 14.961 0 29.924-3.88 43.263-11.639 10.682-6.204 24.23-9.342 36.927-8.778v110.177c-16.264-.569-33.154 3.483-46.979 11.519z"/><path d="m77.459 193.901c19.057 19.669 51.444 19.928 70.812.56 19.15-19.15 19.151-51.111 0-70.26l-14.995-14.996c-11.441-11.441-11.442-30.535 0-41.976l17.201-17.2c12.165-12.165 32.465-12.164 44.63 0l2.035 2.035-2.13 2.13c-15.534 15.534-15.535 41.462 0 56.996 16.743 16.742 35.626 31.237 56.127 43.082 8.425 4.868 16.672 10.3 24.512 16.147.002.001.003.003.004.004 9.7 7.233 18.944 15.226 27.474 23.755 5.466 5.466 12.732 8.476 20.463 8.476 6.587 0 12.833-2.193 17.92-6.222l33.128 33.129c3.854 3.854 10.288 3.854 14.143 0 3.905-3.905 3.905-10.237 0-14.142l-33.13-33.131c8.964-11.348 8.218-27.91-2.253-38.382-8.528-8.527-16.521-17.77-23.756-27.473-5.848-7.842-11.282-16.091-16.151-24.518-11.845-20.501-26.34-39.385-43.082-56.127-15.714-15.712-41.281-15.713-56.996 0l-2.131 2.131-2.034-2.034c-19.873-19.874-53.041-19.875-72.915 0l-17.201 17.2c-19.149 19.15-19.151 51.111 0 70.261l14.995 14.996c11.442 11.442 11.442 30.534 0 41.976-11.59 11.59-30.931 11.405-42.329-.359l-72.136-73.95c-3.855-3.953-10.187-4.032-14.141-.175-3.953 3.856-4.032 10.188-.175 14.141zm261.798-23.21-9.346 9.346c-1.688 1.688-3.933 2.618-6.32 2.618s-4.632-.93-6.32-2.618c-6.505-6.504-13.393-12.718-20.566-18.559l23.994-23.994c5.841 7.175 12.055 14.063 18.558 20.566 3.485 3.486 3.486 9.156 0 12.641zm-97.344-126.695c5.198 0 10.398 1.979 14.356 5.937 15.508 15.508 28.935 33 39.908 51.99 3.82 6.613 7.962 13.122 12.363 19.435l-27.961 27.961c-6.312-4.401-12.822-8.543-19.435-12.364-18.989-10.972-36.482-24.398-51.991-39.907-7.824-7.824-7.823-20.888 0-28.711l18.403-18.403c3.959-3.959 9.157-5.938 14.357-5.938z"/><path d="m442.935 232.491c2.56 0 5.118-.977 7.071-2.929l24.532-24.533c3.905-3.905 3.905-10.237 0-14.142-3.906-3.905-10.236-3.905-14.143 0l-24.532 24.533c-3.905 3.905-3.905 10.237 0 14.142 1.954 1.953 4.512 2.929 7.072 2.929z"/><path d="m412.717 205.366c5.522 0 10-4.477 10-10v-34.695c0-5.523-4.478-10-10-10s-10 4.477-10 10v34.695c0 5.523 4.478 10 10 10z"/><path d="m267.46 257.669c-3.047-4.53-9.321-5.772-13.87-2.76-4.544 3.009-5.761 9.34-2.76 13.86 3.01 4.534 9.337 5.794 13.86 2.77 4.533-3.031 5.791-9.331 2.77-13.87z"/></svg>', 'Laser therapy', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-03 18:39:51', '2021-10-03 18:39:58', NULL),
	(4, '<svg stroke="currentColor" fill="currentColor" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg"><g><path d="m130 392.58v-17.58c0-30.327-24.673-55-55-55h-20c-13.785 0-25-11.215-25-25s11.215-25 25-25h20c30.327 0 55-24.673 55-55v-25.978c56.349-7.373 100-55.694 100-114.022v-40c0-19.299-15.701-35-35-35h-10c-8.284 0-15 6.716-15 15s6.716 15 15 15h10c2.757 0 5 2.243 5 5v40c0 46.869-38.131 85-85 85s-85-38.131-85-85v-40c0-2.757 2.243-5 5-5h10c8.284 0 15-6.716 15-15s-6.716-15-15-15h-10c-19.299 0-35 15.701-35 35v40c0 58.328 43.651 106.649 100 114.022v25.978c0 13.785-11.215 25-25 25h-20c-30.327 0-55 24.673-55 55s24.673 55 55 55h20c13.785 0 25 11.215 25 25v17.58c-17.459 6.192-30 22.865-30 42.42 0 24.813 20.187 45 45 45s45-20.187 45-45c0-19.555-12.541-36.228-30-42.42zm-15 57.42c-8.271 0-15-6.729-15-15s6.729-15 15-15 15 6.729 15 15-6.729 15-15 15z"/><path d="m498.358 412.884-25.576-2.325c-45.886-4.171-84.481-34.429-99.599-77.606l13.312-37.272c6.84-19.151 3.929-40.51-7.785-57.133-11.715-16.624-30.85-26.548-51.187-26.548h-61.253c-12.442 0-24.645 4.28-34.358 12.053l-44.458 35.566h-30.454c-8.284 0-15 6.716-15 15v58.275c0 21.73 14.103 40.848 35.093 47.571 21.733 6.961 36.336 27.006 36.336 49.879v.69c0 5.061-.819 10.143-2.435 15.106-5.375 16.516-8.45 33.42-9.14 50.244-.167 4.081 1.337 8.055 4.166 11.001 2.829 2.947 6.737 4.613 10.822 4.613h280.158c8.284 0 15-6.716 15-15v-69.178c0-7.756-5.916-14.234-13.642-14.936zm-16.358 69.116h-248.715c1.294-8.905 3.379-17.797 6.235-26.573 2.593-7.967 3.908-16.173 3.908-24.392v-.69c0-35.968-22.981-67.494-57.185-78.449-8.519-2.729-14.243-10.366-14.243-19.001v-43.275h20.714c3.406 0 6.71-1.159 9.371-3.287l48.568-38.854c4.415-3.532 9.96-5.478 15.616-5.478h61.254c10.751 0 20.47 5.04 26.664 13.829 6.193 8.788 7.671 19.636 4.056 29.761l-15.806 44.257c-1.842 5.157-6.283 5.805-8.107 5.844-1.826.047-6.29-.417-8.351-5.491l-15.201-37.416c-3.118-7.676-11.868-11.374-19.543-8.251-7.675 3.117-11.369 11.867-8.251 19.542l15.201 37.416c6.112 15.046 20.59 24.539 36.787 24.194 6.36-.137 12.379-1.771 17.678-4.627 9.229 18.098 22.144 34.103 38.122 47.094 22.717 18.47 50.137 29.634 79.294 32.284l11.934 1.084z"/></g></svg>', 'Annual Checkup', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-03 18:40:25', '2021-10-03 18:40:31', NULL),
	(5, '<svg stroke="currentColor" fill="currentColor" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m496 35.713a4.6 4.6 0 0 0 -4.6 4.6v6.176a2.888 2.888 0 1 1 -5.775 0v-6.177a4.6 4.6 0 0 0 -4.6-4.6h-130.441a4.6 4.6 0 0 0 -4.6 4.6v6.176a2.887 2.887 0 1 1 -5.774 0v-6.176a4.6 4.6 0 0 0 -9.2 0v6.176a12.1 12.1 0 0 0 7.459 11.162l-.121 15.564h-11.648a5.962 5.962 0 0 0 -5.812 4.728l-.757 3.64h47.243l-.76-3.644a5.962 5.962 0 0 0 -5.812-4.724h-13.254l.121-15.543a12.1 12.1 0 0 0 7.516-11.183v-1.576h55.852v385.081h-33.462a4.6 4.6 0 0 0 -4.6 4.6v9.168a10.456 10.456 0 1 0 9.2 0v-4.569h68.876v4.569a10.455 10.455 0 1 0 9.2 0v-9.168a4.6 4.6 0 0 0 -4.6-4.6h-35.414v-385.081h56.188v1.576a12.088 12.088 0 0 0 24.175 0v-6.176a4.6 4.6 0 0 0 -4.6-4.599z"/><path d="m326.153 275.8h-2.928a12.968 12.968 0 0 1 0-25.935h2.626a22.193 22.193 0 0 0 22.167-22.167v-70.969h20.413v-41.586a189.5 189.5 0 0 1 -25.286-1.955 179.258 179.258 0 0 0 -24.07-1.876v45.417h19.742v70.964a12.982 12.982 0 0 1 -12.966 12.968h-2.626a22.167 22.167 0 1 0 0 44.333h2.928a12.982 12.982 0 0 1 12.967 12.967 100.939 100.939 0 0 1 -85.8 99.8l-25.147 3.67c-6.343-15.721-10.827-34.891-4.7-55.763 1.629-5.549 3.821-11.12 6.14-17.018 5.735-14.58 12.232-31.094 13.093-54.384a78.558 78.558 0 0 1 11.21-48.53 4.548 4.548 0 0 1 .58-.7l38.075-37.451a7.393 7.393 0 0 0 2.136-6.207l-.988-7.51a7.361 7.361 0 0 0 -8.9-6.224c-1.238.275-3 .8-4.875 1.358-5.089 1.516-10.854 3.239-15.031 2.836-4.231-.4-8.966-2.985-13.979-5.719-3.452-1.882-7.364-4.015-9.58-4.383-15.959-2.643-32.418 4.752-41.92 18.848-5.722 8.487-15.152 37.352-18.3 47.757-.019.065-.041.131-.063.195a6.258 6.258 0 0 0 5.708 8.342c17.365.434 24.414-16.187 24.707-16.9a4.6 4.6 0 0 1 8.514 3.471c-.373.921-9.141 21.92-31.336 22.62l-83.932 90.377c-20.409 25.213-28.683 48.285-25.295 70.531a4.6 4.6 0 0 1 -5.537 5.183c-17.4-3.859-29.639-11.346-36.369-22.25-4.194-6.8-6.254-14.933-6.171-24.317-3.18 9.908-3.605 19.186-1.252 27.721 4.674 16.956 19.287 28.015 30.722 34.307a42.776 42.776 0 0 0 20.564 5.279h102.606l-2.28-8.146h-22.874a4.6 4.6 0 0 1 -3.729-7.293c7.278-10.077 9.951-19.709 7.945-28.626-3.356-14.915-18.757-23.534-18.912-23.619a4.6 4.6 0 0 1 4.405-8.077c.779.423 19.146 10.6 23.464 29.6a36.053 36.053 0 0 1 .89 7.338l15.219-13.017q.107-.09.216-.174a12.788 12.788 0 0 1 19.228 4.644l22.851 47.37h22.643l-1.906-4.288-10.722-4.171a4.6 4.6 0 0 1 -2.433-2.2l-.741-1.455c-1.655-3.247-3.464-6.8-5.261-10.622l22.667-3.309a110.137 110.137 0 0 0 93.65-108.895 22.192 22.192 0 0 0 -22.167-22.16z"/><path d="m436.132 347.233a4.6 4.6 0 0 0 -4.6 4.6v58.518a4.6 4.6 0 0 0 9.2 0v-58.518a4.6 4.6 0 0 0 -4.6-4.6z"/><path d="m440.732 322.165a4.6 4.6 0 0 0 -9.2 0v8.822a4.6 4.6 0 1 0 9.2 0z"/><path d="m368.431 105.944v-15.163h-49.356v11.333a189.716 189.716 0 0 1 25.286 1.954 178.924 178.924 0 0 0 24.07 1.876z"/></svg>', 'Medication', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-03 18:41:04', '2021-10-03 18:41:26', NULL),
	(6, '<svg stroke="currentColor" fill="currentColor" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g id="048---Herbal-Remedy"><path id="Shape" d="m53.849 23.386c1.563-7.113-.616-14.363-.713-14.681-.1320298-.44285971-.5528835-.73546507-1.014-.705-.537.03-13.222.852-18.935 9.079-.6248159.9239977-1.1541974 1.9090495-1.58 2.94-.532-.008-1.064-.019-1.607-.019-14.543 0-30 3.154-30 9 0 10.495 7.805 19.5 18.829 23.2-1.8836152.5823738-3.0592215 2.4534914-2.7665105 4.4032313.2927109 1.9497399 1.9659242 3.3931693 3.9375105 3.3967687h20c1.9715863-.0035994 3.6447996-1.4470288 3.9375105-3.3967687.292711-1.9497399-.8828953-3.8208575-2.7665105-4.4032313 11.029-3.7 18.829-12.705 18.829-23.2 0-2.179-2.086-4.062-6.151-5.614zm-3.255 7.024c1.4719228.4041668 2.9057101.9361905 4.285 1.59-2.9998757 1.3596111-6.1764793 2.2894309-9.436 2.762 1.9760061-1.1129638 3.7237137-2.5895749 5.151-4.352zm7.406-1.41c-.1119422.7338778-.5322527 1.3849041-1.155 1.789-1.5885327-.8940711-3.2763799-1.5988791-5.029-2.1.6246799-1.0630375 1.1307138-2.1914697 1.509-3.365 2.94 1.15 4.675 2.496 4.675 3.676zm-6.566-18.925c1.425 5.738 1.682 14.113-2 18.61-2.885 4-7.83 6.011-11.513 7-1.078.085-2.148.152-3.2.2 2.243-3.227 3.595-5.174 4.447-6.4.969.019 4.086.077 3.984.077.5522847.0052467 1.0042533-.4382153 1.0095-.9905s-.4382153-1.0042533-.9905-1.0095l-2.634-.051c.4-.576.245-.359 2.185-3.15.969.018 4.093.076 3.99.076.5522847.0055228 1.0044772-.4377153 1.01-.99s-.4377153-1.0044772-.99-1.01l-2.638-.051c.966-1.389 2.232-3.211 3.924-5.643.3156307-.4553588.2023588-1.0803692-.253-1.396-.4553588-.3156307-1.0803693-.2023588-1.396.253l-3.919 5.637-.963-2.437c-.1311165-.3324356-.4296254-.569669-.7830813-.6223367-.353456-.0526676-.7081606.087232-.9305.3670001-.2223395.279768-.2785352.656901-.1474187.9893366l1.451 3.682c-1.843 2.653-1.753 2.526-2.186 3.153l-.964-2.444c-.2026885-.5141771-.7838229-.7666885-1.298-.564s-.7666885.7838229-.564 1.298l1.455 3.687-4.833 6.954c-1.138-5.637-1.127-12.348 2.144-17.078 4.378-6.305 13.796-7.822 16.603-8.147zm-20.645 25.918c-7.26.059-19.176-.8-25.655-3.993 6.32-3.119 17.848-4 24.89-4-.054358 2.6849294.2023515 5.3671235.765 7.993zm-.789-13.993c.3 0 .589.009.885.012-.3640085 1.3046227-.6099985 2.6393276-.735 3.988-7.517 0-20.524.944-26.987 4.794-.62623095-.4043182-1.04952534-1.0572762-1.163-1.794 0-2.923 10.652-7 28-7zm10 32c1.1045695 0 2 .8954305 2 2s-.8954305 2-2 2h-20c-1.1045695 0-2-.8954305-2-2s.8954305-2 2-2zm-10-2c-13.909 0-25.476-8.374-27.634-19.306 6.386 4.537 21.8 5.473 29.623 5.278.809.043 6.277-.311 6.408-.344 5.663-.468 14.625-1.657 19.237-4.935-2.158 10.933-13.725 19.307-27.634 19.307z"/><path id="Shape" d="m16.551 15.106c-.4940187.2485281-.6930281.8504813-.4445 1.3445s.8504813.6930281 1.3445.4445c.182-.095 4.549-2.318 4.549-5.895 0-3.547-4-3.762-4-6 0-2.176 3.213-3.022 3.245-3.03.5357162-.13448134.8609813-.67778379.7265-1.2135-.1344813-.53571621-.6777838-.86098134-1.2135-.7265-.195.048-4.758 1.232-4.758 4.97 0 3.547 4 3.762 4 6 0 1.941-2.489 3.622-3.449 4.106z"/><path id="Shape" d="m27.551 15.106c-.4940187.2485281-.6930281.8504813-.4445 1.3445s.8504813.6930281 1.3445.4445c.182-.095 4.549-2.318 4.549-5.895 0-3.547-4-3.762-4-6 0-2.176 3.213-3.022 3.245-3.03.5357162-.13448134.8609813-.67778379.7265-1.2135-.1344813-.5357162-.6777838-.86098133-1.2135-.7265-.195.048-4.758 1.232-4.758 4.97 0 3.547 4 3.762 4 6 0 1.941-2.489 3.622-3.449 4.106z"/></g></svg>', 'Food Therapy', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-03 18:41:42', '2021-10-03 18:41:48', NULL),
	(10, '<svg stroke="currentColor" fill="currentColor" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g id="048---Herbal-Remedy"><path id="Shape" d="m53.849 23.386c1.563-7.113-.616-14.363-.713-14.681-.1320298-.44285971-.5528835-.73546507-1.014-.705-.537.03-13.222.852-18.935 9.079-.6248159.9239977-1.1541974 1.9090495-1.58 2.94-.532-.008-1.064-.019-1.607-.019-14.543 0-30 3.154-30 9 0 10.495 7.805 19.5 18.829 23.2-1.8836152.5823738-3.0592215 2.4534914-2.7665105 4.4032313.2927109 1.9497399 1.9659242 3.3931693 3.9375105 3.3967687h20c1.9715863-.0035994 3.6447996-1.4470288 3.9375105-3.3967687.292711-1.9497399-.8828953-3.8208575-2.7665105-4.4032313 11.029-3.7 18.829-12.705 18.829-23.2 0-2.179-2.086-4.062-6.151-5.614zm-3.255 7.024c1.4719228.4041668 2.9057101.9361905 4.285 1.59-2.9998757 1.3596111-6.1764793 2.2894309-9.436 2.762 1.9760061-1.1129638 3.7237137-2.5895749 5.151-4.352zm7.406-1.41c-.1119422.7338778-.5322527 1.3849041-1.155 1.789-1.5885327-.8940711-3.2763799-1.5988791-5.029-2.1.6246799-1.0630375 1.1307138-2.1914697 1.509-3.365 2.94 1.15 4.675 2.496 4.675 3.676zm-6.566-18.925c1.425 5.738 1.682 14.113-2 18.61-2.885 4-7.83 6.011-11.513 7-1.078.085-2.148.152-3.2.2 2.243-3.227 3.595-5.174 4.447-6.4.969.019 4.086.077 3.984.077.5522847.0052467 1.0042533-.4382153 1.0095-.9905s-.4382153-1.0042533-.9905-1.0095l-2.634-.051c.4-.576.245-.359 2.185-3.15.969.018 4.093.076 3.99.076.5522847.0055228 1.0044772-.4377153 1.01-.99s-.4377153-1.0044772-.99-1.01l-2.638-.051c.966-1.389 2.232-3.211 3.924-5.643.3156307-.4553588.2023588-1.0803692-.253-1.396-.4553588-.3156307-1.0803693-.2023588-1.396.253l-3.919 5.637-.963-2.437c-.1311165-.3324356-.4296254-.569669-.7830813-.6223367-.353456-.0526676-.7081606.087232-.9305.3670001-.2223395.279768-.2785352.656901-.1474187.9893366l1.451 3.682c-1.843 2.653-1.753 2.526-2.186 3.153l-.964-2.444c-.2026885-.5141771-.7838229-.7666885-1.298-.564s-.7666885.7838229-.564 1.298l1.455 3.687-4.833 6.954c-1.138-5.637-1.127-12.348 2.144-17.078 4.378-6.305 13.796-7.822 16.603-8.147zm-20.645 25.918c-7.26.059-19.176-.8-25.655-3.993 6.32-3.119 17.848-4 24.89-4-.054358 2.6849294.2023515 5.3671235.765 7.993zm-.789-13.993c.3 0 .589.009.885.012-.3640085 1.3046227-.6099985 2.6393276-.735 3.988-7.517 0-20.524.944-26.987 4.794-.62623095-.4043182-1.04952534-1.0572762-1.163-1.794 0-2.923 10.652-7 28-7zm10 32c1.1045695 0 2 .8954305 2 2s-.8954305 2-2 2h-20c-1.1045695 0-2-.8954305-2-2s.8954305-2 2-2zm-10-2c-13.909 0-25.476-8.374-27.634-19.306 6.386 4.537 21.8 5.473 29.623 5.278.809.043 6.277-.311 6.408-.344 5.663-.468 14.625-1.657 19.237-4.935-2.158 10.933-13.725 19.307-27.634 19.307z"/><path id="Shape" d="m16.551 15.106c-.4940187.2485281-.6930281.8504813-.4445 1.3445s.8504813.6930281 1.3445.4445c.182-.095 4.549-2.318 4.549-5.895 0-3.547-4-3.762-4-6 0-2.176 3.213-3.022 3.245-3.03.5357162-.13448134.8609813-.67778379.7265-1.2135-.1344813-.53571621-.6777838-.86098134-1.2135-.7265-.195.048-4.758 1.232-4.758 4.97 0 3.547 4 3.762 4 6 0 1.941-2.489 3.622-3.449 4.106z"/><path id="Shape" d="m27.551 15.106c-.4940187.2485281-.6930281.8504813-.4445 1.3445s.8504813.6930281 1.3445.4445c.182-.095 4.549-2.318 4.549-5.895 0-3.547-4-3.762-4-6 0-2.176 3.213-3.022 3.245-3.03.5357162-.13448134.8609813-.67778379.7265-1.2135-.1344813-.5357162-.6777838-.86098133-1.2135-.7265-.195.048-4.758 1.232-4.758 4.97 0 3.547 4 3.762 4 6 0 1.941-2.489 3.622-3.449 4.106z"/></g></svg>', 'Food Therapy', 'SXQgaXMgYSBsb25nIGVzdGFibGlzaGVkIGZhY3QgdGhhdCBhIHJlYWRlciB3aWxsIGJlIGRpc3RyYWN0ZWQgYnkgdGhlIHJlYWRhYmxlIGNvbnRlbnQgb2YgYSBwYWdlIHdoZW4gbG9va2luZyBhdCBpdHMgbGF5b3V0Lg==', '2021-10-09 19:20:49', '2021-10-09 21:33:11', '2021-10-09 21:33:11');
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

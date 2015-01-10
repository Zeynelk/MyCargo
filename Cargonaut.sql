-- MySQL dump 10.13  Distrib 5.6.20, for Linux (x86_64)
--
-- Host: localhost    Database: cargonaut
-- ------------------------------------------------------
-- Server version	5.6.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

--
-- Table `equipments`
--
DROP TABLE IF EXISTS `equipments`;
CREATE TABLE `equipments` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `type` varchar(45) UNIQUE COLLATE utf8_bin NOT NULL,
  `description` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `languages`
--
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `lang` varchar(5) UNIQUE COLLATE utf8_bin NOT NULL,
  `language` varchar(45) UNIQUE COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `locations`
--
DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `zip_code` int(11) UNIQUE NOT NULL,
  `location` varchar(45) COLLATE utf8_bin NOT NULL,
  `state` varchar(45) COLLATE utf8_bin NOT NULL,
  `country` varchar(45) COLLATE utf8_bin NOT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `offers`
--
DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `vehicle_id` bigint(20) unsigned NOT NULL,
  `drive_date` date NOT NULL,
  `drive_time` time NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `trailer_id` bigint(20) unsigned NOT NULL,
  `available_seat` int(11) NOT NULL,
  `available_weight` int(10) NOT NULL,
  `available_width` int(4) NOT NULL,
  `available_height` int(4) NOT NULL,
  `available_length` int(4) NOT NULL,
  `price_per_person` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `offers_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`id`),
  CONSTRAINT `offers_vehicle_fk` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`),
  CONSTRAINT `offers_trailer_fk` FOREIGN KEY (`trailer_id`) REFERENCES `trailers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `offers_routes`
--
DROP TABLE IF EXISTS `offers_routes`;
CREATE TABLE `offers_routes` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `offer_id` bigint(20) unsigned NOT NULL,
  `location_id` bigint(20) unsigned NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  CONSTRAINT `offers_routes_location_fk` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `offers_routes_offer_fk` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `requests`
--
DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `drive_date` date NOT NULL,
  `drive_time` time NOT NULL,
  `person_number` int(4) NOT NULL,
  `min_seat` int(11) NOT NULL,
  `min_weight` int(10) NOT NULL,
  `min_width` int(4) NOT NULL,
  `min_height` int(4) NOT NULL,
  `min_length` int(4) NOT NULL,
  `note_description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `requests_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `requests_routes`
--
DROP TABLE IF EXISTS `requests_routes`;
CREATE TABLE `requests_routes` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `request_id` bigint(20) unsigned NOT NULL,
  `location_id` bigint(20) unsigned NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  CONSTRAINT `requests_routes_request_fk` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  CONSTRAINT `requests_routes_location_fk` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `searches`
--
DROP TABLE IF EXISTS `searches`;
CREATE TABLE `searches` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `search_query` varchar(100) UNIQUE COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `trailers`
--
DROP TABLE IF EXISTS `trailers`;
CREATE TABLE IF NOT EXISTS `trailers` (
`id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `trailer_label` varchar(255) NOT NULL,
  `max_weight` int(10) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `user_details`
--
DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `user_id` varchar(36) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL,
  `biography` text COLLATE utf8_bin,
  `mobile_number` varchar(20) COLLATE utf8_bin NOT NULL,
  `picture_path` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `drive_count` int(11) NOT NULL DEFAULT '0',
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `smoke` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `user_details_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` varchar(36) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `slug` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `password_salt` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `password_token` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `email_token` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email_token_expires` datetime DEFAULT NULL,
  `tos` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `role` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `BY_USERNAME` (`username`),
  KEY `BY_EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `messages`
--
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT,
  `from_user_id` varchar(36) COLLATE utf8_bin NOT NULL,
  `to_user_id` varchar(36) COLLATE utf8_bin NOT NULL,
  `offer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `request_id` bigint(20) UNSIGNED DEFAULT NULL,
  `topic` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `answer_to` bigint(20) UNSIGNED DEFAULT NULL,
  `unread` boolean NOT NULL DEFAULT TRUE,
  PRIMARY KEY(`id`),
  CONSTRAINT `messages_from_user_fk` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `messages_to_user_fk` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `messages_offer_fk` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`),
  CONSTRAINT `messages_request_fk` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  CONSTRAINT `messages_answer_to_fk` FOREIGN KEY (`answer_to`) REFERENCES `messages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `users_languages`
--
DROP TABLE IF EXISTS `users_languages`;
CREATE TABLE `users_languages` (
  `user_id` bigint(20) unsigned UNIQUE NOT NULL,
  `language_id` bigint(20) unsigned UNIQUE NOT NULL,
  CONSTRAINT `users_languages_language_fk` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  CONSTRAINT `users_languages_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `users_searches`
--
DROP TABLE IF EXISTS `users_searches`;
CREATE TABLE `users_searches` (
  `user_id` bigint(20) unsigned UNIQUE NOT NULL,
  `search_id` bigint(20) unsigned UNIQUE NOT NULL,
  `search_description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  CONSTRAINT `users_searches_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`id`),
  CONSTRAINT `users_searches_search_fk` FOREIGN KEY (`search_id`) REFERENCES `searches` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `users_vehicles`
--
DROP TABLE IF EXISTS `users_vehicles`;
CREATE TABLE `users_vehicles` (
  `user_id` bigint(20) unsigned UNIQUE NOT NULL,
  `vehicle_id` bigint(20) unsigned UNIQUE NOT NULL,
  CONSTRAINT `users_vehicles_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`id`),
  CONSTRAINT `users_vehicles_vehicle_id` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `vehicles`
--
DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` bigint(20) unsigned UNIQUE NOT NULL AUTO_INCREMENT,
  `vehicle_label` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `free_seats` int(10) NOT NULL,
  `max_weight` int(10) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `additional_equipment` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table `vehicles_equipments`
--
DROP TABLE IF EXISTS `vehicles_equipments`;
CREATE TABLE IF NOT EXISTS `vehicles_equipments` (
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  CONSTRAINT `vehicles_equipments_vehicle_fk` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`),
  CONSTRAINT `vehicles_equipments_equipment_fk` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Testdata
--

--
-- Testdata `vehicles`
--
LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
-- INSERT INTO `vehicles` VALUES (1,'PKW','BMW 4er Gran Coupé',NULL,NULL,NULL,5,NULL,NULL,'2014-12-08 13:00:27','2014-12-08 13:00:27'),(2,'PKW','VW Golf 3',NULL,NULL,NULL,5,NULL,NULL,'2014-12-08 13:00:27','2014-12-08 13:00:27'),(3,'PKW','Opel Corsa',NULL,NULL,NULL,4,NULL,NULL,'2014-12-08 13:00:27','2014-12-08 13:00:27'),(5,'PKW','Mercedes CLS',NULL,NULL,NULL,4,NULL,NULL,'2014-12-08 13:00:27','2014-12-08 13:00:27'),(6,'PKW','VW Sharan ',NULL,NULL,NULL,7,NULL,NULL,'2014-12-08 13:00:27','2014-12-08 13:00:27');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `equipments`
--
LOCK TABLES `equipments` WRITE;
/*!40000 ALTER TABLE `equipments` DISABLE KEYS */;
-- INSERT INTO `equipments` (`vehicle_id`, `type`, `description`) VALUES (2,'Klima','Klimaautomatik');
/*!40000 ALTER TABLE `equipments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `users_vehicles`
--
LOCK TABLES `users_vehicles` WRITE;
/*!40000 ALTER TABLE `users_vehicles` DISABLE KEYS */;
-- INSERT INTO `users_vehicles` VALUES (1,1),(1,2),(2,2),(3,3),(4,5),(3,6);
/*!40000 ALTER TABLE `users_vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `users_searches`
--
LOCK TABLES `users_searches` WRITE;
/*!40000 ALTER TABLE `users_searches` DISABLE KEYS */;
-- INSERT INTO `users_searches` VALUES (1,2,'Suchbeschreibung… '),(4,3,'Suche123'),(3,1,NULL);
/*!40000 ALTER TABLE `users_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `users_languages`
--
LOCK TABLES `users_languages` WRITE;
/*!40000 ALTER TABLE `users_languages` DISABLE KEYS */;
-- INSERT INTO `users_languages` VALUES (1,1),(1,2),(1,6),(2,1),(2,2),(2,3),(3,1),(3,8),(4,8),(4,1),(4,2),(4,3),(2,9);
/*!40000 ALTER TABLE `users_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `users`
--
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `user_details`
--
LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `searches`
--
LOCK TABLES `searches` WRITE;
/*!40000 ALTER TABLE `searches` DISABLE KEYS */;
-- INSERT INTO `searches` VALUES (2,'SUCHE 2'),(1,'TEST Suche 1…'),(3,'TESTSUCHE Freitag; von Gießen; nach Frankfurt; um 19:00 Uhr; ');
/*!40000 ALTER TABLE `searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `offers_routes`
--
LOCK TABLES `offers_routes` WRITE;
/*!40000 ALTER TABLE `offers_routes` DISABLE KEYS */;
-- INSERT INTO `offers_routes` VALUES (1,1,3,1),(2,1,1,2),(3,1,5,3),(4,1,6,4),(5,1,7,5),(6,1,18,6),(7,2,1,1),(8,2,7,2);
/*!40000 ALTER TABLE `offers_routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `languages`
--
LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
-- INSERT INTO `languages` VALUES (6,'Chinesisch'),(1,'Deutsch'),(2,'Englisch'),(8,'Französisch'),(5,'Polnisch'),(7,'Rumänisch'),(4,'Russisch'),(9,'Spanisch'),(3,'Türkisch');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `locations`
--
LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
-- INSERT INTO `locations` VALUES (1,35576,'Wetzlar','Hessen','Deutschland',NULL,NULL),(2,60311,'Frankfurt am Main','Hessen','Deutschland',NULL,NULL),(3,35396,'Gießen','Hessen','Deutschland',NULL,NULL),(4,35390,'Gießen','Hessen','Deutschland',NULL,NULL),(5,44135,'Dortmund','Nordrhein Westfalen','Deutschland',NULL,NULL),(6,50667,'Köln','Nordrhein Westfalen','Deutschland',NULL,NULL),(7,40210,'Düsseldorf','Nordrhein Westfalen','Deutschland',NULL,NULL),(8,10115,'Berlin','Berlin','Deutschland',NULL,NULL),(18,20095,'Hamburg','Hamburg','Deutschland',NULL,NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `offers`
--
LOCK TABLES `offers` WRITE;
/*!40000 ALTER TABLE `offers` DISABLE KEYS */;
-- INSERT INTO `offers` VALUES (1,'2014-12-08','19:00:00',4,'Koffer oder Handgepäck',4,1,15,NULL,2,'2014-12-08 12:46:03','2014-12-08 12:44:39'),(2,'2015-01-05','10:00:00',2,'Gewicht (kg) pro Koffer',20,0,20,NULL,5,'2014-12-06 22:43:02','2014-12-08 12:44:39');
/*!40000 ALTER TABLE `offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `requests`
--
LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
-- INSERT INTO `requests` VALUES (1,'2014-12-08','19:00:00',2,'1 Rucksack',NULL,'2014-12-08 12:48:04','2014-12-08 12:46:53'),(2,'2014-12-20','15:00:00',3,'2 Rucksäcke, 2 Koffer',NULL,'2014-12-08 12:48:04','2014-12-08 12:46:53');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `requests_routes`
--
LOCK TABLES `requests_routes` WRITE;
/*!40000 ALTER TABLE `requests_routes` DISABLE KEYS */;
-- INSERT INTO `requests_routes` VALUES (1,1,3,1),(2,1,18,2),(3,2,2,1),(4,2,6,2);
/*!40000 ALTER TABLE `requests_routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Testdata `trailers`
--
LOCK TABLES `trailers` WRITE;
/*!40000 ALTER TABLE `trailers` DISABLE KEYS */;
/*!40000 ALTER TABLE `trailers` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET character_set_client = @saved_cs_client */;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-13 13:25:14

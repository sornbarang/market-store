-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: treeweb_live
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.16.04.1

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

--
-- Table structure for table `advert_categories`
--

DROP TABLE IF EXISTS `advert_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advert_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advert_categories`
--

LOCK TABLES `advert_categories` WRITE;
/*!40000 ALTER TABLE `advert_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `advert_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adverts`
--

DROP TABLE IF EXISTS `adverts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adverts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `advert_category_id` int(10) unsigned NOT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adverts_advert_category_id_foreign` (`advert_category_id`),
  CONSTRAINT `adverts_advert_category_id_foreign` FOREIGN KEY (`advert_category_id`) REFERENCES `advert_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adverts`
--

LOCK TABLES `adverts` WRITE;
/*!40000 ALTER TABLE `adverts` DISABLE KEYS */;
/*!40000 ALTER TABLE `adverts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_lft_index` (`lft`),
  KEY `categories_rgt_index` (`rgt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_ads`
--

DROP TABLE IF EXISTS `categories_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_ads_parent_id_index` (`parent_id`),
  KEY `categories_ads_lft_index` (`lft`),
  KEY `categories_ads_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_ads`
--

LOCK TABLES `categories_ads` WRITE;
/*!40000 ALTER TABLE `categories_ads` DISABLE KEYS */;
INSERT INTO `categories_ads` VALUES (1,NULL,1,6,0,'2018-10-04 15:45:42','2018-10-04 15:49:15'),(2,NULL,7,14,0,'2018-10-04 15:46:08','2018-10-04 15:50:12'),(3,NULL,15,16,0,'2018-10-04 15:46:36','2018-10-04 15:50:12'),(4,NULL,17,26,0,'2018-10-04 15:47:15','2018-10-04 15:52:38'),(5,NULL,27,28,0,'2018-10-04 15:47:43','2018-10-04 15:52:38'),(6,NULL,29,30,0,'2018-10-04 15:48:22','2018-10-04 15:52:38'),(7,NULL,31,40,0,'2018-10-04 15:48:28','2018-10-04 15:54:43'),(8,1,2,3,1,'2018-10-04 15:49:04','2018-10-04 15:49:04'),(9,1,4,5,1,'2018-10-04 15:49:15','2018-10-04 15:49:15'),(10,2,8,9,1,'2018-10-04 15:49:41','2018-10-04 15:49:41'),(11,2,10,11,1,'2018-10-04 15:49:55','2018-10-04 15:49:55'),(12,2,12,13,1,'2018-10-04 15:50:12','2018-10-04 15:50:12'),(13,4,18,19,1,'2018-10-04 15:50:40','2018-10-04 15:50:40'),(14,4,20,21,1,'2018-10-04 15:51:02','2018-10-04 15:51:02'),(15,4,22,23,1,'2018-10-04 15:51:24','2018-10-04 15:51:24'),(16,4,24,25,1,'2018-10-04 15:52:38','2018-10-04 15:52:38'),(17,7,32,33,1,'2018-10-04 15:53:47','2018-10-04 15:53:47'),(18,7,34,35,1,'2018-10-04 15:54:05','2018-10-04 15:54:05'),(19,7,36,37,1,'2018-10-04 15:54:23','2018-10-04 15:54:23'),(20,7,38,39,1,'2018-10-04 15:54:43','2018-10-04 15:54:43');
/*!40000 ALTER TABLE `categories_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_ads_translations`
--

DROP TABLE IF EXISTS `categories_ads_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_ads_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categories_ads_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_ads_translations_categories_ads_id_locale_unique` (`categories_ads_id`,`locale`),
  KEY `categories_ads_translations_locale_index` (`locale`),
  CONSTRAINT `categories_ads_translations_categories_ads_id_foreign` FOREIGN KEY (`categories_ads_id`) REFERENCES `categories_ads` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_ads_translations`
--

LOCK TABLES `categories_ads_translations` WRITE;
/*!40000 ALTER TABLE `categories_ads_translations` DISABLE KEYS */;
INSERT INTO `categories_ads_translations` VALUES (1,1,'en','fashion','fashion'),(2,1,'km','fashion','fashion'),(3,2,'en','technology','technology'),(4,2,'km','technology','technology'),(5,3,'en','real estate','real-estate'),(6,3,'km','real estate','real-estate'),(7,4,'en','vehicle','vehicle'),(8,4,'km','vehicle','vehicle'),(9,5,'en','cosmetic','cosmetic'),(10,5,'km','cusmectic','cusmectic'),(11,6,'en','furniture','furniture'),(12,6,'km','furniture','furniture'),(13,7,'en','other','other'),(14,7,'km','other','other'),(15,8,'en','man','man'),(16,8,'km','man','man'),(17,9,'en','women','women'),(18,9,'km','women','women'),(19,10,'en','computer','computer'),(20,10,'km','computer','computer'),(21,11,'en','digital','digital'),(22,11,'km','digital','digital'),(23,12,'en','phone','phone'),(24,12,'km','phone','phone'),(25,13,'en','car','car'),(26,13,'km','car','car'),(27,14,'en','moto','moto'),(28,14,'km','moto','moto'),(29,15,'en','space part','space-part'),(30,15,'km','space part','space-part'),(31,16,'en','accessory','accessory'),(32,16,'km','accessory','accessory'),(33,17,'en','pet','pet'),(34,17,'km','pet','pet'),(35,18,'en','service','service'),(36,18,'km','service','service'),(37,19,'en','argriculture','argriculture'),(38,19,'km','argriculture','argriculture'),(39,20,'en','food','food'),(40,20,'km','food','food');
/*!40000 ALTER TABLE `categories_ads_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_translations`
--

DROP TABLE IF EXISTS `categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_translations_category_id_locale_unique` (`category_id`,`locale`),
  KEY `categories_translations_locale_index` (`locale`),
  CONSTRAINT `categories_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_translations`
--

LOCK TABLES `categories_translations` WRITE;
/*!40000 ALTER TABLE `categories_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(10) unsigned NOT NULL,
  `session_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `read_at` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chats`
--

LOCK TABLES `chats` WRITE;
/*!40000 ALTER TABLE `chats` DISABLE KEYS */;
INSERT INTO `chats` VALUES (14,7,19,1,NULL,1,'2018-11-12 03:27:04','2018-11-12 03:27:04'),(16,8,19,1,NULL,1,'2018-11-12 19:53:20','2018-11-12 19:53:20'),(52,26,19,1,NULL,1,'2018-11-26 09:02:06','2018-11-26 09:02:06'),(54,27,19,1,NULL,1,'2018-11-26 09:03:19','2018-11-26 09:03:19'),(56,28,19,1,NULL,1,'2018-11-30 20:27:27','2018-11-30 20:27:27'),(58,29,19,1,NULL,1,'2018-11-30 20:29:26','2018-11-30 20:29:26'),(60,30,19,1,NULL,1,'2018-11-30 20:37:02','2018-11-30 20:37:02'),(62,31,19,1,NULL,1,'2018-11-30 20:37:22','2018-11-30 20:37:22'),(64,32,19,1,NULL,1,'2018-11-30 20:37:26','2018-11-30 20:37:26'),(66,33,16,1,NULL,1,'2018-12-01 22:03:49','2018-12-01 22:03:49'),(67,34,17,5,NULL,0,'2018-12-09 09:57:56','2018-12-09 09:57:56'),(68,34,17,6,NULL,1,'2018-12-09 09:57:56','2018-12-09 09:57:56'),(69,35,17,5,NULL,0,'2018-12-09 09:58:01','2018-12-09 09:58:01'),(70,35,17,6,NULL,1,'2018-12-09 09:58:01','2018-12-09 09:58:01'),(72,36,16,1,NULL,1,'2018-12-09 10:00:12','2018-12-09 10:00:12'),(73,37,16,1,'2018-12-09 10:00:21',0,'2018-12-09 10:00:21','2018-12-09 10:00:21'),(76,38,16,1,NULL,1,'2018-12-09 10:00:30','2018-12-09 10:00:30'),(77,39,19,1,'2019-01-16 19:53:17',0,'2019-01-09 10:44:13','2019-01-16 19:53:17'),(78,39,19,8,NULL,1,'2019-01-09 10:44:13','2019-01-09 10:44:13'),(79,40,19,1,'2019-01-16 19:53:17',0,'2019-01-09 10:44:17','2019-01-16 19:53:17'),(80,40,19,8,NULL,1,'2019-01-09 10:44:17','2019-01-09 10:44:17'),(81,41,16,1,'2019-01-10 01:46:54',0,'2019-01-09 10:46:26','2019-01-10 01:46:54'),(82,41,16,5,NULL,1,'2019-01-09 10:46:26','2019-01-09 10:46:26'),(83,42,16,1,'2019-01-10 01:46:54',0,'2019-01-09 10:55:50','2019-01-10 01:46:54'),(84,42,16,5,NULL,1,'2019-01-09 10:55:50','2019-01-09 10:55:50'),(85,43,16,5,'2019-01-15 11:35:46',0,'2019-01-10 01:47:10','2019-01-15 11:35:46'),(86,43,16,1,NULL,1,'2019-01-10 01:47:10','2019-01-10 01:47:10'),(87,44,16,5,'2019-01-15 11:35:46',0,'2019-01-13 00:13:27','2019-01-15 11:35:46'),(88,44,16,1,NULL,1,'2019-01-13 00:13:27','2019-01-13 00:13:27'),(89,45,16,1,'2019-01-23 13:40:52',0,'2019-01-15 11:41:39','2019-01-23 13:40:52'),(90,45,16,5,NULL,1,'2019-01-15 11:41:39','2019-01-15 11:41:39'),(91,46,16,1,'2019-01-23 13:40:53',0,'2019-01-15 11:41:57','2019-01-23 13:40:53'),(92,46,16,5,NULL,1,'2019-01-15 11:41:57','2019-01-15 11:41:57'),(93,47,19,8,'2019-01-22 17:25:59',0,'2019-01-16 19:53:27','2019-01-22 17:25:59'),(94,47,19,1,NULL,1,'2019-01-16 19:53:27','2019-01-16 19:53:27'),(95,48,19,8,'2019-01-22 17:25:59',0,'2019-01-16 19:53:44','2019-01-22 17:25:59'),(96,48,19,1,NULL,1,'2019-01-16 19:53:44','2019-01-16 19:53:44'),(97,49,19,8,'2019-01-22 17:25:59',0,'2019-01-16 19:54:04','2019-01-22 17:25:59'),(98,49,19,1,NULL,1,'2019-01-16 19:54:04','2019-01-16 19:54:04'),(99,50,16,5,'2020-03-07 16:50:10',0,'2019-01-23 13:43:54','2020-03-07 16:50:10'),(100,50,16,1,NULL,1,'2019-01-23 13:43:54','2019-01-23 13:43:54'),(101,51,16,5,'2020-03-07 16:50:10',0,'2019-01-23 13:44:19','2020-03-07 16:50:10'),(102,51,16,1,NULL,1,'2019-01-23 13:44:19','2019-01-23 13:44:19'),(103,52,16,5,'2020-03-07 16:50:10',0,'2019-01-23 13:44:38','2020-03-07 16:50:10'),(104,52,16,1,NULL,1,'2019-01-23 13:44:38','2019-01-23 13:44:38'),(105,53,16,5,'2020-03-07 16:50:10',0,'2019-01-23 13:44:59','2020-03-07 16:50:10'),(106,53,16,1,NULL,1,'2019-01-23 13:44:59','2019-01-23 13:44:59'),(107,54,16,5,'2020-03-07 16:50:10',0,'2019-01-27 01:32:48','2020-03-07 16:50:10'),(108,54,16,1,NULL,1,'2019-01-27 01:32:48','2019-01-27 01:32:48'),(109,55,16,5,'2020-03-07 16:50:10',0,'2019-01-27 13:35:44','2020-03-07 16:50:10'),(110,55,16,1,NULL,1,'2019-01-27 13:35:44','2019-01-27 13:35:44'),(111,56,16,5,'2020-03-07 16:50:10',0,'2019-01-27 13:36:13','2020-03-07 16:50:10'),(112,56,16,1,NULL,1,'2019-01-27 13:36:13','2019-01-27 13:36:13'),(113,57,16,5,'2020-03-07 16:50:10',0,'2019-01-27 13:36:42','2020-03-07 16:50:10'),(114,57,16,1,NULL,1,'2019-01-27 13:36:42','2019-01-27 13:36:42'),(116,58,20,4,NULL,1,'2020-03-04 17:00:39','2020-03-04 17:00:39'),(117,59,20,4,'2020-03-07 15:26:14',0,'2020-03-04 21:47:12','2020-03-07 15:26:14'),(120,60,20,4,NULL,1,'2020-03-07 15:26:19','2020-03-07 15:26:19'),(121,61,20,8,NULL,0,'2020-03-07 15:26:27','2020-03-07 15:26:27'),(122,61,20,4,NULL,1,'2020-03-07 15:26:27','2020-03-07 15:26:27'),(123,62,19,1,'2020-03-25 13:55:40',0,'2020-03-07 16:52:31','2020-03-25 13:55:40'),(124,62,19,8,NULL,1,'2020-03-07 16:52:31','2020-03-07 16:52:31'),(125,63,19,1,'2020-03-25 13:55:40',0,'2020-03-07 16:52:37','2020-03-25 13:55:40'),(126,63,19,8,NULL,1,'2020-03-07 16:52:37','2020-03-07 16:52:37'),(128,64,22,10,NULL,1,'2020-03-25 13:56:17','2020-03-25 13:56:17'),(130,65,22,10,NULL,1,'2020-03-31 19:32:20','2020-03-31 19:32:20');
/*!40000 ALTER TABLE `chats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities_translations`
--

DROP TABLE IF EXISTS `cities_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_translations_city_id_locale_unique` (`city_id`,`locale`),
  KEY `cities_translations_locale_index` (`locale`),
  CONSTRAINT `cities_translations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities_translations`
--

LOCK TABLES `cities_translations` WRITE;
/*!40000 ALTER TABLE `cities_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF',1,'2018-10-12 01:07:54','2018-10-12 01:07:54'),(2,'AL',1,'2018-10-12 01:08:12','2018-10-12 01:08:12'),(3,'DZ',1,'2018-10-12 01:08:31','2018-10-12 01:08:31'),(4,'AS',1,'2018-10-12 01:08:45','2018-10-12 01:08:45'),(5,'AD',1,'2018-10-12 01:09:10','2018-10-12 01:09:10'),(6,'AO',1,'2018-10-12 01:09:21','2018-10-12 01:09:21'),(7,'AI',1,'2018-10-12 01:09:34','2018-10-12 01:09:34'),(8,'AQ',1,'2018-10-12 01:09:48','2018-10-12 01:09:48'),(9,'AG',1,'2018-10-12 01:10:22','2018-10-12 01:10:22'),(10,'AR',1,'2018-10-12 01:10:34','2018-10-12 01:10:34'),(11,'AM',1,'2018-10-12 01:10:46','2018-10-12 01:10:46'),(12,'AW',1,'2018-10-12 01:10:57','2018-10-12 01:10:57'),(13,'AU',1,'2018-10-12 01:11:08','2018-10-12 01:11:08'),(14,'AT',1,'2018-10-12 01:11:20','2018-10-12 01:11:20'),(15,'AZ',1,'2018-10-12 01:11:32','2018-10-12 01:11:32');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country_translations`
--

DROP TABLE IF EXISTS `country_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country_translations_country_id_locale_unique` (`country_id`,`locale`),
  KEY `country_translations_locale_index` (`locale`),
  CONSTRAINT `country_translations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country_translations`
--

LOCK TABLES `country_translations` WRITE;
/*!40000 ALTER TABLE `country_translations` DISABLE KEYS */;
INSERT INTO `country_translations` VALUES (1,1,'Afghanistan','afghanistan','en'),(2,1,'Afghanistan','afghanistan','km'),(3,2,'Albania','albania','en'),(4,2,'Albania','albania','km'),(5,3,'Algeria','algeria','en'),(6,3,'Algeria','algeria','km'),(7,4,'American Samoa','american-samoa','en'),(8,4,'American Samoa','american-samoa','km'),(9,5,'Andorra','andorra','en'),(10,5,'Andorra','andorra','km'),(11,6,'Angola','angola','en'),(12,6,'Angola','angola','km'),(13,7,'Anguilla','anguilla','en'),(14,7,'Anguilla','anguilla','km'),(15,8,'Antarctica','antarctica','en'),(16,8,'Antarctica','antarctica','km'),(17,9,'Antigua and Barbuda','antigua-and-barbuda','en'),(18,9,'Antigua and Barbuda','antigua-and-barbuda','km'),(19,10,'Argentina','argentina','en'),(20,10,'Argentina','argentina','km'),(21,11,'Armenia','armenia','en'),(22,11,'Armenia','armenia','km'),(23,12,'Aruba','aruba','en'),(24,12,'Aruba','aruba','km'),(25,13,'Australia','australia','en'),(26,13,'Australia','australia','km'),(27,14,'Austria','austria','en'),(28,14,'Austria','austria','km'),(29,15,'Azerbaijan','azerbaijan','en'),(30,15,'Azerbaijan','azerbaijan','km');
/*!40000 ALTER TABLE `country_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `follower_id` int(10) unsigned NOT NULL,
  `leader_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `followers_follower_id_foreign` (`follower_id`),
  KEY `followers_leader_id_foreign` (`leader_id`),
  CONSTRAINT `followers_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `followers_leader_id_foreign` FOREIGN KEY (`leader_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `followers`
--

LOCK TABLES `followers` WRITE;
/*!40000 ALTER TABLE `followers` DISABLE KEYS */;
INSERT INTO `followers` VALUES (1,5,1,'2018-11-01 14:13:44','2018-11-01 14:13:44'),(2,8,1,'2018-11-06 05:22:28','2018-11-06 05:22:28'),(3,10,1,'2018-12-18 08:41:31','2018-12-18 08:41:31'),(4,4,8,'2020-03-03 23:12:40','2020-03-03 23:12:40'),(5,10,8,'2020-03-22 09:28:12','2020-03-22 09:28:12'),(6,11,1,'2020-05-04 18:34:37','2020-05-04 18:34:37');
/*!40000 ALTER TABLE `followers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'App\\Models\\ProductsAds',1,'default','fashion-2766687_960_720','fashion-2766687_960_720.jpg','image/jpeg','public',69705,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',1,'2018-10-04 17:02:37','2018-10-04 17:02:37'),(2,'App\\Models\\ProductsAds',1,'default','fashion-2766686_960_720','fashion-2766686_960_720.jpg','image/jpeg','public',75226,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',2,'2018-10-04 17:02:37','2018-10-04 17:02:37'),(3,'App\\Models\\ProductsAds',1,'default','fashion-2825642_960_720','fashion-2825642_960_720.jpg','image/jpeg','public',239570,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',3,'2018-10-04 17:02:38','2018-10-04 17:02:38'),(4,'App\\Models\\ProductsAds',1,'default','fashion-2766725_960_720','fashion-2766725_960_720.jpg','image/jpeg','public',74138,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',4,'2018-10-04 17:02:38','2018-10-04 17:02:38'),(5,'App\\Models\\ProductsAds',2,'default','people-2594683_960_720','people-2594683_960_720.jpg','image/jpeg','public',116540,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',5,'2018-10-04 17:05:35','2018-10-04 17:05:35'),(6,'App\\Models\\ProductsAds',2,'default','girl-2122909_960_720','girl-2122909_960_720.jpg','image/jpeg','public',111670,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',6,'2018-10-04 17:05:35','2018-10-04 17:05:35'),(7,'App\\Models\\ProductsAds',2,'default','girl-1990347_960_720','girl-1990347_960_720.jpg','image/jpeg','public',134902,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',7,'2018-10-04 17:05:36','2018-10-04 17:05:36'),(8,'App\\Models\\ProductsAds',2,'default','young-690958_960_720','young-690958_960_720.jpg','image/jpeg','public',143149,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',8,'2018-10-04 17:05:36','2018-10-04 17:05:36'),(9,'App\\Models\\ProductsAds',4,'default','08c07749a2b50fdf1e6951edee00fdbe477267f0','08c07749a2b50fdf1e6951edee00fdbe477267f0.jpg','image/jpeg','public',111333,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',9,'2018-10-14 06:39:31','2018-10-14 06:39:31'),(10,'App\\Models\\ProductsAds',4,'default','13205d0d8013c4c5d448dda771e7578a92eb690e','13205d0d8013c4c5d448dda771e7578a92eb690e.jpg','image/jpeg','public',106451,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',10,'2018-10-14 06:39:31','2018-10-14 06:39:31'),(11,'App\\Models\\ProductsAds',4,'default','08c07749a2b50fdf1e6951edee00fdbe477267f0 (1)','08c07749a2b50fdf1e6951edee00fdbe477267f0-(1).jpg','image/jpeg','public',111333,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',11,'2018-10-14 06:39:31','2018-10-14 06:39:32'),(12,'App\\Models\\ProductsAds',4,'default','fde748262d553b76075c43108a40f2f41c1f843a','fde748262d553b76075c43108a40f2f41c1f843a.jpg','image/jpeg','public',102396,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',12,'2018-10-14 06:39:32','2018-10-14 06:39:32'),(13,'App\\Models\\ProductsAds',5,'default','Dream-EX5','dream-ex5.png','image/png','public',81670,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',13,'2018-10-15 02:25:21','2018-10-15 02:25:21'),(14,'App\\Models\\Profile',1,'default','31924514_368143810341412_3756425770570874880_n','31924514_368143810341412_3756425770570874880_n.jpg','image/jpeg','public',62702,'[]','{\"custom_headers\": []}','[]',14,'2018-10-18 08:36:41','2018-10-18 08:36:41'),(15,'App\\Models\\ProductsAds',12,'default','home-for-sale-sign','home-for-sale-sign.jpg','image/jpeg','public',154961,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',15,'2018-10-31 15:49:03','2018-10-31 15:49:04'),(16,'App\\Models\\ProductsAds',12,'default','35896987-home-for-sale-real-estate-sign-in-front-of-beautiful-new-house-','35896987-home-for-sale-real-estate-sign-in-front-of-beautiful-new-house-.jpg','image/jpeg','public',19743,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',16,'2018-10-31 15:49:04','2018-10-31 15:49:04'),(18,'App\\Models\\ProductsAds',14,'default','home-for-sale-sign','home-for-sale-sign.jpg','image/jpeg','public',154961,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',17,'2018-11-11 04:00:29','2018-11-11 04:00:29'),(19,'App\\Models\\Profile',4,'default','download','download.jpg','image/jpeg','public',7353,'[]','{\"custom_headers\": []}','[]',18,'2018-11-11 14:20:03','2018-11-11 14:20:03'),(20,'App\\Models\\Message',15,'default','question-mark','question-mark.jpg','image/jpeg','public',57624,'[]','{\"custom_headers\": []}','[]',19,'2018-11-16 16:30:50','2018-11-16 16:30:50'),(21,'App\\Models\\Message',21,'default','000f6ef20ac9bb9b9eb4cdb0ebf61891','000f6ef20ac9bb9b9eb4cdb0ebf61891.png','image/png','public',231587,'[]','{\"custom_headers\": []}','[]',20,'2018-11-25 22:59:08','2018-11-25 22:59:08'),(22,'App\\Models\\Message',35,'default','iphone-2868621_960_720','iphone-2868621_960_720.jpg','image/jpeg','public',56455,'[]','{\"custom_headers\": []}','[]',21,'2018-12-09 09:58:01','2018-12-09 09:58:01'),(23,'App\\Models\\Message',38,'default','iphone-2868621_960_720','iphone-2868621_960_720.jpg','image/jpeg','public',56455,'[]','{\"custom_headers\": []}','[]',22,'2018-12-09 10:00:30','2018-12-09 10:00:30'),(24,'App\\Models\\ProductsAds',16,'default','41954979_2142676412612705_4906792237788037120_n','41954979_2142676412612705_4906792237788037120_n.jpg','image/jpeg','public',8347,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',23,'2019-01-01 07:54:12','2019-01-01 07:54:12'),(25,'App\\Models\\ProductsAds',16,'default','41938949_1508863849258073_3422852892099346432_n','41938949_1508863849258073_3422852892099346432_n.jpg','image/jpeg','public',10325,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',24,'2019-01-01 07:54:12','2019-01-01 07:54:13'),(26,'App\\Models\\Message',45,'default','Doesnt appear','doesnt-appear.jpg','image/jpeg','public',234061,'[]','{\"custom_headers\": []}','[]',25,'2019-01-15 11:41:39','2019-01-15 11:41:39'),(27,'App\\Models\\Message',54,'chats','iphone-676767_960_720','iphone-676767_960_720.jpg','image/jpeg','public',87535,'[]','{\"custom_headers\": []}','[]',26,'2019-01-27 01:32:48','2019-01-27 01:32:48'),(28,'App\\Models\\Message',55,'chats','my-galaxy-j4-j400-sm-j400fzkdxme-102525053','my-galaxy-j4-j400-sm-j400fzkdxme-102525053.webp','image/webp','public',8196,'[]','{\"custom_headers\": []}','[]',27,'2019-01-27 13:35:44','2019-01-27 13:35:44'),(29,'App\\Models\\Message',55,'chats','Screenshot from 2018-12-17 21-53-42','screenshot-from-2018-12-17-21-53-42.png','image/png','public',288199,'[]','{\"custom_headers\": []}','[]',28,'2019-01-27 13:35:44','2019-01-27 13:35:44'),(30,'App\\Models\\Message',56,'chats','my-galaxy-j4-j400-sm-j400fzkdxme-102525053','my-galaxy-j4-j400-sm-j400fzkdxme-102525053.webp','image/webp','public',8196,'[]','{\"custom_headers\": []}','[]',29,'2019-01-27 13:36:13','2019-01-27 13:36:13'),(31,'App\\Models\\Message',56,'chats','Screenshot from 2018-12-17 21-53-42','screenshot-from-2018-12-17-21-53-42.png','image/png','public',288199,'[]','{\"custom_headers\": []}','[]',30,'2019-01-27 13:36:13','2019-01-27 13:36:13'),(32,'App\\Models\\Message',57,'chats','my-galaxy-j4-j400-sm-j400fzkdxme-102525053','my-galaxy-j4-j400-sm-j400fzkdxme-102525053.webp','image/webp','public',8196,'[]','{\"custom_headers\": []}','[]',31,'2019-01-27 13:36:42','2019-01-27 13:36:42'),(33,'App\\Models\\Message',57,'chats','Screenshot from 2018-12-17 21-53-42','screenshot-from-2018-12-17-21-53-42.png','image/png','public',288199,'[]','{\"custom_headers\": []}','[]',32,'2019-01-27 13:36:42','2019-01-27 13:36:42'),(34,'App\\Models\\ProductsAds',17,'default','4700738935_1768838399','4700738935_1768838399.jpg','image/jpeg','public',211328,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',33,'2019-02-11 20:13:34','2019-02-11 20:13:34'),(35,'App\\Models\\ProductsAds',17,'default','201711161104194c6d4a7c-d4e1-4bbf-a51c-25ec15bb495a','201711161104194c6d4a7c-d4e1-4bbf-a51c-25ec15bb495a.jpg','image/jpeg','public',127152,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',34,'2019-02-11 20:13:34','2019-02-11 20:13:34'),(36,'App\\Models\\ProductsAds',17,'default','4703310723_1768838399','4703310723_1768838399.jpg','image/jpeg','public',159235,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',35,'2019-02-11 20:13:34','2019-02-11 20:13:34'),(37,'App\\Models\\ProductsAds',18,'default','20180726030959f41f4c61-e786-48b7-acdf-2e6ac89dbf67','20180726030959f41f4c61-e786-48b7-acdf-2e6ac89dbf67.jpg','image/jpeg','public',201817,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',36,'2019-02-11 20:18:29','2019-02-11 20:18:29'),(38,'App\\Models\\ProductsAds',18,'default','20180726031018d6907756-b313-4464-831d-699675a70ee3','20180726031018d6907756-b313-4464-831d-699675a70ee3.jpg','image/jpeg','public',188777,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',37,'2019-02-11 20:18:29','2019-02-11 20:18:29'),(39,'App\\Models\\ProductsAds',18,'default','2018072603100597e48955-37a9-4a36-8dce-3e3feb5f11f4','2018072603100597e48955-37a9-4a36-8dce-3e3feb5f11f4.jpg','image/jpeg','public',194510,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',38,'2019-02-11 20:18:29','2019-02-11 20:18:30'),(40,'App\\Models\\ProductsAds',19,'default','Men-s-wedding-dress-solid-color-Slim-3-piece-set-fashion-business-casual-suit-jacket-wedding.jpg_50x50 (1)','men-s-wedding-dress-solid-color-slim-3-piece-set-fashion-business-casual-suit-jacket-wedding.jpg_50x50-(1).jpg','image/jpeg','public',2913,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',39,'2019-02-11 20:26:26','2019-02-11 20:26:26'),(41,'App\\Models\\ProductsAds',26,'default','1','1.jpg','image/jpeg','public',16517,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',40,'2019-02-11 21:10:59','2019-02-11 21:10:59'),(42,'App\\Models\\ProductsAds',26,'default','download (1)','download-(1).jpg','image/jpeg','public',19807,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',41,'2019-02-11 21:10:59','2019-02-11 21:11:00'),(43,'App\\Models\\ProductsAds',26,'default','download (2)','download-(2).jpg','image/jpeg','public',16198,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',42,'2019-02-11 21:11:00','2019-02-11 21:11:00'),(44,'App\\Models\\ProductsAds',26,'default','download','download.jpg','image/jpeg','public',8000,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',43,'2019-02-11 21:11:00','2019-02-11 21:11:00'),(45,'App\\Models\\ProductsAds',27,'default','4','4.jpg','image/jpeg','public',15260,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',44,'2019-02-11 21:15:52','2019-02-11 21:15:52'),(46,'App\\Models\\ProductsAds',27,'default','2','2.jpg','image/jpeg','public',5406,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',45,'2019-02-11 21:15:52','2019-02-11 21:15:53'),(47,'App\\Models\\ProductsAds',27,'default','3','3.jpg','image/jpeg','public',5595,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',46,'2019-02-11 21:15:53','2019-02-11 21:15:53'),(48,'App\\Models\\ProductsAds',27,'default','1','1.jpg','image/jpeg','public',12635,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',47,'2019-02-11 21:15:53','2019-02-11 21:15:53'),(49,'App\\Models\\ProductsAds',28,'default','1','1.jpg','image/jpeg','public',12947,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',48,'2019-02-11 21:20:21','2019-02-11 21:20:21'),(50,'App\\Models\\ProductsAds',28,'default','2','2.jpg','image/jpeg','public',17403,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',49,'2019-02-11 21:20:22','2019-02-11 21:20:22'),(51,'App\\Models\\ProductsAds',28,'default','3','3.jpg','image/jpeg','public',11968,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',50,'2019-02-11 21:20:22','2019-02-11 21:20:22'),(52,'App\\Models\\ProductsAds',29,'default','1','1.jpg','image/jpeg','public',11109,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',51,'2019-02-11 21:25:33','2019-02-11 21:25:34'),(53,'App\\Models\\ProductsAds',29,'default','2','2.jpg','image/jpeg','public',8591,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',52,'2019-02-11 21:25:34','2019-02-11 21:25:34'),(54,'App\\Models\\ProductsAds',29,'default','3','3.jpg','image/jpeg','public',7354,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',53,'2019-02-11 21:25:34','2019-02-11 21:25:34'),(55,'App\\Models\\ProductsAds',29,'default','4','4.jpg','image/jpeg','public',20162,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',54,'2019-02-11 21:25:34','2019-02-11 21:25:34'),(56,'App\\Models\\ProductsAds',30,'default','1','1.jpg','image/jpeg','public',21874,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',55,'2019-02-11 21:33:52','2019-02-11 21:33:52'),(57,'App\\Models\\ProductsAds',30,'default','2','2.jpg','image/jpeg','public',19141,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',56,'2019-02-11 21:33:53','2019-02-11 21:33:53'),(58,'App\\Models\\ProductsAds',30,'default','3','3.jpg','image/jpeg','public',19659,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',57,'2019-02-11 21:33:53','2019-02-11 21:33:53'),(59,'App\\Models\\ProductsAds',30,'default','4','4.jpg','image/jpeg','public',12482,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',58,'2019-02-11 21:33:53','2019-02-11 21:33:54'),(60,'App\\Models\\ProductsAds',31,'default','1','1.jpg','image/jpeg','public',19311,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',59,'2019-02-11 21:39:06','2019-02-11 21:39:06'),(61,'App\\Models\\ProductsAds',31,'default','2','2.jpg','image/jpeg','public',22504,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',60,'2019-02-11 21:39:06','2019-02-11 21:39:06'),(62,'App\\Models\\ProductsAds',31,'default','3','3.jpg','image/jpeg','public',28499,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',61,'2019-02-11 21:39:06','2019-02-11 21:39:06'),(63,'App\\Models\\ProductsAds',31,'default','4','4.jpg','image/jpeg','public',25920,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',62,'2019-02-11 21:39:07','2019-02-11 21:39:07'),(64,'App\\Models\\ProductsAds',32,'default','1','1.jpg','image/jpeg','public',19518,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',63,'2019-02-11 21:45:17','2019-02-11 21:45:17'),(65,'App\\Models\\ProductsAds',32,'default','2','2.jpg','image/jpeg','public',24300,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',64,'2019-02-11 21:45:18','2019-02-11 21:45:18'),(66,'App\\Models\\ProductsAds',32,'default','3','3.jpg','image/jpeg','public',15672,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',65,'2019-02-11 21:45:18','2019-02-11 21:45:18'),(67,'App\\Models\\ProductsAds',33,'default','1','1.jpg','image/jpeg','public',16416,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',66,'2019-02-11 21:51:38','2019-02-11 21:51:38'),(68,'App\\Models\\ProductsAds',33,'default','2','2.jpg','image/jpeg','public',20677,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',67,'2019-02-11 21:51:38','2019-02-11 21:51:38'),(69,'App\\Models\\ProductsAds',33,'default','23','23.jpg','image/jpeg','public',17705,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',68,'2019-02-11 21:51:39','2019-02-11 21:51:39'),(70,'App\\Models\\ProductsAds',33,'default','43','43.jpg','image/jpeg','public',19153,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',69,'2019-02-11 21:51:39','2019-02-11 21:51:39'),(71,'App\\Models\\ProductsAds',34,'default','house-villa-jasmin','house-villa-jasmin.jpg','image/jpeg','public',53071,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',70,'2019-02-11 21:57:20','2019-02-11 21:57:20'),(72,'App\\Models\\ProductsAds',34,'default','Villa-Rd-House','villa-rd-house.jpg','image/jpeg','public',54204,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',71,'2019-02-11 21:57:21','2019-02-11 21:57:21'),(73,'App\\Models\\ProductsAds',35,'default','post-5','post-5.jpg','image/jpeg','public',652143,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',72,'2019-02-11 22:00:21','2019-02-11 22:00:22'),(74,'App\\Models\\ProductsAds',35,'default','20170208112951_511080_749001','20170208112951_511080_749001.jpg','image/jpeg','public',335344,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',73,'2019-02-11 22:00:22','2019-02-11 22:00:22'),(75,'App\\Models\\ProductsAds',37,'default','6df238ab-a2d6-4af6-beaf-021ef561a655.c10','6df238ab-a2d6-4af6-beaf-021ef561a655.c10.jpg','image/jpeg','public',84557,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',74,'2019-02-11 22:05:30','2019-02-11 22:05:30'),(76,'App\\Models\\ProductsAds',37,'default','setapak-anticipated-hottest-project-pv18-sale-shopree-1803-13-shopree@1','setapak-anticipated-hottest-project-pv18-sale-shopree-1803-13-shopree@1.jpg','image/jpeg','public',393649,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',75,'2019-02-11 22:05:30','2019-02-11 22:05:30'),(77,'App\\Models\\ProductsAds',38,'default','1','1.jpg','image/jpeg','public',22049,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',76,'2019-02-11 22:08:09','2019-02-11 22:08:09'),(78,'App\\Models\\ProductsAds',38,'default','2','2.jpg','image/jpeg','public',17693,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',77,'2019-02-11 22:08:10','2019-02-11 22:08:10'),(79,'App\\Models\\ProductsAds',39,'default','1','1.jpg','image/jpeg','public',120042,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',78,'2019-02-11 22:13:05','2019-02-11 22:13:05'),(80,'App\\Models\\ProductsAds',39,'default','2','2.jpg','image/jpeg','public',20474,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',79,'2019-02-11 22:13:05','2019-02-11 22:13:05'),(81,'App\\Models\\ProductsAds',39,'default','3-bedroom-condo-for-rent-in-quezon-city-metro-manila','3-bedroom-condo-for-rent-in-quezon-city-metro-manila.jpg','image/jpeg','public',38279,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',80,'2019-02-11 22:13:05','2019-02-11 22:13:06'),(82,'App\\Models\\ProductsAds',40,'default','01','01.png','image/png','public',283499,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',81,'2019-02-11 22:17:22','2019-02-11 22:17:22'),(83,'App\\Models\\ProductsAds',40,'default','1','1.jpg','image/jpeg','public',15267,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',82,'2019-02-11 22:17:22','2019-02-11 22:17:22'),(84,'App\\Models\\ProductsAds',40,'default','166676125af1423971ed8670254223_0_0','166676125af1423971ed8670254223_0_0.jpg','image/jpeg','public',40024,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',83,'2019-02-11 22:17:22','2019-02-11 22:17:22'),(85,'App\\Models\\ProductsAds',40,'default','Mazda-BT50-XT-DualCabUtility-2016-1-(3)','mazda-bt50-xt-dualcabutility-2016-1-(3).jpg','image/jpeg','public',58567,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',84,'2019-02-11 22:17:22','2019-02-11 22:17:23'),(86,'App\\Models\\ProductsAds',41,'default','hypermotard_sc_project_ducati_exhaust','hypermotard_sc_project_ducati_exhaust.jpeg','image/jpeg','public',251021,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',85,'2019-02-11 22:23:39','2019-02-11 22:23:39'),(87,'App\\Models\\ProductsAds',41,'default','1','1.jpg','image/jpeg','public',22963,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',86,'2019-02-11 22:23:39','2019-02-11 22:23:39'),(88,'App\\Models\\ProductsAds',41,'default','images1','images1.jpg','image/jpeg','public',21668,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',87,'2019-02-11 22:23:40','2019-02-11 22:23:40'),(89,'App\\Models\\ProductsAds',41,'default','2','2.jpg','image/jpeg','public',31977,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',88,'2019-02-11 22:23:40','2019-02-11 22:23:40'),(90,'App\\Models\\ProductsAds',42,'default','motor-turbocharger-part-GT1749V-for-MITSUBISHI-Carisma-Space-Star-1-9L-F9Q-MW30623801-708639-5010S-708639.jpg_640x640','motor-turbocharger-part-gt1749v-for-mitsubishi-carisma-space-star-1-9l-f9q-mw30623801-708639-5010s-708639.jpg_640x640.jpg','image/jpeg','public',73731,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',89,'2019-02-11 22:29:13','2019-02-11 22:29:13'),(91,'App\\Models\\ProductsAds',42,'default','Turbocharger-GT1749V-708639-7701472775-7701473526-8602254-8200110519-for-Renault-F9Q','turbocharger-gt1749v-708639-7701472775-7701473526-8602254-8200110519-for-renault-f9q.jpg','image/jpeg','public',28333,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',90,'2019-02-11 22:29:13','2019-02-11 22:29:13'),(92,'App\\Models\\ProductsAds',43,'default','Car-interior-whole-Carbon-fiber-sticker-11sets-for-vw-Jetta-MK6-Accessories-Left-hand-drive-2012','car-interior-whole-carbon-fiber-sticker-11sets-for-vw-jetta-mk6-accessories-left-hand-drive-2012.jpg','image/jpeg','public',223176,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',91,'2019-02-11 22:33:45','2019-02-11 22:33:45'),(93,'App\\Models\\ProductsAds',43,'default','1','1.jpg','image/jpeg','public',16647,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',92,'2019-02-11 22:33:45','2019-02-11 22:33:45'),(94,'App\\Models\\ProductsAds',44,'default','1','1.jpg','image/jpeg','public',19868,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',93,'2019-02-11 22:37:05','2019-02-11 22:37:05'),(95,'App\\Models\\ProductsAds',44,'default','2','2.jpg','image/jpeg','public',39342,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',94,'2019-02-11 22:37:05','2019-02-11 22:37:05'),(96,'App\\Models\\ProductsAds',44,'default','166676125af1423971ed8670254223_0_0','166676125af1423971ed8670254223_0_0.jpg','image/jpeg','public',34077,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',95,'2019-02-11 22:37:05','2019-02-11 22:37:05'),(97,'App\\Models\\ProductsAds',45,'default','1','1.jpg','image/jpeg','public',119424,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',96,'2019-02-11 22:41:10','2019-02-11 22:41:10'),(98,'App\\Models\\ProductsAds',45,'default','2','2.jpg','image/jpeg','public',19614,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',97,'2019-02-11 22:41:10','2019-02-11 22:41:10'),(99,'App\\Models\\ProductsAds',45,'default','166676125af1423971ed8670254223_0_0','166676125af1423971ed8670254223_0_0.jpg','image/jpeg','public',29425,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',98,'2019-02-11 22:41:10','2019-02-11 22:41:11'),(100,'App\\Models\\ProductsAds',45,'default','HTB14Ed4dgnH8KJjSspcq6z3QFXa8','htb14ed4dgnh8kjjsspcq6z3qfxa8.jpg','image/jpeg','public',295663,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',99,'2019-02-11 22:41:11','2019-02-11 22:41:11'),(101,'App\\Models\\ProductsAds',46,'default','1','1.jpg','image/jpeg','public',12396,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',100,'2019-02-11 22:57:46','2019-02-11 22:57:46'),(102,'App\\Models\\ProductsAds',46,'default','31CiWh66GLL._SY355_','31ciwh66gll._sy355_.jpg','image/jpeg','public',8180,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',101,'2019-02-11 22:57:46','2019-02-11 22:57:46'),(103,'App\\Models\\ProductsAds',46,'default','HTB1qAGbdgmTBuNjy1Xbq6yMrVXaS','htb1qagbdgmtbunjy1xbq6ymrvxas.jpg','image/jpeg','public',119202,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',102,'2019-02-11 22:57:47','2019-02-11 22:57:47'),(104,'App\\Models\\ProductsAds',47,'default','1','1.jpg','image/jpeg','public',19329,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',103,'2019-02-11 23:00:39','2019-02-11 23:00:39'),(105,'App\\Models\\ProductsAds',47,'default','31CiWh66GLL._SY355_','31ciwh66gll._sy355_.jpg','image/jpeg','public',55754,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',104,'2019-02-11 23:00:39','2019-02-11 23:00:39'),(106,'App\\Models\\ProductsAds',47,'default','1','1.jpg','image/jpeg','public',19329,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',105,'2019-02-11 23:00:40','2019-02-11 23:00:40'),(107,'App\\Models\\ProductsAds',48,'default','1','1.jpg','image/jpeg','public',17173,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',106,'2019-02-11 23:16:43','2019-02-11 23:16:43'),(108,'App\\Models\\ProductsAds',48,'default','2','2.jpg','image/jpeg','public',14680,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',107,'2019-02-11 23:16:44','2019-02-11 23:16:44'),(109,'App\\Models\\ProductsAds',48,'default','3','3.jpg','image/jpeg','public',10118,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',108,'2019-02-11 23:16:44','2019-02-11 23:16:44'),(110,'App\\Models\\ProductsAds',49,'default','1','1.jpg','image/jpeg','public',90440,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',109,'2019-02-11 23:19:00','2019-02-11 23:19:00'),(111,'App\\Models\\ProductsAds',49,'default','2','2.jpg','image/jpeg','public',38362,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',110,'2019-02-11 23:19:00','2019-02-11 23:19:00'),(112,'App\\Models\\ProductsAds',49,'default','3','3.jpg','image/jpeg','public',21426,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',111,'2019-02-11 23:19:01','2019-02-11 23:19:01'),(113,'App\\Models\\ProductsAds',50,'default','20ml-LANBENA-Fast-Powerful-Hair-Growth-Essence-Products-Essential-Oil-Liquid-Treatment-Preventing-Hair-Loss-Hair.jpg_640x640','20ml-lanbena-fast-powerful-hair-growth-essence-products-essential-oil-liquid-treatment-preventing-hair-loss-hair.jpg_640x640.jpg','image/jpeg','public',18548,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',112,'2019-02-11 23:25:08','2019-02-11 23:25:08'),(114,'App\\Models\\ProductsAds',50,'default','LANBENA-Hair-Growth-Essence-Hair-Growth-Products-Essential-Oil-Liquid-Treatment-Preventing-Hair-Loss-Hair-Care.jpg_640x640','lanbena-hair-growth-essence-hair-growth-products-essential-oil-liquid-treatment-preventing-hair-loss-hair-care.jpg_640x640.jpg','image/jpeg','public',144772,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',113,'2019-02-11 23:25:08','2019-02-11 23:25:08'),(115,'App\\Models\\ProductsAds',50,'default','wer_394x','wer_394x.jpg','image/jpeg','public',24456,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',114,'2019-02-11 23:25:08','2019-02-11 23:25:08'),(116,'App\\Models\\ProductsAds',51,'default','1','1.jpg','image/jpeg','public',14169,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',115,'2019-02-11 23:30:49','2019-02-11 23:30:49'),(117,'App\\Models\\ProductsAds',51,'default','HTB15kQORFXXXXa7XpXXq6xXFXXXy','htb15kqorfxxxxa7xpxxq6xxfxxxy.jpg','image/jpeg','public',147522,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',116,'2019-02-11 23:30:49','2019-02-11 23:30:49'),(118,'App\\Models\\ProductsAds',51,'default','2','2.jpg','image/jpeg','public',17924,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',117,'2019-02-11 23:30:49','2019-02-11 23:30:50'),(119,'App\\Models\\ProductsAds',52,'default','1','1.jpg','image/jpeg','public',16782,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',118,'2019-02-11 23:34:40','2019-02-11 23:34:40'),(120,'App\\Models\\ProductsAds',52,'default','12','12.jpg','image/jpeg','public',20066,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',119,'2019-02-11 23:34:40','2019-02-11 23:34:40'),(121,'App\\Models\\ProductsAds',52,'default','869184480.g_400-w_g','869184480.g_400-w_g.jpg','image/jpeg','public',65369,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',120,'2019-02-11 23:34:41','2019-02-11 23:34:41'),(122,'App\\Models\\ProductsAds',53,'default','1','1.jpg','image/jpeg','public',22637,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',121,'2019-02-11 23:37:34','2019-02-11 23:37:35'),(123,'App\\Models\\ProductsAds',53,'default','12','12.jpg','image/jpeg','public',13171,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',122,'2019-02-11 23:37:35','2019-02-11 23:37:35'),(124,'App\\Models\\ProductsAds',54,'default','1','1.jpg','image/jpeg','public',7555,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',123,'2019-02-11 23:40:31','2019-02-11 23:40:31'),(125,'App\\Models\\ProductsAds',54,'default','2','2.jpg','image/jpeg','public',18266,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',124,'2019-02-11 23:40:31','2019-02-11 23:40:31'),(126,'App\\Models\\ProductsAds',54,'default','post-modern-real-genuine-leather-bed-soft-bed-double-bed-king-queen-size-bedroom-home-furniture.jpg_640x640','post-modern-real-genuine-leather-bed-soft-bed-double-bed-king-queen-size-bedroom-home-furniture.jpg_640x640.jpg','image/jpeg','public',94074,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',125,'2019-02-11 23:40:31','2019-02-11 23:40:31'),(127,'App\\Models\\ProductsAds',55,'default','1','1.jpg','image/jpeg','public',31722,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',126,'2019-02-11 23:43:15','2019-02-11 23:43:15'),(128,'App\\Models\\ProductsAds',55,'default','2','2.jpg','image/jpeg','public',30144,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',127,'2019-02-11 23:43:16','2019-02-11 23:43:16'),(129,'App\\Models\\ProductsAds',55,'default','post-modern-real-genuine-leather-bed-soft-bed-double-bed-king-queen-size-bedroom-home-furniture.jpg_640x640','post-modern-real-genuine-leather-bed-soft-bed-double-bed-king-queen-size-bedroom-home-furniture.jpg_640x640.jpg','image/jpeg','public',61406,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',128,'2019-02-11 23:43:16','2019-02-11 23:43:16'),(130,'App\\Models\\ProductsAds',56,'default','a2147c74cb5c41801b3bc16c5f576245','a2147c74cb5c41801b3bc16c5f576245.jpg','image/jpeg','public',8910,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',129,'2019-02-11 23:49:10','2019-02-11 23:49:10'),(131,'App\\Models\\ProductsAds',56,'default','Home-Leisure-Travel-Bending-Stick-Hanging-Bed-Outdoor-Furniture-Supply-Garden-Hunting-Red-Blue-Canvas-Stripe.jpg_220x220q90','home-leisure-travel-bending-stick-hanging-bed-outdoor-furniture-supply-garden-hunting-red-blue-canvas-stripe.jpg_220x220q90.jpg','image/jpeg','public',13551,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',130,'2019-02-11 23:49:10','2019-02-11 23:49:10'),(132,'App\\Models\\ProductsAds',56,'default','ece64b78a3fbadc75e0486c71bb19a69--parachute-hammock-portable-hammock','ece64b78a3fbadc75e0486c71bb19a69--parachute-hammock-portable-hammock.jpg','image/jpeg','public',10874,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',131,'2019-02-11 23:49:10','2019-02-11 23:49:10'),(133,'App\\Models\\ProductsAds',57,'default','a2147c74cb5c41801b3bc16c5f576245','a2147c74cb5c41801b3bc16c5f576245.jpg','image/jpeg','public',16611,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',132,'2019-02-11 23:52:27','2019-02-11 23:52:27'),(134,'App\\Models\\ProductsAds',57,'default','ece64b78a3fbadc75e0486c71bb19a69--parachute-hammock-portable-hammock','ece64b78a3fbadc75e0486c71bb19a69--parachute-hammock-portable-hammock.jpg','image/jpeg','public',7672,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',133,'2019-02-11 23:52:27','2019-02-11 23:52:27'),(135,'App\\Models\\ProductsAds',57,'default','Home-Leisure-Travel-Bending-Stick-Hanging-Bed-Outdoor-Furniture-Supply-Garden-Hunting-Red-Blue-Canvas-Stripe.jpg_220x220q90','home-leisure-travel-bending-stick-hanging-bed-outdoor-furniture-supply-garden-hunting-red-blue-canvas-stripe.jpg_220x220q90.jpg','image/jpeg','public',36344,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',134,'2019-02-11 23:52:27','2019-02-11 23:52:27'),(136,'App\\Models\\ProductsAds',57,'default','12','12.jpg','image/jpeg','public',17514,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',135,'2019-02-11 23:52:28','2019-02-11 23:52:28'),(137,'App\\Models\\ProductsAds',58,'default','12','12.jpg','image/jpeg','public',253611,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',136,'2019-02-12 00:00:27','2019-02-12 00:00:27'),(138,'App\\Models\\ProductsAds',58,'default','a2147c74cb5c41801b3bc16c5f576245','a2147c74cb5c41801b3bc16c5f576245.jpg','image/jpeg','public',159585,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',137,'2019-02-12 00:00:27','2019-02-12 00:00:27'),(139,'App\\Models\\ProductsAds',59,'default','12','12.jpg','image/jpeg','public',727784,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',138,'2019-02-12 00:04:02','2019-02-12 00:04:02'),(140,'App\\Models\\ProductsAds',59,'default','a2147c74cb5c41801b3bc16c5f576245','a2147c74cb5c41801b3bc16c5f576245.jpg','image/jpeg','public',1121304,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',139,'2019-02-12 00:04:02','2019-02-12 00:04:02'),(141,'App\\Models\\ProductsAds',59,'default','FRIDA-NATURAL-SPRING-WATER','frida-natural-spring-water.png','image/png','public',142743,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',140,'2019-02-12 00:04:03','2019-02-12 00:04:03'),(142,'App\\Models\\ProductsAds',59,'default','ece64b78a3fbadc75e0486c71bb19a69--parachute-hammock-portable-hammock','ece64b78a3fbadc75e0486c71bb19a69--parachute-hammock-portable-hammock.jpg','image/jpeg','public',79398,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',141,'2019-02-12 00:04:03','2019-02-12 00:04:03'),(143,'App\\Models\\ProductsAds',60,'default','12','12.jpg','image/jpeg','public',802094,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',142,'2019-02-12 00:05:39','2019-02-12 00:05:39'),(144,'App\\Models\\ProductsAds',60,'default','a2147c74cb5c41801b3bc16c5f576245','a2147c74cb5c41801b3bc16c5f576245.jpg','image/jpeg','public',767847,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',143,'2019-02-12 00:05:39','2019-02-12 00:05:39'),(145,'App\\Models\\ProductsAds',61,'default','da5f2b0ca4e11cb596571d35e8320e6f','da5f2b0ca4e11cb596571d35e8320e6f.jpg','image/jpeg','public',273907,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',144,'2019-02-12 00:11:49','2019-02-12 00:11:49'),(146,'App\\Models\\ProductsAds',61,'default','1','1.jpg','image/jpeg','public',13655,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',145,'2019-02-12 00:11:49','2019-02-12 00:11:49'),(147,'App\\Models\\ProductsAds',61,'default','2','2.jpg','image/jpeg','public',22152,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',146,'2019-02-12 00:11:49','2019-02-12 00:11:49'),(148,'App\\Models\\ProductsAds',61,'default','NCH','nch.jpg','image/jpeg','public',59031,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',147,'2019-02-12 00:11:49','2019-02-12 00:11:50'),(149,'App\\Models\\ProductsAds',62,'default','1','1.jpg','image/jpeg','public',14688,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',148,'2019-02-12 00:16:30','2019-02-12 00:16:31'),(150,'App\\Models\\ProductsAds',62,'default','2016-11-16','2016-11-16.jpg','image/jpeg','public',38045,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',149,'2019-02-12 00:16:31','2019-02-12 00:16:31'),(151,'App\\Models\\ProductsAds',62,'default','aba-adds-six-more-branches-to-serve-its-growing-customers-14','aba-adds-six-more-branches-to-serve-its-growing-customers-14.png','image/png','public',562506,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',150,'2019-02-12 00:16:31','2019-02-12 00:16:31'),(152,'App\\Models\\ProductsAds',62,'default','maxresdefault','maxresdefault.jpg','image/jpeg','public',122781,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',151,'2019-02-12 00:16:31','2019-02-12 00:16:32'),(153,'App\\Models\\ProductsAds',63,'default','businessman-with-a-problem-vector-4370329','businessman-with-a-problem-vector-4370329.jpg','image/jpeg','public',81108,'[]','{\"custom_headers\": []}','[]',152,'2020-03-25 17:43:49','2020-03-25 17:43:49'),(154,'App\\Models\\ProductsAds',65,'default','businessman-with-a-problem-vector-4370329','businessman-with-a-problem-vector-4370329.jpg','image/jpeg','public',81108,'[]','{\"custom_headers\": []}','[]',153,'2020-03-31 19:16:23','2020-03-31 19:16:23'),(155,'App\\Models\\ProductsAds',66,'default','businessman-with-a-problem-vector-4370329','businessman-with-a-problem-vector-4370329.jpg','image/jpeg','public',81108,'[]','{\"custom_headers\": []}','[]',154,'2020-03-31 19:19:15','2020-03-31 19:19:15'),(156,'App\\Models\\ProductsAds',67,'default','businessman-with-a-problem-vector-4370329','businessman-with-a-problem-vector-4370329.jpg','image/jpeg','public',81108,'[]','{\"custom_headers\": []}','[]',155,'2020-03-31 19:19:37','2020-03-31 19:19:37'),(157,'App\\Models\\ProductsAds',68,'default','92017264_298915974411922_1153780412166701056_n','92017264_298915974411922_1153780412166701056_n.jpg','image/jpeg','public',45047,'[]','{\"custom_headers\": []}','[]',156,'2020-04-20 17:13:29','2020-04-20 17:13:29'),(158,'App\\Models\\ProductsAds',69,'default','94883237_2520829264849762_4838058377206562816_n','94883237_2520829264849762_4838058377206562816_n.jpg','image/jpeg','public',43715,'[]','{\"custom_headers\": []}','[]',157,'2020-05-01 15:32:53','2020-05-01 15:32:53'),(159,'App\\Models\\ProductsAds',70,'default','94978446_2520829301516425_7976441768382038016_n','94978446_2520829301516425_7976441768382038016_n.jpg','image/jpeg','public',61806,'[]','{\"custom_headers\": []}','[]',158,'2020-05-02 17:57:20','2020-05-02 17:57:20'),(160,'App\\Models\\Profile',7,'default','f61edf04063c7da25b22e8a52e9bfb5f','f61edf04063c7da25b22e8a52e9bfb5f.jpg','image/jpeg','public',50109,'[]','{\"custom_headers\": []}','[]',159,'2020-05-04 18:38:05','2020-05-04 18:38:05'),(162,'App\\Models\\Profile',7,'default','84568483_1068271566865572_236254687685246976_o','84568483_1068271566865572_236254687685246976_o.jpg','image/jpeg','public',188989,'[]','{\"custom_headers\": []}','[]',161,'2020-05-04 18:42:01','2020-05-04 18:42:01'),(163,'App\\Models\\Profile',7,'default','84568483_1068271566865572_236254687685246976_o','84568483_1068271566865572_236254687685246976_o.jpg','image/jpeg','public',188989,'[]','{\"custom_headers\": []}','[]',162,'2020-05-04 18:43:35','2020-05-04 18:43:35'),(164,'App\\Models\\ProductsAds',71,'default','received_259629962062400','received_259629962062400.jpeg','image/jpeg','dospace',145366,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',163,'2020-05-15 11:38:31','2020-05-15 11:38:31'),(165,'App\\Models\\ProductsAds',72,'default','received_259629962062400','received_259629962062400.jpeg','image/jpeg','dospace',145366,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',164,'2020-05-15 11:40:01','2020-05-15 11:40:02'),(166,'App\\Models\\ProductsAds',73,'default','received_259629962062400','received_259629962062400.jpeg','image/jpeg','dospace',145366,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',165,'2020-05-15 11:50:15','2020-05-15 11:50:15'),(167,'App\\Models\\ProductsAds',74,'default','received_259629962062400','received_259629962062400.jpeg','image/jpeg','dospace',145366,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',166,'2020-05-17 10:06:05','2020-05-17 10:06:05'),(168,'App\\Models\\ProductsAds',75,'default','f61edf04063c7da25b22e8a52e9bfb5f','f61edf04063c7da25b22e8a52e9bfb5f.jpg','image/jpeg','dospace',50109,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',167,'2020-05-19 09:38:39','2020-05-19 09:38:41'),(169,'App\\Models\\ProductsAds',76,'default','f61edf04063c7da25b22e8a52e9bfb5f','f61edf04063c7da25b22e8a52e9bfb5f.jpg','image/jpeg','dospace',50109,'[]','{\"custom_headers\": [], \"generated_conversions\": {\"thumb\": true}}','[]',168,'2020-05-21 04:20:48','2020-05-21 04:20:48');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (7,'Hi',19,'2018-11-12 03:27:04','2018-11-12 03:27:04'),(8,'Hi !!!',19,'2018-11-12 19:53:20','2018-11-12 19:53:20'),(26,'H',19,'2018-11-26 09:02:06','2018-11-26 09:02:06'),(27,'Ot nak leng muy',19,'2018-11-26 09:03:19','2018-11-26 09:03:19'),(28,'hi',19,'2018-11-30 20:27:26','2018-11-30 20:27:26'),(29,'????????',19,'2018-11-30 20:29:26','2018-11-30 20:29:26'),(30,'KH',19,'2018-11-30 20:37:02','2018-11-30 20:37:02'),(31,'??',19,'2018-11-30 20:37:22','2018-11-30 20:37:22'),(32,'asdsadsad',19,'2018-11-30 20:37:26','2018-11-30 20:37:26'),(33,'hi',16,'2018-12-01 22:03:49','2018-12-01 22:03:49'),(34,'??',17,'2018-12-09 09:57:56','2018-12-09 09:57:56'),(35,'file',17,'2018-12-09 09:58:01','2018-12-09 09:58:01'),(36,'hi',16,'2018-12-09 10:00:12','2018-12-09 10:00:12'),(37,'qqaqqq',16,'2018-12-09 10:00:21','2018-12-09 10:00:21'),(38,'file',16,'2018-12-09 10:00:30','2018-12-09 10:00:30'),(39,'?',19,'2019-01-09 10:44:13','2019-01-09 10:44:13'),(40,'??',19,'2019-01-09 10:44:17','2019-01-09 10:44:17'),(41,'https://www.facebook.com/vantaralong',16,'2019-01-09 10:46:26','2019-01-09 10:46:26'),(42,'https://www.pinterest.com/pin/712202128550457195/',16,'2019-01-09 10:55:50','2019-01-09 10:55:50'),(43,'Hi, i will fixed this link',16,'2019-01-10 01:47:10','2019-01-10 01:47:10'),(44,'https://www.pinterest.com/pin/712202128550457195/',16,'2019-01-13 00:13:27','2019-01-13 00:13:27'),(45,'file',16,'2019-01-15 11:41:39','2019-01-15 11:41:39'),(46,'and we still cant drag photo in',16,'2019-01-15 11:41:57','2019-01-15 11:41:57'),(47,'hello dude',19,'2019-01-16 19:53:27','2019-01-16 19:53:27'),(48,'?',19,'2019-01-16 19:53:44','2019-01-16 19:53:44'),(49,'?',19,'2019-01-16 19:54:04','2019-01-16 19:54:04'),(50,'nice',16,'2019-01-23 13:43:54','2019-01-23 13:43:54'),(51,'??',16,'2019-01-23 13:44:19','2019-01-23 13:44:19'),(52,'?',16,'2019-01-23 13:44:38','2019-01-23 13:44:38'),(53,'??',16,'2019-01-23 13:44:59','2019-01-23 13:44:59'),(54,'file',16,'2019-01-27 01:32:48','2019-01-27 01:32:48'),(55,'file',16,'2019-01-27 13:35:44','2019-01-27 13:35:44'),(56,'file',16,'2019-01-27 13:36:13','2019-01-27 13:36:13'),(57,'file',16,'2019-01-27 13:36:42','2019-01-27 13:36:42'),(58,'hello sir good are you today',20,'2020-03-04 17:00:39','2020-03-04 17:00:39'),(59,'asd',20,'2020-03-04 21:47:12','2020-03-04 21:47:12'),(60,'hello',20,'2020-03-07 15:26:19','2020-03-07 15:26:19'),(61,'hello',20,'2020-03-07 15:26:27','2020-03-07 15:26:27'),(62,'qqq',19,'2020-03-07 16:52:31','2020-03-07 16:52:31'),(63,'https://www.facebook.com/MEMiracleEntertainment/',19,'2020-03-07 16:52:37','2020-03-07 16:52:37'),(64,'Hi pek',22,'2020-03-25 13:56:17','2020-03-25 13:56:17'),(65,'hi pek',22,'2020-03-31 19:32:20','2020-03-31 19:32:20');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_03_11_202301_create_advert_categories_table',1),(4,'2016_03_11_202607_create_adverts_table',1),(5,'2018_03_13_164303_create_permission_tables',1),(6,'2018_03_20_163601_add_field_to_users_table',1),(7,'2018_04_05_020030_create_role_users_table',1),(8,'2018_05_12_132820_create_categories_table',1),(9,'2018_05_15_144358_create_products_table',1),(10,'2018_05_16_084019_create_media_table',1),(11,'2018_05_26_161251_create_profiles_table',1),(12,'2018_05_26_162213_add_first_name_last_name_to_users_fields',1),(13,'2018_05_27_042003_add_created_by_updated_by_deleted_by_to_users_table',1),(14,'2018_05_29_144708_add_provider_to_users_table',1),(15,'2018_06_02_154114_add_userid_to_products_table',1),(16,'2018_06_04_151623_create_categories_ads_table',1),(17,'2018_06_08_160912_create_countries_table',1),(18,'2018_06_08_160917_create_states_table',1),(19,'2018_06_08_160924_create_cities_table',1),(20,'2015_10_23_100000_create_reports_table',2),(21,'2018_06_15_151429_create_products_ads_table',2),(22,'2018_06_15_151437_create_products_ads_categories_ads_table',2),(23,'2018_06_15_172440_create_views_table',3),(24,'2018_06_16_025709_add_user_id_to_product_ads_table',3),(25,'2018_07_04_180613_alter_fields_avatar_cover_profile_tables',4),(26,'2018_05_13_084701_create_session_table',5),(27,'2018_05_13_085121_create_messages_table',5),(28,'2018_05_13_085415_create_chats_table',5),(29,'2018_08_03_165601_create_ratings_table',5),(30,'2018_08_05_164416_change_datatype_0_1_product_ads_table',5),(31,'2018_08_05_165301_add_softdelete_product_ads_table',5),(32,'2018_08_07_163352_add_comment_rate_to_rates_table',5),(33,'2018_08_25_161618_create_verify_users_table',5),(34,'2018_08_25_162125_add_verified_to_users_table',5),(35,'2018_08_26_004146_create_followers_table',5),(36,'2018_09_18_034221_add_session_id_to_users_table',5),(37,'2018_11_21_161736_add_deleted_by_to_sessions_table',6),(38,'2020_04_23_000657_change_datatype_discount',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (3,'App\\Models\\User',1),(4,'App\\Models\\User',2),(5,'App\\Models\\User',2),(3,'App\\Models\\User',3),(4,'App\\Models\\User',4),(5,'App\\Models\\User',4),(3,'App\\Models\\User',5),(3,'App\\Models\\User',8),(3,'App\\Models\\User',9),(4,'App\\Models\\User',10),(5,'App\\Models\\User',10),(4,'App\\Models\\User',11),(5,'App\\Models\\User',11);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('sornbarang@gmail.com','$2y$10$78bL0zcy1sHizQuuWAPE0eOWkaJnQDdlbDSPwDfVcyIjxaugE0DP.','2018-11-11 02:17:20'),('artsavong@yahoo.com','$2y$10$pDubsbXZBdPvC9f8f5egxOzAZmFICwZLq7BypRruf5l7T8yXe5r.O','2018-12-10 16:33:25'),('admin@treewb.com','$2y$10$JlcgaVGHn.K4/lTIF.PrK.N00Lzg6AJzPSMPDfwRFvKS2knhVr6pO','2020-03-04 18:52:08');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'edit articles','web','2018-06-10 01:45:57','2018-06-10 01:45:57'),(2,'delete articles','web','2018-06-10 01:45:57','2018-06-10 01:45:57'),(3,'publish articles','web','2018-06-10 01:45:57','2018-06-10 01:45:57'),(4,'unpublish articles','web','2018-06-10 01:45:57','2018-06-10 01:45:57');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `tage` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_ads`
--

DROP TABLE IF EXISTS `products_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(13,2) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_ads`
--

LOCK TABLES `products_ads` WRITE;
/*!40000 ALTER TABLE `products_ads` DISABLE KEYS */;
INSERT INTO `products_ads` VALUES (74,35.00,0,0,'2020-05-17 10:06:05','2020-05-17 10:06:05',8,NULL),(75,19.00,0,0,'2020-05-19 09:38:39','2020-05-19 09:39:36',5,'2020-05-19 09:39:36'),(76,100.00,0,0,'2020-05-21 04:20:48','2020-05-21 04:20:48',5,NULL);
/*!40000 ALTER TABLE `products_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_ads_categories_ads`
--

DROP TABLE IF EXISTS `products_ads_categories_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_ads_categories_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_ads_id` int(10) unsigned NOT NULL,
  `categories_ads_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_ads_categories_ads`
--

LOCK TABLES `products_ads_categories_ads` WRITE;
/*!40000 ALTER TABLE `products_ads_categories_ads` DISABLE KEYS */;
INSERT INTO `products_ads_categories_ads` VALUES (1,1,9,NULL,NULL),(2,2,9,NULL,NULL),(3,3,20,NULL,NULL),(4,4,9,NULL,NULL),(5,5,5,NULL,NULL),(6,6,8,NULL,NULL),(7,7,8,NULL,NULL),(8,8,20,NULL,NULL),(9,9,12,NULL,NULL),(10,10,9,NULL,NULL),(11,11,8,NULL,NULL),(12,12,3,NULL,NULL),(13,13,3,NULL,NULL),(14,14,13,NULL,NULL),(15,15,9,NULL,NULL),(16,16,11,NULL,NULL),(17,17,9,NULL,NULL),(18,18,9,NULL,NULL),(19,19,8,NULL,NULL),(20,20,9,NULL,NULL),(21,21,12,NULL,NULL),(22,22,10,NULL,NULL),(23,23,11,NULL,NULL),(24,24,10,NULL,NULL),(25,25,11,NULL,NULL),(26,26,10,NULL,NULL),(27,27,12,NULL,NULL),(28,28,11,NULL,NULL),(29,29,11,NULL,NULL),(30,30,11,NULL,NULL),(31,31,11,NULL,NULL),(32,32,11,NULL,NULL),(33,33,8,NULL,NULL),(34,34,3,NULL,NULL),(35,35,3,NULL,NULL),(36,36,3,NULL,NULL),(37,37,3,NULL,NULL),(38,38,3,NULL,NULL),(39,39,3,NULL,NULL),(40,40,13,NULL,NULL),(41,41,14,NULL,NULL),(42,42,15,NULL,NULL),(43,43,16,NULL,NULL),(44,44,14,NULL,NULL),(45,45,16,NULL,NULL),(46,46,5,NULL,NULL),(47,47,5,NULL,NULL),(48,48,5,NULL,NULL),(49,49,5,NULL,NULL),(50,50,5,NULL,NULL),(51,51,5,NULL,NULL),(52,52,6,NULL,NULL),(53,53,6,NULL,NULL),(54,54,6,NULL,NULL),(55,55,6,NULL,NULL),(56,56,6,NULL,NULL),(57,57,6,NULL,NULL),(58,58,20,NULL,NULL),(59,59,19,NULL,NULL),(60,60,17,NULL,NULL),(61,61,18,NULL,NULL),(62,62,18,NULL,NULL),(63,63,20,NULL,NULL),(64,64,17,NULL,NULL),(65,65,20,NULL,NULL),(66,66,8,NULL,NULL),(67,67,8,NULL,NULL),(68,68,18,NULL,NULL),(69,69,19,NULL,NULL),(70,70,19,NULL,NULL),(71,71,19,NULL,NULL),(72,72,19,NULL,NULL),(73,73,20,NULL,NULL),(74,74,19,NULL,NULL),(75,75,8,NULL,NULL),(76,76,8,NULL,NULL);
/*!40000 ALTER TABLE `products_ads_categories_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_ads_translations`
--

DROP TABLE IF EXISTS `products_ads_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_ads_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_ads_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_ads_translations_products_ads_id_locale_unique` (`products_ads_id`,`locale`),
  KEY `products_ads_translations_locale_index` (`locale`),
  CONSTRAINT `products_ads_translations_products_ads_id_foreign` FOREIGN KEY (`products_ads_id`) REFERENCES `products_ads` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_ads_translations`
--

LOCK TABLES `products_ads_translations` WRITE;
/*!40000 ALTER TABLE `products_ads_translations` DISABLE KEYS */;
INSERT INTO `products_ads_translations` VALUES (147,74,'en','RIce Jamis','<p><font color=\"#212529\"><span style=\"font-size: 15px;\">យើងខ្ញុំមានលក់អង្ករសុទ្ធ ១០០%&nbsp; មកពីសៀមរាប</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">-អង្ករផ្កាម្លិះ ​​&nbsp; &nbsp; 50kg&nbsp; &nbsp;៛140,000</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">-អង្ករផ្ការំដួល&nbsp; 50kg&nbsp; &nbsp;៛160,000</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">ដឹកជញ្ជូនអត់គិតថ្លៃ</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">អង្ករសុទ្ធល្អធានាគុណភាព លក់ក្នុងតម្លៃសមរម្យ សេវាដឹកជញ្ជូន ២៤ខេត្តក្រុង ?</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">សម្រាប់ពត៌មានលំអិតសូមទាក់ទងមកកានលេខ៖</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">☎️ Cellcart&nbsp; 011725372</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">☎️ Smart&nbsp; &nbsp; &nbsp;010725372</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">ផ្តល់ជូនតម្លៃពិសេសសម្រាប់តំណាងចែក២៤ខេត្តក្រុង?</span></font></p>','rice-jamis'),(148,74,'km','RIce Jamis','<p><font color=\"#212529\"><span style=\"font-size: 15px;\">យើងខ្ញុំមានលក់អង្ករសុទ្ធ ១០០%&nbsp; មកពីសៀមរាប</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">-អង្ករផ្កាម្លិះ ​​&nbsp; &nbsp; 50kg&nbsp; &nbsp;៛140,000</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">-អង្ករផ្ការំដួល&nbsp; 50kg&nbsp; &nbsp;៛160,000</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">ដឹកជញ្ជូនអត់គិតថ្លៃ</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">អង្ករសុទ្ធល្អធានាគុណភាព លក់ក្នុងតម្លៃសមរម្យ សេវាដឹកជញ្ជូន ២៤ខេត្តក្រុង ?</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">សម្រាប់ពត៌មានលំអិតសូមទាក់ទងមកកានលេខ៖</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">☎️ Cellcart&nbsp; 011725372</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">☎️ Smart&nbsp; &nbsp; &nbsp;010725372</span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\"><br></span></font></p><p><font color=\"#212529\"><span style=\"font-size: 15px;\">ផ្តល់ជូនតម្លៃពិសេសសម្រាប់តំណាងចែក២៤ខេត្តក្រុង?</span></font></p>','rice-jamis'),(149,75,'en','Jean','Jean','jean'),(150,75,'km','Jean','Jean','jean'),(151,76,'en','Jean','Jean','jean-1'),(152,76,'km','Jean','Jean','jean-2');
/*!40000 ALTER TABLE `products_ads_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` int(11) DEFAULT NULL,
  `cover_image` int(11) DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,1,NULL,'+85599955577',14,NULL,'Phnom Penh',NULL,NULL,'','','','2018-06-10 01:45:57','2018-10-18 08:36:41',NULL),(2,5,NULL,'010369034',NULL,NULL,'Phnom Penh',NULL,NULL,'','','','2018-10-04 15:30:56','2018-11-12 16:22:23',NULL),(3,7,NULL,'+85598427323',NULL,NULL,'Phnom Penh',NULL,NULL,NULL,NULL,NULL,'2018-10-12 03:16:53','2018-10-12 03:16:53',NULL),(4,8,NULL,'010725372',19,NULL,'Phnom Penh',NULL,NULL,'','','','2018-10-14 01:16:23','2020-03-04 16:57:05',NULL),(5,9,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2018-10-18 08:18:47','2018-10-18 08:18:47',NULL),(6,10,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2018-11-11 02:20:38','2018-11-11 02:20:38',NULL),(7,11,NULL,NULL,163,162,NULL,NULL,NULL,'','','','2018-11-11 02:22:34','2020-05-04 18:43:35',NULL),(8,12,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2018-11-11 03:56:48','2018-11-11 03:56:48',NULL),(9,13,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2018-12-10 16:34:19','2018-12-10 16:34:19',NULL),(10,14,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2018-12-10 16:38:18','2018-12-10 16:38:18',NULL),(11,15,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2019-02-12 15:42:02','2019-02-12 15:42:02',NULL),(12,17,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2020-03-04 18:52:52','2020-03-04 18:52:52',NULL),(13,18,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2020-03-04 18:56:27','2020-03-04 18:56:27',NULL),(14,19,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'2020-03-07 16:48:01','2020-03-07 16:48:01',NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comments` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  KEY `ratings_rateable_id_index` (`rateable_id`),
  KEY `ratings_rateable_type_index` (`rateable_type`),
  KEY `ratings_user_id_index` (`user_id`),
  CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (1,'2018-11-06 05:21:59','2018-11-06 05:21:59',4,'App\\Models\\ProductsAds',2,8,'Wow nice clothes'),(2,'2018-11-30 20:38:37','2018-11-30 20:38:37',5,'App\\Models\\ProductsAds',12,8,NULL),(3,'2020-03-03 23:16:34','2020-03-03 23:16:34',3,'App\\Models\\ProductsAds',61,4,'asdds'),(4,'2020-03-04 16:30:02','2020-03-04 16:30:02',3,'App\\Models\\ProductsAds',17,4,'asdsdsd'),(5,'2020-03-04 16:30:55','2020-03-04 16:30:55',5,'App\\Models\\ProductsAds',59,4,'20321'),(6,'2020-03-04 17:30:08','2020-03-04 17:30:08',4,'App\\Models\\ProductsAds',33,8,NULL),(7,'2020-03-07 15:25:38','2020-03-07 15:25:38',5,'App\\Models\\ProductsAds',44,8,'good bikes'),(8,'2020-03-11 08:25:52','2020-03-11 08:25:52',4,'App\\Models\\ProductsAds',18,8,NULL),(9,'2020-04-24 10:15:02','2020-04-24 10:15:02',5,'App\\Models\\ProductsAds',55,8,NULL),(10,'2020-04-26 19:59:13','2020-04-26 19:59:13',4,'App\\Models\\ProductsAds',4,8,'the product nice');
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reportable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reportable_id` bigint(20) unsigned NOT NULL,
  `reporter_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reporter_id` bigint(20) unsigned NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reports_reportable_type_reportable_id_index` (`reportable_type`,`reportable_id`),
  KEY `reports_reporter_type_reporter_id_index` (`reporter_type`,`reporter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` VALUES (1,'App\\Models\\ProductsAds',6,'App\\Models\\User',5,'Nudity','\"xxx\"','2018-10-29 02:59:17','2018-10-29 02:59:17');
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports_conclusions`
--

DROP TABLE IF EXISTS `reports_conclusions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports_conclusions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `report_id` int(10) unsigned NOT NULL,
  `judge_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judge_id` bigint(20) unsigned NOT NULL,
  `conclusion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_taken` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reports_conclusions_judge_type_judge_id_index` (`judge_type`,`judge_id`),
  KEY `reports_conclusions_report_id_index` (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports_conclusions`
--

LOCK TABLES `reports_conclusions` WRITE;
/*!40000 ALTER TABLE `reports_conclusions` DISABLE KEYS */;
INSERT INTO `reports_conclusions` VALUES (1,1,'App\\Models\\User',5,'Your report was valid. Thanks! We\'ve taken action and removed the entry.','Record has been deleted.','[\"some more optional data, can be notes or something\"]','2018-10-29 02:59:17','2018-10-29 02:59:17');
/*!40000 ALTER TABLE `reports_conclusions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(3,2),(4,2),(1,3),(2,3),(3,3),(4,3),(1,4),(2,4),(3,4),(4,4),(1,5),(2,5),(3,5),(4,5);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'writer','web','2018-06-10 01:45:57','2018-06-10 01:45:57'),(2,'moderator','web','2018-06-10 01:45:57','2018-06-10 01:45:57'),(3,'super-admin','web','2018-06-10 01:45:57','2018-06-10 01:45:57'),(4,'client','web','2018-10-04 15:38:26','2018-10-04 15:38:26'),(5,'shop owner','web','2018-10-04 15:41:59','2018-10-04 15:41:59');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user1_id` int(10) unsigned NOT NULL,
  `user2_id` int(10) unsigned NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `blocked_by` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sessions_user1_id_user2_id_unique` (`user1_id`,`user2_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (16,5,1,0,NULL,'2018-11-11 03:45:11','2019-01-23 13:44:59',NULL),(17,5,6,0,NULL,'2018-11-11 03:47:20','2018-12-09 09:57:56',NULL),(18,5,12,0,NULL,'2018-11-11 04:02:02','2020-03-21 20:57:44','5'),(19,8,1,0,NULL,'2018-11-11 14:23:03','2020-03-07 16:52:37',NULL),(20,4,8,0,NULL,'2020-03-03 23:12:00','2020-03-31 19:32:09','8'),(21,8,5,0,NULL,'2020-03-07 15:26:11','2020-04-26 19:58:42',''),(22,10,8,0,NULL,'2020-03-22 09:22:05','2020-03-31 19:32:20',NULL);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states_translations`
--

DROP TABLE IF EXISTS `states_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `states_translations_state_id_locale_unique` (`state_id`,`locale`),
  KEY `states_translations_locale_index` (`locale`),
  CONSTRAINT `states_translations_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states_translations`
--

LOCK TABLES `states_translations` WRITE;
/*!40000 ALTER TABLE `states_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `states_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `session_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'TreeWB','treewb','user','admin','admin@treewb.com','$2y$10$s//2wTaeUoJlXBxb62/tTuWdOcYc6FL7Shbxt5qQapC5Wz2ZXNR9S',NULL,NULL,'01OjJ2FAJKX7SPgphQUULlLVvFokWdC7vQkvkCKjIXAcfOISDtnk0voZ8d6k','2018-06-10 01:45:57',NULL,'2020-03-06 09:14:29',NULL,NULL,NULL,1,0),(2,'Barang CK','barang-ck','barangsornBarang','Sorn','sornbarang@gmail.com','$2y$10$5IBhUAomyKP8361.qjL0mOs2mOg3L2rObhTOQUb6HTYGGbYXaPeWy','facebook','1718037951577724','aXcVZgFqilRyb9t7rykgidST0HJGZgpPy03DGmHWm2yJsai1zBQsT8MpYhuU','2018-06-17 23:38:55',NULL,'2020-03-06 09:28:24',2,NULL,NULL,1,0),(3,'Khmer Kavey','khmer-kavey',NULL,NULL,'barangsorn@gmail.com','$2y$10$262aPgEuTexztnd6I/Kvn.djfmtapsRDLTNuCzQ0uzFu/N.JyQhw.','google','107594032877440679657','ZMv3tEKUAeCMBvS6NUTbQ9Ris4AOfAZ4gJkYJLIr3qro2t0p7ecEGEwDmbJv','2018-06-18 00:21:20',NULL,'2018-06-18 00:21:20',3,NULL,NULL,0,0),(4,'ឡុង វណ្ណតារា','-1','វណ្ណតារា','ឡុង','vantaralong99@gmail.com','$2y$10$S4dL4GNfEGyprBpVwhjKouUheLYWwfnFoj9V4G7GLxmfeHOv9k7we','facebook','1959331130807035','7qeaU3T57G3VkoH3sxtZD3x9mpFDBTBusISgAx3S2VN2uK13LiJfYy0ELwS1','2018-06-18 02:35:16',NULL,'2020-03-25 21:31:09',NULL,NULL,NULL,1,0),(5,'vitou','vitou','pitou','chhay','pitouchhay65@gmail.com','$2y$10$8lTpKnV1R4cSdTF.rje6WunghNPY1Trw4wnUkJ/UcGLR.7Vk7tSkS',NULL,NULL,'FEh4h36MEz0VctWUXlMxrEdkYISgVUp99E68UHXDPavEhFLEQjLigFPD67wn','2018-10-04 15:30:56',NULL,'2018-11-12 16:17:16',5,NULL,NULL,1,0),(6,'ហេង តុង','-2',NULL,NULL,'tong.heng@ymail.com','$2y$10$bXBNdCmBtJe/SrGR4tYlvu2BEI3XqsqIxuXxPB9gJcBwTP7fzOG3O','facebook','1932974406768892','Rct0PXhj7kLtF9STTPeikdQQSfNhfCVxpFEIuns5oQwe4Bo7MuQPN8JgNVie','2018-10-05 02:23:29',NULL,'2018-12-10 16:30:55',6,'2018-12-10 16:30:55',NULL,0,0),(8,'LITONG','litong','Heng','Tong','litong0168@gmail.com','$2y$10$ZWUwnactindB3ltMUOsQH.wIkps2cN8d8ltwJPoW3NiK0hgxRJada',NULL,NULL,'K1cTVQG4UX4zk3Z8H4j5wfv74gSVko1qebL9XEm582Yyg0NTByQzAzZseJqc','2018-10-14 01:16:23',NULL,'2020-03-22 08:16:50',NULL,NULL,NULL,1,0),(9,'PUVONG','puvong','Art','Savong','artsavong@yahoo.com','$2y$10$S/omVLqhhWp4PiW3MEmql.O7zTfP0NI7jcDvsZbNPPNtOkOYNfaDq',NULL,NULL,'kxYcwWmOrJIagXGDrKFfLd8m7kxGh1QojPmBL66FOIA7qqQupblNCJYgbAZn','2018-10-18 08:18:47',NULL,'2018-12-10 16:39:41',1,'2018-12-10 16:39:41',NULL,0,0),(10,'Darameng','darameng','Dara','Meng','darameng444@gmail.com','$2y$10$xik2xCx/HlF8CPkFE1FlB.nsGFRasM8ZnE93YZqITpcIIBo4HfMK6','facebook','2538816913043117','1QfK29dakix91dOpcgrbcVMm5AYhPTTDLvK1vww3y5wsyhF5qdBBiIT3Fk5q','2018-11-11 02:20:38',NULL,'2020-03-04 17:36:27',NULL,NULL,NULL,1,0),(11,'cvtiou','cvtiou','','','vitou_c@yahoo.com','$2y$10$hcYdqmnsc0eKWTICvRSsTeg/h6A28GtSg6K25fmAtqonS5nMFhXOG','facebook','2992147197514414','HYxRgpWeLKVc0lQ5MOsoYPpQULgAvgyoberRdnAvPFZKcxVUNTBblf4XKf9r','2018-11-11 02:22:34',NULL,'2020-05-04 18:41:36',11,NULL,NULL,0,0),(12,'pearom','pearom',NULL,NULL,'pearomkaven@gmail.com','$2y$10$3tsfLDIPImqUamjuRmWGWOUztMh67jlELGcTd4UqQdmFQNbZfFMY2',NULL,NULL,'6D0AwDCXPvsdcg97X7BseaeijfGNzTx3H0jP4TJee9VawE03HkCRbpYc3rpd','2018-11-11 03:56:48',NULL,'2018-11-11 03:56:48',12,NULL,NULL,1,0),(13,'Vong Brother','vong-brother',NULL,NULL,'artsovong@yahoo.com','$2y$10$LaLRUOzV5GwRxWmYKAhCeu1XIhOLOQ6vSj./BNcVlDHzyDQNYp3Ii',NULL,NULL,'Dn7e0eW8AiaWQWX7zXwbQAC2emIyAxjW2MeWboywdS5tZVV2omPtHocuvvQR','2018-12-10 16:34:19',NULL,'2018-12-10 16:34:19',13,NULL,NULL,0,0),(14,'Art Savong','art-savong',NULL,NULL,'vongbrother@gmail.com','$2y$10$6bhbvr5NXWu16NIngL./7OgqC0ju5C6KYPMHqyR6399NIU4lTnXCq',NULL,NULL,'71o2OlLwBkzkpWAjX0Ur0D3e1h6ykAEJlIKagA2pD3WpsPQPe3g9neKr4v4p','2018-12-10 16:38:18',NULL,'2018-12-10 16:42:37',14,NULL,NULL,1,0),(15,'vincent','vincent',NULL,NULL,'nounvichet1314@gmail.com','$2y$10$HZxqWsdEDp5a.dL7bUMXlee9bOeRvXD2CRgRd0sv.fbZYCj0GFJCG',NULL,NULL,'czvn9NCUJc5JFAj3LmONcOCv3i3rJmUdcIRmivcRdpKxPi1iriya69vk90lw','2019-02-12 15:42:02',NULL,'2019-02-12 15:42:02',15,NULL,NULL,0,0),(17,'Spear','spear',NULL,NULL,'spear@treewb.com','$2y$10$tLOPIQPxusPoGlutU9Je9uLu8RrooBPMDrHCiPrMNccaOH0Z/SxMO',NULL,NULL,'kZPX2Qczw8SxvJEN4iWWsUHmSMdjjXeM6X8KyURvEWPJmT5YZbieLXQ6gBvE','2020-03-04 18:52:52',NULL,'2020-03-18 20:50:19',NULL,NULL,NULL,1,0),(18,'newyuhong@yahoo.com','newyuhong-at-yahoocom',NULL,NULL,'newyuhong@yahoo.com','$2y$10$X/m5llRCM8pYN8LTQ.S7KOse3YLhYWTwRgQci78cUde1T.ZDEPE6i',NULL,NULL,'YFVtCxuQqPGTmIvxxblg18rBFid9W3IRU4oXNuMnwGNIvM9OCb99i7RbG3IV','2020-03-04 18:56:27',NULL,'2020-03-04 18:57:24',18,NULL,NULL,1,0),(19,'bunratanaklach','bunratanaklach',NULL,NULL,'bunratanaklach111@gmail.com','$2y$10$CUUljicbsaSVZyK5YILZuOJQQMvptZwSnrnugUJsAfKfd9uVdTzZ.',NULL,NULL,'UqVlB7sLtajmlqlRxq782dNzV7DjiZbEVxxlBYJGr46j8nUqee5P8sCMyUAG','2020-03-07 16:48:01',NULL,'2020-03-07 16:48:01',19,NULL,NULL,0,0),(20,'Alfie Solomons','alfie-solomons',NULL,NULL,'geogatedproject304@gmail.com','$2y$10$ya9nKc7oSsX1oWVH6Ibh4uIFfdPPWpi9kCAsGDdPbDdWL3dTjGfu6','facebook','10149999116244986','rADara16g4urmHMcgKAhGrA4OgAnUQQRnDgOlg8sF6xOOW0CWHeBF4p8Ko3M','2020-03-16 08:57:14',NULL,'2020-03-16 08:57:14',20,NULL,NULL,0,0),(21,'Jame Nc','jame-nc',NULL,NULL,'thyrith.ed@gmail.com','$2y$10$ja3U9bnefmvebxkVIJ9f2ukSJOBu6uFAcShVHFoUof0EqXCOx1j2W','facebook','3093130764051183','OIhnSdLSom9WEezzSUdsFORfouWxvAsMWZs0M6YYetpPydRgQF5PnBEayL0M','2020-03-22 10:15:19',NULL,'2020-03-22 10:15:19',21,NULL,NULL,0,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verify_users`
--

DROP TABLE IF EXISTS `verify_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verify_users`
--

LOCK TABLES `verify_users` WRITE;
/*!40000 ALTER TABLE `verify_users` DISABLE KEYS */;
INSERT INTO `verify_users` VALUES (5,'571QrH0qXE5HPSVgFY3fuMvxhamoEbUIjzROA99u','2018-10-04 15:30:56','2018-10-04 15:30:56'),(7,'hnDy5VlmjLQ70uASaqIS3d4nv8iOB8O2BvUd3SIB','2018-10-12 03:16:53','2018-10-12 03:16:53'),(8,'zgsi9yYOrvDgf5Jq5AVPHAO6W5OY4p7rAo3iXTqJ','2018-10-14 01:16:23','2018-10-14 01:16:23'),(9,'ahzSlyZD4mENX8L4Iih1TKv75cvZFGCJJuiIz9UN','2018-10-18 08:18:47','2018-10-18 08:18:47'),(10,'7K9ZDSO4ElmdBh178rTdIpdvRTCzlX5KFY7guRcw','2018-11-11 02:20:38','2018-11-11 02:20:38'),(11,'MV6U8zkTIFhIA7yQfmhPvahiROLmkBdB2el7dZWX','2018-11-11 02:22:34','2018-11-11 02:22:34'),(12,'oT13e5uI8sKAdBQ02Vp2pxEqGXyMk3uSayKETL7J','2018-11-11 03:56:49','2018-11-11 03:56:49'),(13,'9SnPBABcQcp9pXqWeIZFTVU2sBj3tVyrbXxppoXY','2018-12-10 16:34:19','2018-12-10 16:34:19'),(14,'ZmNSbnN1HiyCEn7B8o5mxhWL2E3IxyLnSV34uQCw','2018-12-10 16:38:18','2018-12-10 16:38:18'),(15,'uocTvT88jgTejKjwGuN4qmEgiwKfKIyyc0akJDCj','2019-02-12 15:42:02','2019-02-12 15:42:02'),(17,'bCWeRmkFN8Cr4LdWnWQQWaLQPZgqlH7GE85OhBMd','2020-03-04 18:52:52','2020-03-04 18:52:52'),(18,'4GBkDWADxbCvshR351FMpRpFW1dnblB0LdfE3dO7','2020-03-04 18:56:27','2020-03-04 18:56:27'),(19,'sTqlEarFQD4Ep2grNoIbkAUcuUygmITIcPUM6CNN','2020-03-07 16:48:01','2020-03-07 16:48:01');
/*!40000 ALTER TABLE `verify_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `views`
--

DROP TABLE IF EXISTS `views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `viewable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) unsigned NOT NULL,
  `visitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `views`
--

LOCK TABLES `views` WRITE;
/*!40000 ALTER TABLE `views` DISABLE KEYS */;
/*!40000 ALTER TABLE `views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'treeweb_live'
--

--
-- Dumping routines for database 'treeweb_live'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-21 18:27:03

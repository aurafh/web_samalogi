-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: samalogi_compro
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_us` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` VALUES (2,'<h1>We are here to help provide solutions in developing <em>information and communication technology</em></h1><div><br></div><div>Professionally, we develop goods and services products with the latest technology and the best quality.<br><br><strong>Vision</strong></div><blockquote><em>\"Indonesia leading company in providing ICT solution.\"</em></blockquote><div><strong>Mission</strong></div><blockquote><em>Inovate, Service, Quality, and Up-to-date.</em></blockquote>','2022-08-11 02:42:41','2022-08-11 03:17:01');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia','<div>Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.<br><br></div><div>Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.<br><strong><br>Et quae iure vel ut odit alias.<br></strong><br></div><div>Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.</div>','blog-images/s6YMyd3DZMr3HcZDm41olpO8v984pSQeRNO6nO5o.jpg',0,'2022-08-09 20:09:54','2022-08-09 20:11:15'),(2,'Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit.','<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br><br><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit</strong><br><br> explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.</div>','blog-images/q1CcBWOkruvvOhjXCEQsdkQE7bkhywycmnmeHgXx.jpg',0,'2022-08-11 19:24:03','2022-08-11 19:24:03'),(3,'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia','<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br><br><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</strong>&nbsp;<br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.</div>','blog-images/9DoDVDj3hvAp0hOyWSUlvabEnUxabFGKNAedv4vE.jpg',0,'2022-08-11 19:25:48','2022-08-11 19:25:48'),(4,'Perferendis facere labore qui quae vel quibusdam corrupti.','<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br><br><strong>Fugit explicabo eum inventore aliquid distinctio ad neque officia</strong>&nbsp;<br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.</div>','blog-images/AU4DQ6xBIEfqXKAJ3uHJDbWETWxOtuVIxe2GKoPx.jpg',0,'2022-08-11 19:27:24','2022-08-11 19:27:24'),(5,'Perferendis facere labore qui quae vel quibusdam corrupti.','<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br><br><strong>Omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br><br></strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.</div>','blog-images/SH0PChSpMPO2piR5M2lfypwYv8GdlzrEggp5ezk2.jpg',0,'2022-08-11 19:28:49','2022-08-11 19:28:49'),(6,'Perferendis facere labore qui quae vel quibusdam corrupti.','<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.<br><br><strong>Perferendis facere labore qui quae vel quibusdam corrupti.<br><br></strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit explicabo eum inventore aliquid distinctio ad neque officia cupiditate vero, omnis eveniet quo, perferendis facere labore qui quae vel quibusdam corrupti.</div>','blog-images/4T7ThehBxE9XWvg0R8E2nClxMc6NnJCKlBVXafIu.jpg',0,'2022-08-11 19:30:30','2022-08-11 19:30:30');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `budaya_kerjas`
--

DROP TABLE IF EXISTS `budaya_kerjas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `budaya_kerjas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_budaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `budaya_kerjas`
--

LOCK TABLES `budaya_kerjas` WRITE;
/*!40000 ALTER TABLE `budaya_kerjas` DISABLE KEYS */;
INSERT INTO `budaya_kerjas` VALUES (1,'Integrity','Jujur, Transparan dan Akuntabel','budaya-images/hXapEjwSfCJo7GIGkoNJTTrb8KxHqQaVvB8FS3Kr.png','2022-08-10 21:10:02','2022-08-10 21:10:02'),(2,'Flexibility','Terbuka dan tidak kaku','budaya-images/GmFujkVIWmX1LXrLpOOdDSBvtNtYbQ2yT8PG28ry.png','2022-08-10 21:10:57','2022-08-10 21:10:57'),(3,'Reliable','Menghargai dan menghormati pelanggan','budaya-images/n4SSBKf7uuKh79b7ItQDXyMJdV2c7WUeyHN3nX8V.png','2022-08-10 21:11:25','2022-08-10 21:11:25'),(4,'Professional','Disiplin dan berkomitmen','budaya-images/kU4GzJ1dzyr8IWgH7Pz9gp1UKqnfMaNOJTG3N13z.png','2022-08-10 21:12:04','2022-08-10 21:12:04'),(5,'Loyal','Saling percaya dan bermitra untuk saling menguntungkan','budaya-images/BpuYCFDkKkUQVJmltvM4wdP5xsGMAjhr4JKw63Nj.png','2022-08-10 21:12:37','2022-08-10 21:12:37');
/*!40000 ALTER TABLE `budaya_kerjas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'myob','client-images/nF3McDNSwpaVL77ZOtzhewdhsn5ahxHnETbWvj3D.png','2022-08-08 19:21:46','2022-08-08 19:21:46'),(2,'BELIMO','client-images/UYR09TsjUvGFqr5cAtbCucPlJmtbcPkWuCPYa59b.png','2022-08-08 19:22:09','2022-08-08 19:22:09'),(3,'LifeGroups','client-images/5BAANnnb0hnXXtdIemozM6lTblrfg9QCW7BoJSwN.png','2022-08-08 19:22:38','2022-08-08 19:22:38'),(4,'Lilly','client-images/aQY8iekdcIvV5AASNPtag6e3jbyApJvQdrj3DRv5.png','2022-08-08 19:22:57','2022-08-08 19:22:57'),(5,'citrus','client-images/1JYjsc0NMmC63b1yAJAE4B86JQhKOpi499kIS8hS.png','2022-08-08 19:23:15','2022-08-08 19:23:15'),(6,'Trustly','client-images/7axDbwnVoW91MePv5pjQoJZacyc3ugSveY22n9HZ.png','2022-08-08 19:23:48','2022-08-08 19:23:48'),(7,'Oldendorff','client-images/nRISNkTweHaOuP34zBSvXHR4thSWsTkASNwU7VTs.png','2022-08-08 19:24:05','2022-08-08 19:24:05'),(8,'Grabyo','client-images/W8RlIZNqcEgnKuChYgTXi3mgzYzbOE0VbGh2KBeX.png','2022-08-08 19:24:20','2022-08-08 19:24:20');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'<div>Jl. HMS Mintareja Sarjana Hukum, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521.<br><br>Gedung BITC (Baros Information Technology Creative Center) Lt.2</div>','info@samalogi.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.958476508975!2d107.54061296123452!3d-6.895570306621799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e59b48322cdb%3A0x10a755b12e9aef37!2sBITC%20(Baros%20Information%2C%20Technology%2C%20%26%20Creative%20Center!5e0!3m2!1sid!2sid!4v1660012183404!5m2!1sid!2sid','2022-08-08 19:32:04','2022-08-08 19:32:04');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,'Home','/#home',1,'2022-08-08 02:43:19','2022-08-08 02:43:19'),(2,'About Us','/#about',1,'2022-08-08 02:44:03','2022-08-08 02:44:03'),(3,'Our Clients','/#clients',1,'2022-08-08 02:44:42','2022-08-08 02:44:42'),(4,'Portfolio','/portfolio',1,'2022-08-08 02:45:32','2022-08-08 02:45:32'),(7,'Blog','/blogs',0,'2022-08-11 20:55:30','2022-08-11 20:55:30'),(8,'Contact','/#contact',1,'2022-08-11 20:56:00','2022-08-11 20:56:00');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_07_19_070954_create_portfolios_table',1),(6,'2022_07_19_071127_create_blogs_table',1),(7,'2022_07_19_071203_create_clients_table',1),(8,'2022_07_19_071236_create_about_us_table',1),(9,'2022_07_19_071342_create_contacts_table',1),(10,'2022_07_19_071417_create_budaya_kerjas_table',1),(11,'2022_08_05_091155_menu_home',1),(12,'2022_08_08_092901_create_menu_items_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` VALUES (1,'Simulator Manajemen Transportasi Laut (Port & Shipping Management) atau Simulator Ketatalaksanaan Angkutan Laut dan Kepelabuhanan (Port & Shipping Simulator)','<div>Simulator terpadu yang memberikan pengetahuan serta experience mengenai ekosistem logistik di pelabuhan. Simulator dilengkapi dengan Modul CBT, aplikasi visual yang mensimulasikan arus lalu lintas kapal dan berbagai kegiatan lain di Pelabuhan.</div>','<ol><li>Software yang dikembangkan untuk memenuhi kebutuhan user guna mencapai tujuan Pendidikan secara maksimum.</li><li>Konten disesuaikan dengan regulasi terkini di Pelabuhan</li><li>Kelengkapan Hardware</li><li>Modul Computer Based Training (CBT).</li><li>Dokumen, terdiri dari :</li></ol><ul><li>Manual pengopesian</li><li>Manual maintenance</li></ul><div><br></div>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/59Ppiy1WHnMcNMEdbEgFuXvMJxiiGZpxCU7quxEJ.jpg','portfolio-images/dmX5bwzpYqbhfye9rMRujwxDsljlbxdJoBOlfgvO.jpg','portfolio-images/Si3xsOiQVO565qvWjgyc8hgAIj5JEunYDFFBLNVm.png','portfolio-images/GboB5VftQNAWzYcON9k9DCtY3wsNDqabzbFPXzXo.jpg','2022-08-08 19:59:14','2022-08-08 19:59:14'),(2,'Maket Pelabuhan (Real Equipment)','<div>Maket Pelabuhan adalah merupakan alat peraga Pendidikan yang dibuat untuk menunjang pemahaman kepada taruna jurusan KALK atau Manajemen Transportasi Laut (MTL) tentang fungsi pelabuhan, Pelabuhan yang dimodelkan dapat disesuaikan dengan kebutuhan institusi.</div>','<ol><li>Standard deliverable items untuk real maket</li><li>Aplikasi architectural visualization</li><li>Dokumen pengoperasian dan maintenance</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/5NAfKuldAxnfKeaIRKwU2b08Zp17ZQRQaPPTX7dR.jpg','portfolio-images/j867aa74jYrbBbLPErB4G7S5PLZ5z9IXPNHwGO8W.jpg','portfolio-images/qXYlAUVojeGKdSq36phkE0YUrbFx2a7e2JnhoP8w.jpg','portfolio-images/yBrrZGmU84GDy6IGOxtfKqqna1Bsjj5nVJ4nOmZB.jpg','2022-08-08 20:02:14','2022-08-08 20:02:14'),(3,'Simulator Gas Turbine (Real Equipment)','<div>Simulator Gas Turbine adalah sebuah simulator yang dibuat untuk memberikan pengetahuan dan pemahaman kepada taruna secara teoritis dan praktis tentang prinsip-prinsip kerja thermodinamika dari sebuah system gas turbine mulai dari tekanan turbin rendah (low pressure) sampai pada kisaran antara ± 40.000 RPM ± 600º C.</div>','<ol><li>Standard deliverable item</li><li>Customers items</li><li>Dokumen pengoperasian dan maintenance</li><li>Onsite Training</li></ol>','<div>-</div>','portfolio-images/YaSbrWR7WzeEfVtYdhGF8xSgZoL5vrUEgNfVgXjI.jpg','portfolio-images/59j7X9YazSi6gUf8wF0N5YdXQhHBSICrXn48V0li.jpg','portfolio-images/Cs69vjjkkVOUXlM5T5ikW4NVvMLg6bts1Fp2oLAm.jpg','portfolio-images/9jEWtMZWIAJFHVoPYbx1RFNsAUyA93NO0gh9h6ld.jpg','2022-08-08 20:05:36','2022-08-08 20:05:36'),(4,'Simulator Steam Turbine','<div>Simulator Steam Turbine (turbine uap) adalah sebuah simulator yang dibuat untuk memberikan pemahaman kepada taruna atau pasis sebagai peserta diklat secara praktis tentang prinsip-prinsip kerja thermodinamika dari sebuah boiler. Peserta diklat dapat mengetahui bagaimana proses mengubah uap basah menjadi uap kering, di mana uap kering tersebut dapat mendorong turbine untuk menghasilkan gerak putar.&nbsp;</div>','<ol><li>Standard deliverable items</li><li>Customers items</li><li>Dokumen pengoperasian dan maintenance</li><li>Onsite Training</li></ol>','<div>-</div>','portfolio-images/NbxAZxpVHGsnqSCDtsTYDOlVAgu2vLOgEZL4ZRZJ.jpg','portfolio-images/QfDhdLQy6kdNU6HIIDn9ghaC6RcWkwOgx8nlbmDB.jpg','portfolio-images/Bs8yNN2Ii6ttTd47Whc1nulLVP47ToKjjiQ1l7lx.jpg','portfolio-images/naRteh0aXDrsYJOAkX1DajqQfckZRhQ5b8RSLNs3.jpg','2022-08-08 20:08:54','2022-08-08 20:08:54'),(5,'Laboratorium Ship Stability (Real Equipment)','<div>Ship Stability Trainer adalah sebuah alat peraga yang dirancang untuk dapat memberikan pengetahuan, pemahaman, dan pengalaman mengenai karakter stabilitas sebuah kapal dalam keadaan sandar, dengan harapan dapat menjadi media pembelajaran prinsip stabilitas bagi para siswa atau taruna jurusan Nautika.</div>','<ol><li>Ship Stabilty Model Equipment</li><li>Ship Stability Motor</li><li>Ship Stability Analysis Software</li><li>Free Surface Effect Equipment</li><li>Modul Praktikum</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/gNafxt2TSm9R8PjCWJbglYANHRoupUlpx7JzQyGW.jpg','portfolio-images/kU21JDT9V06ialS7jQENsjoFyVJy9Tp0TPfGaUUI.jpg','portfolio-images/1PLp46gLR23n9qQ8pbXeXzLPdTSmybU5DSvH66gK.jpg','portfolio-images/UgSbqxbBDLGZlAMJxzxKwwC9H7OOqGVir84r4FSU.jpg','2022-08-08 20:11:49','2022-08-08 20:11:49'),(6,'Software Ship Stability & Load Management','<div>Software CargoMax™ merupakan sebuah system algoritma untuk menetapkan standar stabilitas kapal dan manajemen beban yang telah diuji secara ketat. Aplikasi ini memiliki <em>interface</em> yang ramah pengguna dan dapat digunakan untuk memberikan pengetahuan kepada siswa / taruna mengenai keamanan stabilitas kapal.</div>','<ol><li>Bulk Carrier S1A/S17 Regulations</li><li>Bulk Carrier Load/Discharge Sequence</li><li>Grain Stability</li><li>Bulk Pile Features</li><li>Deadweight Survey Report</li><li>Cargo &amp; Ballast Distribution</li><li>Emergency Response Calculations</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/Ky0g0LOBjUvauzN6ky3KmpNTlrKh7hGK9jplGcAM.jpg','portfolio-images/XQiHZMlHmHD5RppwagVvucWV6CXMJiZv6wCYPuV4.jpg','portfolio-images/yj0qY1rqOTdwOeihs9NxrbHkINrhtwM8gnJLfTP9.jpg','portfolio-images/zpr5uGRTvy6jc47QuPN0RzwxWn82hkA1FcmuB8Xm.jpg','2022-08-08 20:14:41','2022-08-08 20:14:41'),(7,'Laboratorium Engine Hall / Main Engine (Real Equipment)','<div>Laboratorium Real Engine atau Machine Diesel Engine (MDE) Lab adalah sebuah lab yang dipergunakan sebagai alat praktek taruna pelayaran untuk belajar mengoperasikan Engine dan permesinan bantu yang terdapat diruang mesin kapal. Peralatan Real Engine ini dapat dioperasikan secara terpadu dalam satu system maupun parsial.</div>','<ol><li>Main Diesel Engine&nbsp;</li><li>Genset</li><li>FreshWater Generator</li><li>Oil Water Separator</li><li>Boiler</li><li>System Control</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/Ovy6Xck6ZjpJr96u9ehpqAJhCpo8zpaGZc9dquwE.jpg','portfolio-images/TYg7hRNjb2EeF1FGceFRE38y8QlkZCIbsgN7J9KY.jpg','portfolio-images/9s4HhH7uuygWUwlZwvQuq9qtALER3AZbSC0s6t0N.jpg','portfolio-images/JnNb7BL1qaIMiUjff7AepRQVnIewMWIO1Bg73wcT.jpg','2022-08-08 20:17:22','2022-08-08 20:17:22'),(8,'Computer Based Training (CBT)','<div>Computer Based Training merupakan aplikasi berisi bahan ajar untuk membantu taruna atau siswa dalam melaksanakan pembelajaran secara mandiri mengenai suatu materi. Aplikasi ini dikemas sedemikian rupa serta dilengkapi dengan experience audio dan animasi sehingga proses pembelajaran menjadi menarik dan tidak monoton.</div>','<ol><li>Materi pembelajaran dapat menyesuaikan dengan kebutuhan institusi</li><li>Source materi pembelajaran dari sumber yang kredibel</li><li>Proof Regulation</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/NhdPVk33vWFYpaP6eYld4pfOmShW2oiGVUeHZvvW.jpg','portfolio-images/RBuUwPTQWkV9S95ay1xtEFupbvfhZw1kumCBZJTf.jpg','portfolio-images/T9DvBtkOIt5y6tla01aH0ci9S4md9R53Gytpv2XL.png','portfolio-images/CaNXYy3eZzTrTmCq08c1KkY12jed7gnaiAs2qSk7.jpg','2022-08-08 20:19:53','2022-08-08 20:19:53'),(9,'Laboratorium Multimedia','<div>Lab Multimedia adalah fasilitas penunjang multifungsi yang dapat digunakan sebagai alternatif rekreasi bagi para taruna atau siswa untuk menghilangkan kepenatan belajar. Laboratorium ini dilengkapi dengan aplikasi penunjang belajar mandiri, film-film yang terkait dengan sejarah (lainnya), karaoke, dan lain-lain.</div>','<div>1.&nbsp; &nbsp; &nbsp; Perangkat multimedia</div><div>2.&nbsp; &nbsp; &nbsp; Content multimedia</div><div>3.&nbsp; &nbsp; &nbsp; Furniture &amp; Interior multimedia</div><div>4.&nbsp; &nbsp; &nbsp; Perangkat Audio System &amp; Multimedia Room</div><div>5.&nbsp; &nbsp; &nbsp; Dan lain-lain</div>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/sRSm54O9XTgxZAO8Q6fOugMELswh9sbGEP862hip.jpg','portfolio-images/DZBg3JKhkP1vHsBKhoi37W5Vs723224OLtXDpJup.jpg','portfolio-images/QJjfHZBJL5r521U9j3AnKTOh18vjJxgGx1pchk5n.jpg',NULL,'2022-08-08 20:21:53','2022-08-08 20:21:53'),(10,'Laboratorium Maritime English','<div>Laboratorium yang dilengkapi dengan Marlins Study Packs untuk solusi praktikal bagi para taruna / siswa dalam mempelajari Bahasa Inggris yang sesuai dengan standar STCW dan ISM Code. Modul pembelajaran disusun oleh contributor IMO Module Course 3.17 dengan sangat komprehensif untuk komunikasi yang realistis. Institusi juga dapat mendaftarkan diri sebagai Marlins Approved Test Centre.</div>','<ol><li>Study Packs</li><li>Teacher’s Note for Study Packs</li><li>Study Packs Progress Test</li><li>Audio CD</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/2vipsxjmDkZiPiDWvzEZmtfRq9TmKalP58WLn6fo.jpg','portfolio-images/ftBhe4HQPl3kUSxBVpmSN0zqYlinz1tE0rW7OrUA.jpg','portfolio-images/OdcBAQ6VDDrv3sDdzlHTmGeGOrOcZnDov65fDiQT.jpg',NULL,'2022-08-08 20:24:18','2022-08-08 20:24:18'),(11,'Laboratorium Bahasa','<div>Lab Bahasa ini merupakan jenis lab Bahasa yang diciptakan untuk memenuhi permintaan konsumen sebagai sarana Diklat atau pembelajaran Bahasa yang didukung dengan spesifikasi yang tinggi.</div>','<ol><li>Listening</li><li>Conversation / speaking</li><li>Pronounciation&nbsp;</li><li>Writing with keyboard control</li><li>Video repeater</li><li>Record audio</li><li>Test / Exam</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/6nqIiQE5LVvM4C9oKvK04ht7q7rRdKN6AJN4ydUb.jpg','portfolio-images/vXRlnCQBBAqxN2As4xM9YkgVyX2x7deRVuQXv9Ky.jpg','portfolio-images/162hTwLOijV1VWFEPkW38thhlmehv2EcKvPzK2i5.jpg','portfolio-images/IruagNeXOaQGlrU5hkWMbLCXUBkF0p2FUjAHyDCj.jpg','2022-08-08 20:27:12','2022-08-08 20:27:12'),(12,'Laboratorium Computer','<div>Laboratorium Komputer adalah suatu Laboratorium yang digunakan untuk para Tartuna berlatih atau belajar mengoperasikan computer sehingga mampu mengunakan computer dengan program-program tertentu untuk mendukungnya baik dalam proses belajar maupun bekerja nanti.</div>','<ol><li>Hardware (PC, dan lain-lain)</li><li>Software</li><li>Peralatan pedukung</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/LXF1O1kYuhzOl5paB5RzMexaiJwOm5S0r8A7xwsD.jpg','portfolio-images/UYKmhTdqrGm3u4PsL7i13i0S11EHB60nzSmQGRlo.jpg','portfolio-images/ZXGOgVqwXynk5JYQDnNuWLDCTuudHJZoxFurmh0e.jpg',NULL,'2022-08-08 20:29:20','2022-08-08 20:29:20'),(13,'Laboratorium Seamenship','<div>Laboratorium Seamenship atau Lab Kecakapan Bahari adalah merupakan laboatorium yang digunakan untuk melakukan praktek tali temali bagi taruna.</div><div>Laboratorium Seamenship ini memberikan pemahaman teoritis dan praktis tentang tali temali (kecakapan bahari) kepada taruna baik jurusan Nautika maupun Teknika agar mereka mampu melakukannya ketika sudah berlayar di atas kapal.</div>','<ol><li>Tali temali</li><li>Blok &amp; takal</li><li>3Takal dasar</li><li>Alat penolong</li><li>Alat pemadam kebakaran</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/729y11ew7dAzeSeMc87OdDjvG9DnUOPMxHMnkX6R.jpg','portfolio-images/A7mszTAb6XuNvZh5MInq5vUz8kJMCD85bsZG9ZXO.jpg','portfolio-images/TNSQqj1G7K3Jjfvh5RVj8ToXPw0CY4AYBul5fhyu.jpg','portfolio-images/DYPfTbSpBXC2NnjCJDGltBvffiYNjiujXJSjUIxe.jpg','2022-08-08 20:32:39','2022-08-08 20:32:39'),(14,'Laboratorium Electrical & Electronica','<div>Laboratorium Eelctrical dan Electronica adalah sebuah Laboratorium yang didesain untuk memberikan pemahaman teoritis dan praktis kepada taruna jurusan Teknika dan Teknik Elektro (ETO) tentang sistem elektrikal dan komunikasi (system kelistrikan &amp; komunikasi di kapal)<strong>.</strong>&nbsp;</div>','<ol><li>Standard deliverable items</li><li>Customers Specification</li><li>Operationality &amp; maintenance Document.</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/gFnaHtBRH6uDKYIawzRgewgfx23HfkEun6pb5Win.jpg','portfolio-images/hW9FJNZZnYexH9asRU3T61HidPfrReh1H4nsF8Z8.jpg','portfolio-images/15Glpyg8CuEFGKrQL0ZwHwANuF8jTs40akMSC3oU.jpg',NULL,'2022-08-08 20:35:17','2022-08-08 20:35:17'),(15,'Simulator High Voltage','<div>Simulator yang dibuat untuk mensimulasikan system kelistrikan di kapal dengan tegangan (power) 6.6 kV.&nbsp; Real Equipment yang digunakan merupakan mesin marine dengan spesifikasi high voltage main switch board, sehingga dapat dioperasikan pada tegangan 380 VAC, 50 Hz.</div><div>&nbsp;</div><div>System ini dilengkapi perangkat pembangkit listrik (generator), electrical propulsion system, load yang terhubung secara direct dengan real equipment control &amp; monitoring panels.</div>','<ol><li>Standard deliverable items</li><li>Customers Specification</li><li>Dokumen Manual Operation &amp; Maintenance</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/v3VKF5LiMq7rO4DJ3uAsJqEewh4JX8AC6B6j5jmE.jpg','portfolio-images/v2eJaRgS8HM6Hn9ygr5DISeufopjtfIkuMO5sWrK.jpg','portfolio-images/LHjozEHRdIzvqMWw0BWUz7XNGGLVADy2jrNu62pe.jpg',NULL,'2022-08-08 20:38:45','2022-08-08 20:38:45'),(16,'Simulator Helicopter Rescue','<div>Perangkat simulator pertolongan (rescue) korban yang berada di atas air laut melalui pesawat helicopter jenis rescue. Simulator ini dilengkapi dengan berbagai peralatan yang dapat menunjang proses pertolongan dengan lebih real.</div><div>&nbsp;</div><div>Simulator ini dapat meningkatkan pemahaman teoritis dengan memberikan keterampilan praktis dan real experience bagi para taruna jurusan teknika dan nautika mengenai prinsip penanganan pertolongan pada korban di atas air. &nbsp;</div><div>&nbsp;</div><div>Perangkat ini terdiri dari Helicopter Rescue Version Mockup (skala 1 :1) dengan&nbsp; model helicopter jenis tertentu.&nbsp; Helikopter ini dilengkapi dengan perlengkapan mekanisme maju mundur (longitudinal sidding), yang di letakkan diatas konstruksi tower baja setinggi -+ 6 m dari lantai kolam latih taruna.&nbsp;</div>','<div>-</div>','<div>-</div>','portfolio-images/HjTQXPIzXM09klU8hoSDmxIn5ql1Sqcx3YfwvPim.jpg','portfolio-images/gzQ8ridrb7rtIpRIAuYRA1MB7PdlHHHwmzRB50Uw.jpg','portfolio-images/5ctgxaVbmnLatoLRlinIlJVmTe4aB7UPrQglKk2A.jpg','portfolio-images/WIcwna4qKWUd5ET0mJAz02cKZDwNrTcY6yLyAwPB.jpg','2022-08-08 20:42:25','2022-08-08 20:42:25'),(17,'Laboratorium Fire Fighting','<div>Laboratorium Fire Fighting adalah sebuah alat peraga Diklat untuk praktek Pemadam kebakaran yang terjadi di kapal laut atau dipesawat terbang bagi taruna atau siswa pelaut atau pelayaran. Lab fire fighting ini dimaksudkan untuk memberikan pemahaman teoritis dan praktis kepada taruna tentang cara-cara penanganan kebakaran yang terjadi di atas kapal.</div>','<ol><li>Fire Alarm System</li><li>Fire Hydrant System</li><li>Fire Safety Equipment</li><li>Fire Extinguisher</li><li>Nozzle &amp; hose</li></ol>','<div>-</div>','portfolio-images/Q6BPC8IrgOrA7nCgUUJ8FaWV0IiVLd4qMGCHBKoK.jpg','portfolio-images/d4UkUtRHYXNNWB59EGHG4JfEwbYCru1RbYhyRZFx.jpg','portfolio-images/wJuL6yvoo2hugKwnAzAauh0exyvXsrm2SKi6kN4N.jpg','portfolio-images/1ZhFnhpZBsUyML4urLGgvmDVXUx53t1PvnDjwT3C.jpg','2022-08-08 20:44:42','2022-08-08 20:44:42'),(18,'Laboratorium Sea Survival','<div>Laboratorium Sea Survival adalah lab alat keselamatan dilaut yang dapat digunakan untuk praktek keselamatan di laut bagi taruna calon pelaut. Alat keselamatan di laut ini jenis dan jumlahnya sangat banyak, sebagai sampel dari keseluruhannya, diantaranya adalah sebagai berikut :</div><ol><li>Transfer Personil</li><li>Liferaft</li><li>Lifeboat</li><li>Marine Evacuation System</li><li>Enclose Life board</li><li>Inflatable Life raft</li></ol>','<div>-</div>','<div>-</div>','portfolio-images/7LRgKqjpf21naAtIArYRc1GUKKkFCjA652blTBv4.jpg','portfolio-images/xoVngJShUHMcgxhsIPC38Kkj64GDj2iLqLdTaWMJ.jpg','portfolio-images/ZTPDwcUvrOXvMZyT9ucLHPW92IrP9USB8l2Ia9Rm.jpg','portfolio-images/EQMIEiIbcpcp0qFD2aq6ynveSlSX6m7VmwfIeWug.jpg','2022-08-08 20:47:31','2022-08-08 20:47:31'),(19,'Programmable Logic Controller','<div>Laboratorium PLC adalah Laboratorium Programmable Logic Controller (PLC) serta komponen-komponen penunjangnya yang didesain sebagai sarana untuk memberikan pemahaman pada taruna baik secara teoritis maupun praktis agar taruna bisa memahami cara kerja dan pengoperasian sebuah peralatan yang dilengkapi dengan sistem control dan automation sehingga meningkatkan kompetensi taruna dengan melengkapi keahlian di bidang control dan automation.</div>','<ol><li>PLC Training Kit</li><li>Peraga Komponen dan Pengetesan Komponen</li><li>Tools Kit dan Programming Kit</li><li>PC Siswa / taruna</li><li>Kelengkapan Pendukung Lab</li></ol>','<div>-</div>','portfolio-images/IQd7JOwRQlSbF29MPKst6JqIl66uNV3sq9wSHi3S.jpg','portfolio-images/J6Y726N8LyMlNkgck7S7v8yoCntuF4dcZJuowrxp.jpg','portfolio-images/0L6OFp0F8R8luswDRirlq4D9vVwA9DjxUlrx0TVQ.jpg','portfolio-images/cttj8bPkauUB8milftPianUemztOEPIpsqeV5fRl.jpg','2022-08-08 20:50:15','2022-08-08 20:50:15'),(20,'Laboratorium Workshop Equipment','<div>Laboratorium berisi peralatan, dan perlengkapan workshop yang menjadi kerja praktek bagi siswa atau taruna untuk mempelajari cara-cara mengoperasikan mesin bubut, las, gerinda, dan lain-lain.</div>','<ol><li>Lab Mesin bubut</li><li>Lab Mesin las</li><li>Mesin Milling</li><li>Mesin Gerinda</li><li>Lab Listrik</li><li>Dan lain-lain.</li></ol>','<div>-</div>','portfolio-images/GyZRUUuNGvpGAC6g1z9vcQ8VkmbeWfVvwc174kDn.jpg','portfolio-images/VJeTSBe1fZtvTrIAi2ciUyrfnLDqfTeQ0rYs3qPO.jpg','portfolio-images/dIPFWtlFJjNniAkCWqC9QdJGEcl2PmCOv4CiQwix.jpg','portfolio-images/tkRQIONoUhYfj69cIV8fuqbUemOg8ROml9oANzBP.jpg','2022-08-08 20:53:26','2022-08-08 20:53:26'),(21,'Laboratorium Chart Room','<div>Laboratorium bagi&nbsp; taruna untuk melakukan praktikum&nbsp; guna memahami peta-peta pelayaran dengan berbagai simbol navigasi sehingga taruna&nbsp; mampu mengetahui arah kapal sesuai dengan tujuan dalam melakukan pelayaran.&nbsp;</div>','<ol><li>Marine Binocular</li><li>Clinometer</li><li>Marine Sextant</li><li>Aldis Lamp</li><li>Barometer</li><li>Simbol dan singkatan peta</li><li>Maritime Buoyage System</li><li>Star Finder &amp; Identifier&nbsp;</li></ol>','<div>-</div>','portfolio-images/xGLSjVpJyiwGoMQ2Tjr4WgZ96zFTP3A6xkMFYmNM.jpg','portfolio-images/FWaOVfruApnB2WrFij9N4ljjpITLmjRuQ7BXFxfw.jpg','portfolio-images/AxO2vK8WJ4OLM5JydGtdfjWwQGZpezlDBlmA9fCS.jpg','portfolio-images/zq0hubp0ThQFN6JOe0I43U3nXJqy3nA6XJtfDoKl.jpg','2022-08-08 20:55:59','2022-08-08 20:55:59'),(22,'Laboratorium Physical of Maritime','<div>Laboratorium dengan fasilitas penunjang yang dapat digunakan untuk meningkatnya pemahaman para Taruna Jurusan Nautika dan Teknika terhadap hukum-hukum dan kaidah-kaidah fisika yang bekerja pada obyek-obyek kemaritiman, yang pada akhirnya akan meningkatkan kualitas keilmuanya.</div>','<ol><li>Buku Pedoman Dosen tentang Alat Peraga Fisika.</li><li>Alat Ukur</li><li>Mekanika Kinetik</li><li>Listrik dan Magnet</li><li>Bank Soal</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/N6uSlSZQpYDVGxclBiPeskC9pLQ6AmikgZ3WGfBY.png','portfolio-images/1wrAL7UGOCdSHfSiuAKblQcxzwSjVKBhRw1d28y8.png','portfolio-images/UjS8oEYPuUb7hYJymhC55cU3tzmcFE1V8KlV0HFy.png','portfolio-images/WlHOF1c2Rbt7qTMApHKc0pCdsmlr9YG9VoHLTdBZ.png','2022-08-08 20:58:13','2022-08-08 20:58:13'),(23,'Laboratorium Chemical','<div>Laboratorium yang didesain untuk memberikan pamahaman pada taruna secara teoritis dan praktis tentang ilmu kimia sehingga taruna mampu memahami dengan benar jenis-jenis alat kimia, bahan kimia, dan fungsinya.</div>','<ol><li>Meja kursi praktikum</li><li>Bahan kimia&nbsp;</li><li>Alat-alat gelas</li><li>Evaporator Buchi</li><li>Reflaktometer</li><li>Polarimeter</li><li>Dan lain-lain</li></ol>','<div>-</div>','portfolio-images/rpZAW8Eosb5IlTfB3VHU3w1rGxbWDmmHR4HnwvLW.jpg','portfolio-images/VhLG6wnlhRhtfLDdutFL9kqqNC6dg042S50XtvOc.jpg','portfolio-images/NeioWT0WIMGPPxFy2xnoHbyFEpBWMaDPlW76eqNZ.jpg','portfolio-images/AMPEEiYVU26tlZ4KQatmkqcri9wnFPkdriMrpCpb.jpg','2022-08-08 21:01:45','2022-08-08 21:01:45'),(24,'Laboratorium Sistem Kontrol','<div>Laboratorium yang dapat dimanfaatkan taruna untuk memahami cara kerja dan pengoperasian sebuah peralatan yang dilengkapi dengan sistem control dan automation sehingga meningkatkan kompetensi taruna dengan melengkapi keahlian di bidang control dan automation.</div>','<ol><li>Komponen input</li><li>Komponen output</li><li>Komponen pengendali.</li><li>Sasaran kompetensi keahlian Control</li></ol>','<div>-</div>','portfolio-images/urRI8FWG6QnEN4XT72ZVH449ukHBsoBK75UdyZbN.jpg','portfolio-images/9qSxITemY5m9r2yjDXGHCQR4Z0m7iFcpwzZEryED.jpg','portfolio-images/aE7YkOJJ25EOpGtTEcGZAgBgdZWqjn519zIyGH9L.jpg',NULL,'2022-08-08 21:03:42','2022-08-08 21:03:42'),(25,'Simulator Helicopter Under Water','<div>Simulator Helycopter Under Water adalah sebuah simulator yang digunakan untuk mensimulasikan penyelematan atas terjadinya kecelakaan dilaut.&nbsp; Helycopter under water ini memberi pemahaman teoritis dan praktis bagi taruna pelayaran dalam menangani kecelakaan di permukaan air tengah laut. System kerja helicopter under water adalah menyelamatkan orang-orang yang terkena insiden kecelakan dengan diputar terlebih dahulu di dalam permukaan air laut.</div>','<ol><li>Rail Unit</li><li>Helicopter Dummy</li><li>Compressor Unit</li><li>Creane Unit</li><li>Dan lain-lain.</li></ol>','<div>-</div>','portfolio-images/n79FSJ5yAqMPjD1Pw7DxxaOuNKHCkM8ZGajRjtQ8.jpg','portfolio-images/Pd72K2d7S07m8DP77DaQbcA83mI6tv50fXbXEFmi.jpg','portfolio-images/20jo4mPOOOhZnnMRWlflJmT5FbrZHFFTn5z4HY0l.jpg','portfolio-images/WfstqBeNJfXDA5VHwkP7Cl8wvNVq4cwJDBushlmK.jpg','2022-08-08 21:05:57','2022-08-08 21:05:57'),(26,'Simulator Container Yard','<div>Container Yard Simulator atau simulator penumpukan container adalah sebuah simulator yang di desain untuk memberikan pemahanan pada taruna jurusan KALK ( Menejemen Transportasi Laut) tentang bagaimana cara mengatur dan menempatkan container dengan benar sesuai urutan waktu masuk dan keluarnya.</div>','<ol><li>Standard deliverable items</li><li>Customers Specification</li><li>Dokumen Manual Operation &amp; maintenance</li></ol>','<ul><li>Training pengoperasian</li><li>Training maintenance</li></ul>','portfolio-images/ZRiXjtsY95DSAXhew1vMY2pNKqqffWvMhZPrEdsO.jpg','portfolio-images/I4oWBZ9KS4JsoKlzefQpXzxTtddVOjaKsD3Ct1nY.jpg','portfolio-images/cmJjDaicMdUf34D66V8opauFvK0dinuyZZvfA4jG.jpg','portfolio-images/ivrnp9ngkAfPi4xrEs4IuQASz0X5fZPOyL8eNJUg.jpg','2022-08-08 21:08:04','2022-08-08 21:08:04'),(27,'Simulator Safety Driving','<div>-</div>','<ol><li>High definition 3D modeling of Vehicles</li><li>Real time Control Response</li><li>Traffi</li><li>Scoring</li><li>Scenario Exercise</li><li>Day or Night Visual</li></ol>','<div>-</div>','portfolio-images/OI7alj3wST55rDpxfN8doIh8KshguQXTWOf9MXxf.jpg','portfolio-images/bgj4URuvwQGY0lDN4FKahZ81YLjpF38njpExLYSI.jpg','portfolio-images/UaAm8ZA7lkR4i3i7GDZFuR7T7FoQzZyejgZD0BBW.jpg',NULL,'2022-08-08 21:11:07','2022-08-08 21:11:07');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','samalogi','$2y$10$Wl3UHwJEMh7mE7kUXUj1HODVcaFLwMFDWGIMnQf8CV7nMdJgAbgQi',NULL,'2022-08-08 00:47:46','2022-08-08 00:47:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'samalogi_compro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-02 10:37:34

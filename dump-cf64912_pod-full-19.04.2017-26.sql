-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `desc_ru` varchar(255) NOT NULL,
  `desc_cn` varchar(255) NOT NULL,
  `desc_en` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Холодные закуски','冷盘','Appetizers','','','','',1),(2,'Блюда из овощей','蔬菜料理','Dishes from vegetables','','','','',1),(3,'Супы','汤类','Soups','','','','',1),(4,'Блюда из говядины','牛肉料理','Beef dishes','','','','',1),(5,'Блюда из баранины','烤羊肉串','Lamb dishes','','','','',1),(6,'Блюда из морепродуктов','海鲜','Seafood','','','','',1),(7,'Блюда из птицы и кролика','家禽和兔','Poultry and rabbits','','','','',1),(8,'Блюда из рыбы','鱼菜','Kedgeree','','','','',1),(9,'Блюда из свинины','猪肉','Pork Dishes','','','','',1),(10,'Гарниры','配菜','Garnishes','','','','',1),(11,'Десерты','甜品','Dessert','','','','',1),(12,'Овощи','蔬菜','Vegetables','','','','',2),(13,'Мясо','肉','Meat','','','','',2),(14,'Бульон','肉汤','Bouillon','','','','',2),(15,'Морепродукты','海鲜','Seafood','','','','',2),(16,'Холодные закуски','','','','','','',3);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `cuisine`
--

DROP TABLE IF EXISTS `cuisine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuisine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisine`
--

LOCK TABLES `cuisine` WRITE;
/*!40000 ALTER TABLE `cuisine` DISABLE KEYS */;
INSERT INTO `cuisine` VALUES (1,'Сычуаньская кухня ','蜀厨房','Sichuan cuisine'),(2,'Самовар','茶炊','Samovar');
/*!40000 ALTER TABLE `cuisine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'Наши гости','我们的客人','Our guests','2017-01-13 12:53:37'),(2,'лазер шоу','laser show','激光表演','2017-01-16 09:37:12'),(3,'Шоу программы','节目','shows','2017-01-16 09:38:25');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_k_ru` varchar(255) NOT NULL,
  `meta_d_ru` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `content_ru` text NOT NULL,
  `meta_k_cn` varchar(255) NOT NULL,
  `meta_d_cn` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `content_cn` text NOT NULL,
  `meta_k_en` varchar(255) NOT NULL,
  `meta_d_en` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content_en` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'','','Главная','<h1><span>ЯРКИЙ</span> АРОМАТ ВОСТОКА</h1>\r\n            <h4>заставляет вас окунутся в восточные легенды</h4>','','','主','<h1><span>明亮的味道</span></h1>\r\n<h4>让你投身到东部的传说</h4>\r\n','','','Home','<h1><span>Bright</span> flavor EAST</h1>\n            <h4>makes you plunge into the eastern legends</h4>\n'),(2,'','','о ресторане','<h3>Тематический ресторан \"Поднебесная\"</h3>\n<h4>Это новейший проект в Узбекистане с уклоном на китайскую (сычуаньскую) кухню, от настоящих мастеров своего дела - из Китая.</h4>\n\n<h3>Вас ожидают:</h3>\n<ul>\n  <li><h4>Широкий ассортимент блюд полюбившихся миллионами гурманов на всех континентах!</h4></li>\n  <li><h4>Просторная и вместе с тем уютная обстановка!</h4></li>\n  <li><h4>А так же великолепный дизайн!</h4></li>\n</ul>\n\n\n<h3>Не оставит равнодушным ни одного посетителя.</h3>\n<ul>\n  <li>Каждую неделю только для вас, будут представлены самые яркие и свежие шоу программы!</li>\n  <li>Прозвучат живые выступления от профессиональных музыкантов и исполнителей!</li>\n  <li>Мы гарантируем качественную организацию и реализацию банкетов, праздников и торжеств! Всё оттенки востока –только у нас!</li>\n</ul>\n<p>Только в ресторане Поднебесная.</p>','','','餐厅','一品堂--- 是一家以川菜为主的中餐厅，位于乌兹别克斯坦首都塔什干市。由中国重庆特级大厨精心烹制各种美味佳肴，宽敞舒适的餐厅氛围是您休闲小聚、宴请亲朋、节日庆典的不二选择','','','restaurant','<h3>Themed restaurant \"Celestial\"</h3>\n<h4>This is the latest project in Uzbekistan with a focus on Chinese (Szechuan) cuisine from the real masters of their craft - from China.</h4>\n\n<h3>You expect:</h3>\n<ul>\n  <li><h4>Wide range of dishes loved by millions of foodies across continents!</h4></li>\n  <li><h4>The spacious yet cozy atmosphere!</h4></li>\n  <li><h4>As well as great design!</h4></li>\n</ul>\n\n\n<h3>It will impress every guests.</h3>\n<ul>\n  <li>Every week, just for you, it will be presented the most vivid and fresh show program!</li>\n  <li>Will feature live performances by professional musicians and performers!</li>\n  <li>We guarantee a high quality organization and realization of banquets, celebrations! All shades of east -only with us!</li>\n</ul>\n<p>Only in the Celestial restaurant.</p>'),(3,'','','контакты','<div class=\"row\">\n  <div class=\"col-sm-6 col-md-6 col-lg-6\">\n<address>\n  <strong>Ресторан Поднебесная</strong><br>\n  г. Ташкент, ул. Мукумий, д. 1<br>\n  <abbr title=\"Phone\">P:</abbr> +998 (90)       337-0-999<br>\n  <abbr title=\"Phone\">P:</abbr> +998 (95) 143-1-999.\n</address>\n   <br>\n   <strong>Время работы: с 12:00 до 00:00</strong>\n<address>\n  <strong>Администрация</strong><br>\n  <a href=\"mailto:info@podnebesnaya.uz\">info@podnebesnaya.uz</a>\n</address>\n</div>\n  <div class=\"col-sm-6 col-md-6 col-lg-6\">\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2120.2151370287943!2d69.24516179000656!3d41.27759272021663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a8ba160fe5b%3A0xd8effaf4643d5d21!2zMSBNdXFpbWl5IGtvJ2NoYXNpLCDQotC-0YjQutC10L3Rgiwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1482231834740\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\n</div>\n</div>\n','','','往来','<div class=\"row\">\n  <div class=\"col-sm-6 col-md-6 col-lg-6\">\n<address>\n  <strong>一品堂</strong><br>\n  塔什干Muqimiy街1号楼<br>\n  <abbr title=\"Phone\">背景:</abbr> +998 (90) 337-0-999<br>\n  <abbr title=\"Phone\">背景:</abbr> +998 (95) 143-1-999.\n</address>\n   <br>\n   <strong>小时: 12:00 / 00:00</strong>\n<address>\n  <strong>管理</strong><br>\n  <a href=\"mailto:info@podnebesnaya.uz\">info@podnebesnaya.uz</a>\n</address>\n</div>\n  <div class=\"col-sm-6 col-md-6 col-lg-6\">\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2120.2151370287943!2d69.24516179000656!3d41.27759272021663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a8ba160fe5b%3A0xd8effaf4643d5d21!2zMSBNdXFpbWl5IGtvJ2NoYXNpLCDQotC-0YjQutC10L3Rgiwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1482231834740\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\n</div>\n</div>\n','','','contacts','<div class=\"row\">\n  <div class=\"col-sm-6 col-md-6 col-lg-6\">\n<address>\n  <strong>Restaurant  \"Celestial\"</strong><br>\n  Tashkent city, st. Muqimiy 1<br>\n  <abbr title=\"Phone\">P:</abbr> +998 (90) 337-0-999<br>\n  <abbr title=\"Phone\">P:</abbr> +998 (95) 143-1-999.\n</address>\n   <br>\n   <strong>Hours of Operation:  everyday from 12:00 am to 12:00 pm</strong>\n<address>\n  <strong>Administration</strong><br>\n  <a href=\"mailto:info@podnebesnaya.uz\">info@podnebesnaya.uz</a>\n</address>\n</div>\n  <div class=\"col-sm-6 col-md-6 col-lg-6\">\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2120.2151370287943!2d69.24516179000656!3d41.27759272021663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a8ba160fe5b%3A0xd8effaf4643d5d21!2zMSBNdXFpbWl5IGtvJ2NoYXNpLCDQotC-0YjQutC10L3Rgiwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1482231834740\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\n</div>\n</div>');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (1,'лазер шоу','激光表演','laser show',2),(2,'лазер шоу','激光表演','laser show',2),(3,'лазер шоу','激光表演','laser show',2),(4,'激光表演','激光表演','laser show',2),(5,'лазер шоу','激光表演','laser show',2),(6,'лазер шоу','激光表演','laser show',2),(7,'лазер шоу','激光表演','laser show',2),(8,'лазер шоу','激光表演','laser show',2),(9,'лазер шоу','激光表演','laser show',2),(10,'шоу программы','演出节目','show program',3),(11,'шоу программы','演出节目','show program',3),(12,'шоу программы','演出节目','show program',3),(13,'шоу программы','演出节目','show program',3),(14,'шоу программы','','',3),(15,'шоу программы','','',3),(16,'шоу программы','','',3),(17,'шоу программы','','',3),(18,'шоу программы','','',3),(19,'шоу программы','','',3),(20,'шоу программы','','',3),(21,'шоу программы','','',3),(22,'шоу программы','','',3),(23,'шоу программы','','',3),(24,'шоу программы','','',3),(25,'шоу программы','','',3),(26,'шоу программы','','',3),(27,'шоу программы','','',3),(28,'шоу программы','','',3),(29,'шоу программы','','',3),(30,'шоу программы','','',3),(31,'шоу программы','','',3),(32,'шоу программы','','',3),(33,'шоу программы','','',3),(34,'шоу программы','','',3),(35,'Наши гости','','',1),(36,'Наши гости','','',1),(37,'Наши гости','','',1),(38,'Наши гости','','',1),(39,'Наши гости','','',1),(40,'Наши гости','','',1),(41,'Наши гости','','',1),(42,'Наши гости','','',1),(43,'Наши гости','','',1),(44,'Наши гости','','',1),(45,'Наши гости','','',1),(46,'Наши гости','','',1),(47,'Наши гости','','',1),(48,'Наши гости','','',1),(49,'Наши гости','','',1),(50,'Наши гости','','',1),(51,'Наши гости','','',1),(52,'Наши гости','','',1),(53,'Наши гости','','',1),(54,'Наши гости','','',1),(55,'Наши гости','','',1),(56,'Наши гости','','',1),(57,'Наши гости','','',1),(58,'Наши гости','','',1),(59,'Наши гости','','',1),(60,'Наши гости','','',1),(61,'Наши гости','','',1);
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `desc_ru` varchar(255) NOT NULL,
  `desc_cn` varchar(255) NOT NULL,
  `desc_en` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `delivery_price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `delivery` tinyint(4) NOT NULL,
  `new` tinyint(4) NOT NULL,
  `recommended` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Курица в остром соусе','鸡麻辣酱','Chicken in spicy sauce','Курица, огурцы, острый соус ','鸡肉，黄瓜，麻辣酱','Chicken, cucumber, spicy sauce',42000,0,330,0,0,1,0,0,0),(2,'Кусочки курицы в кунжутном масле','','Chicken pieces in sesame oil','Курица, лук, кунжутное масло','','Chicken, onion, sesame oil',38000,0,300,0,0,1,0,0,0),(3,'Говядина в остром соусе с кунжутом','','Beef in a spicy sauce with sesame','Говядина, острый соус, кунжут','','Beef, hot sauce, sesame',46000,0,330,0,0,1,0,0,0),(4,'Говяжий желудок в остром соусе','','Beef stomach in spicy sauce','Говяжий желудок, острый соус','','Beef stomach, hot sauce',36000,0,300,0,0,1,0,0,0),(5,'Говяжья книжка в чесночном соусе','','Beef book in garlic sauce','Говяжья книжка, чеснок, огурцы, острый соус','','Beef book, garlic, cucumber, spicy sauce',36000,0,350,0,0,1,0,0,0),(6,'Свиная рулька с кунжутным маслом','','Pork knuckle with sesame oil','Рулька, кунжутное масло','','Shank, sesame oil',32000,0,250,0,0,1,0,0,0),(7,'Говяжья требуха в остром соусе','在麻辣酱牛肚','Beef tripe in a spicy sauce','Говяжья требуха, острый соус','牛肚，辣椒酱','Beef tripe, hot sauce',32000,0,330,0,0,1,0,0,0),(8,'Говяжий язык в остром соусе','','Beef tongue in spicy sauce','Говяжий язык, огурцы, острый соус','','Beef tongue, cucumbers, hot sauce',42000,0,330,0,0,1,0,0,0),(9,'Ароматная тарелка','香山菜','Fragrant dish','Требуха, варенная говядина, говяжий язык, тофу, приправа','牛肚，水煮牛肉，牛舌，豆腐，调味','Tripe, boiled beef, beef tongue, tofu, seasoning',78000,0,500,0,0,1,0,0,0),(10,'Салат из древесных грибов','从木材蘑菇沙拉','Salad from wood mushrooms','Древесные грибы, кунжутное масло, чеснок','木香菇，香油，蒜泥','Wood mushrooms, sesame oil, garlic',26000,0,250,0,0,1,0,0,0),(11,'Морская капуста с фунчозой','','Sea kale with funchoza','морковь, морская капуста, фунчоза, кунжутное масло ','胡萝卜，海带，Funchoza，香油','carrots, seaweed, funchoza, sesame oil',18000,0,260,0,0,1,0,0,0),(12,'Салат из варенного дофу','水煮豆腐渣沙拉','Salad of boiled dofu','Дофу, кунжутное масло, зеленый лук','豆腐渣，香油，葱花','Dofu, sesame oil, green onion',22000,0,280,0,0,1,0,0,0),(13,'Жареный перец в соевым уксусе','醋和酱油烤辣椒','Roasted peppers in vinegar and soy','Перец, соевый уксусе, кунжутное масло','辣椒，酱油醋，香油','Pepper, soy vinegar, sesame oil',28000,0,260,0,0,1,0,0,0),(14,'Огурцы в чесночном соусе ','黄瓜和蒜酱','Cucumbers and garlic sauce','Огурцы, чеснок, кунжутное масло','黄瓜，大蒜，香油','Cucumbers, garlic, sesame oil',16000,0,260,0,0,1,0,0,0),(15,'Овощная нарезка','蔬菜切片','Vegetable mix','Помидор, огурец, листья салата, перец','西红柿，黄瓜，生菜，辣椒','Tomato, cucumber, lettuce, pepper',32000,0,450,0,0,1,0,0,0),(16,'Соленый жареный арахис','咸鱼烤花生','Salted roasted peanuts','Арахис, соль','花生，盐','Peanuts, salt',12000,0,300,0,0,1,0,0,0),(17,'Жареное кешью','烤腰果','Roasted cashews','Кешью','腰果','Cashew',25000,0,350,0,0,1,0,0,0),(18,'Жареный грецкий в сладкой карамели','在甜蜜的焦糖烤核桃','Roasted walnuts in a sweet caramel','Грецкий орех, сахар, мед','核桃仁，白糖，蜂蜜','Walnut, sugar, honey',32000,0,350,0,0,1,0,0,0),(19,'Брокколи с чесноком','西兰花，大蒜','Broccoli with garlic','Брокколи, чеснок, масло','西兰花，大蒜，油','Broccoli, garlic, oil',24000,0,350,0,0,2,0,0,0),(20,'Жаренная картофельная соломка с уксусом','油炸土豆秸秆醋','Fried potato straws with vinegar','Картофель, масло, уксус','土豆，油，醋','Potatoes, oil, vinegar',18000,0,400,0,0,2,0,0,0),(21,'Жареный салатный лист с кунжутным маслом','扒生菜香油','Grilled lettuce with sesame oil','Салатный лист, кунжутное масло, чеснок','生菜，香油，蒜泥','Lettuce, sesame oil, garlic',22000,0,350,0,0,2,0,0,0),(22,'Жареные баклажаны с перцем','茄子炒辣椒','Fried eggplant with peppers','Баклажан, масло, перец','茄子，油，辣椒','Eggplant, oil, pepper',26000,0,400,0,0,2,0,0,0),(23,'Суп из помидоров и яиц','汤西红柿和鸡蛋','Soup with tomatoes and eggs','Помидор, яйца бульон, масло','番茄，鸡蛋汤，奶油','Tomato, egg soup, butter',22000,0,1000,0,0,3,0,0,0),(24,'Суп из курицы с грибами','鸡汤蘑菇','Chicken soup with mushrooms','Курица, шампиньоны, бульон, китайская приправа','鸡肉，香菇，高汤，调味中国','Chicken, mushrooms, broth, Chinese seasoning',48000,0,1000,0,0,3,0,0,0),(25,'Пекинская капуста в кисло остром соусе','中国白菜甜辣酱汁','Chinese cabbage in sweet and spicy sauce','Пекинская капуста, масло чеснок, перец, уксус','中国白菜，蒜，油，胡椒粉，醋','Chinese cabbage, garlic, oil, pepper, vinegar',18000,0,400,0,0,2,0,0,0),(26,'Суп из говяжьего фарша','碎牛肉汤','Soup of ground beef','Говяжий фарш, масло, бульон, листья салата, яйца','牛肉，酱，高汤，生菜，鸡蛋','Ground beef, butter, broth, lettuce, eggs',32000,0,1000,0,0,3,0,0,0),(27,'Жареная капуста с чесноком','炒白菜大蒜','Fried cabbage with garlic','Капуста, масло, чеснок','白菜，油，大蒜','Cabbage, oil, garlic',18000,0,400,0,0,2,0,0,0),(28,'Суп на курином бульоне с грибами','汤鸡汤蘑菇','Soup with chicken broth with mushrooms','Вешенки, курица, кунжутное масло, бульон','牡蛎蘑菇，鸡精，香油，清汤','Oyster mushrooms, chicken, sesame oil, broth',32000,0,1000,0,0,3,0,0,0),(29,'Жареная дофу в остром соусе','豆腐渣炒的辣酱油','Dofu fried in a spicy sauce','Дофу, масло, фарш, перец','豆腐渣，黄油，牛肉，辣椒','Dofu, butter, beef, pepper',30000,0,450,0,0,2,0,0,0),(30,'Сладкий суп с кукурузой','甜玉米汤','Sweet corn soup','Кукуруза, масло, бульон, яйца','玉米油，肉汤，蛋','Corn oil, broth, eggs',32000,0,1000,0,0,3,0,0,0),(31,'Жареная дофу со свининой','烤猪肉豆腐渣','Roast pork dofu','Дофу, масло, свинина','豆腐渣，酱，猪肉','Dofu, butter, pork',32000,0,450,0,0,2,0,0,0),(32,'Суп из утки и морской капусты','鸭汤和海藻','Duck soup and seaweed','Утка, морская капуста, кунжутное масло, бульон','鸭肉，紫菜，香油，清汤','Duck, seaweed, sesame oil, broth',36000,0,1100,0,0,3,0,0,0),(33,'Жареный китайский салат','炒中国沙拉','Fried Chinese salad','Салат, масло, чеснок','色拉油，蒜','Saladб oil, garlic',26000,0,350,0,0,2,0,0,0),(34,'Суп из курицы и кальмаров','汤鸡和鱿鱼','Soup Chicken and squid','Кальмары, курица, масло бульон','鱿鱼，鸡肉，黄油肉汤','Squid, chicken, butter broth',68000,0,1000,0,0,3,0,0,0),(35,'Жареный китайский кабачок','中国炒西葫芦','Chinese Fried zucchini','Кабачок, масло, лук','西葫芦，油，葱','Zucchini, oil, onion',28000,0,400,0,0,2,0,0,0),(36,'Куриный суп с кукурузой','鸡汤玉米','Chicken soup with corn','Курятина, кукуруза, кунжутное масло, бульон','鸡肉，玉米，香油，清汤','Chicken, corn, sesame oil, broth',3200,0,1200,0,0,3,0,0,0),(37,'Жареная фасоль','Roasted beans','Fried fasol','Фасоль, перец, масло','豆类，辣椒，油','Fasol, pepper, oil',32000,0,400,0,0,2,0,0,0),(38,'Суп со свиными ребрышками и редькой','汤排骨和萝卜','Soup with pork ribs and radish','Редька, ребрышки, масло, бульон','萝卜，排骨，酱，高汤','Radish, ribs, butter, broth',38000,0,1200,0,0,3,0,0,0),(39,'Жареная лапша из дофу с перцем','炒面青椒豆腐渣','Fried noodles with peppers dofu','Лапша, масло, перец','面条，油，辣椒','Noodles, oil, pepper',26000,0,450,0,0,2,0,0,0),(40,'Суп из китайского кабачка со свиными ребрышками','中国南瓜汤排骨','Chinese zucchini soup with pork ribs','Свиные ребра, бульон, кабачок, соль','排骨汤，西葫芦，盐','Pork ribs, soup, zucchini, salt',42000,0,1000,0,0,3,0,0,0),(41,'Тушеные яйца с фаршем','蒸鸡蛋肉末','Steamed egg with minced meat','Яйца, масло, фарш','鸡蛋，黄油，切碎','Eggs, butter, minced',26000,0,400,0,0,2,0,0,0),(42,'Жареная говядина на шипящей сковороде','在铁板锅烤牛肉','Roast beef on a sizzling skillet','Говядина, масло, лук','牛肉，黄油，洋葱','Beef, butter, onion',58000,0,450,0,0,4,0,0,0),(43,'Грибы в кляре','面糊蘑菇','Mushrooms in batter','Вешенки, масло, крахмал','牡蛎蘑菇，油，淀粉','Oyster mushrooms, oil, starch',26000,0,400,0,0,2,0,0,0),(44,'Отварная говядина в остром соусе','在麻辣酱煮牛肉','Boiled beef in a spicy sauce','Говядина, масло, салатные листья, говяжий бульон','牛肉，酱，生菜，牛肉汤','Beef, butter, lettuce, beef broth',58000,0,1000,0,0,4,0,0,0),(45,'Жареные помидоры с яйцом','烤西红柿鸡蛋','Roasted tomatoes with egg','Помидо, яйца, масло','番茄，鸡蛋，黄油','Tomato, eggs, butter',22000,0,500,0,0,2,0,0,0),(46,'Жареная говядина с редькой','烤牛肉萝卜','Roast beef with radish','Говядина, масло, редька','牛肉，黄油，萝卜','Beef, butter, radish',52000,0,500,0,0,4,0,0,0),(47,'Жареное филе говядины','烤牛里脊','Roasted beef fillet','Говядина, масло, перец','牛肉，酱，辣椒','Beef, butter, pepper',58000,0,450,0,0,4,0,0,0),(48,'Жареная говядина с перцем','烤牛肉与辣椒','Roast beef with peppers','Говядина, масло, перец','牛肉，酱，辣椒','Beef, butter, pepper',58000,0,450,0,0,4,0,0,0),(49,'Жареная говяжьи сухожилия','烤牛筋','Roast beef tendon','Говяжьи сухожилия, масло, перец','牛筋，油，辣椒','Beef tendon, oil, pepper',58000,0,450,0,0,4,0,0,0),(50,'Бараньи ребрышки с подливкой','羊肉排骨酱','Lamb ribs with sauce','Бараньи, ребрышки, масло, зира','羊肉，羊排，油，孜然','Lamb, chops, oil, cumin',72000,0,600,0,0,5,0,0,0),(51,'Жареный говяжьи пенис','烤牛肉阴茎','Roast beef penis','Говяжьи пенис, масло, перец','牛阴茎，油，辣椒','Bovine Penis, oil, pepper',68000,0,450,0,0,4,0,0,0),(52,'Жареная говяжья книжка','烤牛肉书','Roast Beef book','Говяжья книжка, масло, лук','牛肉书，油，洋葱','Beef book, oil, onion',58000,0,400,0,0,4,0,0,0),(53,'Тушеная баранина по китайски','在中国的红烧羊肉','Braised lamb in Chinese','Баранина, масло, чеснок, картофель','羊肉，油，大蒜，土豆','Lamb, oil, garlic, potatoes',68000,0,700,0,0,5,0,0,0),(54,'Жареная баранина с  луком','烤羊肉洋葱','Roast lamb with onions','Баранина, масло, лук','羊肉，油，葱','Lamb, oil, onion',68000,0,500,0,0,5,0,0,0),(55,'Жареная кусочки говядины с помидорами в горшочке','牛肉烤片，用在一个锅里的西红柿','Grilled slices of beef with tomatoes in a pot','Говядина, масло, помидоры','牛肉，黄油，番茄','Beef, butter, tomatoes',68000,0,700,0,0,4,0,0,0),(56,'Жареная баранина на шипящей сковороде','烤羊肉火热','Roast lamb sizzling','Баранина, масло, лук','羊肉，油，葱','Lamb, oil, onion',58000,0,450,0,0,5,0,0,0),(57,'Жареная говядина на шпажках','烤串烤牛肉','Roast beef on skewers','Говядина, масло, перец','牛肉，酱，辣椒','Beef, butter, pepper',78000,0,400,0,0,4,0,0,0),(58,'Жареная говяжий желудок','烤牛肉胃','Roast beef stomach','Говяжий желудок, масло, перец','牛肉胃，油，辣椒','Beef stomach, oil, pepper',58000,0,330,0,0,4,0,0,0),(59,'Жареная говяжья аорта','烤牛肉主动脉','Roast beef aorta','Говяжья аорта, масло, перец','牛肉主动脉，油，辣椒','Beef aorta, oil, pepper',56000,0,400,0,0,4,0,0,0),(60,'Тушеная говядина с картошкой','炖牛肉配土豆','Beef stew with potatoes','Говядина, масло, картошка, специи','牛肉，黄油，土豆，香料','Beef, butter, potatoes, spices',68000,0,600,0,0,4,0,0,0),(61,'Говяжий стейк по китайский ','在中国牛排','Beef steak in Chinese','Говядина, масло, кунжутное масло','牛肉，酱，香油','Beef, butter, sesame oil',68000,0,400,0,0,4,0,0,0),(62,'Мясо креветок с кешью','肉虾腰果','Meat shrimp with cashew nuts','Мясо креветок, масло, кешью, огурцы, колбаса','肉虾，奶油，腰果，黄瓜，香肠','Meat shrimp, butter, cashew nuts, cucumber, sausage',108000,0,450,0,0,6,0,0,0),(63,'Жареный краб-турто с имбирем','蟹炒姜Turto','Fried crab with ginger Turto','Краб-турто, лук, имбиреь, масло','Turto蟹，葱，油imbire','Turto crab, onion, imbire oil',388000,0,800,0,0,6,0,0,0),(64,'Жареные кальмары с грибами','炸鱿鱼蘑菇','Fried calamari with mushrooms','Кальмары, масло, шампиньоны, древесные грибы, говяжий желудок','鱿鱼，油，香菇，蘑菇木材，牛胃','Squids, oil, mushrooms, wood mushroom, beef stomach',88000,0,500,0,0,6,0,0,0),(65,'Жареный краб-турто с острым перцем','','Fried crab with hot peppers Turto','Краб-турто, перец, масло, острый, соус','','Crab-Turto, pepper, butter, hot sauce',388000,0,800,0,0,6,0,0,0),(66,'Краб мормкой паук на пару','','Crab spider on mormkoy couple','Краб, мормкой, паук, лук, имберь, масло','','Crab, sea spider, onions, ginger, oil',558000,0,800,0,0,6,0,0,0),(67,'Жареные кальмары со свиным фаршем','','Fried squid with minced pork','Кальмары, масло, фарш','','Squids, oil, minced',88000,0,450,0,0,6,0,0,0),(68,'Сибас на пару','','Sea bass steamed','Сибас, лук, имбирь, масло','','Sea bass, onions, ginger, oil',368000,0,900,0,0,6,0,0,0),(69,'Кальмары на шипящей сковороде','','Squids on a sizzling skillet','Кальмары, лук, масло','鱿鱼，洋葱，油','Squids, onions, oil',78000,0,500,0,0,6,0,0,0),(70,'Дорада на пару с проросшей фасолью','','Dorada a couple with sprouted beans','Дорада, проросшая фасоль, масло','','Dorada, sprouted beans, oil',238000,0,800,0,0,6,0,0,0),(71,'Варуные тигровые креветки с фаршем','','Varun tiger prawns with minced meat','Тигровые, креветки, фарш, масло','','Tiger shrimp, beef, butter',248000,0,600,0,0,6,0,0,0),(72,'Морской огурец','','Sea cucumber','Морской огурец, масло, фарш','','Sea cucumber, butter, minced',228000,0,400,0,0,6,0,0,0),(73,'Камбала на пару','','Flounder couple','Камбала, масло, лук','','Flounder, oil, onion',298000,0,900,0,0,6,0,0,0),(74,'Отварные раки в остром соусе','','Boiled crawfish in spicy sauce','Раки, масло, перец','','Crayfish, oil, pepper',119800,0,1000,0,0,6,0,0,0),(75,'Отварные раки в ароматном соусе','','Boiled crawfish in a fragrant sauce','Раки, масло, соус','','Crayfish, oil, sauce',119800,0,1000,0,0,6,0,0,0),(76,'Жареные креветки','','Fried shrimps','Креветки, соль, масло','','Shrimp, salt, oil',128000,0,400,0,0,6,0,0,0),(77,'Вареные креветки ','','Cooked shrimp','Креветки, лук, приправа','','Shrimp, onion, seasoning',118000,0,400,0,0,6,0,0,0),(78,'Лобстер','','Lobster','Лобстер, лук, масло, специи','','Lobster, onion, oil, spices',1500000,0,1200,0,0,6,0,0,0),(79,'Жареные кусочки с острым перцем по Сычуаньски','J1','Fried with a hot pepper on Sichuan','Курица, масло перец','','Chicken, pepper oil',48000,0,500,0,0,7,0,0,0),(80,'Жареные куриные крылья с перцем','J2','Fried chicken wings with pepper','Куриные крылья, масло, перец','','Chicken wings, oil, pepper',42000,0,500,0,0,7,0,0,0),(81,'Жареная курица с перцем','J3','Fried chicken with peppers','Курица, масло перец','','Chicken, pepper oil',46000,0,500,0,0,7,0,0,0),(82,'Курица Гонг Бао','J4','Gong Bao Chicken','Курица, масло арахис','','Chicken, peanut butter',42000,0,500,0,0,7,0,0,0),(83,'Жареное куриное филе с перцем','J5','Fried chicken with peppers','Куриное филе, масло, перец','','Chicken fillet, butter, pepper',42000,0,500,0,0,7,0,0,0),(84,'Куриные крылья с колой','J6','Chicken wings with cola','Куриные крылья, масло, кола','','Chicken wings, oil, cola',46000,0,500,0,0,7,0,0,0),(85,'Дапанджи','J7','Dapandzhi','Курица, масло, картофель','','Chicken, oil, potato',78000,0,600,0,0,7,0,0,0),(86,'Жареная курица с грибами','J8','Roast chicken with mushrooms','Курица, грибы, масло','','Chicken, mushrooms, butter',68000,0,600,0,0,7,0,0,0),(87,'Жареная курица на шипящей сковороде','J9','Grilled chicken on a sizzling skillet','Курица, масло перец','','Chicken, pepper, oil',42000,0,500,0,0,7,0,0,0),(88,'Жареная утка с имбирем','J10','Roast duck with ginger','Утка, масло, имбирь','','Duck, butter, ginger',60000,0,500,0,0,7,0,0,0),(89,'Жареная утка с пивом','J11','Roast duck with beer','Утка, масло, пиво','','Duck, oil, beer',66000,0,800,0,0,7,0,0,0),(90,'Хрустящая утка','J12','Crispy duck','Утка, масло, перец','','Duck, oil, pepper',88000,0,600,0,0,7,0,0,0),(91,'Кролик жареный в кастрюльке','J13','Rabbit roasted in a pan','Кролик, масло, перец','','Rabbit, oil, pepper',62000,0,700,0,0,7,0,0,0),(92,'Кролик с перцем','J14','Rabbit with peppers','Кролик, масло, перец','','Rabbit, oil, pepper',62000,0,500,0,0,7,0,0,0),(93,'Жареная рыба','Y1','Fried fish','Рыба, фарш, масло','','Fish, beef, butter',82000,0,800,0,0,8,0,0,0),(94,'Сом с чесноком','Y2','Catfish with Garlic','Сом, масло, чеснок','','Catfish, butter, garlic',86000,0,800,0,0,8,0,0,0),(95,'Отварная рыба в остром соусе','Y3','Boiled fish in spicy sauce','Рыба, масло, приправа, бульон','鱼油，调味品，清汤','Fish oil, seasoning, broth',86000,0,1000,0,0,8,0,0,0),(96,'Отварная рыба с помидорами','Y4','Boiled fish with tomatoes','Рыба, бульон, помидоры, масло','鱼汤，番茄，油','Fish broth, tomatoes, oil',88000,0,1200,0,0,8,0,0,0),(97,'Рыбные кубики в кисло-сладком соусе','Y5','Fish cubes in a sweet and sour sauce','Рыба, масло, помидоры, сахар, уксус ','','Fish oil, tomatoes, sugar, vinegar',78000,0,500,0,0,8,0,0,0),(98,'Рыба хризантема','Y6','Fish chrysanthemum','Рыба, масло, томатный соус','','Fish oil, tomato sauce',88000,0,500,0,0,8,0,0,0),(99,'Тушеная рыба','Y7','Stew','Рыба, масло, зеленый лук','鱼油，大葱','Fish oil, green onions',82000,0,650,0,0,8,0,0,0),(100,'Тушеная рыба с фасолью по Китайски','Y8','Braised fish with beans in Chinese','Рыба, масло, фасоль','','Fish oil, beans',86000,0,600,0,0,8,0,0,0),(101,'Жареная рыба с луком','Y9','Fried fish with onions','Рыба, масло, лук','','Fish oil, onion',82000,0,650,0,0,8,0,0,0),(102,'Жареная рыба на шипящей сковороде','Y10','Fried fish on a sizzling skillet','Рыба, масло, перец','','Fish oil, pepper',68000,0,500,0,0,8,0,0,0),(103,'Рыбное филе с тофу','Y11','Fish fillet with tofu','Рыба, масло, перец, тофу','','Fish, oil, pepper, tofu',72000,0,550,0,0,8,0,0,0),(104,'Жареное рыбное филе ','Y12','Fried fish fillets','Рыба, масло, перец','','Fish, oil, pepper',68000,0,550,0,0,8,0,0,0),(105,'Рыба в кисло-остром соусе с кимчи','Y13','Fish in sweet and spicy sauce with kimchi','Рыба, масло, кимчи','','Fish, oil, kimchi',110000,0,1200,0,0,8,0,0,0),(106,'Рыба от Китайского самовара','Y14','Fish from the Chinese samovar','Рыба, масло, лук, острый соус','','Fish, oil, onion, hot sauce',110000,0,1200,0,0,8,0,0,0),(107,'Жареная свинина с овощами','Z1','Grilled pork with vegetables','Свинина, перец, масло','','Pork, pepper, oil',48000,0,460,0,0,9,0,0,0),(108,'Жареная соломка из свинины и проросшей сои по Сычуаньски','Z2','Roast pork straw and sprouted soybeans for Sichuan','Свинина, лук, масло','','Pork, onion, oil',46000,0,400,0,0,9,0,0,0),(109,'Жареная свинина с древесными грибами','Z3','Roast pork with wood mushrooms','Свинина, древесные грибы, масло','','Pork, wood mushrooms, oil',46000,0,400,0,0,9,0,0,0),(110,'Отварная свинина в остром соусе','Z4','Boiled pork in a spicy sauce','Свинина, бульон, листья салата, масло','','Pork soup, lettuce, oil',46000,0,1000,0,0,9,0,0,0),(111,'Свиные ребрышки в кисло-сладком соусе','Z5','Pork ribs in sweet and sour sauce','Свиные ребрышки, сахар, масло, уксус','','',46000,0,400,0,0,9,0,0,0),(112,'Тушеная свинина с овощами в соевом соусе','Z6','Braised pork with vegetables in soy sauce','Свинина, овощи, масло','','Pork, vegetables, oil',52000,0,400,0,0,9,0,0,0),(113,'Жареная свиная печень','Z7','Roasted pork liver','Свиная печень, перец, лук, масло','','Pork liver, peppers, onions, oil',46000,0,330,0,0,9,0,0,0),(114,'Свиные ножки','Z8','Pettitoes','Свиные ножки, масло, перец','','Pork legs, oil, pepper',46000,0,500,0,0,9,0,0,0),(115,'Свиные ребрышки с чесноком','Z9','Pork ribs with garlic','Свиные ребрышки, чеснок, масло','','Pork ribs, garlic, oil',76000,0,450,0,0,9,0,0,0),(116,'Жареное свиное филе','Z10','Roasted pork fillet','Свинина, перец, масло','','Pork, pepper, oil',52000,0,400,0,0,9,0,0,0),(117,'Фаршированные баклажаны со свиным фаршем','Z11','Stuffed eggplant with minced pork','Баклажаны, фарш, масло','','Eggplant, minced meat, oil',48000,0,400,0,0,9,0,0,0),(118,'Жареная лапша из Дофу со свининой','Z12','Fried noodles with pork dofu','Свинина, лапша, масло','','Pork, noodles, oil',38000,0,420,0,0,9,0,0,0),(119,'жареная фунчоза со свиным фаршем','Z13','Funchoza fried with minced pork','Свиной фарш, фунчоза, лук, масло','','Pork mince Funchoza, onions, oil',38000,0,450,0,0,9,0,0,0),(120,'Жареная свинина с перцем','Z14','Roast pork with pepper','Свинина, перец, острый соус, масло','','Pork, pepper, hot sauce, oil',46000,0,400,0,0,9,0,0,0),(121,'Свиная рулька','Z15','Pork knuckle','Свиная рулька, масло, бульон','','Pork knuckle, oil, broth',68000,0,950,0,0,9,0,0,0),(122,'Отварной рис','F1','Boiled rice','','','',2000,0,200,0,0,10,0,0,0),(123,'Жареный рис с овощами и ветчиной','F2','Fried rice with vegetables and ham','Рис, ветчина, морковь, масло','','Rice, ham, carrots, oil',16000,0,400,0,0,10,0,0,0),(124,'Лапша из говядины','F3','Noodles with beef','Говядина, бульон, масло, лапша','','Beef broth, butter, noodles',26000,0,600,0,0,10,0,0,0),(125,'Лапша в остром соусе','F4','Noodles in a spicy sauce','Лапша, масло, фарш, бульон','','Noodles, butter, beef, broth',18000,0,600,0,0,10,0,0,0),(126,'Пельмени по Китайски (куриный фарш с грибами)','F5','Dumplings in Chinese (minced chicken with mushrooms)','Куриный фарш, грибы, мука, лук','','Chicken beef, mushrooms, flour, onions',22000,0,0,0,0,10,0,0,0),(127,'Пельмени по Китайски (зелень и яйца)','F6','Dumplings in Chinese (greens and eggs)','Мука, яйца, зелень, имбирь','','Flour, eggs, herbs, ginger',22000,0,0,0,0,10,0,0,0),(128,'Жареные клецки из рисовой муки с овощами','F7','Fried dumplings made from rice flour with vegetables','клецки из муки, морковь, капуста, грибы, масло, мясо','','dumplings made from flour, carrots, cabbage, mushrooms, butter, meat',38000,0,500,0,0,10,0,0,0),(129,'Картофель в карамели','P1','Potatoes in caramel','Картофель, сахар, масло','','Potatoes, sugar, oil',32000,0,400,0,0,11,0,0,0),(130,'Бананы в карамели','P2','Bananas in caramel','Бананы, сахар, масло','','Bananas, sugar, oil',46000,0,400,0,0,11,0,0,0),(131,'Яблоко в карамели','P3','Candy apple','Яблоко, сахар, масло','','Apple, sugar, butter',42000,0,400,0,0,11,0,0,0),(132,'Жареные тыквенные блинчики','P4','Roasted pumpkin pancakes','Тыква, сахар, мука, масло','','Pumpkin, sugar, flour, oil',38000,0,400,0,0,11,0,0,0),(133,'Жареные кукурузные блинчики','P5','Roasted corn pancakes','Кукуруза, масло, сахар, мука','','Corn oil, sugar, flour',38000,0,400,0,0,11,0,0,0),(134,'Картофель','土豆','Potatoes','','','',12000,0,0,0,0,12,0,0,0),(135,'Редька дайкон','','daikon Radish','','','',14000,0,0,0,0,12,0,0,0),(136,'Фунчоза','','Funchoza','','','',14000,0,0,0,0,12,0,0,0),(137,'Проросшие бобы','','Sprouted beans','','','',16000,0,0,0,0,12,0,0,0),(138,'Салат','','Salad','','','',16000,0,0,0,0,12,0,0,0),(139,'Тофу','','Tofu','','','',16000,0,0,0,0,12,0,0,0),(140,'Замороженное тофу','','Frozen tofu','','','',16000,0,0,0,0,12,0,0,0),(141,'Черная Фунчоза','','Black Funchoza','','','',16000,0,0,0,0,12,0,0,0),(142,'Древесный гриб','','wood mushroom','','','',18000,0,0,0,0,12,0,0,0),(143,'Вешенки','','oyster mushrooms','','','',18000,0,0,0,0,12,0,0,0),(144,'Шампиньон','','Champignon','','','',18000,0,0,0,0,12,0,0,0),(145,'Лапша из Тофу','','Noodles of tofu','','','',17000,0,0,0,0,12,0,0,0),(146,'Капуста','','Cabbage','','','',12000,0,0,0,0,12,0,0,0),(147,'Китайский кабачок','','Chinese zucchini','','','',22000,0,0,0,0,12,0,0,0),(148,'Кукуруза','','Corn','','','',18000,0,0,0,0,12,0,0,0),(149,'Китайский салат','','Chinese salad','','','',20000,0,0,0,0,12,0,0,0),(150,'Жареные баклажаны с фаршем в кляре','','Fried eggplant with minced meat in batter','','','',30000,0,0,0,0,12,0,0,0),(151,'Кинза','','cilantro','','','',12000,0,0,0,0,12,0,0,0),(152,'Спаржа','','Asparagus','','','',22000,0,0,0,0,12,0,0,0),(153,'Цветная капуста','','Cauliflower','','','',14000,0,0,0,0,12,0,0,0),(154,'Морская капуста','','seaweed','','','',16000,0,0,0,0,12,0,0,0),(155,'Сушеные черные шампиньоны ','','Dried black mushrooms','','','',22000,0,0,0,0,12,0,0,0),(156,'Говядина','','Beef','','','',42000,0,0,0,0,13,0,0,0),(157,'Говяжьи сухожилия ','','beef tendon','','','',46000,0,0,0,0,13,0,0,0),(158,'Говяжья нарезка','','Beef sliced','','','',46000,0,0,0,0,13,0,0,0),(159,'Баранина','','Mutton','','','',42000,0,0,0,0,13,0,0,0),(160,'Баранина нарезанная в ручную','','Lamb chop by hand','','','',42000,0,0,0,0,13,0,0,0),(161,'Куриные крылышки','','Chicken wings','','','',26000,0,0,0,0,13,0,0,0),(162,'Куриный желудок','','Chicken stomach','','','',22000,0,0,0,0,13,0,0,0),(163,'Свиные ножки','','pettitoes','','','',32000,0,0,0,0,13,0,0,0),(164,'Куриные лапки','','Chicken legs','','','',18000,0,0,0,0,1,0,0,0),(165,'Говяжий пенис','','Beef penis','','','',54000,0,0,0,0,13,0,0,0),(166,'Говяжья книжка','','Beef book','','','',46000,0,0,0,0,13,0,0,0),(167,'Говяжьи фрикадельки с зеленью ','','Beef meatballs with herbs','','','',66000,0,0,0,0,13,0,0,0),(168,'Бараний желудок','','Sheep\'s stomach','','','',46000,0,0,0,0,13,0,0,0),(169,'Жареные свиные нити','','Fried pork thread','','','',26000,0,0,0,0,13,0,0,0),(170,'Ветчина','','Ham','','','',22000,0,0,0,0,13,0,0,0),(171,'Перепелиные яйца ','','Quail eggs','','','',18000,0,0,0,0,13,0,0,0),(172,'Сосиски','','Frankfurters','','','',22000,0,0,0,0,13,0,0,0),(173,'Острый бульон','','Spicy soup','','','',58000,0,0,0,0,14,0,0,0),(174,'Бульон бараний (бараний желудок, баранина)','','The broth mutton (sheep\'s stomach, lamb)','','','',96000,0,0,0,0,14,0,0,0),(175,'Соус','','Sauce','','','',6000,0,0,0,0,14,0,0,0),(176,'Томатно-грибной бульон','','Tomato-mushroom soup','','','',42000,0,0,0,0,14,0,0,0),(177,'Бульон Инь-Янь','','Bouillon Yin-Yang','','','',68000,0,0,0,0,14,0,0,0),(178,'Раки','','Cancers','','','',95000,0,0,0,0,15,0,0,0),(179,'Креветки','','Shrimps','','','',80000,0,0,0,0,15,0,0,0),(180,'Рыба','','Fish','','','',63000,0,0,0,0,15,0,0,0),(181,'Крабовые палочки','','Crab sticks','','','',50000,0,0,0,0,15,0,0,0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `product_order`
--

DROP TABLE IF EXISTS `product_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_order`
--

LOCK TABLES `product_order` WRITE;
/*!40000 ALTER TABLE `product_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_order` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (15,'Ziyat','termit_90@mail.ru','+998 (97) 445-70-18','23021991','admin'),(16,'Диёрбек','podnebesnaya-1990@mail.ru','+998 (99) 841-97-27','8419727','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cf64912_pod
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `appt` varchar(255) NOT NULL,
  `entrance` varchar(255) NOT NULL,
  `intercom` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_address`
--

LOCK TABLES `user_address` WRITE;
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
INSERT INTO `user_address` VALUES (1,15,'Декабристов','1','28','4','b28b2828','4','Супермаркет Макро'),(4,18,'Шахристанская','25','12','4','b12b1212c','4','Чайхана Шахристан'),(5,19,'','','','','','',''),(6,16,'','','','','','','');
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-19  6:22:11
-- MySQL dump 10.13  Distrib 5.5.52-38.3, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tmp_B70RJwLr
-- ------------------------------------------------------
-- Server version	5.5.52-38.3

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-21  7:00:06

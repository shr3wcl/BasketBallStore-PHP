-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: basketball_store
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authorization`
--

DROP TABLE IF EXISTS `authorization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authorization` (
  `id_auth` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  PRIMARY KEY (`id_auth`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authorization`
--

LOCK TABLES `authorization` WRITE;
/*!40000 ALTER TABLE `authorization` DISABLE KEYS */;
INSERT INTO `authorization` VALUES (1,'Admin','Admin'),(2,'Personnel','Personnel'),(3,'Customer','Customer');
/*!40000 ALTER TABLE `authorization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `url_banner` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'imgs/Banner/sale.png',1,'2022-10-21 17:00:00'),(2,'imgs/Banner/jordan.jpg',1,'2022-10-21 17:00:00'),(3,'imgs/Banner/shoe.jpg',1,'2022-10-21 17:00:00');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `payment_method` tinyint(1) NOT NULL,
  `total_cost` int(12) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `note` text NOT NULL,
  PRIMARY KEY (`id_bill`),
  KEY `id_user with user` (`id_user`),
  CONSTRAINT `id_user with user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (2,24,'Pham Minh Tri','0394192310','Hue',1,112000,'2022-10-23 12:07:50',1,'12'),(4,27,'Pham Minh Tri','0394192310','Hue',0,23123,'2022-10-23 12:22:48',1,'1231'),(6,15,'Pham Minh Tri','0394192310','Hue',1,120000000,'2022-10-23 12:28:59',1,'');
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Basketball Shoes'),(2,'Clothers'),(3,'Accessories');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `title_product` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_product_type` int(11) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `id_promotion` int(11) NOT NULL,
  `n_stars` int(11) NOT NULL,
  `n_reviews` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_category with product` (`id_category`),
  KEY `id_promotion with promotion table` (`id_promotion`),
  KEY `id_product_type with product_type table` (`id_product_type`),
  CONSTRAINT `id_category with product` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  CONSTRAINT `id_product_type with product_type table` FOREIGN KEY (`id_product_type`) REFERENCES `product_type` (`id_product_type`),
  CONSTRAINT `id_promotion with promotion table` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id_promotion`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Anta KT6 NO.11 Rocco','Giày bóng rổ Anta KT6 Klay Thompson NO.11 Rocco',3490000,11,1,2,'imgs/Shoes/KT-2-0.jpg','imgs/Shoes/KT-2-1.jpg','imgs/Shoes/KT-2-2.jpg','imgs/Shoes/KT-2-3.jpg','imgs/Shoes/KT-2-4.jpg',1,11,11,3,'Giày bóng rổ chính hãng ANTA với thiết kế, công nghệ mới, hiện đại mang đến những trải nghiệm tốt hơn, giá trị sử dụng cao hơn, bền hơn. Là 1 trong những dòng giày tốt nhất hiện nay chuyên OUTDOOR cho người chơi bóng rổ.','2022-09-28 21:24:40'),(2,'LeBron 18 Low ACG ','Giày bóng rổ LeBron 18 Low ACG Terra Lakers',3450000,23,1,1,'imgs/Shoes/Lebron18-1-0.jpg','imgs/Shoes/Lebron18-1-1.jpg','imgs/Shoes/Lebron18-1-2.jpg','imgs/Shoes/Lebron18-1-3.jpg','imgs/Shoes/Lebron18-1-4.jpg',1,23,23,2,'Giày bóng rổ LeBron 18 Low ACG Terra Lakers','2022-09-28 21:50:12'),(3,'Anta Crazy Tide 3.0 Venom','Giày bóng rổ Anta Shock The Game 5 Crazy Tide 3.0 Venom',2800000,3,1,2,'imgs/Shoes/ANTA-1-0.jpg','imgs/Shoes/ANTA-1-1.jpg','imgs/Shoes/ANTA-1-2.jpg','imgs/Shoes/ANTA-1-3.jpg','imgs/Shoes/ANTA-1-4.jpg',2,1,2,1,'Anta Crazy Venom được lấy cảm hứng thiết kế từ Marvel \\\"Venom\\\" với công nghệ cực tốt, hỗ trợ tốt, cho sự ổn định, chống xoắn, độ bật đệm cao, độ bám chắc. Phù hợp cho sàn xi măng ngoài trời và sàn trong nhà.','2022-09-28 22:37:13'),(4,'Dame 7 Extply','Giày bóng rổ Adidas Dame 7 Extply',2750000,7,1,3,'imgs/Shoes/Dame7-1-0.jpg','imgs/Shoes/Dame7-1-1.jpg','imgs/Shoes/Dame7-1-2.jpg','imgs/Shoes/Dame7-1-3.jpg','imgs/Shoes/Dame7-1-4.jpg',2,8,15,1,'Giày bóng rổ chính hãng ADIDAS luôn hội tụ những tinh túy công nghệ nhất, giá trị thương hiệu đẳng cấp, chất lượng cao cấp nhất hiện nay, là lựa chọn số 1 cho những vận đông viên chuyên nghiệp, đam mê với trái bóng cam','2022-09-28 22:46:37'),(6,'PG5 Clippers','PG5 Clippers',3300000,3,1,1,'imgs/Shoes/PG5-1-0.jpg','imgs/Shoes/PG5-1-1.jpg','imgs/Shoes/PG5-1-2.jpg','imgs/Shoes/PG5-1-3.jpg','imgs/Shoes/PG5-1-4.jpg',2,54,37,1,'','2022-09-28 22:54:47'),(7,'Zoom Freak 3 Low Battery','Zoom Freak 3 Low Battery',3550000,13,1,1,'imgs/Shoes/Freak3-1-0.jpg','imgs/Shoes/Freak3-1-1.jpg','imgs/Shoes/Freak3-1-2.jpg','imgs/Shoes/Freak3-1-3.jpg','imgs/Shoes/Freak3-1-4.jpg',2,0,0,2,'','2022-10-04 19:10:34'),(8,'KD Trey 5 X EP','KD Trey 5 X EP',2950000,23,1,1,'imgs/Shoes/KDTrey5-0.jpg','imgs/Shoes/KDTrey5-1.jpg','imgs/Shoes/KDTrey5-2.jpg','imgs/Shoes/KDTrey5-3.jpg','imgs/Shoes/KDTrey5-4.jpg',3,12,23,2,'','2022-10-04 19:12:50'),(9,'Anta A-Flash Bubble','Anta A-Flash Bubble',2590000,13,1,2,'imgs/Shoes/ANTA-2-0.jpg','imgs/Shoes/ANTA-2-1.jpg','imgs/Shoes/ANTA-2-2.jpg','imgs/Shoes/ANTA-2-3.jpg','imgs/Shoes/ANTA-2-4.jpg',2,23,12,2,'','2022-10-04 19:16:02'),(10,'Anta KT5 Dragon Ball Super Beerus','Anta KT5 Dragon Ball Super Beerus',3390000,7,1,2,'imgs/Shoes/ANTA-3-0.jpg','imgs/Shoes/ANTA-3-1.jpg','imgs/Shoes/ANTA-3-2.jpg','imgs/Shoes/ANTA-3-3.jpg','imgs/Shoes/ANTA-3-4.jpg',2,37,113,2,'','2022-10-04 19:37:00'),(11,'Dame 7 Extply R.C.O.T.A','Dame 7 Extply Rip City On They Ass',2750000,54,1,3,'imgs/Shoes/Dame7-2-0.jpg','imgs/Shoes/Dame7-2-1.jpg','imgs/Shoes/Dame7-2-2.jpg','imgs/Shoes/Dame7-2-3.jpg','imgs/Shoes/Dame7-2-4.jpg',4,7,13,2,'','2022-10-04 19:38:13'),(12,'Peak All-round High Actual','Peak All-round High Actual',1590000,123,1,4,'imgs/Shoes/PEAK-1-0.jpg','imgs/Shoes/PEAK-1-1.jpg','imgs/Shoes/PEAK-1-2.jpg','imgs/Shoes/PEAK-1-3.jpg','imgs/Shoes/PEAK-1-4.jpg',4,17,32,2,'','2022-10-04 19:46:44'),(13,'LeBron 18 Low Stewie Griffin','LeBron 18 Low Stewie Griffin',4550000,3,1,1,'imgs/Shoes/LeBron-2-0.jpg','imgs/Shoes/LeBron-2-1.jpg','imgs/Shoes/LeBron-2-2.jpg','imgs/Shoes/LeBron-2-3.jpg','imgs/Shoes/LeBron-2-4.jpg',4,32,32,2,'','2022-10-04 19:49:09'),(14,'Harden Vol.5','Harden Vol.5',3550000,15,1,2,'imgs/Shoes/Harden-1-0.jpg','imgs/Shoes/Harden-1-1.jpg','imgs/Shoes/Harden-1-2.jpg','imgs/Shoes/Harden-1-3.jpg','imgs/Shoes/Harden-1-4.jpg',4,13,23,2,'','2022-10-05 10:31:01'),(15,'Anta KT Mountain 2 ','Anta KT Mountain 2 ',2390000,11,1,3,'imgs/Shoes/ANTA-4-0.jpg','imgs/Shoes/ANTA-4-1.jpg','imgs/Shoes/ANTA-4-2.jpg','imgs/Shoes/ANTA-4-3.jpg','imgs/Shoes/ANTA-4-4.jpg',2,11,11,2,'','2022-10-05 10:32:23'),(16,'KT7 Turn The Tide','KT7 Turn The Tide',4290000,11,1,3,'imgs/Shoes/ANTA-5-0.jpg','imgs/Shoes/ANTA-5-1.jpg','imgs/Shoes/ANTA-5-2.jpg','imgs/Shoes/ANTA-5-3.jpg','imgs/Shoes/ANTA-5-4.jpg',4,11,12,2,'','2022-10-05 10:35:37'),(17,'Anta Klay Thompson KT7 ','Anta Klay Thompson KT7 ',3290000,11,1,3,'imgs/Shoes/ANTA-6-0.jpg','imgs/Shoes/ANTA-6-1.jpg','imgs/Shoes/ANTA-6-2.jpg','imgs/Shoes/ANTA-6-3.jpg','imgs/Shoes/ANTA-6-4.jpg',2,48,52,3,'','2022-09-05 10:39:15'),(18,'Lebron 19 Tropical','Lebron 19 Tropical',5500000,23,1,1,'imgs/Shoes/LeBron-3-0.jpg','imgs/Shoes/LeBron-3-1.jpg','imgs/Shoes/LeBron-3-2.jpg','imgs/Shoes/LeBron-3-3.jpg','imgs/Shoes/LeBron-3-4.jpg',4,23,23,2,'','2022-10-05 10:44:38'),(19,'PEAK DA230011','PEAK DA230011',1800000,3,1,4,'imgs/Shoes/PEAK-2-0.jpg','imgs/Shoes/PEAK-2-1.jpg','imgs/Shoes/PEAK-2-2.jpg','imgs/Shoes/PEAK-2-3.jpg','imgs/Shoes/PEAK-2-4.jpg',3,12,10,2,'','2022-10-05 10:46:45'),(20,'Quần bóng rổ T-Rex','Quần bóng rổ T-Rex',289000,23,2,5,'imgs/Pants/img1-0.jpg','imgs/Pants/img1-1.jpg','imgs/Pants/img1-2.jpg','imgs/Pants/img1-3.jpg','imgs/Pants/img1-4.jpg',2,11,12,1,'','2022-10-05 10:57:27'),(21,'Quần Miami Heat','Quần Miami Heat',299000,25,2,5,'imgs/Pants/img2-0.jpg','imgs/Pants/img2-1.jpg','imgs/Pants/img2-2.jpg','imgs/Pants/img2-3.jpg','imgs/Pants/img2-4.jpg',2,25,25,1,'','2022-10-05 10:59:09'),(22,'Quần Washington Wizards','Quần Washington Wizards',289000,25,2,5,'imgs/Pants/img3-0.jpg','imgs/Pants/img3-1.jpg','imgs/Pants/img3-2.jpg','imgs/Pants/img3-3.jpg','imgs/Pants/img3-4.jpg',2,11,11,1,'','2022-10-05 11:00:38'),(23,'Quần Milwaukee Bucks','Quần Milwaukee Bucks',299000,11,2,5,'imgs/Pants/img4-0.jpg','imgs/Pants/img4-1.jpg','imgs/Pants/img4-2.jpg','imgs/Pants/img4-3.jpg','imgs/Pants/img4-4.jpg',2,11,11,1,'','2022-10-05 11:02:03'),(24,'Quần NBA All Star','Quần NBA All Star',299000,11,2,5,'imgs/Pants/img5-0.jpg','imgs/Pants/img5-1.jpg','imgs/Pants/img5-2.jpg','imgs/Pants/img5-3.jpg','imgs/Pants/img5-4.jpg',2,11,11,1,'','2022-10-05 11:03:15'),(25,'Quần Denver Nuggets','Quần Denver Nuggets',299000,11,2,5,'imgs/Pants/img6-0.jpg','imgs/Pants/img6-1.jpg','imgs/Pants/img6-2.jpg','imgs/Pants/img6-3.jpg','imgs/Pants/img6-4.jpg',2,11,11,1,'','2022-10-05 11:04:21'),(26,'Quần VBA Thăng Long','Quần VBA Thăng Long',289000,11,2,5,'imgs/Pants/img7-0.jpg','imgs/Pants/img7-1.jpg','imgs/Pants/img7-2.jpg','imgs/Pants/img7-3.jpg','imgs/Pants/img7-4.jpg',2,11,11,1,'','2022-10-05 11:05:49'),(27,'Áo tập San Antonio','Áo tập San Antonio Spurs',300000,11,2,6,'imgs/Shirt/shirt8-0.jpg','imgs/Shirt/shirt8-1.jpg','imgs/Shirt/shirt8-2.jpg','imgs/Shirt/shirt8-3.jpg','imgs/Shirt/shirt8-4.jpg',4,11,11,1,'','2022-10-08 16:29:58'),(28,'Áo tập Miami Heat','Áo tập Miami Heat',299000,11,2,6,'imgs/Shirt/shirt1-0.jpg','imgs/Shirt/shirt1-1.jpg','imgs/Shirt/shirt1-2.jpg','imgs/Shirt/img1-3.jpg','imgs/Shirt/shirt1-4.jpg',4,11,11,1,'','2022-10-08 16:31:14'),(29,'Áo tập Jordan','Áo tập Jordan',299000,11,2,6,'imgs/Shirt/shirt2-0.jpg','imgs/Shirt/shirt2-1.jpg','imgs/Shirt/shirt2-2.jpg','imgs/Shirt/shirt2-3.jpg','imgs/Shirt/shirt2-4.jpg',4,11,11,1,'','2022-10-08 16:31:59'),(30,'Áo tập Basketball','Áo tập Basketball Is My Girlfriend',299000,11,2,6,'imgs/Shirt/shirt3-0.jpg','imgs/Shirt/shirt3-1.jpg','imgs/Shirt/shirt3-2.jpg','imgs/Shirt/shirt3-3.jpg','imgs/Shirt/shirt3-4.jpg',4,11,11,1,'','2022-10-08 16:32:48'),(31,'Áo tập Brooklyn Nets\r\n','Áo tập Brooklyn Nets\r\n',299000,11,2,6,'imgs/Shirt/shirt5-0.jpg','imgs/Shirt/shirt5-1.jpg','imgs/Shirt/shirt5-2.jpg','imgs/Shirt/shirt5-3.jpg','imgs/Shirt/shirt5-4.jpg',4,11,11,1,'','2022-10-08 16:33:37'),(32,'Áo tập GSW','Áo tập Golden State Warrior',299000,11,2,6,'imgs/Shirt/shirt6-0.jpg','imgs/Shirt/shirt6-1.jpg','imgs/Shirt/shirt6-2.jpg','imgs/Shirt/shirt6-3.jpg','imgs/Shirt/shirt6-4.jpg',4,11,11,1,'','2022-10-08 16:34:30'),(33,'Áo tập Clippers','Áo tập Los Angeles Clippers',299000,11,2,6,'imgs/Shirt/shirt7-0.jpg','imgs/Shirt/shirt7-1.jpg','imgs/Shirt/shirt7-2.jpg','imgs/Shirt/shirt7-3.jpg','imgs/Shirt/shirt7-4.jpg',4,11,11,1,'','2022-10-08 16:35:14'),(34,'Áo tập Boston Celtics','Áo tập Boston Celtics',299000,11,2,6,'imgs/Shirt/shirt8-0.jpg','imgs/Shirt/shirt8-1.jpg','imgs/Shirt/shirt8-2.jpg','imgs/Shirt/shirt8-3.jpg','imgs/Shirt/shirt8-4.jpg',4,11,11,1,'','2022-10-08 16:36:21');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_type` (
  `id_product_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_pt` varchar(255) NOT NULL,
  `logo_pt` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id_product_type`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_type`
--

LOCK TABLES `product_type` WRITE;
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT INTO `product_type` VALUES (1,'Nike shoes','imgs/Logo/nike.png','Nike basketball shoes',1),(2,'Anta Shoes','imgs/Logo/anta.png','Anta Basketball shoes',1),(3,'Adidas shoes','imgs/Logo/adidas.png','Adidas basketball shoes',1),(4,'Peak Shoes','imgs/Logo/peak.png','Peak basketball shoes',1),(5,'Quần bóng rổ','','Quần bóng rổ',2),(6,'Áo bóng rổ','','Áo bóng rổ',2);
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `id_promotion` int(11) NOT NULL AUTO_INCREMENT,
  `name_promotion` varchar(255) NOT NULL,
  `type_promotion` varchar(255) NOT NULL,
  `type_sale` tinyint(1) NOT NULL DEFAULT 1,
  `value` int(11) NOT NULL,
  `start_day` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (1,'No sale','No sale',1,0,'2022-09-28 21:23:12',1),(2,'Sale Mid Season','12% off',1,12,'2022-09-28 22:40:14',1),(3,'Sale for new user','Sale off 500k',0,500000,'2022-09-28 22:43:27',1),(4,'Winter Sale','22% off',1,22,'2022-10-04 19:42:58',1),(7,'Cho vui','Vui thi sale',1,90,'2022-10-24 10:39:38',1);
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typical_products`
--

DROP TABLE IF EXISTS `typical_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typical_products` (
  `id_t_product` int(11) NOT NULL AUTO_INCREMENT,
  `url_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_t_product`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typical_products`
--

LOCK TABLES `typical_products` WRITE;
/*!40000 ALTER TABLE `typical_products` DISABLE KEYS */;
INSERT INTO `typical_products` VALUES (1,'imgs/Banner/ball.jpg','Basketball ball','With super durable PU leather material, the leather grip is more effective, wear-resistant, suitable for outdoor use, providing a better feeling of holding the ball'),(2,'imgs/Banner/socks.jpg','NBA socks','Thick, elastic material helps heels, feet less friction inside the shoes, easy to cause blisters, foot blisters, redness, inlaid but also an enhancement accessory with your shoes.'),(3,'imgs/Banner/uniform.jpg','Jersey VBA','Giaybongro.vn is the official agent to distribute the Jersey clothing line of clubs competing in the top professional basketball tournament in Vietnam VBA.');
/*!40000 ALTER TABLE `typical_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_auth` int(11) NOT NULL DEFAULT 3,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `time_stamp` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_user`),
  KEY `id_auth with authorization` (`id_auth`),
  CONSTRAINT `id_auth with authorization` FOREIGN KEY (`id_auth`) REFERENCES `authorization` (`id_auth`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (15,1,'','ADMIN','',1,'','','admin','21232f297a57a5a743894a0e4a801fc3',1,'2022-10-03'),(23,2,'Hell','Hello','012345678',1,'minhtri192035@gmail.com','Da Nang','minhtri192035','d41d8cd98f00b204e9800998ecf8427e',1,'2022-10-18'),(24,3,'Tri','Pham','0394192310',0,'whoami3141592@gmail.com','','abcdef','e10adc3949ba59abbe56e057f20f883e',1,'2022-10-21'),(25,3,'Ha','Truong','0356351791',0,'ttthuha112@gmail.com','Trai Tim Toi','truongha','21232f297a57a5a743894a0e4a801fc3',1,'2022-10-22'),(27,1,'Bin','Bin','0394192310',1,'admin123@gmail.com','Hue','admin123','21232f297a57a5a743894a0e4a801fc3',1,'2022-10-22');
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

-- Dump completed on 2022-10-24 18:28:30

-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: bike_shop
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `bikes`
--

DROP TABLE IF EXISTS `bikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bikes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `wheel_size` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text,
  `frame` text,
  `frame_material` text,
  `tires` text,
  `shifters` text,
  `front_derail` text,
  `rear_derail` text,
  `cassete` text,
  `chain` text,
  `brake_set` text,
  `crank` text,
  `img_src` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `model_name` (`model_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bikes`
--

LOCK TABLES `bikes` WRITE;
/*!40000 ALTER TABLE `bikes` DISABLE KEYS */;
INSERT INTO `bikes` VALUES (1,'Kiez Flow','Bergamont','Dirt/Street',26,437,NULL,'26\" Dirt, 6061 alloy ultra strong tubing, T4/T6 heat treated, double butted, Kiez geometry',NULL,'Maxxis DTH, wired, 60-559\nTubes: Schwalbe SV13A Light 40/62-559','Shimano SL-M310, 3x8-speed, rapidfire plus-shifter','Shimano FD-M310, 34.9 mm clamp, top-swing, dual-pull','Shimano RD-M360, SGS','Sram CS PG-820, 8-speed, 11-32t','KMC CN-HG40, 8-speed','Tektro HD-M291, hydraulic disc brake, rotor: 160/160 mm','','bergamont_kiez_flow.png'),(2,'Voltage YZ','Scott','Dirt',27.5,574,NULL,'Voltage A-Frame 26\nHydroformed tubing\nSuper Stiff 6061 Alloy frame\nDisc Dropout, horizontal for 135x10mm singlespeed',NULL,'Schwalbe Table Top Performance\n67EPI / wire / 26x2.25',NULL,NULL,'Singlespeed','Sprocket / 12T','KMC Z510','Shimano BR-M396\nHydraulic Disc / 160mm Rotor','SCOTT Cr-Mo 3-piece cranks\n170mm / 25T Alloy BMX spro','scott_voltage_yz.jpg'),(3,'Hardy 5','Merida','Mountain',27,679,NULL,'Hardy Comp-D',NULL,'Merida Trail 2.25','Shimano Altus 3s / Shimano Altus 8s','Shimano M310','Shimano Altus',NULL,'','Tektro HDC Hydraulic Disc 160 mm',NULL,'merida_hardy_5.jpg'),(4,'Marlin 6','Trek','Mountain',29,580,NULL,'Alpha Silver Aluminum w/semi-integrated head tube, rack & fender mounts, G2 Geometry on 29ers',NULL,'Bontrager XR2, 29x2.20\" front, 29x2.00\" rear (13.5 & 15.5: 27.5x2.20\")','Shimano Altus M310, 8 speed','\nShimano Tourney TY700','Shimano Tourney TX800','Shimano HG20, 12-32, 8 speed','KMC Z7',NULL,'Shimano Tourney TY501, 42/34/24','trek_marlin_6.jpg'),(5,'Top Fuel 9.9','Trek','Fullsuspension',29,8500,NULL,'OCLV Mountain Carbon main frame & stays, ABP, Full Floater, EVO link, E2 tapered head tube, Mino Link, MicroTruss, Control Freak internal routing, Carbon Armor, PF92, Boost148 & G2 Geometry on 29ers, 100mm travel',NULL,'Bontrager XR1 Team Issue, Tubeless Ready, Inner Strength sidewalls, 120 tpi, aramid bead, 29x2.20\" (15.5: 27.5x2.20\")','SRAM XX1 Eagle, 12 speed','Singlespeed','SRAM XX1 Eagle, Roller Bearing Clutch','SRAM XG-1295, 10-50, 12 speed','\nSRAM XX1 Eagle','\nSRAM Level Ultimate carbon hydraulic disc','SRAM XX1 Eagle, 34T Direct Mount X-Sync','trek_TOP_FUEL_9_9_RSL.jpg'),(7,'Fat CAAD 2','Cannondale','fat',26,2000,NULL,'Fat CAAD, SmartFormed Alloy, BB30XL, 1.5 Si head tube',NULL,'Schwalbe Jumbo Jim 26x4.8\", Snakeskin, tubeless','SRAM X5','SRAM X5','SRAM X7','Sram CS PG-820, 8-speed, 11-32t','KMC X10, 10-speed','SRAM Guide hydraulic disc, 180/160mm','Cannondale Si, BB30a, Ai Offset Spider, 34/22','cannondale_fat_caad_2.jpg');
/*!40000 ALTER TABLE `bikes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (5,'letr','letr@email','Greetings!','Hello my friend!');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-24 21:02:07

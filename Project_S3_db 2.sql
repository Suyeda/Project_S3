-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: Project_S3_db
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(45) DEFAULT NULL,
  `quote` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` VALUES (1,'Sean Suyeda','You have to risk it to get the biscuit'),(2,'Sean Smith','Why are buildings called buildings when they\'re already built?'),(3,'Bruce Lee','I fear not the man who has practiced 10,000 kicks once, but I fear the man who has practiced one kick 10,000 times.'),(4,'Napoleon Bonaparte','You must not fight too often with one enemy, or you will teach him all your art of war.'),(5,'Morpheus','Sooner or later you\'re gonna realize, just like I did... There\'s a difference between knowing the path and walking the path.'),(6,'Walter Bagehot','The greatest pleasure in life is doing what people say you cannot do.'),(7,'Silver Linings Playbook','You have to do everything you can. You have to work your hardest and if you stay positive. You have a shot at a silver lining.'),(8,'Yoda','Do... or do not... There is no try.'),(9,'The Imitation Game','Sometimes it is the people no one imagines anything of who do the things that no one can imagine.'),(10,'Matt Gibbons','It\'s not about how much lube you use... It\'s how you use it...'),(11,'Kevin Fitzhenry','Never trust a guy with two first names.');
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `team_wins` int(11) DEFAULT NULL,
  `team_gp` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Legendary Leviathans',0,0,1,'0000-00-00 00:00:00'),(2,'Boundless Ambition',0,0,1,'0000-00-00 00:00:00'),(3,'Hand of God',0,0,1,'0000-00-00 00:00:00'),(4,'Journey\'s End',0,0,1,'0000-00-00 00:00:00'),(5,'Betrayers of Humanity',0,0,1,'0000-00-00 00:00:00'),(6,'Sinister\'s Revenge',0,0,1,'0000-00-00 00:00:00'),(7,'Immortals',99,99,1,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `wins` int(11) DEFAULT NULL,
  `gp` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `teams_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_teams_idx` (`teams_id`),
  CONSTRAINT `fk_users_teams` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sean','Suyeda','seansuyeda@gmail.com','MrSuyeda','12345',0,0,'Admin','0000-00-00 00:00:00',7),(2,'Sean','Smith','rictor.smith@gmail.com','Rictor','12345',0,0,'Admin','0000-00-00 00:00:00',7),(3,'Stephen','Muscarella','smuscarella9@gmail.com','DGmenace','12345',0,0,'Admin','0000-00-00 00:00:00',7),(4,'Chris','Sato','chrissato@gmail.com','Ichiban','12345',0,0,'Normal','0000-00-00 00:00:00',1),(5,'Brian','Kudo','briankudo@hotmail.com','SpicyRamen','12345',0,0,'Normal','0000-00-00 00:00:00',2),(6,'Jennifer','Takahashi','jentaka@yahoo.com','Abunai','12345',0,0,'Normal','0000-00-00 00:00:00',3),(7,'Doug','Rossi','dougrossi@gmail.com','Veloce','12345',0,0,'Normal','0000-00-00 00:00:00',4),(8,'Anna','Ferrari','annafer@hotmail.com','Azzurro','12345',0,0,'Normal','0000-00-00 00:00:00',5),(9,'Tyler','Romano','tyler6@aol.com','Giovane','12345',0,0,'Normal','0000-00-00 00:00:00',6);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-28 18:47:48

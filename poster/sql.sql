/*
SQLyog Ultimate v11.21 (64 bit)
MySQL - 5.6.31 : Database - eventakakom
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`eventakakom` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `eventakakom`;

/*Table structure for table `event_event` */

DROP TABLE IF EXISTS `event_event`;

CREATE TABLE `event_event` (
  `id_event` bigint(50) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(50) DEFAULT NULL,
  `name_event` varchar(255) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `pembicara` varchar(100) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `durasi_hari` int(11) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `deskripsi_acara` text,
  `jumlah_tiket` int(11) DEFAULT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `create_at` datetime DEFAULT '0000-00-00 00:00:00',
  `update_at` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `event_event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `event_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `event_event` */

insert  into `event_event`(`id_event`,`id_user`,`name_event`,`lokasi`,`pembicara`,`tanggal_mulai`,`durasi_hari`,`jam_mulai`,`jam_selesai`,`deskripsi_acara`,`jumlah_tiket`,`poster`,`status`,`create_at`,`update_at`) values (72,13,'Dota','Baciro','Heru S.kom','2018-04-22',3,'07:00:00','06:00:00','okay',50,'d7569590229aa7ad0e962ebcdc2cc7da.png',1,'2018-04-22 01:29:54','2018-04-22 02:45:45'),(73,13,'Dota','Baciro','Heru S.kom','2018-04-22',3,'12:05:00','01:00:00','gdsfafdsaf',12,'d8c477a8e17d0191ab79195c0c4ea61e.png',1,'2018-04-22 20:00:34','2018-05-10 14:01:38'),(74,13,'PUBG','YK','YK','2018-05-10',3,'12:00:00','01:59:00','fdfds',100,'1d17b1cec46cfe3c0f6fd3bbc4d8a30a.png',1,'0000-00-00 00:00:00','2018-05-10 14:04:03'),(76,13,'PUBG 2','Baciro','Heru S.kom','2018-05-10',3,'12:05:00','12:00:00','e',100,'3dedf9b91af2db9a432fdf86d325e18d.png',1,'2018-05-10 13:19:23','2018-05-10 14:01:30'),(77,13,'Sw','Yogyakarta','Heru S.kom','2018-05-10',3,'01:00:00','06:00:00','Acara perpisahan',100,'77544f70979b375700862e46bf7f0068.png',1,'2018-05-10 13:46:08','2018-05-10 14:03:20'),(78,13,'PUBG 2','Yogyakarta','Heru S.kom','2018-05-11',1,'12:05:00','12:05:00','gfsdg',100,'d0bd33087998310edb015053f695bb9d.png',1,'2018-05-10 14:02:15','2018-05-10 14:03:08');

/*Table structure for table `event_participant` */

DROP TABLE IF EXISTS `event_participant`;

CREATE TABLE `event_participant` (
  `id_participant` bigint(50) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(50) DEFAULT NULL,
  `id_event` bigint(50) DEFAULT NULL,
  `participant_name` varchar(25) DEFAULT NULL,
  `participant_address` varchar(50) DEFAULT NULL,
  `participant_instansi` varchar(50) DEFAULT NULL,
  `particioant_etc` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_participant`),
  KEY `id_user` (`id_user`),
  KEY `id_event` (`id_event`),
  CONSTRAINT `event_participant_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event_event` (`id_event`),
  CONSTRAINT `event_participant_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `event_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `event_participant` */

insert  into `event_participant`(`id_participant`,`id_user`,`id_event`,`participant_name`,`participant_address`,`participant_instansi`,`particioant_etc`,`create_at`,`update_at`) values (1,14,72,NULL,NULL,NULL,NULL,'2018-04-22 17:05:08','2018-04-28 11:38:36'),(4,14,72,NULL,NULL,NULL,NULL,'2018-04-22 20:36:32','2018-04-28 11:38:36'),(5,14,72,NULL,NULL,NULL,NULL,'2018-04-22 20:36:45','2018-04-28 11:38:36'),(6,14,73,NULL,NULL,NULL,NULL,'2018-04-22 21:31:47','2018-04-28 11:38:36'),(7,14,73,NULL,NULL,NULL,NULL,'2018-04-22 22:10:27','2018-04-28 11:38:36'),(8,14,73,NULL,NULL,NULL,NULL,'2018-04-22 22:18:31','2018-04-28 11:38:36'),(9,17,73,NULL,NULL,NULL,NULL,'2018-04-28 15:18:00','2018-04-28 15:18:00'),(10,14,72,NULL,NULL,NULL,NULL,'2018-05-01 11:36:19','2018-05-01 11:36:19'),(11,14,72,NULL,NULL,NULL,NULL,'2018-05-01 11:39:22','2018-05-01 11:39:22'),(12,14,72,NULL,NULL,NULL,NULL,'2018-05-01 11:43:16','2018-05-01 11:43:16'),(13,14,72,NULL,NULL,NULL,NULL,'2018-05-01 11:43:19','2018-05-01 11:43:19'),(14,14,72,NULL,NULL,NULL,NULL,'2018-05-01 11:43:23','2018-05-01 11:43:23'),(15,14,74,NULL,NULL,NULL,NULL,'2018-05-02 00:28:48','2018-05-02 00:28:48'),(16,18,73,NULL,NULL,NULL,NULL,'2018-05-02 00:34:40','2018-05-02 00:34:40'),(17,13,73,NULL,NULL,NULL,NULL,'2018-05-02 00:36:59','2018-05-02 00:36:59'),(18,19,73,NULL,NULL,NULL,NULL,'2018-05-02 00:42:45','2018-05-02 00:42:45');

/*Table structure for table `event_users` */

DROP TABLE IF EXISTS `event_users`;

CREATE TABLE `event_users` (
  `id_user` bigint(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` blob,
  `name` varchar(100) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `jenis_kelamin` int(1) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `event_users` */

insert  into `event_users`(`id_user`,`username`,`password`,`name`,`level`,`address`,`jenis_kelamin`,`instansi`,`email`,`create_at`,`updated_at`) values (11,'user','ee11cbb19052e40b07aac0ca060c23ee','user','1',NULL,NULL,'user','user@gmail.com','2018-04-22 19:59:27','0000-00-00 00:00:00'),(13,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator','0',NULL,NULL,'admin','admin@admin.com','2018-04-22 02:01:11','2018-04-22 01:03:45'),(14,'syardi','3171638719ce6454e4cbfba7ab4320cd','Syardi BHJ','2',NULL,NULL,'UNY','admin@admin.com','2018-04-22 01:32:08','0000-00-00 00:00:00'),(15,'darto','aa61bd7c25366dd6a5e71d2d311d84f2','Darto','2',NULL,NULL,'','admin@darto.com','2018-04-28 11:52:34','0000-00-00 00:00:00'),(16,'paijo','21232f297a57a5a743894a0e4a801fc3',NULL,NULL,NULL,NULL,NULL,'paijo@gmail.com','0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,'budi','21232f297a57a5a743894a0e4a801fc3','Budi Andul','2','Yogyajarta',0,'fsafaf','admin@gmail.com','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'bujang','762a7b2c568e69152fdb6313f8a62f74','Bujang','2',NULL,NULL,'UGM','admin@gmail.com','2018-05-02 00:33:59','0000-00-00 00:00:00'),(19,'yogi','938e14c074c45c62eb15cc05a6f36d79','Yogi','2','Yogyakarta',0,'a','yogi@gmail.com','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

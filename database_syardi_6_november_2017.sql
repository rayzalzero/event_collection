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
  `create_at` datetime DEFAULT '0000-00-00 00:00:00',
  `update_at` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `event_event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `event_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `event_event` */

insert  into `event_event`(`id_event`,`id_user`,`name_event`,`lokasi`,`pembicara`,`tanggal_mulai`,`durasi_hari`,`jam_mulai`,`jam_selesai`,`deskripsi_acara`,`jumlah_tiket`,`poster`,`create_at`,`update_at`) values (69,11,'Event HMJSI','STMIK AKAKOM Yogyakarta','Naufal Riza Fatahillah','1970-01-01',1,'08:00:00','08:00:00','Acara User',100,'51abcafb4b60e89eb194bf628d36d2ad.jpg','2017-11-11 01:04:47','0000-00-00 00:00:00'),(70,13,'Event','Yogyakarta','Naufal Riza Fatahillah','1970-01-01',1,'08:00:00','08:00:00','Acara Umum',100,'5e84750f298afd0108329cee0a44e16a.jpg','2017-11-11 01:06:27','0000-00-00 00:00:00');

/*Table structure for table `event_participant` */

DROP TABLE IF EXISTS `event_participant`;

CREATE TABLE `event_participant` (
  `id_participant` bigint(50) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(50) DEFAULT NULL,
  `id_event` bigint(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_participant`),
  KEY `id_user` (`id_user`),
  KEY `id_event` (`id_event`),
  CONSTRAINT `event_participant_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event_event` (`id_event`),
  CONSTRAINT `event_participant_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `event_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `event_participant` */

/*Table structure for table `event_users` */

DROP TABLE IF EXISTS `event_users`;

CREATE TABLE `event_users` (
  `id_user` bigint(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` blob,
  `name` varchar(100) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `event_users` */

insert  into `event_users`(`id_user`,`username`,`password`,`name`,`level`,`instansi`,`email`,`create_at`,`updated_at`) values (11,'user','ee11cbb19052e40b07aac0ca060c23ee','user','2','user','user@gmail.com','2017-11-07 20:44:26','0000-00-00 00:00:00'),(13,'admin','21232f297a57a5a743894a0e4a801fc3','admin','0','admin','admin@admin.com','2017-11-01 10:26:47','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

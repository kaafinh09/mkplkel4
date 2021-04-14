/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.4.17-MariaDB : Database - tugasmkpl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tugasmkpl` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tugasmkpl`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(128) DEFAULT NULL,
  `pengarang` varchar(128) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `penerbit` varchar(128) DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `buku` */

insert  into `buku`(`id`,`judul`,`pengarang`,`tahun`,`penerbit`,`stok`) values 
(1,'membuat web sederhana','lord',2020,'ades',20),
(2,'cara servis laptop','leo',2013,'mihoyo',90);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 5.7.38-log : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `test`;

/*Table structure for table `korisnik` */

DROP TABLE IF EXISTS `korisnik`;

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(32) COLLATE utf8_croatian_ci DEFAULT NULL,
  `prezime` varchar(32) COLLATE utf8_croatian_ci DEFAULT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8_croatian_ci DEFAULT NULL,
  `lozinka` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `razina` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

/*Data for the table `korisnik` */

/*Table structure for table `pwa_projekt` */

DROP TABLE IF EXISTS `pwa_projekt`;

CREATE TABLE `pwa_projekt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `sazetak` text COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pwa_projekt` */

insert  into `pwa_projekt`(`id`,`datum`,`naslov`,`sazetak`,`tekst`,`slika`,`kategorija`,`arhiva`) values 
(3,'12-01-2021','Vijest 3 ovo je naslov vijesti 3','ovo je sazetak vijesti 3 vijest 3\r\n','ovo je sadrzaj vijest 3 vijest 3 vijest 3 sadrzaj\r\novo je sadrzaj vijest 3 vijest 3 vijest 3 sadrzajovo je sadrzaj vijest 2 vijest 2 vijest 2 sadrzaj\r\novo je sadrzaj vijest 3 vijest 3 ','tin_decko_fin.jpg','kultura',0),
(4,'12-12-2021','Vijest 1 ovo sport1je naslov vijesti 1','ovo je tekst sazetak vijesti 1','ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ','tin_decko_fin.jpg','sport',0),
(5,'12-12-2021','Vijest 1 ovo sport2 je naslov vijesti 1','ovo je tekst sazetak vijesti 1','ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ','tin_decko_fin.jpg','sport',0),
(6,'12-12-2021','Vijest 1 ovo je naslov vijesti 1','ovo je tekst sazetak vijesti 1','ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 \r\novo je sadrzaj vijesti 1 ovo je sadrzaj vijesti 1 ','tin_decko_fin.jpg','sport',0),
(8,'19.06.2022.','naslov kroz unos1','we4rt34r ef 354 tg fv 3543t','45tzt gv e45trgvf s5 etrhb  ds jthgf sdh vdsrz wrsgdfg stdgfh sfdsg fsdfg sfg ertgw 45z6 4tgf 45z tgfw 5eztsgfg zwsetgr far4 354rv','tin_decko_fin.jpg','sport',0),
(10,'19.06.2022.','453 4t435rtrdsfg gsdfgr','gsdfg eg sdfg sdfg sdfgs fgsdfg','stg rt rstgd fcg w54ertgdfxc er5tdgf vw4et srdgxfv','tin_decko_fin.jpg','sport',0),
(13,'19.06.2022.','naslov','opis','hjrughkhdlk hfskldfhshdflhs ldfh lksjdhflkj hskldhf jlk','tin_decko_fin.jpg','sport',0),
(20,'19.06.2022.','d','','','tin_decko_fin.jpg','',0),
(21,'19.06.2022.','','','','tin_decko_fin.jpg','',0),
(22,'19.06.2022.','naslov s lsfdv dfs','saradtsgudhrkudhf sdf sd sd','etg fv wtgdfv wergdfv we4etrtez4ez 4w5twert w45t 54t rt  wtr 3w45w4w64256345234 24 234','tin_decko_fin.jpg','kultura',0),
(23,'19.06.2022.','t3w597ewtrug97e5wzt goh7i u','ffg ertgfgc 45ztret 5rertg ','4trwe5 rts347ztr734z t0874zr7t32z047fz20378rz 20487fgedizug394tgrfhzeg9836 gz 4frv ','tin_decko_fin.jpg','kultura',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

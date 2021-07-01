/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - koperasi_abm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`koperasi_abm` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `koperasi_abm`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_rek` int(20) NOT NULL,
  `nama_anggota` varchar(20) DEFAULT NULL,
  `telepon` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


/*Table structure for table `angsuran` */

DROP TABLE IF EXISTS `angsuran`;

CREATE TABLE `angsuran` (
  `id_angsuran` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pinjaman` int(10) NOT NULL,
  `jumlah_angsuran` int(20) NOT NULL,
  `sisa_pinjaman` int(20) NOT NULL,
  PRIMARY KEY (`id_angsuran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `detail` */

DROP TABLE IF EXISTS `detail`;

CREATE TABLE `detail` (
  `id_detail` varchar(20) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_tabungan` varchar(20) NOT NULL,
  `jumlah` int(50) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `pinjaman` */

DROP TABLE IF EXISTS `pinjaman`;

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(20) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(10) NOT NULL,
  `jumlah_pinjaman` int(20) NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_selesai` date NOT NULL,
  `jangka_waktu` varchar(20) NOT NULL,
  `bunga` int(20) NOT NULL,
  `jumlah_bayar` int(20) NOT NULL,
  `status` enum('LUNAS','BELUM LUNAS') NOT NULL DEFAULT 'BELUM LUNAS',
  PRIMARY KEY (`id_pinjaman`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `tabungan` */

DROP TABLE IF EXISTS `tabungan`;

CREATE TABLE `tabungan` (
  `id_tabungan` int(20) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(10) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL,
  `saldo_awal` int(50) NOT NULL,
  PRIMARY KEY (`id_tabungan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level_user` int(11) NOT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`kode_user`,`username`,`password`,`level_user`) values 
(1,'admin','admin',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

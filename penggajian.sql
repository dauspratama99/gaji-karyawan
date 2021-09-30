/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.8-log : Database - penggajian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`penggajian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `penggajian`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kodebarang` char(7) NOT NULL,
  `namabarang` varchar(100) DEFAULT NULL,
  `typebarang` varchar(100) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`kodebarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`kodebarang`,`namabarang`,`typebarang`,`stok`) values ('KBR-001','ONT','A1360',57);

/*Table structure for table `barangmasuk` */

DROP TABLE IF EXISTS `barangmasuk`;

CREATE TABLE `barangmasuk` (
  `idmasuk` char(7) NOT NULL,
  `tanggalmasuk` date DEFAULT NULL,
  PRIMARY KEY (`idmasuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barangmasuk` */

insert  into `barangmasuk`(`idmasuk`,`tanggalmasuk`) values ('M001','2019-06-01');

/*Table structure for table `barangmasuk_detail` */

DROP TABLE IF EXISTS `barangmasuk_detail`;

CREATE TABLE `barangmasuk_detail` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_idmasuk` char(7) DEFAULT NULL,
  `d_barang` char(7) DEFAULT NULL,
  `d_jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `d_idmasuk` (`d_idmasuk`),
  CONSTRAINT `barangmasuk_detail_ibfk_1` FOREIGN KEY (`d_idmasuk`) REFERENCES `barangmasuk` (`idmasuk`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `barangmasuk_detail` */

insert  into `barangmasuk_detail`(`d_id`,`d_idmasuk`,`d_barang`,`d_jumlah`) values (1,'M001','KBR-001',10);

/*Table structure for table `gaji` */

DROP TABLE IF EXISTS `gaji`;

CREATE TABLE `gaji` (
  `idgaji` char(7) NOT NULL,
  `tgl` date DEFAULT NULL,
  `kdkaryawan` char(7) DEFAULT NULL,
  `jumlahpemasangan` int(11) DEFAULT NULL,
  PRIMARY KEY (`idgaji`),
  KEY `kdkaryawan` (`kdkaryawan`),
  CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`kdkaryawan`) REFERENCES `karyawan` (`kodekaryawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gaji` */

insert  into `gaji`(`idgaji`,`tgl`,`kdkaryawan`,`jumlahpemasangan`) values ('GJ-001','2019-06-01','KRY-001',1),('GJ-002','2019-07-01','KRY-002',1);

/*Table structure for table `gaji1` */

DROP TABLE IF EXISTS `gaji1`;

CREATE TABLE `gaji1` (
  `idgaji` char(7) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kdkaryawan` char(7) DEFAULT NULL,
  PRIMARY KEY (`idgaji`),
  KEY `kdkaryawan` (`kdkaryawan`),
  CONSTRAINT `gaji1_ibfk_1` FOREIGN KEY (`kdkaryawan`) REFERENCES `karyawan` (`kodekaryawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gaji1` */

/*Table structure for table `gaji_detail` */

DROP TABLE IF EXISTS `gaji_detail`;

CREATE TABLE `gaji_detail` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_idgaji` char(7) DEFAULT NULL,
  `d_karyawan` char(7) DEFAULT NULL,
  `d_jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `d_karyawan` (`d_karyawan`),
  KEY `d_idgaji` (`d_idgaji`),
  CONSTRAINT `gaji_detail_ibfk_1` FOREIGN KEY (`d_idgaji`) REFERENCES `gaji` (`idgaji`),
  CONSTRAINT `gaji_detail_ibfk_2` FOREIGN KEY (`d_idgaji`) REFERENCES `gaji1` (`idgaji`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gaji_detail` */

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `kodejabatan` char(7) NOT NULL,
  `namajabatan` varchar(100) DEFAULT NULL,
  `gajipokok` double DEFAULT NULL,
  `tunjanganjabatan` double DEFAULT NULL,
  PRIMARY KEY (`kodejabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jabatan` */

insert  into `jabatan`(`kodejabatan`,`namajabatan`,`gajipokok`,`tunjanganjabatan`) values ('JB-001','TEKNISI',0,0),('JB-002','ADM',200000,2000000),('JB-003','hepldesk',2000000,200000),('JB-004','DIREKTUR',500000,3000000);

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `kodekaryawan` char(7) NOT NULL,
  `namakaryawan` varchar(50) DEFAULT NULL,
  `kd_jabatan` char(7) DEFAULT NULL,
  `jeniskelamin` varchar(20) DEFAULT NULL,
  `alamat` char(50) DEFAULT NULL,
  `nohp` char(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jumlahpemasangan` int(11) DEFAULT NULL,
  PRIMARY KEY (`kodekaryawan`),
  KEY `kd_jabatan` (`kd_jabatan`),
  CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`kd_jabatan`) REFERENCES `jabatan` (`kodejabatan`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `karyawan` */

insert  into `karyawan`(`kodekaryawan`,`namakaryawan`,`kd_jabatan`,`jeniskelamin`,`alamat`,`nohp`,`email`,`jumlahpemasangan`) values ('KRY-001','FARID MIDO FRANSISKO','JB-001','Laki-Laki','BATUSANGKAR','081209876543','farid@gmail.com',0),('KRY-002','REZA GUNAWAN','JB-001','Laki-Laki','BAGAN BATU','081309123454','reza123@gmail.com',0);

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `kodepelanggan` char(7) NOT NULL,
  `tanggalorder` date DEFAULT NULL,
  `namapelanggan` varchar(100) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` char(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kodepelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`kodepelanggan`,`tanggalorder`,`namapelanggan`,`alamat`,`nohp`,`email`) values ('PL-001','2019-06-01','MEGA','LUBUK BASUNG','082376545676','mega@yahoo.com'),('PL-002','2019-06-19','WENI','PADANG','082376545676','Weni@yahoo.com');

/*Table structure for table `pemasangan` */

DROP TABLE IF EXISTS `pemasangan`;

CREATE TABLE `pemasangan` (
  `kodepemasangan` char(7) NOT NULL,
  `tanggalpasang` date DEFAULT NULL,
  `kdkaryawan` char(7) DEFAULT NULL,
  `jumlahpasang` int(11) DEFAULT NULL,
  `kdpelanggan` char(7) DEFAULT NULL,
  `nointernet` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kodepemasangan`),
  KEY `kdkaryawan` (`kdkaryawan`),
  KEY `kdpelanggan` (`kdpelanggan`),
  CONSTRAINT `pemasangan_ibfk_1` FOREIGN KEY (`kdkaryawan`) REFERENCES `karyawan` (`kodekaryawan`) ON UPDATE CASCADE,
  CONSTRAINT `pemasangan_ibfk_2` FOREIGN KEY (`kdpelanggan`) REFERENCES `pelanggan` (`kodepelanggan`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pemasangan` */

insert  into `pemasangan`(`kodepemasangan`,`tanggalpasang`,`kdkaryawan`,`jumlahpasang`,`kdpelanggan`,`nointernet`) values ('p-001','2019-06-01','KRY-001',1,'PL-001','130958923569'),('p-002','2019-07-01','KRY-002',1,'PL-002','069609');

/*Table structure for table `pemasangan_detail` */

DROP TABLE IF EXISTS `pemasangan_detail`;

CREATE TABLE `pemasangan_detail` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_kodepemasangan` char(7) DEFAULT NULL,
  `d_barang` char(7) DEFAULT NULL,
  `d_jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `d_kodepemasangan` (`d_kodepemasangan`),
  CONSTRAINT `pemasangan_detail_ibfk_1` FOREIGN KEY (`d_kodepemasangan`) REFERENCES `pemasangan` (`kodepemasangan`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pemasangan_detail` */

insert  into `pemasangan_detail`(`d_id`,`d_kodepemasangan`,`d_barang`,`d_jumlah`) values (1,'p-001','KBR-001',2),(2,'p-002','KBR-001',1);

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `kdbrg` char(7) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  KEY `kdbrg` (`kdbrg`),
  CONSTRAINT `temp_ibfk_1` FOREIGN KEY (`kdbrg`) REFERENCES `barang` (`kodebarang`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `temp` */

/*Table structure for table `tempbrgmasuk` */

DROP TABLE IF EXISTS `tempbrgmasuk`;

CREATE TABLE `tempbrgmasuk` (
  `bkodebarang` char(7) NOT NULL,
  `bjumlah` int(11) DEFAULT NULL,
  `bket` varchar(100) DEFAULT NULL,
  KEY `bkodebarang` (`bkodebarang`),
  CONSTRAINT `tempbrgmasuk_ibfk_1` FOREIGN KEY (`bkodebarang`) REFERENCES `barang` (`kodebarang`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tempbrgmasuk` */

/*Table structure for table `tempgaji` */

DROP TABLE IF EXISTS `tempgaji`;

CREATE TABLE `tempgaji` (
  `kode_karyawan` char(7) DEFAULT NULL,
  `jumlah_pemasangan` int(11) DEFAULT NULL,
  KEY `kode_karyawan` (`kode_karyawan`),
  CONSTRAINT `tempgaji_ibfk_1` FOREIGN KEY (`kode_karyawan`) REFERENCES `karyawan` (`kodekaryawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tempgaji` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `hakakses` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`user`,`password`,`hakakses`) values (1,'anggi','caf1a3dfb505ffed0d024130f58c5cfa','admin'),(2,'korlap','1d0e9f58e548654ed969da6e6e4380d1','korlap'),(3,'teknisi','e21394aaeee10f917f581054d24b031f','teknisi'),(4,'pimpinan','90973652b88fe07d05a4304f0a945de8','pimpinan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

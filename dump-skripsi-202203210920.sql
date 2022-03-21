-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: skripsi
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

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
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Operator','Siswa') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` VALUES (1,'disdik','50ac30d9f12601fd112aecbc560d1cea','Admin'),(15,'1000','a9b7ba70783b617e9998dc4dd82eb3c5','Operator'),(17,'2000','08f90c1a417155361a5c4b8d297e0d78','Operator'),(18,'2001','d0fb963ff976f9c37fc81fe03c21ea7b','Siswa'),(19,'2002','4ba29b9f9e5732ed33761840f4ba6c53','Siswa'),(20,'1001','b8c37e33defde51cf91e1e03e51657da','Siswa'),(21,'3000','e93028bdc1aacdfb3687181f2031765d','Operator'),(22,'4000','1bd69c7df3112fb9a584fbd9edfc6c90','Operator'),(23,'5000','a35fe7f7fe8217b4369a0af4244d1fca','Operator'),(24,'6000','a8c6dd982010fce8701ce1aef8a2d40a','Operator'),(25,'7000','708be71b9ab6e0a84252760579ade9f1','Operator'),(26,'8000','67ff32d40fb51f1a2fd2c4f1b1019785','Operator'),(27,'2003','a591024321c5e2bdbd23ed35f0574dde','Siswa'),(28,'2004','b8b4b727d6f5d1b61fff7be687f7970f','Siswa'),(29,'2005','d47268e9db2e9aa3827bba3afb7ff94a','Siswa'),(30,'2006','ea5a486c712a91e48443cd802642223d','Siswa'),(31,'2007','a00e5eb0973d24649a4a920fc53d9564','Siswa'),(32,'2008','ef8446f35513a8d6aa2308357a268a7e','Siswa');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` char(11) NOT NULL,
  `jabatan` enum('Ketua','Sekretaris','Anggota','Wakil Ketua') NOT NULL,
  `ideskul` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','Belum Verifikasi') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES (1,'2005','Sekretaris',6,'Tidak Aktif'),(2,'2003','Ketua',1,'Aktif'),(3,'2004','Anggota',1,'Tidak Aktif'),(4,'2002','Anggota',1,'Belum Verifikasi'),(5,'2001','Anggota',1,'Aktif'),(6,'2008','Anggota',5,'Aktif'),(7,'2003','Anggota',3,'Belum Verifikasi'),(8,'2007','Ketua',8,'Aktif');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judulberita` varchar(100) NOT NULL,
  `tanggalberita` date NOT NULL,
  `isiberita` longtext NOT NULL,
  `jeniskegiatan` enum('Sekolah','Ekstrakurikuler') NOT NULL,
  `idkegiatan` int(11) DEFAULT NULL,
  `npsn` char(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,'ini berita saudara','1998-10-24','<p>dwwdw<br></p>','Ekstrakurikuler',1,'2000'),(2,'tes','1998-10-24','<p>cc<br></p>','Sekolah',2000,'2000');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eskul`
--

DROP TABLE IF EXISTS `eskul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eskul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaeskul` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eskul`
--

LOCK TABLES `eskul` WRITE;
/*!40000 ALTER TABLE `eskul` DISABLE KEYS */;
INSERT INTO `eskul` VALUES (1,'Pramuka'),(2,'PMR'),(3,'Paskibra'),(4,'Memancing'),(5,'Memanah'),(6,'Basket'),(7,'Takraw'),(8,'Tinju');
/*!40000 ALTER TABLE `eskul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(100) NOT NULL,
  `jammulai` time NOT NULL,
  `jamselesai` time NOT NULL,
  `ideskul` int(11) NOT NULL,
  `npsn` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
INSERT INTO `jadwal` VALUES (3,'Senin','10:10:00','11:10:00',5,'2000'),(4,'Selasa','11:00:00','00:00:00',2,'1000'),(5,'Ju\'mat','14:00:00','15:00:00',1,'2000'),(6,'Senin','13:00:00','14:00:00',6,'2000'),(7,'Minggu','09:00:00','10:00:00',2,'2000'),(8,'Selasa','13:00:00','14:00:00',8,'2000'),(9,'Rabu','14:00:00','15:00:00',7,'2000'),(10,'Kamis','14:32:00','15:03:00',3,'2000'),(11,'Sabtu','10:10:00','08:00:00',1,'2000');
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namajurusan` varchar(100) NOT NULL,
  `npsn` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES (4,'Bahasa Arab','2020'),(5,'IPA','2000'),(6,'IPS','2000'),(7,'IPA','1000'),(8,'Teknik Komputer Jaringan','8000'),(9,'Multimedia','8000'),(10,'Tata Busana','8000'),(11,'Akutansi & Keuangan Lembaga','8000'),(12,'Otomatisasi & Tata Kelola Perkantoran','8000'),(13,'Program Keahnian Bisnis Daring & Pemasaran','8000'),(14,'Rekayasa Perangkat Lunak','8000'),(15,'Mesin Otomotif','8000');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(100) NOT NULL,
  `npsn` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (3,'1 A','2000'),(4,'2 A','2000'),(5,'1 B','2000'),(6,'Bunga A','1000'),(7,'Anggrek B','1000'),(8,'Anggrek C','1000'),(9,'Anggrek A','1000'),(10,'2 B','2000'),(11,'3 A','2000'),(12,'3 B','2000'),(13,'1 C','2000'),(14,'2 C','2000'),(15,'3 C','2000'),(16,'Kembang C','1000');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestasi`
--

DROP TABLE IF EXISTS `prestasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ideskul` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tingkat` enum('Nasional','Kabupaten','Provinsi','Kecamatan') NOT NULL,
  `namaprestasi` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `npsn` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestasi`
--

LOCK TABLES `prestasi` WRITE;
/*!40000 ALTER TABLE `prestasi` DISABLE KEYS */;
INSERT INTO `prestasi` VALUES (1,1,'2000-10-24','Nasional','LOMBA PRAMUKA','','2000'),(2,5,'2020-10-11','Kabupaten','LOMBA PERAHU KARET','','2000'),(3,2,'2009-02-24','Provinsi','LOMBA TINGKAT PROVINSI','JUARA 3','2000'),(4,5,'2010-11-11','Kecamatan','LOMBA','','2000'),(5,4,'2000-12-23','Provinsi','LOMBA TINGKAT PROVINSI','','2000'),(6,1,'2020-01-01','Provinsi','LOMBA PRAMUKA','JUARA 1','2000'),(7,3,'2022-03-29','Kabupaten','LOMBA ANTAR SEKOLAH','JUARAN 1','2000'),(8,8,'2021-06-06','Nasional','LOMBA PAPUA','','2000');
/*!40000 ALTER TABLE `prestasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sekolah`
--

DROP TABLE IF EXISTS `sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sekolah` (
  `npsn` char(9) NOT NULL,
  `namasekolah` varchar(100) NOT NULL,
  `alamatsekolah` text NOT NULL,
  `akreditasi` char(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','Belum Verifikasi') NOT NULL,
  `idakun` int(11) NOT NULL,
  `buktiakreditasi` varchar(255) NOT NULL,
  PRIMARY KEY (`npsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sekolah`
--

LOCK TABLES `sekolah` WRITE;
/*!40000 ALTER TABLE `sekolah` DISABLE KEYS */;
INSERT INTO `sekolah` VALUES ('1000','SMAN 1 Bati-Bati','Jl Bati-Bati','A','smabat@gmail.com','Aktif',15,'icons8-a-64.png'),('2000','SMAN 1 Batu Ampar','jl mana yok','A','2000@gmail.com','Aktif',17,'fragment-travis-scott-air-jordan-1-retro-high-DH3227-105-6-1.jpg'),('3000','SMA An-Najah Putra','desa bingkulu rt. 05 rw. 02','A','3000@gmail.com','Belum Verifikasi',21,'a7ceb72df37351f323c0860e4a141361329ca366_1080x10801.jpg'),('4000','SMA Negeri 1 Bajuin','jl. pdam rt/rw 009 / 001 desa bajuin kecamatan bajuin kabupaten tanah laut','B','4000@gmail.com','Tidak Aktif',22,'a7ceb72df37351f323c0860e4a141361329ca366_1080x10802.jpg'),('5000','SMA Negeri Bumi Makmur','jl. swadaya','A','5000@gmail.com','Belum Verifikasi',23,'a7ceb72df37351f323c0860e4a141361329ca366_1080x10803.jpg'),('6000','SMAN 2 Kintap','jl. ahmad yani km. 151 rt. 09/03','C','6000@gmail.com','Tidak Aktif',24,'a7ceb72df37351f323c0860e4a141361329ca366_1080x10804.jpg'),('7000','SMAS Dua Desember','jl. kampung kariup','A','7000@gmail.com','Belum Verifikasi',25,'a7ceb72df37351f323c0860e4a141361329ca366_1080x10805.jpg'),('8000','SMKN 1 Pelaihari','jl. gagas komplek perkantoran','A','8000@gmail.com','Aktif',26,'a7ceb72df37351f323c0860e4a141361329ca366_1080x10806.jpg');
/*!40000 ALTER TABLE `sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `nisn` char(11) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `npsn` char(9) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `idjurusan` int(11) NOT NULL,
  `idakun` int(11) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES ('1001','kurogiri','saja','1998-10-24','jl ekosistem','Laki-Laki','1000',8,7,20),('2001','Mabrur','Konoha','1998-10-11','jl manunggal','Laki-Laki','2000',5,5,18),('2002','julian','sunagakure','1998-10-24','jl isoman setiap hari','Laki-Laki','2000',5,5,19),('2003','Edward C Nolasco','Jawa Barat','1993-09-01','Jl Sukajadi 223, Jawa Barat','Laki-Laki','2000',5,5,27),('2004','Tirto Hadian Kurniawan','Jakarta','1980-08-04','Kompl Villa Japos Graha Lestari, Dki Jakarta','Laki-Laki','2000',10,6,28),('2005','Widya Widyawati Setiawan','Semarang','1989-03-09','Jl Industri XX 901 LIK Bugangan Baru,Muktiharjo','Perempuan','2000',12,5,29),('2006','Harta Sugiarto Tan','Dki Jakarta','1997-03-12','Jl Raya Bekasi Km 19/21, Dki Jakarta','Laki-Laki','2000',4,5,30),('2007','Guntur Cahya Kusnadi','Dki Jakarta','1997-03-07','Jl Boulevard Brt Raya Bl A-3/50, Dki Jakarta','Laki-Laki','2000',11,6,31),('2008','Bima Agung Tanudjaja','Sumatera Barat','1973-02-05','Jl Proklamasi 51, Sumatera Barat','Laki-Laki','2000',11,5,32);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'skripsi'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-21  9:20:20

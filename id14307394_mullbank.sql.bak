-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2020 at 10:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14307394_mullbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL,
  `jenis` text COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `jenis`, `harga`) VALUES
(1, 'Putihan', 1600),
(2, 'HVS', 1600),
(3, 'Koran', 1100),
(4, 'Majalah', 700),
(5, 'Buku', 1000),
(6, 'Kardus', 1400),
(7, 'Duplek', 400),
(8, 'Kabin', 1000),
(9, 'Botol Plastik', 3500),
(10, 'Gelas Aqua Kotor', 4000),
(11, 'Gelas Aqua Bersih', 6500),
(12, 'Plastik Bening', 3500),
(13, 'Plastik Keras', 1500),
(14, 'Gelas Kopi', 2000),
(15, 'Mainan', 1800),
(16, 'Plastik P.E', 1500),
(17, 'Drigen', 2000),
(18, 'Alumunium Kaleng', 11000),
(19, 'Alumunium Panci', 11000),
(20, 'Tembaga', 60000),
(21, 'Timah', 11000),
(22, 'Seng', 1000),
(23, 'Stainless', 2000),
(24, 'Besi', 1500),
(25, 'Kaleng', 750),
(26, 'Krompong', 750),
(27, 'Beling', 500),
(28, 'Kaca', 500),
(29, 'Sampah Lain', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(4) NOT NULL,
  `nama_bank_sampah` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `nama_bank_sampah`, `address`, `type`, `lat`, `lng`, `kecamatan`, `kelurahan`) VALUES
(1, 'SD SURAYA\r\n(Jl. Lorong 100 No.73, RT.5/RW.2, Koja, Kec.Koja, Kota Jkt Utara)', 'Jl. Lorong 100 No.73, RT.5/RW.2, Koja, Kec.Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220', 'unit', -6.112560, 106.894852, 'Koja', 'Koja'),
(2, 'SD STRADA SANTO FRANSISKUS XAVERIUS (Jl. Deli No.20, RT.11/RW.7, Koja, Kota Jkt  Utara,14220)', 'Jl. Deli No.20, RT.11/RW.7, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220', 'unit', -6.109533, 106.899567, 'Koja', 'Koja'),
(3, 'BINA PUSAKA (Jl. Lorong 100 No.70, RT.4/RW.10, Koja, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220)', 'Jl. Lorong 100 No.70, RT.4/RW.10, Koja,  Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220', 'unit', -6.112188, 106.894508, 'Koja', 'Koja'),
(4, 'Menara Orange (Jl. Sindang No.1, RT.5/RW.9, Koja, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220)', 'Jl. Sindang No.1, RT.5/RW.9, Koja, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220', 'unit', -6.112210, 106.897888, 'Koja', 'Koja'),
(5, 'Warga Rw. 09  (Jl. Sindang No.1, RT.5/RW.9, Koja, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220)\r\n', 'Jl. Sindang No.1, RT.5/RW.9, Koja, Kec. Koja, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14220', 'unit', -6.113119, 106.895515, 'Koja', 'Koja'),
(6, 'SMPN 173 (Jl. Alur Laut No. RT. 09/09)', 'Jl. Alur Laut No. 57 RT. 09/09', 'unit', -6.125819, 106.898849, 'Koja', 'Rawa Badak Utara'),
(7, 'SDN RAWABADAK UTARA 01 (Jl. Inspeksi Kali Sunter Rawabadak Utara)', 'Jl. Inspeksi Kali Sunter Rawabadak Utara', 'unit', -6.122686, 106.896187, 'Koja', 'Rawa Badak Utara'),
(8, 'SDN RAWABADAK UTARA 15 (Jl. Rawabadak Barat No.37, RT.5/RW.5, Rawabadak Utara, Koja, Kota Jkt Utara,  14230)', 'Jl. Rawabadak Barat No.37, RT.5/RW.5, Rawabadak Utara, Koja, Kota Jkt Utara,  14230', 'unit', -6.118672, 106.900673, 'Koja', 'Rawa Badak Utara'),
(9, 'SMK PERGURUAN CIKINI (Jl. Alur Laut Blok NN NO.7 Rawabadak Utara,  Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota)', 'Jl. Alur Laut Blok NN NO.7 Rawabadak Utara,  Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota', 'unit', -6.124121, 106.899162, 'Koja', 'Rawa Badak Utara'),
(10, 'SMPN 277 BRAVO (Jln. Inspeksi Kali Sunter Rawabadak Utara) ', 'Jln. Inspeksi Kali Sunter Rawabadak Utara', 'unit', -6.122686, 106.896187, 'Koja', 'Rawa Badak Utara'),
(11, 'SDN RAWA BADAK UTARA 19 (Jl. Rawabadak Barat No.37,RT.5/RW.5,Rawabadak Utara, Koja,Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Rawabadak Barat No.37,RT.5/RW.5, Rawabadak Utara, Koja, Kota Jkt Utara,Daerah Khusus Ibukota Jakarta', 'unit', -6.118937, 106.900497, 'Koja', 'Rawa Badak Utara'),
(12, 'SDN RAWA BADAK UTARA 07 (Jl. Rawabinangun III,RT.6/RW.9, Rawabadak Utara,Koja,Kota Jkt Utara, 14230)', 'Jl. Rawabinangun III, RT.6/RW.9, Rawabadak Utara, Koja, Kota Jkt Utara, 14230', 'unit', -6.117172, 106.898514, 'Koja', 'Rawa Badak Utara'),
(13, 'SDN RAWA BADAK UTARA 09 (Jl. Rawabinangun IV,RT.5/RW.8, Rawabadak Utara,Koja,Kota Jkt Utara, 14230)', 'Jl. Rawabinangun IV, RT.5/RW.8, Rawabadak Utara, Koja, Kota Jkt Utara, 14230', 'unit', -6.116181, 106.898163, 'Koja', 'Rawa Badak Utara'),
(14, 'SDN RAWA BADAK UTARA 03 (Jl. Alur Laut No.37,RT.1/RW.6, Rawabadak Utara,Koja,Kota Jkt Utara,14230)', 'Jl. Alur Laut No.37, RT.1/RW.6, Rawabadak Utara, Koja, Kota Jkt Utara, 14230', 'unit', -6.118506, 106.898849, 'Koja', 'Rawa Badak Utara'),
(15, 'SMPN 30 JAKARTA (Jalan Anggrek No.4, RT.2/RW.12, Rawabadak Utara, Koja, Kota Jkt Utara,14230)', 'Jalan Anggrek No.4, RT.2/RW.12, Rawabadak Utara, Koja, Kota Jkt Utara,14230', 'unit', -6.115505, 106.893974, 'Koja', 'Rawa Badak Utara'),
(16, 'BAROKAH (Jl. Alur Laut Utara No.1)', 'Jl. Alur Laut Utara No.1 ', 'unit', -6.119148, 106.898766, 'Koja', 'Rawa Badak Utara'),
(17, 'Flamboyan (Jl. K2 RT.009/05)', 'Jl. K2 RT.009/05', 'unit', -6.127226, 106.898293, 'Koja', 'Rawa Badak Selatan'),
(18, 'MANDIRI (RT. 04 RW. 06 Kel. Rawabadak Selatan)', 'RT. 04 RW. 06 Kel. Rawabadak Selatan', 'unit', -6.126874, 106.899353, 'Koja', 'Rawa Badak Selatan'),
(19, 'BANK SAMPAH INDUK (suku dinas lingkungan hidup jakarta utara, RT.3/RW.6, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230, Indonesia)', 'suku dinas lingkungan hidup jakarta utara, RT.3/RW.6, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230, Indonesia', 'induk', -6.122531, 106.899178, 'Koja', 'Rawa Badak Selatan'),
(20, 'SDN Rawabadak Selatan 01 (Jl. Kemudi No.1, RT.5/RW.7, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Kemudi No.1, RT.5/RW.7, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.124902, 106.902710, 'Koja', 'Rawa Badak Selatan'),
(21, 'SDN Rawa Badak Selatan 09 (Jl. Mundari No.15, RT.2/RW.1, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Mundari No.15, RT.2/RW.1, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.132225, 106.902809, 'Koja', 'Rawa Badak Selatan'),
(22, 'SDN Rawabadak Selatan 05 (Jl. Alur Laut, Jl. Patimura No.45, RT.7/RW.3, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230)', 'Jl. Alur Laut, Jl. Patimura No.45, RT.7/RW.3, Rawabadak Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230', 'unit', -6.127521, 106.900543, 'Koja', 'Rawa Badak Selatan'),
(23, 'Happy (Jl. Alur Laut No. 1 Rawabadak Selatan Koja 6 3, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Alur Laut No. 1 Rawabadak Selatan Koja 6 3, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.128186, 106.899200, 'Koja', 'Rawa Badak Selatan'),
(24, 'SDN Rawa Badak Selatan 07 (Jl.Mundari No.15 Rt.2 Rw. 1 Kel Rawa Badak Selatan Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota)', 'Jl.Mundari No.15 Rt.2 Rw. 1 Kel Rawa Badak Selatan Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota', 'unit', -6.117302, 106.898415, 'Koja', 'Rawa Badak Selatan'),
(25, 'SD Lentara Harapan (Jl. Bandar II No.12 Rt.6 Rw. 6 Kel. Rawa Badak Selatan Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Bandar II No.12 Rt.6 Rw. 6 Kel. Rawa Badak Selatan Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.126192, 106.899910, 'Koja', 'Rawa Badak Selatan'),
(26, 'SDN Rawa Badak 11 (Jl. Bendungan Melayu No., RT.4, RT.13/RW.1, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230)', 'Jl. Bendungan Melayu No., RT.4, RT.13/RW.1, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230', 'unit', -6.135522, 106.901245, 'Koja', 'Rawa Badak Selatan'),
(27, 'Masjid Al Mujahidin (Jl. H. Sarwono S.H No.19, RT.9/RW.8, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota)', 'Jl. H. Sarwono S.H No.19, RT.9/RW.8, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota', 'unit', -6.138001, 106.900398, 'Koja', 'Rawa Badak Selatan'),
(28, 'SMPN 151 Jakarta (Komplek Perumpel II, Jl. Kepil No.1, RT.5/RW.7, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230)', 'Komplek Perumpel II, Jl. Kepil No.1, RT.5/RW.7, Rawabadak Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230', 'unit', -6.125163, 106.900757, 'Koja', 'Rawa Badak Selatan'),
(29, 'GHALINIER (Kampung Tegal Kunir RT.002/013)', 'Kampung Tegal Kunir RT.002/013', 'unit', -6.131118, 106.917000, 'Koja', 'Tugu Utara'),
(30, 'ALAM SAHABAT KAMI SALIB SUCI (Jl. Raya Tugu N0.27 RT.02 RW.14 Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Raya Tugu N0.27 RT.02 RW.14 Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.124616, 106.916649, 'Koja', 'Tugu Utara'),
(31, 'PASAR KOJA BARU (Jl. Bhayangkara I )', 'Jl. Bhayangkara I ', 'unit', -6.121565, 106.914062, 'Koja', 'Tugu Utara'),
(32, 'SDN 15 TUGU UTARA (Jln. H. Darfi No. 36 Tugu Utara)', 'Jln. H. Darfi No. 36 Tugu Utara ', 'unit', -6.127271, 106.923126, 'Koja', 'Tugu Utara'),
(33, 'SDN TUGU UTARA 22 (Sekolah Dasar Negeri Tugu Utara 22, Jl. Kramat Jaya Raya Gg. VIII No.001, RW.18, RT.3/RW.14, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Sekolah Dasar Negeri Tugu Utara 22, Jl. Kramat Jaya Raya Gg. VIII No.001, RW.18, RT.3/RW.14, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.124235, 106.920578, 'Koja', 'Tugu Utara'),
(34, 'SDN TUGU UTARA 19 (Jl. Kramat Jaya Raya Blok R No.60, RT.1/RW.18, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jl. Kramat Jaya Raya Blok R No.60, RT.1/RW.18, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.119818, 106.919411, 'Koja', 'Tugu Utara'),
(35, 'SDN TUGU UTARA 17 (Jl. Kramat Jaya Raya Gg. VIII Blok R No.60, RT.1/RW.18, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jl. Kramat Jaya Raya Gg. VIII Blok R No.60, RT.1/RW.18, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.119774, 106.919312, 'Koja', 'Tugu Utara'),
(36, 'SDN TUGU UTARA 03 (Jl Mangga Ujung No.3, RT.3/RW.2, Tugu Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jl Mangga Ujung No.3, RT.3/RW.2, Tugu Sel., Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.124678, 106.910263, 'Koja', 'Tugu Utara'),
(37, 'SDN TUGU UTARA 01 (Jl. Mangga Ujung No.1D, RT.3/RW.2, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Mangga Ujung No.1D, RT.3/RW.2, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.124343, 106.910500, 'Koja', 'Tugu Utara'),
(38, 'SDN TUGU UTARA 05 (Jalan Mangga Ujung No. 2-3, RT.2/RW.2, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jalan Mangga Ujung No. 2-3, RT.2/RW.2, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.124670, 106.910645, 'Koja', 'Tugu Utara'),
(39, 'SDN TUGU UTARA 07 (Jalan Turi No.2, RT.3/RW.2, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jalan Turi No.2, RT.3/RW.2, Tugu Utara, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.124104, 106.910339, 'Koja', 'Tugu Utara'),
(40, 'SDN TUGU UTARA 13 (Jl. Kramat Jaya Raya Gg. VIII, RT.2/RW.18, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jl. Kramat Jaya Raya Gg. VIII, RT.2/RW.18, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.120624, 106.918526, 'Koja', 'Tugu Utara'),
(41, 'SMK SEJAHTERA (Jl. Walang Baru II No.19 Kel Tugu Utara Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Walang Baru II No.19 Kel Tugu Utara Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.123347, 106.904327, 'Koja', 'Tugu Utara'),
(42, 'SDN TUGU UTARA 09 (Jl. Komp. Uka No.8, RT.5/RW.8, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Komp. Uka No.8, RT.5/RW.8, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.124359, 106.911438, 'Koja', 'Tugu Utara'),
(43, 'SDN TUGU UTARA 11 (Jl. Komp. Uka No.8, RT.5/RW.8, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Komp. Uka No.8, RT.5/RW.8, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.124359, 106.911438, 'Koja', 'Tugu Utara'),
(44, 'HIDAYAH (Jl. Mahoni Selatan No.1 Rt.03 Rw.10 Kel.Tugu Utara Kec.Koja,Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jl. Mahoni Selatan No.1 Rt.03 Rw.10 Kel.Tugu Utara Kec.Koja,Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.122465, 106.911049, 'Koja', 'Tugu Utara'),
(45, 'SDN Tugu Utara 14 (Jl. Kramat Jaya Raya Gg. VIII, RT.2/RW.18, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14130)', 'Jl. Kramat Jaya Raya Gg. VIII, RT.2/RW.18, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14130', 'unit', -6.120159, 106.918503, 'Koja', 'Tugu Utara'),
(46, 'Yayasan Uswatun Hasanah (Jl. Mawar Luar  III)', 'Jl. Mawar Luar  III', 'unit', -6.119814, 106.903374, 'Koja', 'Tugu Utara'),
(47, 'SMAN 110 (Jln. Bendungan Melayu No. 80, Tugu Selatan, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)  ', 'Jln. Bendungan Melayu No. 80, Tugu Selatan, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.132659, 106.906815, 'Koja', 'Tugu Selatan'),
(48, 'SDN TUGU SELATAN 01 (Jl. Balai Rakyat Raya No.1, RT.1/RW.4, Tugu Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260) ', 'Jl. Balai Rakyat Raya No.1, RT.1/RW.4, Tugu Sel., Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.132749, 106.913971, 'Koja', 'Tugu Selatan'),
(49, 'SMPN 136 JAKARTA (Jl. Bendungan Melayu No.80, RT.8/RW.5, Tugu Sel., Koja, Kota Jkt Utara, 14260)', 'Jl. Bendungan Melayu No.80, RT.8/RW.5, Tugu Sel., Koja, Kota Jkt Utara,  14260', 'unit', -6.133476, 106.906868, 'Koja', 'Tugu Selatan'),
(50, 'SMPN 121 JAKARTA (Jl. Plumpang Semper, RT.1/RW.4, Tugu Selatan)', 'Jl. Plumpang Semper, RT.1/RW.4, Tugu Selatan ', 'unit', -6.133107, 106.913834, 'Koja', 'Tugu Selatan'),
(51, 'BERSAMA (BERKAH TUGU SELATAN) (Jl. Bendungan Melayu Utara No. 14 Rt.2 Rw. 2 Kel Tugu Selatan Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Bendungan Melayu Utara No. 14 Rt.2 Rw. 2 Kel Tugu Selatan Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.131224, 106.907967, 'Koja', 'Tugu Selatan'),
(52, 'MAJELIS TA\'LIM (Jl. Mangga No. 01)', 'Jl. Mangga No. 01', 'unit', -6.115756, 106.910858, 'Koja', 'Lagoa'),
(53, 'HATI SENANG (KANTOR SEKSI DINAS KEBERSIHAN Kec. Koja)', 'KANTOR SEKSI DINAS KEBERSIHAN Kec. Koja', 'unit', -6.117649, 106.910629, 'Koja', 'Lagoa'),
(54, 'SLTP 279 (Jl. Mahoni RT. 001/010) ', 'Jl. Mahoni RT. 001/010 ', 'unit', -6.116273, 106.913383, 'Koja', 'Lagoa'),
(55, 'SMA AL KHAIRIYAH (Jl. Mindi No. 01)', 'Jl. Mindi No. 01', 'unit', -6.115319, 106.910622, 'Koja', 'Lagoa'),
(56, 'KOLAM (Jl. Lagoa Terusan Gg.IVD RT.018/003)', 'Jl. Lagoa Terusan Gg.IVD RT.018/003', 'unit', -6.110757, 106.912086, 'Koja', 'Lagoa'),
(57, 'SDN 09 LAGOA (Jl. Lagoa Terusan Gg. 4 RT017/03)', 'Jl. Lagoa Terusan Gg. 4 RT017/03', 'unit', -6.110933, 106.913940, 'Koja', 'Lagoa'),
(58, 'SDN 11 LAGOA (Jl. Lagoa Terusan  Gg. 4 RT017/03)', 'Jl. Lagoa Terusan  Gg. 4 RT017/03', 'unit', -6.110890, 106.915764, 'Koja', 'Lagoa'),
(59, 'TERPADU (KANTOR KELURAHAN LAGOA, Jalan Mangga No.7, RT.016/RW.08, Lagoa, Koja, RT.7, Lagoa, Koja, Kota Jkt Utara, Jakarta 14270)', 'KANTOR KELURAHAN LAGOA, Jalan Mangga No.7, RT.016/RW.08, Lagoa, Koja, RT.7, Lagoa, Koja, Kota Jkt Utara, Jakarta 14270', 'unit', -6.159568, 106.675652, 'Koja', 'Lagoa'),
(60, 'SMPN 84 (Jl. Semangka No.1C, RT.1/RW.4, Lagoa, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260)', 'Jl. Semangka No.1C, RT.1/RW.4, Lagoa, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14260', 'unit', -6.115732, 106.911316, 'Koja', 'Lagoa'),
(61, 'SDN LAGOA 07 (Jl. Lagoa 4A No.6, RT.9/RW.4, Lagoa, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14270)', 'Jl. Lagoa 4A No.6, RT.9/RW.4, Lagoa, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14270', 'unit', -6.111125, 106.908791, 'Koja', 'Lagoa'),
(62, 'SDN LAGOA 01 (Jl. Menteng No.24, RT.1/RW.9, Lagoa, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Menteng No.24, RT.1/RW.9, Lagoa, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.112540, 106.911461, 'Koja', 'Lagoa'),
(63, 'SDN LAGOA 02 (Jl. Menteng No.24, RT.1/RW.9, Lagoa, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Menteng No.24, RT.1/RW.9, Lagoa, Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.112518, 106.911476, 'Koja', 'Lagoa'),
(64, 'SDN LAGOA 05 (Jl. Menteng No.24, RT.1/RW.9, Lagoa, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14270)', 'Jl. Menteng No.24, RT.1/RW.9, Lagoa, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14270', 'unit', -6.112540, 106.911461, 'Koja', 'Lagoa'),
(65, 'GADING BERSIH (Jl. Perintis Kemerdekaan RW. 005, Kelapa Gading Barat, Kec Kelapa Gading, Kota Jkt Utara)', 'Jl. Perintis Kemerdekaan RW. 005, Kelapa Gading Barat, Kec Kelapa Gading, Kota Jkt Utara ', 'unit', -6.158319, 106.884483, 'Kelapa Gading', 'Kelapa Gading Barat'),
(66, 'Teratai RW. 010 (Jl. Teluk Rantai I RT 001/010, Kelapa Gading Barat, Kec Kelapa Gading, Daerah Khusus Ibukota Jakarta 14240)', 'Jl. Teluk Rantai I RT 001/010, Kelapa Gading Barat, Kec Kelapa Gading, Daerah Khusus Ibukota Jakarta 14240', 'unit', -6.163272, 106.886475, 'Kelapa Gading', 'Kelapa Gading Barat'),
(67, 'BERKAT (Jl.Tabah 1 No.4, Kelapa Gading Barat, Kec Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta) ', 'Jl.Tabah 1 No.4, Kelapa Gading Barat, Kec Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta ', 'unit', -6.162623, 106.884666, 'Kelapa Gading', 'Kelapa Gading Barat'),
(68, 'SDN KELAPA GADING BARAT 01 (Jl. Pulau Temiang I 011/03 No. 45, Kelapa Gading Barat, Kec Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Pulau Temiang I 011/03 No. 45, Kelapa Gading Barat, Kec Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.160509, 106.891251, 'Kelapa Gading', 'Kelapa Gading Barat'),
(69, 'SMAN 72 (Jl. Prihatin No. 1 RT.08/02 Kelapa Gading Barat, Kec Kelapa Gading Barat, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl. Prihatin No. 1 RT.08/02 Kelapa Gading Barat, Kec Kelapa Gading Barat, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', 'unit', -6.163071, 106.884407, 'Kelapa Gading', 'Kelapa Gading Barat'),
(70, 'SMK PGRI 38 (Jl. Tabah I No.5 Komp. TNI AL)', 'Jl. Tabah I No.5 Komp. TNI AL', 'unit', -6.162700, 106.884964, 'Kelapa Gading', 'Kelapa Gading Barat'),
(71, 'SMA PGRI 12 (Jl. Tabah I No.5 Komp. TNI AL)', 'Jl. Tabah I No.5 Komp. TNI AL', 'unit', -6.158319, 106.884483, 'Kelapa Gading', 'Kelapa Gading Barat'),
(72, 'BERKAH ALAM SEMESTA (Jl. Pulo Bira Besar, RT.015 RW.003 Kelapa Gading Barat)', 'Jl. Pulo Bira Besar, RT.015 RW.003 Kelapa Gading Barat', 'unit', -6.156441, 106.893379, 'Kelapa Gading', 'Kelapa Gading Barat'),
(73, 'DIPO RW.005 (Jl. Perintis Kemerdekaan RW.005)', 'Jl. Perintis Kemerdekaan RW.005', 'unit', -6.158319, 106.884483, 'Kelapa Gading', 'Kelapa Gading Barat'),
(74, 'PPSU KELURAHAN KELAPA GADING TIMUR (Jl. Gading Elok Barat Blok DF NO.1)', 'Jl. Gading Elok Barat Blok DF NO.1', 'unit', -6.166992, 106.902611, 'Kelapa Gading', 'Kelapa Gading Timur'),
(75, 'WIJAYA KUSUMA (Jl. Dahlia Komplek Bermis RT.007 RW.003 Kelapa Gading Timur)', 'Jl. Dahlia Komplek Bermis RT.007 RW.003 Kelapa Gading Timur', 'unit', -6.177730, 106.899353, 'Kelapa Gading', 'Kelapa Gading Timur'),
(76, 'MERAH DELIMA (Jl.  Puskesmas RT 05/RW 06 Kelapa Gading Timur, Kec Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta)', 'Jl.  Puskesmas RT 05/RW 06 Kelapa Gading Timur, Kec Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta ', 'unit', -6.177565, 106.906059, 'Kelapa Gading', 'Kelapa Gading Timur'),
(77, 'MUDA MUDI RW. 004 KLP GADING TIMUR (Jl. Pejuang 2 Kelapa Gading Timur)', 'Jl. Pejuang 2 Kelapa Gading Timur', 'unit', -6.176977, 106.902061, 'Kelapa Gading', 'Kelapa Gading Timur'),
(78, 'SDN KELAPA GADING TIMUR 01 (Jl. Puskesmas No. 32 RT.06/06 Kelapa Gading Timur)', 'Jl. Puskesmas No. 32 RT.06/06 Kelapa Gading Timur', 'unit', -6.176249, 106.906425, 'Kelapa Gading', 'Kelapa Gading Timur '),
(79, 'DARLINK BERSERI (SDN KELAPA GADING TIMUR 03) (Komp. PT. HII No.134 Kelapa Gading Timur) ', 'Komp. PT. HII No.134 Kelapa Gading Timur ', 'unit', -6.175564, 106.905746, 'Kelapa Gading', 'Kelapa Gading Timur'),
(80, 'SHADOET BERSIH LESTARI (SMPN 123) (Jl. Kelapa Gading I No.6, RT.6/RW.6, Kelapa Gading Timur, Kec. Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240)', 'Jl. Kelapa Gading I No.6, RT.6/RW.6, Kelapa Gading Timur, Kec. Kelapa Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240', 'unit', -6.175019, 106.905914, 'Kelapa Gading', 'Kelapa Gading Timur'),
(81, 'SD TUNAS KARYA 1 (Jl.Gading Putih IV Rt.014 Rw.002,Kelapa Gading Timur, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl.Gading Putih IV Rt.014 Rw.002,Kelapa Gading Timur, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.170954, 106.901901, 'Kelapa Gading', 'Kelapa Gading Timur'),
(82, 'ORANGE TERPADU (Jl. Raya Kelapa Nias PA.3 No.8 RT.001/014, Pegangsaan, Kec. Kelap Gading, Kota Jkt Utara)', 'Jl. Raya Kelapa Nias PA.3 No.8 RT.001/014, Pegangsaan, Kec. Kelap Gading, Kota Jkt Utara', 'unit', -6.154173, 106.910652, 'Kelapa Gading', 'Pegangsaan'),
(83, 'UPS (Upaya Pemberdayaan Sampah)SDN PGD 01 (Jl. Kepu No.21 Kel. Pegangsaan Dua )', 'Jl. Kepu No.21 Kel. Pegangsaan Dua ', 'unit', -6.176987, 106.913231, 'Kelapa Gading', 'Pegangsaan'),
(84, 'SDN PEGANGSAAN DUA 03 (Jl. Kepu Kel. Pegangsaan Dua)', 'Jl. Kepu Kel. Pegangsaan Dua', 'unit', -6.177318, 106.913307, 'Kelapa Gading', 'Pegangsaan'),
(85, 'PANDA LIMA (SDN PEGANGSAAN DUA 05 PAGI) (Jl. Kulintang No.20, RT.008/RW.007, Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl. Kulintang No.20, RT.008/RW.007, Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.173564, 106.911392, 'Kelapa Gading', 'Pegangsaan'),
(86, 'SDN PEGANGSAAN DUA 06 (Jl. Kompi Udin RT 003/007, Kel. Pegangsaan Dua, Kec. Kelapa Gading, Kota Jkt Utara) ', 'Jl. Kompi Udin RT 003/007, Kel. Pegangsaan Dua, Kec. Kelapa Gading, Kota Jkt Utara ', 'unit', -6.175943, 106.910957, 'Kelapa Gading', 'Pegangsaan'),
(87, 'KASIH SETIA (SDN PEGANGSAAN DUA 07) (Jl. Acordion Pegangsaan Dua, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl. Acordion Pegangsaan Dua, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.174569, 106.911522, 'Kelapa Gading', 'Pegangsaan'),
(88, 'SMPN PEGANGSAAN DUA 170 (Jl. Kepu RT 001/RW 001 Kel. Pegangsaan Dua, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl. Kepu RT 001/RW 001 Kel. Pegangsaan Dua, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.177636, 106.913300, 'Kelapa Gading', 'Pegangsaan'),
(89, 'SMPN PEGANGSAAN DUA 270 (Jl.Kompi Udin RT.003 RW.007, Kel. Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl.Kompi Udin RT.003 RW.007, Kel. Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.176271, 106.911385, 'Kelapa Gading', 'Pegangsaan'),
(90, 'SDI AL-AZHAR (Jl. Raya Boulevard Timur Kelapa Gading) ', 'Jl. Raya Boulevard Timur Kelapa Gading  ', 'unit', -6.163571, 106.910080, 'Kelapa Gading', 'Pegangsaan'),
(91, 'GADING MAS LESTARI (SMKN 33 PEGANGSAAN DUA) (Jl. Gading Mas Timur II RT. 08/10 Pegangsaan Dua) ', 'Jl. Gading Mas Timur II RT. 08/10 Pegangsaan Dua ', 'unit', -6.166852, 106.912781, 'Kelapa Gading', 'Pegangsaan'),
(92, 'TUNAS KARYA II (Jl. Gading Indah III RT.011/012, Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl. Gading Indah III RT.011/012, Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.160926, 106.912285, 'Kelapa Gading', 'Pegangsaan'),
(93, 'NUSA INDAH (Jl. Bangun Cipta Sarana RT.005 RW.005, Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara)', 'Jl. Bangun Cipta Sarana RT.005 RW.005, Pegangsaan, Kec. Kelapa Gading, Kota Jkt Utara', 'unit', -6.176528, 106.907852, 'Kelapa Gading', 'Pegangsaan'),
(94, 'SDN 05 TJ. PRIOK Jln. Kamp. Bahari 2 Ujung RT 06/RW 06, Tanjung Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta, 14310 )', 'Jln. Kamp. Bahari 2 Ujung RT 06/RW 06, Tanjung Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta, 14310 ', 'unit', -6.111691, 106.875412, 'Tanjung Priok', 'Tanjung Priok'),
(95, 'SDN 04 TJ. PRIOK (BERSERI) (Jln. Bahari A13 RT.7/06, Tanjung Priok, Kota Jkt Utara)', 'Jln. Bahari A13 RT.7/06, Tanjung Priok, Kota Jkt Utara', 'unit', -6.121283, 106.868607, 'Tanjung Priok', 'Tanjung Priok'),
(96, 'BERAKSI (Kelurahan Tanjung Priok) (Jln. Tenggiri No. 47 RT.004/RW.008 Kel.Tj Priok, Kota Jkt Utara)', 'Jln. Tenggiri No. 47 RT.004/RW.008 Kel.Tj Priok, Kota Jkt Utara', 'unit', -6.112840, 106.881554, 'Tanjung Priok', 'Tanjung Priok'),
(99, 'AL-HUSNA (Jl. Enggano Blok A No. 40 RT.08/16, Tj. Priok, Kota Jkt Utara)', 'Jl. Enggano Blok A No. 40 RT.08/16, Tj. Priok, Kota Jkt Utara', 'unit', -6.110063, 106.883743, 'Tanjung Priok', 'Tanjung Priok'),
(100, 'MASJID RAYA AL-HUSNA (Jl. Enggano Blok A No. 40 RT.08/16, Tj. Priok, Kota Jkt Utara)', 'Jl. Enggano Blok A No. 40 RT.08/16, Tj. Priok, Kota Jkt Utara ', 'unit', -6.110191, 106.883636, 'Tanjung Priok', 'Tanjung Priok'),
(101, 'PRANDI BAROKAH RW.05 (RW.05 Kelurahan Tanjung Priok)', 'RW.05 Kelurahan Tanjung Priok', 'unit', -6.117986, 106.872620, 'Tanjung Priok', 'Tanjung Priok'),
(102, 'SDN TANJUNG PRIOK 01 (Jl. Edam 2 No.13 RT.02 RW.016 Kel. Tj. Priok)', 'Jl.Edam 2 No.13 RT.02 RW.016 Kel. Tj. Priok', 'unit', -6.110932, 106.891548, 'Tanjung Priok', 'Tanjung Priok'),
(103, 'RUMAH SEHAT RW.02 (Jalan Kampung Bahari IV No. 94 RT.002/RW.002)', 'Jalan Kampung Bahari IV No. 94 RT.002/RW.002', 'unit', -6.117999, 106.874382, 'Tanjung Priok', 'Tanjung Priok'),
(104, 'PRIOK BERSERI (Kantor Seksi Dinas Kebersihan Tj. Priok Jl. Yos Sudarso)', 'Kantor Seksi Dinas Kebersihan Tj. Priok Jl. Yos Sudarso', 'unit', -6.119346, 106.892097, 'Tanjung Priok', 'Kebon Bawang'),
(105, 'JALI JALI BERSERI SDN KEBON BAWANG 05 (Jl. Swasembada Barat 2 No. 2, Kel. Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Swasembada Barat 2 No. 2, Kel. Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.125843, 106.889870, 'Tanjung Priok', 'Kebon Bawang'),
(106, 'TARUNA ORANGE (Jl. Bugis RT.01/04 Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Bugis RT.01/04 Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.115819, 106.887886, 'Tanjung Priok', 'Kebon Bawang'),
(107, 'GRJU BERSERI (Jl. Yos Sudarso Kel. Kebon Bawang)', 'Jl. Yos Sudarso Kel. Kebon Bawang', 'unit', -6.118851, 106.892258, 'Tanjung Priok', 'Kebon Bawang'),
(108, 'SDN KEBON BAWANG 04 PETANG (Jl. Kebon Bawang XIII, RT.19/RW.002)', 'Jl.Kebon Bawang XIII, RT.19/RW.002', 'unit', -6.114737, 106.886215, 'Tanjung Priok', 'Kebon Bawang'),
(109, 'SDN KEBON BAWANG 03 PAGI (Jl. Kebon Bawang XIII No.5, RT.09/RW.015, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Kebon Bawang XIII No.5, RT.09/RW.015, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.114737, 106.886215, 'Tanjung Priok', 'Kebon Bawang'),
(110, 'NGOPENI WKJU (Jl. Laksda Yos Sudarso No.27-29 RT.19/RW.005, Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Laksda Yos Sudarso No.27-29 RT.19/RW.005, Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.120423, 106.892136, 'Tanjung Priok', 'Kebon Bawang'),
(111, 'CERIA SELALU (SDN KEBON BAWANG 01) (Jl. Kebon Bawang XIII RT.019/RW.002)', 'Jl. Kebon Bawang XIII RT.019/RW.002', 'unit', -6.114948, 106.885887, 'Tanjung Priok', 'Kebon Bawang'),
(112, 'KEBALAN (SDN KEBON BAWANG 09) (Jl.Swasembada Barat 2 No.2, Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl.Swasembada Barat 2 No.2, Kebon Bawang, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.125843, 106.889870, 'Tanjung Priok', 'Kebon Bawang'),
(113, 'GO GREEN (RW.01 KEBON BAWANG) (Jl. Kebon Bawang XII RT.018/RW.001) ', 'Jl. Kebon Bawang XII RT.018/RW.001 ', 'unit', -6.113946, 106.887657, 'Tanjung Priok', 'Kebon Bawang'),
(114, 'SDN KEBON BAWANG 07 (Jl. Kebon Bawang XIII RT.019/RW.002)', 'Jl. Kebon Bawang XIII RT.019/RW.002', 'unit', -6.114948, 106.885887, 'Tanjung Priok', 'Kebon Bawang'),
(115, 'KUMALA (Jl. Budi Daya No. 44 RT.001/08, Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Budi Daya No. 44 RT.001/08, Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.133255, 106.885452, 'Tanjung Priok', 'Sungai Bambu'),
(116, 'PEDULI BERSIH (Jl. Gadang Terusan No.52 RT.03/RW.01, Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Gadang Terusan No.52 RT.03/RW.01, Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.116846, 106.883461, 'Tanjung Priok', 'Sungai Bambu'),
(117, 'SMPN 95 (SESAMA PEDULI) (Jl. Ganggeng III RT.04/01 Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Ganggeng III RT.04/01 Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.115019, 106.881340, 'Tanjung Priok', 'Sungai Bambu'),
(118, 'SB 32 (KELURAHAN SUNGAI BAMBU) (Jl. Ganggeng Terusan No.16, Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Ganggeng Terusan No.16, Kel. Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.118744, 106.882187, 'Tanjung Priok', 'Sungai Bambu'),
(119, 'TELATEN (SDN SUNGAI BAMBU 05) (Jl Sungai Bambu III No. 34 RT.9/RW.8,  Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl Sungai Bambu III No. 34 RT.9/RW.8,  Sungai Bambu, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.130393, 106.886253, 'Tanjung Priok', 'Sungai Bambu'),
(120, 'SDN 01 PAPANGGO (TUNAS MUDA MANDIRI) (Jl. Papanggo III No. 53, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Papanggo III No. 53, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.127180, 106.876694, 'Tanjung Priok', 'Papanggo'),
(123, 'SDN 03 PAPANGGO (Jln. Warakas I Gg. 15, Papanggo, Kec. Tj. Priok, Kota Jkt Utara)', 'Jln. Warakas I Gg. 15, Papanggo, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.122152, 106.874985, 'Tanjung Priok', 'Papanggo'),
(124, 'NIPAH BERHIAS (Jl. Papanggo I No. 2 RT.01/02 Kel. Papanggo, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Papanggo I No. 2 RT.01/02 Kel. Papanggo, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.129609, 106.881638, 'Tanjung Priok', 'Papanggo'),
(125, 'SIFA (SMPN 65 PAPANGGO) (Jl. Metro Kencana Raya No. 10 RT. 10/04 Kel. Papanggo, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Metro Kencana Raya No. 10 RT. 10/04 Kel. Papanggo, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.134163, 106.873711, 'Tanjung Priok', 'Papanggo'),
(126, 'SMPN 129 (Jl. Papanggo 4 No.83 RT.001/06, Kel. Papanggo, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Papanggo 4 No.83 RT.001/06, Kel. Papanggo, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.126233, 106.876068, 'Tanjung Priok', 'Papanggo'),
(127, 'ASTAMA PAPANGGO (KELURAHAN PAPANGGO) (Jl. Bisma Timur II Kel. Papanggo)', 'Jl. Bisma Timur II Kel. Papanggo ', 'unit', -6.130531, 106.871368, 'Tanjung Priok', 'Papanggo'),
(128, 'HIJAU DAUN (Jl. Warakas 3 Gg. 12 No. 5-7 RT.014/03, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Warakas 3 Gg. 12 No. 5-7 RT.014/03, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.124002, 106.874954, 'Tanjung Priok', 'Warakas'),
(129, 'BERSIH LABAS (SMA N 18 JAKARTA) (Jl. Warakas I RT. 13/14 Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Warakas I RT. 13/14 Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.121369, 106.871994, 'Tanjung Priok', 'Warakas'),
(130, 'SAGU/SAMPAH BERGUNA (SDN WARAKAS 03 PAGI) (Jl. Warakas I Gang 20 RW.14 Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Warakas I Gang 20 RW.14 Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.121811, 106.872643, 'Tanjung Priok', 'Warakas'),
(131, 'WARAKAS TWO(SDN WARKAS 02 PETANG) (Jl. Warakas Gang 8 No.104 RT.11/09, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Warakas Gang 8 No.104 RT.11/09, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.122956, 106.879829, 'Tanjung Priok', 'Warakas'),
(132, 'WARAKAS ONE (SDN WARAKAS 01 PETANG) (Jl. Warakas Gang 8 No.104 RT.11/09, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Warakas Gang 8 No.104 RT.11/09, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.124914, 106.879433, 'Tanjung Priok', 'Warakas'),
(133, 'KBA WARAKAS 02 (Jl. Warakas Kel.Warakas)', 'Jl. Warakas Kel.Warakas', 'unit', -6.118768, 106.873985, 'Tanjung Priok', 'Warakas'),
(134, 'HIJAU DAUN 09 (Jl. Warakas V No. 126 RW.03/RT 007, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Warakas V No. 126 RW.03/RT 007, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.125326, 106.879776, 'Tanjung Priok', 'Warakas'),
(135, 'BERKAH RT.006 (Jl. Warakas 2 Gang 2B No.7 RT.006/RW.002, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Warakas 2 Gang 2B No.7 RT.006/RW.002, Kel. Warakas, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.116973, 106.879395, 'Tanjung Priok', 'Warakas'),
(136, 'TENAR JAYA (Jl. Sunter Karya Selatan V Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Sunter Karya Selatan V Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.141321, 106.870918, 'Tanjung Priok', 'Sunter Agung'),
(137, 'SDN 11 SUNTER AGUNG (Jl. Taman Nyiur RW 15 Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Taman Nyiur RW 15 Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.135347, 106.871002, 'Tanjung Priok', 'Sunter Agung'),
(138, 'SAMPURNA (SMA N 80 JAKARTA) (Jl. Sunter Karya Selatan V Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Sunter Karya Selatan V Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.139843, 106.870171, 'Tanjung Priok', 'Sunter Agung'),
(139, 'SDN 01 SUNTER AGUNG (Jl. Ancol Selatan I RT.14/07 Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Ancol Selatan I RT.14/07 Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.132741, 106.857063, 'Tanjung Priok', 'Sunter Agung'),
(140, 'BERSERI 282 (Jl. Nusantara Selatan No. 40 RT. 007/015, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Nusantara Selatan No. 40 RT. 007/015, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.134560, 106.870720, 'Tanjung Priok', 'Sunter Agung'),
(141, 'SNAMBEL (SMPN 116) (Jl. Sunter Permai Raya)', 'Jl. Sunter Permai Raya ', 'unit', -6.128597, 106.858978, 'Tanjung Priok', 'Sunter Agung'),
(142, 'IPIN-IPIN (Jl. Sunter Karya Utara No. 6 RT. 014/013, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Sunter Karya Utara No. 6 RT. 014/013, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.130593, 106.871506, 'Tanjung Priok', 'Sunter Agung'),
(143, 'GUNA MAJU SEJAHTERA (Jl. Sunter Karya Utara Blok G No. 2, Sunter Agung, Kec. Tj. Priok, Kota Jkt utara)', 'Jl. Sunter Karya Utara Blok G No. 2, Sunter Agung, Kec. Tj. Priok, Kota Jkt utara', 'unit', -6.139328, 106.871262, 'Tanjung Priok', 'Sunter Agung'),
(144, 'RESIK (SDN 05 SUNTER AGUNG) (Jl. Agung Utara 13 RT. 21/01, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Agung Utara 13 RT. 21/01, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.134788, 106.858482, 'Tanjung Priok', 'Sunter Agung '),
(145, 'SMAN 41 JAKARTA (Jl. Laksamana R.E. Martadinata No.41 RT.12/03, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Laksamana R.E. Martadinata No.41 RT.12/03, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.123108, 106.852814, 'Tanjung Priok', 'Sunter Agung'),
(146, 'SMPN 140 JAKARTA (Jl. Komplek Setneg Blok A RT.03/09, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Komplek Setneg Blok A RT.03/09, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.135911, 106.859215, 'Tanjung Priok', 'Sunter Agung'),
(147, 'TERATAI (Jl. Sunter Muara Barat RW.05)', 'Jl. Sunter Muara Barat RW.05', 'unit', -6.148017, 106.856300, 'Tanjung Priok', 'Sunter Agung'),
(148, 'SDN SUNTER AGUNG 09 (Jl. Sunter Permai Raya No. 21 Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Sunter Permai Raya No. 21 Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.127748, 106.858727, 'Tanjung Priok', 'Sunter Agung'),
(149, 'SDN SUNTER AGUNG 03 (Jl. Agung Jaya 15 Blok D, RT/017, RW/010 Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Agung Jaya 15 Blok D, RT/017, RW/010 Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.143858, 106.861214, 'Tanjung Priok', 'Sunter Agung'),
(150, 'SDN SUNTER AGUNG 12 (Jalan Paradise 10, RT.11/RW.12, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jalan Paradise 10, RT.11/RW.12, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.139419, 106.867065, 'Tanjung Priok', 'Sunter Agung'),
(151, 'SDN SUNTER AGUNG 13 (Jalan Selat Sumba RT.016/RW.004, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jalan Selat Sumba RT.016/RW.004, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.133886, 106.851715, 'Tanjung Priok ', 'Sunter Agung'),
(152, 'TKN SUNTER AGUNG (Jalan Agung Utara 11 No.17 RT.04/RW.009, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jalan Agung Utara 11 No.17 RT.04/RW.009, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.136795, 106.859818, 'Tanjung Priok', 'Sunter Agung'),
(153, 'AGUNG PERKASA RW. 014 (Jalan Agung Perkasa RW.014, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jalan Agung Perkasa RW.014, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.140558, 106.872360, 'Tanjung Priok', 'Sunter Agung'),
(154, 'MELUR (Jalan Sunter Permai Raya No.1 RT.001 RW.006, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara)', 'Jalan Sunter Permai Raya No.1 RT.001 RW.006, Kel. Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.129609, 106.858917, 'Tanjung Priok', 'Sunter Agung'),
(155, 'PELITA (Jl. Asrama Dinas Kebersihan Sunter RT.019 RW.007, Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Asrama Dinas Kebersihan Sunter RT.019 RW.007, Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.147760, 106.871544, 'Tanjung Priok', 'Sunter Jaya'),
(156, 'SON AJI (Dipo Sunter Jaya Kel. Sunter Jaya) ', 'Dipo Sunter Jaya Kel. Sunter Jaya ', 'unit', -6.148903, 106.867439, 'Tanjung Priok', 'Sunter Jaya'),
(157, 'PUSPA CINDRA KANA (Jl. Kangkungan RT.013 RW.001, Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Kangkungan RT.013 RW.001, Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.148919, 106.867432, 'Tanjung Priok', 'Sunter Jaya'),
(158, 'SERUNI (RW. 09 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara) ', 'RW. 09 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.158507, 106.881790, 'Tanjung Priok', 'Sunter Jaya'),
(159, 'SDN 09 SUNTER JAYA (Jl. Danau Indah II RT.04/13 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Danau Indah II RT.04/13 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.153009, 106.880363, 'Tanjung Priok', 'Sunter Jaya'),
(160, 'AR-RAHMAN (Komplek Asrama Dinas LH Blok D I RT.017/007 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara) ', 'Komplek Asrama Dinas LH Blok D I RT.017/007 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.153834, 106.871674, 'Tanjung Priok', 'Sunter Jaya'),
(161, 'SMPN 152 (Jl. Sunter Jaya 4 RT.08/03, Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Sunter Jaya 4 RT.08/03, Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.156028, 106.867668, 'Tanjung Priok', 'Sunter Jaya'),
(162, 'SDN SUNTER JAYA 04 PETANG (Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.155793, 106.866913, 'Tanjung Priok', 'Sunter Jaya'),
(163, 'SDN SUNTER JAYA 02 PETANG (Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara )', 'Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.155941, 106.866890, 'Tanjung Priok', 'Sunter Jaya'),
(164, 'SDN SUNTER JAYA 01 PAGI (Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara) ', 'Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.155941, 106.866890, 'Tanjung Priok', 'Sunter Jaya'),
(165, 'SDN SUNTER JAYA 03 PAGI (Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara )', 'Jl. Sunter Jaya IV A RT.004/RW.003 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara ', 'unit', -6.155793, 106.866913, 'Tanjung Priok', 'Sunter Jaya'),
(166, 'SUNJAY (Jl. Bentengan VI Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Bentengan VI Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.149726, 106.867393, 'Tanjung Priok', 'Sunter Jaya'),
(167, 'MASJID NURUL IMAN (Jl. Sunter Jaya RT.006/RW.005 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara)', 'Jl. Sunter Jaya RT.006/RW.005 Kel. Sunter Jaya, Kec. Tj. Priok, Kota Jkt Utara', 'unit', -6.150043, 106.861176, 'Tanjung Priok', 'Sunter Jaya'),
(168, 'DEMANG BERSIH  (Dipo Timur RT.002 RW.010 Jl.Pademangan IX Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Dipo Timur RT.002 RW.010 Jl.Pademangan IX Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.130254, 106.845245, 'Pademangan', 'Pademangan Timur'),
(169, 'BUMI LESTARI (Jl. Pademangan II Gang 4 No. 25 RT 06/06 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan II Gang 4 No. 25 RT 06/06 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.142036, 106.842125, 'Pademangan', 'Pademangan Timur'),
(170, 'SDN 03 (Jl. Pademangan VI No.79, RT.4/RW.10, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan VI No.79, RT.4/RW.10, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.131973, 106.844177, 'Pademangan', 'Pademangan Timur'),
(171, 'SMPN 34 (Jl. Pademangan Raya VII, RT.4/RW.10, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan Raya VII, RT.4/RW.10, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.131028, 106.845055, 'Pademangan', 'Pademangan Timur'),
(172, 'SDN 09 (Jl. Pademangan VI No.18, RT.4/RW.10, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan VI No.18, RT.4/RW.10, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.141855, 106.839005, 'Pademangan', 'Pademangan Timur'),
(173, 'SDN 01 (Gg. 22, RT.12/RW.3, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Gg. 22, RT.12/RW.3, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.137016, 106.843651, 'Pademangan', 'Pademangan Timur'),
(174, 'SMKN 55 (Jalan Pademangan Timur VII RT.15/RW.01, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jalan Pademangan Timur VII RT.15/RW.01, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.131475, 106.844589, 'Pademangan', 'Pademangan Timur'),
(177, 'SMPN 23 (Jl. Pademangan Timur VI, Kel. Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan Timur VI, Kel. Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.131005, 106.845001, 'Pademangan', 'Pademangan Timur'),
(178, 'SMKN 23 (Gg. 19, RT.8/RW.7, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Gg. 19, RT.8/RW.7, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.137431, 106.842453, 'Pademangan', 'Pademangan Timur'),
(179, 'SMPN 42 (Jl. Pademangan III No.2, RT.2/RW.2, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan III No.2, RT.2/RW.2, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.135750, 106.843208, 'Pademangan', 'Pademangan Timur'),
(180, 'GEREJA SANTO LUKAS (Jl. Pademangan I RT.01/05, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan I RT.01/05, Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.141465, 106.843056, 'Pademangan ', 'Pademangan Timur'),
(181, 'SD SANTA CICILIA (Jl. Pademangan II RT.01/05 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan II RT.01/05 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.137431, 106.842453, 'Pademangan', 'Pademangan Timur'),
(182, 'TK SANTA CICILIA (Jl. Pademangan II RT.01/05 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan II RT.01/05 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.137431, 106.842453, 'Pademangan', 'Pademangan Timur'),
(183, 'SMP SANTA CICILIA (Jl. Pademangan II RT.01/05 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan II RT.01/05 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.137431, 106.842453, 'Pademangan', 'Pademangan Timur'),
(184, 'TK SANTO LUKAS 1 (Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara) ', 'Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara ', 'unit', -6.141465, 106.843056, 'Pademangan', 'Pademangan Timur'),
(185, 'SD SANTO LUKAS 1 (Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara) ', 'Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara ', 'unit', -6.141465, 106.843056, 'Pademangan', 'Pademangan Timur'),
(186, 'SMP SANTO DELLA MARIA (Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara)', 'Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara ', 'unit', -6.141465, 106.843056, 'Pademangan', 'Pademangan Timur'),
(187, 'SMA SANTO DELLA MARIA (Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara) ', 'Jl. Pademangan I Gg 7 RT 1/RW 5 Pademangan Timur, Kec. Pademangan , Kota Jkt Utara ', 'unit', -6.141465, 106.843056, 'Pademangan', 'Pademangan Timur'),
(188, 'SDN 08 (Jl.Pademangan VI Gg 34 Rt 15/01 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl.Pademangan VI Gg 34 Rt 15/01 Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.132642, 106.843803, 'Pademangan', 'Pademangan Timur'),
(189, 'PKBM NEGERI 04 (Jl. Pademangan Timur VI No. 79 Rt 15/10, Kel Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan Timur VI No. 79 Rt 15/10, Kel Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.131973, 106.844177, 'Pademangan', 'Pademangan Timur'),
(190, 'PAUD MELATI (Jl. Pademangan Timur VI No. 79 Rt 15/10, Kel Pademangan Timur, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Pademangan Timur VI No. 79 Rt 15/10, Kel Pademangan Timur, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.141855, 106.839005, 'Pademangan', 'Pademangan Timur'),
(191, 'PERISAI (RW.01 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'RW.01 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.130303, 106.839790, 'Pademangan', 'Pademangan Barat'),
(192, 'DEMANG BERSERI (RW.011 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara) ', 'RW.011 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.129931, 106.793625, 'Pademangan', 'Pademangan Barat'),
(193, 'KAMBOJA (RW.014 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'RW.014 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.136789, 106.879723, 'Pademangan', 'Pademangan Barat'),
(194, 'DEMANG ASRI (Kantor Kecamatan Pademangan Jl. Budi Mulia No.1, RT.11/RW.12, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14420)', 'Kantor Kecamatan Pademangan Jl. Budi Mulia No.1, RT.11/RW.12, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14420', 'unit', -6.128252, 106.840584, 'Pademangan', 'Pademangan Barat'),
(195, 'SMAN 40 (Jl. Budi Mulya Raya Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Budi Mulya Raya Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.130608, 106.841263, 'Pademangan', 'Pademangan Barat'),
(196, 'PERMATA (Rukan Permata Ancol RW. 016 Kel, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara )', 'Rukan Permata Ancol RW. 016 Kel, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.131597, 106.839378, 'Pademangan', 'Pademangan Barat'),
(197, 'SDN 07 (Jln. Ampera VII RW. 015, Kel Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jln. Ampera VII RW. 015, Kel Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.133570, 106.838280, 'Pademangan', 'Pademangan Barat'),
(198, 'BERSEHATI (RW. 013, Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'RW. 013, Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.138809, 106.835678, 'Pademangan', 'Pademangan Barat'),
(199, 'SDN 01 (Jl. Ampera 3 Pademangan Barat, Kec. Pademangan, Kota Jkt Utara) ', 'Jl. Ampera 3 Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.135384, 106.834015, 'Pademangan', 'Pademangan Barat'),
(200, 'SAMARA (Jl. Hidup Baru RW. 02, Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Hidup Baru RW. 02, Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.128542, 106.841858, 'Pademangan', 'Pademangan Barat'),
(201, 'SMA RAUDHATUL JANNATINNAIM (Jl. Budi Mulya Raya Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara) ', 'Jl. Budi Mulya Raya Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.128252, 106.840584, 'Pademangan', 'Pademangan Barat'),
(202, 'SMK RAUDHATUL JANNATINNAIM (Jl. Budi Mulya Raya No. 91 RT.12/12 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Budi Mulya Raya No. 91 RT.12/12 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.128252, 106.840584, 'Pademangan', 'Pademangan Barat'),
(203, 'SDN 10 PADEMANGAN BARAT (Jl. Budi Mulya RT 9 RW 10 No. 11, Kec. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Budi Mulya RT 9 RW 10 No. 11, Kec. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.133570, 106.838280, 'Pademangan', 'Pademangan Barat'),
(204, 'MA RAUDHATUL JANNATINNA\'IM (Jl. Budi Mulya RT12/12 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Budi Mulya RT12/12 Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.128252, 106.840584, 'Pademangan', 'Pademangan Barat'),
(205, 'SDN 09 PADEMANGAN BARAT (Jl. Budi Mulya RT 9 RW 10 No. 11, Kec. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Budi Mulya RT 9 RW 10 No. 11, Kec. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.133570, 106.838280, 'Pademangan', 'Pademangan Barat'),
(206, 'SDN 12 PADEMANGAN BARAT (Jl. Hidup Baru 1 No.101 RT.4, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Hidup Baru 1 No.101 RT.4, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.138871, 106.835335, '', ''),
(207, 'SDN 05 PADEMANGAN BARAT (Jl. Satria I No. 14 RT 03 RW 01, Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Satria I No. 14 RT 03 RW 01, Kel. Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.140960, 106.835449, 'Pademangan', 'Pademangan Barat'),
(208, 'SDN 03 PAGI (Jl. Hidup Baru 1 No.101 RT.4, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Hidup Baru 1 No.101 RT.4, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.147335, 106.846977, 'Pademangan', 'Pademangan Barat'),
(209, 'SDN 13 PETANG (Jl. Hidup Baru 1 No.101 RT.4, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Hidup Baru 1 No.101 RT.4, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.140524, 106.835297, 'Pademangan', 'Pademangan Barat');
INSERT INTO `locations` (`id`, `nama_bank_sampah`, `address`, `type`, `lat`, `lng`, `kecamatan`, `kelurahan`) VALUES
(210, 'SDN 11 PAGI (Jl.Budi Mulya RT.9/RW.10, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl.Budi Mulya RT.9/RW.10, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.134880, 106.839607, 'Pademangan', 'Pademangan Barat'),
(211, 'SMP YAKPI JAYA 1 DKI JAYA (Jl. Hidup Baru No.260, RT.11/RW.2, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Hidup Baru No.260, RT.11/RW.2, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.140928, 106.838264, 'Pademangan', 'Pademangan Barat'),
(212, 'Kantor Kelurahan Pademangan Barat (Jl. Budi Mulia No. 1 RT 14/RW 11, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Budi Mulia No. 1 RT 14/RW 11, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.129931, 106.793625, 'Pademangan', 'Pademangan Barat'),
(213, 'MASPEL (RW.01 Kel. Ancol,Kec. Pademangan, Kota Jkt Utara)', 'RW.01 Kel. Ancol,Kec. Pademangan, Kota Jkt Utara', 'unit', -6.130730, 106.826744, 'Pademangan ', 'Ancol'),
(214, 'BANDAN RAPIH (Jl. Lodan Raya RT.04 RW.02 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Lodan Raya RT.04 RW.02 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.126760, 106.813248, 'Pademangan', 'Ancol'),
(215, 'BAROKAH (Jl. Kampung Bandan Kantor RW.004 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Kampung Bandan Kantor RW.004 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.126815, 106.959457, 'Pademangan', 'Ancol'),
(216, 'SMPN 113 (Jl. Kampung Muka RT.009/04 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Kampung Muka RT.009/04 Kel. Ancol,  Kec. Pademangan, Kota Jkt Utara', 'unit', -6.134551, 106.818726, 'Pademangan', 'Ancol'),
(217, 'SDN 03 ANCOL (Jl. Kampung Muka RT.009/04 No. 419 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Kampung Muka RT.009/04 No. 419 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.135190, 106.819359, 'Pademangan', 'Ancol'),
(218, 'SAMLON (RW.08 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'RW.08 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.125981, 106.812424, 'Pademangan', 'Ancol'),
(219, 'SDN 01 ANCOL (Jl. Parangtritis VI No. 2 RT.5/11, Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Parangtritis VI No. 2 RT.5/11, Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.125624, 106.821815, 'Pademangan', 'Ancol'),
(220, 'SD FATAHILLAH ANCOL (Jl. Lodan Dalam 2 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Lodan Dalam 2 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.125981, 106.812424, 'Pademangan', 'Ancol'),
(221, 'SMP FATAHILLAH ANCOL (Jl. Lodan Dalam 2 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Lodan Dalam 2 Kel. Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.125981, 106.812424, 'Pademangan', 'Ancol'),
(222, 'BUNDA MULIA SPK (Jl. Lodan Raya No.2, RT.12/RW.2, Kel. Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Jl. Lodan Raya No.2, RT.12/RW.2, Kel. Ancol, Kec. Pademangan, Kota Jkt Utara ', 'unit', -6.125981, 106.812424, 'Pademangan', 'Ancol'),
(223, 'Beibe (Kantor Kelurahan Ancol) (Jl. Ancol Bar. III, RT.1/RW.3, Ancol, Kec. Pademangan, Kota Jkt Utara)', 'Kantor Kelurahan Ancol Jl. Ancol Bar. III, RT.1/RW.3, Ancol, Kec. Pademangan, Kota Jkt Utara', 'unit', -6.125119, 106.816658, 'Pademangan', 'Ancol'),
(224, 'SMAN 111 PENJARINGAN (Jl. Wacung RW. 13 Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Wacung RW. 13 Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara ', 'unit', -6.133714, 106.796455, 'Penjaringan', 'Penjaringan'),
(225, 'SMPN 21 (Jl. Bandengan Utara Raya No.80, RT.9/RW.16, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara) ', 'Jl. Bandengan Utara Raya No.80, RT.9/RW.16, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara ', 'unit', -6.133442, 106.795959, 'Penjaringan', 'Penjaringan'),
(226, 'SDN PENJARINGAN 03 (Jl. Raya Pluit Selatan no.105 RT.16/RW.17, Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Raya Pluit Selatan no.105 RT.16/RW.17, Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.124909, 106.802956, 'Penjaringan', 'Penjaringan'),
(227, 'FORMALIN (Jl. Marlina RT.001/ 017, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Marlina RT.001/ 017, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.117292, 106.802490, 'Penjaringan', 'Penjaringan'),
(228, 'SDN PENJARINGAN 06 (Jl. Bandengan Utara No.80, RT.8/RW.15, Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Bandengan Utara No.80, RT.8/RW.15, Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133868, 106.796944, 'Penjaringan', 'Penjaringan'),
(229, 'SDN PENJARINGAN 07 (Jl. Bandengan Utara No.80, RT.8/RW.15, Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Bandengan Utara No.80, RT.8/RW.15, Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133868, 106.796944, 'Penjaringan', 'Penjaringan'),
(230, 'SDN PENJARINGAN 08 (Jl. Bandengan Utara Raya No.80, RT.5/RW.16, Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Bandengan Utara Raya No.80, RT.5/RW.16, Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133868, 106.796944, 'Penjaringan', 'Penjaringan'),
(231, 'SDN PENJARINGAN 09 (Jl. Bandengan Utara Raya No.80, RT.1/RW.15, Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Bandengan Utara Raya No.80, RT.1/RW.15, Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133868, 106.796944, 'Penjaringan', 'Penjaringan'),
(232, 'BANDENGAN UTARA RT.01 (Jl. Bandengan Utara RT 001 RW 015, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Bandengan Utara RT 001 RW 015, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.136548, 106.796928, 'Penjaringan', ''),
(233, 'SDN PENJARINGAN 01 (Jl. Luar Batang V RT.004 RW.03, Kel. Penjaringan, kec. Penjaringan, Kota Jkt Utara)', 'Jl. Luar Batang V RT.004 RW.03, Kel. Penjaringan, kec. Penjaringan, Kota Jkt Utara', 'unit', -6.123558, 106.804924, 'Penjaringan', ''),
(234, 'RUSUN PENJARINGAN (Jl. Tanjung Wangi No. 36T RT.5 RW.06, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Tanjung Wangi No. 36T RT.5 RW.06, Kel. Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.131652, 106.794533, 'Penjaringan', 'Penjaringan'),
(235, 'BS MUTIARA (Kantor Kelurahan Penjaringan) (Jl. Pluit Selatan Raya No.1, RT.7/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Kantor Kelurahan Penjaringan (Jl. Pluit Selatan Raya No.1, RT.7/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'unit', -6.125632, 106.798721, 'Penjaringan', 'Penjaringan'),
(236, 'PT. SINAR ANTJOL-PLANT PLUIT (Jl. Pluit Raya Selatan No.29, RT.16/RW.8, Penjaringan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Pluit Raya Selatan No.29, RT.16/RW.8, Penjaringan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.125605, 106.792130, 'Penjaringan', 'Penjaringan'),
(237, ' BAHARI UTAMA (Jl. Pluit Karang Permai RT.06/08, Kel. Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Pluit Karang Permai RT.06/08, Kel. Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.179059, 106.948944, 'Penjaringan', 'Pluit'),
(238, 'IPEKA SCHOOL (Jl. Pluit Timur Blok B RT. 010/09 Kel. Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Pluit Timur Blok B RT. 010/09 Kel. Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.118996, 106.796646, 'Penjaringan', 'Pluit'),
(239, 'SMKN 56 (Jl. Pluit Timur Raya No. 1, RT 10/RW 09, Pluit, Kec. Penjaringan, Kota Jkt Utara )', 'Jl. Pluit Timur Raya No. 1, RT 10/RW 09, Pluit, Kec. Penjaringan, Kota Jkt Utara ', 'unit', -6.118834, 106.794014, 'Penjaringan', 'Pluit'),
(240, 'REMAJA PLUIT (Jl. Pluit Selatan I,Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Pluit Selatan I, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.119264, 106.796524, 'Penjaringan', 'Pluit'),
(241, 'SDN 05 PLUIT (Jl. Komplek Nelayan RT.01 RW.01, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Komplek Nelayan RT.01 RW.01, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.111562, 106.771271, 'Penjaringan', 'Pluit'),
(242, 'KRAPU BAHARI (Jl. Muara Angke RW. 01, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Muara Angke RW. 01, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.103600, 106.768494, 'Penjaringan', 'Pluit'),
(243, 'CIKAS BAHARI (Jl. Raya Budha Suci Muara Angke, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Raya Budha Suci Muara Angke, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.125601, 106.776894, 'Penjaringan', 'Pluit'),
(244, 'SAKINAH BAHARI (Jl. Bermis Raya, Pluit, Kec. Penjaringan, Kota Jkt Utara  )', 'Jl. Bermis Raya, Pluit, Kec. Penjaringan, Kota Jkt Utara  ', 'unit', -6.124600, 106.768494, 'Penjaringan', 'Pluit'),
(245, 'SEJAHTERA BAHARI (Jl. Muara Angke RW. 01, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Muara Angke RW. 01, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.111600, 106.768494, 'Penjaringan', 'Pluit'),
(246, 'ECENG BAHARI (Jl. Muara Angke RT. 010/011, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Muara Angke RT. 010/011, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.109600, 106.768494, 'Penjaringan', 'Pluit'),
(247, 'CHOLAM (Jl. Bermis Raya, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Bermis Raya, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.105600, 106.768494, 'Penjaringan', 'Pluit'),
(248, 'SMPN 261 (Jl. Muara Angke RT. 011/011, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Muara Angke RT. 011/011, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.109343, 106.770599, 'Penjaringan', 'Pluit'),
(249, 'SDN PLUIT 03 (Jalan Komplek Nelayan RT.11/RW.11, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jalan Komplek Nelayan RT.11/RW.11, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.111645, 106.771278, 'Penjaringan', 'Pluit'),
(250, 'WARGA RW.05 (RW.05 Pluit Kel, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'RW.05 Pluit Kel, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.111182, 106.790230, 'Penjaringan', 'Pluit'),
(251, 'SDN PLUIT 01 (Jl . Pluit Selatan I No. 1, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl . Pluit Selatan I No. 1, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.124435, 106.791412, 'Penjaringan', 'Pluit'),
(252, 'WARGA RW.018 (Jl. Raya Pluit RW.18, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Raya Pluit RW.18, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.113861, 106.774422, 'Penjaringan', 'Pluit'),
(253, 'RPTRA JAKPRO ASRI PLUIT (Jl. Pluit Karang Utara, RT.12/RW.3, Pluit, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Pluit Karang Utara, RT.12/RW.3, Pluit, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.112091, 106.778290, 'Penjaringan', 'Pluit'),
(254, 'IRMANA (Jl. Kampung Gusti Kebon Sayur RT. 09/014 Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kampung Gusti Kebon Sayur RT. 09/014 Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.141195, 106.777840, 'Penjaringan', 'Pejagalan'),
(255, 'MOA (Jl. Moa Blok G II No. 70, Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Moa Blok G II No. 70, Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.130456, 106.780090, 'Penjaringan', 'Pejagalan'),
(256, 'SAKTI JAYA (Jl. Kampung Gusti N. 11, Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kampung Gusti N. 11, Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.138715, 106.778275, 'Penjaringan', 'Pejagalan'),
(257, 'SDN PEJAGALAN 03 (Jl. Raya Teluk Gong No. 160, Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Raya Teluk Gong No. 160, Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.138425, 106.777519, 'Penjaringan', 'Pejagalan'),
(258, 'SMPN 12 (Jl. A1 Teluk Gong RT. 009/010 Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. A1 Teluk Gong RT. 009/010 Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.136890, 106.779366, 'Penjaringan', 'Pejagalan'),
(259, 'YAYASAN METHODIST (Jl. Bendungan Terusan Utara RW. 11, Pejagalan, Kec. Penjaringan , Kota Jkt Utara)', 'Jl. Bendungan Terusan Utara RW. 11, Pejagalan, Kec. Penjaringan , Kota Jkt Utara', 'unit', -6.136230, 106.779480, 'Penjaringan', 'Pejagalan'),
(260, 'SDN PEJAGALAN 09 (Jl. Cenang RT.9/RW.12, Pejagalan, Kec. Penjaringan, Kota Jkt Utara )', 'Jl. Cenang RT.9/RW.12, Pejagalan, Kec. Penjaringan, Kota Jkt Utara ', 'unit', -6.133415, 106.781769, 'Penjaringan', 'Pejagalan'),
(261, 'PASAR TELUK GONG (Jl. Teluk Gong Raya RT.10 RW.10, Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Teluk Gong Raya RT.10 RW.10, Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.137758, 106.782104, 'Penjaringan', 'Pejagalan'),
(262, 'YAYASAN AL MUHAJIRIN (Jl.Teluk Gong Kav. Blok A No. 20 RT 08/ RW 10, Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl.Teluk Gong Kav. Blok A No. 20 RT 08/ RW 10, Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133702, 106.774895, 'Penjaringan', 'Pejagalan'),
(263, 'SDN PEJAGALAN 05 (Jl. Teluk Gong V RT 15/ RW 08, Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Teluk Gong V RT 15/ RW 08, Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.135519, 106.779106, 'Penjaringan', 'Pejagalan'),
(264, 'AMANAH (KANTOR KELURAHAN PEJAGALAN) (Jl. Boncel No.1 RT.008/012 Pejagalan, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Boncel No.1 RT.008/012 Pejagalan, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133583, 106.777634, 'Penjaringan', 'Pejagalan'),
(265, 'SMPN 120 (Jl. Kamal Muara No. 10 RT 02/ RW 02, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kamal Muara No. 10 RT 02/ RW 02, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.094939, 106.720116, 'Penjaringan', 'Kamal Muara'),
(266, 'SDN 01 KAMAL MUARA (Jl. Raya Kamal Pantai No.5 RT 08/ RW 01, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Raya Kamal Pantai No.5 RT 08/ RW 01, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.094868, 106.720421, 'Penjaringan', 'Kamal Muara'),
(267, 'RW. 04 KAMAL MAURA (Jl. Kamal Muara RW.04, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kamal Muara RW.04, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.111084, 106.697815, 'Penjaringan', 'Kamal Muara'),
(268, 'KAMURA LESTARI (Jl. Kamal Muara No.8 RT 02/ RW 02, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kamal Muara No.8 RT 02/ RW 02, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.110258, 106.722046, 'Penjaringan', 'Kamal Muara'),
(269, 'RPTRA KAMAL BAHARI (Jl. Kamal Muara No.38, RT.7/RW.1, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara) ', 'Jl. Kamal Muara No.38, RT.7/RW.1, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara ', 'unit', -6.095223, 106.716805, 'Penjaringan', 'Kamal Muara'),
(270, 'Al-IKHLAS (RT.002/02) (Jl. Kapuk Kamal Muara Raya RT.002/02, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kapuk Kamal Muara Raya RT.002/02, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.132261, 106.773117, 'Penjaringan', 'Kamal Muara'),
(271, 'SDN 03 KAPUK MUARA 9 (KARYA BERSAMA) (Jl. SMP 122 RT. 01/ RW 03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. SMP 122 RT. 01/ RW 03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.138734, 106.763680, 'Penjaringan', 'Kapuk Muara'),
(272, 'SDN KAPUK MUARA 01 (Jl. Kapuk Muara No. 9 RT. 10/ RW 04, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kapuk Muara No. 9 RT. 10/ RW 04, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.136669, 106.775276, 'Penjaringan', 'Kapuk Muara'),
(273, 'SMPN 122 (Jl. SMP 122 No. 3 RT. 01/ RW 03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. SMP 122 No. 3 RT. 01/ RW 03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.138714, 106.763969, 'Penjaringan', 'Kapuk Muara'),
(274, 'SMK AL MUTTAQIN (Jl. Kapuk Muara No. 17 RT 10/ RW 04, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kapuk Muara No. 17 RT 10/ RW 04, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.133616, 106.775192, 'Penjaringan', 'Kapuk Muara'),
(275, 'P24 KEL. KAPUK MUARA (Jl. SMP 122 RT. 01/ RW. 03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. SMP 122 RT. 01/ RW. 03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.137266, 106.761703, 'Penjaringan', 'Kapuk Muara'),
(276, 'KM 301 (Jl. SMP 122 RT.01 RW.03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. SMP 122 RT.01 RW.03, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.137266, 106.761703, 'Penjaringan', 'Kapuk Muara'),
(277, 'RUKO GALERY NIAGA MEDITERANIA (Jl. Pantai Indah Utara 2 RT.06/08, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Pantai Indah Utara 2 RT.06/08, Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.116928, 106.769348, 'Penjaringan', 'Kapuk Muara'),
(278, 'EMPANG PRIBUMI (Jl. Kapuk Utara RT.001/003 Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Kapuk Utara RT.001/003 Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.138569, 106.763374, 'Penjaringan', 'Kapuk Muara'),
(279, 'MPPI RW 07 (Jl. Mandala Permai VI RT.3/RW.7,  Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara)', 'Jl. Mandala Permai VI RT.3/RW.7,  Kapuk Muara, Kec. Penjaringan, Kota Jkt Utara', 'unit', -6.114486, 106.750565, 'Penjaringan', 'Kapuk Muara'),
(280, 'SDN 01 KALIBARU (Jl. Kali Baru Timur RT.74/RW.13, Kali Baru, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Kali Baru Timur RT.74/RW.13, Kali Baru, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.100176, 106.932358, 'Cilincing', 'Kali  Baru'),
(281, 'SMK 36 (Jl.Kali Baru Timur No.7 No.16, RT.1/RW.2, Kali Baru, Kec. Cilincing, Kota Jkt Utara)', 'Jl.Kali Baru Timur No.7 No.16, RT.1/RW.2, Kali Baru, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.099859, 106.931221, 'Cilincing', 'Kali Baru'),
(282, 'SDN 09 KALIBARU (Jl. Karang Hijau 2 No.37, RT.2/RW.1, Kali Baru, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Karang Hijau 2 No.37, RT.2/RW.1, Kali Baru, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.098558, 106.934700, 'Cilincing', 'Kali Baru'),
(283, 'SMPN 53 KALIBARU (Jl. Tanah Merdeka No. 33, RT. 05/ RW. 12, Kali Baru, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Tanah Merdeka No. 33, RT. 05/ RW. 12, Kali Baru, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.106049, 106.920998, 'Cilincing', 'Kali Baru'),
(284, 'RW 13 Kalibaru (Jl. Kali Baru Timur RT 13, Kali Baru, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Kali Baru Timur RT 13, Kali Baru, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.970500, 106.933662, 'Cilincing', 'Kali Baru'),
(285, 'SANORA (Jl. Asrama DKI RW.03 Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Asrama DKI RW.03 Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.125575, 106.925491, 'Cilincing', 'Semper Barat'),
(286, 'KARYA PEDULI (Jl. Beting Indah No. 2 RT.005/09 Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Beting Indah No. 2 RT.005/09 Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.120083, 106.924156, 'Cilincing', 'Semper Barat'),
(287, 'CITANDUY INDAH (SDN 15 SEMPER BARAT) (Jl. S.Citanduy Raya, RT.15/RW.1, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', '(SDN 15 SEMPER BARAT) Jl. S.Citanduy Raya, RT.15/RW.1, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.127021, 106.923134, 'Cilincing', 'Semper Barat'),
(288, 'MADU (SMA NEGERI 52) (Jl. Raya Tugu No. 16 RT.01/09, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'SMA NEGERI 52 Jl. Raya Tugu No. 16 RT.01/09, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.122203, 106.923889, 'Cilincing', 'Semper Barat'),
(289, 'DAHLIA (SDN SEMPER BARAT 13) (Jl. Komplek Pemadam Kebakaran No.1 , RT.17/RW.1, Semper Bara., Kec. Cilincing, Kota Jkt Utara)', 'SDN SEMPER BARAT 13 (Jl. Komplek Pemadam Kebakaran No.1 , RT.17/RW.1, Semper Bara., Kec. Cilincing, Kota Jkt Utara)', 'unit', -6.129873, 106.927643, 'Cilincing', 'Semper Barat'),
(290, 'SMP HANG TUAH I (Jl. Angin Prahara No. 1 Komplek Al Dewa Ruci RW. 17, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Angin Prahara No. 1 Komplek Al Dewa Ruci RW. 17, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.110282, 106.921761, 'Cilincing', 'Semper Barat'),
(291, 'SMA 92 (Jl. Pemadam Kebakaran No. 17 RW. 01, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Pemadam Kebakaran No. 17 RW. 01, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.130001, 106.927422, 'Cilincing', 'Semper Barat'),
(292, 'TK NEGERI 01 CILINCING (Jl. Bakti RT 03/ RW 06, Semper Barat, Kec. Cilincing, Kota Jkt Utara) ', 'Jl. Bakti RT 03/ RW 06, Semper Barat, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.739097, 106.552200, 'Cilincing', 'Semper Barat'),
(293, 'KEBERSAMAAN (Jl. Asrama DKI RT. 06/ RW 03, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Asrama DKI RT. 06/ RW 03, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.131265, 106.920395, 'Cilincing', 'Semper Barat'),
(294, 'RAME-RAME (Jl. Asrama DKI RT. 04/ RW 03, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Asrama DKI RT. 04/ RW 03, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.131265, 106.920395, 'Cilincing', 'Semper Barat'),
(295, 'SUKA SENANG (Jl. Pemadam Kebakaran RT. 14 RW. 01, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Pemadam Kebakaran RT. 14 RW. 01, Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.129410, 106.925125, 'Cilincing', 'Semper Barat'),
(296, 'BASEMBAR (KELURAHAN SEMPER BARAT) (Jl. Komp. Pemadam Kebakaran No.1, RT.14/RW.1, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'KELURAHAN SEMPER BARAT (Jl. Komp. Pemadam Kebakaran No.1, RT.14/RW.1, Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'unit', -6.129910, 106.924644, 'Cilincing', 'Semper Barat'),
(297, 'SAUNG ASRI (Jl. Asrama DKI  RT.17/RW.03,  Semper Barat, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Asrama DKI  RT.17/RW.03,  Semper Barat, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.131265, 106.920395, 'Cilincing', 'Semper Barat'),
(298, 'PRIMA SDN 05 (Jalan Kebantenan 4 No.19 , RT.10/RW.4, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jalan Kebantenan 4 No.19 , RT.10/RW.4, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.111851, 106.930588, 'Cilincing', 'Semper Timur'),
(299, 'SDN 07 SEMPER TIMUR (ASINAN) (Jalan Kebantenan IV No.35, RT.12/RW.06, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jalan Kebantenan IV No.35, RT.12/RW.06, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.111445, 106.931969, 'Cilincing', 'Semper Timur'),
(300, 'SDN 03 SEMPER TIMUR PERTIGA (Jl. Kebantenan IV No.1, RT.10/RW.3, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Kebantenan IV No.1, RT.10/RW.3, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.109233, 106.932465, 'Cilincing', 'Semper Timur'),
(301, 'SMA 73 JAKARTA (Jl. Cakung Cilincing Raya No.1, RT.8/RW.1, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Cakung Cilincing Raya No.1, RT.8/RW.1, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.111319, 106.924362, 'Cilincing', 'Semper Timur'),
(302, 'KAMPUS (Kampung Sawah RT.10/ RW 11, Kel. Semper Timur, Kec. Cilincing, Kota Jkt Utara )', 'Kampung Sawah RT.10/ RW 11, Kel. Semper Timur, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.117923, 106.900726, 'Cilincing', 'Semper Timur'),
(303, 'SDI NURUL FALLAH I(Jl. Dewa Kembar Komplek TNI AD, RT 02/ RW 01, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Dewa Kembar Komplek TNI AD, RT 02/ RW 01, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.630272, 106.553291, 'Cilincing', 'Semper Timur'),
(304, 'SDI NURUL FALLAH II (Jl. Dewa Kembar Komplek TNI AD, RT 02/ RW 01, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Dewa Kembar Komplek TNI AD, RT 02/ RW 01, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.630272, 106.553291, 'Cilincing', 'Semper Timur'),
(305, 'SDN 02 (Jl. Kebantenan V No. 35, RT 06/RW 06, Semper Timur, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Kebantenan V No. 35, RT 06/RW 06, Semper Timur, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.108480, 106.930382, 'Cilincing', 'Semper Timur'),
(306, 'ALAM INDAH (RW.07 Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara )', 'RW.07 Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.124012, 106.905647, 'Cilincing', 'Sukapura'),
(307, 'SUKAPURA MAJU (RT.011/ RW. 01, Kel, Sukapura, Kec. Cilincing, Kota Jkt Utara)', 'RT.011/ RW. 01, Kel, Sukapura, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.142947, 106.924232, 'Cilincing', 'Sukapura'),
(308, 'SDN 02 SUKAPURA (Jl. Tipar Cakung Gg. Kompi Jenggot, Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara )', 'Jl. Tipar Cakung Gg. Kompi Jenggot, Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.145946, 106.921570, 'Cilincing', 'Sukapura'),
(309, 'SDN 05 SUKAPURA (Jl. Tipar Cakung Gg. Kompi Jenggot, Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Tipar Cakung Gg. Kompi Jenggot, Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.152502, 106.926842, 'Cilincing', 'Sukapura'),
(310, 'BOUGENVILLE (SDN 06 SUKAPURA) (Jl. Beo Komplek Walikota No.6, RT.12/RW.6, Sukapura, Kec. Cilincing, Kota Jkt Utara  )', 'Jl. Beo Komplek Walikota No.6, RT.12/RW.6, Sukapura, Kec. Cilincing, Kota Jkt Utara  ', 'unit', -6.150549, 106.921989, 'Cilincing', 'Sukapura'),
(311, 'SMAN 83 (Jl. Tipar Cakung, Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Tipar Cakung, Kel. Sukapura, Kec. Cilincing, Kota Jkt Utara   ', 'unit', -6.155958, 106.927216, 'Cilincing', 'Sukapura'),
(312, 'SDN 01 (SAKURA) (Jl. Beo Komplek Walikota No.6, RT.12/RW.6, Sukapura, Kec. Cilincing, Kota Jkt Utara  )', 'Jl. Beo Komplek Walikota No.6, RT.12/RW.6, Sukapura, Kec. Cilincing, Kota Jkt Utara  ', 'unit', -6.150549, 106.921989, 'Cilincing', 'Sukapura'),
(313, 'SDN 04 (SPARTA) (Jl. Tipar Cakung RT 07 RW 04, Sukapura, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Tipar Cakung RT 07 RW 04, Sukapura, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.152502, 106.926842, 'Cilincing', 'Sukapura'),
(314, 'SMPN 289 SUKAPURA (Jl. Tipar Cakung No.18 RT.01/RW.05, Sukapura, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Tipar Cakung No.18 RT.01/RW.05, Sukapura, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.138932, 106.918335, 'Cilincing', 'Sukapura'),
(315, 'CIBER (CILINCING BERSIH) (Jl. Bulak Cabe RT.008/09 Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Bulak Cabe RT.008/09 Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.105684, 106.932442, 'Cilincing', 'Cilincing'),
(316, 'CILINDAH (Jl. Sungai Landak Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara )', 'Jl. Sungai Landak Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.105164, 106.940590, 'Cilincing', 'Cilincing'),
(317, 'SDN 02 CILINCING (PEDULI LINGKUNGAN) (Jl. Bakti Gg. 6 RT.05/ RW 09, Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Bakti Gg. 6 RT.05/ RW 09, Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.108476, 106.938530, 'Cilincing', 'Cilincing'),
(318, 'SDN 03 CILINCING (Jl. Sungai Landak No.36 Rt. 03/08, Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara )', 'Jl. Sungai Landak No.36 Rt. 03/08, Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.100880, 106.938141, 'Cilincing', 'Cilincing'),
(319, 'SDN 01 CILINCING (Jl. Cilincing No.17, RT.5/RW.8, Cilincing, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Cilincing No.17, RT.5/RW.8, Cilincing, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.108906, 106.936470, 'Cilincing', 'Cilincing'),
(320, 'PAUD ANGGREK 08 (Jl. Raya Cilincing RT.02/ RW. 08, Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara )', 'Jl. Raya Cilincing RT.02/ RW. 08, Kel. Cilincing, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.102340, 106.934608, 'Cilincing', 'Cilincing'),
(321, 'KARYA BHAKTI (Perum Green Garden RT.07/01 Kel.Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Perum Green Garden RT.07/01 Kel.Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.151778, 106.951492, 'Cilincing', 'Rorotan'),
(322, 'SMK NEGERI 4 (Jl. Rorotan 6 No. 1 RT. 04/05 Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan 6 No. 1 RT. 04/05 Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.140956, 106.954437, 'Cilincing', 'Rorotan'),
(323, 'SDN 07 ROROTAN (Jl. Rorotan IV Malaka III HB RT 06/ RW 06, Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan IV Malaka III HB RT 06/ RW 06, Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.847022, 106.571991, 'Cilincing', 'Rorotan'),
(324, 'SDN 02 ROROTAN (Jl. Rorotan IX RT 01/ RW 07, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan IX RT 01/ RW 07, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.157291, 106.956642, 'Cilincing', 'Rorotan'),
(325, 'SDN 01 ROROTAN (Jl. Rorotan IX RT 011/010, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan IX RT 011/010, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.157622, 106.955566, 'Cilincing', 'Rorotan'),
(326, 'SDN 05 ROROTAN (Jl. Rorotan XI, RT 06/ RW 06, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan XI, RT 06/ RW 06, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.143913, 106.956352, 'Cilincing', 'Rorotan'),
(327, 'SDN 03 ROROTAN (Jl. Rorotan XI, RT 06/ RW 06, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan XI, RT 06/ RW 06, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.143913, 106.956352, 'Cilincing', 'Rorotan'),
(328, 'KELURAHAN ROROTAN (Jl. Malaka Jaya RW 06, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Malaka Jaya RW 06, Kel. Rorotan, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.144447, 106.952187, 'Cilincing', 'Rorotan'),
(329, 'PESONA DASA KAMBOJA (Jl. Rorotan, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Rorotan, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.145177, 106.936913, 'Cilincing', 'Rorotan'),
(330, 'RUSUN MARUNDA BISA (Rusun Marunda RW.11, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Rusun Marunda RW.11, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara ', 'unit', -6.097642, 106.961906, 'Cilincing', 'Marunda'),
(331, 'SDN 02 MARUNDA (Jl. Marunda Pulo RT 03/ RW 07, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Marunda Pulo RT 03/ RW 07, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.094910, 106.959671, 'Cilincing', 'Marunda'),
(332, 'SMK 49 MARUNDA (Jl. Sarang Bango No. 1, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Sarang Bango No. 1, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.745419, 106.571999, 'Cilincing', 'Marunda'),
(333, 'SMPN 162 MARUNDA (Jl. Marunda IV No.1, Kel. Marunda, Ekc. Cilincing, Kota Jkt Utara)', 'Jl. Marunda IV No.1, Kel. Marunda, Ekc. Cilincing, Kota Jkt Utara', 'unit', -6.727613, 106.573517, 'Cilincing', 'Marunda'),
(334, 'SDN 01 MARUNDA (Jl. Marunda Baru No. 1 RT.07/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Marunda Baru No. 1 RT.07/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.072900, 106.573196, 'Cilincing', 'Marunda'),
(335, 'SDN 03 MARUNDA (Jl. Marunda Baru X No.14 RT.13/ RW.03, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Marunda Baru X No.14 RT.13/ RW.03, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.072740, 106.573227, 'Cilincing', 'Marunda'),
(336, 'TULIP (Jl. Bidara RT. 03/ RW. 01 Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Bidara RT. 03/ RW. 01 Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.107205, 106.959312, 'Cilincing', 'Marunda'),
(337, 'ANGGREK II (Jl. Marunda Gang IV No. 09 RT 06/ RW.06, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Marunda Gang IV No. 09 RT 06/ RW.06, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.122912, 106.955292, 'Cilincing', 'Marunda'),
(338, 'TOMAT (Jl. Sarang Bango RT.01/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Sarang Bango RT.01/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.129611, 106.953461, 'Cilincing', 'Marunda'),
(339, 'MAJU SELALU (Jl. Sarang Bango No. 04 RT 06/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Sarang Bango No. 04 RT 06/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.126669, 106.954628, 'Cilincing', 'Marunda'),
(340, 'BOUGENVILLE (RT. 10/ RW.04 Marunda, Kec. Cilincing, Kota Jkt Utara)', 'RT. 10/ RW.04 Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.100510, 106.932671, 'Cilincing', 'Marunda'),
(341, 'ARMAIN CITY (RT. 08 /RW.05 Marunda, Kec. Cilincing, Kota Jkt Utara)', 'RT. 08 /RW.05 Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.124841, 106.957024, 'Cilincing', 'Marunda'),
(342, 'BAROKAH SABANG (Jl. Sarang Bango RT.09/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Sarang Bango RT.09/ RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.131518, 106.953316, 'Cilincing', 'Marunda'),
(343, 'UDANG (Jl. Bambu Kuning No. 13 RT.01/ RW.02, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Bambu Kuning No. 13 RT.01/ RW.02, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.114746, 106.966599, 'Cilincing', 'Marunda'),
(344, 'CEMARA (Jl. Kampung Sungai Tiram No. 3 RT.06 / RW.06, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Kampung Sungai Tiram No. 3 RT.06 / RW.06, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.122302, 106.955017, 'Cilincing', 'Marunda'),
(345, 'JAMBU AIR (Jl. Sarang Bango RT.07 /RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara)', 'Jl. Sarang Bango RT.07 /RW.05, Kel. Marunda, Kec. Cilincing, Kota Jkt Utara', 'unit', -6.125847, 106.954643, 'Cilincing', 'Marunda'),
(346, 'BERSERI (KELURAHAN MARUNDA KECAMATAN CILINCING)', 'KELURAHAN MARUNDA KECAMATAN CILINCING', 'unit', -6.143730, 106.952332, 'Cilincing', 'Marunda'),
(347, 'TIRAM MAKMUR (Jl. Sungai Tiram RT.011/ RW.02, Kel. Marunda, Kec. Cilincing, Kota JKt Utara)', 'Jl. Sungai Tiram RT.011/ RW.02, Kel. Marunda, Kec. Cilincing, Kota JKt Utara', 'unit', -6.116124, 106.955307, 'Cilincing', 'Marunda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax1` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_total_after_tax` decimal(10,2) NOT NULL,
  `order_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_no`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax1`, `order_total_tax`, `order_total_after_tax`, `order_datetime`) VALUES
(1, '1', '2020-07-12', 'Halo', 'Gang muda', 324.00, 6.48, 6.48, 330.48, '2020-07-12 00:00:00'),
(2, '2', '2020-07-28', 'Santi', 'Menara Orange, Koja', 14000.00, 7000.00, 7000.00, 21000.00, '2020-07-16 00:00:00'),
(3, '3', '2020-07-28', 'Hiskia', 'Jl. Alur Laut No. 1 Rawabadak Selatan Koja', 12000.00, 6000.00, 6000.00, 18000.00, '2020-07-16 00:00:00'),
(5, '4', '2020-07-28', 'Jeli', 'Jl. Bandar II No.12 Rt.6 Rw. 6, Rawabadak, Koja', 4000.00, 2000.00, 2000.00, 6000.00, '2020-07-25 00:00:00'),
(6, '12', '2020-07-28', 'Catherine', 'kelapa gading', 12000.00, 2400.00, 2400.00, 14400.00, '2020-07-25 00:00:00'),
(7, '13', '2020-07-27', 'indah', 'SD suraya', 16000.00, 3000.00, 3000.00, 19000.00, '2020-07-27 00:00:00'),
(10, '15', '2020-07-28', 'Kevin', 'Koja', 40000.00, 16000.00, 16000.00, 56000.00, '2020-07-27 00:00:00'),
(14, '13', '2020-07-28', 'Sandra', 'Kelapa gading', 38000.00, 4000.00, 4000.00, 42000.00, '2020-07-27 00:00:00'),
(15, '19', '2020-07-28', 'karina', 'koja', 41000.00, 7650.00, 7650.00, 48400.00, '2020-07-27 00:00:00'),
(16, '20', '2020-07-28', 'monica', 'tanjung priok', 8000.00, 4000.00, 4000.00, 12000.00, '2020-07-27 00:00:00'),
(17, '1', '2020-08-04', 'Lily', 'kelapa gading, kelapa gading timur', 15000.00, 4500.00, 4500.00, 19500.00, '2020-07-28 00:00:00'),
(18, '21', '2020-07-28', 'Siska', 'SD Suraya (Jl. Lorong 100 No. 73, Koja', 8000.00, 2000.04, 2000.04, 10000.00, '2020-07-28 00:00:00'),
(19, '1', '2020-07-28', 'Kelly', 'Alamat Bank Sampah Unit', 4000.00, 2000.00, 2000.00, 6000.00, '2020-07-28 00:00:00'),
(21, '1', '2020-07-28', 'b', 'kelapa gading', 16000.00, 0.02, 0.02, 16000.00, '2020-08-03 00:00:00'),
(22, '1', '2020-08-04', 'kelly', 'kelapa gading', 6000.00, 0.00, 0.00, 6000.00, '2020-08-04 00:00:00'),
(23, '1', '2020-08-11', 'indri', 'SDN Rawabadak Selatan 05 (Jl. Alur Laut, Jl. Patimura No.45, RT.7/RW.3, Rawabadak Sel., Koja, Kota Jkt Utara)', 1400.00, 0.00, 0.00, 1400.00, '2020-08-11 00:00:00'),
(24, '1', '2020-08-12', 'beatrix', 'bsd', 2800.00, 1400.00, 1400.00, 4200.00, '2020-08-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_actual_amount` decimal(10,2) NOT NULL,
  `order_item_tax1_rate` decimal(10,2) NOT NULL,
  `order_item_tax1_amount` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`order_item_id`, `order_id`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_actual_amount`, `order_item_tax1_rate`, `order_item_tax1_amount`, `order_item_final_amount`) VALUES
(5, 1, 'Plastik', 10.00, 10.00, 100.00, 2.00, 2.00, 102.00),
(6, 1, 'Besi', 32.00, 7.00, 224.00, 2.00, 4.48, 228.48),
(14, 7, 'plastik dirigen', 3.00, 2000.00, 6000.00, 50.00, 3000.00, 9000.00),
(29, 18, 'Kertas Kardus', 2.00, 2000.00, 4000.00, 50.00, 2000.00, 6000.00),
(30, 18, 'Aluminium Panci', 1.00, 4000.00, 4000.00, 0.00, 0.04, 4000.00),
(31, 19, 'Kertas Koran', 2.00, 2000.00, 4000.00, 50.00, 2000.00, 6000.00),
(32, 2, 'Kertas HVS', 1.00, 2000.00, 2000.00, 50.00, 1000.00, 3000.00),
(33, 2, 'Kaca bening', 4.00, 3000.00, 12000.00, 50.00, 6000.00, 18000.00),
(34, 3, 'Kaca bening', 4.00, 3000.00, 12000.00, 50.00, 6000.00, 18000.00),
(35, 5, 'plastik kabin', 2.00, 2000.00, 4000.00, 50.00, 2000.00, 6000.00),
(36, 6, 'kertas buku', 3.00, 4000.00, 12000.00, 20.00, 2400.00, 14400.00),
(37, 10, 'logam tembaga', 5.00, 8000.00, 40000.00, 40.00, 16000.00, 56000.00),
(38, 14, 'botol plastik', 5.00, 6000.00, 30000.00, 0.00, 0.00, 30000.00),
(39, 14, 'plastik kabin', 4.00, 2000.00, 8000.00, 50.00, 4000.00, 12000.00),
(40, 15, 'Kaca bening', 5.00, 2000.00, 10000.00, 50.00, 5000.00, 15000.00),
(41, 15, 'plastik kabin', 5.00, 5000.00, 25000.00, 0.00, 250.00, 25000.00),
(42, 15, 'plastik kabin', 3.00, 2000.00, 6000.00, 40.00, 2400.00, 8400.00),
(43, 16, 'plastik dirigen', 4.00, 2000.00, 8000.00, 50.00, 4000.00, 12000.00),
(44, 21, 'Kaca bening', 4.00, 4000.00, 16000.00, 0.00, 0.02, 16000.00),
(45, 17, 'plastik kabin', 3.00, 3000.00, 9000.00, 50.00, 4500.00, 13500.00),
(46, 17, 'Kaca bening', 2.00, 3000.00, 6000.00, 0.00, 0.00, 6000.00),
(47, 24, '1400', 2.00, 1400.00, 2800.00, 50.00, 1400.00, 4200.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_number` bigint(30) NOT NULL,
  `address` text NOT NULL,
  `id_locations` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`, `mobile_number`, `address`, `id_locations`) VALUES
(1, 'mullbank_admin01', 'admin01@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 1),
(2, 'royal', 'royal@mullbank.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 85311223344, 'Jakarta raya, halalala', 0),
(3, 'hola', 'hola@mullbank.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 1122334455, 'Tangerang selatan, bsd city', 0),
(4, 'soul', 'soul@mullbank.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 6414134, 'Bandung, gang kecil', 0),
(5, 'mullbank_admin02', 'admin02@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 63224134, 'Jakarta utara, gang indah', 2),
(6, 'rendy', 'rendyyeniusxander@gmail.com', 'user', '088af7fd14d003befebc6d898070e5b5', 895382178795, 'The Icon, Cosmo Cluster, Jalan Eastern V, Blok E2, No. 17', 0),
(7, 'atmadjakelly@gmail.com', 'atmadjakelly@gmail.com', 'user', '8ab39dea4f78c861def7d03d891074dc', 85697352948, 'The Green BSD', 0),
(8, 'Adela8', 'dela_prasetya@yahoo.com', 'user', 'dd4115f50e55a6889ab4c7306d350b3d', 87786623148, 'Arinda Permai 1, Pondok Aren', 0),
(10, 'mullbank_admin03', 'admin03@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 859776622432, 'jl koja 1', 3),
(11, 'kelly', 'kellyatmadja@yahoo.com', 'user', '3551d59e07db37e16ee50866e88b70b4', 811890380, 'Kelapa Gading', 0),
(12, 'melki', 'melkisedek121@gmail.com', 'user', '116a3f6c90fa44cb61c0bf8de9af9ea3', 81248035123, 'jln kelapa hibrida V Ra 15 no 12', 0),
(13, 'mullbank_admin04', 'admin04@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 4),
(14, 'mullbank_admin05', 'admin05@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 5),
(15, 'mullbank_admin06', 'admin06@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 6),
(16, 'mullbank_admin07', 'admin07@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 7),
(17, 'mullbank_admin08', 'admin08@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 8),
(18, 'mullbank_admin09', 'admin09@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 9),
(19, 'mullbank_admin10', 'admin10@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 10),
(20, 'mullbank_admin11', 'admin11@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 11),
(21, 'mullbank_admin12', 'admin12@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 12),
(22, 'mullbank_admin13', 'admin13@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 13),
(23, 'mullbank_admin14', 'admin14@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 14),
(24, 'mullbank_admin15', 'admin15@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 15),
(25, 'mullbank_admin16', 'admin16@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 16),
(26, 'mullbank_admin17', 'admin17@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 17),
(27, 'mullbank_admin18', 'admin18@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 18),
(28, 'mullbank_admin19', 'admin19@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 19),
(29, 'mullbank_admin20', 'admin20@mullbank.com', 'admin', 'a66abb5684c45962d887564f08346e8d', 81300112233, 'Jalan balalalala', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2016043015;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

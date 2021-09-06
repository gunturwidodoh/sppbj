-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 04:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppbj`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi_eksisting`
--

CREATE TABLE `aplikasi_eksisting` (
  `id` int(11) NOT NULL,
  `nama_aplikasi` varchar(100) DEFAULT NULL,
  `business_owner` varchar(100) DEFAULT NULL,
  `domain_aplikasi` varchar(100) DEFAULT NULL,
  `ip_local` varchar(100) DEFAULT NULL,
  `ip_public` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aplikasi_eksisting`
--

INSERT INTO `aplikasi_eksisting` (`id`, `nama_aplikasi`, `business_owner`, `domain_aplikasi`, `ip_local`, `ip_public`) VALUES
(1, 'Efaktur', 'Akuntansi', 'Desktop Aplikasi', '10.1.54.74', '114.5.119.181'),
(2, 'Tiket Online ETIS', '', 'tiket2.indonesiaferry.co.id', '10.1.54.80', '115.5.117.24'),
(3, 'API Etiket POS', '', '', '10.1.54.85', '114.5.119.163'),
(4, 'Aplikasi HCIS SDM', 'SDM', 'hcis.indonesiaferry.id', '10.1.54.54', '114.5.119.168'),
(5, 'Aplikasi ITDesk', 'IT', 'itdesk.indonesiaferry.id', '10.1.54.130', '114.5.119.165'),
(6, 'Aplikasi Bunker BBM', 'Operasional', 'ibs.indonesiaferry.id', '10.1.54.93', '114.5.119.171'),
(7, 'Aplikasi Token Prabayar', 'Opersaional', 'prabayar.indonesiaferry.id', '10.1.54.90', '114.5.119.172'),
(8, 'Aplikasi Etiket Barcoding', 'IT', 'barcoding.indonesiaferry.id', '10.1.54.75', '114.5.119.174'),
(9, 'API SAP PROD', 'IT', '', '10.1.54.73', '114.5.119.176'),
(10, 'API SAP QASDEV', 'IT', '', '10.1.54.78', '114.5.119.177'),
(11, 'CMS content management system', 'Pelayanan', 'cms.indonesiaferry.id', '10.1.54.61', '114.5.119.175'),
(12, 'Aplikasi Mobile Apps ', 'Pelayanan', '', '10.1.54.61', '114.5.119.175'),
(13, 'Nginx Public', '', '', '10.54.69', '114.5.119.169'),
(14, 'Aplikasi Ebas Keuangan', 'Anggaran Keuangan', 'ebas.indonesiaferry.id', '10.1.54.113', '114.5.119.184'),
(15, 'Aplikasi Sistem Manajemen Keselamatan', 'K2L', 'smk.indonesiaferry.id', '10.1.54.115', '114.5.119.182'),
(16, 'Aplikasi BBM - AIR', 'Operasional', 'bbm-air.indonesiaferry.id', '10.1.54.49', '114.5.119.183'),
(17, 'Aplikasi EPPT Akuntansi', 'Akuntansi', 'eppt.indonesiaferry.id', '10.1.54.11', '114.5.119.185'),
(18, 'Aplikasi suku cadang RIS Logistik', 'Logistik', 'ris.indonesiaferry.id', '10.1.54.136', '114.5.119.186'),
(19, 'Aplikasi Penilaian Rekanan ', 'Umum', 'nilairekanan.indonesiaferry.id', '10.1.54.101', '114.5.119.187'),
(20, 'Email Corporate', 'IT', 'mail.indonesiaferry.co.id', '10.1.54.125', '114.5.119.180'),
(21, 'Aplikasi ELSA SDM', 'SDM', 'elsa.indonesiaferry.id', '10.1.54.18', '114.5.119.164'),
(22, 'Aplikasi Absensi SDM', 'SDM', 'absensi.indonesiaferry.id', '10.1.54.19', '114.5.119.166'),
(23, 'Aplikasi Rekrutmen SDM', 'SDM', 'rekrutmen.indonesiaferry.id', '10.1.54.56', '114.5.119.188'),
(24, 'Aplikasi FIDIAS Keuangan', 'Keuangan', 'fidias.indonesiaferry.id', '10.1.54.138', '114.5.117.25'),
(25, 'Aplikasi Vendor Fidias Keuangan', 'Keuangan', 'vpayment.indonesiaferry.id', '10.1.54.139', '114.5.117.26'),
(26, 'Aplikasi Eoffice', 'Umum', 'eoffice.indonesiaferry.id', '10.1.54.107', '114.5.117.27'),
(27, 'Aplikasi Sistem Manajemen Audit Internal', 'SPI', 'smail.indonesiaferry.id', '10.1.54.97', '114.5.117.28'),
(28, 'Aplikasi Electronic Risk Manajemen', 'ERM', 'erm.indonesiaferry.id', '10.1.54.97', '114.5.117.28'),
(29, 'API Eticketing System', '', 'api.Indonesiaferry.id', '10.1.54.103', ''),
(30, 'Aplikasi divis logistik', 'Logistik', 'smartlogistik.Indonesiaferry.id', '10.1.107.137', ''),
(31, 'Aplikasi data produksi divisi operasional (system monitoring produksi dan pendapatan)', 'Komersil', 'semprotan.Indonesiaferry.id', '10.1.54.69', '114.5.119.169'),
(32, 'Aplikasi divisi pelayanan', '', 'infoasdp.Indonesiaferry.id', '10.1.54.61', '114.5.119.175'),
(33, 'Aplikasi database divisi fasilitas', 'Fasilitas', 'databasefasilitas.Indonesiaferry.id', '10.1.54.110', ''),
(34, 'Aplikasi single sign on', 'IT', 'sso.Indonesiaferry.id', '10.1.54.114', ''),
(35, 'Aplikasi indonesia property', 'IFPRO', 'asdpproperty.Indonesiaferry.id', '10.1.54.116', ''),
(36, 'Aplikasi Training center ', 'divisi fasilitas', 'kms.Indonesiaferry.id', '10.1.54.61', '114.5.119.175'),
(37, 'Aplikasi eprocurment untuk external', '', 'eproc.Indonesiaferry.id', '10.1.54.62', ''),
(38, 'Aplikasi eprocurment untuk internal', '', 'escm.indonesiaferry.id', '10.1.54.63', ''),
(39, 'Aplikasi key performance indicators', '', 'kpi.Indonesiaferry.id', '10.1.54.69', '114.5.119.169'),
(40, 'Aplikasi assesment divisi pelayanan', '', 'pelayanan.Indonesiaferry.id', '10.1.54.69', '114.5.119.169'),
(41, 'Aplikasi portal hukum divisi hukum', 'Hukum', 'portalhukum.Indonesiaferry.id', '10.1.54.69', '114.5.119.169'),
(42, 'Aplikasi ship maintenance system ', 'Teknik Kapal', 'sms.Indonesiaferry.id', '10.1.54.69', '114.5.119.169'),
(43, 'Aplikasi Whistleblowing System', '', 'wbs.Indonesiaferry.id', '10.1.54.69', '114.5.119.169'),
(44, 'Sistem Engine Monitoing Online ', 'Teknik Kapal', 'siemon.Indonesiaferry.id', '10.1.54.79', ''),
(45, 'Aplikasi MONITORING BIAYA RUTIN', 'SDM', 'ambar.Indonesiaferry.id', '10.1.54.56', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `no_drp` varchar(200) NOT NULL,
  `no_sppbj` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `code` varchar(100) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `tahun` int(4) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `program` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `target` date NOT NULL,
  `mata_anggaran` int(200) NOT NULL,
  `jenis_anggaran` varchar(200) NOT NULL,
  `anggaran_edrp` int(200) NOT NULL,
  `nilai_sppbj` varchar(200) NOT NULL,
  `nilai_kontrak` varchar(128) NOT NULL,
  `nomor_po` int(100) NOT NULL,
  `nomor_kontrak` varchar(128) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `jangka_waktu` varchar(128) NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `jaminan_pelaksanaan` varchar(128) NOT NULL,
  `rekanan` varchar(128) NOT NULL,
  `npwp_rekanan` varchar(128) NOT NULL,
  `nama_am` varchar(128) NOT NULL,
  `alamat_rekanan` varchar(128) NOT NULL,
  `termin_1` int(100) NOT NULL,
  `termin_2` int(100) NOT NULL,
  `termin_3` int(100) NOT NULL,
  `termin_4` int(100) NOT NULL,
  `termin_5` int(100) NOT NULL,
  `tot_pembayaran` int(100) NOT NULL,
  `q1` varchar(128) NOT NULL,
  `q2` varchar(128) NOT NULL,
  `q3` varchar(128) NOT NULL,
  `q4` varchar(128) NOT NULL,
  `opex` int(128) NOT NULL,
  `capex` int(128) NOT NULL,
  `selisih` int(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `ttd` varchar(128) NOT NULL,
  `perbandingan` varchar(128) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `no_drp`, `no_sppbj`, `tanggal`, `code`, `nama`, `kategori`, `tahun`, `deskripsi`, `program`, `pic`, `target`, `mata_anggaran`, `jenis_anggaran`, `anggaran_edrp`, `nilai_sppbj`, `nilai_kontrak`, `nomor_po`, `nomor_kontrak`, `tanggal_kontrak`, `jangka_waktu`, `tanggal_berakhir`, `jaminan_pelaksanaan`, `rekanan`, `npwp_rekanan`, `nama_am`, `alamat_rekanan`, `termin_1`, `termin_2`, `termin_3`, `termin_4`, `termin_5`, `tot_pembayaran`, `q1`, `q2`, `q3`, `q4`, `opex`, `capex`, `selisih`, `status`, `ttd`, `perbandingan`, `keterangan`, `created_date`, `modified_date`) VALUES
(40, '024/DRP/128-TIF/2021', '71/SPPBJ/TI/VI/2021', '0000-00-00', 'ITO-03', 'Jasa Support Maintenance Sistem ERP PT ASDP Indonesia Ferry Tahun 2021-2022', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 09:15:11', '2021-09-03 10:38:50'),
(43, '', '', '0000-00-00', 'ITO-06', 'Renewal sistem monitoring aplikasi service desk tahun 2021-2022', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 09:15:41', '2021-09-03 09:15:41'),
(49, '', '', '0000-00-00', 'ITO-08', 'PENGADAAN JASA SERVICE DESK DIVISI TEKNOLOGI INFORMASI TAHUN 2021-2022', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 10:40:04', '2021-09-03 10:40:04'),
(51, '', '', '0000-00-00', 'ITO-10', '\"Perangkat sparepart server dan infrastruktur jaringan  (Tahun 2021) \"', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 10:40:23', '2021-09-03 10:40:23'),
(55, '017/DRP/128-TIF/2022', '49/SPPBJ/TI/I/20212', '0000-00-00', 'ITO-19', 'Pengadaan Internet Main Link Kantor Pusat Tahun 2021-2023', 'Program Kerja', 2021, 'Test', 'Testt', 'Guntur', '2021-08-31', 2147483647, 'Tahunan', 1000000000, '1000000000', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 15:18:16', '2021-09-03 18:03:45'),
(62, '', '', '0000-00-00', 'test', 'test', 'test', 2021, 'test', 'test', 'test', '2021-09-14', 1231231, 'test', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 22:34:21', '2021-09-03 22:34:21'),
(63, '', '', '0000-00-00', 'ITO-120', '', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 22:34:31', '2021-09-03 22:34:31'),
(64, '', '', '0000-00-00', 'ITO-80', '', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 22:34:38', '2021-09-03 22:34:38'),
(68, '', '', '0000-00-00', '12312312312312', '', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 22:52:49', '2021-09-03 22:52:49'),
(69, '', '', '0000-00-00', '23123123123123', '', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 23:05:20', '2021-09-03 23:05:20'),
(70, '', '', '0000-00-00', '12312', '', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 23:05:24', '2021-09-03 23:05:24'),
(71, '', '', '0000-00-00', '12e12', '', '', 2021, '', '', '', '0000-00-00', 0, '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '2021-09-03 23:05:28', '2021-09-03 23:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$OrreQCdi/7MNwX4o5g7VZ.aVwR7pq1Lm3B512tZVbZWPqQYW5IXDu', '1'),
(2, 'user1', '$2y$10$yfQTbhcIx7POy3g4yl2M0u2fdh4mnK2yTxDzqNMemAVnvEoJ3Z0Ka', '2'),
(12, 'guest1', '$2y$10$MBZ.OYcf3lWGIJj4dw766OaU8d1wSgepym/FbsWFtkEZOm6OgQa4a', '3'),
(13, 'admin2', '$2y$10$3A2Q5aQt0McBRT.j.JnLSelgEl8lO7lChdvHVsCdUl4DL5SVO7PEG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `no_drp` varchar(200) NOT NULL,
  `no_sppbj` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `code` varchar(100) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `tahun` int(4) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `program` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `target` date NOT NULL,
  `mata_anggaran` varchar(128) NOT NULL,
  `jenis_anggaran` varchar(200) NOT NULL,
  `anggaran_edrp` int(200) NOT NULL,
  `nilai_sppbj` varchar(200) NOT NULL,
  `nilai_kontrak` varchar(128) NOT NULL,
  `nomor_po` int(100) NOT NULL,
  `nomor_kontrak` varchar(128) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `jangka_waktu` varchar(128) NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `jaminan_pelaksanaan` varchar(128) NOT NULL,
  `rekanan` varchar(128) NOT NULL,
  `npwp_rekanan` varchar(128) NOT NULL,
  `nama_am` varchar(128) NOT NULL,
  `alamat_rekanan` varchar(128) NOT NULL,
  `termin_1` int(100) NOT NULL,
  `termin_2` int(100) NOT NULL,
  `termin_3` int(100) NOT NULL,
  `termin_4` int(100) NOT NULL,
  `termin_5` int(100) NOT NULL,
  `tot_pembayaran` int(100) NOT NULL,
  `q1` varchar(128) NOT NULL,
  `q2` varchar(128) NOT NULL,
  `q3` varchar(128) NOT NULL,
  `q4` varchar(128) NOT NULL,
  `opex` int(128) NOT NULL,
  `capex` int(128) NOT NULL,
  `selisih` int(100) NOT NULL,
  `status` int(200) NOT NULL,
  `ttd` varchar(128) NOT NULL,
  `perbandingan` varchar(128) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `no_drp`, `no_sppbj`, `tanggal`, `code`, `nama`, `kategori`, `tahun`, `deskripsi`, `program`, `pic`, `target`, `mata_anggaran`, `jenis_anggaran`, `anggaran_edrp`, `nilai_sppbj`, `nilai_kontrak`, `nomor_po`, `nomor_kontrak`, `tanggal_kontrak`, `jangka_waktu`, `tanggal_berakhir`, `jaminan_pelaksanaan`, `rekanan`, `npwp_rekanan`, `nama_am`, `alamat_rekanan`, `termin_1`, `termin_2`, `termin_3`, `termin_4`, `termin_5`, `tot_pembayaran`, `q1`, `q2`, `q3`, `q4`, `opex`, `capex`, `selisih`, `status`, `ttd`, `perbandingan`, `keterangan`, `created_date`, `modified_date`) VALUES
(38, '017/DRP/128-TIF/2021', '', '0000-00-00', 'ITO-01', 'Renewal Jasa Sewa Colocation DC1 Telkomsigma dan Penambahan Rack Server Tahun 2021 – 2022', '', 2021, '', '', '', '0000-00-00', '0', '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 09:14:39', '2021-09-03 09:38:58'),
(39, '025/DRP/128-TIF/2021', '', '0000-00-00', 'ITO-02', 'Renewal ATS Sistem ERP SAP ASDP Tahun 2022', '', 2021, '', '', '', '0000-00-00', '0', '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 09:15:01', '2021-09-03 09:43:12'),
(42, '012/DRP/128-TIF/2021', '49/SPPBJ/TI/I/2021', '0000-00-00', 'ITO-05', 'Renewal Support Netapp DCHO dan DC2 Indosat 2021-2024', 'Program Kerja', 2021, '', '', '', '0000-00-00', '0', '', 0, '', '', 0, 'SPB/J.50/PBJ/III/ASDP-2021', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 09:15:31', '2021-09-03 10:34:24'),
(48, '', '', '0000-00-00', 'ITO-07', 'Renewall Jasa Sewa Colocation DC2 Indosat dan Penambahan Rack Server Tahun 2020 - 2021', '', 2021, '', '', '', '0000-00-00', '0', '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 10:39:52', '2021-09-03 10:39:52'),
(59, '', '', '0000-00-00', 'ITO-25', 'Pengadaan Internet Main Link Kantor Cabang Ternate Tahun 2021-2023', 'Program Kerja', 2022, 'Pengadaan barang untuk deployment ticketing', 'Rutin', 'Guntur', '2021-09-06', '2147483647', 'Tahunan', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 22:31:20', '2021-09-03 22:31:20'),
(60, '', '', '0000-00-00', 'ITO-35', 'Renewall Jasa Sewa Colocation DC2 Indosat dan Penambahan Rack Server Tahun 2020 - 2021', 'Program Kerja', 2022, 'Pengadaan Server', 'Rutin', '', '0000-00-00', '2147483647', 'Tahunan', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 22:33:12', '2021-09-03 22:33:12'),
(61, '', '', '0000-00-00', 'ITO-192', 'Renewal Lisensi Adobe Collection Tahun 2021', 'Program Kerja', 2021, 'Pengadaan Lisensi tahunan', 'Rutin', '', '0000-00-00', '2147483647', 'Tahunan', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-03 22:33:57', '2021-09-03 22:33:57'),
(65, '', '', '0000-00-00', 'ITO-998', 'Renewall VMWare Support and Subscription DCHO, DC1 dan DC2  2021-2022', 'Project', 2025, '', 'Rutin', 'Guntur', '0000-00-00', 'Pemeliharaan Alat Teknologi Komunikasi', 'Investasi', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 1, 0, 2, 0, 0, 3, '', '', '', '', 0, 0, 0, 30, 'VP IT', '', '', '2021-09-03 22:34:53', '2021-09-05 23:52:57'),
(75, '', '', '0000-00-00', 'ITO-88', 'PENGADAAN JASA SERVICE DESK DIVISI TEKNOLOGI INFORMASI TAHUN 2022-2024', '', 2021, '', '', '', '0000-00-00', '', '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-06 00:00:04', '2021-09-06 00:00:04'),
(76, '', '', '0000-00-00', 'ITO-92', 'Pengadaan Internet Main Link Kantor Cabang Ternate Tahun 2023-2024', '', 2021, '', '', '', '0000-00-00', '', '', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-06 00:00:55', '2021-09-06 00:00:55'),
(77, '', '', '0000-00-00', 'ITO-192', 'Renewal Lisensi Adobe Collection Tahun 2025', 'Rutin', 2025, 'Pengadaan Lisensi tahunan', 'Rutin', 'Widodo', '2021-11-25', 'Pemeliharaan Alat Teknologi Komunikasi', 'Biaya', 0, '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '2021-09-06 00:06:29', '2021-09-06 00:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `icon`, `url`, `is_active`) VALUES
(1, 1, 'Dashboard', 'fas fa-tachometer-alt', 'admin', 1),
(2, 2, 'Home', 'fas fa-home', 'home', 1),
(3, 1, 'Registration', 'fas fa-user-plus', 'admin/register', 1),
(4, 2, 'Tabel Data Project', 'fas fa-table', 'tabel', 1),
(5, 3, 'Home Guest', 'fas fa-home', 'guest/index', 1),
(6, 3, 'Tabel Project', 'fas fa-table', 'guest/view_project', 1),
(7, 3, 'Tabel Aplikasi Eksisting', 'fas fa-table', 'guest/view_aplikasi', 1),
(10, 3, 'Tabel History Project', 'fas fa-table', 'guest/view_history_project', 1),
(11, 2, 'Tabel History Project', 'fas fa-table', 'tabel/history', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasi_eksisting`
--
ALTER TABLE `aplikasi_eksisting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikasi_eksisting`
--
ALTER TABLE `aplikasi_eksisting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

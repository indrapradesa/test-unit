-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 07:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unit_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_cover`
--

CREATE TABLE `area_cover` (
  `idarea_cover` int(10) UNSIGNED NOT NULL,
  `nama_area` varchar(255) DEFAULT NULL,
  `kode_area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_cover`
--

INSERT INTO `area_cover` (`idarea_cover`, `nama_area`, `kode_area`) VALUES
(1, 'Klayatan', 'KLYT'),
(2, 'Terusan Ambarawa', 'AMRA'),
(3, 'Candi 6', '6CND');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `idcabang` int(10) UNSIGNED NOT NULL,
  `perusahaan_idperusahaan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`idcabang`, `perusahaan_idperusahaan`, `nama`) VALUES
(1, 2, 'Kiosnet'),
(2, 1, 'Dimsnet');

-- --------------------------------------------------------

--
-- Table structure for table `cust_closing`
--

CREATE TABLE `cust_closing` (
  `idcust_closing` int(10) UNSIGNED NOT NULL,
  `prospek_id` int(10) UNSIGNED NOT NULL,
  `vprogram_id` int(10) UNSIGNED DEFAULT NULL,
  `provinsi_id` int(10) UNSIGNED DEFAULT NULL,
  `jenis_cust_id` int(10) UNSIGNED NOT NULL,
  `odp_id` int(10) UNSIGNED DEFAULT NULL,
  `nik` int(10) UNSIGNED DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `almt_ktp` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('P','L') DEFAULT NULL,
  `alamat_terpasang` varchar(255) DEFAULT NULL,
  `koordinat` float DEFAULT NULL,
  `fto_ktp` varchar(255) DEFAULT NULL,
  `fto_rumah` varchar(255) DEFAULT NULL,
  `fto_sc_jalur` varchar(255) DEFAULT NULL,
  `estimasi_kbl` int(50) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_closing`
--

INSERT INTO `cust_closing` (`idcust_closing`, `prospek_id`, `vprogram_id`, `provinsi_id`, `jenis_cust_id`, `odp_id`, `nik`, `nama`, `almt_ktp`, `tgl_lahir`, `jk`, `alamat_terpasang`, `koordinat`, `fto_ktp`, `fto_rumah`, `fto_sc_jalur`, `estimasi_kbl`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1234567890, 'Ahmad', 'Jl. Pahlawan No. 1', '1990-01-01', 'L', 'Jl. Gatot Subroto No. 2', 1.2345, 'foto_ktp1.jpg', 'foto_rumah1.jpg', 'foto_sc_jalur1.jpg', 12, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(2, 2, 2, 2, 2, 2, 2345678901, 'Budi', 'Jl. Ahmad Yani No. 2', '1991-02-02', 'P', 'Jl. Sudirman No. 3', 2.3456, 'foto_ktp2.jpg', 'foto_rumah2.jpg', 'foto_sc_jalur2.jpg', 23, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(3, 3, 1, 3, 3, 3, 3456789012, 'Cici', 'Jl. Raya Bogor No. 3', '1992-03-03', 'L', 'Jl. Thamrin No. 4', 3.4567, 'foto_ktp3.jpg', 'foto_rumah3.jpg', 'foto_sc_jalur3.jpg', 34, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(4, 4, 2, 4, 4, 4, 4294967295, 'Dodi', 'Jl. Raya Bekasi No. 4', '1993-04-04', 'P', 'Jl. Diponegoro No. 5', 4.5678, 'foto_ktp4.jpg', 'foto_rumah4.jpg', 'foto_sc_jalur4.jpg', 45, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(5, 5, 1, 5, 5, 5, 4294967295, 'Eva', 'Jl. Raya Serpong No. 5', '1994-05-05', 'L', 'Jl. Imam Bonjol No. 6', 5.6789, 'foto_ktp5.jpg', 'foto_rumah5.jpg', 'foto_sc_jalur5.jpg', 56, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(6, 6, 3, 6, 6, 6, 4294967295, 'Fani', 'Jl. Raya Tangerang No. 6', '1995-06-06', 'P', 'Jl. Jendral Sudirman No. 7', 6.789, 'foto_ktp6.jpg', 'foto_rumah6.jpg', 'foto_sc_jalur6.jpg', 67, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(7, 8, 1, 1, 1, 1, 1234567890, 'John Doe', 'Jl. Sudirman No. 1', '1990-01-01', 'L', 'Jl. Kebon Jeruk No. 2', 123.456, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 30, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(8, 9, 1, 1, 1, 2, 2345678901, 'Jane Doe', 'Jl. Thamrin No. 2', '1992-02-02', 'P', 'Jl. Tanah Abang No. 3', 234.567, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 45, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(9, 10, 2, 2, 2, 3, 3456789012, 'Bob Smith', 'Jl. Sudirman No. 3', '1995-03-03', 'L', 'Jl. Kebayoran No. 4', 345.678, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 60, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(10, 11, 2, 2, 2, 4, 4294967295, 'Alice Smith', 'Jl. Thamrin No. 4', '1998-04-04', 'P', 'Jl. Tanah Abang No. 5', 456.789, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 75, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(11, 12, 1, 3, 3, 5, 4294967295, 'Peter Parker', 'Jl. Sudirman No. 5', '2001-05-05', 'L', 'Jl. Kebon Jeruk No. 6', 567.89, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 90, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(12, 13, 2, 3, 3, 6, 4294967295, 'Mary Jane', 'Jl. Thamrin No. 6', '2004-06-06', 'P', 'Jl. Tanah Abang No. 7', 678.901, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 105, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(13, 14, 2, 4, 4, 7, 4294967295, 'Tony Stark', 'Jl. Sudirman No. 7', '2007-07-07', 'L', 'Jl. Kebayoran No. 8', 789.012, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 120, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(14, 17, 1, 4, 4, 8, 4294967295, 'Pepper Potts', 'Jl. Thamrin No. 8', '2010-08-08', 'P', 'Jl. Tanah Abang No. 9', 890.123, 'ktp.jpg', 'rumah.jpg', 'jalur.jpg', 120, '2023-04-12 18:04:37', '2023-04-12 18:04:37'),
(15, 21, NULL, NULL, 1, NULL, 1234546456, 'Indra Pradesa', 'asdafdfsdfwef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-12 11:05:04', '2023-04-12 11:05:04'),
(16, 22, NULL, NULL, 1, NULL, 5745654, 'sdfsf', 'sgerg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-13 05:29:23', '2023-04-13 05:29:23'),
(17, 24, NULL, NULL, 2, NULL, 54765478, 'adsasd', 'sefef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-13 05:30:48', '2023-04-13 05:30:48');

--
-- Triggers `cust_closing`
--
DELIMITER $$
CREATE TRIGGER `tr_cust_prospek_update_status` AFTER INSERT ON `cust_closing` FOR EACH ROW BEGIN
  IF EXISTS (SELECT 1 FROM cust_closing WHERE prospek_id = NEW.prospek_id) THEN
    UPDATE cust_prospek
    SET status = 'Closing'
    WHERE idcust_prospek = NEW.prospek_id;
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cust_prospek`
--

CREATE TABLE `cust_prospek` (
  `idcust_prospek` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `metode_id` int(10) UNSIGNED NOT NULL,
  `sales_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tlpn` varchar(50) DEFAULT NULL,
  `status` enum('Prospek','Closing') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_prospek`
--

INSERT INTO `cust_prospek` (`idcust_prospek`, `status_id`, `metode_id`, `sales_id`, `nama`, `alamat`, `no_tlpn`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Andi', 'Jl. Sudirman No. 10', '123456789', 'Closing', NULL, NULL),
(2, 2, 2, 2, 'Budi', 'Jl. Thamrin No. 20', '987654321', 'Prospek', NULL, NULL),
(3, 1, 1, 3, 'Cindy', 'Jl. Gajah Mada No. 30', '2468101214', 'Prospek', NULL, NULL),
(4, 3, 3, 4, 'Dina', 'Jl. Diponegoro No. 40', '369121518', 'Prospek', NULL, NULL),
(5, 2, 1, 5, 'Eka', 'Jl. Kebon Jeruk No. 50', '1516171819', 'Prospek', NULL, NULL),
(6, 1, 2, 6, 'Fani', 'Jl. Gatot Subroto No. 60', '2021222324', 'Prospek', NULL, NULL),
(7, 3, 3, 7, 'Gina', 'Jl. Tanah Abang No. 70', '2526272829', 'Prospek', NULL, NULL),
(8, 2, 2, 8, 'Hadi', 'Jl. Cikini No. 80', '3031323334', 'Prospek', NULL, NULL),
(9, 1, 1, 1, 'Ika', 'Jl. Mangga Dua No. 90', '3536373839', 'Closing', NULL, NULL),
(10, 3, 3, 2, 'Joni', 'Jl. Pemuda No. 100', '4041424344', 'Prospek', NULL, NULL),
(11, 2, 2, 3, 'Kiki', 'Jl. Pahlawan No. 110', '4294967295', 'Prospek', NULL, NULL),
(12, 1, 1, 4, 'Lia', 'Jl. Ahmad Yani No. 120', '4294967295', 'Prospek', NULL, NULL),
(13, 3, 3, 5, 'Mira', 'Jl. Raya Bogor No. 130', '4294967295', 'Prospek', NULL, NULL),
(14, 2, 2, 6, 'Nina', 'Jl. Raya Bekasi No. 140', '4294967295', 'Prospek', NULL, NULL),
(15, 1, 1, 7, 'Oki', 'Jl. Raya Serpong No. 150', '4294967295', 'Closing', NULL, NULL),
(16, 3, 3, 8, 'Pia', 'Jl. Raya Tangerang No. 160', '4294967295', 'Prospek', NULL, NULL),
(17, 2, 2, 1, 'Qin', 'Jl. Raya Cirebon No. 170', '4294967295', 'Closing', NULL, NULL),
(18, 1, 1, 2, 'Rika', 'Jl. Raya Solo No. 180', '4294967295', 'Closing', NULL, NULL),
(19, 3, 3, 3, 'Sari', 'Jl. Raya Malang No. 190', '4294967295', 'Prospek', NULL, NULL),
(20, 2, 2, 4, 'Tina', 'Jl. Raya Bandung No. 200', '4294967295', 'Prospek', NULL, NULL),
(21, 1, 1, 1, 'Indra Pradesa', 'sfsd', '123', 'Closing', '2023-04-11 01:11:40', '2023-04-11 01:11:40'),
(22, 1, 1, 1, 'sdf', 'sfsd', '2124', 'Closing', '2023-04-11 01:27:03', '2023-04-11 01:27:03'),
(23, 1, 1, 1, 'sdf', 'sfsd', '123', 'Prospek', '2023-04-11 01:30:47', '2023-04-11 01:30:47'),
(24, 1, 1, 1, 'adsasd', 'asd', '123', 'Closing', '2023-04-11 01:33:10', '2023-04-11 01:33:10'),
(25, 2, 2, 1, 'Adsasd', 'qwe', '123', 'Prospek', '2023-04-11 01:34:29', '2023-04-11 01:34:29'),
(28, 1, 1, 1, 'adsasd', 'sfsd', '682223666840', 'Prospek', '2023-04-11 07:30:51', '2023-04-11 07:30:51'),
(29, 1, 1, 1, 'adsasd', 'asd', '683214526845213', 'Prospek', '2023-04-11 07:31:39', '2023-04-11 07:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cust`
--

CREATE TABLE `jenis_cust` (
  `idjenis_cust` int(10) UNSIGNED NOT NULL,
  `kategori_cust` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_cust`
--

INSERT INTO `jenis_cust` (`idjenis_cust`, `kategori_cust`) VALUES
(1, 'Perorangan'),
(2, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_program`
--

CREATE TABLE `jenis_program` (
  `idjenis_program` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `tanggal_dibuat` date DEFAULT NULL,
  `S_K` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_program`
--

INSERT INTO `jenis_program` (`idjenis_program`, `nama`, `nominal`, `tanggal_dibuat`, `S_K`) VALUES
(1, 'Potongan 50K', 50000, '2023-04-07', 'Potongan 50K berlaku pada pelanggan baru'),
(2, 'Cashback 50K', 50000, '2023-04-07', 'Cashback berlaku kepada customer yang terdaftar sebagai pelanggan aktif');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` int(10) UNSIGNED NOT NULL,
  `cabang_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nip`, `cabang_id`, `nama`, `email`) VALUES
(101, 1, 'Ali', ''),
(102, 2, 'Budi', ''),
(103, 1, 'Cici', ''),
(104, 1, 'Dodi', ''),
(105, 2, 'Eva', ''),
(12345, 1, 'Indra Pradesa', 'indra@example.com'),
(123456, 2, 'Yanto Basna', '');

-- --------------------------------------------------------

--
-- Table structure for table `komisi`
--

CREATE TABLE `komisi` (
  `idkomisi` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `nominal` double DEFAULT NULL,
  `minimum_rentang` int(10) UNSIGNED DEFAULT NULL,
  `maksimum_rentang` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komisi`
--

INSERT INTO `komisi` (`idkomisi`, `level_id`, `nominal`, `minimum_rentang`, `maksimum_rentang`) VALUES
(1, 1, 1000000, 1, 10),
(2, 2, 2000000, 11, 20),
(3, 3, 3000000, 21, 30);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idlevel` int(10) UNSIGNED NOT NULL,
  `kategori_level` varchar(100) DEFAULT NULL,
  `minimum_closing` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idlevel`, `kategori_level`, `minimum_closing`, `created_at`, `updated_at`) VALUES
(1, 'Level 1', 10, '2023-04-06 15:07:45', '2023-04-06 15:07:45'),
(2, 'Level 2', 20, '2023-04-06 15:07:45', '2023-04-06 15:07:45'),
(3, 'Level 3', 30, '2023-04-06 15:07:45', '2023-04-06 15:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `metode_ketemu`
--

CREATE TABLE `metode_ketemu` (
  `id_metode` int(10) UNSIGNED NOT NULL,
  `jenis_metode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_ketemu`
--

INSERT INTO `metode_ketemu` (`id_metode`, `jenis_metode`) VALUES
(1, 'Ketemu'),
(2, 'Chat');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `idodp` int(10) UNSIGNED NOT NULL,
  `area_cover_id` int(10) UNSIGNED NOT NULL,
  `kode_odp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`idodp`, `area_cover_id`, `kode_odp`) VALUES
(1, 1, 'ODP-001'),
(2, 1, 'ODP-002'),
(3, 2, 'ODP-003'),
(4, 2, 'ODP-004'),
(5, 3, 'ODP-005'),
(6, 3, 'ODP-006');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idperusahaan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idperusahaan`, `nama`) VALUES
(1, 'Dasarata'),
(2, 'Garuda Listas Cakrawala');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `idprogram` int(10) UNSIGNED NOT NULL,
  `jenis_program_id` int(10) UNSIGNED NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`idprogram`, `jenis_program_id`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 1, '2023-04-07', '2023-06-30'),
(2, 2, '2023-04-07', '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `idprovinsi` int(10) UNSIGNED NOT NULL,
  `nama_prov` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`idprovinsi`, `nama_prov`) VALUES
(1, 'Jawa Barat'),
(2, 'Jawa Tengah'),
(3, 'Jawa Timur'),
(4, 'Sumatera Utara'),
(5, 'Sumatera Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `idsales` int(10) UNSIGNED NOT NULL,
  `idlevel` int(11) NOT NULL,
  `karyawan_nip` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`idsales`, `idlevel`, `karyawan_nip`) VALUES
(1, 1, 12345),
(2, 1, 123456),
(3, 1, 101),
(4, 2, 102),
(5, 3, 103);

-- --------------------------------------------------------

--
-- Table structure for table `sebaran_brosur`
--

CREATE TABLE `sebaran_brosur` (
  `idsebaran` int(10) UNSIGNED NOT NULL,
  `area_cover_id` int(11) NOT NULL,
  `sales_id` int(10) UNSIGNED NOT NULL,
  `foto_timbang` varchar(255) DEFAULT NULL,
  `jml_gram` double DEFAULT NULL,
  `tgl_ambil` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sebaran_brosur`
--

INSERT INTO `sebaran_brosur` (`idsebaran`, `area_cover_id`, `sales_id`, `foto_timbang`, `jml_gram`, `tgl_ambil`) VALUES
(1, 1, 1, 'foto1.jpg', 20.5, '2023-04-01'),
(2, 3, 1, 'foto2.jpg', 25, '2023-04-02'),
(3, 2, 2, 'foto3.jpg', 18.2, '2023-04-03'),
(4, 2, 2, 'foto4.jpg', 30.1, '2023-04-04'),
(5, 1, 3, 'foto5.jpg', 16.3, '2023-04-05'),
(6, 3, 3, 'foto6.jpg', 22.8, '2023-04-06'),
(7, 2, 4, 'foto7.jpg', 19.9, '2023-04-07'),
(8, 1, 4, 'foto8.jpg', 28.6, '2023-04-08'),
(9, 3, 5, 'foto9.jpg', 17.7, '2023-04-09'),
(10, 1, 5, 'foto10.jpg', 21.4, '2023-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `status_cust`
--

CREATE TABLE `status_cust` (
  `idstatus_cust` int(10) UNSIGNED NOT NULL,
  `jenis_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_cust`
--

INSERT INTO `status_cust` (`idstatus_cust`, `jenis_status`) VALUES
(1, 'Q&A'),
(2, 'Ragu-Ragu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `karyawan_nip` int(10) UNSIGNED NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `divisi_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `karyawan_nip`, `jabatan_id`, `divisi_id`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 12345, 1, 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'indra@example.com', '4jzOYUbSJC', '2023-04-11 13:22:20', '2023-04-11 13:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `verify_program`
--

CREATE TABLE `verify_program` (
  `idverify_program` int(10) UNSIGNED NOT NULL,
  `closing_id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `verify_by` enum('Admin','Akunting') DEFAULT NULL,
  `tgl_verify` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verify_program`
--

INSERT INTO `verify_program` (`idverify_program`, `closing_id`, `program_id`, `verify_by`, `tgl_verify`) VALUES
(1, 1, 1, 'Admin', '2023-04-01'),
(2, 2, 1, 'Akunting', '2023-04-02'),
(3, 3, 2, 'Admin', '2023-04-03'),
(4, 4, 2, 'Akunting', '2023-04-04'),
(5, 5, 2, 'Admin', '2023-04-06'),
(6, 6, 1, 'Akunting', '2023-04-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_cover`
--
ALTER TABLE `area_cover`
  ADD PRIMARY KEY (`idarea_cover`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`idcabang`),
  ADD KEY `cabang_FKIndex1` (`perusahaan_idperusahaan`);

--
-- Indexes for table `cust_closing`
--
ALTER TABLE `cust_closing`
  ADD PRIMARY KEY (`idcust_closing`),
  ADD UNIQUE KEY `prospek_id` (`prospek_id`);

--
-- Indexes for table `cust_prospek`
--
ALTER TABLE `cust_prospek`
  ADD PRIMARY KEY (`idcust_prospek`);

--
-- Indexes for table `jenis_cust`
--
ALTER TABLE `jenis_cust`
  ADD PRIMARY KEY (`idjenis_cust`);

--
-- Indexes for table `jenis_program`
--
ALTER TABLE `jenis_program`
  ADD PRIMARY KEY (`idjenis_program`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `karyawan_FKIndex1` (`cabang_id`);

--
-- Indexes for table `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`idkomisi`),
  ADD KEY `komisi_FKIndex1` (`level_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idlevel`);

--
-- Indexes for table `metode_ketemu`
--
ALTER TABLE `metode_ketemu`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`idodp`),
  ADD KEY `odp_FKIndex1` (`area_cover_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idperusahaan`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`idprogram`),
  ADD KEY `program_FKIndex1` (`jenis_program_id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`idprovinsi`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`idsales`);

--
-- Indexes for table `sebaran_brosur`
--
ALTER TABLE `sebaran_brosur`
  ADD PRIMARY KEY (`idsebaran`);

--
-- Indexes for table `status_cust`
--
ALTER TABLE `status_cust`
  ADD PRIMARY KEY (`idstatus_cust`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_program`
--
ALTER TABLE `verify_program`
  ADD PRIMARY KEY (`idverify_program`),
  ADD KEY `verify_program_FKIndex1` (`program_id`),
  ADD KEY `verify_program_FKIndex2` (`closing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_cover`
--
ALTER TABLE `area_cover`
  MODIFY `idarea_cover` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `idcabang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cust_closing`
--
ALTER TABLE `cust_closing`
  MODIFY `idcust_closing` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cust_prospek`
--
ALTER TABLE `cust_prospek`
  MODIFY `idcust_prospek` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jenis_cust`
--
ALTER TABLE `jenis_cust`
  MODIFY `idjenis_cust` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_program`
--
ALTER TABLE `jenis_program`
  MODIFY `idjenis_program` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nip` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT for table `komisi`
--
ALTER TABLE `komisi`
  MODIFY `idkomisi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idlevel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metode_ketemu`
--
ALTER TABLE `metode_ketemu`
  MODIFY `id_metode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
  MODIFY `idodp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `idperusahaan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `idprogram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `idprovinsi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `idsales` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sebaran_brosur`
--
ALTER TABLE `sebaran_brosur`
  MODIFY `idsebaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status_cust`
--
ALTER TABLE `status_cust`
  MODIFY `idstatus_cust` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_program`
--
ALTER TABLE `verify_program`
  MODIFY `idverify_program` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

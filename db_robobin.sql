-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 10 Jan 2024 pada 01.58
-- Versi server: 8.0.31
-- Versi PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_robobin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info`
--

DROP TABLE IF EXISTS `tb_info`;
CREATE TABLE IF NOT EXISTS `tb_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jarak_objek` int DEFAULT NULL,
  `jarak_sampah` int DEFAULT NULL,
  `kapasitas` int DEFAULT NULL,
  `daya_baterai` int DEFAULT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_info`
--

INSERT INTO `tb_info` (`id`, `ip_address`, `jarak_objek`, `jarak_sampah`, `kapasitas`, `daya_baterai`, `status`) VALUES
(1, '', 50, 11, 46, 33, 'ROBOBIN Penuh'),
(2, '', 0, 0, 0, 0, ''),
(3, 'testttt', 0, 0, 0, 0, ''),
(4, 'COBA', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

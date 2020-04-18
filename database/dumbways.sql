-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 18 Apr 2020 pada 14.55
-- Versi server: 5.7.26
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumbways`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Makanan Kuah'),
(2, 'Makanan Kering'),
(3, 'Minuman Dingin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foods`
--

INSERT INTO `foods` (`id`, `name`, `stok`, `image`, `deskripsi`, `category_id`) VALUES
(1, 'Soto Ayam', 30, 'sotoayam.jpg', 'Soto Ayam Surabaya', 1),
(2, 'Soto Daging', 20, 'sotodaging.jpg', 'Soto Daging Sapi', 1),
(3, 'Soto Mie', 0, 'sotomie.jpg', 'Soto Mie Bogor', 1),
(4, 'Nasi Goreng', 10, 'nasigoreng.jpg', 'Nasi Goreng Spesial', 2),
(5, 'Nasi Kebuli', 20, 'nasikebuli.jpg', 'Nasi Kebuli Kambing', 2),
(6, 'Nasi Kuning', 30, 'nasikuning.jpg', 'Nasi Kuning Betawi', 2),
(7, 'Es Teh Manis', 10, 'estehmanis.jpg', 'Es Teh Manis', 3),
(8, 'Es Jeruk Manis', 30, 'esjerukmanis.jpg', 'Es Jeruk Manis', 3),
(9, 'Es Campur', 20, 'escampur.jpg', 'Es Campur', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

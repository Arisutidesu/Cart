-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2024 pada 02.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carttb`
--

CREATE TABLE `carttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price_normal` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `text_product` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `carttb`
--

INSERT INTO `carttb` (`id`, `product_name`, `price_normal`, `product_price`, `product_image`, `text_product`) VALUES
(1, 'Beras Anime', 80, 75, 'beras2.jpeg', 'Beras Cap Anime'),
(2, 'Ganci Kucing', 30, 25, 'ganci2.jpg', 'Ganci kucing vtuber'),
(3, 'Kacamata Cosplayer', 135, 125, 'kacamata2.jpg', 'Kacamata khas cosplayer'),
(4, 'Kaos Ame-Ame', 165, 150, 'kaos.jpg', 'Kaos yang bikin kamu ame-ame'),
(5, 'Manga Kaori', 0, 250, 'manga.jpg', 'Manga cicak nih\r\n'),
(6, 'Uang Dewi Bulan', 0, 10000, 'uang2.png', 'Limited Edition '),
(7, 'Susu Kobokan', 0, 100, 'ultramilk2.jpg', 'Susu dari sumbernya'),
(8, 'Kaos Angel', 0, 165, 'whitekaos2.jpg', 'Angel beats nih bos');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carttb`
--
ALTER TABLE `carttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carttb`
--
ALTER TABLE `carttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

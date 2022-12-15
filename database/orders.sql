-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Des 2022 pada 22.25
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TXEcommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailCheckout` varchar(100) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `userAddress` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postalCode` int(6) NOT NULL,
  `country` varchar(50) NOT NULL,
  `totalPayment` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`order_id`, `userID`, `firstName`, `lastName`, `emailCheckout`, `phoneNumber`, `userAddress`, `city`, `postalCode`, `country`, `totalPayment`, `created_at`) VALUES
(1, 2, 'Denta', 'Mipanzii', 'denta@gmail.com', '0822323232', 'jl keputih tegal banjir', 'Surabaya', 65211, 'Indonesia', 32416000, '2022-12-15 21:21:43'),
(2, 2, 'Denta', 'Bramasta', 'denta@gmail.com', '08223232322', 'jl keputih tegal banjir', 'Surabaya', 65652, 'Indonesia', 76913000, '2022-12-15 21:22:54'),
(3, 2, 'Denta', 'Bramasta', 'denta@gmail.com', '08223232322', 'jl keputih tegal banjir', 'Surabaya', 65652, 'Indonesia', 76913000, '2022-12-15 21:23:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

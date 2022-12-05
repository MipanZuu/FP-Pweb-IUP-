-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Des 2022 pada 15.24
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
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_quantity` int(10) NOT NULL DEFAULT 1,
  `item_image` varchar(100) NOT NULL,
  `item_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`, `item_quantity`, `item_image`, `item_code`) VALUES
(1, 'Apple Macbook Pro', 20000000, 1, './dist/products/product1.jpeg', 'p1001'),
(2, 'Fujifilm X-T20', 14499000, 1, './dist/products/product2.jpeg', 'p1002'),
(3, 'Galaxy Z Flip4', 13999000, 1, './dist/products/product3.jpeg', 'p1003'),
(4, 'Laptop HP 14s', 5335000, 1, './dist/products/product4.jpeg', 'p1004'),
(5, 'GoPro Hero 7', 5000000, 1, './dist/products/product5.jpeg', 'p1005'),
(6, 'Philips Hepa Filter 800', 454000, 1, './dist/products/product6.jpeg', 'p1006'),
(7, 'Dyson Vacuum Cleaner', 9999000, 1, './dist/products/product7.jpeg', 'p1007'),
(8, 'HiBREW Coffee Maker', 988000, 1, './dist/products/product8.jpeg', 'p1008');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_code` (`item_code`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

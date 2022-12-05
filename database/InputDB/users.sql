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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `UserEmail`, `UserName`, `UserPassword`) VALUES
(1, 'admin@gmail.com', 'Admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'shafinaa@gmail.com', 'shafinach', 'matahari04'),
(3, 'seraaz@gmail.com', 'selomitazh', 'nhatgf892123'),
(4, 'fachryangelo@yahoo.com', 'FachryAngelo279', 'aeddgkvonfh21kah9012'),
(5, 'fatihakbar@yahoo.com', 'FatihAkbar', '123ndsnvhns490'),
(6, 'amysilva246@gmail.com', 'amy_silva', 'warren9334hdwicisn'),
(7, 'jeff04_day@gmail.com', 'JeffDay_04', '04dayjnasnna235402nahdgsnau1'),
(8, 'rogers_tracy@gmail.com', 'tracyyyr', 'hamkgndgd853ndch018'),
(9, 'justinnhsly@gmail.com', 'justinhnsly', 'ndjfavqrvqsordb61836'),
(10, 'ginarogers@gmail.com', 'rogers_gina', 'nasgasesbqklmgeqcsr618fvst11212ab'),
(11, 'aprilreeves@gmail.com', 'aprilrvs', 'lmfiheufbngvgjbib124j'),
(12, 'anna_delsey@gmail.com', 'delseyanna', 'ruryutnsg123anna3409'),
(13, 'sabrinacarpenter@gmail.com', 'sabrinac', 'nsgddhdlapkhsg123faf67'),
(14, 'kathmcphee@gmail.com', 'katherine45', 'hdfaddqdjnonjn3421'),
(15, 'milliebrown@gmail.com', 'milliebrown', 'brown1234m678hbudjbfjud'),
(16, 'sheltonbrad@gmail.com', 'bradleysheltonnn', 'jndjfnvidbnhbfas1234gvsgvd'),
(17, 'admin@gmail.com', 'asfasf', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

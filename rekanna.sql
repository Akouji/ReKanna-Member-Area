-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Nov 2020 pada 16.56
-- Versi server: 5.7.32-log
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neemyid_lab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekanna`
--

CREATE TABLE `rekanna` (
  `id` int(10) NOT NULL,
  `versi` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `keterangan` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `link` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekanna`
--

INSERT INTO `rekanna` (`id`, `versi`, `keterangan`, `link`, `tanggal`) VALUES
(1, 'Re:Kanna v.1', 'Rilisan pertama.', 'https://google.com', '2020-10-31'),
(2, 'Re:Kanna v.2', 'Perbaikan tampilan dari versi sebelumnya.', 'https://google.com', '2020-10-31'),
(3, 'Re:Kanna v.3', 'Penambahan fitur seperti streaming tabs, manga reader, dll.', 'https://google.com', '2020-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama`, `email`, `level`, `code`) VALUES
(1, 'admin', 'Khatami', 'admin@kanna.my.id', 1, '21232f297a57a5a743894a0e4a801fc3'),
(2, 'member', 'Akouji', 'member@kanna.my.id', 2, 'aa08769cdcb26674c6706093503ff0a3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rekanna`
--
ALTER TABLE `rekanna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rekanna`
--
ALTER TABLE `rekanna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

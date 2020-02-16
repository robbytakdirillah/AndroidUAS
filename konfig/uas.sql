-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2020 pada 14.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `sarana` varchar(20) NOT NULL,
  `lab` varchar(20) NOT NULL,
  `perpus` varchar(20) NOT NULL,
  `dosen` varchar(20) NOT NULL,
  `materi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`nim`, `nama`, `jurusan`, `tgl`, `kelas`, `sarana`, `lab`, `perpus`, `dosen`, `materi`) VALUES
(1630511012, 'Sulaeman', 'Teknik Industri', '2020-02-21', 'Cukup Memuaskan', 'Kurang Memuaskan', 'Cukup Memuaskan', 'Memuaskan', 'Kurang Memuaskan', 'Kurang Memuaskan'),
(1630511066, 'Yoga Permana', 'Teknik Industri', '2020-02-12', 'Kurang Memuaskan', 'Kurang Memuaskan', 'Memuaskan', 'Sangat Memuaskan', 'Memuaskan', 'Tidak Memuaskan'),
(1630511081, 'Agung Maulana', 'Teknik Industri', '2020-02-14', 'Cukup Memuaskan', 'Tidak Memuaskan', 'Cukup Memuaskan', 'Kurang Memuaskan', 'Memuaskan', 'Kurang Memuaskan'),
(1630511088, 'Robby Takdirillah', 'Teknik Informatika', '1997-12-03', 'Memuaskan', 'Cukup Memuaskan', 'Kurang Memuaskan', 'Kurang Memuaskan', 'Memuaskan', 'Kurang Memuaskan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_level`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`nim`);

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

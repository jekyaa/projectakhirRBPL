-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2024 pada 11.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplemice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('pending','aktif','nonaktif') NOT NULL DEFAULT 'pending',
  `role` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `nope`, `alamat`, `status`, `role`) VALUES
(9, 'dika', 'dhikadzakya@gmail.com', '$2y$10$s1dI7nWXqQKRMT/fONh2y.h3gY8MGtVS1KN7uyLJ2/UdrL.XBLeRa', '0821111', 'jogja', 'aktif', 'member'),
(10, 'dika', 'dzakyadhika@gmail.com', '$2y$10$cVbTajLqay95SUbE1ic8T.koVtladnfkPkNWuqMB.AEx6bpgNjvdO', '082111', 'jogja', 'aktif', 'member'),
(11, 'dika', 'aaa@gmail.com', '$2y$10$6N3LTSSI8VeTINqJO.rTou.AHWkAUjhpLZCAFCx2kl8qrhzX1zp1a', '123', 'concat', 'aktif', 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `keterangan`, `foto`, `user_id`) VALUES
(10, 'Wildan', '<p>Gambar terbaik</p>', '293-carousel-1.jpg', 11),
(11, 'Wedding', '<p>asbkjabdsk</p>', '687-destination-1.jpg', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `email`, `subjek`, `message`) VALUES
(3, 'nb', 'nabil@gmail.com', 'komen', 'nabil ganteng banget awwww'),
(4, 'nb', 'nabil@gmail.com', 'Masukan', 'aaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mice`
--

CREATE TABLE `mice` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Destinasi` varchar(50) NOT NULL,
  `Depart` date NOT NULL,
  `Return` date NOT NULL,
  `Durasi` varchar(50) NOT NULL,
  `status` enum('Pending','Accepted') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mice`
--

INSERT INTO `mice` (`id`, `Nama`, `Email`, `Subjek`, `Detail`, `Destinasi`, `Depart`, `Return`, `Durasi`, `status`) VALUES
(1, 'nb', 'nabil@gmail.com', 'awda', 'adwda', '2', '2024-05-19', '2024-05-19', '2', 'Pending'),
(2, 'nbl', 'nabil@gmail.com', 'komen', 'mau ke jogja', '2', '2024-05-19', '2024-05-19', '1', 'Pending'),
(3, 'dika', 'nabil@gmail.com', 'awdawd', 'awdwadawd', '2', '2024-06-02', '2024-06-02', '1', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaanbarang`
--

CREATE TABLE `pengadaanbarang` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Destinasi` varchar(50) NOT NULL,
  `Depart` date NOT NULL,
  `Return` date NOT NULL,
  `Durasi` varchar(50) NOT NULL,
  `status` enum('Pending','Accepted') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengadaanbarang`
--

INSERT INTO `pengadaanbarang` (`id`, `Nama`, `Email`, `Subjek`, `Detail`, `Destinasi`, `Depart`, `Return`, `Durasi`, `status`) VALUES
(1, 'nb', 'nabil@gmail.com', 'awda', 'adwda', '2', '2024-05-19', '2024-05-19', '2', 'Pending'),
(2, 'nbl', 'nabil@gmail.com', 'komen', 'mau ke jogja', '2', '2024-05-19', '2024-05-19', '1', 'Pending'),
(3, 'nbl', 'nabil@gmail.com', 'order', 'mau pesen song', '1', '2024-05-19', '2024-05-19', '2', 'Pending'),
(4, 'nb', 'abil@gmail.com', 'Masukanawd', 'adad', '1', '2024-06-16', '2024-06-16', '1', 'Accepted'),
(5, 'nb', 'abil@gmail.com', 'Masukanawd', 'awdawd', 'Jenis Barang', '2024-06-16', '2024-06-16', '1', 'Accepted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Destinasi` varchar(50) NOT NULL,
  `Depart` date NOT NULL,
  `Return` date NOT NULL,
  `Durasi` varchar(50) NOT NULL,
  `status` enum('Pending','Accepted') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tour`
--

INSERT INTO `tour` (`id`, `Nama`, `Email`, `Subjek`, `Detail`, `Destinasi`, `Depart`, `Return`, `Durasi`, `status`) VALUES
(1, 'nb', 'nabil@gmail.com', 'awda', 'adwda', '2', '2024-05-19', '2024-05-19', '2', 'Accepted'),
(2, 'nbl', 'nabil@gmail.com', 'komen', 'mau ke jogja', '2', '2024-05-19', '2024-05-19', '1', 'Pending'),
(3, 'dika', 'nabil@gmail.com', 'Meeting Dinas', 'aiwdaiwdnawd', '2', '2024-06-02', '2024-06-02', '1', 'Pending'),
(4, 'abang', 'abang@gmail.com', 'OAWKOAK', 'aowkoawkoawkokaw', '2', '2024-06-02', '2024-06-02', '1', 'Accepted'),
(5, 'abil', 'abil@gmail.com', 'komen', 'uyvgvtytvt', '1', '2024-06-02', '2024-06-02', '2', 'Accepted'),
(6, 'nb', 'asu@gmail.com', 'awdawd', '123213', '2', '2024-06-02', '2024-06-02', '1', 'Accepted'),
(7, 'aw', 'abil@gmail.com', 'qawdawd', 'awdwa', '1', '2024-06-03', '2024-06-03', '1', 'Accepted'),
(8, 'nb', 'abil@gmail.com', 'awdawdawdawd', 'ajawbawufbakfw', '2', '2024-06-03', '2024-06-03', '1', 'Accepted'),
(9, 'asu', 'asu@gmail.com', 'awdawd', 'adawdwda', '2', '2024-06-06', '2024-06-06', '1', 'Accepted'),
(10, 'awd', 'abil@gmail.com', 'adawd', 'a;mdkawm', '2', '2024-06-07', '2024-06-07', '1', 'Pending'),
(11, 'nb', 'nabil@gmail.com', 'eaf', 'awfaw', '2', '2024-06-07', '2024-06-07', '1', 'Accepted'),
(12, 'nbl', 'abil@gmail.com', 'awda', 'beli', '1', '2024-06-07', '2024-06-07', '1', ''),
(13, 'nb', 'abil@gmail.com', 'Masukan', 'butuh cepat', '2', '2024-06-16', '2024-06-16', '1', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `idtour` int(11) NOT NULL,
  `idmice` int(11) NOT NULL,
  `idpengadaanbarang` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `idtour`, `idmice`, `idpengadaanbarang`, `email`, `pass`) VALUES
(6, 'EPEX', 0, 0, 0, 'dhikadzakya@gmail.com', 'dika123'),
(7, 'dika', 0, 0, 0, 'dzakyadhika@gmail.com', 'dika1'),
(8, 'dika', 0, 0, 0, 'aaa@gmail.com', '123'),
(9, 'dika', 0, 0, 0, 'aaa@gmail.com', '123'),
(10, 'abang', 0, 0, 0, 'abang@gmail.com', '1234'),
(11, 'abil', 0, 0, 0, 'abil@gmail.com', '888');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mice`
--
ALTER TABLE `mice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengadaanbarang`
--
ALTER TABLE `pengadaanbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mice`
--
ALTER TABLE `mice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengadaanbarang`
--
ALTER TABLE `pengadaanbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

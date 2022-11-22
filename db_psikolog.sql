-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2020 pada 01.44
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psikolog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsul`
--

CREATE TABLE `konsul` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `konsul` varchar(30) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsul`
--

INSERT INTO `konsul` (`id`, `nama`, `jk`, `nohp`, `alamat`, `konsul`, `tgl`) VALUES
(2, 'farah', 'P', '0848376997370', 'purwosara, kec.bartarada, kab.banewmas', 'Tes Model Belajar yang Tepat', '2020-06-26'),
(4, 'bagas', 'L', '0829327938729', 'Melung, jawteng', 'Analisis Jabatan', '2020-06-23'),
(6, 'nanda wijaya lestari', 'P', '081729728221', 'yoyag', 'Tes Penerimaan Pegawai/Psikote', '2020-06-30'),
(7, 'yuyun', 'P', '099080988090', 'Pewete', 'Keluarga', '2020-06-25'),
(8, 'terasi', 'P', '099080988090', 'Chill achab', 'Tes Model Belajar yang Tepat', '2020-06-27'),
(10, 'nara', 'P', '00807898788023', 'pawarta', 'Analisis Jabatan', '2020-07-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikolog`
--

CREATE TABLE `psikolog` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(85) NOT NULL,
  `jabatan` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psikolog`
--

INSERT INTO `psikolog` (`id`, `foto`, `nama`, `jabatan`) VALUES
(13, '5f0c6448b02a4.jpg', 'Rr. Wara Setija Brawidjajani S.Psi., Psikolog', 'Owner biro psikologi putra tunggal (PURWOKERTO)'),
(14, '5f0c653c1682b.jpeg', 'Suwarti. S. Psi., M. Si., Psikolog', 'Dosen fakultas UMP (PURWOKERTO)'),
(15, '5f0c657d659a2.jpg', 'Kurniasih Dwi Purwanti M.Psi., Psikolog', 'Psikolog RS. Goteng (PURBALINGGA)'),
(16, '5f0c65ad1d5a8.jpg', 'Dewi Rachmanningtiyas, S. Psi., Psi., Psikolog', 'Guru BK SD ST.YOUSEF (PURWOKERTO)'),
(17, '5f0c65d1ad58d.jpg', 'Rahmawati Wulan Sari M.Psi., Psikolog', 'Dosen Fakultas Kedoteran UNSOED (PURWOKERTO)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `jk`, `nohp`) VALUES
(1, 'Bagus Satria Pratama', 'bagussp26', '$2y$10$EwuyD9o8JdKztHstoPU3FObKpvApI4gYPZpaoOLiE0hwB55ILeTDu', 'L', '087822184161'),
(2, 'Peradminan', 'peradminan', '$2y$10$S/Ff71PXMLIhdhX4nZ17iudIaIQG69AoPrVyd695arrYJPg7mO63e', 'L', '087779995825');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konsul`
--
ALTER TABLE `konsul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
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
-- AUTO_INCREMENT untuk tabel `konsul`
--
ALTER TABLE `konsul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

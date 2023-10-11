-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2022 pada 05.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_project`
--

CREATE TABLE `data_project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `client` varchar(50) NOT NULL,
  `project_leader` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `img` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_project`
--

INSERT INTO `data_project` (`id`, `project_name`, `client`, `project_leader`, `start_date`, `end_date`, `img`) VALUES
(10, 'Pembuatan E-Learning Kampus', 'Universitas Muhammadiyah Sumatera Utara', 'Fajar Mustaqin', '2022-02-09', '2022-08-08', 'IMG_6305.JPG'),
(11, 'Pembuatan Sistem Informasi Akademik', 'Politeknik Hasnur', 'Siti Zulaika', '2022-03-31', '2022-06-30', 'IMG_6326.JPG'),
(13, 'Pembuatan Website Penerimaan Siswa GIBS', 'GIBS', 'Siti Khadijah', '2022-02-14', '2022-07-14', 'IMG_6481.JPG'),
(14, 'Pembuatan Website Penerimaan Mahasiswa Baru', 'Universitas Lambung Mangkurat', 'Yuni Maulidina', '2022-03-03', '2022-08-31', 'IMG_6700.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_project`
--
ALTER TABLE `data_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_project`
--
ALTER TABLE `data_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

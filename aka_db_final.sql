-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Nov 2017 pada 19.58
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aka_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `appointment`
--

CREATE TABLE `appointment` (
  `id_appoint` int(5) NOT NULL,
  `id_dok` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_appoint` date NOT NULL,
  `jam_appoint` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `appointment`
--

INSERT INTO `appointment` (`id_appoint`, `id_dok`, `id_user`, `tgl_appoint`, `jam_appoint`) VALUES
(2, 102, 2, '2017-11-01', '05:09:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dok` int(11) NOT NULL,
  `id_rs` int(5) NOT NULL,
  `nama_dok` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keahlian` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dok`, `id_rs`, `nama_dok`, `keahlian`, `no_telp`, `gambar`) VALUES
(101, 1, 'DR. Eka Julianta Wahjoepramono', 'General', '089546945246', 'eka.jpg'),
(102, 1, 'Prof.Dr. Farid Anfasa Moeloek', 'Internal Organ', '02298645214', 'farid.jpg'),
(103, 2, 'Dr. Nafsiah Mboi', 'General', '0988631645', 'mboi.jpg'),
(104, 2, 'Soelarto Reksoprojo', 'External Organ', '0229225013', 'soelarto.jpg'),
(105, 6, 'Prof. Pratiwi Pujilestari Sudarmono', 'Cancer', '02289840064', 'pratiwi.jpg'),
(106, 5, 'Prof.Dr. RM Padmosantjojo', 'General', '0226565346', 'padmosa.jpg'),
(107, 2, 'Prof. Teguh Santosa', 'General', '08984354135', 'teguh.jpg'),
(108, 3, 'Prof. Laurentius Andrianto Lesmana', 'Internal Organ', '08155436123', 'lesmana.jpg'),
(109, 1, 'Prof.Dr. Akmal Taher', 'General', '0224645135', 'akmal.jpg'),
(110, 4, 'Setya Novanto', 'Genital', '0816660666', 'setnov.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter_penyakit`
--

CREATE TABLE `dokter_penyakit` (
  `id_dokter_penyakit` int(11) NOT NULL,
  `id_dok` int(11) DEFAULT NULL,
  `id_penyakit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dokter_penyakit`
--

INSERT INTO `dokter_penyakit` (`id_dokter_penyakit`, `id_dok`, `id_penyakit`) VALUES
(1, 101, 201),
(2, 101, 202),
(3, 101, 203),
(4, 101, 204),
(5, 102, 201),
(6, 103, 203),
(7, 103, 204),
(8, 104, 201),
(9, 104, 203),
(10, 105, 202),
(11, 106, 201),
(12, 106, 203),
(13, 107, 201),
(14, 108, 204),
(15, 109, 202),
(16, 109, 203),
(17, 110, 201),
(18, 110, 202),
(19, 110, 203),
(20, 110, 204);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc_gejala` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `desc_gejala`) VALUES
(1, 'nasal congestion', NULL),
(2, 'fever', NULL),
(3, 'sore throat', NULL),
(4, 'fatigue', NULL),
(5, 'easily thirsty', NULL),
(6, 'blurred vision', NULL),
(7, 'breathless', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Jakarta'),
(2, 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc_penyakit` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `desc_penyakit`) VALUES
(201, 'Influenza', 'The flu attacks the lungs, nose, and throat. Young children, older adults, pregnant women and people with chronic disease or weak immune systems are at high risk.'),
(202, 'Diabetes', 'A group of diseases that result in too much sugar in the blood (high blood glucose).'),
(203, 'Anemia', 'Anaemia results from a lack of red blood cells or dysfunctional red blood cells in the body. This leads to reduced oxygen flow to the body''s organs.'),
(204, 'Measles', 'The disease spreads through the air by respiratory droplets produced from coughing or sneezing.\r\nMeasles symptoms don''t appear until 10 to 14 days after exposure. They include coughs, runny nose, inflamed eyes, sore throat, fever and a red, blotchy skin rash.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_gejala`
--

CREATE TABLE `penyakit_gejala` (
  `id_penyakit_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit_gejala`
--

INSERT INTO `penyakit_gejala` (`id_penyakit_gejala`, `id_penyakit`, `id_gejala`) VALUES
(1, 201, 1),
(2, 201, 2),
(3, 201, 3),
(4, 202, 4),
(5, 202, 5),
(6, 202, 6),
(7, 203, 4),
(8, 203, 7),
(9, 203, 2),
(10, 204, 1),
(11, 204, 2),
(12, 204, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `rumahsakit`
--

INSERT INTO `rumahsakit` (`id_rs`, `nama_rs`, `alamat`, `no_telp`, `gambar`, `id_lokasi`) VALUES
(1, 'RS Cipto Mangunkusumo', 'Jl. Raya Jakarta 1', '082883727177', 'cipto.jpg', 1),
(2, 'RS Santo Borromeus', 'Jl. Raya Bandung 1', '092883728837', 'borromeus.jpg', 2),
(3, 'RS Al-Islam', 'Jl. Raya Bandung 2', '083984773847', 'alislam.jpg', 2),
(4, 'RS Medika Permata Hijau', 'Jl. Raya Jakarta 2', '082993884938', 'medikahijau.jpg', 1),
(5, 'RS Santosa', 'Jl. Raya Bandung 3', '083988376251', 'santosa.jpg', 2),
(6, 'RS Medika Lestari', 'Jl. Raya Jakarta 3', '083984482711', 'medikabsd.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `alamat`, `no_telp`) VALUES
(2, 'Ariq Daffa', 'ariq@mail.com', 'password', 'Jln. Yupiter Utama Dlm D2 No. 2', '082116771533');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appoint`);

--
-- Indexes for table `dokter_penyakit`
--
ALTER TABLE `dokter_penyakit`
  ADD PRIMARY KEY (`id_dokter_penyakit`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_appoint` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dokter_penyakit`
--
ALTER TABLE `dokter_penyakit`
  MODIFY `id_dokter_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

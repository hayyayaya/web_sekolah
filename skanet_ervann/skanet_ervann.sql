-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2026 pada 08.32
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
-- Database: `skanet_ervann`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`) VALUES
('1351', 'Pak Bagus', 'Kuwon'),
('1352', 'Pak Annur', 'Italy'),
('1353', 'Pak Yusuf', 'Ponorogo'),
('1356', 'Bu Anik', ''),
('1357', 'Bu Onny', ''),
('1359', 'Pak Jujul', 'Ds. Jomblang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`) VALUES
(3, 'Bahasa Inggris'),
(4, 'Olahraga'),
(5, 'Bahasa Jawa'),
(6, 'IPAS'),
(7, 'PAI'),
(8, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `id_mapel`, `nip`, `nilai`) VALUES
(11, '153240205008', 1, '1351', 90),
(14, '153241405009', 1, '1352', 90),
(19, '153240205002', 4, '1352', 86),
(20, '153241405012', 7, '1353', 84),
(22, '153240205002', 6, '1353', 76),
(23, '153240205002', 6, '1351', 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`) VALUES
('153240205002', 'Zulfikar ', 'Jl. Kampar'),
('153240205003', 'Alan', 'Jl. Raya Madigondo'),
('153240205008', 'Arlis', 'Ngawi'),
('153240205015', 'Andrian', 'Ds. Tegalarum'),
('153240304002', 'Rendra', 'Jl. Pasopati'),
('153241405009', 'Agam', 'madiun'),
('153241405010', 'Akbar', 'Surabaya '),
('153241405012', 'Angger', 'India'),
('153241911013', 'Ardi', 'Ds. Sawojajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `usn` varchar(8) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`usn`, `pass`, `nama`, `level`) VALUES
('epan', 'epan', 'Ervan Nuhaa', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

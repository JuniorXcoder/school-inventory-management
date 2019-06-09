-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2019 pada 05.56
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `password`) VALUES
(35, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(36, 'Syahrur Rahmansyah', 'syahrur123', 'mrjunior403@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `Nama Barang` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `n_aset` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id`, `Nama Barang`, `brand`, `model`, `kode`, `n_aset`, `status`) VALUES
(20, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-001', 'Rusak'),
(22, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-003', 'Dipinjam'),
(23, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-004', 'Dipinjam'),
(24, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-005', 'Dipinjam'),
(25, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-006', 'Dipinjam'),
(26, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-007', 'Dipinjam'),
(27, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-008', 'Dipinjam'),
(28, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-009', 'Dipinjam'),
(29, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0010', 'Dipinjam'),
(30, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0011', 'Dipinjam'),
(31, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0012', 'Tersedia'),
(32, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0013', 'Tersedia'),
(33, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0014', 'Tersedia'),
(34, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0015', 'Tersedia'),
(35, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0016', 'Tersedia'),
(36, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0017', 'Tersedia'),
(37, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcss', 'INVCS-0018', 'Tersedia'),
(38, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0019', 'Tersedia'),
(39, 'Proyector Invocus', 'Invocus', 'Invocus1', 'Invcs', 'INVCS-0020', 'Dipinjam'),
(40, 'asdasd', 'asdasd', 'asdasda', 'asdas', 'asdasd-001', 'Tersedia'),
(41, 'asdasd', 'asdasd', 'asdasda', 'asdas', 'asdasd-002', 'Tersedia'),
(42, 'test', 'test', 'test', 'test', 'sadas asdasda s das dasdasd asdasd-001', 'Tersedia'),
(43, 'test', 'test', 'test', 'test', 'sadas asdasda s das dasdasd asdasd-002', 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(50) NOT NULL,
  `n_peminjam` varchar(250) NOT NULL,
  `k_peminjam` varchar(250) NOT NULL,
  `jk_peminjam` varchar(250) NOT NULL,
  `alat` int(250) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jam_keluar` varchar(250) NOT NULL,
  `jam_kembali` varchar(250) NOT NULL,
  `n_pengembali` varchar(255) NOT NULL,
  `k_pengembali` varchar(255) NOT NULL,
  `jk_pengembali` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `n_peminjam`, `k_peminjam`, `jk_peminjam`, `alat`, `status`, `jam_keluar`, `jam_kembali`, `n_pengembali`, `k_pengembali`, `jk_pengembali`) VALUES
(65, 'dsa', 'X-MM1', 'P', 41, 'Dikembalikan', '28-12-2018 22:13', '28-12-2018 22:13', 'dsa', 'X-MM1', 'L'),
(66, 'dsa', 'X-MM1', 'L', 37, 'Dikembalikan', '28-12-2018 22:14', '28-12-2018 22:14', 'dsa', 'X-MM1', 'P'),
(67, 'asdasdasd', 'X-MM1', 'L', 23, 'Dikembalikan', '24-01-2019 17:17', '17-02-2019 15:52', 'asdasdasd', 'X-MM1', 'L'),
(68, 'sadasd', 'X-MM1', 'L', 43, 'Dipinjam', '24-01-2019 17:17', '', '', '', ''),
(69, 'Muhammad syahrur rahmansyah', 'X-MM1', 'L', 25, 'Dipinjam', '17-02-2019 14:43', '', '', '', ''),
(70, 'Muhammad syahrur rahmansyah', 'X-MM1', 'L', 26, 'Dipinjam', '17-02-2019 14:47', '', '', '', ''),
(71, 'admin', 'X-MM1', 'L', 28, 'Dipinjam', '17-02-2019 15:49', '', '', '', ''),
(72, 'Muhammad syahrur rahmansyah', 'X-MM1', 'L', 29, 'Dipinjam', '17-02-2019 15:52', '', '', '', ''),
(74, 'Muhammad syahrur rahmansyah', 'X-MM1', 'L', 30, 'Dikembalikan', '17-02-2019 15:53', '17-02-2019 15:53', 'Muhammad syahrur rahmansyah', 'X-MM1', 'L'),
(76, 'Muhammad syahrur rahmansyah', 'X-MM1', 'L', 30, 'Dipinjam', '17-02-2019 16:01', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `n_aset` (`n_aset`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2022 pada 00.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Manual'),
(2, 'Matic'),
(3, 'Triptonic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(5) NOT NULL,
  `foto_mobil` varchar(50) DEFAULT NULL,
  `id_jenis` int(5) NOT NULL,
  `type_mobil` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `status` int(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `foto_mobil`, `id_jenis`, `type_mobil`, `merk`, `no_polisi`, `warna`, `harga`, `status`, `updated_at`, `created_at`) VALUES
(25, 'fortuner.jpg-1624537233.jpg', 2, 'Fortuner 2021', 'Toyota', 'D 3333 N', 'Silver', 350000, 0, '2021-06-24 12:20:33', '2021-06-24 11:52:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `foto_pelanggan` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `status_peminjaman` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `no_ktp`, `foto_pelanggan`, `nama_lengkap`, `tanggal_lahir`, `alamat_pelanggan`, `no_telpon`, `status_peminjaman`) VALUES
(3, '123456', 'animated.gif', 'Andhika Elfriza', '1996-02-01', 'Jl. Bulusari No. 2 RT 5 RW 6 Babakan', '081231236125', 1),
(4, '123123132', 'pria-1.jpg', 'Bondan', '1987-04-07', 'Jalanin aja dulu no 2 sumut', '085365478965', 1),
(6, '1236548', 'animated2.gif', 'Dahlia', '1994-10-03', 'Ambarawa no 2a', '081352436978', 1),
(8, '3329090405990001', 'IMG_0206.JPG', 'Adentya Elmas ', '1999-06-04', 'Jl. Dahlia No. 27 RT 05 / RW 05 Gandasuli Brebes', '081392690434', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_mobil` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `tgl_sewa` datetime NOT NULL,
  `tgl_selesaisewa` datetime NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `status_pembayaran` int(5) NOT NULL,
  `status_pengembalian` int(5) NOT NULL,
  `lama_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_mobil`, `harga`, `id_pelanggan`, `tgl_sewa`, `tgl_selesaisewa`, `jumlah_harga`, `denda`, `status_pembayaran`, `status_pengembalian`, `lama_sewa`) VALUES
(4, 3, 265000, 4, '2021-06-18 00:00:00', '2021-06-20 00:00:00', 795000, 0, 0, 0, 3),
(6, 8, 350000, 8, '2021-06-10 00:00:00', '2021-06-11 00:00:00', 700000, 0, 0, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

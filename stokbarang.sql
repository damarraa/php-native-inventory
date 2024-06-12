-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2023 pada 01.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stokbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_barang_keluar`
--

CREATE TABLE `sb_barang_keluar` (
  `id_keluar` varchar(15) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_barang_masuk`
--

CREATE TABLE `sb_barang_masuk` (
  `id_masuk` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_barang_masuk`
--

INSERT INTO `sb_barang_masuk` (`id_masuk`, `tanggal_masuk`, `kode_barang`, `jumlah`, `created_user`, `created_date`) VALUES
('INT-2023-001', '2023-09-10', 'TNR001', 10, 1, '2023-09-14 03:58:34'),
('INT-2023-005', '2023-09-21', 'TNR005', 10, 1, '2023-09-21 01:05:45'),
('INT-2023-006', '2023-09-21', 'TNR016', 10, 1, '2023-09-21 01:06:00'),
('INT-2023-007', '2023-09-21', 'TNR015', 10, 1, '2023-09-21 01:06:09'),
('INT-2023-008', '2023-09-21', 'TNR013', 10, 1, '2023-09-21 01:06:16'),
('INT-2023-009', '2023-09-21', 'TNR014', 10, 1, '2023-09-21 01:06:25'),
('INT-2023-013', '2023-09-21', 'TNR006', 10, 1, '2023-09-21 01:07:18'),
('INT-2023-014', '2023-09-21', 'TNR001', 6, 1, '2023-09-21 01:07:46'),
('INT-2023-015', '2023-09-21', 'TNR008', 10, 1, '2023-09-21 01:08:06'),
('INT-2023-016', '2023-09-21', 'TNR009', 10, 1, '2023-09-21 01:08:13'),
('INT-2023-017', '2023-09-21', 'TNR010', 10, 1, '2023-09-21 01:08:21'),
('INT-2023-018', '2023-09-21', 'TNR011', 10, 1, '2023-09-21 01:08:33'),
('INT-2023-019', '2023-09-21', 'TNR012', 10, 1, '2023-09-21 01:08:43'),
('INT-2023-020', '2023-12-04', 'TNR008', 2, 1, '2023-12-04 02:03:37'),
('INT-2023-021', '2023-12-04', 'TNR010', 2, 1, '2023-12-04 02:03:48'),
('INT-2023-022', '2023-12-04', 'TNR011', 4, 1, '2023-12-04 02:04:01'),
('INT-2023-023', '2023-12-04', 'TNR009', 2, 1, '2023-12-04 02:04:22'),
('INT-2023-024', '2023-12-04', 'TNR005', 2, 1, '2023-12-04 02:05:30'),
('INT-2023-025', '2023-12-04', 'TNR004', 2, 1, '2023-12-04 02:05:39'),
('INT-2023-026', '2023-12-04', 'TNR002', 2, 1, '2023-12-04 02:05:49'),
('INT-2023-027', '2023-12-04', 'TNR003', 2, 1, '2023-12-04 02:05:55'),
('INT-2023-028', '2023-12-04', 'TNR016', 4, 1, '2023-12-04 02:07:36'),
('INT-2023-029', '2023-12-04', 'TNR015', 4, 1, '2023-12-04 02:08:00'),
('INT-2023-030', '2023-12-04', 'TNR014', 4, 1, '2023-12-04 02:08:08'),
('INT-2023-031', '2023-12-04', 'TNR013', 4, 1, '2023-12-04 02:08:16'),
('INT-2023-032', '2023-12-04', 'TNR006', 1, 1, '2023-12-04 02:10:12'),
('INT-2023-033', '2023-12-04', 'TNR001', 8, 1, '2023-12-04 02:14:00'),
('INT-2023-034', '2023-12-04', 'TNR021', 1, 1, '2023-12-04 02:39:17'),
('INT-2023-035', '2023-12-04', 'TNR022', 3, 1, '2023-12-04 02:39:27'),
('INT-2023-036', '2023-12-04', 'TNR023', 2, 1, '2023-12-04 02:40:36'),
('INT-2023-037', '2023-12-04', 'TNR024', 2, 1, '2023-12-04 02:40:42'),
('INT-2023-039', '2023-12-04', 'TNR025', 2, 1, '2023-12-04 02:40:54'),
('INT-2023-040', '2023-12-04', 'TNR007', 18, 1, '2023-12-19 00:19:27'),
('INT-2023-041', '2023-12-04', 'TNR026', 2, 1, '2023-12-19 00:19:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_multimedia_keluar`
--

CREATE TABLE `sb_multimedia_keluar` (
  `id_keluar` varchar(15) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_multimedia` varchar(8) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_multimedia_masuk`
--

CREATE TABLE `sb_multimedia_masuk` (
  `id_masuk` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_multimedia` varchar(8) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_multimedia_masuk`
--

INSERT INTO `sb_multimedia_masuk` (`id_masuk`, `tanggal_masuk`, `kode_multimedia`, `jumlah`, `created_user`, `created_date`) VALUES
('MULTI-2023-001', '2023-11-06', 'MULTI004', 5, 1, '2023-11-06 07:24:18'),
('MULTI-2023-002', '2023-11-06', 'MULTI001', 3, 1, '2023-11-06 07:24:25'),
('MULTI-2023-003', '2023-11-06', 'MULTI006', 8, 1, '2023-11-06 07:24:33'),
('MULTI-2023-004', '2023-11-06', 'MULTI005', 2, 1, '2023-11-06 07:24:43'),
('MULTI-2023-005', '2023-11-06', 'MULTI002', 6, 1, '2023-11-06 07:24:53'),
('MULTI-2023-006', '2023-11-06', 'MULTI003', 1, 1, '2023-11-06 07:25:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_network_keluar`
--

CREATE TABLE `sb_network_keluar` (
  `id_keluar` varchar(15) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_network` varchar(7) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_network_masuk`
--

CREATE TABLE `sb_network_masuk` (
  `id_masuk` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_network` varchar(7) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_network_masuk`
--

INSERT INTO `sb_network_masuk` (`id_masuk`, `tanggal_masuk`, `kode_network`, `jumlah`, `created_user`, `created_date`) VALUES
('NET-2023-001', '2023-11-29', 'NET003', 4, 1, '2023-11-29 06:04:36'),
('NET-2023-002', '2023-11-29', 'NET001', 2, 1, '2023-11-29 06:04:43'),
('NET-2023-003', '2023-11-29', 'NET002', 6, 1, '2023-11-29 06:04:50'),
('NET-2023-004', '2023-11-29', 'NET008', 5, 1, '2023-11-29 06:04:57'),
('NET-2023-005', '2023-11-29', 'NET012', 10, 1, '2023-11-29 06:05:04'),
('NET-2023-006', '2023-11-29', 'NET011', 4, 1, '2023-11-29 06:05:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_stok_barang`
--

CREATE TABLE `sb_stok_barang` (
  `kode_barang` varchar(7) NOT NULL,
  `tipe_printer` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_stok_barang`
--

INSERT INTO `sb_stok_barang` (`kode_barang`, `tipe_printer`, `nama_barang`, `satuan`, `stok`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('TNR001', 'Epson LQ-2180', '2180 B', 'Pcs', 11, 1, '2023-09-14 01:30:49', 1, '2023-12-04 02:14:00'),
('TNR002', 'Epson L310', '003 M', 'Pcs', 12, 1, '2023-09-14 01:33:54', 1, '2023-12-04 02:05:49'),
('TNR003', 'Epson L310', '003 Y', 'Pcs', 10, 1, '2023-09-19 01:41:56', 1, '2023-12-20 04:27:52'),
('TNR004', 'Epson L310', '003 C', 'Pcs', 12, 1, '2023-09-19 01:42:05', 1, '2023-12-04 02:05:39'),
('TNR005', 'Epson L310', '003 B', 'Pcs', 12, 1, '2023-09-19 01:42:15', 1, '2023-12-04 02:05:30'),
('TNR006', 'HP Deskjet 3835', '680 B', 'Pcs', 3, 1, '2023-09-20 00:26:37', 1, '2023-12-05 01:25:09'),
('TNR007', 'HP Deskjet 3835', '680 C', 'Pcs', 18, 1, '2023-12-05 01:19:07', 1, '2023-12-20 04:32:50'),
('TNR008', 'HP PageWide 477dw', '975X M', 'Pcs', 4, 1, '2023-09-20 00:26:49', 1, '2023-12-20 04:31:36'),
('TNR009', 'HP PageWide 477dw', '975X Y', 'Pcs', 5, 1, '2023-09-20 00:26:57', 1, '2023-12-20 04:31:36'),
('TNR010', 'HP PageWide 477dw', '975X C', 'Pcs', 7, 1, '2023-09-20 00:27:05', 1, '2023-12-20 04:31:36'),
('TNR011', 'HP PageWide 477dw', '975X B', 'Pcs', 16, 1, '2023-09-20 00:27:14', 1, '2023-12-20 04:31:36'),
('TNR012', 'HP LaserJet Pro M1536dnf', '78A', 'Pcs', 10, 1, '2023-09-20 00:27:28', 1, '2023-12-05 01:23:48'),
('TNR013', 'HP LaserJet Pro 200', '131A M', 'Pcs', 5, 1, '2023-09-20 00:27:39', 1, '2023-12-20 04:35:13'),
('TNR014', 'HP LaserJet Pro 200', '131A Y', 'Pcs', 5, 1, '2023-09-20 00:27:46', 1, '2023-12-20 04:35:13'),
('TNR015', 'HP LaserJet Pro 200', '131A C', 'Pcs', 4, 1, '2023-09-20 00:27:52', 1, '2023-12-20 04:35:13'),
('TNR016', 'HP LaserJet Pro 200', '131A B', 'Pcs', 4, 1, '2023-09-20 00:27:59', 1, '2023-12-20 04:35:13'),
('TNR017', 'Epson EcoTank L6270', '001 B', 'Pcs', 0, 1, '2023-12-01 01:19:00', 1, '2023-12-05 01:23:48'),
('TNR018', 'Epson EcoTank L6270', '001 C', 'Pcs', 0, 1, '2023-12-01 01:19:10', 1, '2023-12-05 01:23:48'),
('TNR019', 'Epson EcoTank L6270', '001 Y', 'Pcs', 0, 1, '2023-12-01 01:19:18', 1, '2023-12-05 01:23:48'),
('TNR020', 'Epson EcoTank L6270', '001 B', 'Pcs', 0, 1, '2023-12-01 01:19:27', 1, '2023-12-05 01:23:48'),
('TNR021', 'HP OfficeJet 200', '62 B', 'Pcs', 3, 1, '2023-12-04 02:38:45', 1, '2023-12-20 04:33:16'),
('TNR022', 'HP OfficeJet 200', '62 C', 'Pcs', 5, 1, '2023-12-04 02:39:00', 1, '2023-12-20 04:33:17'),
('TNR023', 'HP PageWide Enterprise 556', '981 B', 'Pcs', 5, 1, '2023-12-04 02:40:01', 1, '2023-12-20 04:34:00'),
('TNR024', 'HP PageWide Enterprise 556', '981 C', 'Pcs', 4, 1, '2023-12-04 02:40:09', 1, '2023-12-20 04:34:00'),
('TNR025', 'HP PageWide Enterprise 556', '981 Y', 'Pcs', 5, 1, '2023-12-04 02:40:17', 1, '2023-12-20 04:34:00'),
('TNR026', 'HP PageWide Enterprise 556', '981 M', 'Pcs', 3, 1, '2023-12-18 00:57:52', 1, '2023-12-20 04:34:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_stok_multimedia`
--

CREATE TABLE `sb_stok_multimedia` (
  `kode_multimedia` varchar(8) NOT NULL,
  `tipe_multimedia` varchar(50) NOT NULL,
  `nama_multimedia` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_stok_multimedia`
--

INSERT INTO `sb_stok_multimedia` (`kode_multimedia`, `tipe_multimedia`, `nama_multimedia`, `satuan`, `stok`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('MULTI001', 'Camera Meeting', 'Logitech PTZ Pro 960-001021', 'Pcs', 3, 1, '2023-10-30 04:48:28', 1, '2023-12-20 03:34:18'),
('MULTI002', 'Multimedia Projector', 'Epson EB-535W', 'Pcs', 6, 1, '2023-10-30 04:49:14', 1, '2023-12-20 03:34:24'),
('MULTI003', 'Receiver TV', 'Matrix Sinema GX6605S', 'Pcs', 1, 1, '2023-10-30 04:51:23', 1, '2023-12-20 03:34:08'),
('MULTI004', 'Bracket', 'Bracket TV LED', 'Pcs', 5, 1, '2023-10-30 07:19:34', 2, '2023-11-06 07:24:18'),
('MULTI005', 'Kabel', 'Kabel VGA', 'Pcs', 2, 1, '2023-10-30 07:20:51', 2, '2023-11-06 07:24:43'),
('MULTI006', 'Kabel', 'Kabel HDMI', 'Pcs', 8, 1, '2023-10-30 07:21:24', 2, '2023-11-06 07:24:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_stok_network`
--

CREATE TABLE `sb_stok_network` (
  `kode_network` varchar(7) NOT NULL,
  `tipe_network` varchar(50) NOT NULL,
  `nama_network` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_stok_network`
--

INSERT INTO `sb_stok_network` (`kode_network`, `tipe_network`, `nama_network`, `satuan`, `stok`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('NET001', 'Access Point', 'TP-Link TD-W8961N', 'Pcs', 2, 1, '2023-10-30 03:52:14', 1, '2023-12-20 03:30:45'),
('NET002', 'Access Point Dongle Receiver', 'TP-Link TL-WN722N', 'Pcs', 6, 1, '2023-10-30 03:53:01', 1, '2023-12-20 03:30:38'),
('NET003', 'Access Point', 'Tenda AC1200 AC10U', 'Pcs', 4, 1, '2023-10-30 03:54:17', 1, '2023-12-20 03:30:31'),
('NET004', 'Radio Link', 'UBIQUITI Air Fiber AF-5U', 'Pcs', 0, 1, '2023-10-30 03:54:43', 1, '2023-12-20 03:30:24'),
('NET005', 'Switch', 'Catalyst 2950', 'Pcs', 0, 1, '2023-10-30 03:58:31', 1, '2023-12-20 03:30:18'),
('NET006', 'Switch', 'Catalyst 3750 v2', 'Pcs', 0, 1, '2023-10-30 03:59:09', 1, '2023-12-20 03:30:11'),
('NET007', 'Switch', 'HPE 1820 J997A', 'Pcs', 0, 1, '2023-10-30 03:59:57', 1, '2023-12-20 03:30:06'),
('NET008', 'ADSL Splitter', 'SP-316', 'Pcs', 5, 1, '2023-10-30 04:00:34', 1, '2023-12-20 03:30:00'),
('NET009', 'Radio Link', 'NanoStation M5', 'Pcs', 0, 1, '2023-10-30 04:01:04', 1, '2023-12-20 03:29:53'),
('NET010', 'Radio Link', 'Rocket M5', 'Pcs', 0, 1, '2023-10-30 04:01:27', 1, '2023-12-20 03:29:49'),
('NET011', 'Radio Link', 'InfiNet R5000 - SMN SLAVE', 'Pcs', 4, 1, '2023-10-30 04:03:33', 1, '2023-12-20 03:29:42'),
('NET012', 'PoE Injector', 'Tenda PoE30G-AT Gigabit', 'Pcs', 10, 1, '2023-10-30 04:04:56', 1, '2023-12-20 03:29:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_stok_telepon`
--

CREATE TABLE `sb_stok_telepon` (
  `kode_telepon` varchar(7) NOT NULL,
  `tipe_telepon` varchar(50) NOT NULL,
  `nama_telepon` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_stok_telepon`
--

INSERT INTO `sb_stok_telepon` (`kode_telepon`, `tipe_telepon`, `nama_telepon`, `satuan`, `stok`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('TEL001', 'Telepon Analog', 'Telepon Analog | Panasonic KX-TS505MX', 'Pcs', 9, 1, '2023-10-30 04:27:21', 2, '2023-11-07 12:48:14'),
('TEL002', 'Telepon Digital', 'Telepon Digital | Mitel DBC223', 'Pcs', 8, 1, '2023-10-30 04:29:46', 2, '2023-11-07 12:48:29'),
('TEL003', 'Telepon Digital Wireless', 'Telepon Digital Wireless | Panasonic KX-TG1611', 'Pcs', 1, 1, '2023-10-30 04:30:32', 2, '2023-11-07 12:48:23'),
('TEL004', 'Roset Telepon', 'Roset Telepon RJ11', 'Pcs', 6, 1, '2023-10-30 04:35:23', 2, '2023-11-07 12:48:08'),
('TEL005', 'Kabel', 'Kabel Telepon PVC', 'Pcs', 12, 1, '2023-10-30 04:37:51', 2, '2023-11-07 12:48:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_telepon_keluar`
--

CREATE TABLE `sb_telepon_keluar` (
  `id_keluar` varchar(15) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_telepon` varchar(7) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_telepon_masuk`
--

CREATE TABLE `sb_telepon_masuk` (
  `id_masuk` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_telepon` varchar(7) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_telepon_masuk`
--

INSERT INTO `sb_telepon_masuk` (`id_masuk`, `tanggal_masuk`, `kode_telepon`, `jumlah`, `created_user`, `created_date`) VALUES
('TEL-2023-001', '2023-11-07', 'TEL005', 12, 1, '2023-11-07 12:48:03'),
('TEL-2023-002', '2023-11-07', 'TEL004', 6, 1, '2023-11-07 12:48:08'),
('TEL-2023-003', '2023-11-07', 'TEL001', 9, 1, '2023-11-07 12:48:14'),
('TEL-2023-004', '2023-11-07', 'TEL003', 1, 1, '2023-11-07 12:48:23'),
('TEL-2023-005', '2023-11-07', 'TEL002', 8, 1, '2023-11-07 12:48:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sb_users`
--

CREATE TABLE `sb_users` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `hak_akses` enum('Super Admin','User') NOT NULL,
  `status` enum('aktif','blokir') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sb_users`
--

INSERT INTO `sb_users` (`id_user`, `username`, `nama_user`, `password`, `email`, `telepon`, `foto`, `hak_akses`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 'user-default.png', 'Super Admin', 'aktif', '2023-09-12 09:09:48', '2023-10-25 07:41:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sb_barang_keluar`
--
ALTER TABLE `sb_barang_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`kode_barang`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_barang_masuk`
--
ALTER TABLE `sb_barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`kode_barang`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_multimedia_keluar`
--
ALTER TABLE `sb_multimedia_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`kode_multimedia`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_multimedia_masuk`
--
ALTER TABLE `sb_multimedia_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`kode_multimedia`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_network_keluar`
--
ALTER TABLE `sb_network_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`kode_network`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_network_masuk`
--
ALTER TABLE `sb_network_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`kode_network`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_stok_barang`
--
ALTER TABLE `sb_stok_barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indeks untuk tabel `sb_stok_multimedia`
--
ALTER TABLE `sb_stok_multimedia`
  ADD PRIMARY KEY (`kode_multimedia`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indeks untuk tabel `sb_stok_network`
--
ALTER TABLE `sb_stok_network`
  ADD PRIMARY KEY (`kode_network`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indeks untuk tabel `sb_stok_telepon`
--
ALTER TABLE `sb_stok_telepon`
  ADD PRIMARY KEY (`kode_telepon`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indeks untuk tabel `sb_telepon_keluar`
--
ALTER TABLE `sb_telepon_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`kode_telepon`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_telepon_masuk`
--
ALTER TABLE `sb_telepon_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`kode_telepon`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `sb_users`
--
ALTER TABLE `sb_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`hak_akses`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sb_users`
--
ALTER TABLE `sb_users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sb_barang_masuk`
--
ALTER TABLE `sb_barang_masuk`
  ADD CONSTRAINT `sb_barang_masuk_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `sb_stok_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sb_barang_masuk_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `sb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sb_stok_barang`
--
ALTER TABLE `sb_stok_barang`
  ADD CONSTRAINT `sb_stok_barang_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `sb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sb_stok_barang_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `sb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

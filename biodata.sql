-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2021 pada 15.18
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `anak_ke_berapa` varchar(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `no_akte` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `transportasi` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `nama`, `jenis_kelamin`, `kelas`, `nis`, `nisn`, `nik`, `no_kk`, `anak_ke_berapa`, `tempat_lahir`, `tanggal_lahir`, `no_akte`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `pos`, `tempat_tinggal`, `transportasi`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Ramdani Hidayatullah', 'L', '12 IPA 1', '171810021', '0037510343', '3215186905040001', '3215140607070010', '1', 'Karawang', '1997-01-30', '-', '1', 'Perum Bumi Cikampek Baru Blok 8.8 No. 08', '10', '08', 'Kertajaya', 'Balonggandu', 'Jatisari', '41374', '3', '2', '2021-01-19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ayah`
--

CREATE TABLE `data_ayah` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `tahun_lahir_ayah` varchar(4) NOT NULL,
  `pendidikan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `penghasilan_ayah` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ayah`
--

INSERT INTO `data_ayah` (`id`, `nis`, `nama_ayah`, `nik_ayah`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `created_at`, `updated_at`) VALUES
(1, '', 'Rudiyanto', '3215142607720001', '1972', '4', '7', '3', '2021-01-19', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ibu`
--

CREATE TABLE `data_ibu` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `tahun_lahir_ibu` varchar(4) NOT NULL,
  `pendidikan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `penghasilan_ibu` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ibu`
--

INSERT INTO `data_ibu` (`id`, `nis`, `nama_ibu`, `nik_ibu`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `created_at`, `updated_at`) VALUES
(1, '', 'Siti Nursoleha', '3215142408740001', '1974', '3', '1', '7', '2021-01-19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_periodik`
--

CREATE TABLE `data_periodik` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nomor_peserta_un` varchar(255) NOT NULL,
  `nomor_seri_ijazah` varchar(255) NOT NULL,
  `nomor_seri_skhun` varchar(255) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `cita_cita` varchar(255) NOT NULL,
  `jarak_rumah` varchar(3) NOT NULL,
  `waktu_tempuh` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_periodik`
--

INSERT INTO `data_periodik` (`id`, `nis`, `asal_sekolah`, `nomor_peserta_un`, `nomor_seri_ijazah`, `nomor_seri_skhun`, `tinggi_badan`, `berat_badan`, `hobi`, `cita_cita`, `jarak_rumah`, `waktu_tempuh`, `created_at`, `updated_at`) VALUES
(1, '', 'MTsN JATISARI', '02-19-506-138-5', 'DN-349123', 'DD-178921', '170', '90', 'Rebahan', 'Jadi Sultan', '1', '30', '2021-01-20', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `nik_wali` varchar(16) NOT NULL,
  `tahun_lahir_wali` varchar(4) NOT NULL,
  `pendidikan_wali` varchar(255) NOT NULL,
  `pekerjaan_wali` varchar(255) NOT NULL,
  `penghasilan_wali` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id`, `nis`, `nama_wali`, `nik_wali`, `tahun_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `created_at`, `updated_at`) VALUES
(1, '', 'Muhamad Ramdani Hidayatullah', '3215133001970001', '1997', '5', '6', '3', '2021-01-20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ayah`
--
ALTER TABLE `data_ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_periodik`
--
ALTER TABLE `data_periodik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_ayah`
--
ALTER TABLE `data_ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_periodik`
--
ALTER TABLE `data_periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2021 pada 09.20
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
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nomor_kode` int(2) NOT NULL,
  `nama_agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nomor_kode`, `nama_agama`) VALUES
(1, 1, 'Islam'),
(2, 2, 'Kristen/Protestan'),
(3, 3, 'Katholik'),
(4, 4, 'Hindu'),
(5, 5, 'Budha'),
(6, 6, 'Khong Hu Chu'),
(7, 99, 'Lainnya');

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
(1, 'Muhamad Ramdani Hidayatullah', 'L', '10-ipa-1', '121310476', '0037510343', '3215186905040001', '3215140607070010', '1', 'Karawang', '1997-01-30', '-', '1', 'Perum Bumi Cikampek Baru Blok 8.8 No. 08', '10', '08', 'Kertajaya', 'Balonggandu', 'Jatisari', '41374', '3', '2', '2021-02-03', NULL),
(2, 'Muhamad Ramdani Hidayatullah', 'L', '10-ipa-3', '121310477', '0037510343', '3215186905040001', '3215140607070010', '1', 'Karawang', '1997-01-30', '321sfe', '1', 'Perum Bumi Cikampek Baru Blok 8.8 No. 08', '10', '08', 'Kertajaya', 'Balonggandu', 'Jatisari', '41374', '1', '2', '2021-02-11', NULL),
(3, 'Muhamad Ramdani Hidayatullah', 'L', '10-ipa-3', '121310475', '0037510343', '3215186905040001', '3215140607070010', '1', 'Karawang', '1997-01-30', '321sfe', '1', 'Perum Bumi Cikampek Baru Blok 8.8 No. 08', '10', '08', 'Kertajaya', 'Balonggandu', 'Jatisari', '41374', '1', '2', '2021-02-11', NULL);

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
(1, '', 'Rudiyanto', '3215142607720001', '1972', '4', '7', '3', '2021-01-19', '0000-00-00'),
(2, '', 'Rudiyanto', '3215142607720001', '1972', '4', '7', '3', '2021-01-26', NULL),
(3, '', 'Rudiyanto', '3215142607720001', '1972', '4', '7', '3', '2021-01-26', NULL),
(4, '', 'Rudiyanto', '3215142607720001', '1972', '4', '7', '3', '2021-01-26', NULL),
(5, '121310476', 'Rudiyanto', '3215142607720001', '1972', '4', '7', '3', '2021-02-03', NULL);

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
(1, '', 'Siti Nursoleha', '3215142408740001', '1974', '3', '1', '7', '2021-01-19', NULL),
(2, '', 'Siti Nursoleha', '3215142408740001', '1974', '3', '1', '7', '2021-01-26', NULL),
(3, '', 'Siti Nursoleha', '3215142408740001', '1974', '3', '1', '7', '2021-01-26', NULL),
(4, '', 'Siti Nursoleha', '3215142408740001', '1974', '3', '1', '7', '2021-01-26', NULL),
(5, '121310476', 'Siti Nursoleha', '3215142408740001', '1974', '3', '1', '7', '2021-02-03', NULL);

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
(1, '', 'MTsN JATISARI', '02-19-506-138-5', 'DN-349123', 'DD-178921', '170', '90', 'Rebahan', 'Jadi Sultan', '1', '30', '2021-01-20', NULL),
(2, '', 'MTsN JATISARI', '02-19-506-138-5', 'DN-349123', 'DD-178921', '170', '90', 'Rebahan', 'Jadi Sultan', '100', '12', '2021-01-26', NULL),
(3, '121310476', 'MTsN JATISARI', '02-19-506-138-5', 'DN-349123', 'DD-178921', '170', '90', 'Rebahan', 'Jadi Sultan', '1', '12', '2021-02-03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_upload`
--

CREATE TABLE `data_upload` (
  `id` int(11) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `file_ijazah` varchar(255) NOT NULL,
  `file_skhun` varchar(255) NOT NULL,
  `file_kk` varchar(255) NOT NULL,
  `file_akte` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_upload`
--

INSERT INTO `data_upload` (`id`, `nis`, `file_ijazah`, `file_skhun`, `file_kk`, `file_akte`, `created_at`, `updated_at`) VALUES
(1, '', 'ijazah.jpg', 'skhu.jpg', 'KK 1.jpg', 'AKTE 1.jpg', '2021-01-26', NULL),
(2, '', '121310473_ijazah.jpg', '121310473_skhun.jpg', '121310473_kk.jpg', '121310473_akte.jpg', '2021-01-26', NULL),
(3, '', '121310473_ijazah.jpg', '121310473_skhun.jpg', '121310473_kk.jpg', 'default.jpg', '2021-01-26', NULL),
(4, '', '121310476_ijazah.png', '121310476_skhun.png', '121310476_kk.png', '121310476_akte.png', '2021-02-03', NULL),
(5, '121310476', '121310476_ijazah.png', '121310476_skhun.png', '121310476_kk.png', '121310476_akte.png', '2021-02-03', NULL);

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
(1, '', 'Muhamad Ramdani Hidayatullah', '3215133001970001', '1997', '5', '6', '3', '2021-01-20', NULL),
(2, '', 'Muhamad Ramdani Hidayatullah', '3215133001970001', '1997', '5', '6', '3', '2021-01-26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `inisial` varchar(1) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `inisial`, `keterangan`) VALUES
(1, 'L', 'Laki - laki'),
(2, 'P', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `keterangan`) VALUES
(1, '10-ipa-1', '10 IPA 1'),
(2, '10-ipa-2', '10 IPA 2'),
(3, '10-ipa-3', '10 IPA 3'),
(4, '10-ips-1', '10 IPS 1'),
(5, '10-ips-2', '10 IPS 2'),
(6, '11-ipa-1', '11 IPA 1'),
(7, '11-ipa-2', '11 IPA 2'),
(8, '11-ips-1', '11 IPS 1'),
(9, '11-ips-2', '11 IPS 2'),
(10, '12-ipa-1', '12 IPA 1'),
(11, '12-ipa-2', '12 IPA 2'),
(12, '12-ips-1', '12 IPS 1'),
(13, '12-smater-1', '12 SMATER 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nomor_kode` int(2) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nomor_kode`, `pekerjaan`) VALUES
(1, 1, 'Tidak bekerja'),
(2, 2, 'Nelayan'),
(3, 3, 'Petani'),
(4, 4, 'Peternak'),
(5, 5, 'PNS/TNI/POLRI'),
(6, 6, 'Karyawan Swasta'),
(7, 7, 'Pedagang Kecil'),
(8, 8, 'Pedagang Besar'),
(9, 9, 'Wiraswasta'),
(10, 10, 'Wirausaha'),
(11, 11, 'Buruh'),
(12, 12, 'Pensiunan'),
(13, 13, 'Meninggal Dunia'),
(14, 99, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_terakhir`
--

CREATE TABLE `pendidikan_terakhir` (
  `id` int(11) NOT NULL,
  `nomor_kode` int(2) NOT NULL,
  `pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan_terakhir`
--

INSERT INTO `pendidikan_terakhir` (`id`, `nomor_kode`, `pendidikan`) VALUES
(1, 1, 'Tidak sekolah'),
(2, 2, 'Putus SD'),
(3, 3, 'SD Sederajat'),
(4, 4, 'SMP Sederajat'),
(5, 5, 'SMA Sederajat'),
(6, 6, 'Diploma 1 (D1)'),
(7, 7, 'Diploma 2 (D2)'),
(8, 8, 'Diploma 3 (D3)'),
(9, 9, 'Sarjana (S1)'),
(10, 10, 'Magister (S2)'),
(11, 11, 'Doktor (S3)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghasilan_bulanan`
--

CREATE TABLE `penghasilan_bulanan` (
  `id` int(11) NOT NULL,
  `nomor_kode` int(2) NOT NULL,
  `penghasilan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penghasilan_bulanan`
--

INSERT INTO `penghasilan_bulanan` (`id`, `nomor_kode`, `penghasilan`) VALUES
(1, 1, 'Kurang dari 500.000'),
(2, 2, '500.000 s/d 999.999'),
(3, 3, '1 juta s/d 1.999.999'),
(4, 4, '2 juta s/d 4.999.999'),
(5, 5, '5 juta s/d 20 juta'),
(6, 6, 'Lebih dari 20 juta'),
(7, 7, 'Tidak Berpenghasilan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kesejahteraan`
--

CREATE TABLE `program_kesejahteraan` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `no_kip` varchar(20) NOT NULL,
  `file_kip` varchar(255) NOT NULL,
  `no_kis` varchar(255) NOT NULL,
  `file_kis` varchar(255) NOT NULL,
  `no_pkh` varchar(255) NOT NULL,
  `file_pkh` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_kesejahteraan`
--

INSERT INTO `program_kesejahteraan` (`id`, `nis`, `no_kip`, `file_kip`, `no_kis`, `file_kis`, `no_pkh`, `file_pkh`, `created_at`, `updated_at`) VALUES
(1, '', '6282238166538', '121310473_kip.jpg', '6282238166538', '121310473_kis.jpg', '6282238166538', '121310473_pkh.jpeg', '2021-02-02', NULL),
(2, '121310476', '6282238166538', '121310476_kip.png', '6282238166538', '121310476_kis.png', '6282238166538', '121310476_pkh.png', '2021-02-03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_tinggal`
--

CREATE TABLE `tempat_tinggal` (
  `id` int(11) NOT NULL,
  `nomor_kode` int(2) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_tinggal`
--

INSERT INTO `tempat_tinggal` (`id`, `nomor_kode`, `tempat_tinggal`) VALUES
(1, 1, 'Bersama Orang Tua'),
(2, 2, 'Wali'),
(3, 3, 'Kos'),
(4, 4, 'Asrama'),
(5, 5, 'Panti Asuhan'),
(6, 6, 'Pesantren'),
(7, 99, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi`
--

CREATE TABLE `transportasi` (
  `id` int(11) NOT NULL,
  `nomor_kode` int(2) NOT NULL,
  `transportasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transportasi`
--

INSERT INTO `transportasi` (`id`, `nomor_kode`, `transportasi`) VALUES
(1, 1, 'Jalan Kaki'),
(2, 2, 'Kendaraan Pribadi/Motor/Mobil Pribadi'),
(3, 3, 'Kendaraan Umum/Angkot/Pete - pete'),
(4, 4, 'Jemputan Sekolah'),
(5, 5, 'Kereta Api'),
(6, 6, 'Andong/Bendi/Sado/Dokar/Delman/Beca'),
(7, 99, 'Lainnya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `data_upload`
--
ALTER TABLE `data_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penghasilan_bulanan`
--
ALTER TABLE `penghasilan_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_kesejahteraan`
--
ALTER TABLE `program_kesejahteraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tempat_tinggal`
--
ALTER TABLE `tempat_tinggal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_ayah`
--
ALTER TABLE `data_ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_periodik`
--
ALTER TABLE `data_periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_upload`
--
ALTER TABLE `data_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `penghasilan_bulanan`
--
ALTER TABLE `penghasilan_bulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `program_kesejahteraan`
--
ALTER TABLE `program_kesejahteraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tempat_tinggal`
--
ALTER TABLE `tempat_tinggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

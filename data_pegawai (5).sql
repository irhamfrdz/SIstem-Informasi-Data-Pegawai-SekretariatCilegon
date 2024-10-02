-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2022 pada 04.07
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `status` enum('PNS','Honorer TKK','Honorer THL','Honorer OB','Honorer Pamdal','Honorer PRT') NOT NULL,
  `tmt` date NOT NULL,
  `bagian` enum('Umum','Adpem','Organisasi','Program & Keuangan','Ekbang','Kesra','Barjas','Pemerintahan','Hukum') NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nik`, `nama`, `alamat`, `no_hp`, `pendidikan`, `status`, `tmt`, `bagian`, `email`, `jabatan`, `npwp`, `golongan`, `tanggal_lahir`, `foto`, `tempat_lahir`) VALUES
('241213', '3211512', 'Hafidz', 'serang', '5123123', 'SD Sederajat', 'Honorer TKK', '2022-08-03', '', 'gakingetgue', 'Staff', '0', 'Golongan 4A', '0000-00-00', '1.jpg', ''),
('41412312', '642432', 'IrhamFR', 'Serang', '0823829032', 'SD Sederajat', '', '2022-08-07', '', 'dindalindass9@gmail.com', 'STAFF', '0562342', 'Golongan 1', '0000-00-00', 'Tulips.jpg', 'Serang'),
('424242', '424242', 'Test', 'Serang', '-238128391', 'SMA Sederajat', 'PNS', '2022-08-07', 'Adpem', 'iraldada', 'Staff', '4324242', 'Golongan1', '2022-08-07', 'bill.png', 'Serang'),
('5141231', '515131', 'benerrr', 'Serang', '0823829032', 'Umum', '', '0000-00-00', '', '2022-08-07', 'STAFF', '5151231', '1', '2022-08-07', 'download (1).jpg', 'dindalindass9@gmail.com'),
('5312312', '', 'Gunawan', 'Serang', '423423525', '', 'Honorer TKK', '0000-00-00', '', '@gmail.com', 'Staff', '0', 'Golongan 4A', '0000-00-00', 'adobe_lightroom_mobile_android_1.jpg', ''),
('54123123', '2131424', 'Faid', 'Carita', '1231444', 'SD Sederaj', 'PNS', '2022-08-03', '', 'saber01821@gmail.com', 'Staff', '0', 'Golongan 4A', '0000-00-00', 'fikri.jpg', ''),
('551', '551', 'Yusuf', 'Serang', '089131', 'S1', 'Honorer OB', '2022-08-08', 'Umum', '@gmail.com', 'OB', '551', 'Golongan3', '2022-08-08', 'Lighthouse.jpg', 'Serang'),
('we14141', '312414', 'benerdong', 'Serang', '0812338451', 'SMP Sederajat', 'PNS', '2022-08-07', 'Umum', 'dindalindass9@gmail.com', 'STAFF', '231421', 'Golongan 1', '2022-08-07', 'unauthorized-person.png', 'Serang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Zainal Arifin', 'admin', '123', 'Administrator'),
(6, 'ham', 'falcon', 'falcon', 'Pengguna'),
(7, 'ikhsan', 'ikhsan', '123456789i', 'Administator'),
(12, 'Irham', 'irham', 'irham', 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'Sekretariat Daerah Kota Cilegon', 'Jl. Sudirman No.2 ', 'Pemerintahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uraian`
--

CREATE TABLE `uraian` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kelas_jabatan` varchar(50) NOT NULL,
  `uraian_tugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uraian`
--

INSERT INTO `uraian` (`nip`, `nama`, `jabatan`, `kelas_jabatan`, `uraian_tugas`) VALUES
('198212132006042002', 'lusi agustini', 'staff', '1', 'LAPORAN KKP LUSI AGUSTINI (11119031).docx'),
('23144', 'Faed', 'Staff', '1', 'BAB 3.pdf'),
('65432', 'fariz', 'staff', '1', 'KOP NOTULEN RAPAT.docx'),
('8888', 'Indah', 'Staff', '1A', 'LAPORAN KKP LUSI AGUSTINI (11119031) (1).docx');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `uraian`
--
ALTER TABLE `uraian`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

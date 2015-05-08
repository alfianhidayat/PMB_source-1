-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2015 pada 09.19
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(64) DEFAULT NULL,
  `nip` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE IF NOT EXISTS `tb_agama` (
`id` int(11) NOT NULL,
  `nama_agama` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diterima`
--

CREATE TABLE IF NOT EXISTS `tb_diterima` (
  `id_peserta` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_jalur` int(11) DEFAULT NULL,
  `id_nilai` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jalur_tes`
--

CREATE TABLE IF NOT EXISTS `tb_jalur_tes` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nama_jalur` varchar(32) DEFAULT NULL,
  `quota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_peserta` int(11) DEFAULT NULL,
  `tipe_pembayaran` int(11) DEFAULT NULL,
  `status` enum('belum lunas','lunas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran_online`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran_online` (
  `id_pembayaran` int(11) DEFAULT NULL,
  `tanggal_transfer` datetime DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `bukti_pembayaran` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE IF NOT EXISTS `tb_peserta` (
`id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat_lahir` varchar(16) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `jenisKelamin` char(1) NOT NULL,
  `foto` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `sekolah_asal` varchar(128) NOT NULL,
  `id_jas` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE IF NOT EXISTS `tb_post` (
`id` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE IF NOT EXISTS `tb_prodi` (
`id` int(11) NOT NULL,
  `nama_prodi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE IF NOT EXISTS `tb_role` (
`id` int(11) NOT NULL,
  `type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukuran_jas`
--

CREATE TABLE IF NOT EXISTS `tb_ukuran_jas` (
`id` int(11) NOT NULL,
  `ukuran` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_diterima`
--
ALTER TABLE `tb_diterima`
 ADD KEY `id_peserta` (`id_peserta`), ADD KEY `id_prodi` (`id_prodi`), ADD KEY `id_jalur` (`id_jalur`), ADD KEY `id_nilai` (`id_nilai`);

--
-- Indexes for table `tb_jalur_tes`
--
ALTER TABLE `tb_jalur_tes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
 ADD PRIMARY KEY (`id`), ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `tb_pembayaran_online`
--
ALTER TABLE `tb_pembayaran_online`
 ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
 ADD PRIMARY KEY (`id`), ADD KEY `id_jas` (`id_jas`), ADD KEY `id_agama` (`id_agama`), ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
 ADD PRIMARY KEY (`id`), ADD KEY `id_creator` (`id_creator`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ukuran_jas`
--
ALTER TABLE `tb_ukuran_jas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id`), ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_ukuran_jas`
--
ALTER TABLE `tb_ukuran_jas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_diterima`
--
ALTER TABLE `tb_diterima`
ADD CONSTRAINT `tb_diterima_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `tb_peserta` (`id`),
ADD CONSTRAINT `tb_diterima_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id`),
ADD CONSTRAINT `tb_diterima_ibfk_3` FOREIGN KEY (`id_jalur`) REFERENCES `tb_jalur_tes` (`id`),
ADD CONSTRAINT `tb_diterima_ibfk_4` FOREIGN KEY (`id_nilai`) REFERENCES `tb_nilai` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `tb_peserta` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran_online`
--
ALTER TABLE `tb_pembayaran_online`
ADD CONSTRAINT `tb_pembayaran_online_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `tb_pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
ADD CONSTRAINT `tb_peserta_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_user` (`id`),
ADD CONSTRAINT `tb_peserta_ibfk_2` FOREIGN KEY (`id_jas`) REFERENCES `tb_ukuran_jas` (`id`),
ADD CONSTRAINT `tb_peserta_ibfk_3` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id`),
ADD CONSTRAINT `tb_peserta_ibfk_4` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `tb_admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tb_role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 12:47 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Muhammad Sulton');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `ikon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`, `ikon`) VALUES
(1, 'Pantai', 'Pantai', 'tours1.png'),
(2, 'Wisata', 'Wisata', 'medical1.png'),
(3, 'Kuliner', 'Kuliner', 'shopping1.png'),
(4, 'Penginapan', 'Penginapan', 'industries1.png');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profil` text NOT NULL,
  `detail` text NOT NULL,
  `alamat` text,
  `telp` varchar(20) NOT NULL,
  `latittude` text NOT NULL,
  `longitude` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `kategori`, `nama`, `profil`, `detail`, `alamat`, `telp`, `latittude`, `longitude`, `gambar`) VALUES
(1, 1, 'Pelabuhan Ratu', 'Pantai ikonik yang berada di Kabupaten Sukabumi. Berdasarkan cerita masyarakat konon katanya pantai ini dihuni oleh ratu laut Nyi Roro Kidul, terkadang sosoknya menampakan diri di pantai dengan memakai baju hijau. Pantai ini pun diberi nama karena lokasi menjadi tempat hunian Ratu Laut sehingga diberi nama Pelabuhan Ratu.', '<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n', 'Jl. Pelabuhan II', '+62 813 8555 2024', '-6.983705', '106.307512', 'unnamed--1537c06076.jpg'),
(2, 2, 'Puncak Habibi', 'Pemandangan menarik yang berada di perbatasan Kabupaten Sukabumi dan Provinsi Banten. Berdasarkan cerita masyarakat konon katanya pantai ini dihuni oleh ratu laut Nyi Roro Kidul, terkadang sosoknya menampakan diri di pantai dengan memakai baju hijau. Pantai ini pun diberi nama karena lokasi menjadi tempat hunian Ratu Laut sehingga diberi nama Pelabuhan Ratu.', '<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n', 'JL. Pelabuhan III', '+62 813 8555 2024', '-6.950008', '106.436423', 'unnamed--762331e069.jpg'),
(3, 3, 'RM. Sugih Cimaja', 'Pantai ikonik yang berada di Kabupaten Sukabumi. Berdasarkan cerita masyarakat konon katanya pantai ini dihuni oleh ratu laut Nyi Roro Kidul, terkadang sosoknya menampakan diri di pantai dengan memakai baju hijau. Pantai ini pun diberi nama karena lokasi menjadi tempat hunian Ratu Laut sehingga diberi nama Pelabuhan Ratu.', '<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n', 'Jl. Cimaja, Pelabuhan Ratu', '+62 813 8555 2024', '-6.925358', '106.4907', 'unnamed--1139b08882.jpg'),
(4, 4, 'Hotel Cleopatra', 'Hotel konik yang berada di Kabupaten Sukabumi. Berdasarkan cerita masyarakat konon katanya pantai ini dihuni oleh ratu laut Nyi Roro Kidul, terkadang sosoknya menampakan diri di pantai dengan memakai baju hijau. Pantai ini pun diberi nama karena lokasi menjadi tempat hunian Ratu Laut sehingga diberi nama Pelabuhan Ratu.', '<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n', 'Jl. Pelabuhan Ratu II', '+62 813 8555 2024', '-6.961263', '106.520002 ', 'w085.jpg'),
(5, 2, 'Puncak Darma', 'Pantai ikonik yang berada di Kabupaten Sukabumi. Berdasarkan cerita masyarakat konon katanya pantai ini dihuni oleh ratu laut Nyi Roro Kidul, terkadang sosoknya menampakan diri di pantai dengan memakai baju hijau. Pantai ini pun diberi nama karena lokasi menjadi tempat hunian Ratu Laut sehingga diberi nama Pelabuhan Ratu.', '<p><strong><big>Detail Peta Wilayah</big></strong></p>\r\n\r\n<ul>\r\n	<li>Garis lintang : 6&deg;57&#39;26.25&quot;S</li>\r\n	<li>Garis bujur : 106&deg;27&#39;56.25&quot;T</li>\r\n</ul>\r\n\r\n<p><strong><big>Fasilitas</big></strong></p>\r\n\r\n<ul>\r\n	<li>Parkiran Luas</li>\r\n	<li>Pengamanan Lifeguard</li>\r\n	<li>Kebersihan lingkungan terjaga</li>\r\n</ul>\r\n', 'Jl. Ujung Genteng', '+62 813 8555 2024', '-6.983705', '106.307512', 'unnamed--018258bbac.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

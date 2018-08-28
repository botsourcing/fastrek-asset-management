-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 04:13 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfigurasi`
--

CREATE TABLE IF NOT EXISTS `tbl_konfigurasi` (
`id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_website`, `logo`, `favicon`, `email`, `no_telp`, `alamat`, `facebook`, `instagram`, `keywords`, `metatext`, `about`) VALUES
(1, 'PROJEK', 'member.png', 'admin.png', 'admin@admin.com', '081906515912', 'Bandung', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Administrator adalah'),
(2, 'Member', 'Member adalah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `activation_code` varchar(50) NOT NULL,
  `forgotten_password_code` varchar(50) NOT NULL,
  `forgotten_password_time` datetime NOT NULL,
  `remember_code` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(1, 1, 'administrator', '$2y$05$6YXr8WY51xwBYs3jJl3LE.dBFeDAVrPNbbQjWI9EAc.UrmA.nrn5C', 'Admin', '', 'admin@admin.com', '#', 'sopiyudin.png', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '2018-05-22 20:58:33', 1),
(2, 2, 'member', '$2y$05$I/LMp0RtjGQYzpt.HVVJw.Z1y68BCD871T3jvl6K8wHuQxxsK1pLy', 'Member', '', 'member@gmail.com', '#', 'sopiyudin.png', '', '', '0000-00-00 00:00:00', '', '2018-05-16 14:31:53', '2018-05-22 21:15:27', 1),
(11, 1, 'sopiyudin', '$2y$05$z4Px.MNR8Oug6amtvtew4umRIfJ9zN9kISGc9VPMmbg7hgzFmKfOe', 'Sopiyudin', 'Balaka', 'sopiyudin333@gmail.com', '085659934953', 'sopiyudin.png', '', '', '0000-00-00 00:00:00', '', '2018-08-24 00:52:03', '0000-00-00 00:00:00', 1),
(12, 2, 'users', '$2y$05$aURAl2Fj4Dw/wiOZZrSpU.SPGFv/VbvXNcBXVY2xh7xqYWkFJmBhK', 'User', 'Doang', 'users@gmail.com', '111111111111', '1535096357106.png', '', '', '0000-00-00 00:00:00', '', '2018-08-24 14:01:27', '0000-00-00 00:00:00', 1),
(14, 2, 'testing', '$2y$05$gelnZ44YBoFj7T2XRyEnjeCpPYR09Xmu2xxA0DST9AbtX4Q8Q5jL.', 'Testing', '', 'testing@gmail.com', '', '', '', '', '0000-00-00 00:00:00', '', '2018-08-24 15:02:38', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
 ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

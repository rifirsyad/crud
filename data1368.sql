-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 03:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data1368`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_nama` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_namalengkap` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_nama`, `user_password`, `user_namalengkap`, `user_email`) VALUES
('aishaandn', '@415h44!', 'Aisha Nadine Sharikha', 'aishaa@aishaandn.com'),
('berthacellena', '@b3rt1!', 'Bertha Cellena Ariella', 'berti@berthacellena.com'),
('bildadari', '@b1ld4!', 'Nabila Albania', 'bilda@bildadari.com'),
('fitrinryn', '@f1tr1!', 'Fitri Nur Yani', 'fitri@fitrinryn.com'),
('jeslyn', '@dr153ll4!', 'Dri Sella Ade Saputri', 'drisella@jeslyn.com'),
('opsioktm', '@0c1!', 'Opsi Oktamalia', 'oci@opsioktm.com'),
('oseelaaa', '@n4dy4!', 'Nadya Kherunnisa', 'nadya@oseelaaa.com'),
('rifqi', '@r1fq1!', 'Rifqi Irsyadillah', 'rifqi.irsyadillah@students.amikom.ac.id'),
('rubyysun', '@dh1r4!', 'Fadhira Nasyiwa', 'dhira@rubyysun.com'),
('sasafch', '@f41s4!', 'Faisa Chairunnisa', 'faisa@sasafch.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

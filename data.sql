-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 08:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`Username`, `Password`) VALUES
('123', '123'),
('abc', 'abc'),
('abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDBuku` varchar(5) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `NamaBuku` varchar(50) NOT NULL,
  `Harga` int(7) NOT NULL,
  `Stok` int(3) NOT NULL,
  `Penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDBuku`, `Kategori`, `NamaBuku`, `Harga`, `Stok`, `Penerbit`) VALUES
('Senja', 'Senja', 'entah', 120000, 12, '12'),
('13', '13', '13', 1313, 13, '13'),
('3', '3', '3', 3, 3, '3'),
('123', '123', '1234', 123, 123, '123'),
('133', '133', '1322', 133, 133, '133');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `IDPenerbit` varchar(4) NOT NULL,
  `NamaPenerbit` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`IDPenerbit`, `NamaPenerbit`, `Alamat`, `Kota`, `Telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No. 121', 'Bandung', '0813-2220-1946'),
('SP02', 'Andi Offset', 'Jl, Suryalaya IX No. 3', 'Bandung', '0878-3903-0688'),
('SP03', 'Danendra', 'Jl. Moch. Toha 44', 'Bandung', '022-5201215'),
('', '123456', '12345', '12345', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

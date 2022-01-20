-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 08:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasurlari`
--

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `kd` varchar(500) NOT NULL,
  `id` varchar(34) NOT NULL,
  `brand` varchar(400) NOT NULL,
  `specification` varchar(600) NOT NULL,
  `price` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`kd`, `id`, `brand`, `specification`, `price`) VALUES
('1', 'toho', 'ASUS,v161GART Celeron (Layar Sentuh)	', 'Intel Celeron N4020/Memori 4GB/HDD 1000GB/no DVD RW/HD Graphic/Keyboard & Mouse Wifi/LCD 15,6\' HD/Win 10', '6.950.000\r\n'),
('2', 'maha', 'ASUS,v161GART Celeron (Layar Sentuh)	', 'Intel Celeron N4020/Memori 4GB/HDD 1000GB/no DVD RW/HD Graphic/Keyboard & Mouse Wifi/LCD 15,6\' HD/Win 10', '6.400.000\r\n'),
('3', 'aora', 'ASUS,v161GART Celeron (Layar Sentuh)	', 'Intel Celeron N4020/Memori 4GB/HDD 1000GB/no DVD RW/HD Graphic/Keyboard & Mouse Wifi/LCD 15,6\' HD/Win 10', 'banyak');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `kd` varchar(500) NOT NULL,
  `id` varchar(34) NOT NULL,
  `brand` varchar(400) NOT NULL,
  `specification` varchar(600) NOT NULL,
  `price` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`kd`, `id`, `brand`, `specification`, `price`) VALUES
('1', 'toho', 'Acer,Aspire A314 AMD', 'AMD Athon A3020e/HDD 1000GB/Memori 4GB/VGA AMD Radeon/Wifi/no DVD RW/Layar 14,0\' HD/Windows 10', '5.695.001'),
('2', 'maha', 'Acer,Aspire A314 AMD', 'AMD Athon A3020e/HDD 1000GB/Memori 4GB/VGA AMD Radeon/Wifi/no DVD RW/Layar 14,0\' HD/Windows 10', '4.995.000'),
('3', 'aora', 'Acer,Aspire A314 AMD', 'AMD Athon A3020e/HDD 1000GB/Memori 4GB/VGA AMD Radeon/Wifi/no DVD RW/Layar 14,0\' HD/Windows 10', '5.995.000');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `kd` varchar(500) NOT NULL,
  `id` varchar(34) NOT NULL,
  `brand` varchar(400) NOT NULL,
  `specification` varchar(600) NOT NULL,
  `price` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`kd`, `id`, `brand`, `specification`, `price`) VALUES
('1', 'toho', 'Epson L120/L121	', 'Infus,free 4 tinta kamu', '2.050.000\r\n'),
('2', 'maha', 'Epson L120/L121	', 'Infus,free 4 tinta palsu', '2.050.000\r\n'),
('3', 'aora', 'Epson L120/L121	', 'Infus,free 4 tinta kental', '2.050.000\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `toko` varchar(111) NOT NULL,
  `kd` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telpon` varchar(500) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `maps` varchar(815) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`toko`, `kd`, `alamat`, `telpon`, `provinsi`, `maps`) VALUES
('Aora computer\r\n', 'aora', 'Alamat : JL. Yos Sudarso, No. 21, Lido Kamp. Baru, Sorong Barat.\r\n', 'Telepon : +6281212718779\r\n', 'Provinsi : Papua Barat\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.362891300725!2d131.24397081430325!3d-0.865716235555064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5eab7245e67f8b%3A0xfaf427ac7ca27835!2sAora%20Computer!5e0!3m2!1sid!2sid!4v1642511197240!5m2!1sid!2sid'),
('Mahadewa Komputer\r\n', 'maha', 'Alamat : Klasabi, Sorong Manoi, Kota Sorong, Papua Bar. 98412\r\n', 'Telepon : +628114113115\r\n', 'Provinsi : Papua Barat\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3372057808547!2d131.3096247143035!3d-0.8897944355720433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d59550fe44504c5%3A0x7a318c275c0da5bc!2sMahadewa%20Computer!5e0!3m2!1sid!2sid!4v1642510394258!5m2!1sid!2sid'),
('Toho Komputer\r\n', 'th', 'Alamat : Remu Utara, Kec. Sorong, Kota Sorong, Papua Bar. 98412\r\n', 'Telepon : +62 822-4835-1344\r\n', 'Provinsi : Papua Barat\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3447026750496!2d131.28338951430342!3d-0.8828345355670373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d59552a18cd4ae1%3A0x633c80789139d057!2sTOHO%20Komputer!5e0!3m2!1sid!2sid!4v1642482059293!5m2!1sid!2sid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

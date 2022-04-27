-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 06:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akasuna_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(3) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(11) NOT NULL,
  `stok` int(3) NOT NULL,
  `dibeli` int(3) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi`, `harga`, `stok`, `dibeli`, `jenis_barang`, `foto`) VALUES
(1, 'POLYTRON 32 Inch Cinemax TV LED PLD 32T7511', 'Ukuran: 32 Inch, Resolusi: 1366 x 768 (HD Ready) 2 XBR Tower Speaker\r\n3D Picture Noise Reduction\r\nKonektivitas: HDMI/USB\r\nTipe Layar	\r\nLED TV\r\nLain-lain	\r\n3D Picture Noise Reduction\r\nBass Reflex Speaker Tower\r\nUSB input (Movie, MP3, Jpeg)\r\nInput / Output	\r\n2 x HDMi\r\n1 x VGA Input\r\n1 x USB\r\n1 x Component Input\r\n1 x AV Input\r\n1 x AV Output\r\nVideo	\r\nDIPE Engine: Yes\r\nUkuran Layar	\r\n32 Inch\r\nDimensi Produk	\r\nLED With Base: (W x D x H) 74 x 23 x 50 cm,LED Without Base (W x D x H) 74 x 9 x 44 cm, Tower Speaker (W x D x H) 16 x 16 x 58 cm\r\nResolusi Layar	\r\n1.366 x 768 (HD-Ready)\r\nAudio	\r\n2 XBR Tower Speaker\r\nEqualizer 5 Band\r\n', '2637000', 23, 3, 'elektronik', 'POLYTRON 32 Inch Cinemax TV LED PLD 32T7511.jpg'),
(2, 'SAMSUNG 32 Inch TV LED UA32J4003', 'Ukuran : 32 Inch 1366 x 768 HyperReal Engine Dolby Digital Plus\r\nHDMI\r\nUSB\r\nTipe Layar	\r\nLED TV\r\nUkuran Layar	\r\n32 Inch\r\nResolusi Layar	\r\n1,366 x 768\r\nRasio Kontras	\r\nMega Contrast\r\nSpeaker	\r\nDown Firing + Full Range\r\nVoltase	\r\nAC110 - 240V 50/60Hz\r\nGaransi	\r\n24 Bulan dari Distributor Resmi di Indonesia , Garansi 12 Bulan Panel', '2927000', 19, 7, 'elektronik', 'SAMSUNG 32 Inch TV LED UA32J4003.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2022 at 02:27 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id_skill` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id_skill`, `name`, `value`) VALUES
(1, 'HTML5', 65),
(2, 'Afinity Desigen', 80),
(3, 'CSS', 50),
(4, 'Figma', 60);

-- --------------------------------------------------------

--
-- Table structure for table `tb_algi`
--

CREATE TABLE `tb_algi` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `umur` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_algi`
--

INSERT INTO `tb_algi` (`id`, `nama`, `alamat`, `umur`, `email`, `no_hp`, `github`, `img`, `des`) VALUES
(3, 'Moch algiafri alifudin zidan', 'Sampay Rt.01/01 Des.Cicantayan Kab.Sukabumi', 21, 'algifari.zidan19@gmail.com', '0857000000', 'algifariz', 'algi.jpeg', 'I alifari UI/UX and web design.\r\nSaya is a front-end developer that is well-versed in graphic design software such as Photoshop and Sketch.\r\nSaya belajar secara mudah dan tim pekerja yang menyelesaikan pekerjaan.\r\nSaya dapat memanfaatkan buah-buahan yang tergantung dan cepat memaksimalkan hasil yang tepat waktu untuk skema waktu nyata dengan mudah. ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu`
--

CREATE TABLE `tb_edu` (
  `edu_id` int(11) NOT NULL,
  `edu_name` varchar(255) NOT NULL,
  `edu_in` varchar(255) NOT NULL,
  `edu_out` varchar(255) NOT NULL,
  `edu_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu`
--

INSERT INTO `tb_edu` (`edu_id`, `edu_name`, `edu_in`, `edu_out`, `edu_detail`) VALUES
(1, 'SD ', '2006', '2012', 'SD Bojongwaru'),
(2, 'MTs', '2012', '2015', 'MTs Al-Ma\'arij'),
(3, 'MA', '2015', '2018', 'MA AL-MA\'ARIJ'),
(4, 'S1', '2019', '2023', 'UNIVERSITAS MUHAMMADIYAH SUKABUMI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `tb_algi`
--
ALTER TABLE `tb_algi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu`
--
ALTER TABLE `tb_edu`
  ADD PRIMARY KEY (`edu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_algi`
--
ALTER TABLE `tb_algi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_edu`
--
ALTER TABLE `tb_edu`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

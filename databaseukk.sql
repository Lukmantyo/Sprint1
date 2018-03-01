-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 06:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` enum('1','0') NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `gender`, `email`) VALUES
(1, 'Lukman', 'Papua Jayapura', '081336728190', '1', ''),
(2, 'Rookmn Ryou', 'Kober', '0999999999', '1', 'Rookman@ryou.com'),
(3, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(4, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(5, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(6, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(7, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(8, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(9, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(10, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(11, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(12, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(13, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(14, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(15, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(16, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(17, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(18, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(19, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(20, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(21, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(22, 'Lukman', 'Papua', '08172611221', '1', 'lukmanyahoo@gmail.com'),
(23, 'Maho Nishi', 'Okinawa', '091827121', '1', 'mahhoo@yahoo.com'),
(24, 'Maho Nishi', 'Okinawa', '091827121', '1', 'mahhoo@yahoo.com'),
(25, 'Maho Nishi', 'Okinawa', '091827121', '1', 'mahhoo@yahoo.com'),
(26, 'Maho Nishi', 'Okinawa', '091827121', '1', 'mahhoo@yahoo.com'),
(27, 'Maho Nishi', 'Okinawa', '091827121', '1', 'mahhoo@yahoo.com'),
(28, 'Maho Nishi', 'Okinawa', '091827121', '1', 'mahhoo@yahoo.com'),
(29, 'AAA', 'AAA', '111', '0', 'AAA'),
(30, 'AAA', 'AAA', '111', '0', 'AAA'),
(31, 'AAA', 'AAA', '111', '0', 'AAA'),
(32, 'AAA', 'AAA', '111', '0', 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL,
  `reservation_code` varchar(10) NOT NULL,
  `reservation_at` date NOT NULL,
  `reservation_date` date NOT NULL,
  `seat_code` varchar(5) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rute_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_at`, `reservation_date`, `seat_code`, `customer_id`, `rute_id`, `user_id`, `img`, `status`) VALUES
(22, 'nwF4Mf', '2018-03-15', '2018-03-01', '55', 23, 1, 0, '', 0),
(23, '2Uxqcy', '2018-03-15', '2018-03-01', '61', 23, 1, 0, '', 0),
(24, 'QbuRTh', '2018-03-15', '2018-03-01', '1', 23, 1, 0, '', 0),
(25, 'nV9Wbo', '2018-03-15', '2018-03-01', '14', 23, 1, 0, '', 0),
(26, 'prsRDS', '2018-03-15', '2018-03-01', '1', 23, 1, 0, '', 0),
(27, '6MXsIy', '2018-03-15', '2018-03-01', '43', 23, 1, 0, '', 0),
(28, 'op8JPv', '2018-03-15', '2018-03-01', '1', 29, 1, 0, '', 0),
(29, '8RTib4', '2018-03-15', '2018-03-01', '1', 29, 1, 0, '', 0),
(30, 'M5RZ0U', '2018-03-15', '2018-03-01', '1', 29, 1, 0, '', 0),
(31, 'BSGQRl', '2018-03-15', '2018-03-01', '1', 29, 1, 0, 'BSGQRl.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(11) NOT NULL,
  `depart_at` time NOT NULL,
  `arrival_at` time NOT NULL,
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `transportation_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `depart_at`, `arrival_at`, `rute_from`, `rute_to`, `price`, `transportation_id`, `date`) VALUES
(1, '06:00:00', '07:15:00', 'Bandara Sultan Iskandar Muda - Aceh', 'Bandara Soekarno-Hatta - Jakarta', 280000, 1, '2018-03-15'),
(2, '10:15:00', '10:45:00', 'Bandara Sudirman - Purbalingga', 'Bandara Adisutjipto - Yogyakarta', 170000, 2, '2018-03-16'),
(3, '20:00:00', '01:30:00', 'Bandara Soekarno-Hatta - Jakarta', 'Bandara Sentani - Papua', 735000, 3, '2018-03-17'),
(4, '08:30:00', '09:15:00', 'Bandara Jayabaya - Jawa Timur', 'Banda Ngurah Rai - Bali', 230000, 2, '2018-03-17'),
(5, '05:00:00', '07:00:00', 'Bandara Kodomo - NTT', 'Bandara Sultan Mahmud Badaruddin II - Palembang', 537000, 3, '2018-03-13'),
(6, '17:20:00', '18:50:00', 'Bandara Adisutjipto - Yogyakarta', 'Bandara Sultan iskandar Muda - Aceh', 330000, 1, '2018-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(5) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` longtext NOT NULL,
  `seat_qty` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`) VALUES
(1, 'GIR-175', 'Sebuah pesawat komersial dengan tenaga jet buatan Indonesia.', 200),
(2, 'B-747', 'Pesawat dengan tubuh besarnya yang terkenal. Boeing-747 buatan Amerika.', 250),
(3, 'SHAMAL-5', 'Pesawat jet kecil berisikan 50 orang, dengan kecepatannya yang cepat dapat tiba lebih cepat.', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `level` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(5, 'rookman', 'rookman123', 'Rookman Ryou', '1'),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rute_id` (`rute_id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

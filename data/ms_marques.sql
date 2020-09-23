-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.128.29
-- Generation Time: Sep 23, 2020 at 03:08 PM
-- Server version: 5.5.44-37.3-log
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adnext`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_marques`
--

CREATE TABLE `ms_marques` (
  `id` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_marques`
--

INSERT INTO `ms_marques` (`id`, `libelle`, `logo`) VALUES
(1, 'Abarth', 'Abarth.png'),
(2, 'Alfa-romeo', 'Alfa-romeo.png'),
(3, 'Aston-martin', 'Aston-martin.png'),
(4, 'Audi', 'Audi.png'),
(5, 'Bentley', 'Bentley.png'),
(6, 'Bmw', 'Bmw.png'),
(7, 'Citroen', 'Citroen.png'),
(8, 'Dacia', 'Dacia.png'),
(9, 'Ds', 'Ds.png'),
(10, 'Ferrari', 'Ferrari.png'),
(11, 'Fiat', 'Fiat.png'),
(12, 'Ford', 'Ford.png'),
(13, 'Honda', 'Honda.png'),
(14, 'Hyundai', 'Hyundai.png'),
(15, 'Infiniti', 'Infiniti.png'),
(16, 'Jaguar', 'Jaguar.png'),
(17, 'Jeep', 'Jeep.png'),
(18, 'Kia', 'Kia.png'),
(19, 'Lamborghini', 'Lamborghini.png'),
(20, 'Land-rover', 'Land-rover.png'),
(21, 'Lexus', 'Lexus.png'),
(22, 'Lotus', 'Lotus.png'),
(23, 'Maserati', 'Maserati.png'),
(24, 'Mazda', 'Mazda.png'),
(25, 'Mclaren', 'Mclaren.png'),
(26, 'Mercedes-benz', 'Mercedes-benz.png'),
(27, 'Mini', 'Mini.png'),
(28, 'Mitsubishi', 'Mitsubishi.png'),
(29, 'Nissan', 'Nissan.png'),
(30, 'Opel', 'Opel.png'),
(31, 'Peugeot', 'Peugeot.png'),
(32, 'Porsche', 'Porsche.png'),
(33, 'Renault', 'Renault.png'),
(34, 'Rolls-royce', 'Rolls-royce.png'),
(35, 'Seat', 'Seat.png'),
(36, 'Skoda', 'Skoda.png'),
(37, 'Smart', 'Smart.png'),
(38, 'Ssangyong', 'Ssangyong.png'),
(39, 'Subaru', 'Subaru.png'),
(40, 'Suzuki', 'Suzuki.png'),
(41, 'Tesla', 'Tesla.png'),
(42, 'Toyota', 'Toyota.png'),
(43, 'Volkswagen', 'Volkswagen.png'),
(44, 'Volvo', 'Volvo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_marques`
--
ALTER TABLE `ms_marques`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_marques`
--
ALTER TABLE `ms_marques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

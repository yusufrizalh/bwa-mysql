-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 09:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(12) NOT NULL,
  `adm_email` varchar(255) NOT NULL,
  `adm_name` varchar(255) NOT NULL,
  `adm_password` varchar(255) NOT NULL,
  `adm_status` enum('aktif','non-aktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_email`, `adm_name`, `adm_password`, `adm_status`) VALUES
(1, 'admin@email.com', 'Yusuf Rizal H.', 'Admin12345', 'aktif'),
(2, 'rizal@inixindo.co.id', 'Rizal', 'Rizal123456', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(15) NOT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `emp_email` varchar(255) DEFAULT NULL,
  `emp_hire_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_hire_date`) VALUES
(6, 'John', 'john@email.com', '2021-12-01 02:59:14'),
(9, 'Paulo', 'paulo@email.com', '2021-12-01 02:59:14'),
(10, 'Mariana Louis', 'mariana_louis@email.com', '2021-12-01 06:39:44'),
(11, 'Rizal', 'rizal@inixindo.co.id', '2021-12-01 07:09:37'),
(16, 'Sebastian Franco', 'sebastian_franco@email.com', '2021-12-09 09:32:07'),
(17, 'Georgia', 'georgia@email.com', '2021-12-09 09:40:34'),
(18, 'Martina Stefany', 'martina_stefany@email.com', '2021-12-09 09:40:51'),
(19, 'Katrina', 'katrina@example.co.id', '2021-12-09 09:41:10'),
(20, 'Alan Shearer', 'alan@email.com', '2021-12-09 09:41:22'),
(21, 'Sanders', 'sanders@email.com', '2021-12-09 09:41:31'),
(22, 'Borris Johnson', 'b_johnson@email.com', '2021-12-10 08:13:15'),
(23, 'Daniel', 'daniel@email.com', '2021-12-10 08:14:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

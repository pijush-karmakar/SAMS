-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 05:15 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `att_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `roll`, `attend`, `att_time`) VALUES
(5, '	ASH1501030M', 'absent', '2017-09-23'),
(6, '	ASH1501029M', 'absent', '2017-09-23'),
(7, '	ASH1501039M', 'present', '2017-09-23'),
(8, '	ASH1501025M', 'absent', '2017-09-23'),
(17, '	ASH1501030M', 'present', '2017-09-27'),
(18, '	ASH1501029M', 'absent', '2017-09-27'),
(19, '	ASH1501039M', 'absent', '2017-09-27'),
(20, '	ASH1501025M', 'absent', '2017-09-27'),
(33, '	ASH1501030M', 'absent', '2017-09-28'),
(34, '	ASH1501029M', 'present', '2017-09-28'),
(35, '	ASH1501039M', 'absent', '2017-09-28'),
(36, '	ASH1501025M', 'absent', '2017-09-28'),
(46, '	ASH1501030M', 'absent', '2017-10-01'),
(47, '	ASH1501029M', 'absent', '2017-10-01'),
(48, '	ASH1501039M', 'present', '2017-10-01'),
(49, '	ASH1501025M', 'present', '2017-10-01'),
(50, 'ASH1501059M', 'present', '2017-10-01'),
(51, '	ASH1501030M', 'present', '2017-10-02'),
(52, '	ASH1501029M', 'absent', '2017-10-02'),
(53, '	ASH1501039M', 'present', '2017-10-02'),
(54, '	ASH1501030M', 'present', '2017-10-22'),
(55, '	ASH1501029M', 'absent', '2017-10-22'),
(56, '	ASH1501039M', 'present', '2017-10-22'),
(57, '	ASH1501025M', 'absent', '2017-10-22'),
(58, 'ASH1501059M', 'absent', '2017-10-22'),
(59, '	ASH1501030M', 'present', '2017-10-23'),
(60, '	ASH1501029M', 'absent', '2017-10-23'),
(61, '	ASH1501039M', 'present', '2017-10-23'),
(62, '	ASH1501029M', 'absent', '2018-01-24'),
(63, '	ASH1501039M', 'absent', '2018-01-24'),
(64, '	ASH1501025M', 'absent', '2018-01-24'),
(65, 'ASH1501059M', 'present', '2018-01-24'),
(66, '17', 'absent', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`) VALUES
(5, 'pijush karmakar', '	ASH1501030M'),
(6, 'Taifur Asad', '	ASH1501029M'),
(7, 'Mahidul Hasan', '	ASH1501039M'),
(8, 'SM Mahdi', '	ASH1501025M'),
(9, 'Ruhul Amin', 'ASH1501059M'),
(10, 'Anondo', '17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

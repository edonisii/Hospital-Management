-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 07:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncf`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `message`) VALUES
(1, 'edonis', 'edonisbislimi12@gmail.com', 'Me pelqen sistemi i menagjimit ne spitalin tuaj!!');

-- --------------------------------------------------------

--
-- Table structure for table `doktorrat`
--

CREATE TABLE `doktorrat` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doktorrat`
--

INSERT INTO `doktorrat` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(30, 'woman', 'woman@gmail.com', 'woman', '$2y$10$qZ0mlw2a6VVGth1M7mt3EOUqo2erSO9PBhsWOPx0he54dCqEdPwwm'),
(31, 'man', 'man@gmail.com', 'man', '$2y$10$OR/wSZu.WYY2tk4h0qS0seLu3VWH2ueUsAdVTObDYdkLspuK1yfNG'),
(32, 'test', 'test@gmail.com', 'test', '$2y$10$ZD8.hykTfVV24MiFAsqyzujwyVClAzUcehnjiBbvTvqO0v5eaPO66'),
(33, 'TestDoktorri', 'testDoktorri@gmail.com', 'TestDoktorri', '$2y$10$o4PsVjPFVbynD/pATggpJeqqUR7zX2PFlgF1rQFcdOx0xyoEhLdSO'),
(34, 'edonis', 'edonisbislimi12@gmail.com', 'edonis', '$2y$10$V.k5OtGyIjnFNTzE1k60Y.0WVP5iujtE2uyIDnPFAfNIdzMZHOAs6'),
(35, 'doni', 'donis@gmail.com', 'doni', '$2y$10$4.6TL9aoVomDwptxHCk6euYWpF5JLWJC7yc2v0q1ikm6oWFkCNN6i'),
(36, 'dok', 'Doktorri@gmail.com', 'dok', '$2y$10$I71Fzt4K44wcGuworSk/0u9BAnxuvZotc/ttNgJn94A/ukK5M/Y0y'),
(37, 'edonisi', 'edonisbislimi12@gmail.com', 'edonisiiii', '$2y$10$j6dPhlE5KsA6vYm1gtpd0.CmtoPKXSyAaB7PxJ3XQjPYT3aHbBQTW');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `image`) VALUES
(33, 'purepng.com-doctordoctorsdoctors-and-nursesclinicianmedical-practitionernotepadfemale-1421526857248uragw (2).png', './uploads/purepng.com-doctordoctorsdoctors-and-nursesclinicianmedical-practitionernotepadfemale-1421526857248uragw (2).png'),
(34, 'th (1).jpg', './uploads/th (1).jpg'),
(35, 'DQ9A3866.JPG', './uploads/DQ9A3866.JPG'),
(36, 'DQ9A3815.JPG', './uploads/DQ9A3815.JPG'),
(37, 'DQ9A3814.JPG', './uploads/DQ9A3814.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(3, 'admin', 'admin', 'admin@demo.com', '$2y$10$hfvOuf6982QMHUUd.WOp/O7Qnxq/em7RUzTJDtSGYytaRBmoRBTV6');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

CREATE TABLE `medicalhistory` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobileNumber` int(255) NOT NULL,
  `MedicalHistory` varchar(255) NOT NULL,
  `VisitDate` date NOT NULL,
  `age` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`id`, `name`, `mobileNumber`, `MedicalHistory`, `VisitDate`, `age`) VALUES
(11, 'ict', 45884806, 'shume mir', '2021-12-12', 18),
(12, 'woman', 45884806, 'shume mir', '2021-12-12', 18),
(13, 'ictawars', 455575757, 'shume mir', '2021-12-12', 20),
(14, 'ictawars', 45884806, 'shendosh', '2021-12-12', 25),
(15, 'ictawards', 45884806, 'shendosh', '2021-12-12', 30),
(16, 'edonis', 45884806, 'shendosh', '2021-12-12', 28);

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doktorri` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervimet`
--

INSERT INTO `rezervimet` (`id`, `username`, `email`, `doktorri`, `data`, `time`) VALUES
(18, 'ictawards', 'ictawards@gmail.com', 'doktorri', '2020-12-02', '16:50:00.000000'),
(19, 'ict', 'ict@gmail.com', 'edonis', '2020-12-02', '03:03:00.000000'),
(20, 'woman', 'woman@gmail.com', 'woman', '2020-12-02', '16:18:00.000000'),
(21, 'edonis', 'edonisbislimi12@gmail.com', 'woman', '2020-12-02', '18:19:00.000000'),
(22, 'ictawards', 'ictawards@gmail.com', 'man', '2020-12-02', '18:23:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(25, 'edonis555', 'edonis@gmail.com', 'edonis', '$2y$10$mxMXDW9A/HvQOg6DNjo3e.ume.Pjsm/ZimsEhtTqAbqCeU3HQ8BVi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doktorrat`
--
ALTER TABLE `doktorrat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doktorrat`
--
ALTER TABLE `doktorrat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

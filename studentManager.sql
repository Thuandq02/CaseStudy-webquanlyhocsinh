-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2020 at 05:02 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentManager`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `id_class` int NOT NULL,
  `ClassName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`id_class`, `ClassName`) VALUES
(1021, '12A'),
(1056, '12B'),
(1089, '12C'),
(1107, '12D');

-- --------------------------------------------------------

--
-- Table structure for table `Point`
--

CREATE TABLE `Point` (
  `id` int NOT NULL,
  `id_Student` int NOT NULL,
  `math` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `literature` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Point`
--

INSERT INTO `Point` (`id`, `id_Student`, `math`, `literature`, `english`) VALUES
(39, 25, '8', '7', '7'),
(40, 26, '9', '7', '5'),
(41, 27, '7', '5', '3'),
(43, 28, '8', '4', '7'),
(44, 29, '6', '8', '8'),
(45, 25, '9', '10', '9');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id_student` int NOT NULL,
  `id_class` int NOT NULL,
  `NameStudent` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`id_student`, `id_class`, `NameStudent`, `Gender`, `Date`, `Address`) VALUES
(25, 1021, 'Nguyễn Đức Thắng', 'Nam', '2002-12-09', 'Hải Dương'),
(26, 1021, 'Nguyễn Đình Tuấn', 'Nam', '2002-11-02', 'Hải Dương'),
(27, 1021, 'Trần Kim Linh', 'Nữ', '2002-12-04', 'Hải Dương'),
(28, 1021, 'Nguyễn Công Phượng', 'Nam', '2002-12-02', 'Hải Dương'),
(29, 1021, 'Nguyễn Văn Công', 'Nam', '2002-02-21', 'Hải Dương');

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `id_Subject` int NOT NULL,
  `SubjectName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Subject`
--

INSERT INTO `Subject` (`id_Subject`, `SubjectName`) VALUES
(101, 'Môn Toán'),
(102, 'Môn Văn'),
(103, 'Môn Anh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `Point`
--
ALTER TABLE `Point`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Student` (`id_Student`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_class` (`id_class`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`id_Subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Class`
--
ALTER TABLE `Class`
  MODIFY `id_class` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;

--
-- AUTO_INCREMENT for table `Point`
--
ALTER TABLE `Point`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id_student` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Subject`
--
ALTER TABLE `Subject`
  MODIFY `id_Subject` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Point`
--
ALTER TABLE `Point`
  ADD CONSTRAINT `Point_ibfk_1` FOREIGN KEY (`id_Student`) REFERENCES `Students` (`id_student`);

--
-- Constraints for table `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `Students_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `Class` (`id_class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

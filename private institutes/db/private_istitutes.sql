-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 11:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `private istitutes`
--

-- --------------------------------------------------------

--
-- Table structure for table `the institutes`
--

CREATE TABLE `the institutes` (
  `name` varchar(100) NOT NULL,
  `expenses` int(7) NOT NULL,
  `the possibility of installment` varchar(4) NOT NULL,
  `city` varchar(50) NOT NULL,
  `governorate` varchar(50) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the institutes`
--

INSERT INTO `the institutes` (`name`, `expenses`, `the possibility of installment`, `city`, `governorate`, `about`, `id`) VALUES
('معهد هندسه و تكنولوجيا الطيران', 14000, 'متاح', 'امبابه', 'الجيزه', 'هذا المعهد يعد من اقدم المعاهد التي تدرس تكنولوجيا الطيران في مصر', 1),
('معهد العبور العالي للهندسه و التكنولوجيا', 12000, 'غير ', 'العبور', 'القاهره', 'هذا المعهد ...', 2),
('معهد راس البر العالي للدراسات النوعيه و الحاسب الالي', 8000, 'متاح', 'راس البر', 'دمياط', '........', 3),
('معهد الاسكندريه العالي للهندسه و التكنولوجيا للمعلومات ', 10000, 'متاح', 'سموحه', 'الاسكندريه', '........', 4),
('المعهد العالي للعلوم الاداريه', 14500, 'متاح', '6اكتوبر', 'القاهره', '...........', 5),
('المعهد العالي للحاسب الالي ', 7000, 'غير ', 'كنج المريوط', 'الاسكندريه', '........', 6),
('المعهد العالي لعلوم الحاسب و نظم المعلومات', 18000, 'متاح', 'التجمع الخامس', 'القاهره', '......', 7),
('المعهد العالي للعلوم الاداريه و التجاره الخارجيه ', 6000, 'متاح', 'التجمع الخامس', 'القاهره', '......', 8),
('معهد سينا لدراسات النوعيه', 5000, 'غير ', 'العريش', 'سينا', '.....ز', 9),
('المعهد الكندي العالي للتكنولوجيا و الهندسه و الاداره', 20000, 'متاح', 'التجمع الخامس', 'القاهره', '', 10),
('المعهد العالي للخدمه الاجتماعيه', 8000, 'متاح', 'الدقهليه', 'المنصورة', '....', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `the institutes`
--
ALTER TABLE `the institutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `the institutes`
--
ALTER TABLE `the institutes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 10:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `date_of_joining` varchar(255) NOT NULL,
  `date_of_leaving` varchar(255) NOT NULL,
  `monthly_salary` varchar(255) NOT NULL,
  `yearly_salary` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `mobile_no`, `email`, `address`, `pincode`, `date_of_joining`, `date_of_leaving`, `monthly_salary`, `yearly_salary`, `profile_photo`) VALUES
(10, 'Shailendra Kumar', '6387467570', 'visshailendra@gmail.com', 'Mau nankar', '272153', '15/08/2022', '15/10/2023', '150000', '200000', '1693463724.png'),
(11, 'Anil Vishwakarma', '8585774469', 'anil@gmail.com', 'pune', '411035', '22/10/2023', '21/05/2024', '250000', '2.5 LPA', '1693463860.png'),
(12, 'PRAHLAD CHANDRA SUTHAR', '8104840472', 'sutharprahlad90@gmail.com', 'Village-Badwal,Tehsil-Bari Sadri,Dist-Chittorgarh(Raj)312401', '312401', '12/08/2023', '15/10/2023', '150000', '25Lpa', '1693463899.png');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salarys`
--

CREATE TABLE `emp_salarys` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(255) NOT NULL,
  `salary_credited` varchar(100) NOT NULL,
  `paid_for_days` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_salarys`
--

INSERT INTO `emp_salarys` (`id`, `employee_id`, `month`, `year`, `salary_credited`, `paid_for_days`) VALUES
(12, '11', 'Sep', '2023', '180000', '10 Days'),
(13, '12', 'aug', '2002', '180000', '25 Days'),
(14, '10', 'Jan', '2023', '17000', '15 Days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salarys`
--
ALTER TABLE `emp_salarys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_salarys`
--
ALTER TABLE `emp_salarys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

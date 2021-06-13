-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2021 at 06:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_25`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `blood_id` int(11) NOT NULL,
  `blood_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`blood_id`, `blood_name`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `sec_a`
--

CREATE TABLE `sec_a` (
  `Roll` int(6) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Gender` int(3) DEFAULT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Blood_group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sec_a`
--

INSERT INTO `sec_a` (`Roll`, `Name`, `Gender`, `Phone_Number`, `Blood_group`) VALUES
(18001, 'MD. Ahasanul Hasan Tonmoy', 1, '01771269745', 1),
(18002, 'Saiful Islam ', 1, NULL, NULL),
(18004, 'Md. Shahnur Islam', 1, NULL, NULL),
(18007, 'Hasibul Hussen', 1, '01772300544', NULL),
(18008, 'Md. Tauhid Islam', 1, '0181874776', 5),
(18009, 'Md. Asabussafa Bin Zia', 1, NULL, NULL),
(18010, 'Md. Nasir Siddiq', 1, NULL, NULL),
(18011, 'Md. Samiul Alam', 1, '01521437812', 3),
(18012, 'Rifat Rizwan Imam', 1, NULL, NULL),
(18014, 'Tarikur Rahman Tonmoy', 1, NULL, NULL),
(18016, 'Md. Imran Hossain', 1, NULL, NULL),
(18018, 'Md. Salauddin Khalifa', 1, NULL, NULL),
(18019, 'MD. Mohibullah Dipu', 1, NULL, NULL),
(18020, 'Md Obaed', 1, '01787505333', 7),
(18021, 'Jerin Afrose', 1, '01782168435', 3),
(18025, 'Jannatun Nayem', 2, '01828088974', 5),
(18026, 'Md. Imran Hossain', 1, NULL, NULL),
(18027, 'Abdur Razzak Shubho', 1, NULL, NULL),
(18028, 'Md Sazzad Hossain', 1, '01840940924', NULL),
(18029, 'Tayef Hasan', 1, '01685091391', 3),
(18030, 'Soaib Ahmad', 1, '01686643321', 7),
(18031, 'Arafat Sikder', 1, '01867828205', 1),
(18032, 'Md. Redwan Ahmed', 1, '01978100112', 5),
(18033, 'S.M Rezanur Amin', 1, NULL, NULL),
(18034, 'Mehedi Hasan Robin', 1, NULL, NULL),
(18035, 'MD. Nadim Bhuiyan', 1, '01840945004', NULL),
(18036, 'H.M. Sakib Hossain', 1, NULL, NULL),
(18037, 'Aleam Hossain Hasib', 1, '01701020428', NULL),
(18038, 'MD. Khairul Islam Emon', 1, '01638849305', 5),
(18039, 'Jahid Hasan', 1, NULL, NULL),
(18040, 'Ayesha Akter', 2, '01772480027', 5),
(18041, 'MD. Ehsanul Azim', 1, NULL, NULL),
(18042, 'Afsana Akter', 2, '01533653076', 7),
(18043, 'Md. Enamul Hossain', 1, NULL, NULL),
(18044, 'Muahammad Saifullah Ansar', 1, '01959143449', NULL),
(18045, 'Ridoy Kanto Joy', 1, '01685281515', 1),
(18046, 'Sunzidul Haq Nahim', 1, '01554336702', 5),
(18047, 'Md. Nazmul Hasan', 1, NULL, NULL),
(18048, 'Md. Rahat Hossain', 1, '01689747425', 5),
(18049, 'Mehedi Hasan', 1, NULL, NULL),
(18050, 'Mahmuda Khatun', 2, '01964549560', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sec_b`
--

CREATE TABLE `sec_b` (
  `Roll` int(6) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Gender` int(3) DEFAULT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Blood_group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sec_b`
--

INSERT INTO `sec_b` (`Roll`, `Name`, `Gender`, `Phone_Number`, `Blood_group`) VALUES
(17080, 'Mostafijur Rahman', 1, NULL, NULL),
(17094, 'Muntasir Shariyer', 1, '01683775854', 3),
(18052, 'Kazy Saiful Islam', 1, NULL, NULL),
(18053, 'Syed Isratul Masfic Soad', 1, '01986639120', 1),
(18055, 'Hasibul Hasan Pranto', 1, NULL, NULL),
(18056, 'Abu Alid', 1, '01817638601', 1),
(18057, 'Nura Islam', 1, NULL, NULL),
(18058, 'Sadia Amreen', 2, '01688100211', NULL),
(18059, 'Nayla Zahan Nafisa', 2, '0195407288', NULL),
(18061, 'Prince Abdullah', 1, '01946431878', 5),
(18063, 'Dastagir Kabir', 1, NULL, NULL),
(18064, 'Md. Meherab Hossain', 1, NULL, NULL),
(18065, 'Md. Masudur Rahman', 1, NULL, NULL),
(18066, 'Mortaza Banu Mim', 2, '01634755305', 1),
(18067, 'Bibi Rahima Khatun', 2, '01679485496', 1),
(18068, 'Faria Rahman Rimu', 2, '01782076302', 3),
(18069, 'Nazma Akter', 2, '01722438913', 5),
(18070, 'Md. Mehedi Ahmed', 1, NULL, NULL),
(18071, 'Kawsar Bhuyan', 1, '01941414630', 3),
(18073, 'Hasanul Islam Akash', 1, NULL, NULL),
(18074, 'Salman Ahmmed', 1, '01837382289', 3),
(18077, 'Reduanul Islam Rafin', 1, '01624956953', 5),
(18078, 'Nusrat Jahan Mumu', 2, '01954269971', 3),
(18079, 'Mahedi Hasan Sazzad', 1, NULL, NULL),
(18081, 'Faria Islam Oyshi', 2, '01787749562', 2),
(18082, 'Mitanur Akter Mitu', 2, '01968820758', 3),
(18083, 'Md. Mahfuzur Rahman', 1, NULL, NULL),
(18084, 'Mst. Mahjabin', 2, '01680644566', 5),
(18085, 'Tanvir Fuad', 1, '01672111566', 3),
(18086, 'Md. Emran Miazi', 1, '01856123598', 1),
(18087, 'Priyanka Rani Ghosh', 2, '01625466933', 3),
(18088, 'Afsana Khandaker Mim', 2, '01915693074', 5),
(18089, 'Abdur Rahman', 1, '01961246592', 3),
(18090, 'Nurun Nahar Bithi', 2, '01623059732', 5),
(18091, 'Jarif Ishmam Ul Haque', 1, '01727283331', 5),
(18092, 'Md. Sakib Anawer', 1, NULL, NULL),
(18093, 'MD. Nasim Khondoker', 1, '01635468595', 1),
(18094, 'Md. Kawsaruzzaman Akash', 1, '01919801885', 3),
(18095, 'Halima Akter', 2, '01772686083', 5),
(18096, 'Ashik Ahmed', 1, NULL, NULL),
(18097, 'Azman Arefin', 1, '01521562184', 1),
(18099, 'Sazzad Hossain', 1, '01823917341', 3),
(18100, 'Rakib Hasan', 1, '01796625454', NULL),
(18101, 'Md. Ashraful Islam', 1, NULL, NULL),
(18102, 'Md. Nahid Neazee Naeem', 1, '01682616013', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `sec_a`
--
ALTER TABLE `sec_a`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `sec_b`
--
ALTER TABLE `sec_b`
  ADD PRIMARY KEY (`Roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sec_a`
--
ALTER TABLE `sec_a`
  MODIFY `Roll` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18051;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

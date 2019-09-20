-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 01:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hire_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` blob NOT NULL,
  `company_logo_extension` varchar(255) NOT NULL,
  `company_username` varchar(255) NOT NULL,
  `company_password` varchar(255) NOT NULL,
  `company_about_us` text NOT NULL,
  `company_contact_id` int(11) NOT NULL,
  `company_contact_email` varchar(255) NOT NULL,
  `company_website_link` varchar(255) NOT NULL,
  `company_rating` int(11) NOT NULL,
  `meta_data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_image`
--

CREATE TABLE `company_image` (
  `company_image_id` int(11) NOT NULL,
  `company_image` blob NOT NULL,
  `company_image_extension` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_profile`
--

CREATE TABLE `job_profile` (
  `job_profile_id` int(11) NOT NULL,
  `job_profile_name` varchar(255) NOT NULL,
  `job_profile_description` text NOT NULL,
  `job_profile_criteria` text NOT NULL,
  `company_id` int(10) NOT NULL,
  `package_id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  `job_profile_bond` varchar(255) NOT NULL,
  `job_profile_registration_start_date` date NOT NULL,
  `job_profile_registration_end_date` date NOT NULL,
  `job_profile_process_start_date` date NOT NULL,
  `meta_data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `meta_data_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`meta_data_id`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, '2019-09-20 15:14:22', '2019-09-20 15:14:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_ctc` varchar(255) NOT NULL,
  `package_lpa` varchar(255) NOT NULL,
  `package_benefits` text NOT NULL,
  `job_profile_id` int(10) NOT NULL,
  `meta_data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `process_id` int(11) NOT NULL,
  `job_profile_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `process_date` datetime NOT NULL,
  `meta_data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_image`
--
ALTER TABLE `company_image`
  ADD PRIMARY KEY (`company_image_id`);

--
-- Indexes for table `job_profile`
--
ALTER TABLE `job_profile`
  ADD PRIMARY KEY (`job_profile_id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`meta_data_id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`process_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_image`
--
ALTER TABLE `company_image`
  MODIFY `company_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_profile`
--
ALTER TABLE `job_profile`
  MODIFY `job_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `meta_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `process_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 08:28 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulse`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `class_sections_id` int(11) NOT NULL,
  `class_sections_class_id` int(11) NOT NULL,
  `class_sections_section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `district_state_id` int(11) NOT NULL,
  `district_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `institution_id` int(11) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `institution_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`institution_id`, `institution_name`, `institution_code`) VALUES
(1, 'Nalanda Group', 'NLG'),
(2, 'Narayana Group', 'NG'),
(3, 'Ratnam Group', 'RG'),
(4, 'Bhashyam Group', 'BH'),
(5, 'RBS Group', 'RBSG');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_code`, `role_name`) VALUES
(1, 'admin', 'Administrator'),
(2, 'student', 'Student'),
(3, 'teacher', 'Teacher'),
(4, 'examiner', 'Examiner'),
(5, 'parent', 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `school_id` int(11) NOT NULL,
  `school_name` int(11) NOT NULL,
  `school_code` int(11) NOT NULL,
  `school_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_classes`
--

CREATE TABLE `school_classes` (
  `school_classes_id` int(11) NOT NULL,
  `school_classes_class_id` int(11) DEFAULT NULL,
  `school_classes_school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_district`
--

CREATE TABLE `school_district` (
  `school_district_id` int(11) NOT NULL,
  `school_district_school_id` int(11) NOT NULL,
  `school_district_district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_institution`
--

CREATE TABLE `school_institution` (
  `school_institution_id` int(11) NOT NULL,
  `school_institution_school_id` int(11) NOT NULL,
  `school_institution_institution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_code` varchar(255) NOT NULL,
  `state_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `state_code`, `state_status`) VALUES
(2, 'Andhra Pradesh', 'AP', 1),
(3, 'Telangana', 'TS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_section`
--

CREATE TABLE `student_section` (
  `students_section_id` int(11) NOT NULL,
  `students_section_student_id` int(11) NOT NULL,
  `students_section_section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_address` text NOT NULL,
  `user_image` text NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_reg_date` date NOT NULL,
  `user_last_login` datetime NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `user_firstname`, `user_lastname`, `user_address`, `user_image`, `user_role`, `user_reg_date`, `user_last_login`, `user_status`) VALUES
(4, 'admin', '$2y$10$srbIg0BC/7m8L/ePlmWBeurQghchb78XvxjTrBD0ej1zU1AOlNF7m', 'Azaad', 'Shaik', '', '', 1, '2018-07-17', '0000-00-00 00:00:00', 1),
(5, 'azaadshaik', '$2y$10$zZZFkotyfHDkuHe0Vg7xWu8VDZNuNLPJJOBVrMqSJm/6EjlJtPIZC', 'Azaad', 'Shaik', '', 'DSC_6372_-_Copy.JPG', 2, '2018-07-25', '0000-00-00 00:00:00', 1),
(6, 'sddsdsad', '$2y$10$Jaa0GacWR8JxBRBG5/ZQqOJA9s7eaSWri5bbw.fCNP77z63NGOjRe', '', '', '', '', 0, '2018-07-25', '0000-00-00 00:00:00', 1),
(7, 'sasas', '$2y$10$c7EZsFNkvN1JJflEeehk/eL0IM.XifO8u1GOQUawmFq8uhjAQn1d2', '', '', '', '', 0, '2018-07-25', '0000-00-00 00:00:00', 1),
(8, 'xzxzX', '$2y$10$E4bODVKTuY6TciNxORjeOejptPpGPWmnre4jZOnbOXk/900ugKhNG', '', '', '', '', 0, '2018-07-25', '0000-00-00 00:00:00', 1),
(9, 'asssasA', '$2y$10$hWrl4uavUHDHoueNO/.egObtDTCL5pVPJPfkgSITx9NfmFaeQYl8W', '', '', '', '', 0, '2018-07-25', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_name` (`class_name`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`class_sections_id`),
  ADD KEY `class_sections_fk0` (`class_sections_class_id`),
  ADD KEY `class_sections_fk1` (`class_sections_section_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`),
  ADD UNIQUE KEY `district_name` (`district_name`),
  ADD UNIQUE KEY `district_code` (`district_state_id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`institution_id`),
  ADD UNIQUE KEY `institution_name` (`institution_name`),
  ADD UNIQUE KEY `institution_code` (`institution_code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_code` (`school_code`);

--
-- Indexes for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD PRIMARY KEY (`school_classes_id`),
  ADD KEY `school_classes_fk0` (`school_classes_class_id`),
  ADD KEY `school_classes_fk1` (`school_classes_school_id`);

--
-- Indexes for table `school_district`
--
ALTER TABLE `school_district`
  ADD PRIMARY KEY (`school_district_id`),
  ADD KEY `school_district_fk0` (`school_district_school_id`),
  ADD KEY `school_district_fk1` (`school_district_district_id`);

--
-- Indexes for table `school_institution`
--
ALTER TABLE `school_institution`
  ADD PRIMARY KEY (`school_institution_id`),
  ADD KEY `school_institution_fk0` (`school_institution_school_id`),
  ADD KEY `school_institution_fk1` (`school_institution_institution_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`),
  ADD UNIQUE KEY `section_name` (`section_name`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `state_name` (`state_name`),
  ADD UNIQUE KEY `state_code` (`state_code`);

--
-- Indexes for table `student_section`
--
ALTER TABLE `student_section`
  ADD PRIMARY KEY (`students_section_id`),
  ADD KEY `student_section_fk0` (`students_section_student_id`),
  ADD KEY `student_section_fk1` (`students_section_section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `class_sections_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `institution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_classes`
--
ALTER TABLE `school_classes`
  MODIFY `school_classes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_district`
--
ALTER TABLE `school_district`
  MODIFY `school_district_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_institution`
--
ALTER TABLE `school_institution`
  MODIFY `school_institution_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_section`
--
ALTER TABLE `student_section`
  MODIFY `students_section_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD CONSTRAINT `class_sections_fk0` FOREIGN KEY (`class_sections_class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `class_sections_fk1` FOREIGN KEY (`class_sections_section_id`) REFERENCES `sections` (`section_id`);

--
-- Constraints for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD CONSTRAINT `school_classes_fk0` FOREIGN KEY (`school_classes_class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `school_classes_fk1` FOREIGN KEY (`school_classes_school_id`) REFERENCES `schools` (`school_id`);

--
-- Constraints for table `school_district`
--
ALTER TABLE `school_district`
  ADD CONSTRAINT `school_district_fk0` FOREIGN KEY (`school_district_school_id`) REFERENCES `schools` (`school_id`),
  ADD CONSTRAINT `school_district_fk1` FOREIGN KEY (`school_district_district_id`) REFERENCES `districts` (`district_id`);

--
-- Constraints for table `school_institution`
--
ALTER TABLE `school_institution`
  ADD CONSTRAINT `school_institution_fk0` FOREIGN KEY (`school_institution_school_id`) REFERENCES `schools` (`school_id`),
  ADD CONSTRAINT `school_institution_fk1` FOREIGN KEY (`school_institution_institution_id`) REFERENCES `institution` (`institution_id`);

--
-- Constraints for table `student_section`
--
ALTER TABLE `student_section`
  ADD CONSTRAINT `student_section_fk0` FOREIGN KEY (`students_section_student_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `student_section_fk1` FOREIGN KEY (`students_section_section_id`) REFERENCES `sections` (`section_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

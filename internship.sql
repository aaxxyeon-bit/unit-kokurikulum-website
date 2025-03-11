-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 01:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','superadmin') NOT NULL DEFAULT 'admin',
  `delete_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `role`, `delete_password`) VALUES
(1, 'unitkokurikulum', '$2y$10$7jmgCJFg3BJbgGeJUYLZOe.H/pS50dWvq5wCmog9IMI82h0vykOS.', 'admin', ''),
(2, 'KokurikulumTapah', '$2y$10$.pLzuCeQmzbRDGiZcG6GTuFDKzIgVo9MCpfjPpc76yCECgA3ftnRi', 'superadmin', '$2y$10$YSTHRsQ3S/jlkqOeW.qllecyiRLBpbEqxl9WihjZcBgFBFquEgytG');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `MaklumBalas` text NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`ID`, `Nama`, `Email`, `MaklumBalas`, `DateTime`) VALUES
(36, 'Nur Syaidatul Jannah Shah Faisal', 'jannahcomel@gmail.com', 'wow tapah', '2025-02-06 07:51:55'),
(38, 'Nur Amnani Roslan', 'nanigempak@gmail.com', 'nak test je', '2025-02-06 07:53:02'),
(39, 'Nur Nisanabiha Norazhari', 'bihacantik@gmail.com', 'batu gajah > tapah', '2025-02-06 07:54:00'),
(40, 'Nur Khadijah Qadirah Abdul Aziz', 'jajaslim@gmail.com', 'beyondForever', '2025-02-06 07:54:43'),
(41, 'Nurhanaa Taqiyyah Shahrulniza', 'qiyswag@gmail.com', 'balik ipoh la', '2025-02-06 07:56:01'),
(42, 'Noor Auni Aqilah Mohd Tarmizi', 'aunicool@gmail.com', 'ko jangan baca je auni', '2025-02-06 07:56:29'),
(43, 'Reffa Ellysha Redzuan', 'reffacute@gmail.com', 'anak beyond', '2025-02-06 07:57:29'),
(44, 'Wafa Dayini Mohamad Daud', 'wafaimutt@gmail.com', 'wafa kata nak balik tapah', '2025-02-07 00:34:06'),
(45, 'Umie Nabihah Yeop Idris', 'umieslayy@gmail.com', 'nak duk kl\r\n', '2025-02-07 00:34:40'),
(49, 'Haziqah Insyirah Samsularifin', 'iqaalberteinsteinn@gmail.com', 'good good', '2025-02-07 00:42:40'),
(52, 'Ain Afiqah Ramlee', 'aenbaek@gmail.com', 'boek', '2025-02-10 02:32:40'),
(53, 'Nurain Ezzety Md Haled', 'queenzety@gmail.com', 'tapah baik', '2025-02-10 02:32:59'),
(54, 'Nur \'Ainil Sofiyyah Najmullail', 'nellhott@gmail.com', 'gempak', '2025-02-10 02:33:36'),
(58, 'dummy 2', 'dummy2@gmail.com', 'goood job', '2025-02-12 04:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `jadual_kokurikulum`
--

CREATE TABLE `jadual_kokurikulum` (
  `id` int(11) NOT NULL,
  `nama_jadual` varchar(255) NOT NULL,
  `file_path` text NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadual_kokurikulum`
--

INSERT INTO `jadual_kokurikulum` (`id`, `nama_jadual`, `file_path`, `uploaded_at`) VALUES
(2, 'Jadual Semester 1', 'uploads_jadual/jadual_test.pdf', '2025-02-02 14:09:05'),
(3, 'Jadual Semester 2', 'uploads_jadual/jadual_test.pdf', '2025-02-02 14:11:26'),
(5, 'Jadual Semester 3', 'uploads_jadual/jadual_test.pdf', '2025-02-10 02:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE `posters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`id`, `title`, `file_path`) VALUES
(11, 'Pengambilan SUKSIS', 'uploads/suksiPengambilan.jpg'),
(14, 'SUKSIS Dummy', 'uploads/suksiPengambilan.jpg'),
(17, 'Maulidu Rasul', 'uploads/maulid rasul.jpg'),
(19, 'Hari Malaysia', 'uploads/hariMalaysia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jadual_kokurikulum`
--
ALTER TABLE `jadual_kokurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `jadual_kokurikulum`
--
ALTER TABLE `jadual_kokurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

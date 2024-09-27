-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2024 at 10:26 AM
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
-- Database: `citypolicedept`
--

-- --------------------------------------------------------

--
-- Table structure for table `casee`
--

CREATE TABLE `casee` (
  `casee_id` int(11) NOT NULL,
  `victimid` char(13) DEFAULT NULL,
  `suspect_id` char(13) DEFAULT NULL,
  `dateofReport` varchar(20) DEFAULT NULL,
  `desciption` text DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `case_category` varchar(40) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casee`
--

INSERT INTO `casee` (`casee_id`, `victimid`, `suspect_id`, `dateofReport`, `desciption`, `section`, `case_category`, `station_id`) VALUES
(68, '3520212345678', '4720412345678', '2023-08-27', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 16),
(69, '3220112345678', '4120512345678', '2024-04-25', 'A violent incident of dacoity occurred in a remote village.', 'Section 395', 'Dacoity', 6),
(70, '4020112345678', '3920312345678', '2024-03-29', 'An elaborate fraud scheme discovered in a corporate setting.', 'Section 420', 'Fraud', 17),
(71, '3220112345678', '4720412345678', '2023-11-22', 'A case of harassment reported in a workplace environment.', 'Section 509', 'Harassment', 12),
(72, '3220112345678', '3120112345678', '2024-05-08', 'A case of domestic violence involving family members.', 'Section 498', 'Domestic Violence', 14),
(73, '3220112345678', '3320512345678', '2023-09-19', 'A hit-and-run accident resulting in severe injuries.', 'Section 320', 'Hit & Run', 13),
(74, '3220112345678', '3120112345678', '2024-02-22', 'Drug abuse reported in a residential area.', 'Section 9', 'Drug Abuse', 12),
(75, '4020112345678', '4320312345678', '2024-03-12', 'A tragic case of murder in a quiet neighborhood.', 'Section 302', 'Murder', 6),
(76, '3520212345678', '4420112345678', '2024-03-05', 'An assault incident at a public event.', 'Section 355', 'Assault', 14),
(77, '4210112345678', '3320112345678', '2023-12-01', 'A case of molestation reported in a crowded place.', 'Section 375', 'Molestation', 2),
(78, '5420212345678', '4720412345678', '2023-09-04', 'Cybercrime involving identity theft and fraud.', 'Section 29', 'Cybercrime', 8),
(79, '3520112345678', '4420312345678', '2024-04-04', 'An arson incident resulting in property damage.', 'Section 440', 'Arson', 20),
(80, '3520212345678', '4820212345678', '2023-11-19', 'A case of theft reported from a residential area.', 'Section 380', 'Theft', 16),
(81, '3620112345678', '3320512345678', '2024-04-10', 'A case of robbery in a busy marketplace.', 'Section 392', 'Robbery', 11),
(82, '5420212345678', '4520412345678', '2024-05-07', 'A case of kidnapping reported in a suburban area.', 'Section 364', 'Kidnapping', 15),
(114, '3620112345678', '3120312345678', '2023-11-18', 'A case of harassment reported in a workplace environment.', 'Section 509', 'Harassment', 7),
(115, '4920112345678', '3320312345678', '2024-03-05', 'A hit-and-run accident resulting in severe injuries.', 'Section 320', 'Hit & Run', 7),
(116, '3320112345678', '3320312345678', '2024-05-10', 'Drug abuse reported in a residential area.', 'Section 9', 'Drug Abuse', 9),
(117, '3520112345678', '3420412345678', '2024-02-18', 'A tragic case of murder in a quiet neighborhood.', 'Section 302', 'Murder', 12),
(118, '5420212345678', '3420412345678', '2023-12-05', 'An assault incident at a public event.', 'Section 355', 'Assault', 13),
(119, '4820212345678', '3520412345678', '2024-02-28', 'A case of molestation reported in a crowded place.', 'Section 375', 'Molestation', 15),
(120, '4420112345678', '3620112345678', '2024-01-14', 'Cybercrime involving identity theft and fraud.', 'Section 29', 'Cybercrime', 16),
(121, '5520112345678', '3720412345678', '2023-10-31', 'An arson incident resulting in property damage.', 'Section 440', 'Arson', 20),
(122, '3220112345678', '3920312345678', '2023-09-26', 'A case of theft reported from a residential area.', 'Section 380', 'Theft', 6),
(123, '4920112345678', '4020112345678', '2024-04-18', 'A case of robbery in a busy marketplace.', 'Section 392', 'Robbery', 18),
(124, '4210112345678', '4220412345678', '2024-04-02', 'A case of kidnapping reported in a suburban area.', 'Section 364', 'Kidnapping', 3),
(125, '4920112345678', '4520412345678', '2023-12-30', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 12),
(126, '3520112345678', '4620312345678', '2024-05-15', 'An elaborate fraud scheme discovered in a corporate setting.', 'Section 420', 'Fraud', 4),
(127, '3520112345678', '4720112345678', '2024-01-20', 'A violent incident of dacoity occurred in a remote village.', 'Section 395', 'Dacoity', 20),
(128, '5520112345678', '3120412345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 13),
(129, '3320112345678', '3520112345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 18),
(130, '3320112345678', '3520212345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 19),
(131, '4420112345678', '3520512345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 11),
(132, '4820112345678', '3820412345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 3),
(133, '4920112345678', '4210112345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 18),
(134, '4820212345678', '4820112345678', '2024-05-16', 'A case of theft reported at a local market.', 'Section 380', 'Theft', 4),
(135, '3120112345678', '4920112345678', '2024-05-16', 'A case of fraud reported involving financial transactions.', 'Section 420', 'Fraud', 17),
(136, '5520112345678', '5120312345678', '2024-05-16', 'A case of assault reported in a public park.', 'Section 355', 'Assault', 18),
(137, '3520212345678', '5420112345678', '2024-05-16', 'A case of vandalism reported in a school.', 'Section 440', 'Arson', 20),
(138, '3520212345678', '5420212345678', '2024-05-16', 'A case of harassment reported in a workplace.', 'Section 509', 'Harassment', 17),
(139, '5420112345678', '5520112345678', '2024-05-16', 'A case of hit-and-run reported involving pedestrians.', 'Section 320', 'Hit & Run', 13),
(142, '3523457889124', '3777538100980', '2024-05-18', 'He harrases me by getting a high GPA. He is my roommate.', 'Section 509', 'Harassment', 4),
(143, '3520457889124', '3951872454910', '2024-05-18', 'He is a professional robber from Karachi and currently staying in Razi || hostel. He had a water pistol and stole my Phone.', 'Section 395', 'Dacoity', 4),
(145, '3521478932105', '3588370599400', '2024-05-21', 'He sent me a phishing e-mail and hacked my computer.', 'Section 29', 'Cybercrime', 13),
(146, '4321987657432', '3385145857357', '2024-05-22', 'The suspect was driving a black honda civic and he hit a bike from behind , then drove off the scene.', 'Section 320', 'Hit & Run', 7),
(147, '3521478932121', '3367758494212', '2024-05-22', 'jfkgasdlfkj', 'Section 395', 'Dacoity', 4);

-- --------------------------------------------------------

--
-- Table structure for table `commisionedofficer`
--

CREATE TABLE `commisionedofficer` (
  `commofficerid` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `rank` varchar(30) DEFAULT NULL,
  `posting` varchar(50) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commisionedofficer`
--

INSERT INTO `commisionedofficer` (`commofficerid`, `name`, `age`, `rank`, `posting`, `contact_no`) VALUES
(123, 'Arshad Nazir', 60, 'SSP', 'Jhelum', 42478775),
(124, 'Raja Haseeb', 45, 'SP', 'Lahore', 42478775),
(125, 'Saima Bibi', 40, 'DSP', 'Faisalabad', 421234567),
(126, 'Ahmed Khan', 38, 'DSP', 'Gujranwala', 423456789),
(127, 'Asif Mahmood', 55, 'SP', 'Rawalpindi', 421234567),
(128, 'Nadia Khan', 50, 'SSP', 'Sargodha', 423456789),
(129, 'Ali Hassan', 48, 'DSP', 'Vehari', 42478775),
(130, 'Farah Malik', 43, 'DSP', 'Layyah', 421234567),
(131, 'Imran Khan', 42, 'SP', 'Sialkot', 423456789),
(132, 'Ayesha Bibi', 37, 'SP', 'Gujrat', 421234567),
(133, 'Kamran Ahmed', 52, 'SSP', 'Sahiwal', 423456789),
(134, 'Sadia Khan', 47, 'DSP', 'Jhang', 42478775),
(135, 'Usman Ali', 41, 'DSP', 'Okara', 421234567),
(136, 'Hina Khan', 39, 'SP', 'Sheikhupura', 423456789),
(137, 'Adil Ahmed', 56, 'SP', 'Faisalabad', 421234567),
(138, 'Sara Ali', 49, 'SSP', 'Khanewal', 423456789),
(139, 'Waqar Malik', 46, 'DSP', 'Muzaffargarh', 42478775),
(140, 'Aisha Khan', 44, 'DSP', 'Dera Ghazi khan', 421234567),
(141, 'Imran Ali', 53, 'SP', 'Sargodha', 423456789),
(142, 'Fatima Bibi', 51, 'SP', 'Multan', 421234567),
(143, 'Khalid Ahmed', 54, 'SSP', 'Bahawalpur', 423456789),
(144, 'Sadia Bibi', 57, 'DSP', 'Sialkot', 42478775),
(145, 'Bilal Khan', 58, 'DSP', 'Gujrat', 421234567),
(146, 'Sana Ahmed', 59, 'SP', 'Chiniot', 423456789),
(147, 'Ali Raza', 56, 'SP', 'Rahim Yar Khan', 421234567),
(148, 'Sara Khan', 55, 'SSP', 'Okara', 423456789),
(149, 'Adnan Ahmed', 60, 'DSP', 'Sheikhupura', 42478775),
(150, 'Amina Khan', 61, 'DSP', 'Faisalabad', 421234567),
(151, 'Imran Ali', 42, 'SSP', 'Islamabad', 2147483647),
(152, 'Khalid Mahmood', 48, 'SP', 'Karachi', 2147483647),
(153, 'Ayesha Khan', 35, 'DSP', 'Quetta', 2147483647),
(154, 'Usman Haider', 37, 'DSP', 'Peshawar', 2147483647),
(155, 'Sadia Malik', 40, 'SSP', 'Sialkot', 2147483647),
(156, 'Adnan Ahmed', 45, 'SP', 'Lahore', 2147483647),
(157, 'Mehwish Bibi', 39, 'DSP', 'Multan', 2147483647),
(158, 'Ali Raza', 52, 'DSP', 'Rawalpindi', 2147483647),
(159, 'Hina Khan', 43, 'SSP', 'Faisalabad', 2147483647),
(160, 'Waqas Ali', 47, 'SP', 'Gujranwala', 2147483647),
(161, 'Sana Khan', 38, 'DSP', 'Islamabad', 2147483647),
(162, 'Farhan Ali', 41, 'DSP', 'Karachi', 2147483647),
(163, 'Zoya Malik', 55, 'SSP', 'Quetta', 2147483647),
(164, 'Asad Khan', 36, 'SP', 'Peshawar', 2147483647),
(165, 'Amina Bibi', 44, 'DSP', 'Sialkot', 2147483647),
(166, 'Ahmed Raza', 49, 'DSP', 'Lahore', 2147483647),
(167, 'Sadia Ali', 46, 'SSP', 'Multan', 2147483647),
(168, 'Bilal Haider', 50, 'SP', 'Rawalpindi', 2147483647),
(169, 'Nadia Khan', 53, 'DSP', 'Faisalabad', 2147483647),
(170, 'Hassan Ali', 51, 'DSP', 'Gujranwala', 2147483647),
(171, 'Ayesha Malik', 56, 'SSP', 'Islamabad', 2147483647),
(172, 'Ibrahim Khan', 57, 'SP', 'Karachi', 2147483647),
(173, 'Sana Fatima', 59, 'DSP', 'Quetta', 2147483647),
(174, 'Usama Ali', 58, 'DSP', 'Peshawar', 2147483647),
(175, 'Kiran Bibi', 60, 'SSP', 'Sialkot', 2147483647),
(178, 'Hamza Ali', 34, 'DSP', 'Rawalpindi', 2147483647),
(179, 'Sanaullah Khan', 63, 'SSP', 'Faisalabad', 2147483647),
(180, 'Saima Ali', 65, 'SP', 'Gujranwala', 2147483647),
(182, 'Asma Bibi', 66, 'DSP', 'Karachi', 2147483647),
(183, 'Mehmood Khan', 67, 'SSP', 'Quetta', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `trial_id` int(11) NOT NULL,
  `judgementoutcome` varchar(100) DEFAULT NULL,
  `judgementDate` varchar(20) DEFAULT NULL,
  `judge_id` int(11) DEFAULT NULL,
  `casee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`trial_id`, `judgementoutcome`, `judgementDate`, `judge_id`, `casee_id`) VALUES
(43, 'Guilty', '2023-12-03', 35, 68),
(44, 'Not Guilty', '2024-06-27', 42, 69),
(45, 'In Trial', '2024-04-05', 37, 70),
(46, 'Guilty', '2024-02-25', 34, 71),
(47, 'Not Guilty', '2024-07-14', 36, 72),
(48, 'In Trial', '2023-12-02', 39, 73),
(49, 'Guilty', '2024-03-19', 44, 74),
(50, 'Not Guilty', '2024-05-04', 43, 75),
(51, 'In Trial', '2024-03-12', 42, 76),
(52, 'Guilty', '2023-12-11', 32, 77),
(53, 'Not Guilty', '2023-11-14', 40, 78),
(54, 'In Trial', '2024-04-10', 41, 79),
(55, 'Guilty', '2024-01-20', 37, 80),
(56, 'Not Guilty', '2024-07-17', 32, 81),
(57, 'In Trial', '2024-06-14', 35, 82),
(58, 'Guilty', '2023-11-24', 36, 114),
(59, 'Not Guilty', '2024-05-09', 39, 115),
(60, 'In Trial', '2024-07-16', 41, 116),
(61, 'Guilty', '2024-04-01', 41, 117),
(62, 'Not Guilty', '2024-02-17', 38, 118),
(63, 'In Trial', '2024-04-08', 43, 119),
(64, 'Guilty', '2024-04-04', 34, 120),
(65, 'Not Guilty', '2023-11-18', 35, 121),
(66, 'In Trial', '2024-05-13', 37, 122),
(67, 'Guilty', '2024-06-08', 42, 123),
(68, 'Not Guilty', '2024-03-28', 45, 124),
(69, 'In Trial', '2024-05-23', 35, 125),
(70, 'Guilty', '2024-04-18', 34, 126),
(71, 'Not Guilty', '2024-07-02', 40, 127),
(72, 'In Trial', '2024-07-18', 44, 128),
(73, 'Guilty', '2024-08-21', 41, 129),
(74, 'Not Guilty', '2024-06-10', 34, 130),
(75, 'In Trial', '2024-06-26', 36, 131),
(76, 'Guilty', '2024-08-04', 39, 132),
(77, 'Not Guilty', '2024-05-17', 45, 133),
(78, 'In Trial', '2024-05-26', 32, 134),
(79, 'Guilty', '2024-06-15', 31, 135),
(80, 'Not Guilty', '2024-08-03', 37, 136),
(81, 'In Trial', '2024-07-11', 31, 137),
(82, 'Guilty', '2024-08-03', 33, 138),
(83, 'Not Guilty', '2024-07-26', 40, 139),
(85, 'In Trial', '2024-07-24', 38, 142),
(86, 'In Trial', '2024-08-06', 39, 143),
(88, 'In Trial', '2024-05-27', 32, 145),
(89, 'In Trial', '2024-08-14', 37, 146),
(90, 'In Trial', '2024-08-25', 42, 147);

-- --------------------------------------------------------

--
-- Table structure for table `culprit`
--

CREATE TABLE `culprit` (
  `culprit_id` char(13) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `trial_id` int(11) NOT NULL,
  `jail_id` int(11) DEFAULT NULL,
  `cell_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `culprit`
--

INSERT INTO `culprit` (`culprit_id`, `name`, `trial_id`, `jail_id`, `cell_id`) VALUES
('3120112345678', 'Imran Ali', 49, 13, 49),
('3120312345678', 'Sana Khan', 58, 15, 57),
('3320112345678', 'Farhan Ahmed', 52, 12, 27),
('3420412345678', 'Sadia Malik', 61, 11, 50),
('3520112345678', 'Usman Ali', 73, 12, 99),
('3620112345678', 'Maria Khan', 64, 8, 43),
('3820412345678', 'Arif Hussain', 76, 10, 81),
('4020112345678', 'Muhammad Asif', 67, 6, 91),
('4720412345678', 'Zoya Akhtar', 43, 5, 46),
('4720412345678', 'Zoya Akhtar', 46, 4, 67),
('4820212345678', 'Hamza Ali', 55, 15, 98),
('4920112345678', 'Sara Ahmed', 79, 3, 38),
('5420212345678', 'Amina Hassan', 82, 8, 58);

-- --------------------------------------------------------

--
-- Table structure for table `jail`
--

CREATE TABLE `jail` (
  `jail_id` int(11) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `jailer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jail`
--

INSERT INTO `jail` (`jail_id`, `location`, `name`, `capacity`, `jailer_id`) VALUES
(1, 'Lahore', 'Lahore Central Jail', 1500, 178),
(2, 'Karachi', 'Karachi Central Jail', 2000, 137),
(3, 'Rawalpindi', 'Rawalpindi District Jail', 800, 161),
(4, 'Faisalabad', 'Faisalabad Central Jail', 1200, 137),
(5, 'Multan', 'Multan District Jail', 1000, 156),
(6, 'Peshawar', 'Peshawar Central Jail', 1500, 173),
(7, 'Quetta', 'Quetta District Jail', 700, 178),
(8, 'Islamabad', 'Islamabad Central Jail', 1000, 134),
(9, 'Hyderabad', 'Hyderabad District Jail', 800, 162),
(10, 'Sialkot', 'Sialkot District Jail', 600, 140),
(11, 'Gujranwala', 'Gujranwala Central Jail', 1200, 130),
(12, 'Bahawalpur', 'Bahawalpur District Jail', 700, 144),
(13, 'Sargodha', 'Sargodha District Jail', 800, 137),
(14, 'Larkana', 'Larkana District Jail', 600, 148),
(15, 'Abbottabad', 'Abbottabad District Jail', 500, 166);

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `judge_id` int(11) NOT NULL,
  `ju_name` varchar(50) NOT NULL,
  `court` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`judge_id`, `ju_name`, `court`) VALUES
(31, 'Justice Abdul Malik', 'Supreme Court'),
(32, 'Justice Sardar Ahmed', 'High Court'),
(33, 'Justice Farah Jamal', 'High Court'),
(34, 'Justice Usman Ali', 'High Court'),
(35, 'Justice Ayesha Khan', 'High Court'),
(36, 'Justice Imran Ahmed', 'High Court'),
(37, 'Justice Yasir Abbas', 'High Court'),
(38, 'Justice Zainab Fatima', 'High Court'),
(39, 'Justice Asif Mahmood', 'High Court'),
(40, 'Justice Zohaib Hassan', 'High Court'),
(41, 'Justice Saima Malik', 'High Court'),
(42, 'Justice Ali Raza', 'District Court'),
(43, 'Justice Naeem Ahmed', 'District Court'),
(44, 'Justice Sara Ali', 'District Court'),
(45, 'Justice Ahmed Khan', 'District Court');

-- --------------------------------------------------------

--
-- Table structure for table `noncommissionedofficer`
--

CREATE TABLE `noncommissionedofficer` (
  `noncommofficerid` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `rank` varchar(30) DEFAULT NULL,
  `commoffid` int(11) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `station_id` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noncommissionedofficer`
--

INSERT INTO `noncommissionedofficer` (`noncommofficerid`, `name`, `age`, `rank`, `commoffid`, `contact_no`, `station_id`) VALUES
(1, 'Usman Ahmed', 35, 'Inspector', 123, 301234567, 1),
(2, 'Nadia Khan', 32, 'ASI', 124, 301234568, 2),
(3, 'Ahmed Ali', 30, 'ASI', 125, 301234569, 3),
(4, 'Sara Ali', 29, 'Constable', 126, 301234570, 4),
(5, 'Imran Malik', 36, 'Inspector', 127, 301234571, 5),
(6, 'Sana Bibi', 33, 'ASI', 128, 301234572, 6),
(7, 'Ali Khan', 31, 'ASI', 129, 301234573, 7),
(8, 'Ayesha Bibi', 28, 'Constable', 130, 301234574, 8),
(9, 'Khalid Ahmed', 37, 'Inspector', 131, 301234575, 9),
(10, 'Sadia Khan', 34, 'ASI', 132, 301234576, 10),
(11, 'Ahmed Raza', 32, 'ASI', 133, 301234577, 11),
(12, 'Fatima Bibi', 29, 'Constable', 134, 301234578, 12),
(13, 'Usman Ali', 38, 'Inspector', 135, 301234579, 13),
(14, 'Saima Khan', 35, 'ASI', 136, 301234580, 14),
(15, 'Imran Ahmed', 32, 'ASI', 137, 301234581, 15),
(16, 'Farah Bibi', 29, 'Constable', 138, 301234582, 16),
(17, 'Kamran Ali', 39, 'Inspector', 139, 301234583, 17),
(18, 'Sara Malik', 36, 'ASI', 140, 301234584, 18),
(19, 'Ahsan Ahmed', 33, 'ASI', 141, 301234585, 19),
(20, 'Saba Bibi', 30, 'Constable', 142, 301234586, 20),
(21, 'Noman Ali', 40, 'Inspector', 143, 301234587, 1),
(22, 'Fizza Khan', 37, 'ASI', 144, 301234588, 2),
(23, 'Ahmed Khan', 34, 'ASI', 145, 301234589, 3),
(24, 'Sadia Ali', 31, 'Constable', 146, 301234590, 4),
(25, 'Imran Raza', 41, 'Inspector', 147, 301234591, 5),
(26, 'Saba Malik', 38, 'ASI', 148, 301234592, 6),
(27, 'Ahmed Ali', 35, 'ASI', 149, 301234593, 7),
(28, 'Ali Raza', 32, 'Constable', 150, 301234594, 8),
(29, 'Sana Khan', 42, 'Inspector', 123, 301234595, 9),
(30, 'Bilal Ahmed', 39, 'ASI', 124, 301234596, 10),
(31, 'Saima Ali', 36, 'ASI', 125, 301234597, 11),
(32, 'Ahmed Malik', 33, 'Constable', 126, 301234598, 12),
(33, 'Usman Khan', 43, 'Inspector', 127, 301234599, 13),
(34, 'Amina Bibi', 40, 'ASI', 128, 301234600, 14),
(35, 'Farhan Ahmed', 37, 'ASI', 129, 301234601, 15),
(36, 'Sana Bibi', 34, 'Constable', 130, 301234602, 16),
(37, 'Kamran Ali', 44, 'Inspector', 131, 301234603, 17),
(38, 'Sadia Malik', 41, 'ASI', 132, 301234604, 18),
(39, 'Ahmed Raza', 38, 'ASI', 133, 301234605, 19),
(40, 'Saima Khan', 35, 'Constable', 134, 301234606, 20),
(41, 'Usman Ahmed', 45, 'Inspector', 135, 301234607, 1),
(42, 'Nadia Khan', 42, 'ASI', 136, 301234608, 2),
(43, 'Ahmed Ali', 39, 'ASI', 137, 301234609, 3),
(44, 'Sara Ali', 36, 'Constable', 138, 301234610, 4),
(45, 'Imran Malik', 46, 'Inspector', 139, 301234611, 5),
(46, 'Sana Bibi', 43, 'ASI', 140, 301234612, 6),
(47, 'Ali Khan', 40, 'ASI', 141, 301234613, 7),
(48, 'Ayesha Bibi', 37, 'Constable', 142, 301234614, 8),
(49, 'Khalid Ahmed', 47, 'Inspector', 143, 301234615, 9),
(50, 'Sadia Khan', 44, 'ASI', 144, 301234616, 10);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `officerCapacity` int(11) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `location`, `officerCapacity`, `district`) VALUES
(1, 'Lahore Central', 50, 'Lahore'),
(2, 'Gujranwala City', 40, 'Gujranwala'),
(3, 'Faisalabad North', 35, 'Faisalabad'),
(4, 'Rawalpindi West', 45, 'Rawalpindi'),
(5, 'Sargodha South', 30, 'Sargodha'),
(6, 'Multan East', 25, 'Multan'),
(7, 'Bahawalpur Central', 20, 'Bahawalpur'),
(8, 'Sialkot West', 55, 'Sialkot'),
(9, 'Gujrat North', 60, 'Gujrat'),
(10, 'Sahiwal South', 65, 'Sahiwal'),
(11, 'Rahim Yar Khan East', 70, 'Rahim Yar Khan'),
(12, 'Okara Central', 75, 'Okara'),
(13, 'Sheikhupura North', 80, 'Sheikhupura'),
(14, 'Dera Ghazi Khan South', 85, 'Dera Ghazi Khan'),
(15, 'Jhang Central', 90, 'Jhang'),
(16, 'Layyah West', 95, 'Layyah'),
(17, 'Muzaffargarh South', 100, 'Muzaffargarh'),
(18, 'Vehari East', 105, 'Vehari'),
(19, 'Khanewal North', 110, 'Khanewal'),
(20, 'Chiniot Central', 115, 'Chiniot');

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

CREATE TABLE `suspect` (
  `uid` int(11) NOT NULL,
  `suspect_id` char(13) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastknownlocation` varchar(50) DEFAULT NULL,
  `suspect_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`uid`, `suspect_id`, `name`, `lastknownlocation`, `suspect_description`) VALUES
(1, '3120112345678', 'Imran Ali', 'Rawalpindi', 'Medium build, with a scar on the cheek.'),
(2, '3120312345678', 'Sana Khan', 'Rawalpindi', 'Tall, with a scar on the forehead.'),
(3, '3120412345678', 'Kamran Khan', 'Karachi', 'Medium build, with a scar on the left cheek.'),
(4, '3320112345678', 'Farhan Ahmed', 'Lahore', 'Medium build, with glasses.'),
(5, '3320312345678', 'Hina Malik', 'Karachi', 'Average height, with a distinctive birthmark on the neck.'),
(6, '3320512345678', 'Sara Khan', 'Karachi', 'Tall, with a tattoo on the right wrist.'),
(7, '3420412345678', 'Sadia Malik', 'Islamabad', 'Average height, with glasses and a backpack.'),
(8, '3520112345678', 'Usman Ali', 'Lahore', 'Tall, with a beard, wearing a black jacket.'),
(9, '3520212345678', 'Ayesha Malik', 'Lahore', 'Average height, wearing a white dress.'),
(10, '3520412345678', 'Nazia Ali', 'Rawalpindi', 'Tall, with a mole near the nose.'),
(11, '3520512345678', 'Tariq Mehmood', 'Lahore', 'Medium build, wearing a baseball cap.'),
(12, '3620112345678', 'Maria Khan', 'Islamabad', 'Average height, wearing a pink scarf.'),
(13, '3820412345678', 'Arif Hussain', 'Karachi', 'Muscular build, with a beard and sunglasses.'),
(14, '3920312345678', 'Ayesha Gul', 'Lahore', 'Short hair, wearing a floral dress.'),
(15, '4020112345678', 'Muhammad Asif', 'Karachi', 'Tall, with a tattoo on the left arm.'),
(16, '4120512345678', 'Noman Ali', 'Islamabad', 'Slim, with a scar on the forehead.'),
(17, '4210112345678', 'Fatima Khan', 'Karachi', 'Short, with glasses, wearing a blue shirt.'),
(18, '4320312345678', 'Naveed Ali', 'Islamabad', 'Short, with a limp in the right leg.'),
(19, '4420112345678', 'Bilal Ahmed', 'Lahore', 'Slim, wearing a baseball cap.'),
(20, '4420312345678', 'Saad Ahmed', 'Faisalabad', 'Slim, with a tattoo on the right arm.'),
(21, '4520412345678', 'Ahmed Khan', 'Lahore', 'Slim, wearing a blue jacket.'),
(22, '4720412345678', 'Zoya Akhtar', 'Faisalabad', 'Short, with long hair and a pink bag.'),
(23, '4820112345678', 'Saima Riaz', 'Karachi', 'Long hair, carrying a laptop bag.'),
(24, '4820212345678', 'Hamza Ali', 'Lahore', 'Muscular build, with a beard.'),
(25, '4920112345678', 'Sara Ahmed', 'Rawalpindi', 'Slim, wearing a red scarf.'),
(26, '5120312345678', 'Amir Shah', 'Lahore', 'Muscular build, wearing a black hat.'),
(27, '5420112345678', 'Ahmed Hassan', 'Islamabad', 'Medium build, clean-shaven, wearing a green cap.'),
(28, '5420212345678', 'Amina Hassan', 'Karachi', 'Short, with a mole on the chin.'),
(29, '5520112345678', 'Ali Raza', 'Faisalabad', 'Muscular build, carrying a backpack.'),
(31, '3777538100980', 'AbuBakar Chaudhary', 'Islamabad', 'Tall guy '),
(33, '3951872454910', 'Zayn ul Abideen', 'unknown', '4ft guy studying in NUST SMME. He has 3.2 CGPA. He has lost money in CryptoCurrency.'),
(35, '3588370599400', 'M Haziq', 'unknown', 'Healthy guy in his twenties.'),
(36, '3385145857357', 'Muhammad Muqtasid', 'unknown', 'he was wearing a black cap and had curly hair'),
(37, '3367758494212', 'M Haziq', 'unknown', 'unkown');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `uid` int(11) NOT NULL,
  `victimid` char(13) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`uid`, `victimid`, `name`, `contactno`) VALUES
(1, '3120112345678', 'Hassan Khan', '03881234567'),
(2, '3220112345678', 'Zainab Hassan', '03771234567'),
(3, '3320112345678', 'Amina Khan', '03451234567'),
(4, '3520112345678', 'Ahmed Khan', '03001234567'),
(5, '3520212345678', 'Sana Shah', '03551234567'),
(6, '3520457889124', 'Luqman Khalid', '3215123871'),
(7, '3523457889124', 'Luqman', '3542871453'),
(8, '3620112345678', 'Kiran Ali', '03121234567'),
(9, '4020112345678', 'Bilal Akram', '03661234567'),
(10, '4210112345678', 'Ayesha Ali', '03111234567'),
(11, '4420112345678', 'Hamza Malik', '03011234567'),
(12, '4820112345678', 'Amna Asif', '03991234567'),
(13, '4820212345678', 'Saima Iqbal', '03231234567'),
(14, '4920112345678', 'Fatima Butt', '03331234567'),
(15, '5420112345678', 'Muhammad Yousaf', '03221234567'),
(16, '5420212345678', 'Farhan Ahmed', '03341234567'),
(17, '5520112345678', 'Ali Raza', '03441234567'),
(20, '3521478932105', 'M Ayyan Shafique', '03285823874'),
(21, '4321987657432', 'Muhammad Haseeb', '03115125321'),
(22, '3521478932121', 'Muhammad Moiz', '03215123871');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casee`
--
ALTER TABLE `casee`
  ADD PRIMARY KEY (`casee_id`),
  ADD KEY `victim_id_fk` (`victimid`),
  ADD KEY `station_id` (`station_id`);

--
-- Indexes for table `commisionedofficer`
--
ALTER TABLE `commisionedofficer`
  ADD PRIMARY KEY (`commofficerid`),
  ADD KEY `district` (`posting`) USING BTREE;

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`trial_id`),
  ADD UNIQUE KEY `case_uniq` (`casee_id`),
  ADD KEY `casee_id_fk` (`casee_id`);

--
-- Indexes for table `culprit`
--
ALTER TABLE `culprit`
  ADD PRIMARY KEY (`culprit_id`,`trial_id`) USING BTREE,
  ADD KEY `jail_id` (`jail_id`),
  ADD KEY `trial_id` (`trial_id`);

--
-- Indexes for table `jail`
--
ALTER TABLE `jail`
  ADD PRIMARY KEY (`jail_id`),
  ADD KEY `jailer_id` (`jailer_id`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`judge_id`);

--
-- Indexes for table `noncommissionedofficer`
--
ALTER TABLE `noncommissionedofficer`
  ADD PRIMARY KEY (`noncommofficerid`),
  ADD KEY `commoffid_fk` (`commoffid`),
  ADD KEY `stationid` (`station_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_id`),
  ADD KEY `district_fk` (`district`);

--
-- Indexes for table `suspect`
--
ALTER TABLE `suspect`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `suspect_id` (`suspect_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `victimid` (`victimid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casee`
--
ALTER TABLE `casee`
  MODIFY `casee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `commisionedofficer`
--
ALTER TABLE `commisionedofficer`
  MODIFY `commofficerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `trial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `jail`
--
ALTER TABLE `jail`
  MODIFY `jail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
  MODIFY `judge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `suspect`
--
ALTER TABLE `suspect`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casee`
--
ALTER TABLE `casee`
  ADD CONSTRAINT `casee_ibfk_8` FOREIGN KEY (`station_id`) REFERENCES `station` (`station_id`);

--
-- Constraints for table `court`
--
ALTER TABLE `court`
  ADD CONSTRAINT `court_ibfk_1` FOREIGN KEY (`casee_id`) REFERENCES `casee` (`casee_id`);

--
-- Constraints for table `culprit`
--
ALTER TABLE `culprit`
  ADD CONSTRAINT `culprit_ibfk_1` FOREIGN KEY (`jail_id`) REFERENCES `jail` (`jail_id`),
  ADD CONSTRAINT `trial_fk_1` FOREIGN KEY (`trial_id`) REFERENCES `court` (`trial_id`);

--
-- Constraints for table `jail`
--
ALTER TABLE `jail`
  ADD CONSTRAINT `jail_ibfk_1` FOREIGN KEY (`jailer_id`) REFERENCES `commisionedofficer` (`commofficerid`);

--
-- Constraints for table `noncommissionedofficer`
--
ALTER TABLE `noncommissionedofficer`
  ADD CONSTRAINT `nco_fk2` FOREIGN KEY (`station_id`) REFERENCES `station` (`station_id`),
  ADD CONSTRAINT `nco_ibfk_1` FOREIGN KEY (`commoffid`) REFERENCES `commisionedofficer` (`commofficerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

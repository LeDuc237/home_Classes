-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 25 mars 2024 à 19:59
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `homeclasses_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'DUCHEL DECARTE', 'Duchel', 696400169, 'alphablondel23@icloud', '1234', '2023-10-11 04:36:52');

-- --------------------------------------------------------

--
-- Structure de la table `tblclass`
--

DROP TABLE IF EXISTS `tblclass`;
CREATE TABLE IF NOT EXISTS `tblclass` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(50) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `Exam` int DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `ClassName`, `Section`, `Exam`, `CreationDate`) VALUES
(1, 'Sil', '', 0, '2024-10-13 10:42:14'),
(2, 'CP', '', 0, '2024-10-13 10:42:35'),
(3, 'CE 1', '', 0, '2024-10-13 10:42:41'),
(4, 'CE 2', '', 0, '2024-10-13 10:42:47'),
(5, 'CM 1', '', 0, '2024-10-13 10:42:52'),
(6, 'CM 2', '', 1, '2024-10-13 10:42:57'),
(7, '6eme', '', 0, '2024-10-13 10:43:04'),
(8, '5eme', '', 0, '2024-10-13 10:43:10'),
(9, '4eme', '', 0, '2024-10-13 10:43:15'),
(10, '3eme', '', 1, '2024-10-13 10:42:57'),
(11, '2nd', 'D', 0, '2024-10-13 10:43:04'),
(12, '1ere', 'A', 1, '2024-10-13 10:43:10'),
(13, 'Terminal', 'C', 1, '2024-10-13 10:43:15'),
(14, 'Class 1', 'C', 0, '2024-10-13 10:42:57'),
(15, 'Class 2', 'D', 0, '2024-10-13 10:43:04'),
(16, 'Class 3', 'A', 0, '2024-10-13 10:43:10'),
(17, 'Class 4', 'C', 0, '2024-10-13 10:43:15'),
(18, 'Class 5', 'C', 0, '2024-10-13 10:42:57'),
(19, 'Class 6', 'D', 1, '2024-10-13 10:43:04'),
(20, 'Form 1', 'A', 0, '2024-10-13 10:43:10'),
(21, 'From 2', 'C', 0, '2024-10-13 10:43:15'),
(22, 'Form 3', 'A', 0, '2024-10-13 10:43:10'),
(23, 'From 4', 'C', 0, '2024-10-13 10:43:15'),
(24, 'Form 5', 'Science', 1, '2024-10-13 10:43:10'),
(25, 'Form 5', 'Art', 1, '2024-10-13 10:43:10'),
(26, 'Lower sixth', 'Science', 0, '2024-10-13 10:43:10'),
(27, 'Lower sixth', 'Art', 0, '2024-10-13 10:43:10'),
(28, 'Upper sixth', 'Science', 1, '2024-10-13 10:43:15'),
(29, 'Upper sixth', 'Art', 1, '2024-10-13 10:43:15');

-- --------------------------------------------------------

--
-- Structure de la table `tblnotice`
--

DROP TABLE IF EXISTS `tblnotice`;
CREATE TABLE IF NOT EXISTS `tblnotice` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NoticeTitle` mediumtext,
  `ClassId` int DEFAULT NULL,
  `NoticeMsg` mediumtext,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `NoticeTitle`, `ClassId`, `NoticeMsg`, `CreationDate`) VALUES
(2, 'Improved on Work', 1, 'Very soon the exam will start so increase the speed with your student', '2024-10-19 06:35:58');

-- --------------------------------------------------------

--
-- Structure de la table `tblpage`
--

DROP TABLE IF EXISTS `tblpage`;
CREATE TABLE IF NOT EXISTS `tblpage` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext,
  `PageDescription` mediumtext,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<div style=\"text-align: start;\">At LeadEx Plus, we are dedicated to transforming the landscape of home-based education by offering innovative solutions tailored to the unique needs of students, parents, and educators. As a leading provider of educational services, we strive to empower individuals with the tools and resources needed to excel in their academic journeys.<br></div>', NULL, NULL, NULL),
(2, 'contactus', 'Contact Us', 'Cameroon Younde:Etoug-Ebe', 'alphablondle23@icloud.com', 696400169, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tblpublicnotice`
--

DROP TABLE IF EXISTS `tblpublicnotice`;
CREATE TABLE IF NOT EXISTS `tblpublicnotice` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NoticeTitle` varchar(200) DEFAULT NULL,
  `NoticeMessage` mediumtext,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `NoticeMessage`, `CreationDate`) VALUES
(1, 'Your Home Teachers are already ready', 'Consult a Home  teacher.', '2024-10-20 09:11:57'),
(2, 'Leadex Plus is every where', 'Now even for the holydays you can have a home teacher', '2024-02-02 19:04:10');

-- --------------------------------------------------------

--
-- Structure de la table `tblquery`
--

DROP TABLE IF EXISTS `tblquery`;
CREATE TABLE IF NOT EXISTS `tblquery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `teacherId` int DEFAULT NULL,
  `fName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` bigint DEFAULT NULL,
  `Query` mediumtext,
  `queryDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `teacherNote` mediumtext,
  PRIMARY KEY (`id`),
  KEY `tid` (`teacherId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tblquery`
--

INSERT INTO `tblquery` (`id`, `teacherId`, `fName`, `emailId`, `mobileNumber`, `Query`, `queryDate`, `teacherNote`) VALUES
(2, 1, 'Kum mother', 'Kum43@gmail.com', 657843753, 'hello i need a home teacher', '2022-03-12 10:03:49', 'yes'),
(3, 2, 'Njomou', 'Njomou@gmail.com', 69612344, 'Can you teach at simbock', '2022-03-14 17:03:03', 'ok'),
(4, 1, 'Madame Ovona Christelle', 'DuchelDecarte@gmail.com', 696400169, 'a home teaacher', '2024-03-24 13:00:37', 'ok madame');

-- --------------------------------------------------------

--
-- Structure de la table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `StudentTeacher` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext,
  `MotherName` mediumtext,
  `ContactNumber` bigint DEFAULT NULL,
  `AltenateNumber` bigint DEFAULT NULL,
  `Address` mediumtext,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `DateOfPayement` int DEFAULT NULL,
  `NumberOfDay` varchar(200) DEFAULT NULL,
  `AmountToPay` float NOT NULL,
  `DateofAdmission` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ;

--
-- Déchargement des données de la table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `StudentClass`, `StudentTeacher`, `Gender`, `Age`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `StartDate`, `EndDate`, `DateOfPayement`, `NumberOfDay`, `AmountToPay`, `DateofAdmission`) VALUES
(1, 'Kum corneille', 'Kum@gmail.com', '24', '1', 'Male', 15, 'Duch', 'Kum dad', 'Kum mom', 656432314, 656465465, 'Superrete', 'Kum', '1234', '2023-09-12', NULL, 10, NULL, 0, '2023-09-11 14:09:04'),
(11, 'francell', 'aelan@gmail.com', '13', '1', 'Female', 19, 'ke', 'Duchel', 'ODile', 696400169, 679879879, 'centre, 23,frs', 'DAS', '81dc9bdb52d04dc20036dbd8313ed055', '2024-03-24', '0000-00-00', 1, '2 times (2hours)', 0, '2024-03-24 08:41:00'),
(12, 'francel', 'haelan@gmail.com', '13', '1', 'Female', 19, 'kem', 'Duchel', 'ODile', 696400160, 679879879, 'centre, 23,frs', 'DA', '81dc9bdb52d04dc20036dbd8313ed055', '2024-03-24', '0000-00-00', 1, '2 times (2hours)', 23345, '2024-03-24 08:45:00'),
(14, 'france', 'haelan@gmail.com', '18', '2', 'Female', 5, 'keme', 'Duchel', 'ODile', 696400169, 679879879, 'Mendong', 'DAZ', '81dc9bdb52d04dc20036dbd8313ed055', '2024-03-25', '0000-00-00', 1, '2 times (2hours)', 122345, '2024-03-30 19:33:00');

-- --------------------------------------------------------

--
-- Structure de la table `tblteacher`
--

DROP TABLE IF EXISTS `tblteacher`;
CREATE TABLE IF NOT EXISTS `tblteacher` (
  `ID` int NOT NULL  AUTO_INCREMENT,
  `Name` varchar(120) DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint DEFAULT NULL,
  `StudentID` int DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Qualifications` varchar(200) DEFAULT NULL,
  `TeachAddress` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `TeacherSub` varchar(120) DEFAULT NULL,
  `description` mediumtext,
  `teachingExp` varchar(10) DEFAULT NULL,
  `JoiningDate` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isPublic` int DEFAULT NULL,
  `ContactUs` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `subname` (`TeacherSub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `Name`, `Picture`, `Gender`, `Email`, `MobileNumber`, `StudentID`, `password`, `Qualifications`, `TeachAddress`, `TeacherSub`, `description`, `teachingExp`, `JoiningDate`, `RegDate`, `isPublic`, `ContactUs`) VALUES
(1, 'Ateuf ngeufo', '171bb7da1ad6f5b744af8e1693225e661647076737.png', 'Male', 'DuchelDecarte@gmail.com', 696400169, 1, '12345', 'Can teach all frangophone classes', 'Etoug-Ebe', 'Chemistry', 'NA', '4', '2022-01-01', '2022-03-05 12:41:37', 1, '+237651203488'),
(2, 'sambe morgan', 'ebcd036a0db50db993ae98ce380f64191647072141.png', 'Male', 'sambe12@yourdomain.com', 678564123, 2, '123455', 'Can teach all anglophone classes', 'Mendong', 'Science', 'NA', '4', '2022-01-01', '2022-03-12 08:02:21', 1, '+237651203488');
COMMIT;


ALTER TABLE `tblstudent`
ADD CONSTRAINT check_int_range CHECK(`DateOfPayement` BETWEEN 1 AND 31);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

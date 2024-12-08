-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 11:45 PM
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
-- Database: `asp`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(255) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Name`, `Description`, `Image`, `Rating`) VALUES
(NULL, 'Eklera', 'Brumi, i cili është i njëjtë me atë që përdoret për profiterolin.Pasi të ftohet, pasta mbushet me krem pastiçerie Mbushjet e tjera përfshijnë kremin me aromë fisteku, mbushje me shije frutash.', 'eklera.jpg', 0),
(NULL, 'Trileqe', 'Trileqe 1po torta me tre lloje të qumështit  është një tortë sfungjerore një tortë me gjalpë — e ngjyer në tri lloje të qumështit: qumësht pluhur, qumësht i kondensuar, dhe ajkë.Dhe sipër me krem karameli', 'trileqe.jpg', 0),
(NULL, 'Dubai cheesecake ', 'Cheesecake është një ëmbëlsirë e bërë me një djathë të butë të freskët (zakonisht krem djathi ), vezë dhe sheqer. Korja  ose baza ëahttë bërë nga kadaifi i fërguar i përzier me krem fisteku.Në shtresën kryesore të djathit është shtuar qumësht i kodensuar ', 'pistachioch.jpg', 9),
(NULL, 'Obllandë', 'Obllandë është  bërë me vafera të mbushura me një kombinim të fiqit, arrave dhe biskotave me biskota të bluara.', 'obllande.jpg', 10),
(NULL, 'Dubai chocolate bar', 'Dubai chocolate bar ka pushtuar botën dhe nëse jeni me fat ta provoni, atëherë do ta kuptoni se sa i shijshëm është! Një mbushje me pastë kataifi të thekur krokante mbytet me krem ​​fëstëku dhe tahini dhe më pas vishet me çokollatë të pasur. ', 'dchb.jpg', 10),
(NULL, 'Krempite', 'Krempite i njohur gjithashtu si fetë vanilje.Zakonisht përgatitet me brumë petë. Mbushja është zakonisht krem ​​i pastër i trashë, më rrallë i kombinuar me krem ​​me beze (të bardhat e vezëve të rrahura dhe sheqer). ', 'krempite.jpg', 7),
(NULL, 'Pistachio cheesecake', 'Cheesecake është një ëmbëlsirë e bërë me një djathë të butë të freskët (zakonisht krem djathi ), vezë dhe sheqer. Korja ose baza ëahtë bërë nga biskota të grimcuara.Në shtresën kryesore të djathit është shtuar  edhe krem i fistekut.', 'pchp.jpg', 9),
(NULL, 'Dubai chocolate në gotë ', 'Dubai chocolate në gotë bëhet korja me kadif i fërguar dhe krem fisteku dhe mbushja bëhet me krem djathi dhe siper me qokollatë e shkrirë. ', 'pchl.jpeg', 8),
(NULL, 'Tiramisu', 'Tiramisu  është një ëmbëlsirë italiane e bërë nga pishkota te zhytur në kafe, e shtresuar me një përzierje të rrahur vezësh, sheqer dhe maskarpone dhe e aromatizuar me kakao. ', 'tiramisu.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) DEFAULT NULL,
  `emri` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `username`, `email`, `password`, `is_admin`) VALUES
(NULL, '', 'olsi', 'olsi@gmail.com', '$2y$10$ytggX1cYbCL5Jq9BLtotye.zn7LlLqPAncZejwscInr/Eddv.fqBm', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

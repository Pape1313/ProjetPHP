-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-projetpoo1.alwaysdata.net
-- Generation Time: Jun 06, 2023 at 06:46 PM
-- Server version: 10.6.13-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetpoo1_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `date_de_naissance`, `mot_de_passe`) VALUES
(1, 'ndiaye', 'lamine', 'lamin@gmail.com', '2023-02-16', '12345'),
(2, 'mbaye', 'ndiaye', 'lamin@gmail.com', '2023-02-10', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(3, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(4, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(5, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(6, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(7, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(8, 'qbbbbbbbbbbb', 'bqqqqqqqqqq', 'lamin@gmail.coqqm', '2023-03-24', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `nom_chambre` varchar(100) NOT NULL,
  `numero_chambre` varchar(100) NOT NULL,
  `numero_batiment` varchar(100) NOT NULL,
  `date_expiration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`id`, `nom_chambre`, `numero_chambre`, `numero_batiment`, `date_expiration`) VALUES
(1, '', '2', '2', '2023-03-02T23:25'),
(2, '', '2', '2', '2023-03-02T23:25'),
(3, '', '2', '2', '2023-03-02T23:25'),
(4, '', '2', '1', '2023-02-03T23:29'),
(5, 'az', '2', '1', '2023-02-03T23:29'),
(6, 'medzo', '12', '2', '2023-03-16T22:30');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `Chambre` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `email`, `prenom`, `date_de_naissance`, `mot_de_passe`, `Chambre`) VALUES
(18, 'exerc', 'mbayend@gmail.com', 'nd', '2023-02-09', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58', 3),
(19, 'sidy', 'sidy@gmail.com', 'mbappe', '2023-02-08', '468457fdfad41dde7506f538cb7128b225d06da04e9255886eae9f559a64adb9', 5),
(20, 'mbaye', 'mbayefils2011@gmail.com', 'mjz', '2023-02-09', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58', 3),
(22, 'MOUH', 'lamin@qqgmail.com', 'medzo', '2023-03-25', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 4),
(23, 'Diouf', 'lamin@gmail.com', 'Mouhamed', '2023-06-15', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 5),
(24, 'CAMARA', 'camarapapesidy337@gmail.com', 'PAPE SIDY', '2023-06-05', '0607ae4ea35a10151f66b514f997ed855fd89179fe54b672043c01eb89323f8f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant2`
--

CREATE TABLE `etudiant2` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `Chambre` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `etudiant2`
--

INSERT INTO `etudiant2` (`id`, `nom`, `prenom`, `email`, `date_de_naissance`, `mot_de_passe`, `Chambre`) VALUES
(1, 'almamy', 'gomis', 'almamy@gmail.com', '2023-02-09', '6549540f1fc458ac5258045020d4407219f669ea9e88914e49e4c01a5a533e5d', 0),
(2, 'pathe', 'cisse', 'pathe@gmail.com', '2023-02-23', '6c340fecb98b0bbe4d5d146f5c30b4471ffc6ad22a7408f13abb410646e5e2f8', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant2`
--
ALTER TABLE `etudiant2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `etudiant2`
--
ALTER TABLE `etudiant2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

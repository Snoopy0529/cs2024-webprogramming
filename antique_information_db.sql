-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 11:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theantiques_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `antique_information_db`
--

CREATE TABLE `antique_information_db` (
  `itemId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date_procured` year(4) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antique_information_db`
--

INSERT INTO `antique_information_db` (`itemId`, `name`, `Type`, `age`, `date_procured`, `location`, `description`) VALUES
(3, 'Chippendale Chair', 'Chair', '18th century', '2005', 'London, United Kingdom', 'This Chippendale chair is a classic example of 18th-century English furniture, featuring intricate carving and a graceful silhouette. It was procured from an antique dealer in London and has been a cherished piece in a private collection for over a decade.'),
(4, 'Roll-Top Desk', 'Desk', 'Late 19th century', '2012', 'New York, United States of America', 'This roll-top desk is a beautiful representation of late 19th-century craftmanship, with its intricate roll-top mechanism and multiple drawers for storage. It was acquired from an estate sale in New York and has been meticulously maintained in a private study for several years.'),
(5, 'Louis XV Commode', 'Chest of Drawers', '18th century', '1998', 'Paris, France', 'This Louis XV commode exudes elegance with its ornate ormolu mounts and beautifully curved legs, showcasing the opulence of 18th-century French design. It was acquired from a reputable antique dealer in Paris and has been a focal point in a luxurious living space for over two decades.'),
(6, 'Ming Dynasty Ceramic Vase', 'Vase', '15th century', '1990', 'Beijing, China', 'This Ming Dynasty ceramic vase is a rare and exquisite piece, showcasing intricate hand-painted motifs and the timeless craftsmanship of the period. It was procured from an antique shop in Beijing and has been displayed in a private collection for over three decades.'),
(7, 'Victorian Silver Tea Set', 'Tea Set', '19th century', '2007', 'London, United Kingdom', 'This Victorian silver tea set embodies the elegance and opulence of the era, featuring intricate engravings and a timeless design. It was acquired from a reputable auction house in London and has been a cherished heirloom in a family collection for over a decade.'),
(8, 'Ancient Roman Coin', 'Coin', '2nd century AD', '1985', 'Rome, Italy', 'This ancient Roman coin is a remarkable artifact from the 2nd century AD, depicting an emperor and bearing witness to the ancient world. It was acquired from a reputable antiquities dealer in Rome and has been a prized addition to a numismatic collection for over three decades.'),
(9, 'Victorian Mourning Hair Art', 'Decorative Art', '19th century', '2010', 'Paris, France', 'This Victorian mourning hair art is a unique and macabre curiosity, crafted from intricately woven human hair to commemorate a loved one. It was procured from a boutique antique shop in Paris and has been a conversation piece in a private collection for over a decade.'),
(10, 'Taxidermy Victorian Dome', 'Taxidermy Display', '19th century', '2015', 'London, United Kingdom', 'This taxidermy Victorian dome features preserved exotic birds and small mammals, capturing the Victorian fascination with natural history and exotic specimens. It was acquired from a renowned taxidermy collector in London and has been a striking display piece in a private study for several years.'),
(11, 'Medical Oddities Collection', 'Medical Artifacts', '19th and 20th century', '2003', 'Berlin, Germany', 'This collection of medical oddities includes vintage surgical tools, anatomical models, and other curiosities from the 19th and early 20th centuries, offering a glimpse into the history of medicine. It was acquired from a specialized antique medical artifacts dealer in Berlin and has been a fascinating educational display in a private collection for nearly two decades.'),
(12, 'Art Deco Brass Table Lamp', 'Lighting Decoration', '1930s', '2018', 'New York, United States of America', 'This Art Deco brass table lamp exudes the elegance and geometric motifs characteristic of the 1930s design, featuring a sleek silhouette and intricate detailing. It was procured from an antique dealer in New York and has been a stylish addition to a vintage-inspired living space for several years.'),
(13, 'Mid-Century Modern Ceramic Vase', 'Vase Decoration', '1950s', '2020', 'Los Angeles, United States of America', 'This Mid-Century Modern ceramic vase showcases the clean lines and organic forms typical of the 1950s design, with a vibrant glaze and a timeless aesthetic. It was acquired from a vintage shop in Los Angeles and has been a striking centerpiece in a retro-inspired home for over a year.'),
(14, 'Retro Wall Clock', 'Timepiece Decoration', '1960s', '2015', 'London, United Kingdom', 'This retro wall clock embodies the bold colors and playful design elements of the 1960s era, adding a touch of nostalgia and whimsy to any interior space. It was acquired from a flea market in London and has been a functional and decorative accent in a vintage-themed kitchen for several years.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antique_information_db`
--
ALTER TABLE `antique_information_db`
  ADD PRIMARY KEY (`itemId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antique_information_db`
--
ALTER TABLE `antique_information_db`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

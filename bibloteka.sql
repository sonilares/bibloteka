-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2021 at 08:41 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibloteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `emaili` varchar(80) NOT NULL,
  `mesazhi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `emri`, `emaili`, `mesazhi`) VALUES
(7, 'endrit pelaj', 'endrit@gmail.com', 'Shume faleminderit per sugjerimin e ketyre librave te mire!'),
(24, 'user', 'user@gmail.com', 'bukur!');

-- --------------------------------------------------------

--
-- Table structure for table `librat`
--

CREATE TABLE `librat` (
  `id` int(11) NOT NULL,
  `titulli` varchar(100) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `pershkrimi` text NOT NULL,
  `autori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librat`
--

INSERT INTO `librat` (`id`, `titulli`, `foto`, `pershkrimi`, `autori`) VALUES
(12, 'Anna Karenina', 'ana.jpg', 'Any fan of stories that involve juicy subjects like adultery, gambling, marriage plots, and, well, Russian feudalism, would instantly place Anna Karenina at the peak of their â€œgreatest novelsâ€ list. And thatâ€™s exactly the ranking that publications like Time magazine have given the novel since it was published in its entirety in 1878. Written by Russian novelist Leo Tolstoy, the eight-part towering work of fiction tells the story of two major characters: a tragic, disenchanted housewife, the titular Anna, who runs off with her young lover, and a lovestruck landowner named Konstantin Levin, who struggles in faith and philosophy. Tolstoy molds together thoughtful discussions on love, pain, and family in Russian society with a sizable cast of characters regarded for their realistic humanity. The novel was especially revolutionary in its treatment of women, depicting prejudices and social hardships of the time with vivid emotion.', 'Leo Tolstoy'),
(13, 'Harry Potter', 'hp.jpg', 'The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry.', 'JK Rowling'),
(15, 'Life of Pi', 'pi.jpg', 'Life of Pi is a Canadian philosophical novel by Yann Martel published in 2001. The protagonist is Piscine Molitor \"Pi\" Patel, an Indian Tamil boy from Pondicherry who explores issues of spirituality and metaphysics from an early age. He survives 227 days after a shipwreck while stranded on a lifeboat in the Pacific Ocean with a Bengal tiger which raises questions about the nature of reality and how it is perceived and told. He is part of a Hindi speaking family', 'Yann Martel'),
(16, 'Dracula', 'drakula.jpg', 'Bram Stoker\'s Dracula/Film synopsis\r\nCount Dracula, a 15th-century prince, is condemned to live off the blood of the living for eternity. Young lawyer Jonathan Harker is sent to Dracula\'s castle to finalise a land deal, but when the Count sees a photo of Harker\'s fiancée, Mina, the spitting image of his dead wife, he imprisons him and sets off for London to track her down.', 'Bram Stocker'),
(17, 'I Am Legend', 'legend.jpeg', 'I Am Legend follows the only human left on earth: Robert Neville. The aftereffects of a nuclear war mutated the human gene and made them what Robert calls â€œvampiresâ€, dead creatures that inhabit the human body, attack at night and are allergic to garlic.', 'Richard Matheson'),
(18, 'The Wonderful Wizard of OZ', 'oz.jpeg', 'When a tornado rips through Kansas, Dorothy (Judy Garland) and her dog, Toto, are whisked away in their house to the magical land of Oz. They follow the Yellow Brick Road toward the Emerald City to meet the Wizard, and en route they meet a Scarecrow (Ray Bolger) that needs a brain, a Tin Man (Jack Haley) missing a heart, and a Cowardly Lion (Bert Lahr) who wants courage. The wizard asks the group to bring him the broom of the Wicked Witch of the West (Margaret Hamilton) to earn his help.', 'Frank Baum'),
(22, 'Palomino', 'palomino.jpg', 'A woman faces romance and intrigue when she returns to a ranch after a riding accident that left her semi-paralysed.\r\n', 'Danielle Steel'),
(24, 'Song of Achilies', 'soa.jpg', 'The story is told from the perspective of Patroclus who, exiled by his father to live in the court of Peleus, soon falls in love with his host\'s son, the superhuman Achilles: from childhood, his demi-god status means he is swifter, more beautiful and more skilled than all his peers.', 'Madeline Miller'),
(27, 'Meshari', 'meshari.jpg', 'Meshari (Albanian for \"Missal\") is the oldest published book in Albanian. The book was written by Gjon Buzuku, a Catholic cleric in 1555. The book contains 188 pages and is written in two columns. Meshari is the translation of the main parts of the Catholic Liturgy into Albanian.', 'Gjon Buzuku'),
(42, 'Clean Code', 'clean.jpg', 'A clean code should be elegant, efficient, readable, simple, without duplications, and well-written. You should add value to the business with your code. Clean code offers quality and understanding when we open a class. It is necessary that your code is clean and readable for anyone to find and easily understand.', 'Robert Cecil Martin');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `idPerdoruesit` int(11) NOT NULL,
  `perdoruesiPerdoruesit` varchar(255) NOT NULL,
  `emailiPerdoruesit` varchar(255) NOT NULL,
  `passiPerdoruesit` varchar(255) NOT NULL,
  `roli` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`idPerdoruesit`, `perdoruesiPerdoruesit`, `emailiPerdoruesit`, `passiPerdoruesit`, `roli`) VALUES
(1, 'sonila', 'sonila@gmail.com', '$2y$10$ubPf3TL1fUXVax05v/blK.O85dyOXLPPk8gHaZYFkX/JL0AvzFsx2', 'admin'),
(2, 'endrit', 'endrit@gmail.com', '$2y$10$4KuUZ4WF/jXUiaP6bERMo.SQrybN/SRCnyUAWi50iQE68d3vYTEZu', 'admin'),
(8, 'user', 'user@gmail.com', '$2y$10$BFWAVdlepWiIScEc/PsbQeOnv0Ed3yvRtXq8MwV4cYXqlXHj2kAAu', 'user'),
--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librat`
--
ALTER TABLE `librat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`idPerdoruesit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `librat`
--
ALTER TABLE `librat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `idPerdoruesit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 11:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre_article` varchar(50) NOT NULL,
  `membre_article` varchar(50) NOT NULL,
  `corps_article` text NOT NULL,
  `date_article` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `titre_article`, `membre_article`, `corps_article`, `date_article`) VALUES
(1, 'hiking', 'ayoub', '<p><strong>Hiking</strong>&nbsp;is a long, vigorous walk, usually on&nbsp;<a href=\"https://en.wikipedia.org/wiki/Trails\">trails</a>&nbsp;or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Footpaths\">footpaths</a>&nbsp;in the countryside. Walking for pleasure developed in Europe during the eighteenth century. Religious&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pilgrimage\">pilgrimages</a>&nbsp;have existed much longer but they involve walking long distances for a spiritual purpose associated with specific religions.</p>\r\n\r\n<p>&quot;Hiking&quot; is the preferred term in Canada and the United States; the term &quot;<a href=\"https://en.wikipedia.org/wiki/Walking\">walking</a>&quot; is used in these regions for shorter, particularly&nbsp;<a href=\"https://en.wikipedia.org/wiki/Urban_area\">urban</a>&nbsp;walks. In the United Kingdom and the Republic of Ireland, the word &quot;walking&quot; describes all forms of walking, whether it is a walk in the park or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Backpacking_(wilderness)\">backpacking</a>&nbsp;in the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Alps\">Alps</a>. The word hiking is also often used in the UK, along with&nbsp;<strong>rambling</strong>&nbsp;(a slightly old-fashioned term),&nbsp;<strong><a href=\"https://en.wikipedia.org/wiki/Hillwalking\">hillwalking</a></strong>, and&nbsp;<strong>fell walking</strong>&nbsp;(a term mostly used for hillwalking in northern England). The term&nbsp;<strong>bushwalking</strong>&nbsp;is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927.<a href=\"https://en.wikipedia.org/wiki/Hiking#cite_note-1\">[1]</a>&nbsp;In New Zealand a long, vigorous walk or hike is called&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tramping_in_New_Zealand\"><strong>tramping</strong></a>.<a href=\"https://en.wikipedia.org/wiki/Hiking#cite_note-2\">[2]</a>&nbsp;It is a popular activity with numerous&nbsp;<a href=\"https://en.wikipedia.org/wiki/Category:Hiking_organizations\">hiking organizations</a>&nbsp;worldwide, and studies suggest that all forms of walking have health benefits.</p>\r\n', '2020-12-30 12:11:52'),
(9, 'camping', 'mariem', '<p><strong>Camping</strong>&nbsp;is a&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Leisure\">leisure</a>&nbsp;activity, usually during summer when school children are on holiday, where people leave their homes and spend one or more nights outdoors. Usually they seek nature, adventure, or a different&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Environment\">environment</a>. They may sleep in a&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Campervan\">campervan</a>&nbsp;or trailer, a&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Tent\">tent</a>, or in the open air in good&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Weather\">weather</a>. Winter camping is less common but in some parts of the world, tents are people&#39;s homes year around. Rich people began camping for fun in the early 20th century. When more people could afford it, many more did it.</p>\r\n\r\n<p>When camping, people usually prepare food to eat that is easy to make. If they were&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Hunting\">hunting</a>&nbsp;or&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Fishing\">fishing</a>, they may cook the animal or fish they caught over a campfire.</p>\r\n\r\n<p>Dangers can arise, such as wild animals or illness from drinking unclean water.</p>\r\n', '2020-12-30 12:30:42'),
(10, 'hiking', 'ayoub', '<h2>Informations sur le produit</h2>\r\n\r\n<p>Taille:<strong>64 Go</strong>&nbsp;&nbsp;|&nbsp; Couleur:<strong>Gris sid&eacute;ral</strong></p>\r\n\r\n<h1>Descriptif technique</h1>\r\n', '2020-12-31 16:17:52'),
(11, 'holiday', 'radi', 'A holiday is a day set aside by custom or by law on which normal activities, especially business or work including school, are suspended or reduced. Generally, holidays are intended to allow individuals to celebrate or commemorate an event or tradition of cultural or religious significance. Holidays may be designated by governments, religious institutions, or other groups or organizations. The degree to which normal activities are reduced by a holiday may depend on local laws, customs, the type of job held or personal choices.\r\n\r\n', '2021-01-01 15:03:06'),
(12, 'education', 'hamza', '<p>W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our&nbsp;<a href=\"https://www.w3schools.com/about/about_copyright.asp\">terms of use</a>,&nbsp;<a href=\"https://www.w3schools.com/about/about_privacy.asp\">cookie and privacy policy</a>.<br />\r\n&nbsp;</p>\r\n', '2021-01-01 16:28:10'),
(13, 'study ', 'abbas', '<p>SELECT&nbsp;Customers.CustomerName, Orders.OrderID<br />\r\nFROM&nbsp;Customers<br />\r\nLEFT&nbsp;JOIN&nbsp;Orders&nbsp;ON&nbsp;Customers.CustomerID = Orders.CustomerID<br />\r\nORDER&nbsp;BY&nbsp;Customers.CustomerName;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-01-02 16:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_comm` int(11) NOT NULL,
  `membre_comm` varchar(100) NOT NULL,
  `corps_comm` text NOT NULL,
  `date_comm` datetime NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id_comm`, `membre_comm`, `corps_comm`, `date_comm`, `id_article`) VALUES
(2, 'DALY', 'IT IS GOOD', '2021-01-01 17:04:10', 1),
(3, 'oussema', 'not bad', '2021-01-20 03:17:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `cin` bigint(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`cin`, `nom`, `prenom`, `password`) VALUES
(14243428, 'ayoub', 'ghamougui', '827ccb0eea8a706c4c34a16891f84e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_comm`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`cin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `cin` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14243429;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

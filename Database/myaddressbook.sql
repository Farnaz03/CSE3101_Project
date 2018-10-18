-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 02:02 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myaddressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`contactID` int(100) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlenameone` varchar(30) NOT NULL,
  `middlenametwo` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `homenumber` int(15) NOT NULL,
  `worknumber` int(15) NOT NULL,
  `mobilenumber` int(15) NOT NULL,
  `addresslineone` varchar(100) NOT NULL,
  `addresslinetwo` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `memo` varchar(450) NOT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactID`, `firstname`, `middlenameone`, `middlenametwo`, `lastname`, `nickname`, `homenumber`, `worknumber`, `mobilenumber`, `addresslineone`, `addresslinetwo`, `email`, `dob`, `memo`, `userID`) VALUES
(1, 'Egbert', 'Carl', '', 'Adams', 'Eggsy', 2235964, 2256439, 6253924, 'TT Bent Street', 'Wortmanville', 'egbert_adams@yahoo.com', '1998-10-16', '', 2),
(2, 'Debra', 'Olga', 'Sandy', 'Adolphus', 'Debbie', 4445224, 4444522, 6442425, '337 Block 22', 'Wismar', 'debra_adolphus@gmail.com', '1969-04-08', '', 3),
(3, 'Charles', 'Anthony', 'David', 'Adonis', '', 3334828, 3332488, 6244882, '17 Lad Lane', 'New Amsterdam', 'charles_adonis@yahoo.com', '1984-06-22', '', 2),
(4, 'Colleen', 'Fazia', 'Nia', 'Agard', 'Fazzy', 2181842, 2274218, 6617824, '1636', 'South Ruimveldt Park', 'colleen_agard@gmail.com', '1989-11-25', '', 3),
(5, 'Bibi', 'Nazmoon', 'Zabida', 'Bacchus', 'Aunty B', 2203249, 2259423, 6772439, '171 Seventh Street', 'Success', 'bibi_bacchus@yahoo.com', '1975-10-09', '', 2),
(6, 'Bernadette', 'Leoni', '', 'Barker', '', 2275823, 2252783, 6148532, '38 Da Silva Street', 'Newtown Kitty', 'bernadette_barker@gmail.com', '1981-02-19', '', 3),
(7, 'Nicholas', 'Andre', '', 'Blackman', 'Nick', 2235618, 2266581, 6183522, '47 Joseph Pollydore Street', 'Lodge', 'nicholas_blackman@yahoo.com', '1991-07-02', '', 2),
(8, 'Darshanand', 'Loknauth', 'Lakeram', 'Brijanand', 'Jotie', 3354158, 3335814, 6621485, '20 #78 Village', 'Corentyne', 'darsha_b@gmail.com', '1971-05-13', '', 3),
(9, 'Margaret', 'Debra', '', 'Changlee', 'Maggie', 2278797, 2277789, 6778279, '10 Norton Street', 'Lodge', 'maggie_changlee@yahoo.com', '1978-07-26', '', 2),
(10, 'Radica', '', '', 'Charran', 'Baby', 2652288, 2265828, 6228582, '12 Last Street', 'Herstelling', 'radica_charran@gmail.com', '1987-01-11', '', 3),
(11, 'Marlon', 'Jason', '', 'De Souza', '', 2181274, 2274811, 6182247, '1169 Pigeon Place', 'South Ruimveldt Park', 'marlon_desouza@yahoo.com', '1999-09-05', '', 2),
(12, 'Nandram', '', '', 'Deochand', '', 3287932, 0, 6798223, '577 Bath', 'West Coast Berbice', 'nand_deochand@gmail.com', '1972-07-28', '', 3),
(13, 'Ron', 'Michael', '', 'Devonish', 'Ronnie', 2264677, 2267647, 6247627, '211 Middle Road', 'La Penitance', 'ronnie_devonish@yahoo.com', '2000-08-13', '', 2),
(14, 'Susan', 'Nicola', '', 'Dorsett', '', 2258710, 2275801, 6875228, '333 Harpy Drive', 'North East La Penitance', 'susan_dorsett@gmail.com', '1992-03-04', '', 3),
(15, 'Keith', 'Joseph', '', 'Edwards', 'Eddie', 2231481, 2312814, 6284132, '67 William Street', 'Campbellvile', 'keith_edwards@yahoo.com', '1989-02-23', '', 2),
(16, 'Subrena', 'Panchwattie', '', 'Etwaru', '', 3336971, 0, 6393173, '45 Stanleytown', 'New Amsterdam', 'subrena_etwaru@gmail.com', '1959-06-03', '', 3),
(17, 'Compton', 'Henry', '', 'Ellis', '', 2225721, 2275221, 6152272, '79 Atlantic Ville', 'East Coast Demerara', 'compton_ellis@yahoo.com', '1981-08-30', '', 2),
(18, 'Stacy', 'Carol', 'Smith', 'Erskine', '', 2237238, 2278332, 6383728, '24 Pike Street', 'Kitty', 'carol_erskine@gmail.com', '1997-01-15', '', 3),
(19, 'Beverly', 'Ann', '', 'Ferguson', 'Annie', 2234252, 2253224, 6234522, '160 Thorne Street', 'Tucville', 'beverly_ferguson@yahoo.com', '1968-04-06', '', 2),
(20, 'Shameela', 'Synthia', '', 'Fernandes', '', 2160421, 0, 6214012, '148 Section C', 'Grove', 'synthia_fernandes@gmail.com', '2000-05-17', '', 3),
(21, 'Hugh', 'Christian', '', 'Fowler', 'Bigs', 2232251, 2253212, 6221523, '3405 Stevedore Housing Scheme', 'North Ruimveldt', 'hugh_fowler@yahoo.com', '1972-12-26', '', 2),
(22, 'Ophelia', '', '', 'Francis', '', 2276578, 2268757, 6572872, '257 Forshaw Street', 'Queenstown', 'ophelia_francis@gmail.com', '1974-06-23', '', 3),
(23, 'Carl', 'Llewelyn', '', 'Glasgow', '', 2285143, 2251834, 6215824, '72 Supply', 'Mahaica', 'carl_glasgow@yahoo.com', '1974-05-19', '', 2),
(24, 'Seepaul', '', '', 'Gopaul', '', 2563192, 0, 6253916, '214 Beezie', 'Enmore', 'seepaul_gopaul@gmail.com', '1987-07-18', '', 3),
(25, 'Joan', 'Minerva', '', 'Greene', 'Eddie', 2204641, 2261404, 626204124, '259 Atlantic Gardens', 'East Coast Demerara', 'joan_greene@yahoo.com', '1972-03-22', '', 2),
(26, 'Sheridan', 'Compton', '', 'Griffith', '', 2230276, 2272603, 6722203, '29 Norton Street', 'Lodge', 'compton_griffith@gmail.com', '2005-09-06', '', 3),
(27, 'Bibi', 'Zameena', '', 'Hack', '', 2652269, 0, 6256292, '60 A Little Diamond', 'East Bank Diamond', 'bibi_hack@yahoo.com', '2002-12-23', '', 2),
(28, 'Orlando', '', '', 'Haley', 'Lando', 2191782, 2271198, 6817291, '740 C Field', 'Sophia', 'orlando_haley@gmail.com', '2000-02-02', '', 3),
(29, 'Azeem', 'Khan', '', 'Hanif', '', 3392333, 3396548, 6894521, '9 Line Path', 'Skeldon', 'azeem_hanif@yahoo.com', '1980-08-21', '', 2),
(30, 'Keith', 'Oswald', '', 'Henry', '', 7744248, 7742844, 6892484, 'Riverstown', 'Essequibo', 'oswald_henry@gmail.com', '1983-05-16', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userID` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `user_type`) VALUES
(1, 'admin', '0954656babc828e90538effde271814a', 'admin'),
(2, 'user1', 'd63bc3b5d814f0644e4712173a0a9682', 'user'),
(3, 'user2', 'e7052a21b2db0f57879150ddbf32f791', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`contactID`), ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `contactID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

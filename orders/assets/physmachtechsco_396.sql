-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2017 at 01:07 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `physmachtechsco_396`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(11) NOT NULL,
  `catigory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `catigory_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `likes`, `created_at`) VALUES
(1, 1, 1, 'Good News', 'Good-News', 'Be advised that our website is now being fully updated. You can read articles, listen to our music and download, playing videos from our various artists who recorded through our Phystechs Studio. Be ready for this exciting epsode of life with Physmach Technologies', '4.jpg', 0, '2017-12-04 08:40:20'),
(2, 4, 1, 'Soyabeans', 'Soyabeans', 'I am a student at Chiwaridzo secondary school. I would like to report to the educate primary producers on the importance of value addition and beneficiation. I went to Chishapa village and l saw Mr Majiri the manager of the farm who grows soyabean. Then l started asking him some questions about soyabean and how did he grows soyabean in Chishapa village.\r\nAs young student l would like   to tell you that selling soyabean as a primary is not profitable .Mr Majiri I advice you  to produce cooking oil by grinding soyabean and selling it as a cooking oil to people. When you grind your soyabean you end up with a products such as cooking oil, candles, feeds for animals. Mr Majiri by producing soyabean into cooking oil and candles and stock feeds for animals you can make your company big by value addition.\r\nThen l ask about the advantage of value addition and beneficiation of growing soyabean in Chishapa village. He started telling  me about a new product will be  discovered and the  use of new technology will be promoted, earn foreign currency, improve the standard of living and reduces imports.\r\nMr Majiri told me more about the disadvantage of value addition and beneficiation of growing of soyabean. He started to list the disadvantages of growing soyabean land will be polluted and kills the primary product, consume energy for example electricity.\r\nHe started to explain about manufacturing process that increase commodities value such as cooking and drying.it increase the economic value of the commodity through a particular process and the new product will be different from the original raw materials.\r\nThen a process where by one is extracted from nature with the mineral ore being suitable  for further processing can also be referred  to as economic  development and co-operate society responsibility and it an asset explanation that  stay in the county will benefit the society.\r\n', 'noimage.jpg', 0, '2017-12-04 21:22:36'),
(4, 5, 1, 'IMPACT OF MULTINATIONAL COMPANIES ON LOCAL BUSINESS 2017', 'IMPACT-OF-MULTINATIONAL-COMPANIES-ON-LOCAL-BUSINESS-2017', 'Multinational brings unfair competition for example they sell a variety of goods at affordable prices other than local enterprises. Thus, decrease a chance of making profits to local enterprises.\r\nThey overtake employees of local enterprises for example the jobs created in the local enterprises are low skilled and there is low skilled employment. This is not important because multinationals can attract quality employees from local enterprises because they have enough money.\r\nMultinationals remit back their profits to parent for example Delta send profits to mother country. This is not important because the host country enjoys loses.\r\nMultinational brings uncertainty\r\nThere is exploitation of labour\r\nBusiness will be set apart such that no unity or togetherness for example multinationals sold goods at low prices more consumption results and local enterprises will lose its customers. This therefore results in hatred between two business\r\n', 'noimage.jpg', 0, '2017-12-05 12:32:33'),
(5, 6, 3, 'My Andawena', 'My-Andawena', 'Music yenyu inotapira guys', 'm.jpg', 0, '2017-12-05 12:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `b_catigory`
--

CREATE TABLE `b_catigory` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_catigory`
--

INSERT INTO `b_catigory` (`c_id`, `name`, `created_at`) VALUES
(1, 'business', '2017-12-04 08:22:47'),
(2, 'Technology', '2017-12-04 08:22:47'),
(3, 'Health', '2017-12-04 20:03:23'),
(4, 'Agriculture', '2017-12-04 20:05:31'),
(5, 'Education', '2017-12-05 05:37:27'),
(6, 'Entertainment', '2017-12-05 12:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `b_id` int(11) NOT NULL,
  `comment_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `name`, `comment`, `b_id`, `comment_at`) VALUES
(1, 'Innocent Tauzeni', 'Thank you braaa', 5, '2017-12-06 11:34:18'),
(2, 'Nomam', 'urisei sei sei guys', 5, '2017-12-06 11:53:02'),
(3, 'Jack wiliam', 'aakaa sshhs', 5, '2017-12-06 11:56:04'),
(4, 'Arthur Tauzeni', 'Trkuuya soon', 5, '2017-12-06 11:59:01'),
(5, 'Shelton', 'Hello man', 2, '2017-12-07 04:54:07'),
(6, 'Telthem Rudolph', 'hello  shelton watii', 2, '2017-12-07 04:55:21'),
(7, 'Tantie Gaza', 'Nice move guys we love you. But Mr Majiri told me more about the disadvantage of value addition and beneficiation of growing of soyabean. He started to list the disadvantages of growing soyabean land will be polluted and kills the primary product, consume energy for example electricity. He started to explain about manufacturing process that increase commodities value such as cooking and drying.it increase the economic value of the commodity through a particular process and the new product will be different from the original raw materials. Then a process where by one is extracted from nature with the mineral ore being suitable for further processing can also be referred to as economic development and co-operate society responsibility and it an asset explanation that stay in the county will benefit the society', 2, '2017-12-07 05:12:32'),
(8, 'Nomarn', 'Be advised that our website is now being fully updated. You can read articles, listen to our music and download, playing videos from our various artists who recorded through our Phystechs Studio. Be ready for this exciting epsode of life with Physmach Technologies', 1, '2017-12-07 05:20:44'),
(9, 'Jamu SAka', 'Multinational brings unfair competition for example they sell a variety of goods at affordable prices other than local enterprises. Thus, decrease a chance of making profits to local enterprises. They overtake employees of local enterprises for example the jobs created in the local enterprises are low skilled and there is low skilled employment. This is not important because multinationals can attract quality employees from local enterprises because they have enough money. Multinationals remit back their profits to parent for example Delta send profits to mother country. This is not important because the host country enjoys loses. Multinational brings uncertainty There is exploitation of labour Business will be set apart such that no unity or togetherness for example multinationals sold goods at low prices more consumption results and local enterprises will lose its customers. This therefore results in hatred between two business', 4, '2017-12-07 13:10:01'),
(10, 'Artt wena', 'Multinational brings unfair competition for example they sell a variety of goods at affordable prices other than local enterprises. Thus, decrease a chance of making profits to local enterprises. They overtake employees of local enterprises for example the jobs created in the local enterprises are low skilled and there is low skilled employment. This is not important because multinationals can attract quality employees from local enterprises because they have enough money. Multinationals remit back their profits to parent for example Delta send profits to mother country. This is not important because the host country enjoys loses. Multinational brings uncertainty There is exploitation of labour Business will be set apart such that no unity or togetherness for example multinationals sold goods at low prices more consumption results and local enterprises will lose its customers. This therefore results in hatred between two business', 4, '2017-12-07 13:10:23'),
(11, 'John Humbasha', 'Multinational brings unfair competition for example they sell a variety of goods at affordable prices other than local enterprises. Thus, decrease a chance of making profits to local enterprises. They overtake employees of local enterprises for example the jobs created in the local enterprises are low skilled and there is low skilled employment. This is not important because multinationals can attract quality employees from local enterprises because they have enough money. Multinationals remit back their profits to parent for example Delta send profits to mother country. This is not important because the host country enjoys loses. Multinational brings uncertainty There is exploitation of labour Business will be set apart such that no unity or togetherness for example multinationals sold goods at low prices more consumption results and local enterprises will lose its customers. This therefore results in hatred between two business', 4, '2017-12-07 13:10:54'),
(12, 'Farai Jamu', 'Sure makuseri', 5, '2017-12-07 14:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `download_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `downloaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `g_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `uploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `m_id` int(11) NOT NULL DEFAULT '0',
  `b_id` int(11) NOT NULL DEFAULT '0',
  `date_liked` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `joint` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `newsID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `heading` varchar(222) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phystechs_media`
--

CREATE TABLE `phystechs_media` (
  `m_id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `songtitle` varchar(255) NOT NULL,
  `album_title` varchar(255) NOT NULL,
  `song` text NOT NULL,
  `genre` varchar(50) NOT NULL,
  `v_id` int(11) NOT NULL,
  `download_id` int(11) NOT NULL,
  `uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phystechs_media`
--

INSERT INTO `phystechs_media` (`m_id`, `artist`, `slug`, `songtitle`, `album_title`, `song`, `genre`, `v_id`, `download_id`, `uploaded`) VALUES
(3, 'Jordan E', 'Unondipa-Rudo', 'Unondipa Rudo', 'Kushinga', 'undipaRudo.mp3', 'AFRO MUSIC', 0, 0, '2017-12-04 12:36:40'),
(4, 'Jordan E', 'Tapessana', 'Tapessana', 'Kushinga', 'tapesana.mp3', 'AFRO MUSIC', 0, 0, '2017-12-04 12:44:25'),
(5, 'Jordan E and Flexus', 'Selfish-Girlfriend', 'Selfish Girlfriend', 'Single Track', 'selfishGirl.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-07 13:14:47'),
(6, 'Jordan E', 'Kunyepa', 'Kunyepa', 'Kushinga', 'kunyepa.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-07 13:16:12'),
(7, 'Jordan E and Nikita', 'Ndinewe', 'Ndinewe', 'Kushinga', 'ndinewe.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-09 07:22:09'),
(9, 'Jordan E and Dropper', 'Baddest-Gal', 'Baddest Gal', 'Baddest Gal', 'BaddestGyal.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:16:20'),
(10, 'Travel Killer ', 'Big-Engine-Undercover-Riddim-Prod-by-Team-Rudeplay', 'Big Engine - [Undercover Riddim]- Prod by #Team Rudeplay', 'Big Engine', 'BigEngine.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:19:14'),
(11, 'Alfa Romz x Jordan.E  ', 'Buss-it-Anyweh-Dec-2017', 'Buss it Anyweh - Dec 2017', 'Buss it Anyweh - Dec 2017', 'BussitAnyweh.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:21:32'),
(12, 'Dizzy D ', 'Candy-Dreams-Produced-by-JordanEZimbabwe', 'Candy Dreams - Produced by Jordan.E.Zimbabwe', 'Candy Dreams - Produced by Jordan.E.Zimbabwe', 'CandyDreams.mp3', 'ZIM HIP HOP', 0, 0, '2017-12-20 20:23:25'),
(13, 'Jordan E', 'Come-so-far-Mystic-Cover-Phystechs-Media', ' Come so far (Mystic Cover) - Phystechs Media.', 'Kushinga', 'Comeso.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:25:55'),
(14, 'Yung Sharks x Toxic', 'Juju-Phystechs-MediaProduced-by-JordanEZimbabwe', 'Juju -(Phystechs Media)Produced by Jordan.E.Zimbabwe', 'Juju', 'Juju.mp3', 'ZIM HIP HOP', 0, 0, '2017-12-20 20:27:11'),
(15, 'P.V.D ', 'Kuhumana-Phystechs-Media', 'Kuhumana - Phystechs Media', 'Single Track', 'Kuhumana.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:29:14'),
(16, 'Jah Mix ', 'Love-Season', 'Love Season', 'Single Track', 'LoveSeason.mp3', 'ZIM RAGGA', 0, 0, '2017-12-20 20:30:52'),
(17, 'Jordan.E x Nikita x Yunkie Vybz ', 'Mazwi-Nov-2017', ' Mazwi - Nov 2017', 'Single Track', 'Mazwi.mp3', 'ZIM RAGGA', 0, 0, '2017-12-20 20:33:49'),
(19, 'Metro x MK ', 'Me-n-Myself', 'Me n Myself', 'Single Track', 'MenMyself.mp3', 'ZIM HIP HOP', 0, 0, '2017-12-20 20:39:28'),
(20, 'Jah Mix x Krissy ', 'Ndoda-Undiudze-Prod-by-JordanE', 'Ndoda Undiudze - Prod by Jordan.E', 'Single Track', 'NdodaUndiudze.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:40:36'),
(21, 'Clergyman ', 'Never-say-goodbye-Prod-by-JordanE', 'Never say goodbye - Prod by Jordan.E', 'Single Track', 'Neversaygoodbye.mp3', 'ZIM HIP HOP', 0, 0, '2017-12-20 20:42:11'),
(22, 'Yung Sharks ', 'No-Stress-Phystechs-MediaProduced-by-JordanEZimbabwe', 'No Stress - (Phystechs Media)Produced by Jordan.E.Zimbabwe', 'Single Track', 'NoStress.mp3', 'ZIM HIP HOP', 0, 0, '2017-12-20 20:43:20'),
(24, 'P V D', 'Party-Ting-Phystechs-Media-Prod-by-JordanE-0783361288', ' Party Ting - Phystechs Media - Prod by Jordan.E - 0783361288', 'Single Track', 'PartyTing.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:51:25'),
(25, 'Jordan.E x Tantie x Mc Dropper x Jah Mix ', 'Plenty-Money-Official-Audio', 'Plenty Money - Official Audio', 'Single Track', 'PlentyMoney.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:53:37'),
(26, 'Toxic ', 'Njuga-Swedera-padhuze-Phystechs-Media-Produced-by-JordanE', 'Njuga ( Swedera padhuze ) -(Phystechs Media) Produced by Jordan.E', 'Single Track', 'Swederapadhuze.mp3', 'ZIM HIP HOP', 0, 0, '2017-12-20 20:54:59'),
(27, 'Tantie ', 'Totenda-Tribute-Prod-by-Jordan-Dj-Flexn', 'Totenda ( Tribute ) - Prod by Jordan & Dj Flexn', 'Single Track', 'Totenda.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 20:58:01'),
(28, 'JORDAN_E', 'BABA-MAY-2017', 'BABA ( MAY 2017)', 'Kushinga', 'Baba.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 21:01:41'),
(29, 'Sling Gunz x Jordan.E ', 'Love-in-the-rain-July-2017-Phystechs-Media', 'Love in the rain - July 2017 - Phystechs Media', 'Single Track', 'LoveIntherain.mp3', 'ZIM RNB', 0, 0, '2017-12-20 21:03:08'),
(30, 'Tantie x Jordan.E ', 'Party-time-Phystechs-Media-0783361288', 'Party time (Phystechs Media 0783361288)', 'Single Track', 'PartyTime.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 21:04:41'),
(31, 'Jordan E', 'Secret-Prod-by-Dj-Aliville-Ghettocraft-Ent', 'Secret ( Prod by Dj Aliville - Ghettocraft Ent )', 'Single Track', 'Secret.mp3', 'ZIMDANCEHALL', 0, 0, '2017-12-20 21:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `play_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `user_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transcation`
--

CREATE TABLE `transcation` (
  `id` int(11) NOT NULL,
  `product_id_array` varchar(255) NOT NULL,
  `payer_email` varchar(233) NOT NULL,
  `first_name` varchar(233) NOT NULL,
  `last_name` varchar(233) NOT NULL,
  `payment_date` varchar(233) NOT NULL,
  `mc_gross` varchar(233) NOT NULL,
  `payment_currency` varchar(233) NOT NULL,
  `txn_id` varchar(233) NOT NULL,
  `receiver_email` varchar(233) NOT NULL,
  `payment_type` varchar(233) NOT NULL,
  `payment_status` varchar(233) NOT NULL,
  `txn_type` varchar(233) NOT NULL,
  `payer_status` varchar(233) NOT NULL,
  `address_street` varchar(233) NOT NULL,
  `address_city` varchar(233) NOT NULL,
  `address_state` varchar(233) NOT NULL,
  `address_zip` varchar(233) NOT NULL,
  `address_country` varchar(233) NOT NULL,
  `address_status` varchar(233) NOT NULL,
  `notify_version` varchar(233) NOT NULL,
  `verify_sign` varchar(233) NOT NULL,
  `payer_id` varchar(233) NOT NULL,
  `mc_currency` varchar(233) NOT NULL,
  `mc_free` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `name` varchar(234) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(234) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(234) NOT NULL,
  `city` varchar(234) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `name`, `lname`, `email`, `dob`, `username`, `password`, `phone`, `country`, `city`, `gender`, `avatar`) VALUES
(1, 'Innocent', 'Tauzeni', 'innocenttauzeni89@gmail.com', '28/12/1989', 'Telthem', '1f36d7591e5d0358e737e566128003a8', '+263775401782', 'Zimbabwe', 'Bindura', 'M', 'DSC_0007.JPG'),
(2, 'Rudolph', 'Tauzeni', 'innocent.tauzeni@gmail.com', '28/12/1984', 'Physmachtechsco', '1f36d7591e5d0358e737e566128003a8', '+263772477428', 'South Africa', 'Pretoria', 'M', 'customersevice.jpeg'),
(3, 'Tineyi', 'Svenza', 'tsvenza@main.com', '28/12/1984', 'Svenza', '1f36d7591e5d0358e737e566128003a8', '2679099999099', 'Botswana', 'Mahalape', 'M', 'DSC_0007.JPG'),
(4, 'John', 'Humba', 'a@main.com', '22/2/989', 'Keith', '1f36d7591e5d0358e737e566128003a8', '+263772477428', 'Zimbabwe', 'Bindura', 'M', 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `v_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `view_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `b_catigory`
--
ALTER TABLE `b_catigory`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `phystechs_media`
--
ALTER TABLE `phystechs_media`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`play_id`);

--
-- Indexes for table `transcation`
--
ALTER TABLE `transcation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Username` (`username`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `b_catigory`
--
ALTER TABLE `b_catigory`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phystechs_media`
--
ALTER TABLE `phystechs_media`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `play_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transcation`
--
ALTER TABLE `transcation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2018 at 12:54 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milan-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_bin NOT NULL,
  `college_name` varchar(256) COLLATE utf8_bin NOT NULL,
  `registerer` varchar(128) COLLATE utf8_bin NOT NULL,
  `phone` varchar(32) COLLATE utf8_bin NOT NULL,
  `milan_id` varchar(64) COLLATE utf8_bin NOT NULL,
  `events` text COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `college_name`, `registerer`, `phone`, `milan_id`, `events`, `timestamp`) VALUES
(1, 'Rohan Anand', 'SRM University', 'thededlier@gmail.com', '9176045101', 'M493441', '{"dance":{"western":{"text":"Western Solo","set":true},"eastern":{"text":"Eastern Solo","set":false},"doubles":{"text":"Doubles","set":false},"triples":{"text":"Triples","set":false},"bollywood":{"text":"Folk/Bollywood Battle","set":false},"group":{"text":"Group Battle","set":true},"choreo_theme":{"text":"Choreo Night (theme)","set":false},"choreo_nontheme":{"text":"Choreo Night (non themed)","set":false}},"fashion":{"ramp":{"text":"","set":false},"designer":{"text":"Designer Round","set":false},"mrmsmilan":{"text":"Mr & Mrs Milan","set":false}},"creative":{"road":{"text":"Road Painting","set":false},"collage":{"text":"Collage Making","set":false},"face":{"text":"Face Painting","set":false},"mask":{"text":"Mask Making","set":false},"tshirt":{"text":"T-Shirt Painting","set":false},"potrait":{"text":"Potrait Making","set":false},"wall":{"text":"Wall Painting","set":false}},"literary":{"poetry":{"text":"Poetry Out Loud","set":false},"jam":{"text":"Just a Minute","set":false},"shipwreck":{"text":"Shipwreck","set":false},"newsrace":{"text":"Newsrace: The Journalism Event","set":false},"block":{"text":"Block And Tackle","set":false},"comic":{"text":"Comic Script","set":false},"inquisition":{"text":"Inquisition","set":false}},"drama":{"street":{"text":"The Street Play","set":false},"stage":{"text":"The Stage Play","set":false},"spotlight":{"text":"Spotlight","set":false},"mime":{"text":"Mime","set":false},"lights":{"text":"Lights Camera Action!","set":false},"act":{"text":"Can you Act?","set":false}},"music":{"western":{"text":"Western Solo","set":false},"eastern":{"text":"Eastern Solo","set":false},"classical":{"text":"Classical and Regional Solo","set":false},"instrumental":{"text":"Solo Instrumental","set":false},"easternvocal":{"text":"Eastern Vocal Duet","set":false},"westernvocal":{"text":"Western Vocal Duet","set":false},"fusion":{"text":"Vocal Fusion","set":false},"bobwestern":{"text":"BOB Western","set":false},"bobeastern":{"text":"BOB Eastern","set":false},"rap":{"text":"Rap Battle","set":false},"dj":{"text":"DJ Battle","set":false}}}', '2018-02-27 16:52:43'),
(2, 'Pankaj Agarwal', 'SRM University', 'pankajagarwal1996@gmail.com', '9176283886', 'M700055', '{"dance":{"western":{"text":"Western Solo","set":false},"eastern":{"text":"Eastern Solo","set":false},"doubles":{"text":"Doubles","set":false},"triples":{"text":"Triples","set":false},"bollywood":{"text":"Folk/Bollywood Battle","set":false},"group":{"text":"Group Battle","set":false},"choreo_theme":{"text":"Choreo Night (theme)","set":false},"choreo_nontheme":{"text":"Choreo Night (non themed)","set":false}},"fashion":{"ramp":{"text":"","set":false},"designer":{"text":"Designer Round","set":false},"mrmsmilan":{"text":"Mr & Mrs Milan","set":false}},"creative":{"road":{"text":"Road Painting","set":false},"collage":{"text":"Collage Making","set":false},"face":{"text":"Face Painting","set":false},"mask":{"text":"Mask Making","set":false},"tshirt":{"text":"T-Shirt Painting","set":false},"potrait":{"text":"Potrait Making","set":false},"wall":{"text":"Wall Painting","set":false}},"literary":{"poetry":{"text":"Poetry Out Loud","set":false},"jam":{"text":"Just a Minute","set":false},"shipwreck":{"text":"Shipwreck","set":false},"newsrace":{"text":"Newsrace: The Journalism Event","set":false},"block":{"text":"Block And Tackle","set":false},"comic":{"text":"Comic Script","set":false},"inquisition":{"text":"Inquisition","set":false}},"drama":{"street":{"text":"The Street Play","set":false},"stage":{"text":"The Stage Play","set":false},"spotlight":{"text":"Spotlight","set":false},"mime":{"text":"Mime","set":false},"lights":{"text":"Lights Camera Action!","set":false},"act":{"text":"Can you Act?","set":false}},"music":{"western":{"text":"Western Solo","set":false},"eastern":{"text":"Eastern Solo","set":false},"classical":{"text":"Classical and Regional Solo","set":false},"instrumental":{"text":"Solo Instrumental","set":false},"easternvocal":{"text":"Eastern Vocal Duet","set":false},"westernvocal":{"text":"Western Vocal Duet","set":false},"fusion":{"text":"Vocal Fusion","set":false},"bobwestern":{"text":"BOB Western","set":false},"bobeastern":{"text":"BOB Eastern","set":false},"rap":{"text":"Rap Battle","set":false},"dj":{"text":"DJ Battle","set":false}}}', '2018-02-27 19:51:34'),
(3, 'Pankaj Agarwal', 'SRM University', 'pankajagarwal1996@gmail.com', '9176283886', 'M305529', '{"dance":{"western":{"text":"Western Solo","set":false},"eastern":{"text":"Eastern Solo","set":false},"doubles":{"text":"Doubles","set":false},"triples":{"text":"Triples","set":false},"bollywood":{"text":"Folk/Bollywood Battle","set":false},"group":{"text":"Group Battle","set":false},"choreo_theme":{"text":"Choreo Night (theme)","set":false},"choreo_nontheme":{"text":"Choreo Night (non themed)","set":false}},"fashion":{"ramp":{"text":"","set":false},"designer":{"text":"Designer Round","set":false},"mrmsmilan":{"text":"Mr & Mrs Milan","set":false}},"creative":{"road":{"text":"Road Painting","set":false},"collage":{"text":"Collage Making","set":false},"face":{"text":"Face Painting","set":false},"mask":{"text":"Mask Making","set":false},"tshirt":{"text":"T-Shirt Painting","set":false},"potrait":{"text":"Potrait Making","set":false},"wall":{"text":"Wall Painting","set":false}},"literary":{"poetry":{"text":"Poetry Out Loud","set":false},"jam":{"text":"Just a Minute","set":false},"shipwreck":{"text":"Shipwreck","set":false},"newsrace":{"text":"Newsrace: The Journalism Event","set":false},"block":{"text":"Block And Tackle","set":false},"comic":{"text":"Comic Script","set":false},"inquisition":{"text":"Inquisition","set":false}},"drama":{"street":{"text":"The Street Play","set":false},"stage":{"text":"The Stage Play","set":false},"spotlight":{"text":"Spotlight","set":false},"mime":{"text":"Mime","set":false},"lights":{"text":"Lights Camera Action!","set":false},"act":{"text":"Can you Act?","set":false}},"music":{"western":{"text":"Western Solo","set":false},"eastern":{"text":"Eastern Solo","set":false},"classical":{"text":"Classical and Regional Solo","set":false},"instrumental":{"text":"Solo Instrumental","set":false},"easternvocal":{"text":"Eastern Vocal Duet","set":false},"westernvocal":{"text":"Western Vocal Duet","set":false},"fusion":{"text":"Vocal Fusion","set":false},"bobwestern":{"text":"BOB Western","set":false},"bobeastern":{"text":"BOB Eastern","set":false},"rap":{"text":"Rap Battle","set":false},"dj":{"text":"DJ Battle","set":false}}}', '2018-02-27 19:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(256) COLLATE utf8_bin NOT NULL,
  `password` varchar(256) COLLATE utf8_bin NOT NULL,
  `role` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT 'user',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `timestamp`) VALUES
(8, 'Rohan Anand', 'thededlier@gmail.com', '$2y$10$zBhmSDf2g8zwXsIxXdVc1OPrCQPT9KxSFhhw7nqKH9RBH4jRHmHwa', 'admin', '2018-02-26 18:38:04'),
(13, 'Pankaj Agarwal', 'pankajagarwal1996@gmail.com', '$2y$10$skM/aBVzsFoMv4DX0NTeROIX/aXSXo0hkhyPY1siPOvKXBv4Yz05C', 'admin', '2018-02-27 19:01:17'),
(15, 'Mohit Gupta', 'gupta.mohit0210@gmail.com', '$2y$10$lCeD8eslvMK8gFKGucV62e5IayaCMgkq/nFh1uwxGzjmBHkBYSl2G', 'admin', '2018-02-28 12:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `milan_id` (`milan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

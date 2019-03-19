-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 05:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `media_name` varchar(300) DEFAULT NULL,
  `media_category` int(11) DEFAULT NULL,
  `base_path` varchar(300) NOT NULL,
  `bucket_name` varchar(300) NOT NULL,
  `filename` varchar(300) NOT NULL,
  `filesize` varchar(300) NOT NULL,
  `fileextension` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `media_name`, `media_category`, `base_path`, `bucket_name`, `filename`, `filesize`, `fileextension`) VALUES
(1, 'favicon', 1, 'public/assets/images/', '', 'favicon', '', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `media_category`
--

CREATE TABLE `media_category` (
  `id_media_category` int(11) NOT NULL,
  `caegory_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_category`
--

INSERT INTO `media_category` (`id_media_category`, `caegory_name`) VALUES
(1, 'Favicon');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu_name` varchar(250) DEFAULT NULL,
  `page_title` varchar(300) DEFAULT NULL,
  `page_base` varchar(250) DEFAULT NULL,
  `breadcrumps` varchar(300) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `current_route_name` varchar(300) DEFAULT NULL,
  `id_roles` int(11) DEFAULT NULL,
  `icon` varchar(300) NOT NULL,
  `fav_icon` varchar(300) NOT NULL,
  `id_parent_menu` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu_name`, `page_title`, `page_base`, `breadcrumps`, `title`, `current_route_name`, `id_roles`, `icon`, `fav_icon`, `id_parent_menu`, `created_by`, `created_date`, `edited_by`, `edited_date`) VALUES
(1, 'Login', 'Login', NULL, '', NULL, 'login', 0, '', '', NULL, NULL, NULL, NULL, NULL),
(2, 'User Dashboard', 'Dashboard', 'Home', 'Dashboard', 'Dashboard', '/user/dashboard', 2, '', '', NULL, NULL, NULL, NULL, NULL),
(3, 'Search Property', 'Search', 'Home', 'Search Property', 'Search Property', '/user/search_property', 2, '', '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `role_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `role_name`) VALUES
(1, ' Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_users_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `id_users_detail`) VALUES
(1, 'admin', '$2y$10$R4vBmCElrHUugZ7AuAlqV.Y0jD/w70BTot.1z1shvvoXjlIkPOQQm', 1),
(2, 'vivek@gmail.com', '$2y$10$R4vBmCElrHUugZ7AuAlqV.Y0jD/w70BTot.1z1shvvoXjlIkPOQQm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `id_users_detail` int(11) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `id_media` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `email` varchar(350) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_date` datetime NOT NULL,
  `edited_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_detail`
--

INSERT INTO `users_detail` (`id_users_detail`, `first_name`, `last_name`, `id_roles`, `id_media`, `country`, `state`, `city`, `email`, `phone`, `created_date`, `edited_date`) VALUES
(2, 'Vivek', 'Ps', 2, 1, 0, 0, 0, 'vivek@gmail.com', '7907487010', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `media_category`
--
ALTER TABLE `media_category`
  ADD PRIMARY KEY (`id_media_category`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id_users_detail`),
  ADD KEY `id_role_fk` (`id_roles`),
  ADD KEY ` id_media_fk` (`id_media`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_category`
--
ALTER TABLE `media_category`
  MODIFY `id_media_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id_users_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD CONSTRAINT ` id_media_fk` FOREIGN KEY (`id_media`) REFERENCES `media` (`id_media`),
  ADD CONSTRAINT `id_role_fk` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

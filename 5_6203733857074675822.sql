-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 04:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jekStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idUser` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(64) NOT NULL,
  `user_level` int(1) NOT NULL,
  `avatar` varchar(64) NOT NULL DEFAULT 'default_admin_avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `idThread` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `content` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `idGames` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_img`
--

CREATE TABLE `game_img` (
  `idImage` int(11) NOT NULL,
  `idGame` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `filename` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_stat`
--

CREATE TABLE `game_stat` (
  `idStat` int(11) NOT NULL,
  `idGame` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_vid`
--

CREATE TABLE `game_vid` (
  `idVideo` int(11) NOT NULL,
  `idGame` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `filename` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesan` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `idTransaksi` int(11) NOT NULL,
  `idGames` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `idThread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `total_harga` int(16) NOT NULL,
  `jenis_pembayaran` varchar(64) NOT NULL,
  `tanggal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(64) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT '1',
  `avatar` varchar(64) NOT NULL DEFAULT 'default_avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_game`
--

CREATE TABLE `user_game` (
  `idUserGame` int(11) NOT NULL,
  `idGame` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `idWishlist` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idGames` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `idThread` (`idThread`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`idGames`);

--
-- Indexes for table `game_img`
--
ALTER TABLE `game_img`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `idGame` (`idGame`);

--
-- Indexes for table `game_stat`
--
ALTER TABLE `game_stat`
  ADD PRIMARY KEY (`idStat`),
  ADD KEY `idGame` (`idGame`);

--
-- Indexes for table `game_vid`
--
ALTER TABLE `game_vid`
  ADD PRIMARY KEY (`idVideo`),
  ADD KEY `idGame` (`idGame`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesan`),
  ADD KEY `idGames` (`idGames`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idAdmin` (`idAdmin`),
  ADD KEY `idTransaksi` (`idTransaksi`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`idThread`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `user_game`
--
ALTER TABLE `user_game`
  ADD PRIMARY KEY (`idUserGame`),
  ADD KEY `idGame` (`idGame`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`idWishlist`),
  ADD KEY `idGames` (`idGames`),
  ADD KEY `idUser` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `idGames` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_img`
--
ALTER TABLE `game_img`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_stat`
--
ALTER TABLE `game_stat`
  MODIFY `idStat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_vid`
--
ALTER TABLE `game_vid`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `idThread` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_game`
--
ALTER TABLE `user_game`
  MODIFY `idUserGame` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `idWishlist` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idThread`) REFERENCES `thread` (`idThread`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_img`
--
ALTER TABLE `game_img`
  ADD CONSTRAINT `game_img_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGames`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_stat`
--
ALTER TABLE `game_stat`
  ADD CONSTRAINT `game_stat_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGames`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_vid`
--
ALTER TABLE `game_vid`
  ADD CONSTRAINT `game_vid_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGames`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`idGames`) REFERENCES `game` (`idGames`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_game`
--
ALTER TABLE `user_game`
  ADD CONSTRAINT `user_game_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGames`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_game_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD CONSTRAINT `user_wishlist_ibfk_1` FOREIGN KEY (`idGames`) REFERENCES `game` (`idGames`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_wishlist_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

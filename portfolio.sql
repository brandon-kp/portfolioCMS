-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2011 at 12:06 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `title` varchar(140) NOT NULL,
  `category` varchar(140) NOT NULL,
  `image` text NOT NULL,
  `thumbnail` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`title`, `category`, `image`, `thumbnail`, `description`) VALUES
('Lorem Ipsum', 'Web Development', 'http://i.imgur.com/x1TMU.jpg', 'http://i.imgur.com/x1TMU.jpg', 'Restyling grafico della community Your Inspiration Web. I colori utilizzati sono accesi e vibranti, la testata molto grafica e il font utilizzato per il logo è particolare e facilmente riconoscibile. Anche la sidebar è più sfruttata e contiene, oltre ai banner per gli sponsor, una sezione dedicata ai post in evidenza e un plugin che permette di iscriversi ai feed rss, a facebook, a twitter, alla newsletter. '),
('Urlly', 'Web Development', 'http://i.imgur.com/053nm.png', 'http://i.imgur.com/053nm.png', 'Urlly is a concept for a URL shortener (Url.ly, which turned out to be owned by bit.ly). It uses PHP and MySQL. Originally, It was going to be completed using CodeIgniter, but I found a from-scratch version to be more efficient, and use fewer CPU cycles. It is built to prevent duplicates of the same URL, to ensure a clean database with as few unnecessary entries as possible.');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `titleprefix` varchar(255) NOT NULL,
  `twitter` varchar(15) NOT NULL,
  `portrait` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`titleprefix`, `twitter`, `portrait`) VALUES
('Mike Jones', 'bababooey', 'http://imgur.com');

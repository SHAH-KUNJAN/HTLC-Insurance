-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2014 at 09:45 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MFG`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(4) NOT NULL AUTO_INCREMENT,
  `cnm` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cnm`) VALUES
(1, 'TATA'),
(2, 'MARUTI');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(4) NOT NULL AUTO_INCREMENT,
  `pnm` varchar(20) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `cid` int(4) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pnm`, `pimg`, `cid`) VALUES
(16, 'wagonR', './product/0Maruti-Suzuki-Wagon-R-1.0-Rear-three-fourth-14941.jpg', 2),
(15, 'swift', './product/Maruti-Suzuki-Swift-DZire-Front-three-fourth-17094.jpg', 2),
(14, 'nano', './product/0Audi_Q3_ext_6665.jpg', 1),
(13, 'safari', './product/mercedes_005_1024.jpg', 1),
(17, 'indica', './product/Skoda-Rapid-Interior-14874.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `unm` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`unm`, `psw`) VALUES
('admin', 'admin');

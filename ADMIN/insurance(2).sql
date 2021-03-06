-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2016 at 02:57 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `policyno` varchar(20) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `engineno` varchar(20) NOT NULL,
  `purchasevalue` varchar(10) NOT NULL,
  `make` varchar(10) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`no`, `policyno`, `regno`, `engineno`, `purchasevalue`, `make`, `detail`) VALUES
(1, '9001 ', '8733 ', '987654321 ', '200000 ', 'nano ', 'this is car insurance '),
(2, '8001  ', '2abc300  ', 'bc300za ', '300000  ', 'skoda   ', 'this is skoda car    '),
(3, '78 ', '58 ', '4512 ', '54984 ', 'yghg ', 'ytgyuhuhu ');

-- --------------------------------------------------------

--
-- Table structure for table `cus`
--

CREATE TABLE IF NOT EXISTS `cus` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `custid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `nationality` varchar(15) DEFAULT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cus`
--

INSERT INTO `cus` (`no`, `custid`, `name`, `lastname`, `dob`, `loginid`, `address`, `phno`, `emailid`, `gender`, `nationality`, `country`, `state`, `city`, `pincode`, `occupation`) VALUES
(1, '2001', 'dhaval', 'bhatt', '2016-07-21', 'cus15_dhaval', '4 , manhar plot', '9068884086', 'dhavalbhatt15.@gmail', 'm', 'indian', 'india', 'gujarat', 'rajkot', '360003', 'bussiness'),
(2, '3001', 'guhj', 'jhuijkj', '1996-03-10', 'uyguyh@jhijkij', 'utuyguihuiyuihjkh', '9898989898', 'hytghjgjhuhu_147', 'f', 'yuhjhjkkj', 'uhyuihjkk', 'huihihij', 'uhyihkjhij', '360017', 'yfgyfygfyfgyg');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `no` int(4) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`no`, `empid`, `name`, `lastname`, `designation`, `address`, `city`, `pincode`, `phno`, `doj`, `gender`, `emailid`, `loginid`) VALUES
(1, '1001   ', 'anand   ', 'jadeja   ', 'manager   ', '150 , ring road   ', 'rajkot   ', '360004   ', '9876541237', '0000-00-00', 'm', 'anandjadeja78.@gmail', 'emp15_anand   '),
(2, '3001 ', 'gunjan', 'shah1', 'manager ', 'popatpara ', 'rajkot ', '36002 ', '2412157 ', '2015-05-03', 'm', 'kunjan@15 ', 'shah@rajkot '),
(0, '58', 'gujhjh', 'jjhj', 'jhjhj', 'huihi', 'uhuihji', '36700', '8752157982', '2014-03-03', 'm', 'hgjh@kjjk_15', 'ytuyu_15@kjkj');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE IF NOT EXISTS `health` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `policyno` varchar(20) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`no`, `policyno`, `details`) VALUES
(1, '7001', 'this is health insurance'),
(2, '8201542', 'bnjhjnjhunmnuj'),
(3, '33', 'car');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `image`
--


-- --------------------------------------------------------

--
-- Table structure for table `life`
--

CREATE TABLE IF NOT EXISTS `life` (
  `no` int(4) NOT NULL,
  `policyno` varchar(20) NOT NULL,
  `lifecover` decimal(10,0) NOT NULL,
  `premiumpay` varchar(10) NOT NULL,
  `nomineeid` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `life`
--

INSERT INTO `life` (`no`, `policyno`, `lifecover`, `premiumpay`, `nomineeid`, `details`) VALUES
(801, '7002', 500000, '8000', '9001', 'this is life insurance');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `password`, `role`) VALUES
('admin15_prashant', 'prashant21', 'admin1'),
('admin15_kunjan', 'kunjan310', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE IF NOT EXISTS `nominee` (
  `no` int(4) NOT NULL,
  `nomineeid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`no`, `nomineeid`, `name`, `emailid`, `dob`, `address`, `phno`, `relation`, `gender`, `city`) VALUES
(1, '21', 'sachin', 'sachin.@gmail.com', '1990-07-21', '100 , ring road', '9876541237', 'brother', 'm', 'rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE IF NOT EXISTS `policy` (
  `policyno` int(20) NOT NULL AUTO_INCREMENT,
  `policyid` varchar(15) NOT NULL,
  `custid` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `purdate` date NOT NULL,
  `premium` decimal(10,0) NOT NULL,
  `frequency` varchar(20) NOT NULL,
  `policystdate` date NOT NULL,
  `policyeddate` date NOT NULL,
  `nextpremiumdt` date NOT NULL,
  `approved` varchar(3) NOT NULL,
  `nomineeid` varchar(20) NOT NULL,
  PRIMARY KEY (`policyno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policyno`, `policyid`, `custid`, `type`, `purdate`, `premium`, `frequency`, `policystdate`, `policyeddate`, `nextpremiumdt`, `approved`, `nomineeid`) VALUES
(1, '111', '2001', 'life', '1995-11-20', 8000, 'ab12', '1996-01-21', '2025-01-20', '2016-07-24', 'yes', '21'),
(2, '50', '33', 'car', '2015-03-10', 10000, '2000', '2015-03-15', '2030-03-15', '2016-05-15', 'yes', '8'),
(3, '50', '33', 'car', '2015-03-10', 10000, '2000', '2015-03-15', '2030-03-15', '2016-05-15', 'yes', '8');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `queryid` int(4) NOT NULL,
  `query` varchar(20) NOT NULL,
  `postedby` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryid`, `query`, `postedby`) VALUES
(214, 'premium is go', 'raj');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `policyno` varchar(20) NOT NULL,
  `receiptno` int(4) NOT NULL,
  `receiptdate` date NOT NULL,
  `amtpaid` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`policyno`, `receiptno`, `receiptdate`, `amtpaid`) VALUES
('7002', 214, '2016-07-14', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `replyid` int(4) NOT NULL,
  `replyby` varchar(20) NOT NULL,
  `reply` varchar(300) NOT NULL,
  `queryid` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`replyid`, `replyby`, `reply`, `queryid`) VALUES
(906, 'agent', 'sorry', 214);

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

CREATE TABLE IF NOT EXISTS `vehical` (
  `no` int(4) NOT NULL,
  `policyno` varchar(20) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `engineno` varchar(20) NOT NULL,
  `purchasevalue` varchar(10) NOT NULL,
  `make` varchar(10) NOT NULL,
  `details` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`no`, `policyno`, `regno`, `engineno`, `purchasevalue`, `make`, `details`) VALUES
(801, '8001', '90677', '123456789', '55000', 'honda', 'this is vehical in0syurance ');

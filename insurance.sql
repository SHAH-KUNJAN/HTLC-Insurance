-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2016 at 02:27 AM
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
-- Table structure for table `car_plans`
--

CREATE TABLE IF NOT EXISTS `car_plans` (
  `insurer` varchar(20) NOT NULL,
  `thirdparty` text NOT NULL,
  `garages` varchar(20) NOT NULL,
  `addoncovers` text NOT NULL,
  `features` text NOT NULL,
  `exception` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_plans`
--

INSERT INTO `car_plans` (`insurer`, `thirdparty`, `garages`, `addoncovers`, `features`, `exception`) VALUES
('BAJAJ CAR INSURANCE', 'Upto 7.5Lac for third party propery damage', '4000 and More', '-Road side Assistance plan\r\n-Key & Lock Replacement\r\n-Engine protector<', '-Lock&key included in all\r\n-instant policy issuance\r\n-receive instant sms updates in yourmotor claim 24x7.', '-Availcble for vehicles up to 15 years old\r\n-Lock%key cover available for vehicles upto 10 years old\r\n-Engine protector available till 5 years old.'),
('ICICI CAR INSURANCE', 'Upto 7.5Lac for third party propery damage', '2300 and More', '-Road side Assistance plan\r\n-Key & Lock Replacement\r\n-Engine protector', '-Lock&key included in all\r\n-instant policy issuance\r\n-receive instant sms updates in yourmotor claim 24x7.', '-Availcble for vehicles up to 15 years old\r\n-Lock%key cover available for vehicles upto 10 years old\r\n-Engine protector available till 5 years old.');

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
  `password` varchar(10) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cus`
--

INSERT INTO `cus` (`no`, `custid`, `name`, `lastname`, `dob`, `loginid`, `password`, `address`, `phno`, `emailid`, `gender`, `nationality`, `country`, `state`, `city`, `pincode`, `occupation`) VALUES
(1, '2001', 'dhaval', 'bhatt', '2016-07-21', 'cus15_dhaval', '123456', '4 , manhar plot', '9068884086', 'dhavalbhatt15.@gmail', 'm', 'indian', 'india', 'gujarat', 'rajkot', '360003', 'bussiness'),
(2, '3001', 'guhj', 'jhuijkj', '1996-03-10', 'uyguyh@jhijkij', '123', 'utuyguihuiyuihjkh', '9898989898', 'hytghjgjhuhu_147', 'f', 'yuhjhjkkj', 'uhyuihjkk', 'huihihij', 'uhyihkjhij', '360017', 'yfgyfygfyfgyg'),
(3, '123', 'uyihj', 'uhiji', '2016-08-31', 'kun@shah', '963', 'egjoefef', '1234546789', 'hjh_hjikj.com', 'f', 'india', '2', 'dsewf', 'wdfwe', '3585', 'fghty'),
(4, '123', 'uyihj', 'uhiji', '2016-08-31', 'kun@shah', '963', 'egjoefef', '1234546789', 'hjh_hjikj.com', 'f', 'india', '2', 'dsewf', 'wdfwe', '3585', 'fghty');

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
  `country` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`no`, `empid`, `name`, `lastname`, `designation`, `address`, `country`, `state`, `city`, `pincode`, `phno`, `doj`, `gender`, `emailid`, `loginid`, `password`) VALUES
(1, '1001   ', 'anand   ', 'jadeja   ', 'manager   ', '150 , ring road   ', 'india', 'gujarat', 'rajkot   ', '360004   ', '9876541237', '0000-00-00', 'm', 'anandjadeja78.@gmail', 'emp15_anand   ', '123'),
(2, '3001 ', 'gunjan', 'shah1', 'manager ', 'popatpara ', 'usa', 'usa', 'usa', '36002 ', '2412157 ', '2015-05-03', 'm', 'kunjan@15 ', 'shah@rajkot ', '456'),
(0, '58', 'gujhjh', 'jjhj', 'jhjhj', 'huihi', 'uk', 'uk', 'uk', '36700', '8752157982', '2014-03-03', 'm', 'hgjh@kjjk_15', 'ytuyu_15@kjkj', '789');

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
-- Table structure for table `health_plans`
--

CREATE TABLE IF NOT EXISTS `health_plans` (
  `insurer` varchar(20) NOT NULL,
  `hospitals` varchar(20) NOT NULL,
  `planname` text NOT NULL,
  `sumassured` text NOT NULL,
  `features` text NOT NULL,
  `featureexclued` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_plans`
--

INSERT INTO `health_plans` (`insurer`, `hospitals`, `planname`, `sumassured`, `features`, `featureexclued`) VALUES
('BHARTI AXA', '1609', 'BASIC\r\nOPTIMUM\r\nOPTIMUM', '2 lacs\r\n5 lacs\r\n3 lacs', '-Amulance charges Domicillar Hospitalization\r\n-Amulance charges Domicillar Hospitalization\r\n-Amulance charges Domicillar Hospitalization\r\n', '-OPD Covrage Restore Benefits\r\n-Health Checkup Restore Benefits \r\n-Health Checkup Restore Benefits'),
('HEALTH INSURANCE', '1583', 'HEALTH GAIN', '3,6,9 lacs', 'Restore Benefits Amulance charges', 'Health Checkup Materny Cover');

-- --------------------------------------------------------

--
-- Table structure for table `life`
--

CREATE TABLE IF NOT EXISTS `life` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `policyno` varchar(20) NOT NULL,
  `lifecover` decimal(10,0) NOT NULL,
  `premiumpay` varchar(10) NOT NULL,
  `nomineeid` varchar(20) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `life`
--

INSERT INTO `life` (`no`, `policyno`, `lifecover`, `premiumpay`, `nomineeid`, `details`) VALUES
(1, '7002', 500000, '8000', '9001', 'this is life insurance');

-- --------------------------------------------------------

--
-- Table structure for table `life_plans`
--

CREATE TABLE IF NOT EXISTS `life_plans` (
  `plans` text NOT NULL,
  `entryage` varchar(50) NOT NULL,
  `policyteam` varchar(50) NOT NULL,
  `sumassured` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `life_plans`
--

INSERT INTO `life_plans` (`plans`, `entryage`, `policyteam`, `sumassured`) VALUES
('Life Sanchay', '30/45 Years', '15/25 Years', '1.5  Lac/NA'),
('LIC new Jeevan Anand', '18/50 Years', '15/50 Years', '1 Lac/NA'),
('LIC Amulya Jeevan', '18/60 Years', '5/35 Years', '2.5 Lac/NA');

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
  `queryid` int(6) NOT NULL AUTO_INCREMENT,
  `query` varchar(20) NOT NULL,
  `postedby` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`queryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryid`, `query`, `postedby`, `date`, `reply`) VALUES
(1, 'premium is go', 'raj', '2016-09-03', 'ok oko okoko oko'),
(216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-04', 'nice nice nice'),
(217, 'my loading is true?', 'kunja', '2016-09-02', 'ha te sachu chhe'),
(219, 'oy te nathi thatu', 'prashant', '2016-09-03', '');

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
  `replyid` int(4) NOT NULL AUTO_INCREMENT,
  `replyby` varchar(20) NOT NULL,
  `reply` varchar(300) NOT NULL,
  `queryid` int(4) NOT NULL,
  `query` varchar(20) NOT NULL,
  `postedby` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`replyid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`replyid`, `replyby`, `reply`, `queryid`, `query`, `postedby`, `date`) VALUES
(1, 'agent', 'sorry', 214, 'uhfikc', 'uhijoko', '2016-09-01'),
(10, 'admin', 'hahahahahhaahahah', 216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-05'),
(9, 'admin', 'fdhkohjoehopeth', 216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-05'),
(7, 'admin', 'a', 216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-05'),
(8, 'admin', 'hello', 1, 'premium is go', 'raj', '2016-09-05'),
(11, 'admin', 'HA te sachi chhe ok ok', 216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-05'),
(12, 'admin', 'ok nice ha te chhe', 216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-05'),
(13, 'admin', 'nice nice nice', 216, 'hello jhioerlmgf', 'cus15_dhaval', '2016-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `two_plans`
--

CREATE TABLE IF NOT EXISTS `two_plans` (
  `insurer` varchar(20) NOT NULL,
  `thirdparty` text NOT NULL,
  `addoncovers` text NOT NULL,
  `feature` text NOT NULL,
  `limitation` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `two_plans`
--

INSERT INTO `two_plans` (`insurer`, `thirdparty`, `addoncovers`, `feature`, `limitation`) VALUES
('TWO WHEELER', 'Upto 1L for third party propery damage', 'No add ones avilable for two whellers', '-Instance policy insurance\r\n-comprehensive support through our dedicated customer support team', 'Avilable for vehicles upto 10 years old'),
('L&T TWO WHEELER', 'Upto 1L for third party propery damage', 'No add ones avilable for two whellers', '-Instance policy insurance\r\n-swift claims settlement process', 'Avilable for vehicles upto 10 years old');

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

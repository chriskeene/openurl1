-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.nostuff.org
-- Generation Time: Apr 20, 2012 at 07:30 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `openurl`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `logDate` varchar(10) DEFAULT NULL,
  `logTime` varchar(8) DEFAULT NULL,
  `encryptedUserIP` varchar(27) DEFAULT NULL,
  `institutionResolverID` int(6) DEFAULT NULL,
  `routerRedirectIdentifier` varchar(13) DEFAULT NULL,
  `aulast` varchar(35) DEFAULT NULL,
  `aufirst` varchar(9) DEFAULT NULL,
  `auinit` varchar(1) DEFAULT NULL,
  `auinit1` varchar(1) DEFAULT NULL,
  `auinitm` varchar(10) DEFAULT NULL,
  `au` varchar(57) DEFAULT NULL,
  `aucorp` varchar(10) DEFAULT NULL,
  `atitle` varchar(142) DEFAULT NULL,
  `title` varchar(179) DEFAULT NULL,
  `jtitle` varchar(39) DEFAULT NULL,
  `stitle` varchar(20) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `ssn` varchar(10) DEFAULT NULL,
  `quarter` varchar(10) DEFAULT NULL,
  `volume` varchar(3) DEFAULT NULL,
  `part` varchar(10) DEFAULT NULL,
  `issue` varchar(8) DEFAULT NULL,
  `spage` varchar(4) DEFAULT NULL,
  `epage` varchar(4) DEFAULT NULL,
  `pages` varchar(9) DEFAULT NULL,
  `artnum` varchar(6) DEFAULT NULL,
  `issn` varchar(9) DEFAULT NULL,
  `eissn` varchar(9) DEFAULT NULL,
  `isbn` varchar(10) DEFAULT NULL,
  `coden` varchar(10) DEFAULT NULL,
  `sici` varchar(10) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `btitle` varchar(51) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `pub` varchar(10) DEFAULT NULL,
  `edition` varchar(10) DEFAULT NULL,
  `tpages` varchar(10) DEFAULT NULL,
  `series` varchar(10) DEFAULT NULL,
  `doi` varchar(32) DEFAULT NULL,
  `sid` varchar(29) DEFAULT NULL,
  KEY `logDate` (`logDate`),
  KEY `institutionResolverID` (`institutionResolverID`),
  KEY `atitle` (`atitle`),
  KEY `date` (`date`),
  KEY `issn` (`issn`),
  KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

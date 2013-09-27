-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2012 at 11:58 AM
-- Server version: 5.1.37
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `concrete5`
--

-- --------------------------------------------------------

--
-- Table structure for table `btModelElements`
--

CREATE TABLE `btModelElements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Label` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` tinytext NOT NULL,
  `Group` varchar(255) NOT NULL,
  `SubGroup` varchar(255) NOT NULL,
  `horiz` varchar(31) NOT NULL,
  `vert` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `btModelElements`
--

INSERT INTO `btModelElements` VALUES(1, 'Lake', 'ecosys_Lake', 'Description for ecosys_Lake', 'ecosys', '', 'right: 9.58%', 'bottom: 0.00%');
INSERT INTO `btModelElements` VALUES(2, 'Riparian', 'ecosys_Riparian', 'Description for ecosys_Riparian', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(3, 'River', 'ecosys_River', 'Description for ecosys_River', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(4, 'Spring', 'ecosys_Spring', 'Description for ecosys_Spring', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(5, 'Subterranean', 'ecosys_Subterranean', 'Description for ecosys_Subterranean', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(6, 'Terrestrial', 'ecosys_Terrestrial', 'Description for ecosys_Terrestrial', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(7, 'Wetland', 'ecosys_Wetland', 'Description for ecosys_Wetland', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(8, 'Unknown', 'ecosys_Unknown', 'Description for ecosys_Unknown', 'ecosys', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(9, 'Self Supply (Domestic)', 'GWuse_Domestic_SelfSupply', 'Description for GWuse_Domestic_SelfSupply', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(10, 'Self Supply (Industrial)', 'GWuse_Industrial_SelfSupply', 'Description for GWuse_Industrial_SelfSupply', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(11, 'Irrigation', 'GWuse_Irrigation', 'Description for GWuse_Irrigation', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(12, 'Livestock', 'GWuse_Livestock', 'Description for GWuse_Livestock', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(13, 'Mining', 'GWuse_Mining', 'Description for GWuse_Mining', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(14, 'Power', 'GWuse_Power', 'Description for GWuse_Power', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(15, 'PublicSupply', 'GWuse_PublicSupply', 'Description for GWuse_PublicSupply', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(16, 'Unknown', 'GWuse_Unknown', 'Description for GWuse_Unknown', 'GWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(17, 'Aquaculture', 'SWuse_Aquaculture', 'Description for SWuse_Aquaculture', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(18, 'Self Supply (Domestic)', 'SWuse_Domestic_SelfSupply', 'Description for SWuse_Domestic_SelfSupply', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(19, 'Self Supply (Industrial)', 'SWuse_Industrial_SelfSupply', 'Description for SWuse_Industrial_SelfSupply', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(20, 'Irrigation', 'SWuse_Irrigation', 'Description for SWuse_Irrigation', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(21, 'Livestock', 'SWuse_Livestock', 'Description for SWuse_Livestock', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(22, 'Power', 'SWuse_Power', 'Description for SWuse_Power', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(23, 'PublicSupply', 'SWuse_PublicSupply', 'Description for SWuse_PublicSupply', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(24, 'Unknown', 'SWuse_Unknown', 'Description for SWuse_Unknown', 'SWuse', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(25, 'Buyback', 'Policy_Buyback', 'Description for Policy_Buyback', 'Policy', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(26, 'Voluntary conservation', 'Policy_Voluntary_conservation', 'Description for Policy_Voluntary_conservation', 'Policy', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(27, 'Substitute water', 'Policy_Substitute_water', 'Description for Policy_Substitute_water', 'Policy', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(28, 'Collaboration', 'Policy_Collaboration', 'Description for Policy_Collaboration', 'Policy', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(29, 'Unknown', 'Policy_Unknown', 'Description for Policy_Unknown', 'Policy', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(30, 'No mention', 'Policy_No_mention', 'Description for Policy_No_mention', 'Policy', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(31, 'Endangered species protection', 'Legal_Endangered_species_protection', 'Description for Legal_Endangered_species_protection', 'Legal', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(32, 'Water plan', 'Legal_Water_plan', 'Description for Legal_Water_plan', 'Legal', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(33, 'Mitigation', 'Legal_Mitigation', 'Description for Legal_Mitigation', 'Legal', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(34, 'Interstate compact', 'Legal_Interstate_compact', 'Description for Legal_Interstate_compact', 'Legal', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(35, 'Unknown', 'Legal_Unknown', 'Description for Legal_Unknown', 'Legal', '', 'left: 25%', 'top: 25%');
INSERT INTO `btModelElements` VALUES(36, 'No mention', 'Legal_No_mention', 'Description for Legal_No_mention', 'Legal', '', 'left: 25%', 'top: 25%');

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 01:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cell_no` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `profile_pic` varchar(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `advertisement_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `image_name` varchar(60) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT '0' COMMENT '1. Deleted & 0. Not Deleted',
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`advertisement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`advertisement_id`, `user_id`, `from_date`, `to_date`, `image_name`, `is_deleted`, `created_on`, `modified_on`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, NULL, NULL),
(2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, NULL, NULL),
(3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, NULL, NULL),
(4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, NULL, NULL),
(5, 5, '0000-00-00 00:00:00', '1970-01-01 01:00:20', '1970-01-01 01:00:00', 0, NULL, NULL),
(6, 5, '2016-01-11 00:00:00', '2016-01-08 00:00:00', '350px-Kashmir_region_2004.jpg', 0, NULL, NULL),
(7, 5, '2016-01-14 00:00:00', '2016-01-26 00:00:00', '11159527_560596647412046_4332678767853260988_n.jpg', 0, '2016-01-07 18:12:11', NULL),
(8, 5, '2016-01-05 00:00:00', '2016-02-02 00:00:00', '12189726_1178441582170193_7736750978673841579_n.jpg', 0, '2016-01-07 18:15:54', NULL),
(9, 5, '2016-01-05 00:00:00', '2016-02-01 00:00:00', 'a7bGWqr_460s.jpg', 0, '2016-01-07 18:21:22', NULL),
(10, 5, '2016-01-08 00:00:00', '2016-01-25 00:00:00', '6.png', 0, '2016-01-07 18:23:21', '2016-02-21 10:35:10'),
(11, 5, '2016-01-04 00:00:00', '2016-01-26 00:00:00', '5.png', 0, '2016-01-07 18:27:30', '2016-02-21 10:35:01'),
(12, 5, '2016-01-13 00:00:00', '2016-01-13 00:00:00', '4.png', 0, '2016-01-11 19:28:31', '2016-02-21 10:34:51'),
(13, 5, '2016-03-01 00:00:00', '2016-01-26 00:00:00', '3.png', 0, '2016-01-11 20:00:38', '2016-02-21 10:34:39'),
(14, 5, '2015-11-09 00:00:00', '2016-01-26 00:00:00', '2.png', 0, '2016-01-12 16:29:14', '2016-02-21 10:34:27'),
(15, 5, '2016-01-04 00:00:00', '2016-01-29 00:00:00', '1.png', 0, '2016-01-12 17:09:16', '2016-02-21 10:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `alert_id` int(11) NOT NULL,
  `alert_type` int(10) DEFAULT NULL,
  `property_type_id` int(10) DEFAULT NULL,
  `property_purpose_id` int(10) DEFAULT NULL,
  `price_range` varchar(20) DEFAULT NULL,
  `beds` int(10) DEFAULT NULL,
  `baths` int(10) DEFAULT NULL,
  `city_id` int(10) DEFAULT NULL,
  `location_id` int(10) DEFAULT NULL,
  `keyword` varchar(60) DEFAULT NULL,
  `covered_area` varchar(60) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`alert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `area_unit`
--

CREATE TABLE IF NOT EXISTS `area_unit` (
  `area_unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`area_unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `area_unit`
--

INSERT INTO `area_unit` (`area_unit_id`, `name`) VALUES
(1, 'Square Feet'),
(2, 'Marla'),
(3, 'Kanal');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `name`) VALUES
(1, 1, 'Lahore'),
(2, 1, 'Multan');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cell` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `address` varbinary(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `future_opportunity` int(11) NOT NULL DEFAULT '0',
  `int_opportunity` int(11) NOT NULL DEFAULT '0',
  `local_opportunity` int(11) NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `user_id`, `name`, `phone`, `cell`, `fax`, `email`, `address`, `zipcode`, `future_opportunity`, `int_opportunity`, `local_opportunity`, `created_on`) VALUES
(1, 5, 'Mohsin Rafiq', '639127368126', '76347269482', '726348726384', 'mohsin@live.com', 'Chowk Qadafi', '60000', 1, 1, 1, '2016-02-28 19:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `construction_status`
--

CREATE TABLE IF NOT EXISTS `construction_status` (
  `construction_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`construction_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `construction_status`
--

INSERT INTO `construction_status` (`construction_status_id`, `name`) VALUES
(1, 'Complete'),
(2, 'Under Construction');

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE IF NOT EXISTS `contact_person` (
  `contact_person_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `name` int(60) DEFAULT NULL,
  `cell_no` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`contact_person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_person`
--

INSERT INTO `contact_person` (`contact_person_id`, `property_id`, `name`, `cell_no`, `phone_no`, `email`, `created_on`, `created_by`) VALUES
(1, 1, 0, '37849247456', '342346456445', 'john.doe@property.com', '2016-01-02 19:50:28', 5),
(2, 2, 0, '37849247456', '342346456445', 'mohsin@live.com', '2016-01-24 09:40:19', 5),
(3, 4, 0, '37849247456', '342346456445', 'mohsin@live.com', '2016-02-28 19:19:55', 5);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`) VALUES
(1, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `favourite_agent`
--

CREATE TABLE IF NOT EXISTS `favourite_agent` (
  `favourite_agaent_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(10) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`favourite_agaent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_properties`
--

CREATE TABLE IF NOT EXISTS `favourite_properties` (
  `favourite_property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(10) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`favourite_property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listing_quota`
--

CREATE TABLE IF NOT EXISTS `listing_quota` (
  `listing_quota_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `quota` int(10) NOT NULL,
  PRIMARY KEY (`listing_quota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `listing_quota`
--

INSERT INTO `listing_quota` (`listing_quota_id`, `name`, `quota`) VALUES
(1, '5 Properties', 5),
(2, '10 Properties', 10),
(3, '15 Properties', 15),
(4, '20 Properties', 20),
(5, '25 Properties', 25),
(6, '30 Properties', 30),
(7, '35 Properties', 35),
(8, '40 Properties', 40),
(9, '45 Properties', 45),
(10, '50 Properties', 50),
(11, 'Unlimited Properties', 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city_id`, `name`) VALUES
(1, 1, 'Model Town'),
(2, 1, 'Defence'),
(3, 2, 'Gulgasht'),
(4, 2, 'Shah Rukn-e-Alam');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_purpose_id` int(10) NOT NULL,
  `property_type_id` int(10) NOT NULL,
  `city_id` int(10) DEFAULT NULL,
  `location_id` int(10) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(20,0) NOT NULL,
  `area` varchar(20) DEFAULT NULL,
  `area_unit_id` int(10) DEFAULT NULL,
  `expires_after` datetime NOT NULL,
  `construction_status_id` int(10) DEFAULT NULL,
  `property_status` tinyint(1) DEFAULT '0' COMMENT '0. Pending, 1. Approved, 2. Rejected',
  `client_id` int(11) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_purpose_id`, `property_type_id`, `city_id`, `location_id`, `title`, `description`, `price`, `area`, `area_unit_id`, `expires_after`, `construction_status_id`, `property_status`, `client_id`, `created_on`, `created_by`, `modified_on`, `modified_by`, `is_deleted`) VALUES
(1, 1, 16, 1, 1, 'Warehouse for sale in Multan', 'lorem ipsum', '14000000', '20', 2, '0000-00-00 00:00:00', 0, 1, 0, '2016-01-02 19:50:28', 5, '2016-02-17 19:46:01', 1, 0),
(2, 1, 17, 2, 3, 'Factory for sale', 'ssdgasgfg', '14000000', '20', 3, '0000-00-00 00:00:00', 0, 2, 0, '2016-01-24 09:40:19', 5, '2016-02-17 19:46:33', 1, 0),
(3, 1, 5, 2, 3, 'House for sale', 'dsfkukysd dfs fsd fs sfsghfghfg fggb fgdfghfdhg g  gfhfghfg  dfgdf dfg', '231278312', '20', 2, '2016-02-28 19:07:02', NULL, 0, NULL, '2016-02-28 19:07:02', 5, '0000-00-00 00:00:00', 0, 0),
(4, 1, 5, 2, 3, 'House for sale', 'dsfkukysd dfs fsd fs sfsghfghfg fggb fgdfghfdhg g  gfhfghfg  dfgdf dfg', '231278312', '20', 2, '2016-02-28 19:19:55', NULL, 0, NULL, '2016-02-28 19:19:55', 5, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `property_purpose`
--

CREATE TABLE IF NOT EXISTS `property_purpose` (
  `property_purpose_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`property_purpose_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `property_purpose`
--

INSERT INTO `property_purpose` (`property_purpose_id`, `name`) VALUES
(1, 'For Sale'),
(2, 'Rent'),
(3, 'Wanted');

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE IF NOT EXISTS `property_type` (
  `property_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_property_type_id` int(10) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`property_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`property_type_id`, `parent_property_type_id`, `name`) VALUES
(1, NULL, 'Homes'),
(2, NULL, 'Plots'),
(3, NULL, 'Commercial'),
(4, 1, 'House'),
(5, 1, 'Flat'),
(6, 1, 'Portion'),
(7, 1, 'Farm House'),
(8, 2, 'Residential Plot'),
(9, 2, 'Commercial Plot'),
(10, 2, 'Agricultural Plot'),
(11, 2, 'Industrial Land'),
(12, 2, 'Plot File'),
(13, 2, 'Plot Form'),
(14, 3, 'Office'),
(15, 3, 'Shop'),
(16, 3, 'Warehouse'),
(17, 3, 'Factory'),
(18, 3, 'Building'),
(19, 3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `property_video`
--

CREATE TABLE IF NOT EXISTS `property_video` (
  `property_video_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(10) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `host` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`property_video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_role_id` int(10) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `parent_role_id`, `name`) VALUES
(1, NULL, 'Individual'),
(2, NULL, 'Company'),
(3, 1, 'Owner/Investor'),
(4, 1, 'Tenant'),
(5, 2, 'Agent/Broker'),
(6, 2, 'Upraiser'),
(7, 2, 'Architect'),
(8, 2, 'Builder'),
(9, 2, 'Corporate Investor'),
(10, 2, 'Developer'),
(11, 2, 'Listing Administrator'),
(12, 2, 'Mortage Broker'),
(13, 2, 'Property/Assest Manager'),
(14, 2, 'Researcher');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cell_no` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `profile_pic` varchar(60) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `listing_quota_id` int(11) DEFAULT '1',
  `user_type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1. Super Admin & 2. User',
  `user_status` tinyint(1) DEFAULT '0' COMMENT '0. Pending, 1. Approved, 2. Rejected',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1. Deleted & 0. Not Deleted',
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `cell_no`, `phone_no`, `address`, `zipcode`, `country_id`, `city_id`, `location_id`, `profile_pic`, `about`, `listing_quota_id`, `user_type`, `user_status`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Super Admin', 'admin@property.com', 'c33367701511b4f6020ec61ded352059', '', '', '', '', 1, 1, 1, 'panda.png', NULL, 11, 1, 0, 0, '2015-12-17 00:00:00', NULL, '2016-01-21 13:54:10', 1),
(2, 'Mohsin Rafiq', 'mohsin@live.com', '123456', '03037313929', '04212345678', 'Chowk Qadafi 32 323', '60000', NULL, 2, 4, '', 'lorem ipsum 34 3424', 1, 2, 2, 0, '2015-12-31 19:12:21', NULL, NULL, NULL),
(3, 'Altaf Bhai', 'altaf@property.com', '123456', '4534534534', '35345345345', 'fgdfg dgdg dgdfgdfgdfgdfg', '43534', NULL, 2, 4, 'eagle.png', 'd fgdgdgdg fdd bd fdgfgdfgf', 4, 2, 2, 0, '2015-12-31 19:12:21', NULL, '2016-01-12 22:11:38', 1),
(4, 'Raju Rocket', 'raju@email.com', '123456', '4823642834', '90232388', 'drfsd fsdf sfsdf', '43534', NULL, 1, 2, '2000px-Flag_of_Pakistan.svg.png', 's fsdfs dfsd f', 1, 2, 2, 0, '2015-12-31 19:12:21', NULL, NULL, NULL),
(5, 'Mel Gibson', 'mel@email.com', 'e10adc3949ba59abbe56e057f20f883e', '453453453411', '3534534534511', 'fjhgfjgfj  jfj11', '4353411', NULL, 2, 4, 'Zayn-Malik-Piercing.jpg', 'hg kjgkjhgkjgkjgkjhgkjhgkj h g  h gkj11', 1, 2, 1, 0, '2015-12-31 19:55:23', NULL, '2016-02-28 14:12:59', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT '0',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `role_id`, `user_id`, `is_approved`, `is_deleted`) VALUES
(1, 3, 5, 0, NULL),
(2, 5, 5, 0, NULL),
(3, 6, 5, 0, NULL),
(4, 7, 5, 0, NULL),
(5, 8, 5, 0, NULL),
(6, 9, 5, 0, NULL),
(7, 11, 5, 0, NULL),
(8, 12, 5, 0, NULL),
(9, 13, 5, 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

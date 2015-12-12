/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.17 : Database - my_property
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`my_property` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `my_property`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cell_no` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `profile_pic` varchar(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `advertisement` */

DROP TABLE IF EXISTS `advertisement`;

CREATE TABLE `advertisement` (
  `advertisement_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `image_name` varchar(60) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`advertisement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `advertisement` */

/*Table structure for table `alert` */

DROP TABLE IF EXISTS `alert`;

CREATE TABLE `alert` (
  `alert_id` int(11) NOT NULL,
  `alert_type` int(10) DEFAULT NULL,
  `property_type_id` int(10) DEFAULT NULL,
  `property_purpose_id` int(10) DEFAULT NULL,
  `price_range` varchar(20) DEFAULT NULL,
  `beds` int(10) DEFAULT NULL,
  `location_id` int(10) DEFAULT NULL,
  `keyword` varchar(60) DEFAULT NULL,
  `covered_area` varchar(60) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL,
  `baths` int(10) DEFAULT NULL,
  PRIMARY KEY (`alert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alert` */

/*Table structure for table `area_type` */

DROP TABLE IF EXISTS `area_type`;

CREATE TABLE `area_type` (
  `area_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`area_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `area_type` */

insert  into `area_type`(`area_type_id`,`name`) values (1,'Square Feet'),(2,'Marla'),(3,'Kanal');

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `city` */

/*Table structure for table `construction_status` */

DROP TABLE IF EXISTS `construction_status`;

CREATE TABLE `construction_status` (
  `construction_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`construction_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `construction_status` */

insert  into `construction_status`(`construction_status_id`,`name`) values (1,'Complete'),(2,'Under Construction');

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `country` */

/*Table structure for table `favourite_agent` */

DROP TABLE IF EXISTS `favourite_agent`;

CREATE TABLE `favourite_agent` (
  `favourite_agaent_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(10) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`favourite_agaent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `favourite_agent` */

/*Table structure for table `favourite_properties` */

DROP TABLE IF EXISTS `favourite_properties`;

CREATE TABLE `favourite_properties` (
  `favourite_property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(10) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`favourite_property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `favourite_properties` */

/*Table structure for table `listing_quota` */

DROP TABLE IF EXISTS `listing_quota`;

CREATE TABLE `listing_quota` (
  `listing_quota_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `quota` int(10) NOT NULL,
  PRIMARY KEY (`listing_quota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `listing_quota` */

insert  into `listing_quota`(`listing_quota_id`,`name`,`quota`) values (1,'5 Properties',5),(2,'10 Properties',10),(3,'15 Properties',15),(4,'20 Properties',20),(5,'25 Properties',25),(6,'30 Properties',30),(7,'35 Properties',35),(8,'40 Properties',40),(9,'45 Properties',45),(10,'50 Properties',50),(11,'Unlimited Properties',0);

/*Table structure for table `location` */

DROP TABLE IF EXISTS `location`;

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `location` */

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_purpose_id` int(10) NOT NULL,
  `property_type_id` int(10) NOT NULL,
  `city_id` int(10) DEFAULT NULL,
  `location_id` int(10) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(20,0) NOT NULL,
  `area` varchar(20) DEFAULT NULL,
  `area_type_id` int(10) DEFAULT NULL,
  `area_unit` varchar(50) DEFAULT NULL,
  `expires_after` datetime NOT NULL,
  `construction_status_id` int(10) NOT NULL,
  `property_status` tinyint(1) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `property` */

/*Table structure for table `property_purpose` */

DROP TABLE IF EXISTS `property_purpose`;

CREATE TABLE `property_purpose` (
  `property_purpose_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`property_purpose_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `property_purpose` */

insert  into `property_purpose`(`property_purpose_id`,`name`) values (1,'For Sale'),(2,'Rent'),(3,'Wanted');

/*Table structure for table `property_type` */

DROP TABLE IF EXISTS `property_type`;

CREATE TABLE `property_type` (
  `property_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_property_id` int(10) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`property_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `property_type` */

insert  into `property_type`(`property_type_id`,`parent_property_id`,`name`) values (1,NULL,'Homes'),(2,NULL,'Plots'),(3,NULL,'Commercial'),(4,1,'House'),(5,1,'Flat'),(6,1,'Portion'),(7,1,'Farm House'),(8,2,'Residential Plot'),(9,2,'Commercial Plot'),(10,2,'Agricultural Plot'),(11,2,'Industrial Land'),(12,2,'Plot File'),(13,2,'Plot Form'),(14,3,'Office'),(15,3,'Shop'),(16,3,'Warehouse'),(17,3,'Factory'),(18,3,'Building'),(19,3,'Other');

/*Table structure for table `property_video` */

DROP TABLE IF EXISTS `property_video`;

CREATE TABLE `property_video` (
  `property_video_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(10) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `host` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`property_video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `property_video` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_role_id` int(10) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`role_id`,`parent_role_id`,`name`) values (1,NULL,'Individual'),(2,NULL,'Company'),(3,1,'Owner/Investor'),(4,1,'Tenant'),(5,2,'Agent/Broker'),(6,2,'Upraiser'),(7,2,'Architect'),(8,2,'Builder'),(9,2,'Corporate Investor'),(10,2,'Developer'),(11,2,'Listing Administrator'),(12,2,'Mortage Broker'),(13,2,'Property/Assest Manager'),(14,2,'Researcher');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `cell_no` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `country_id` int(10) DEFAULT NULL,
  `city_id` int(10) DEFAULT NULL,
  `location_id` int(10) DEFAULT NULL,
  `profile_pic` varchar(50) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `listing_quota_id` int(10) DEFAULT '1',
  `user_status` tinyint(1) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

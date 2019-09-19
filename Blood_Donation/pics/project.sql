/*
Navicat MySQL Data Transfer

Source Server         : name
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : project

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-07-24 11:14:39
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `donate`
-- ----------------------------
DROP TABLE IF EXISTS `donate`;
CREATE TABLE `donate` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `blood` varchar(20) DEFAULT NULL,
  `udonate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of donate
-- ----------------------------
INSERT INTO `donate` VALUES ('1', 'AAsdddfff', 'a1347534', 'bneg', '5');
INSERT INTO `donate` VALUES ('2', 'ANMOL', '11324654', 'bpos', '2');

-- ----------------------------
-- Table structure for `donatedata`
-- ----------------------------
DROP TABLE IF EXISTS `donatedata`;
CREATE TABLE `donatedata` (
  `uid` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `needycontact` varchar(20) DEFAULT NULL,
  `needyname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of donatedata
-- ----------------------------
INSERT INTO `donatedata` VALUES ('123', '2017-07-13', 'bathinda', 'bathinda', 'needycontact', 'needyname');
INSERT INTO `donatedata` VALUES ('12345', '2017-07-22', 'bathinda', 'safasfs', 'needycontact', 'needyname');

-- ----------------------------
-- Table structure for `donor`
-- ----------------------------
DROP TABLE IF EXISTS `donor`;
CREATE TABLE `donor` (
  `donarid` varchar(20) DEFAULT NULL,
  `donarname` varchar(20) DEFAULT NULL,
  `bloodgroup` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of donor
-- ----------------------------
INSERT INTO `donor` VALUES ('121323', ' anmol', 'Apos', 'male', 'dasd', 'bathinda', 'aasd@gmail.com', '122333', '2017-07-19', 'pics/1500622348Lighthouse.jpg');
INSERT INTO `donor` VALUES ('ansndn', 'aasdsas', 'Apos', 'MALE', 'ADDA', 'BATHINDA', 'ADCAC', 'AAAS31', null, null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` varchar(20) NOT NULL DEFAULT '',
  `pwd` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `dos` date DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('aman', 'kaur', '89767576', 'donor', '2017-07-22');
INSERT INTO `users` VALUES ('anmol', 'singla', '12333223', 'needy', '2017-07-22');

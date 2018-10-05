/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : simpleforum

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2013-11-10 00:15:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `fcontent`
-- ----------------------------
DROP TABLE IF EXISTS `fcontent`;
CREATE TABLE `fcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idforum` int(11) DEFAULT NULL,
  `idthread` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fcontent
-- ----------------------------
INSERT INTO `fcontent` VALUES ('1', null, '1', '1', 'Muantabssss', null);
INSERT INTO `fcontent` VALUES ('2', null, '1', '0', 'Hahay', null);
INSERT INTO `fcontent` VALUES ('3', null, '1', '0', 'Hahay Masa Sih', null);
INSERT INTO `fcontent` VALUES ('4', null, '3', '0', 'Wah Enak Tuh Ayam Gan', null);
INSERT INTO `fcontent` VALUES ('5', null, '3', '0', 'Masa Sih', null);
INSERT INTO `fcontent` VALUES ('6', null, '5', '0', 'Makan Donk', null);
INSERT INTO `fcontent` VALUES ('7', null, '3', '4', 'Mana Hayam Urang', null);
INSERT INTO `fcontent` VALUES ('8', null, '6', '4', 'Buah Beungeut Sia', null);
INSERT INTO `fcontent` VALUES ('9', null, '6', '4', 'asd', '2013-11-09');
INSERT INTO `fcontent` VALUES ('10', null, '4', '4', 'Ane Kagak tau Gan ', '2013-11-10');

-- ----------------------------
-- Table structure for `fdisplay`
-- ----------------------------
DROP TABLE IF EXISTS `fdisplay`;
CREATE TABLE `fdisplay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fdisplay
-- ----------------------------
INSERT INTO `fdisplay` VALUES ('1', 'lounge', '1');
INSERT INTO `fdisplay` VALUES ('2', 'Komputer', '2');
INSERT INTO `fdisplay` VALUES ('3', 'Joke', '3');
INSERT INTO `fdisplay` VALUES ('4', 'Politik', '4');
INSERT INTO `fdisplay` VALUES ('5', 'Budaya', '5');
INSERT INTO `fdisplay` VALUES ('6', 'Hoby', '6');
INSERT INTO `fdisplay` VALUES ('7', 'Stuff', '7');
INSERT INTO `fdisplay` VALUES ('8', 'AMH', '8');

-- ----------------------------
-- Table structure for `fthread`
-- ----------------------------
DROP TABLE IF EXISTS `fthread`;
CREATE TABLE `fthread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idforum` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fthread
-- ----------------------------
INSERT INTO `fthread` VALUES ('1', '1', 'Makan cau', 'Wah Muantabs', '2013-11-09', '1');
INSERT INTO `fthread` VALUES ('3', '1', 'Makan Ayam', 'Gan Enak Loh Ayamnya', null, '0');
INSERT INTO `fthread` VALUES ('2', '1', 'Orang GAntenk', 'Purchasing a template license for 8.00 GBP (at time of writing around 12 USD) gives you the right to remove any branding including links, logos and source tags relating to ZyPOP. As well as waiving the attribution requirement, your payment will also help us provide continued support for users as well as creating new web templates. Find out more about how to buy at the licensing page on our website which can be accessed at', '2013-11-12', '2');
INSERT INTO `fthread` VALUES ('4', '2', 'Harga Komputer', 'Gan Berapa Harga CPU SEKARANG', null, '0');
INSERT INTO `fthread` VALUES ('5', '1', 'Makan Saya', 'Ok Boleh Deh', null, '0');
INSERT INTO `fthread` VALUES ('6', '3', 'Buah Apa YAng GAnteng', 'Buah Apa YAng GAnteng', null, '4');

-- ----------------------------
-- Table structure for `fuser`
-- ----------------------------
DROP TABLE IF EXISTS `fuser`;
CREATE TABLE `fuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fuser
-- ----------------------------
INSERT INTO `fuser` VALUES ('1', 'Malik', 'user', 'user');
INSERT INTO `fuser` VALUES ('2', 'user', 'user', 'user');
INSERT INTO `fuser` VALUES ('3', 'user', 'user', 'user');
INSERT INTO `fuser` VALUES ('4', 'user', 'user2', 'user');

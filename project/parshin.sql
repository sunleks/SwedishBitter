/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50726
Source Host           : 127.0.0.1:3306
Source Database       : parshin

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-07-11 14:09:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cities
-- ----------------------------
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `cities` varchar(256) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cities
-- ----------------------------
INSERT INTO `cities` VALUES ('1', 'Москва');
INSERT INTO `cities` VALUES ('2', 'Смоленск');
INSERT INTO `cities` VALUES ('3', 'Велиж');
INSERT INTO `cities` VALUES ('4', 'Магадан');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  KEY `id` (`id_country`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('Андрей', '56', '2');
INSERT INTO `users` VALUES ('Алексей', '25', '4');
INSERT INTO `users` VALUES ('Оля', '30', '3');
INSERT INTO `users` VALUES ('Иван', '56', '1');
INSERT INTO `users` VALUES ('Олег', '24', '3');
INSERT INTO `users` VALUES ('Дима', '15', '1');
SET FOREIGN_KEY_CHECKS=1;

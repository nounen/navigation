/*
Navicat MySQL Data Transfer

Source Server         : bash
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : laravel5.5_admin

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-03-24 23:47:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `root_id` int(11) NOT NULL DEFAULT '0' COMMENT '根id',
  `level` int(11) NOT NULL DEFAULT '1',
  `max_level` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '0', '1', '1', '3', '潜力平台', '1', '2018-03-22 22:21:50', '2018-03-22 14:41:57', null);
INSERT INTO `category` VALUES ('2', '0', '2', '1', '3', '主流B2C', '2', '2018-03-22 22:22:23', '2018-03-22 22:22:26', null);
INSERT INTO `category` VALUES ('3', '0', '3', '1', '2', '亚马逊', '3', '2018-03-22 22:22:47', '2018-03-22 22:22:51', null);
INSERT INTO `category` VALUES ('4', '0', '4', '1', '1', '左侧导航', '999', '2018-03-23 21:10:44', '2018-03-23 21:10:46', null);
INSERT INTO `category` VALUES ('5', '1', '1', '2', '0', '主力平台1', '1', '2018-03-23 21:17:37', '2018-03-23 21:17:38', null);
INSERT INTO `category` VALUES ('6', '1', '1', '2', '0', '主力平台2', '2', '2018-03-23 21:18:29', '2018-03-24 04:19:45', null);
INSERT INTO `category` VALUES ('7', '2', '2', '2', '0', '主流一', '1', '2018-03-23 21:19:24', '2018-03-23 15:33:37', null);
INSERT INTO `category` VALUES ('8', '2', '2', '2', '0', '主流二', '2', '2018-03-23 21:19:35', '2018-03-23 21:19:37', null);
INSERT INTO `category` VALUES ('10', '1', '1', '2', '0', '主流平台3', '3', '2018-03-23 14:49:27', '2018-03-24 15:38:19', null);
INSERT INTO `category` VALUES ('11', '5', '1', '3', '0', '主力平台1-level3-001', '1', '2018-03-23 15:09:31', '2018-03-23 15:09:31', null);
INSERT INTO `category` VALUES ('12', '7', '2', '3', '0', '主流一 -- Sub1', '1', '2018-03-23 15:33:49', '2018-03-23 15:34:08', null);
INSERT INTO `category` VALUES ('13', '3', '3', '2', '0', '亚马逊sub1', '1', '2018-03-23 15:35:04', '2018-03-23 15:35:04', null);
INSERT INTO `category` VALUES ('14', '3', '3', '2', '0', '亚马逊sub2', '2', '2018-03-23 15:35:10', '2018-03-23 15:35:10', null);
INSERT INTO `category` VALUES ('15', '5', '1', '3', '0', '主力平台1-level3-002', '2', '2018-03-24 04:22:11', '2018-03-24 04:22:11', null);
INSERT INTO `category` VALUES ('16', '3', '3', '2', '0', '亚马逊sub3', '3', '2018-03-24 11:52:14', '2018-03-24 11:52:14', null);
INSERT INTO `category` VALUES ('17', '3', '3', '2', '0', '亚马逊sub4', '4', '2018-03-24 11:52:21', '2018-03-24 11:52:21', null);
INSERT INTO `category` VALUES ('18', '3', '3', '2', '0', '亚马逊sub5', '5', '2018-03-24 11:52:26', '2018-03-24 11:52:26', null);
INSERT INTO `category` VALUES ('19', '3', '3', '2', '0', '亚马逊sub6', '6', '2018-03-24 11:52:35', '2018-03-24 11:52:35', null);
INSERT INTO `category` VALUES ('20', '3', '3', '2', '0', '亚马逊su7', '7', '2018-03-24 11:52:43', '2018-03-24 11:52:43', null);
INSERT INTO `category` VALUES ('21', '3', '3', '2', '0', '亚马逊sub8', '8', '2018-03-24 11:52:48', '2018-03-24 11:52:48', null);
INSERT INTO `category` VALUES ('22', '3', '3', '2', '0', '亚马逊sub9', '9', '2018-03-24 11:52:54', '2018-03-24 11:52:54', null);
INSERT INTO `category` VALUES ('23', '3', '3', '2', '0', '亚马逊sub10', '10', '2018-03-24 11:53:02', '2018-03-24 11:53:02', null);
INSERT INTO `category` VALUES ('24', '3', '3', '2', '0', '亚马逊sub11', '11', '2018-03-24 11:53:10', '2018-03-24 11:53:10', null);
INSERT INTO `category` VALUES ('25', '3', '3', '2', '0', '亚马逊sub12', '12', '2018-03-24 11:53:15', '2018-03-24 11:53:15', null);
INSERT INTO `category` VALUES ('26', '3', '3', '2', '0', '亚马逊sub13', '13', '2018-03-24 11:53:20', '2018-03-24 11:53:20', null);
INSERT INTO `category` VALUES ('27', '3', '3', '2', '0', '亚马逊sub14', '14', '2018-03-24 11:53:26', '2018-03-24 11:53:26', null);
INSERT INTO `category` VALUES ('28', '3', '3', '2', '0', '亚马逊sub15', '15', '2018-03-24 11:53:31', '2018-03-24 11:53:31', null);
INSERT INTO `category` VALUES ('29', '1', '1', '2', '0', '主流平台4', '4', '2018-03-24 15:38:03', '2018-03-24 15:38:09', '2018-03-24 15:38:09');

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '11', '百度edit', 'https://baidu.com', '1', '2018-03-24 11:39:39', '2018-03-24 04:09:38', null);
INSERT INTO `link` VALUES ('2', '11', '谷歌', 'https://www.google.com', '2', '2018-03-24 04:01:57', '2018-03-24 04:01:57', null);
INSERT INTO `link` VALUES ('3', '11', '鸭子论坛', 'https://www.yaiz.com', '3', '2018-03-24 04:04:50', '2018-03-24 04:13:22', '2018-03-24 04:13:22');
INSERT INTO `link` VALUES ('4', '4', '左1', 'https://www.left-one.com', '1', '2018-03-24 04:36:28', '2018-03-24 04:36:28', null);
INSERT INTO `link` VALUES ('5', '4', '左2', 'https://www.left-one.com', '2', '2018-03-24 09:38:05', '2018-03-24 09:38:05', null);
INSERT INTO `link` VALUES ('6', '4', '左3', 'https://www.left-one.com', '3', '2018-03-24 09:38:13', '2018-03-24 09:38:13', null);
INSERT INTO `link` VALUES ('7', '4', '左4', 'https://www.left-one.com', '4', '2018-03-24 09:38:22', '2018-03-24 09:38:22', null);
INSERT INTO `link` VALUES ('8', '4', '左5', 'https://www.left-one.com', '5', '2018-03-24 09:38:29', '2018-03-24 09:38:29', null);
INSERT INTO `link` VALUES ('9', '13', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('10', '13', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('11', '13', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('12', '13', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('13', '13', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('14', '13', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('15', '13', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('16', '17', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('17', '17', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('18', '17', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('19', '17', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('20', '17', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('21', '17', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('22', '17', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('23', '18', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('24', '18', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('25', '18', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('26', '18', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('27', '18', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('28', '18', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('29', '18', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('30', '16', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('31', '16', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('32', '16', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('33', '16', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('34', '16', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('35', '16', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('36', '16', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('37', '19', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('38', '19', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('39', '19', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('40', '19', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('41', '19', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('42', '19', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('43', '19', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('44', '20', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('45', '20', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('46', '20', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('47', '20', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('48', '20', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('49', '20', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('50', '20', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('51', '21', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('52', '21', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('53', '21', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('54', '21', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('55', '21', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('56', '21', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('57', '21', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('58', '22', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('59', '22', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('60', '22', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('61', '22', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('62', '22', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('63', '22', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('64', '22', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('65', '23', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('66', '23', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('67', '23', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('68', '23', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('69', '23', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('70', '23', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('71', '23', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('72', '24', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('73', '24', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('74', '24', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('75', '24', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('76', '24', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('77', '24', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('78', '24', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('79', '25', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('80', '25', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('81', '25', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('82', '25', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('83', '25', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('84', '25', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('85', '25', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('86', '26', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('87', '26', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('88', '26', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('89', '26', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('90', '26', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('91', '26', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('92', '26', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('93', '27', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('94', '27', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('95', '27', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('96', '27', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('97', '27', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('98', '27', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('99', '27', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('100', '28', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('101', '28', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('102', '28', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('103', '28', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('104', '28', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('105', '28', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('106', '28', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('107', '14', '亚马逊链接1', 'http://www.amazon.com', '1', '2018-03-24 11:39:54', '2018-03-24 11:39:54', null);
INSERT INTO `link` VALUES ('108', '14', '亚马逊链接2', 'http://www.amazon.com', '2', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('109', '14', '亚马逊链接3', 'http://www.amazon.com', '3', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('110', '14', '亚马逊链接4', 'http://www.amazon.com', '4', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('111', '14', '亚马逊链接5', 'http://www.amazon.com', '5', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('112', '14', '亚马逊链接6', 'http://www.amazon.com', '6', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);
INSERT INTO `link` VALUES ('113', '14', '亚马逊链接7', 'http://www.amazon.com', '7', '2018-03-24 11:40:06', '2018-03-24 11:40:06', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('11', '2017_12_23_032737_create_tag', '1');
INSERT INTO `migrations` VALUES ('12', '2018_03_22_135820_create_category', '2');
INSERT INTO `migrations` VALUES ('13', '2018_03_22_140201_create_link', '2');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('0000000001', '标题', '关键词, 关键词2', '描述update', '2018-03-24 05:45:32', '2018-03-24 05:46:10', null);

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `article_count` int(11) NOT NULL DEFAULT '0' COMMENT '关联文章数量',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('1', '标签1', '0', '0', '1', '2018-01-22 13:03:52', '2018-01-22 13:03:52', null);
INSERT INTO `tag` VALUES ('2', '标签2', '0', '0', '1', '2018-01-22 13:03:58', '2018-01-22 13:03:58', null);
INSERT INTO `tag` VALUES ('3', '12345', '0', '0', '1', '2018-01-22 13:17:38', '2018-01-22 13:17:38', null);
INSERT INTO `tag` VALUES ('4', 'PHP', '0', '0', '1', '2018-01-22 13:30:09', '2018-01-22 13:30:09', null);
INSERT INTO `tag` VALUES ('5', '11', '0', '0', '1', '2018-01-22 13:36:21', '2018-01-22 13:36:21', null);
INSERT INTO `tag` VALUES ('6', 'mysql', '0', '0', '1', '2018-01-22 13:39:51', '2018-01-22 13:39:51', null);
INSERT INTO `tag` VALUES ('7', '1', '0', '0', '1', '2018-01-22 13:40:00', '2018-01-25 14:13:33', '2018-01-25 14:13:33');
INSERT INTO `tag` VALUES ('8', '2', '2', '0', '1', '2018-01-22 13:40:44', '2018-01-22 13:40:44', null);
INSERT INTO `tag` VALUES ('9', '222', '222', '0', '1', '2018-01-25 13:48:44', '2018-01-25 13:54:23', '2018-01-25 13:54:23');
INSERT INTO `tag` VALUES ('10', 'jj', '3', '0', '1', '2018-01-25 14:14:28', '2018-01-25 14:14:28', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@qq.com', '$2y$10$beWkYAiuI2TavPsa.yuGB.xALUleLkkbp.q6TPYXB9HC5Me4jL/SG', 'MOTfXDdOGFtDEHtvRzNkl9RlWyjatHerDPzZcwWvLFYQeUepRWwrZsBEJbjp', '2018-01-22 13:03:41', '2018-01-22 13:03:41');

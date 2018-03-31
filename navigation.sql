/*
Navicat MySQL Data Transfer

Source Server         : bash
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : navigation

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-03-29 19:53:16
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '0', '1', '1', '2', '潜力平台', '1', '2018-03-22 22:21:50', '2018-03-22 14:41:57', null);
INSERT INTO `category` VALUES ('2', '0', '2', '1', '2', '主流B2C', '2', '2018-03-22 22:22:23', '2018-03-22 22:22:26', null);
INSERT INTO `category` VALUES ('3', '0', '3', '1', '2', '亚马逊', '3', '2018-03-22 22:22:47', '2018-03-22 22:22:51', null);
INSERT INTO `category` VALUES ('4', '0', '4', '1', '1', '左侧导航', '999', '2018-03-23 21:10:44', '2018-03-23 21:10:46', null);
INSERT INTO `category` VALUES ('5', '1', '1', '2', '0', '平台1', '1', '2018-03-28 14:03:13', '2018-03-28 14:03:14', null);
INSERT INTO `category` VALUES ('6', '1', '1', '2', '0', '平台2', '2', '2018-03-28 14:03:20', '2018-03-28 14:03:20', null);
INSERT INTO `category` VALUES ('7', '1', '1', '2', '0', '平台3', '3', '2018-03-28 14:03:26', '2018-03-28 14:03:26', null);
INSERT INTO `category` VALUES ('8', '1', '1', '2', '0', '平台4', '4', '2018-03-28 14:03:33', '2018-03-28 14:03:33', null);
INSERT INTO `category` VALUES ('9', '1', '1', '2', '0', '平台5', '5', '2018-03-28 14:03:40', '2018-03-28 14:03:40', null);
INSERT INTO `category` VALUES ('10', '2', '2', '2', '0', '主流1', '1', '2018-03-28 14:04:57', '2018-03-28 14:04:57', null);
INSERT INTO `category` VALUES ('11', '2', '2', '2', '0', '主流2', '2', '2018-03-28 14:05:02', '2018-03-28 14:05:02', null);
INSERT INTO `category` VALUES ('12', '2', '2', '2', '0', '主流3', '3', '2018-03-28 14:05:07', '2018-03-28 14:05:07', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '5', '平台1链接1', 'http://www.baidu.com', '1', '2018-03-28 14:04:12', '2018-03-28 14:06:22', null);
INSERT INTO `link` VALUES ('2', '5', '平台1链接2', 'http://www.baidu.com', '2', '2018-03-28 14:04:47', '2018-03-28 14:06:06', null);
INSERT INTO `link` VALUES ('3', '6', '平台2链接1', 'http://www.test.com', '1', '2018-03-28 14:05:35', '2018-03-28 14:05:35', null);
INSERT INTO `link` VALUES ('4', '6', '平台2链接2', 'http://www.baidu.com', '2', '2018-03-28 14:05:44', '2018-03-28 14:05:44', null);
INSERT INTO `link` VALUES ('5', '6', '平台2链接3', 'http://www.baidu.com', '3', '2018-03-28 14:05:55', '2018-03-28 14:05:55', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'admin@qq.com', '$2y$10$beWkYAiuI2TavPsa.yuGB.xALUleLkkbp.q6TPYXB9HC5Me4jL/SG', 'yUdjGUYPWt3z18emgqL0OtMTu50XrLtSza7cGMVVoXFU6nvyGgyYmgVG3vMQ', '2018-01-22 13:03:41', '2018-01-22 13:03:41');

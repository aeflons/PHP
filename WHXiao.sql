/*
 Navicat MySQL Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:3306
 Source Schema         : WHXiao

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 16/05/2019 18:16:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL COMMENT '轮播图',
  `type` int(8) unsigned zerofill NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='轮播图';

-- ----------------------------
-- Table structure for series
-- ----------------------------
DROP TABLE IF EXISTS `series`;
CREATE TABLE `series` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '系列id',
  `series_name` char(255) NOT NULL COMMENT '系列名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='系列';

-- ----------------------------
-- Records of series
-- ----------------------------
BEGIN;
INSERT INTO `series` VALUES (1, '红木系列');
INSERT INTO `series` VALUES (2, '沙发系列');
INSERT INTO `series` VALUES (3, '柜子系列');
INSERT INTO `series` VALUES (4, '店主推荐');
INSERT INTO `series` VALUES (5, '新品上市');
COMMIT;

-- ----------------------------
-- Table structure for shop_detail
-- ----------------------------
DROP TABLE IF EXISTS `shop_detail`;
CREATE TABLE `shop_detail` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '名称',
  `specifacal` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '特点',
  `introduce` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '详情介绍',
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '图片地址',
  `series_id` int(11) NOT NULL COMMENT '系列id',
  `type` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='详情';

-- ----------------------------
-- Records of shop_detail
-- ----------------------------
BEGIN;
INSERT INTO `shop_detail` VALUES (1, '大富豪客厅', '细腻', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (2, '大富豪客厅', '细腻', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (3, '大富豪客厅2', '细腻1', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (4, '大富豪客厅2', '细腻1', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (5, '大富豪客厅2', '细腻1', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (6, '大富豪客厅3', '细腻4', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (7, '大富豪客厅3', '细腻4', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (8, '大富豪客厅3', '细腻4', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (9, '大富豪客厅5', '细腻5', '非洲黄花梨5', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (10, '大富豪客厅5', '细腻5', '非洲黄花梨5', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (11, '大富豪客厅5', '细腻5', '非洲黄花梨5', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (12, '大富豪客厅5', '细腻5', '非洲黄花梨5', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (13, '大富豪客厅5', '细腻5', '非洲黄花梨5', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (14, '大富豪客厅5', '细腻5', '非洲黄花梨5', 'http://localhost/image/banner_01.jpg', 5, 1);
INSERT INTO `shop_detail` VALUES (15, '红木001', '美观,结实耐用', '非洲红木1', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (16, '红木002', '美观,结实耐用', '非洲红木2', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (17, '红木003', '美观,结实耐用', '非洲红木3', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (18, '红木004', '美观,结实耐用', '非洲红木4', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (19, '红木005', '美观,结实耐用', '非洲红木5', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (20, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (21, '红木007', '美观,结实耐用', '非洲红木7', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (22, '大富豪客厅', '细腻', '非洲黄花梨', 'http://localhost/image/banner_01.jpg', 4, 1);
INSERT INTO `shop_detail` VALUES (23, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (24, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (25, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (26, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (27, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (28, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (29, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (30, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (31, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
INSERT INTO `shop_detail` VALUES (32, '红木006', '美观,结实耐用', '非洲红木6', 'http://localhost/image/banner_01.jpg', 1, 1);
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 'admin', '12345678');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

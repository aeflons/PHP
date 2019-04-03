/*
 Navicat MySQL Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:3306
 Source Schema         : XiuXiu

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 03/04/2019 20:27:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(16) NOT NULL AUTO_INCREMENT COMMENT 'book id',
  `name` varchar(255) DEFAULT NULL COMMENT '书名',
  `author` varchar(255) DEFAULT NULL COMMENT '作者',
  `intro` text COMMENT '说明',
  `icon` varchar(255) DEFAULT NULL COMMENT '封面图',
  `date` int(16) DEFAULT NULL COMMENT '上传时间',
  `type` varchar(255) DEFAULT NULL COMMENT '类型标签',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book
-- ----------------------------
BEGIN;
INSERT INTO `book` VALUES (1, '逍遥小散仙', '迷男', '　迷男大大的又一部力作，一曲香艳的仙侠之歌。\n　　散者，即无拘无束，逍遥自在。散仙者，诸仙之末，或逍遥于深山海岛，或淡隐于街井闹市，低者不过丹卜之流，高者却堪比大罗太乙，鸿蒙至今，流传着无数光怪陆离的奇人异事。\n\n　　散仙，似仙非仙、是人超人的特殊身分，而崔小玄正是玄教内的除魔小散仙，身负先天太玄的崔小玄正是不属九幽十类，不入六道轮回，不在三界五行的太古散仙玄狐转世。\n　　和其他散仙的小小不同之处，便是他醉心于异宝新术的发明，不过，超越常规的发明总需要付点代价，而最常碰到的代价就是……无敌将军大暴走啦！！！\n　　日月新帝大兴土木建造迷楼，悄悄吸取十九灵脉精华，玄教查出这迷楼可能源自於叛教逆徒之手，为了维持天下苍生万物，玄教教主特指派如意仙娘崔采婷入京，而这回，下山除魔的名单上也多了从未见识过花花世界的崔小玄……\n　　且看一个贪玩小散仙遨游天地，游戏于诸多妖娆之中香艳的故事。', NULL, 12345678, NULL);
COMMIT;

-- ----------------------------
-- Table structure for chapter
-- ----------------------------
DROP TABLE IF EXISTS `chapter`;
CREATE TABLE `chapter` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT COMMENT '章节id',
  `title` varchar(255) DEFAULT NULL COMMENT '章节名',
  `content` text COMMENT '内容',
  `time` datetime DEFAULT NULL COMMENT '更新时间',
  `book_id` int(16) DEFAULT NULL COMMENT '书籍id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4283 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'type id',
  `name` varchar(255) DEFAULT NULL COMMENT '标签名称',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;

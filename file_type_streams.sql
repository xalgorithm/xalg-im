/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50616
 Source Host           : localhost
 Source Database       : newXsite

 Target Server Type    : MySQL
 Target Server Version : 50616
 File Encoding         : utf-8

 Date: 02/11/2014 10:50:19 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `file_type_streams`
-- ----------------------------
DROP TABLE IF EXISTS `file_type_streams`;
CREATE TABLE `file_type_streams` (
  `type` varchar(255) NOT NULL DEFAULT '' COMMENT 'The machine name of the file type.',
  `stream` varchar(255) NOT NULL DEFAULT '' COMMENT 'Streams mapped to this file type.',
  KEY `0` (`type`),
  KEY `1` (`stream`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='Maps mimetypes to file types.';

SET FOREIGN_KEY_CHECKS = 1;

/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : pakok_db

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 13/08/2022 11:02:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kec
-- ----------------------------
DROP TABLE IF EXISTS `kec`;
CREATE TABLE `kec`  (
  `id_kec` int NOT NULL AUTO_INCREMENT,
  `nm_kec` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kec`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kec
-- ----------------------------
INSERT INTO `kec` VALUES (1, 'Barru');
INSERT INTO `kec` VALUES (2, 'Balusu');
INSERT INTO `kec` VALUES (3, 'Mallusetasi');
INSERT INTO `kec` VALUES (4, 'Pujananting');
INSERT INTO `kec` VALUES (5, 'Soppeng Riaja');
INSERT INTO `kec` VALUES (6, 'Tanete Riaja');
INSERT INTO `kec` VALUES (7, 'Tanete Rilau');
INSERT INTO `kec` VALUES (8, NULL);

-- ----------------------------
-- Table structure for tb_akun
-- ----------------------------
DROP TABLE IF EXISTS `tb_akun`;
CREATE TABLE `tb_akun`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_nm` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_hp` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `posisi` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_akun
-- ----------------------------
INSERT INTO `tb_akun` VALUES (5, 'admin', 'admin', '$2y$10$5GzwKqOz8jLF2U5lNDGSJeGFHHinj0CRlKfglA2dmdsn2gzI2DkZO', 'admin@admin.com', '987654321', 'Kelompok Tani');
INSERT INTO `tb_akun` VALUES (6, 'admin2', 'admin2', '$2y$10$AmHXWNSZKUCWbzKn5a97veFbHAy0ht2M1HcdzykJKyh4OIwV9yS9q', 'admin@admin.com', '987654321', 'Kelompok Tani');

-- ----------------------------
-- Table structure for tb_klptani
-- ----------------------------
DROP TABLE IF EXISTS `tb_klptani`;
CREATE TABLE `tb_klptani`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_klp_tani` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_hp` int NULL DEFAULT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pass` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_klptani
-- ----------------------------
INSERT INTO `tb_klptani` VALUES (1, 'Pakoko', 'Sumpang', 2147483647, 'pakoko', 'pakoko');

-- ----------------------------
-- Table structure for tb_lahan
-- ----------------------------
DROP TABLE IF EXISTS `tb_lahan`;
CREATE TABLE `tb_lahan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_akun` int NULL DEFAULT NULL,
  `nm_lengkap` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_kec` int NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `L_Lahan` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `J_Tenaga` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_hp` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_lahan
-- ----------------------------
INSERT INTO `tb_lahan` VALUES (1, 5, 'Muhammad Faizal Rajib', 1, 'Barru', '100 x 100', '2', '081257325873');
INSERT INTO `tb_lahan` VALUES (6, 6, 'Faizal Rajib', 3, 'Balusu', '100 x 100', '3', '0987655421');

-- ----------------------------
-- View structure for v_master
-- ----------------------------
DROP VIEW IF EXISTS `v_master`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_master` AS SELECT
	tb_lahan.*,
	kec.nm_kec
FROM	
	tb_lahan
LEFT JOIN kec ON tb_lahan.id_kec = kec.id_kec
ORDER BY tb_lahan.id ASC ;

SET FOREIGN_KEY_CHECKS = 1;

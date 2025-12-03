/*
 Navicat Premium Dump SQL

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : sipri-unsil

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 30/11/2025 00:15:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for auditlog
-- ----------------------------
DROP TABLE IF EXISTS `auditlog`;
CREATE TABLE `auditlog`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pengguna` int NULL DEFAULT NULL,
  `aksi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `timestamp` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_pengguna`(`id_pengguna` ASC) USING BTREE,
  INDEX `idx_timestamp`(`timestamp` ASC) USING BTREE,
  CONSTRAINT `auditlog_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of auditlog
-- ----------------------------

-- ----------------------------
-- Table structure for checkinout
-- ----------------------------
DROP TABLE IF EXISTS `checkinout`;
CREATE TABLE `checkinout`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int NOT NULL,
  `tipe` tinyint NOT NULL,
  `waktu` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_peminjaman`(`id_peminjaman` ASC) USING BTREE,
  INDEX `idx_tipe`(`tipe` ASC) USING BTREE,
  CONSTRAINT `checkinout_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of checkinout
-- ----------------------------

-- ----------------------------
-- Table structure for fasilitas
-- ----------------------------
DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE `fasilitas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tipe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kondisi` tinyint NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fasilitas
-- ----------------------------

-- ----------------------------
-- Table structure for jadwal_harian
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_harian`;
CREATE TABLE `jadwal_harian`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uniq_jadwal`(`id_peminjaman` ASC, `tanggal` ASC) USING BTREE,
  CONSTRAINT `jadwal_harian_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jadwal_harian
-- ----------------------------

-- ----------------------------
-- Table structure for kerusakan
-- ----------------------------
DROP TABLE IF EXISTS `kerusakan`;
CREATE TABLE `kerusakan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `foto_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_perbaikan` tinyint NOT NULL DEFAULT 1,
  `tanggal_lapor` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_peminjaman`(`id_peminjaman` ASC) USING BTREE,
  CONSTRAINT `kerusakan_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kerusakan
-- ----------------------------

-- ----------------------------
-- Table structure for lampiran
-- ----------------------------
DROP TABLE IF EXISTS `lampiran`;
CREATE TABLE `lampiran`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int NOT NULL,
  `nama_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tipe_file` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `path_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `uploaded_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_peminjaman`(`id_peminjaman` ASC) USING BTREE,
  CONSTRAINT `lampiran_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lampiran
-- ----------------------------

-- ----------------------------
-- Table structure for peminjaman
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `durasi_menit` int GENERATED ALWAYS AS ((((time_to_sec(`waktu_selesai`) - time_to_sec(`waktu_mulai`)) / 60) + ((to_days(`tanggal_selesai`) - to_days(`tanggal_mulai`)) * 1440))) STORED NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `id_pengguna` int NOT NULL,
  `id_ruang` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_pengguna`(`id_pengguna` ASC) USING BTREE,
  INDEX `id_ruang`(`id_ruang` ASC) USING BTREE,
  INDEX `idx_tanggal`(`tanggal_mulai` ASC, `tanggal_selesai` ASC) USING BTREE,
  INDEX `idx_status`(`status` ASC) USING BTREE,
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` tinyint NOT NULL,
  `no_telepon` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uniq_no_telepon`(`no_telepon` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES (1, 'Bayu Slamet H', 'bayuslameth', '$2y$10$r.m36O218iNGndVICtfpt.XbCMSbzrxcMsFrIfaW1g/UhyK1NI7oy', 1, '085624075483', '2025-11-29 21:22:54');

-- ----------------------------
-- Table structure for persetujuan
-- ----------------------------
DROP TABLE IF EXISTS `persetujuan`;
CREATE TABLE `persetujuan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int NOT NULL,
  `id_penyetuju` int NOT NULL,
  `keputusan` tinyint NOT NULL,
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `waktu_persetujuan` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uniq_peminjaman_penyetuju`(`id_peminjaman` ASC, `id_penyetuju` ASC) USING BTREE,
  INDEX `id_penyetuju`(`id_penyetuju` ASC) USING BTREE,
  CONSTRAINT `persetujuan_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `persetujuan_ibfk_2` FOREIGN KEY (`id_penyetuju`) REFERENCES `pengguna` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of persetujuan
-- ----------------------------

-- ----------------------------
-- Table structure for ruang
-- ----------------------------
DROP TABLE IF EXISTS `ruang`;
CREATE TABLE `ruang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lokasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kapasitas` int NULL DEFAULT 0,
  `status` tinyint NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uniq_nama_ruang`(`nama_ruang` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ruang
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;

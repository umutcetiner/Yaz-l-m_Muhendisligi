/*
 Navicat Premium Data Transfer

 Source Server         : umut
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : eticaret

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 11/01/2019 23:20:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ayar
-- ----------------------------
DROP TABLE IF EXISTS `ayar`;
CREATE TABLE `ayar`  (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`ayar_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ayar
-- ----------------------------
INSERT INTO `ayar` VALUES (0, 'dimg/27551mac-phone.png', 'www.toros.edu.tr', 'U - Aa', 'Web Project ', 'eticaret, shopping, php, learning, student', 'Umut Çetiner And Ayşenur Çavcı', '05315541154', '05315541154', '-', 'ug.umut.cetiner@toros.edu.tr', 'Mersin', 'Pozcu', 'Toros Üniversitesi 45 Evler Kampusu', 'Sabah 8  Akşam 5', 'ayar_maps_api', 'ayar_analystic', 'ayar_zopima', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'ug.umut.cetiner@toros.edu.tr', 'ug.umut.cetiner@toros.edu.tr', '', '25', '1');

-- ----------------------------
-- Table structure for banka
-- ----------------------------
DROP TABLE IF EXISTS `banka`;
CREATE TABLE `banka`  (
  `banka_id` int(11) NOT NULL AUTO_INCREMENT,
  `banka_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `banka_iban` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `banka_hesapadsoyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`banka_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of banka
-- ----------------------------
INSERT INTO `banka` VALUES (1, 'Garanti Bankası', 'TR98755656564564546', 'Umut Çetiner', '1');
INSERT INTO `banka` VALUES (5, 'Ziraat Bankası', 'TR45646545646awrwerwerwer', 'Ayşenur Çavcı', '1');

-- ----------------------------
-- Table structure for favori
-- ----------------------------
DROP TABLE IF EXISTS `favori`;
CREATE TABLE `favori`  (
  `favori_id` int(11) NOT NULL AUTO_INCREMENT,
  `favori_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `favori_resim` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `favori_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `favori_durum` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`favori_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of favori
-- ----------------------------
INSERT INTO `favori` VALUES (30, '', 'dimg/favoriler/249461.png', 'FOOTBALL CLUB', '1');
INSERT INTO `favori` VALUES (31, '', 'dimg/favoriler/317572.png', 'WINTAGE HOUSE', '1');
INSERT INTO `favori` VALUES (32, '', 'dimg/favoriler/214383.png', 'AMERICAN EAGLE', '1');
INSERT INTO `favori` VALUES (33, '', 'dimg/favoriler/244104.png', 'JEFFERSON', '1');
INSERT INTO `favori` VALUES (34, '', 'dimg/favoriler/242916.png', 'ALIEN VALLEY', '1');
INSERT INTO `favori` VALUES (35, '', 'dimg/favoriler/312618.png', 'MC QUENN', '1');
INSERT INTO `favori` VALUES (36, '', 'dimg/favoriler/2459413.png', 'FORGED', '1');
INSERT INTO `favori` VALUES (37, '', 'dimg/favoriler/233667.png', 'LEVIS', '1');
INSERT INTO `favori` VALUES (38, '', 'dimg/favoriler/220885.png', 'CALVIN KLEIN', '1');
INSERT INTO `favori` VALUES (39, '', 'dimg/favoriler/260432.png', 'ARMANI JEANS', '1');
INSERT INTO `favori` VALUES (40, '', 'dimg/favoriler/2428018.png', 'WRANGLER', '1');
INSERT INTO `favori` VALUES (41, '', 'dimg/favoriler/2799517.png', 'U.S POLO', '1');

-- ----------------------------
-- Table structure for hakkimizda
-- ----------------------------
DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE `hakkimizda`  (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hakkimizda
-- ----------------------------
INSERT INTO `hakkimizda` VALUES (0, 'IGUANA-IGT', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Phasellus viverra viverra eros, eu laoreet leo iaculis vehicula. Nunc pretium volutpat neque, finibus fermentum neque pretium vel. In hac habitasse platea dictumst. Phasellus ipsum lacus, vehicula et fringilla a, dapibus ac mi. Nulla orci tortor, fringilla eget magna in, dictum consequat lectus. Sed tincidunt purus nec erat scelerisque pretium. Aliquam vehicula lacus vel lacus varius egestas.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '-', 'Site hakkında vizyon bilgileri buraya girilecektir.', 'Site hakkında misyon bilgileri buraya girilecektir.');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`kategori_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (2, 'Gömlekler', 0, 'gomlekler', 1, '0');
INSERT INTO `kategori` VALUES (3, 'Tişörtler', 5, 'tisortler', 2, '0');
INSERT INTO `kategori` VALUES (4, 'Pantolon', 0, 'pantolon', 3, '0');
INSERT INTO `kategori` VALUES (6, 'Bluz', 4, 'bluz', 5, '0');
INSERT INTO `kategori` VALUES (7, 'Şapkalar', 5, 'sapkalar', 3, '0');
INSERT INTO `kategori` VALUES (8, 'Ayakkabılar', 0, 'ayakkabilar', 2, '0');

-- ----------------------------
-- Table structure for kullanici
-- ----------------------------
DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE `kullanici`  (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `kullanici_resim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`kullanici_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 156 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kullanici
-- ----------------------------
INSERT INTO `kullanici` VALUES (147, '2017-07-08 15:21:45', 'dimg/adminler/27836indir.jpg', '123123123', 'umut', 'umut@umut.com', '08508408076', 'e10adc3949ba59abbe56e057f20f883e', 'UMUT ', '', '', '', '', '5', 1);
INSERT INTO `kullanici` VALUES (153, '2017-07-31 11:31:57', '', '', 'serkan', 'user@user.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'Furkan Gözükara', '', '', '', '', '1', 1);
INSERT INTO `kullanici` VALUES (155, '2019-01-11 11:46:25', '', '', 'Ayşenur', 'ayse@ayse.com', '05307776633', 'ea979cac7c47d24004ba71be80675615', 'AYSENUR CAVCI', '', '', '', '', '1', 1);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ust` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`menu_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, '0', 'Hakkımızda', '', 'hakkimizda', 2, '1', 'hakkimizda');
INSERT INTO `menu` VALUES (2, '0', 'İletişim', '', 'iletisim', 25, '1', 'iletisim');
INSERT INTO `menu` VALUES (4, '0', 'Kategoriler', '', 'kategoriler', 3, '1', 'kategoriler');
INSERT INTO `menu` VALUES (12, '', 'ANASAYFA', '', 'index', 1, '1', 'anasayfa');

-- ----------------------------
-- Table structure for mesafeli
-- ----------------------------
DROP TABLE IF EXISTS `mesafeli`;
CREATE TABLE `mesafeli`  (
  `mesafeli_id` int(11) NOT NULL AUTO_INCREMENT,
  `mesafeli_baslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mesafeli_detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mesafeli_url` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`mesafeli_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for popular
-- ----------------------------
DROP TABLE IF EXISTS `popular`;
CREATE TABLE `popular`  (
  `popular_id` int(11) NOT NULL AUTO_INCREMENT,
  `popular_resim` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `popular_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `popular_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `popular_durum` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`popular_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for sepet
-- ----------------------------
DROP TABLE IF EXISTS `sepet`;
CREATE TABLE `sepet`  (
  `sepet_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  PRIMARY KEY (`sepet_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for siparis
-- ----------------------------
DROP TABLE IF EXISTS `siparis`;
CREATE TABLE `siparis`  (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_zaman` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `siparis_no` int(11) NULL DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9, 2) NOT NULL,
  `siparis_tip` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `siparis_banka` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `siparis_odeme` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`siparis_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 750013 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of siparis
-- ----------------------------
INSERT INTO `siparis` VALUES (750012, '2017-08-02 21:27:35', NULL, 153, 120.00, 'Banka Havalesi', 'Yapı Kredi', '0');

-- ----------------------------
-- Table structure for siparis_detay
-- ----------------------------
DROP TABLE IF EXISTS `siparis_detay`;
CREATE TABLE `siparis_detay`  (
  `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9, 2) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  PRIMARY KEY (`siparisdetay_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of siparis_detay
-- ----------------------------
INSERT INTO `siparis_detay` VALUES (11, 750012, 4, 25.00, 1);
INSERT INTO `siparis_detay` VALUES (12, 750012, 5, 95.00, 1);

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_link` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`slider_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (2, 'Slider 11', 'dimg/slider/288402407226276252954.jpg', 12, '', '1');
INSERT INTO `slider` VALUES (4, 'Slider 2', 'dimg/slider/29538315172733129852slide-2.jpg', 2, '', '1');
INSERT INTO `slider` VALUES (6, 'Slider 4', 'dimg/slider/27613272132172620462slide-4.jpg', 4, '', '1');
INSERT INTO `slider` VALUES (7, 'Erkek Deri Ayakkabı', 'dimg/slider/223472426820862202141.jpg', 1, '', '1');

-- ----------------------------
-- Table structure for urun
-- ----------------------------
DROP TABLE IF EXISTS `urun`;
CREATE TABLE `urun`  (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `urun_ad` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun_seourl` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun_detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` float(9, 2) NOT NULL,
  `urun_video` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun_keyword` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun_onecikar` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`urun_id`) USING BTREE,
  INDEX `kategori_id`(`kategori_id`) USING BTREE,
  CONSTRAINT `urun_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of urun
-- ----------------------------
INSERT INTO `urun` VALUES (18, 2, '2019-01-11 13:10:23', 'Gömlek 1 ', 'gomlek-1', '<p>mavi g&ouml;mlek dar kesim</p>\r\n', 59.99, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M85fOEJ21gA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'gomlek,mavi,dar', 100, '1', '0');
INSERT INTO `urun` VALUES (19, 2, '2019-01-11 13:11:02', 'Gömlek 2 ', 'gomlek-2', '<p>G&ouml;mlek siyah uzun kollu bol</p>\r\n', 50.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M85fOEJ21gA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'genis,gomlek', 50, '1', '0');
INSERT INTO `urun` VALUES (20, 2, '2019-01-11 13:14:24', 'gomlek 3', 'gomlek-3', '<p>lacivert,uzun,normal</p>\r\n', 90.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M85fOEJ21gA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'laci,vert', 75, '1', '0');
INSERT INTO `urun` VALUES (21, 2, '2019-01-11 13:15:26', 'Gomlek 4 ', 'gomlek-4', '<p>kahverengi,kısa kollu,ucuz</p>\r\n', 25.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M85fOEJ21gA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ucuz,kahve,gomlek', 20, '1', '0');
INSERT INTO `urun` VALUES (22, 8, '2019-01-11 13:16:36', 'Ayakkabı 1', 'ayakkabi-1', '<p>spor klasik siyah&nbsp;</p>\r\n', 150.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7bM5Eeyq0f8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'siyah,spor ', 120, '1', '0');
INSERT INTO `urun` VALUES (23, 8, '2019-01-11 13:17:15', 'Ayakkabı 2', 'ayakkabi-2', '<p>S&uuml;et,bilekli,bot</p>\r\n', 200.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7bM5Eeyq0f8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'a', 60, '1', '0');
INSERT INTO `urun` VALUES (24, 8, '2019-01-11 13:17:50', 'Ayakkabı 3', 'ayakkabi-3', '<p>Spor ayakkabı nike</p>\r\n', 350.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7bM5Eeyq0f8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'spor,ayakkabı,nike', 75, '1', '0');
INSERT INTO `urun` VALUES (25, 6, '2019-01-11 13:18:57', 'Bluz 1', 'bluz-1', '<p>mavi yarasa kol</p>\r\n', 60.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/myy1-BK-U-k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'bluz,mavi', 15, '1', '0');
INSERT INTO `urun` VALUES (26, 6, '2019-01-11 13:19:28', 'Bluz 2', 'bluz-2', '<p>sarı,yakalı,kısa</p>\r\n', 35.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/myy1-BK-U-k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'kısa,yakalı', 150, '1', '0');
INSERT INTO `urun` VALUES (27, 3, '2019-01-11 13:20:56', 'tsort1', 'tsort1', '<p>turuncu,kısa kollu</p>\r\n', 59.99, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AVKoau1TyDs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'turuncu,kısa', 50, '1', '0');
INSERT INTO `urun` VALUES (28, 3, '2019-01-11 13:21:52', 'tsort 2', 'tsort-2', '<p>siyah,logolu</p>\r\n', 99.99, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AVKoau1TyDs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'siyah,logo,tamam', 20, '1', '0');
INSERT INTO `urun` VALUES (29, 3, '2019-01-11 13:22:43', 'tsört3', 'tsort3', '<p>siyah,logolu,resim</p>\r\n', 70.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AVKoau1TyDs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'siyah,logo', 75, '1', '0');
INSERT INTO `urun` VALUES (30, 4, '2019-01-11 13:23:51', 'pantolon 1', 'pantolon-1', '<p>kahverengi,bolkesim</p>\r\n', 59.99, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AdKymGFJtLU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'kahverengi,bol', 79, '1', '0');
INSERT INTO `urun` VALUES (31, 4, '2019-01-11 13:24:37', 'pantolon 2', 'pantolon-2', '<p>kadın genişuzun</p>\r\n', 45.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AdKymGFJtLU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'kadın,siyah', 45, '1', '0');
INSERT INTO `urun` VALUES (32, 4, '2019-01-11 13:25:23', 'pantolon 3', 'pantolon-3', '<p>kareli erkek geniş</p>\r\n', 65.00, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AdKymGFJtLU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'kareli,uzun', 20, '1', '0');
INSERT INTO `urun` VALUES (33, 7, '2019-01-11 13:26:01', 'sapka 1', 'sapka-1', '<p>spor şapka</p>\r\n', 45.00, '', 'sapka,spor', 50, '1', '0');
INSERT INTO `urun` VALUES (34, 7, '2019-01-11 13:26:35', 'sapka 2', 'sapka-2', '<p>kovboy sapka</p>\r\n', 70.00, '', 'serif,kovboy', 50, '1', '0');

-- ----------------------------
-- Table structure for urunfoto
-- ----------------------------
DROP TABLE IF EXISTS `urunfoto`;
CREATE TABLE `urunfoto`  (
  `urunfoto_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimyol` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `urunfoto_sira` int(2) NOT NULL,
  `urunfoto_tur` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`urunfoto_id`) USING BTREE,
  INDEX `urun_id`(`urun_id`) USING BTREE,
  CONSTRAINT `urunfoto_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`urun_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 120 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of urunfoto
-- ----------------------------
INSERT INTO `urunfoto` VALUES (103, 18, 'dimg/urun/24922214222815129039gomlek1.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (104, 19, 'dimg/urun/29259307242125029861gomlek2.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (105, 20, 'dimg/urun/31230220402877924188gomlek3.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (106, 21, 'dimg/urun/22249300822879322180gomlek4.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (107, 22, 'dimg/urun/21592293412104121316ayakkabı1.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (108, 23, 'dimg/urun/24626231212817625254ayakkabı2.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (109, 24, 'dimg/urun/24558240112074829063ayakkabı3.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (110, 25, 'dimg/urun/22905259783032521221bluz1.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (111, 26, 'dimg/urun/21890203443135623429bluz2.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (112, 27, 'dimg/urun/23241200102937927416tsort1.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (113, 28, 'dimg/urun/30427295282036030206tsort2.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (114, 29, 'dimg/urun/25132269672456327790tsort3.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (115, 30, 'dimg/urun/26216239703078031497pantolon1.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (116, 31, 'dimg/urun/28176315352654823344pantolon2.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (117, 32, 'dimg/urun/31527229012714226749pantolon3.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (118, 33, 'dimg/urun/27860255982720328591sapka1.jpg', 0, NULL);
INSERT INTO `urunfoto` VALUES (119, 34, 'dimg/urun/23225248332664726003sapka2.jpg', 0, NULL);

-- ----------------------------
-- Table structure for yorumlar
-- ----------------------------
DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE `yorumlar`  (
  `yorum_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `yorum_onay` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT '0',
  PRIMARY KEY (`yorum_id`) USING BTREE,
  INDEX `urun_id`(`urun_id`) USING BTREE,
  INDEX `kullanici_id`(`kullanici_id`) USING BTREE,
  CONSTRAINT `yorumlar_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`urun_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `yorumlar_ibfk_2` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`kullanici_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of yorumlar
-- ----------------------------
INSERT INTO `yorumlar` VALUES (17, 155, 18, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', '2019-01-11 13:28:03', '0');
INSERT INTO `yorumlar` VALUES (18, 153, 18, 'Kaliteli uygun fiyata ürün', '2019-01-11 13:30:26', '0');

SET FOREIGN_KEY_CHECKS = 1;

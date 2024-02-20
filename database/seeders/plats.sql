-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 fév. 2024 à 15:20
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ocnamo`
--

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

DROP TABLE IF EXISTS `plats`;
CREATE TABLE IF NOT EXISTS `plats` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double(5,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fichier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plats_categories_id_foreign` (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `prix`, `description`, `fichier`, `created_at`, `updated_at`, `categories_id`) VALUES
(1, 'eu sapien cursus', 4.00, NULL, 'pt10.jpg', '2022-03-30 09:03:04', '2023-01-30 06:19:14', 1),
(2, 'justo lacinia eget tincidunt', 32.00, NULL, 'E1.jpg', '2022-11-17 12:51:01', '2023-08-22 05:40:54', 2),
(3, 'in faucibus orci', 30.00, NULL, 'd1.jpg', '2022-06-05 22:25:22', '2023-01-11 10:50:49', 4),
(4, 'nam ultrices libero non', 13.00, 'aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros', 'E2.jpg', '2022-10-21 07:41:40', '2023-10-21 10:47:27', 2),
(5, 'lorem vitae mattis nibh', 19.00, 'et magnis dis parturient montes nascetur ridiculus mus', 'E3.jpg', '2022-06-12 14:02:26', '2023-04-01 00:26:39', 2),
(6, 'nec euismod scelerisque quam', 24.00, 'libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse', 'b1.jpg', '2022-07-14 16:17:18', '2023-08-31 02:04:52', 5),
(7, 'elementum eu interdum eu tincidunt', 5.00, 'dui maecenas tristique est et tempus semper est quam pharetra magna ac', 'p1.jpg', '2022-07-28 21:24:15', '2023-09-01 16:07:31', 3),
(8, 'bibendum felis sed interdum venenatis', 3.00, NULL, 'pt12.jpg', '2022-09-29 13:11:48', '2023-05-06 10:45:03', 1),
(9, 'felis eu sapien', 15.00, 'cras in purus eu magna vulputate luctus cum sociis natoque penatibus et', 'b2.jpg', '2022-09-20 18:54:38', '2023-08-09 03:09:49', 5),
(10, 'dolor quis odio', 28.00, 'libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu', 'E10.jpg', '2022-04-12 05:56:04', '2023-11-18 10:44:04', 2),
(11, 'fringilla rhoncus mauris enim leo', 11.00, 'morbi odio odio elementum eu interdum eu tincidunt in', 'd2.jpg', '2022-03-16 17:02:48', '2023-02-03 19:58:04', 4),
(12, 'volutpat dui maecenas tristique est', 14.00, NULL, 'pt2.jpg', '2022-01-02 21:47:25', '2023-03-25 10:10:15', 1),
(13, 'amet consectetuer adipiscing', 4.00, 'at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet', 'b3.jpg', '2022-10-13 06:50:14', '2023-02-25 13:33:10', 5),
(14, 'vel est donec', 40.00, NULL, 'd3.jpg', '2022-08-31 09:45:41', '2023-03-26 17:23:46', 4),
(15, 'eu sapien cursus vestibulum', 9.00, 'non mauris morbi non lectus aliquam sit amet', 'E4.jpg', '2022-01-14 14:32:07', '2023-10-09 00:01:59', 2),
(16, 'imperdiet nullam orci pede venenatis', 38.00, 'in quis justo maecenas rhoncus aliquam lacus morbi quis tortor', 'E5.jpg', '2022-02-02 09:00:14', '2023-04-03 13:21:01', 2),
(17, 'justo nec condimentum neque sapien', 38.00, 'penatibus et magnis dis parturient montes nascetur ridiculus mus', 'pt3.jpg', '2022-06-29 06:34:38', '2023-12-12 00:21:20', 1),
(18, 'molestie hendrerit at', 7.00, 'penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis', 'b4.jpg', '2022-10-11 09:25:31', '2023-02-17 18:58:21', 5),
(19, 'ligula nec sem duis aliquam', 4.00, 'vel accumsan tellus nisi eu orci mauris lacinia', 'b5.jpg', '2022-12-02 07:13:23', '2023-05-22 11:13:52', 5),
(20, 'sed augue aliquam', 24.00, 'maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem', 'd4.jpg', '2022-06-30 08:01:22', '2023-06-06 16:48:48', 4),
(21, 'morbi vel lectus in', 14.00, 'sit amet cursus id turpis integer aliquet', 'pt4.jpg', '2022-04-12 16:03:28', '2023-01-14 19:11:47', 1),
(22, 'lectus suspendisse potenti', 3.00, 'ligula vehicula consequat morbi a ipsum integer a nibh in quis justo', 'p3.jpg', '2022-10-08 08:42:41', '2023-06-22 14:01:53', 3),
(23, 'purus sit amet nulla', 37.00, NULL, 'b6.jpg', '2022-10-06 05:01:47', '2023-10-24 04:30:47', 5),
(24, 'leo odio porttitor id consequat', 31.00, NULL, 'b7.jpg', '2022-06-12 16:38:16', '2023-02-21 23:11:14', 5),
(25, 'sit amet cursus', 28.00, 'non pretium quis lectus suspendisse potenti in eleifend quam a odio', 'p4.jpg', '2022-07-18 01:30:13', '2023-03-04 17:35:06', 3),
(26, 'cursus vestibulum proin eu', 7.00, 'orci vehicula condimentum curabitur in libero ut massa volutpat', 'p5.jpg', '2022-06-14 07:02:06', '2023-02-07 11:08:56', 3),
(27, 'ligula pellentesque ultrices phasellus', 9.00, 'aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan', 'p6.jpg', '2022-03-30 09:21:17', '2023-12-13 17:45:58', 3),
(28, 'duis at velit eu', 28.00, NULL, 'b8.jpg', '2022-02-04 16:36:34', '2023-04-24 04:44:43', 5),
(29, 'faucibus cursus urna ut', 36.00, 'iaculis justo in hac habitasse platsea dictumst etiam', 'E9.jpg', '2022-09-02 01:14:30', '2023-07-14 15:00:53', 2),
(30, 'rhoncus aliquam lacus', 8.00, 'in ante vestibulum ante ipsum primis in faucibus orci luctus et', 'E6.jpg', '2022-01-22 00:51:44', '2023-01-31 15:26:53', 2),
(31, 'ultrices posuere cubilia curae', 8.00, 'blandit mi in porttitor pede justo eu massa donec', 'pt6.jpg', '2022-08-03 03:21:38', '2023-12-13 10:13:13', 1),
(32, 'massa quis augue luctus', 34.00, 'vestibulum sed magna at nunc commodo placerat', 'b9.jpg', '2022-12-03 03:57:56', '2023-11-09 16:56:37', 5),
(33, 'id turpis integer', 25.00, NULL, 'E8.jpg', '2022-04-19 13:19:10', '2023-10-01 18:01:47', 2),
(34, 'tortor sollicitudin mi', 13.00, 'phasellus id sapien in sapien iaculis congue vivamus metus arcu', 'E7.jpg', '2022-06-01 05:54:33', '2023-01-27 23:01:30', 2),
(35, 'felis sed interdum', 7.00, 'tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl', 'd5.jpg', '2022-01-23 02:12:28', '2023-12-06 22:49:41', 4),
(36, 'tortor quis turpis', 29.00, NULL, 'd6.jpg', '2022-12-16 09:53:40', '2023-12-19 23:31:32', 4),
(37, 'arcu libero rutrum ac lobortis', 36.00, 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis', 'b10.jpg', '2022-03-20 23:45:24', '2023-04-20 20:14:39', 5),
(38, 'vulputate nonummy maecenas', 19.00, NULL, 'E11.jpg', '2021-12-28 18:12:49', '2023-09-30 06:43:31', 2),
(39, 'ipsum dolor sit amet consectetuer', 29.00, NULL, 'E12.jpg', '2022-12-18 05:15:35', '2023-06-26 18:42:42', 2),
(40, 'id luctus nec molestie', 9.00, 'volutpat quam pede lobortis ligula sit amet eleifend', 'E13.jpg', '2022-03-21 23:15:57', '2022-12-31 10:15:07', 2),
(41, 'erat volutpat in congue', 22.00, 'dapibus dolor vel est donec odio justo sollicitudin', 'b11.jpg', '2022-02-08 11:28:04', '2023-10-10 00:27:32', 5),
(42, 'consequat metus sapien ut', 22.00, 'pede justo lacinia eget tincidunt eget tempus vel pede', 'pt7.jpg', '2022-12-07 07:04:09', '2023-09-23 09:18:22', 1),
(43, 'mattis nibh ligula', 9.00, 'volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in', 'd7.jpg', '2022-09-23 13:31:31', '2023-02-20 11:44:44', 4),
(44, 'tellus in sagittis dui', 13.00, 'nam nulla integer pede justo lacinia eget tincidunt eget tempus', 'b12.jpg', '2022-06-06 22:50:53', '2023-05-25 01:54:18', 5),
(45, 'augue vestibulum rutrum', 35.00, 'tellus nisi eu orci mauris lacinia sapien quis libero nullam', 'b13.jpg', '2022-12-15 20:29:09', '2023-12-11 03:25:13', 5),
(46, 'viverra eget congue eget', 21.00, 'vestibulum sed magna at nunc commodo placerat praesent', 'p7.jpg', '2022-04-30 04:23:07', '2023-10-17 06:35:31', 3),
(47, 'sapien in sapien iaculis', 12.00, NULL, 'd8.jpg', '2022-06-09 03:57:43', '2023-09-08 23:48:01', 4),
(48, 'mauris enim leo rhoncus', 37.00, 'sed vestibulum sit amet cursus id turpis integer aliquet massa id', 'b14.jpg', '2022-07-17 12:25:44', '2022-12-23 07:46:07', 5),
(49, 'ac diam cras pellentesque volutpat', 18.00, NULL, 'p9.jpg', '2022-07-26 22:58:43', '2023-06-16 16:50:04', 3),
(50, 'pede ullamcorper augue a suscipit', 7.00, 'vel augue vestibulum rutrum rutrum neque aenean auctor gravida', 'p8.jpg', '2022-04-04 16:56:56', '2023-07-25 11:06:39', 3),
(51, 'ante vestibulum ante ipsum primis', 27.00, 'malesuada in imperdiet et commodo vulputate justo in blandit ultrices', 'E14.jpg', '2022-01-13 07:30:02', '2023-11-12 09:19:17', 2),
(52, 'donec ut mauris eget', 32.00, NULL, 'p10.jpg', '2022-08-29 14:58:23', '2023-03-27 12:04:36', 3),
(53, 'odio cras mi pede', 38.00, 'praesent id massa id nisl venenatis lacinia aenean sit amet', 'pt8.jpg', '2022-09-11 09:29:27', '2023-11-15 00:29:19', 1),
(54, 'in felis eu sapien cursus', 13.00, NULL, 'E15.jpg', '2022-03-31 15:09:00', '2023-11-27 19:46:22', 2),
(55, 'ultrices erat tortor sollicitudin', 14.00, 'eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim', 'p11.jpg', '2022-01-12 03:14:03', '2023-01-02 08:47:55', 3),
(56, 'suspendisse potenti in eleifend', 21.00, 'lectus vestibulum quam sapien varius ut blandit non', 'pt9.jpg', '2022-03-18 12:32:54', '2023-02-03 11:19:19', 1),
(57, 'amet sem fusce', 4.00, NULL, 'b15.jpg', '2022-08-21 04:10:32', '2023-02-18 16:10:15', 5),
(58, 'nulla sed accumsan felis ut', 20.00, NULL, 'b16.jpg', '2022-11-26 05:47:16', '2023-05-23 05:15:04', 5),
(59, 'mi pede malesuada in imperdiet', 39.00, 'congue risus semper porta volutpat quam pede lobortis ligula', 'pt10.jpg', '2022-08-08 03:04:20', '2023-06-03 01:56:50', 1),
(60, 'vitae consectetuer eget rutrum at', 19.00, 'ultrices posuere cubilia curae nulla dapibus dolor vel est', 'E16.jpg', '2022-11-11 13:36:34', '2023-06-24 21:32:25', 2),
(61, 'ultrices posuere cubilia curae', 8.00, 'blandit mi in porttitor pede justo eu massa donec', 'pt5.jpg', '2022-08-03 03:21:38', '2023-12-13 10:13:13', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

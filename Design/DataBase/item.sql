-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 avr. 2021 à 09:05
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webmarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name_` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `SubCategory` varchar(20) NOT NULL,
  `Idsell` int NOT NULL,
  `Description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `SellOption` int DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Available` tinyint(1) DEFAULT NULL,
  `Photo` blob,
  `Date_Added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`Id`, `Name_`, `Category`, `SubCategory`, `Idsell`, `Description`, `SellOption`, `Price`, `Available`, `Photo`, `Date_Added`) VALUES
(1, 'Playsation 5', 'Console', 'Playstation', 1, '<p>The PS5 is a true generational leap, offering incredibly fast load times and an innovative new controller that can change the way games feel.</p>\r\n<h6>For</h6>\r\n<ul><li>Incredibly fast SSD</li>\r\n<li>Wildly inventive DualSense controller</li>\r\n<li>Gorgeous 4K visuals</li>\r\n<li>Snappy, clean interface</li>\r\n<li>Impressive backwards compatibility</li></ul>', 1, 629.99, 0, 0x5053352e706e67, '2021-04-01 12:00:12'),
(2, 'Playsation 4', 'Console', 'Playstation', 1, '<p>The PlayStation 4 offers 4K gaming and streaming, gorgeous HDR effects and a healthy game library with VR support.</p>\r\n<h6>Features</h6>\r\n<ul><li>Supports 4K gaming and streaming</li>\r\n<li>HDR compatible</li>\r\n<li>PS VR compatible</li></ul>', 2, 329.99, 0, 0x5053342e706e67, '2021-03-13 17:55:22'),
(3, 'XBOX Serie X', 'Console', 'Xbox', 2, '<p>The Xbox Series X is the pinnacle of Microsoft\'s gaming efforts, blending the promise of powerful next-generation performance with superfast loading times and a huge library of games spanning multiple Xbox generations.</p>\r\n<h6>Features</h6>\r\n<ul><li>The only Xbox you need</li>\r\n<li>Lots of power</li>\r\n<li>Games load very fast</li>\r\n<li>Clean and cool design</li>\r\n<li>Stellar backwards compatibility</li></ul>', 3, 630, 0, 0x58424f582d5365726965582e706e67, '2021-02-27 21:12:34'),
(4, 'Nintendo Switch', 'Console', 'Nintendo', 3, '<p>The Nintendo Switch is a fantastic console for all kinds of gamers, even if you\'re not a Nintendo fan.</p>\r\n<h6>Features</h6>\r\n<ul><li>Three play modes make it convenient to use wherever</li>\r\n<li>Excellent variety of available games</li>\r\n<li>Smartly designed controls</li></ul>', 2, 229, 0, 0x4e696e74656e646f2d5377697463682e706e67, '2021-01-30 19:42:20'),
(5, 'Playstation 2', 'Console', 'Playstation', 5, '<p>Description</p>', 2, 69.99, 0, 0x5053322e706e67, '2021-12-03 14:02:31'),
(6, 'Call Of Duty BO2', 'Video-Game', 'Action', 8, '<p>FPS For PS3</p>', 3, 9.99, 0, 0x436f44426c61636b4f7073322e6a7067, '2021-04-02 20:30:05'),
(7, 'Mortal Kombat 11', 'Video-Game', 'Battle', 9, '<p>Fight Game For Xbox One</p>', 2, 19.99, 0, 0x4d6f7274616c4b6f6d62617431312e6a7067, '2021-04-02 21:20:05'),
(8, 'Mario Tennis', 'Video-Game', 'Sport', 10, '<p>Play Tennis with Mario on GameCube</p>', 3, 12.99, 0, 0x4d6172696f54656e6e69732e6a7067, '2021-04-02 22:48:05'),
(9, 'Fifa 19', 'Video-Game', 'Sport', 9, '<p>Football Game for Xbox One</p>', 1, 49.99, 0, 0x4669666131392e6a7067, '2021-04-04 13:20:12'),
(10, 'Nintendo DS Lite', 'Console', 'Nintendo', 10, '<p>Play anywhere and anytime!</p>', 2, 79.99, 0, 0x4e696e74656e646f2d44532d4c6974652e706e67, '2021-03-21 21:37:05'),
(11, 'Nintendo Wii', 'Console', 'Nintendo', 10, '<p>Play with Friends and Family!</p>', 2, 89.99, 0, 0x4e696e74656e646f2d5769692e706e67, '2021-04-01 22:37:05'),
(12, 'The Last Of Us 2', 'Video-Game', 'Adventure', 9, '<p>Follow Joel and Ellie in an dangerous post-apocayptic world and try to survive</p>', 1, 69.99, 0, 0x5468654c6173744f665573322e6a7067, '2021-03-21 14:27:43'),
(13, 'Tekken 5', 'Video-Game', 'Battle', 9, '<p>Fight Game for Playsation 2</p>', 3, 9.5, 0, 0x54656b6b656e352e6a7067, '2021-04-01 13:53:43'),
(14, 'Red Dead Redemption 2', 'Video-Game', 'Adventure', 1, '<p>Explore an endless world in the Far West</p>', 2, 65.5, 0, 0x52656444656164526564656d7074696f6e322e6a7067, '2021-04-04 11:27:43'),
(15, 'Game Cube', 'Console', 'Nintendo', 7, '<p>Enter the Cube and play with friends!</p>', 1, 69.99, 0, 0x4e696e74656e646f2d47616d65437562652e706e67, '2021-03-26 09:37:43'),
(16, 'Mario Kart 8 Deluxe', 'Video-Game', 'Sport', 4, '<p>The best game for loosing friends!</p>', 2, 40, 0, 0x4d6172696f4b6172743844656c7578652e6a7067, '2021-04-01 18:12:03'),
(17, 'Nintendo Wii U', 'Console', 'Nintendo', 4, '<p>New Nintendo Wii with a new screen-integrated controller</p>', 1, 79.99, 0, 0x4e696e74656e646f2d5769692d552e706e67, '2021-03-30 14:27:43'),
(18, 'Xbox One S', 'Console', 'Xbox', 15, '<p>Faster and Thinner than before</p>', 2, 369.99, 0, 0x58424f582d4f6e652d532e706e67, '2021-04-02 16:27:43'),
(19, 'Playstation 1', 'Console', 'Playstation', 14, '<p>Discover the first playstation ever created!</p>', 4, 50.99, 0, 0x5053312e706e67, '2021-04-01 18:45:23'),
(20, 'GameBoy', 'Console', 'Nintendo', 1, '<p>Rediscover the 90s!</p>', 5, 100, 0, 0x4e696e74656e646f2d47616d65426f792e706e67, '2021-04-04 11:57:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

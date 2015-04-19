-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le : Ven 10 Avril 2015 à 15:08
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `honeypot`
--

-- --------------------------------------------------------

--
-- Structure de la table `appareils`
--

CREATE TABLE IF NOT EXISTS `appareils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  `marque_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `annee_prod` date NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation` date NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E6295C117D540AB` (`notice_id`),
  KEY `IDX_E6295C11BCF5E72D` (`categorie_id`),
  KEY `IDX_E6295C114827B9B2` (`marque_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `appareils`
--

INSERT INTO `appareils` (`id`, `notice_id`, `categorie_id`, `marque_id`, `nom`, `annee_prod`, `photo`, `creation`, `description`) VALUES
(1, 1, 3, 2, 'FC8322-09', '2015-01-01', 'aspirateur_philips_FC8322-09', '2015-03-23', 'Aspirateur léger, maniable. le compagnon idéale des dimanche matins. Silencieux et puissant il est aussi très écologique.'),
(2, NULL, 1, 3, 'RVC17', '2012-01-05', 'aspirateur_proline_rvc17', '2015-03-23', 'petit aspirateur sur batterie, malgré son format "mini" il dispose d''une longue autonomie. Il se faufile partout !'),
(3, 4, 2, 4, 'MV5 PREMIUM', '2013-01-01', 'karcher_mv5_premium', '2015-03-24', 'Les appareils KARCHER sont capables d''aspirer de l''eau sans aucun soucis. Indispensable pour les surfaces régulièrement nettoyer à l''eau. Le partenaire nettoyag'),
(4, 4, 2, 4, 'MV6 P PREMIUM', '2014-06-02', 'karcher_mv6_p_premium', '2015-03-24', 'Le MV6 Premium est la version améliorée du MV5 ! Encore plus puissant et plus léger, il viendra à bout de la moindre goutte d''eau. Son filtre a été étudié pour '),
(5, 2, 3, 1, 'complete c3', '2014-05-01', 'aspirateur_miele_complete_C3', '2015-03-24', 'Aspirateur avec sac puissant et compact. Tout le savoir faire de Miele est injecté dans cet aspirateur haut de gamme ! Grâce lui vous aurez hâte de faire le mén'),
(6, 3, 1, 2, 'MiNiVAC', '2015-01-01', 'minivac', '2015-03-24', 'Aspirateur très design, cyclonique à suceur plat.'),
(7, 5, 2, 4, 'SE 6.100', '2015-02-02', 'karcher_se_6100', '2015-03-27', 'VRRRRRM VRRRRM PSCCCCCCCCCCCCHHHHH TUTUTUTUTU YONYONYOYON'),
(8, 6, 3, 1, 'C2 POWERLINE', '2014-08-01', 'c2_powerline', '2015-03-27', 'La rolls des aspirateurs tout simplement !'),
(9, 7, 3, 1, 'C1 POWERLINE', '2014-02-01', 'c1_powerline', '2015-03-27', 'La Féfé Enzo des aspirateurs à sac !');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'aspirateur à main'),
(2, 'aspirateur à eau'),
(3, 'aspirateur avec sac'),
(4, 'aspirateur sans sac');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE IF NOT EXISTS `marques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`id`, `nom`, `logo`) VALUES
(1, 'miele', 'miele'),
(2, 'philips', 'philips'),
(3, 'proline', ''),
(4, 'karcher', 'karcher');

-- --------------------------------------------------------

--
-- Structure de la table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fichier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `notices`
--

INSERT INTO `notices` (`id`, `fichier`, `langue`) VALUES
(1, 'FC8322-09', 'fr'),
(2, 'complete_c3', 'fr, de, en'),
(3, 'minivac', 'fr'),
(4, 'mv5-premium', 'fr, en, de'),
(5, 'se-6.100', 'fr, en, de'),
(6, 'c2_powerline', ''),
(7, 'c1_powerline', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E96C6E55B5` (`nom`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `roles`, `mdp`, `salt`, `email`, `creation`) VALUES
(1, 'kotso', 'a:1:{i:0;s:9:"ROLE_USER";}', '$6$Y7l7++n!s=xl(lld$AygMeNPRiUPDi/5qFiuS0RcKJMGZnQv6JCDiUU7bIPdOuLk/81bNQwTpzMQvbU1DSI02JoiL7AZ9fgMiS9Sa6.', '$6$Y7l7++n!s=xl(lld', 'kotso@kotso.fr', '2015-04-10'),
(2, 'ska', 'a:1:{i:0;s:9:"ROLE_USER";}', '$6$-g*d-_7ciHy-68fs$t5A69/SF1n7oeEEPAXe.41mYNawGXZ073JbkhevYdAHqCyoFW6AwimAqXhP2c2.cHjYKLoAkIBLumaLntuvRy.', '$6$-g*d-_7ciHy-68fs', 'ska@ska.fr', '2015-04-10'),
(3, 'roxana', 'a:1:{i:0;s:9:"ROLE_USER";}', '$6$c37cx$25wGvg15i8R37LT66IMoiJOC9cdvnqO2MVlVhAVZJvRSaONWXkY0QJNlEXXE5rDKuE/2E0vvrCEmuz6MPQgBF1', '$6$c37cx$(jwYs7E6', 'roxana@roxana.ro', '2015-04-10');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appareils`
--
ALTER TABLE `appareils`
  ADD CONSTRAINT `FK_E6295C114827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marques` (`id`),
  ADD CONSTRAINT `FK_E6295C117D540AB` FOREIGN KEY (`notice_id`) REFERENCES `notices` (`id`),
  ADD CONSTRAINT `FK_E6295C11BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

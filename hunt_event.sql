-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 07 Septembre 2018 à 20:51
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hunt_event`
--

-- --------------------------------------------------------

--
-- Structure de la table `hunt`
--

CREATE TABLE IF NOT EXISTS `hunt` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `hunt`
--

INSERT INTO `hunt` (`ID`, `TITLE`, `DESCRIPTION`) VALUES
(1, 'Broken Lanterns', '<p>The survivors feel something crunching beneath their feet. The event revealer may choose to lower theeir lantern and <strong>invertigate</strong> or ignore the sensation and continue their journey</p><p>If they choose to investigate, the event revealer gains +1 courage and rolls 1d10. Otherwise, roll again on the hunt event table before moving on the hunt event board</p>\n<table class="table table-bordered"><thead><th>1d10</th><th>Event revealer - Investigate</th></thead><tbody><tr><td>1 - 5</td><td>You fumble and cut your foot on a jagged shard. Suffer monster level event damage to your legs.</td></tr><tr><td>6-8</td><td>You slavage something useful. Gain 1 <strong>broken lantern</strong> basic resource.</td></tr><tr><td>9+</td><td>The survivor uncover a long-abandoned lantern hoard. The forlorn sight fills them with dread, each survivor sets their insanity to 0. After composing themselves, each survivor scavenges 1 <strong>broken lantern</strong> basic resource; add them to the settlement storage.</td></tr></tbody></table>'),
(2, 'Corpse', '<p>The survivor are overcome by a sudden chill, their breath seizing in their lungs. The survivors'' teeth chatter mercilessly. All survivor lose monster level survival. At the center of the sudden frost is a perfectly preserved corpse.</p>\r\n<p>If the settlement has <strong>Cannibalize</strong>, the event revealer gains 1 random basic resource.</p><p>If the settlement has <strong>Graves</strong>, the event revealer examines the corpse and gains +1 courage and +1 understanding.</p><p>If the settlement has <strong>Momento Mori</strong>, the event revealer understand a little about what happened to the corpse. They gain 1 random fighting art.</p>'),
(3, 'Cancer Pigeons', '<p>The survivors are surrounded by the echoing coo of infant bable. Strange babe-faced birds circle overhead. Gripped with instinctual horror, the survivors break into a run!</p><p>Each survivor rolls 1d10. The lowest scoring survivor (or survovors, in case of ties) bacomes a straggler. If any survivor has noisy gear, -2 to their roll. Each straggler rolls 1d10.</p><p>If any survivor has whip, they crack it, scattering many of the birds. Each straggler adds +4 to their roll.</p>\r\n<table class="table table-bordered"><thead><th>1d10</th><th>Straggler</th></thead><tbody><tr><td>1 - 3</td><td>Running and falling wildly, you suddenly find yourself panicked and alone. The waiting cancer pigeons descend and mercilessly peck your back, their happy cooing filling your head with horror. An hour late, the other survivors find you balled up and weeping on the ground. You are <strong>Dead inside</strong>: you cannot gain survival. record this impairment.</td></tr><tr><td>4-6</td><td>A cancer pigeon latches onto your back! Shake it free by spending 1 survival. Otherwise, you are <strong>Dead inside</strong>: you cannot gain survival. Record this imparment.</td></tr><tr><td>7-8</td><td>You escape the terrible creatures.</td></tr></tr><tr><td>9+</td><td>You manage to strike one of the foul creatures down. Gain 1 random basic resource.</td></tr></tbody></table>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Création de la base de données
CREATE DATABASE db_artistes CHARACTER SET 'utf8';
USE db_artistes;

-- Structure de la table pays
CREATE TABLE pays (
  id int NOT NULL AUTO_INCREMENT,
  pays varchar(50) NOT NULL,
  PRIMARY KEY(id)

) ENGINE=MyISAM DEFAULT CHARSET='utf8';

-- Strucutre de la table instrument
CREATE TABLE instruments (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  PRIMARY KEY(id)

) ENGINE=MyISAM DEFAULT CHARSET='utf8';

-- Strucutre de la table style
CREATE TABLE style (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  PRIMARY KEY(id)

) ENGINE=MyISAM DEFAULT CHARSET='utf8';

-- Structure de la table musiciens
CREATE TABLE `musiciens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `naissance` date NOT NULL,
  `detail` text NOT NULL,
  `instrument_id` int NOT NULL,
  `style_id` int NOT NULL,
  `pays_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

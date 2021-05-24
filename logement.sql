-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 24 mai 2021 à 11:53
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `logement`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nom_agent` varchar(100) NOT NULL,
  `prenom_agent` varchar(150) NOT NULL,
  `telephone_agent` varchar(15) NOT NULL,
  `email_agent` varchar(100) NOT NULL,
  `image_agent` longtext NOT NULL,
  PRIMARY KEY (`id_agent`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id_agent`, `nom_agent`, `prenom_agent`, `telephone_agent`, `email_agent`, `image_agent`) VALUES
(18, 'Ndiaye', 'Mame Fatima', '774086628', 'm.f.ndiaye@isepdiamniadio.edu.sn', 'agent-5.jpeg'),
(16, 'TINE', 'Abdoussalam', '784547598', 'abdoussalamtine4@gmail.com', 'agent-4.jpeg'),
(17, 'Ndiaye', 'Elhadji Yaya', '775932304', 'e.ndiaye@isepdiamniadio.edu.sn', 'agent-1.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

DROP TABLE IF EXISTS `appartement`;
CREATE TABLE IF NOT EXISTS `appartement` (
  `id_app` int(11) NOT NULL AUTO_INCREMENT,
  `nom_app` varchar(100) NOT NULL,
  `localisation_app` varchar(250) NOT NULL,
  `image_app` longtext NOT NULL,
  `description_app` longtext NOT NULL,
  `prix_app` int(11) NOT NULL,
  `type_app` varchar(100) NOT NULL,
  `status_app` varchar(20) NOT NULL,
  `surface_app` int(11) NOT NULL,
  `nombre_chambre_app` int(11) NOT NULL,
  `nombre_de_garage_app` int(11) NOT NULL,
  `nombre_lit_app` int(11) DEFAULT NULL,
  `id_agent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_app`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`id_app`, `nom_app`, `localisation_app`, `image_app`, `description_app`, `prix_app`, `type_app`, `status_app`, `surface_app`, `nombre_chambre_app`, `nombre_de_garage_app`, `nombre_lit_app`, `id_agent`) VALUES
(2, 'Location appartement Mamelles', 'Cap des mamelles', 'appartement1.jpg', 'Aux Mamelles, derriÃ¨re nouvelles frontiÃ¨res se situe un appartement de type F4 grand Standing dans un secteur calme. Il se compose de 3 chambres dont la chambre parentale avec sa salle de bain, dâ€™un grand salon qui donne sur un balcon, dâ€™une grande cuisine amÃ©nagÃ©e. Ouvert pour les temps d\'inspection Aucune inspection sont actuellement prÃ©vu Aux Mamelles, derriÃ¨re nouvelles frontiÃ¨res se situe un  appartement de type F4 grand Standing dans un secteur calme. Il se compose de 3 chambres dont la chambre parentale avec sa salle de bain, dâ€™un grand salon qui donne sur un balcon, dâ€™une grande cuisine amÃ©nagÃ©e, dâ€™une salle Ã  manger, dâ€™une toilette extÃ©rieure pour les autres chambres, dâ€™un WC visiteur et dâ€™une sÃ©curitÃ© H24', 60000, 'appartement', 'A louer', 490, 5, 2, 4, 16),
(3, 'Appartement en location Dakar Plateau', 'Dakar Plateau', 'appartement2.jpg', 'IdÃ©alement situÃ©s, Plateau moyen Dakar, lâ€™appartement est Ã  votre disposition en location. Il se compose de 3 chambres avec placards et salle de bain, dâ€™un grand salon qui donne sur un balcon, dâ€™une cuisine Ã©quipÃ©e de placards. Ouvert pour les temps d\'inspection Aucune inspection sont actuellement prÃ©vu IdÃ©alement situÃ©s, Plateau moyen Dakar, lâ€™appartement est Ã  votre disposition en location. Il se compose de 3 chambres avec placards et salle de bain, dâ€™un grand salon qui donne sur un balcon, dâ€™une cuisine Ã©quipÃ©e de placards, dâ€™une buanderie, dâ€™une toilette visiteur et dâ€™un ascenseur.', 450000, 'appartement', 'A louer', 390, 6, 2, 5, 18),
(4, 'Appartement Ã  louer Dakar Plateau', 'Dakar Plateau', 'appartement3.jpg', 'Appartement neuf au 6e Ã©tage avec une belle vue sur le port Ã  louer au Plateau Ã  Dakar. Il se compose de 3 chambres dont la principale avec sa salle de bain, d\'un grand salon qui donne sur une grande terrasse, d\'une cuisine Ã©quipÃ©e de placards, d\'une toilette pour les deux autres chambres. Ouvert pour les temps d\'inspection Aucune inspection sont actuellement prÃ©vu Appartement neuf au 6e Ã©tage avec une belle vue sur le port Ã  louer au Plateau Ã  Dakar. Il se compose de 3 chambres dont la principale avec sa salle de bain, d\'un grand salon qui donne sur une grande terrasse, d\'une cuisine Ã©quipÃ©e de placards, d\'une toilette pour les deux autres chambres, d\'une buanderie, d\'une toilette visiteur, chauffe-eau et d\'un espace familial.  CommoditÃ©s : Ascenseur, rÃ©servoir dâ€™eau, sÃ©curitÃ© H24 et un parking payant.', 120000, 'appartement', 'A louer', 900, 3, 2, 4, 16),
(5, 'Appartement rez de jardin Ã  louer Almadies', 'AlmadiÃ©', 'appartement4.jpg', 'Appartement Rez de jardin Ã  louer aux Almadies Dakar dans une rÃ©sidence calme et sÃ©curisÃ©. Il se compose de 3 chambres climatisÃ©es avec placards dont la principale avec sa salle de bain, d\'un grand salon qui donne une ouverture sur le jardin, d\'une cuisine Ã©quipÃ©e. Ouvert pour les temps d\'inspection Aucune inspection sont actuellement prÃ©vu Appartement Rez de jardin Ã  louer aux Almadies Dakar dans une rÃ©sidence calme et sÃ©curisÃ©. Il se compose de 3 chambres climatisÃ©es avec placards dont la principale avec sa salle de bain, d\'un grand salon qui donne une ouverture sur le jardin, d\'une cuisine Ã©quipÃ©e, d\'une toilette extÃ©rieure, d\'une buanderie et d\'une toilette visiteur.  CommoditÃ©s: Groupe Ã©lectrogÃ¨ne, rÃ©servoir d\'eau, parking sous-sol et sÃ©curitÃ©', 300000, 'appartement', 'A louer', 600, 4, 2, 4, 17),
(6, 'Appartement meuble vue sur mer Ã  Fann rÃ©sidence Dakar', 'Fann rÃ©sidence Dakar', 'appartement5.jpg', 'Beau Appartement meublÃ© au 4 -Ã¨me Ã©tage avec vue sur mer sur la corniche ouest Fann RÃ©sidence DAKAR avec toutes les commoditÃ©s avec des split dans toutes les piÃ¨ces de 2 chambres, 2 salles de bains, dressings, salon, Salle Ã  manger, Cuisine Ã‰quipÃ©e, grande terrasse, coin de massage, parking et groupe Ã©lectrogÃ¨ne Ouvert pour les temps d\'inspection Aucune inspection sont actuellement prÃ©vu Beau Appartement meublÃ© au 4 -Ã¨me Ã©tage avec vue sur mer sur la corniche ouest Fann RÃ©sidence DAKAR  avec toutes les commoditÃ©s avec des split dans toutes les piÃ¨ces de 2 chambres, 2 salles de bains, dressings, salon, Salle Ã  manger, Cuisine Ã‰quipÃ©e, grande terrasse, coin de massage, parking et groupe Ã©lectrogÃ¨ne ', 450000, 'appartement', 'A louer', 500, 6, 2, 5, 18),
(7, 'Appartement en location Ngor Casino', 'Ngor Casino', 'appartement6.jpg', 'Un appartement au 1e Ã©tage en bon Ã©tat Ã  louer dans un immeuble calme et sÃ©curisÃ© sis Ã  Ngor non loin de la plage. Il se compose de 3 chambres avec placards et salles de bains chacune, dâ€™un grand salon donnant sur un balcon. Ouvert pour les temps d\'inspection Aucune inspection sont actuellement prÃ©vu Un appartement au 1e Ã©tage en bon Ã©tat Ã  louer dans un immeuble calme et sÃ©curisÃ© sis Ã  Ngor non loin de la plage. Il se compose de 3 chambres avec placards et salles de bains chacune, dâ€™un grand salon donnant sur un balcon, dâ€™une cuisine Ã©quipÃ©e de placards, dâ€™une buanderie et dâ€™une toilette visiteur.', 400000, 'appartement', 'A louer', 600, 4, 2, 6, 16);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(100) NOT NULL,
  `prenom_client` varchar(150) NOT NULL,
  `sexe` char(1) NOT NULL,
  `email_client` varchar(100) NOT NULL,
  `password_client` varchar(250) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `sexe`, `email_client`, `password_client`) VALUES
(6, 'TINE', 'Abdou', 'M', 'abdoussalamtine4@gmail.com', 'ab4f63f9ac65152575886860dde480a1'),
(7, 'Zac', 'Tine', 'M', 'zac@gmail.com', 'ab4f63f9ac65152575886860dde480a1');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `id_maison` int(11) NOT NULL AUTO_INCREMENT,
  `nom_maison` varchar(100) NOT NULL,
  `localisation_maison` varchar(250) NOT NULL,
  `image_maison` longtext NOT NULL,
  `description_maison` longtext NOT NULL,
  `prix_maison` int(11) NOT NULL,
  `type_maison` varchar(100) NOT NULL,
  `status_maison` varchar(20) NOT NULL,
  `surface_maison` int(11) NOT NULL,
  `nombre_chambre_maison` int(11) NOT NULL,
  `nombre_de_garage_maison` int(11) NOT NULL,
  `nombre_lit_maison` int(11) DEFAULT NULL,
  `id_agent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_maison`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `nom_maison`, `localisation_maison`, `image_maison`, `description_maison`, `prix_maison`, `type_maison`, `status_maison`, `surface_maison`, `nombre_chambre_maison`, `nombre_de_garage_maison`, `nombre_lit_maison`, `id_agent`) VALUES
(8, 'Angezac', 'Keur Massar', 'maison1.jpg', 'Voici une maison de couleur d\'un Ã©tage trÃ¨s jolie ', 20000000, 'maison', 'A vendre', 400, 5, 2, 4, 16),
(7, '304 Blaster Up', 'Tamba', 'maison0.jpg', 'Une trÃ©s belle maison au bord de la mÃ©re', 15000000, 'maison', 'A vendre', 302, 4, 1, 3, 16),
(9, 'Jouverel', 'LibertÃ© 6', 'maison2.jpg', 'Une maison d\'un Ã©tage avec une terrasse de couleur blanche ', 30000000, 'maison', 'A vendre', 500, 6, 1, 4, 16),
(10, 'Lamazin', 'Parcelle Assainie ', 'maison3.jpg', 'Ceci est une maison de luxe derniÃ¨re gÃ©nÃ©ration de couleur rouge et grise avec un prix abordable', 120000000, 'maison', 'A vendre', 3000, 7, 2, 7, 16),
(11, 'Clarivau', 'Mbour', 'maison4.jpg', 'Voici une maison chic avec une piscine trÃ¨s chic avec un prix encore trÃ¨s chic', 300000000, 'maison', 'A vendre', 4000, 7, 2, 5, 16),
(12, 'Rocheveron', 'Bambey', 'maison5.jpg', 'Maison de grande envergure avec une vue exceptionnelle', 145000000, 'maison', 'A vendre', 345, 5, 2, 4, 16),
(14, 'Vasseron', 'Pikine', 'maison6.jpg', 'Une maison de grande envergure avec une vue vraiment jolie de couleur Ã  peu prÃ¨s grise.', 160000000, 'maison', 'A vendre', 306, 5, 2, 7, 18),
(15, 'Choilenet', 'Diamniadio', 'maison7.jpg', 'Une maison espacÃ©e avec une piscine qui offre une vue large.', 120000000, 'maison', 'A vendre', 340, 4, 2, 5, 18),
(16, 'Chanarel', 'LibertÃ© 6', 'maison8.jpg', 'Ceci une maison de luxe gazonnÃ©e, spacieuse avec un prix abordable ', 140000000, 'maison', 'A vendre', 4000, 5, 3, 6, 17),
(17, 'Abomtal', 'Keur Massar', 'maison9.jpg', 'Une maison de couleur chocolat une stage avec un prix abordable ', 145000000, 'maison', 'A vendre', 566, 4, 2, 5, 17),
(18, 'Rochegner', 'Bakel', 'maison10.jpg', 'Voici une maison en fin de finition avec deux Ã©tages.', 20000000, 'maison', 'A vendre', 490, 5, 2, 5, 17);

-- --------------------------------------------------------

--
-- Structure de la table `studio`
--

DROP TABLE IF EXISTS `studio`;
CREATE TABLE IF NOT EXISTS `studio` (
  `id_studio` int(11) NOT NULL AUTO_INCREMENT,
  `nom_studio` varchar(100) NOT NULL,
  `localisation_studio` varchar(250) NOT NULL,
  `image_studio` longtext NOT NULL,
  `description_studio` longtext NOT NULL,
  `prix_studio` int(11) NOT NULL,
  `type_studio` varchar(100) NOT NULL,
  `status_studio` varchar(20) NOT NULL,
  `surface_studio` int(11) NOT NULL,
  `nombre_chambre_studio` int(11) NOT NULL,
  `nombre_de_garage_studio` int(11) NOT NULL,
  `id_agent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_studio`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `studio`
--

INSERT INTO `studio` (`id_studio`, `nom_studio`, `localisation_studio`, `image_studio`, `description_studio`, `prix_studio`, `type_studio`, `status_studio`, `surface_studio`, `nombre_chambre_studio`, `nombre_de_garage_studio`, `id_agent`) VALUES
(1, 'Studio de photo', 'Sud Foire', 'studio0.jpeg', 'Un studio de photo avec un grand espace pas cher et disponible 24/24', 180000, 'studio', 'A louer', 460, 4, 1, 17),
(2, 'Studio Ã  louer', 'Parcelle Assainie ', 'studio1.jpg', 'RF 142ID A Louer aux parcelles assainies unitÃ© 20 *studio composÃ© de : 1chambre + salon + cuisine + toilette Prix : 140.000 frs', 140000, 'studio', 'A louer', 460, 1, 1, 18),
(3, 'Mini Studio Ã€ Louer', 'Nord Foire', 'studio2.jpg', 'RF 141AF *Mini studio Ã  louer Ã  Nord foire Prix 75.000frs', 75000, 'studio', 'A louer', 460, 4, 1, 18),
(4, 'Studio F2 Au Mariste', 'Mariste', 'studio3.jpg', 'Je loue un studio chambre salon cuisine 2 toilettes', 90000, 'studio', 'A louer', 500, 4, 1, 17),
(5, 'Mini Studio Ã€ Louer', 'MÃ©dina Dakar', 'studio4.jpg', 'RF 140WS A louer Ã  la MÃ©dina *Grande chambre + toilette + Terrace indÃ©pendante Ã  louer Ã  la rue 27x22 mÃ©dina au 5Ã©me Ã©tage Prix : 100.000 frs', 100000, 'studio', 'A louer', 75, 1, 0, 17),
(6, 'Studio FermÃ© Ã€ Louer Ã€ Dieuppeul', 'Dieuppeul Dakar', 'studio5.jpg', '', 150000, 'studio', 'A louer', 100, 4, 1, 17),
(7, 'STUDIO EN LOCATION A DERKLE', 'DERKLE', 'studio6.jpg', 'UN STUDIO AU REZ DE CHAUSSEE ENTRE SALON CHAMBRE TOILETTE CUISINE JUSTE A COTE ET TOILETTE EXTERNE EN LOCATION A DERKLE NON LOIN DU MONUMENT', 130000, 'studio', 'A louer', 100, 3, 1, 17),
(8, 'Mini Studio Ã€ Louer Aux Ã‰trangers/Ouakam_Brioche', 'Ouakam_Brioche', 'studio7.jpg', 'Un mini studio (chambre cuisine salle bain interne), video disponible, Ã  ouakam non loin de la brioche d\'orÃ©e, accessible aux transports en commun, est Ã  louer aux Ã©trangers. Conditions 3 mois. Envoyez sms si le 1er appel est sans succÃ¨s.', 100000, 'studio', 'A louer', 75, 1, 1, 16),
(9, 'Studio Ã€ vendre Aux Mamelles', 'Mamelle', 'studio8.jpg', 'A louer aux mamelles non loin de &quot;pharmacie des mamelles &quot; un studio au 2eme etage comprenant une chambre, salon, cuisine, 2 toilettes, balcon Calme et accessible', 15000000, 'studio', 'A vendre', 85, 1, 0, 16),
(10, 'Studio Ã€ Vendre Ã€ LibertÃ© 6 Extension', 'LibertÃ© 6 Extension', 'studio9.jpg', 'A louer Ã  libertÃ© 6 extension non loin de &quot;marchÃ© barack&quot; un studio au rez de chaussÃ©e comprenant une chambre, salon, cuisine, toilette', 1300000, 'studio', 'A vendre', 45, 2, 0, 18);

-- --------------------------------------------------------

--
-- Structure de la table `terrain`
--

DROP TABLE IF EXISTS `terrain`;
CREATE TABLE IF NOT EXISTS `terrain` (
  `id_terrain` int(11) NOT NULL AUTO_INCREMENT,
  `nom_terrain` varchar(100) NOT NULL,
  `localisation_terrain` varchar(250) NOT NULL,
  `image_terrain` longtext NOT NULL,
  `description_terrain` longtext NOT NULL,
  `prix_terrain` int(11) NOT NULL,
  `type_terrain` varchar(100) NOT NULL,
  `status_terrain` varchar(20) NOT NULL,
  `surface_terrain` int(11) NOT NULL,
  `id_agent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_terrain`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `terrain`
--

INSERT INTO `terrain` (`id_terrain`, `nom_terrain`, `localisation_terrain`, `image_terrain`, `description_terrain`, `prix_terrain`, `type_terrain`, `status_terrain`, `surface_terrain`, `id_agent`) VALUES
(6, 'Terrain Ã  Vendre', 'Tambacounda', 'terrain0.jpg', '---', 15000000, 'terrain', 'A vendre', 100, 18),
(7, 'Terrain Ã  Vendre Diamniadio', 'Diamniadio', 'terrain1.jpg', '---', 16000000, 'terrain', 'A vendre', 90, 18),
(8, 'Terrain Ã  Vendre Ã  Kaolack', 'Kaloack', 'terrain2.jpg', '---', 1000000, 'terrain', 'A vendre', 100, 17),
(9, 'Terrain Ã  Vendre Ã  Dakar', 'Parcelle Assainie  Dakar', 'terrain3.jpg', '---', 10000500, 'terrain', 'A vendre', 100, 16),
(10, 'Terrain Ã  Vendre Ã  Pikine', 'Pikine', 'terrain4.jpg', '---', 19000000, 'terrain', 'A vendre', 60, 18),
(13, 'Terrain Ã  Vendre Ã  Podor', 'Podor', 'terrain6.jpg', '---', 12000000, 'Choisi le type du service', 'A vendre', 130, 16),
(12, 'Terrain Ã  Vendre Ã  Keur Massar', 'Keur Massar', 'terrain5.jpg', '---', 12000000, 'terrain', 'A vendre', 100, 17),
(14, 'Terrain Ã  Vendre Parcelle', 'Parcelle Assainie ', 'terrain7.jpg', '---', 12000000, 'terrain', 'A louer', 120, 16),
(15, 'Terrain Ã  Vendre Ã  SinÃ©gindia', 'SinÃ©gindia Diamniadio', 'terrain8.jpg', '---', 23000500, 'terrain', 'A louer', 200, 17),
(16, 'Terrain Ã  Vendre Ã  Grand Yoff', 'Grand Yoff', 'terrain9.jpg', '---', 29000000, 'terrain', 'A vendre', 300, 16),
(17, 'Terrain Ã  Vendre Ã  Pikine', 'Pikine', 'terrain10.jpg', '---', 23500100, 'terrain', 'A vendre', 240, 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

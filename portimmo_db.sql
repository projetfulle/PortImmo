-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 avr. 2019 à 16:58
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portimmo_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `specialite` varchar(250) NOT NULL,
  `emplacement` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `image5` varchar(250) NOT NULL,
  `image6` varchar(250) NOT NULL,
  `presentation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `logo`, `specialite`, `emplacement`, `telephone`, `email`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `presentation`) VALUES
(8, 'SIBETON', 'logo-sibeton.jpg', 'genie_civil', 'akouedo', '+225 57 20 20 20', 'sibeton@gmail.com', '53.jpg', '24.jpg', '20.jpg', '16.jpg', '21.jpg', '21.jpg', 'We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(4, 'G Bat', 'logo-gebat.jpg', 'batiment', '2-plateaux', '22 52 34 23', 'gbat@gbat.ci', '20.jpg', '26.jpg', '59.jpg', '52.jpg', '25.jpg', '55.jpg', 'â€¢ BÃ¢timents\r\nâ€¢ Routes\r\nâ€¢ Ouvrages dâ€™art et dâ€™assainissement\r\nâ€¢ Adduction et stockage dâ€™eau potable\r\nâ€¢ ElectricitÃ©\r\nâ€¢ AmÃ©nageur Foncier agrÃ©Ã© par le MinistÃ¨re en charge de la Construction\r\n\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(5, 'CFAO EQUIPEMENT', 'logocfao.jpg', 'equipementier', 'zone-industrielle', '21 75 19 00', 'cfao@cfao.ci', '38.jpg', '44.jpg', '16.jpg', '33.jpg', '61.jpg', '67.jpg', 'CFAO Equipment CÃ´te d\'Ivoire est la filiale du groupe CFAO dÃ©diÃ©e notamment aux acteurs et investisseurs dans le BTP, le secteur agricole, lâ€™Ã©nergie, la logistique et les transports.\r\n\r\nCFAO Equipment CÃ´te dâ€™Ivoire est organisÃ© autour de 6 activitÃ©s :\r\n\r\n    POIDS LOURDS ET BUS (DAF - FUSO - King Long)\r\n    PNEUMATIQUE (Bridgestone)\r\n     ENERGIE (JCB Groupes Ã©lectrogÃ¨nes)\r\n     MATERIEL MANUTENTION AGRICOLE (Massey Fergusson - Toyota Equipment)\r\n     ENGINS (JCB Engins)\r\n    ASCENSORIE (OTIS)  \r\n\r\nCFAO EQUIPMENT propose Ã©galement un Service AprÃ¨s-vente de qualitÃ© avec une Ã©quipe de techniciens et dâ€™experts certifiÃ©s.\r\n\r\nCFAO EQUIPMENT, ET SI VOUS CHOISISSIEZ Dâ€™ÃŠTRE MIEUX SERVIR.'),
(6, 'COLAS AFFRIQUE', 'logo-colas.jpg', 'batiment', 'angre', '+225 21 75 97 70', 'colas@colas.ci', '20.jpg', '40.jpg', '31.jpg', '39.jpg', '54.jpg', '19.jpg', 'TP / GÃ©nie Civil : conception et rÃ©alisation de Projets dâ€™infrastructures, de transports : Routes, Transport, port, AÃ©rodromes, ouvrages dâ€™art, rail, tramway, assainissementâ€¦)\r\n\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(7, 'SOTACI', 'logo-sotaci.jpg', 'equipementier', 'treichville', '+225 21 21 46 05', 'sotaci@sotaci.com', '74.jpg', '72.jpg', '21.jpg', '66.jpg', '18.jpg', '49.jpg', 'Le groupe SOTACI (SociÃ©tÃ© des Tubes d\'Acier et d\'Aluminium de CÃ´te dâ€™Ivoire) est le principal transformateur de produits sidÃ©rurgiques en Afrique de lâ€™Ouest, avec une capacitÃ© de production annuelle supÃ©rieure Ã  150.000 tonnes et un chiffre dâ€™affaires moyen annuel de 50 milliards Francs CFA.\r\n\r\nLe siÃ¨ge social de l\'entreprise est implantÃ© Ã  Abidjan dans la zone industrielle de Yopougon sur un site de 80.000 m2. Leader de la sous-rÃ©gion dans son domaine d\'activitÃ©, la sociÃ©tÃ© a comme actionnaire de rÃ©fÃ©rence, le groupe EUROFIND. Elle est spÃ©cialisÃ©e dans la production de matÃ©riaux Ã  base d\'acier destinÃ©e essentiellement aux secteurs : du BTP, de l\'industrie automobile, du cycle, de lâ€™emballage agro-alimentaire, de la construction mÃ©tallique industrielle et de lâ€™outillage agricole.\r\n\r\nLa volontÃ© stratÃ©gique de SOTACI dâ€™Ãªtre proche de ses clients, conjuguÃ©e Ã  sa dÃ©termination de diversifier ses activitÃ©s sâ€™est traduite par lâ€™implantation dâ€™un parc Ã  fer en Zone 4 (partie sud dâ€™Abidjan-RCI) et de filiales dans plusieurs pays de la sous-rÃ©gion.\r\n\r\nSOTACI est certifiÃ©e aux normes ISO 9001 Version 2008. L\'ensemble des produits qu\'elle commercialise est conforme aux normes de qualitÃ© ivoiriennes et internationales.\r\n&lt;br/&gt;\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(9, 'VINCI CONSTRUCTION', 'logo-vinci.jpg', 'genie_civil', 'angre', '+225 58 70 20 49', 'vinci@entrepriseemci.fr', '19.jpg', '20.jpg', '91.jpg', '87.jpg', '59.jpg', '70.jpg', 'Leader FranÃ§ais du gragage, des travaux maritimes et subaquatiques.\r\nDragage / Infrastructures maritimes (Quais, digues, jetÃ©es) / Travaux subaquatiques / Environnement / Bureaux d\'Ã©tudes techniques, structures et mÃ©thodes / Certifications\r\n&lt;br/&gt;\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(10, 'RAZEL COTE D\'IVOIRE', 'logo-razel.jpg', 'genie_civil', 'anono', '+225 20 21 08 82', 'razel@razel.ci', '27.jpg', '19.jpg', '20.jpg', '19.jpg', '72.jpg', '18.jpg', 'L\'expertise RAZEL, vaste et reconnue, dans tous les domaines de travaux publics, infrastructures linÃ©aires, travaux souterrains, barrages, ouvrages d\'art et gÃ©nie civil industriel, positionne l\'entreprise sur les grands projets mais aussi sur des travaux Ã  vocation locale, mais non moins complexes.\r\n&lt;br/&gt;\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(11, 'MCT SA Groupe LDFS', 'logo-mct.jpg', 'genie_civil', 'akouedo', '+225 21 35 40 40', 'secretariat@mct.ci', '36.jpg', '26.jpg', '45.jpg', '20.jpg', '19.jpg', '71.jpg', 'Conception, Etude, Installation, Maintenance en Climatisation et rÃ©frigÃ©ration, Maintenance tous corps dâ€™Ã©tat techniques dâ€™immeuble\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(12, 'Bernabe Cote d\'Ivoire', 'bernabe.jpg', 'deco', 'treichville', '+225 21 35 48 84', 'bernabeci@bernabe.fr', '', '', '', '', '', '', 'Leader multi-spÃ©cialiste en CÃ´te dâ€™Ivoire dans le nÃ©goce de la quincaillerie professionnelle, du matÃ©riel industriel, des produits mÃ©tallurgiques, des matÃ©riaux de construction et de lâ€™Ã©quipement domestique, BERNABE CI accompagne au quotidien les professionnels du BTP, de lâ€™industrie, de lâ€™artisanat et de lâ€™agriculture. Depuis plus de 60 ans, BERNABE CI sâ€™engage Ã  offrir une large gamme de produits de qualitÃ© et Ã  proposer un service Ã  la hauteur des attentes de ses clients.'),
(13, 'Consortium d\'entreprises', 'logo-cde.jpg', 'batiment', 'abidjan', '+225 22 44 53 43', 'chemali@cde.sn', '65.jpg', '19.jpg', '50.jpg', '87.jpg', '40.jpg', '71.jpg', 'Groupe Consortium dâ€™Entreprises Ã‚â€“ CDE- :\r\n\r\n- une des plus grande sociÃ©tÃ© de BTP-TP en Afrique de lâ€™Ouest regroupÃ©e en 3 poles ; batiment tous corps dâ€™Ã©tat , hydraulique et forage et travaux publics -route\r\n\r\n-5000 employÃ©s : 1er employeur du SÃ©nÃ©gal et plus gros employeur secteur BTP en Cote dâ€™Ivoire (460 personnes)\r\n\r\n-seule sociÃ©tÃ© Ivoirienne de BTP Ã  intÃ©grer lâ€™ensemble du personnel en CDD-CDI\r\n\r\n- SociÃ©tÃ© mÃ¨re et 11 pays dâ€™intervention certifiÃ©e ISO 9001 (management qualitÃ©)\r\n\r\n-35 ans dâ€™expÃ©rience dans la construction dâ€™infrastructures hospitaliÃ¨res en Afrique\r\n\r\n-C.A. supÃ©rieur 50 milliards dans ce domaine en tout corps dâ€™Etat (gÃ©nie civil TCE et Ã©quipements mÃ©dicaux)\r\n\r\n- CDE possÃ¨de des bureaux dâ€™Ã©tudes spÃ©cialisÃ©s ( Ã©lectricitÃ©, plomberie, aluminium, structure et laboratoires TP en interne)\r\n\r\n- CDE maitrise lâ€™intÃ©gralitÃ© des corps dâ€™Etat en entreprise gÃ©nÃ©rale (possÃ¨de dâ€™ importants dÃ©partement menuiseries (alu/bois/metal en interne)'),
(14, 'SocietÃ© Ivoirienne-Suisse Abidjanaise de Granit', 'logo-sisag2.jpg', 'equipementier', 'plateau', '+225 20 30 41 47', 'sisagci@si', '70.jpg', '87.jpg', '47.jpg', '67.jpg', '66.jpg', '49.jpg', 'SociÃ©tÃ© Ivoiro-Suisse Abidjanaise de Granit / Exploitation de carriÃ¨re'),
(15, 'Agence Faty Service', 'logoafs.jpg', 'VRD', '2-plateaux', '21 24 24 57', 'agencefatyservicesarl@gmail.com', '49.jpg', '38.jpg', '50.jpg', '44.jpg', '67.jpg', '60.jpg', 'BTP - ELECTRICITE - RESEAUX DIVERS - HYDRAULIQUE - TELECOM - ENTRETIEN CLIMATISEURS - ELECTRIFICATION - FOURNITURE MATERIELS ET MOBILIERS DE BUREAU - MATERIELS ET CONSOMMABLES INFORMATIQUE'),
(16, 'Entreprise EKDS NOUVELLE', 'logo-ekds-nouvelle.jpg', 'genie_civil', 'riviera', '+225 36 86 19 32', 'ekdsnouvelle@yahoo.fr', '11.jpg', '62.jpg', '18.jpg', '19.jpg', '34.jpg', '35.jpg', 'TRAVAUX PUBLICS - GENIE CIVIL - ELECTRICITE-M.T./B.T./E.P'),
(17, 'Societe des Entreprises KOMAN', 'logo-sek.jpg', 'genie_civil', 'abidjan', '+225 23 45 31 87', 'sek_ci@yahoo.fr', '19.jpg', '72.jpg', '16.jpg', '17.jpg', '19.jpg', '16.jpg', 'TP (Construction de Routes et ouvrages dâ€™art)\r\nWe have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor xercitationemut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum. But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.'),
(18, 'Nan Immo', 'logo-eteco.jpg', 'VRD', 'ambassade', '258574878', 'nan@nan.ci', '11.jpg', '21.jpg', '34.jpg', '59.jpg', '17.jpg', '16.jpg', 'Merci nous somme les meilleurs deans notre domaineMerci nous somme les meilleurs deans notre domaineMerci nous somme les meilleurs deans notre domaineMerci nous somme les meilleurs deans notre domaineMerci nous somme les meilleurs deans notre domaineMerci nous somme les meilleurs deans notre domaineMerci nous somme les meilleurs deans notre domaine'),
(19, 'Nanien Contructor', 'logo-socimat.jpg', 'deco', 'cocody', '22457895', 'nanier@imo.ci', '87.jpg', '16.jpg', '12.jpg', '11.jpg', '20.jpg', '72.jpg', 'L\'entreprise des nanien est la meilleur dans le domaine de la contruction. L\'entreprise des nanien est la meilleur dans le domaine de la contruction. L\'entreprise des nanien est la meilleur dans le domaine de la contruction. L\'entreprise des nanien est la meilleur dans le domaine de la contruction. L\'entreprise des nanien est la meilleur dans le domaine de la contruction. L\'entreprise des nanien est la meilleur dans le domaine de la contruction.'),
(20, 'Nan Hourse', 'logo-mk-construction.jpg', 'VRD', 'sopim', '22584985', 'nan@nan.ci', '67.jpg', '20.jpg', '33.jpg', '31.jpg', '35.jpg', '87.jpg', 'Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.Nana Hourse est eun tres bon constructeur. Il a contruit L\'ecole Nan.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `Pwd`) VALUES
(1, 'Fulle', '123456789'),
(2, 'fulleko', 'Jesus@1993'),
(3, 'Freddy', '123456789'),
(4, 'Feliii', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

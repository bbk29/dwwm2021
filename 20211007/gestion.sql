-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 10 oct. 2021 à 13:37
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `num_rue` varchar(50) NOT NULL,
  `nom_rue` varchar(50) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `prenom`, `nom`, `email`, `password`, `num_rue`, `nom_rue`, `cp`, `ville`, `phone`) VALUES
(1, 'Simplet', 'Le Nain', 'simplet@free.fr', '$2y$10$uKHV.JP8ifijTAJnn4sw/eS2qjrxibyqdViLjCRMiuUsMPFpzawze', '1', 'Rue des Marroniers', '29000', 'Quimper', '012345678'),
(2, 'Prince', 'Charmant', 'prince@toto.fr', '$2y$10$EPSonKZhTljLFlkgCN8vEOEQ/txNDY1y3bYNB9.sB1ZIFRCMWbxl2', '2', 'Rue des Marroniers', '49130', 'Les Ponts-de-Cé', '0682991402'),
(9, 'Blanche', 'Neige', 'blanche@free.fr', '$2y$10$8UhL7RNOA5B6BGSLcKSs3OmwGBqmNr4ryU27bplMlI7iCuE/K/a22', '3', 'Rue du Chateau', '29100', 'Brest', '012345678'),
(10, 'Reine', 'Méchante', 'reine@free.fr', '$2y$10$WRfAbf/6Rvj80kgCUXolH.3X7kRxTLlaFHbFm9UGOuYpBmRVFq/d6', '1', 'Rue du Chateau', '29100', 'Brest', '0123456789');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `Num_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comporter`
--

CREATE TABLE `comporter` (
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom`, `couleur`, `prix`, `stock`) VALUES
(1, 'Pull Col Roulé', 'Rouge', 92.99, 10),
(2, 'T-shirt', 'Blanc', 29.99, 10),
(3, 'Jean', 'Bleu', 99.99, 10),
(4, 'Pantalon Cargo', 'Noir', 89.99, 10),
(5, 'Pantalon Chino', 'Brique', 101.99, 10),
(6, 'Kilt', 'Tartan bleu', 250, 10),
(7, 'String', 'rouge', 29.99, 10),
(8, 'String', 'rouge', 29.99, 10),
(9, 'String', 'rouge', 29.99, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`) USING BTREE;

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `commande_client_FK` (`id_client`) USING BTREE;

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_client_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

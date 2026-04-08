CREATE DATABASE IF NOT EXISTS `clientele` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `clientele`;

CREATE TABLE `CLIENT` (
  `identifiant` INT,
  `prenom` VARCHAR(16),
  `nom` VARCHAR(16),
  `ville` VARCHAR(16),
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `podcast`
--

CREATE TABLE `podcast` (
  `id_podcast` int(11) NOT NULL,
  `Titre` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Résumé` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `Date_publication` date NOT NULL,
  `Durée` time NOT NULL DEFAULT '00:01:00' COMMENT 'Durée du podcast, 1 min par défaut. ',
  `Langue` enum('fr','en') COLLATE utf8_unicode_ci NOT NULL,
  `Format` enum('MP3','MPEG','MP4','WAVE','MOV','AVI') COLLATE utf8_unicode_ci NOT NULL,
  `Url_diffusion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `vignette` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_evenement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `podcast`
--

INSERT INTO `podcast` (`id_podcast`, `Titre`, `Résumé`, `Date_publication`, `Durée`, `Langue`, `Format`, `Url_diffusion`, `vignette`, `id_evenement`) VALUES
(1, 'Prêts à vous laisser conduire ? Enjeux et défis de la voiture autonome', 'Alors que depuis le début des années 2000, on assiste à un essor fulgurantdu secteur de la voiture automatisée avec une ambition affichée d\'améliorerla sécurité et la fluidité du trafic en même temps que de garantir plusde liberté aux conducteurs.\r\n\r\nOr, cette transformation n\'est pas sans soulever d\'importantes questions technologiques, mais aussi des questions environnementales, sociales ou encore juridiques.', '2023-02-17', '02:09:21', 'fr', 'MP4', 'https://mediaserver.lecnam.net/downloads/file/v12663733754fdvus7qf/?url=media_720_AzrdltJsuB.mp4', 'https://mediaserver.lecnam.net/thumbnails/videos/v12663733754e1u4widux3lrm8gafc/thumb_medium.jpg?st=6c-Yw_1ffVRuoGnbdJqz2g&e=1775653725', NULL);

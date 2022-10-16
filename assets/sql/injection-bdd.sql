CREATE DATABASE IF NOT EXISTS `db_pcompare`;
USE `db_pcompare`;

CREATE TABLE `boitier`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `fenetre` int(1) NOT NULL,
    `watercooling` int(1) NOT NULL,
    `alim_fournie` int(1) NOT NULL,
    `systeme_fixation_sans_vis` int(1) NOT NULL,
    `format_boitier` varchar(255) NOT NULL,
    `format_carte_mere` varchar(255) NOT NULL,
    `couleur` varchar(255) NOT NULL,
    `led_rgb` varchar(255) NOT NULL,
    `materiaux` varchar(255) NOT NULL,
    `connecteur_disponible` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `carte_graphique`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `overclock` int(1) NOT NULL,
    `vr` int(1) NOT NULL,
    `chipset` varchar(255) NOT NULL,
    `taille_memoire_video` int(11) NOT NULL,
    `utilisation` varchar(255) NOT NULL,
    `bus` varchar(255) NOT NULL,
    `sorties_videos` varchar(255) NOT NULL,
    `type_refrodissement` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `stockage`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `capacite` int(11) NOT NULL,
    `vitesse_rotation` int(11) NOT NULL,
    `taille_cache` int(11) NOT NULL,
    `format_disque` varchar(255) NOT NULL,
    `utilisation` varchar(255) NOT NULL,
    `techno_enregistrement` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `processeur`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `frequence` int(11) NOT NULL,
    `nb_core` int(11) NOT NULL,
    `tdp` int(11) NOT NULL,
    `version_boite` int(1) NOT NULL,
    `finesse_gravure` int(11) NOT NULL,
    `controleur_integre` int(1) NOT NULL,
    `modele` varchar(255) NOT NULL,
    `support` varchar(255) NOT NULL,
    `plateforme` varchar(255) NOT NULL,
    `chipset` varchar(255) NOT NULL,
    `nom_core` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `memoire`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `capacite` int(11) NOT NULL,
    `nb_barrette` int(11) NOT NULL,
    `radiateur` varchar(255) NOT NULL,
    `utilisation` varchar(255) NOT NULL,
    `type_memoire` varchar(255) NOT NULL,
    `frequence` varchar(255) NOT NULL,
    `format` varchar(255) NOT NULL,
    `spécification` varchar(255) NOT NULL,
    `couleur_radiateur` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `carte_mere`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `nb_slot` int(11) NOT NULL,
    `led` int(1) NOT NULL,
    `raid_support` int(1) NOT NULL,
    `support_proc` varchar(255) NOT NULL,
    `format` varchar(255) NOT NULL,
    `chipset` varchar(255) NOT NULL,
    `type_memoire` varchar(255) NOT NULL,
    `frequence` int(11) NOT NULL,
    `type_multi_gpu` varchar(255) NOT NULL,
    `connecteur_graph` varchar(255) NOT NULL,
    `connecteur_disque` varchar(255) NOT NULL,
    `norme_reseaux` varchar(255) NOT NULL,
    `utilisation` varchar(255) NOT NULL,
    
    PRIMARY KEY (`id`)
);

CREATE TABLE `alimentation`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `marque` varchar(255) NOT NULL,
    `prix` int(11) NOT NULL,
    `puissance` int(11) NOT NULL,
    `modulaire` int(1) NOT NULL,
    `silencieux` int(1) NOT NULL,
    `format_alim` varchar(255) NOT NULL,
    `norme_80_plus` varchar(255) NOT NULL,
    `norme_alim` varchar(255) NOT NULL,
    `multi_gpu` varchar(255) NOT NULL,
    `compatibilite_psu_cm` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

/*
    INSERT INTO `` (`id`, ``, ``,``,``,``)
    VALUE (NULL, '', '', '');

    INSERT INTO `` (`id`, ``, ``,``,``,``,``)
    VALUE (NULL, '', '', '', '',);

    INSERT INTO `` (`id`,``,``,``,``,``,``)
    VALUE (NULL, '', '', '', '', '', );

    INSERT INTO ``(`id`, ``, ``, ``, ``, ``, ``,``)
    VALUES (NULL,'','','','',)
*/
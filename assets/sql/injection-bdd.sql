CREATE DATABASE IF NOT EXISTS `db_comparateur_info`;
USE `db_comparateur_info`;

CREATE TABLE `boitier`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `carte_graphique`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `stockage`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `processeur`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `memoire`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `carte_mere`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `alimentation`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
    `` varchar(255) NOT NULL,
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
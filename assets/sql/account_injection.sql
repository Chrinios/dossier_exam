CREATE DATABASE IF NOT EXISTS `db_pcompare_account`;
USE `db_pcompare_account`;

CREATE TABLE `account`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `message`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    `prenom` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` int(11) NOT NULL,
    `titre` varchar(255) NOT NULL,
    `message` varchar(255) NOT NULL,
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
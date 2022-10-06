CREATE DATABASE IF NOT EXISTS `db_pcompare_account`;
USE `db_pcompare_account`;

CREATE TABLE `account`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `email` int(11) NOT NULL,
    `password` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
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
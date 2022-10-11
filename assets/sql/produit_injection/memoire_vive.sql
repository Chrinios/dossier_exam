USE `db_pcompare`;

INSERT INTO `memoire` (
    `id`,
    `marque`, 
    `prix`, 
    `capacite`, 
    `nb_barrette`, 
    `radiateur`, 
    `utilisation`, 
    `type_memoire`, 
    `frequence`, 
    `format`, 
    `spécification`, 
    `couleur_radiateur`
)
VALUE (
    NULL, 
    '$marque', 
    '$prix', 
    '$capacite', 
    '$nb_barrette', 
    '$radiateur', 
    '$utilisation', 
    '$type_memoire', 
    '$frequence', 
    '$format', 
    '$spécification', 
    '$couleur_radiateur'
);


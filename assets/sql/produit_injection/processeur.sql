USE `db_pcompare`;

INSERT INTO `processeur` (
    `id`,
    `marque`, 
    `prix`, 
    `frequence`, 
    `nb_core`, 
    `tdp`, 
    `version_boite`, 
    `finesse_gravure`, 
    `controleur_integre`, 
    `modele`, 
    `support`, 
    `plateforme`, 
    `chipset`, 
    `nom_core`
)
VALUE (
    NULL, 
    '$marque', 
    '$prix', 
    '$frequence', 
    '$nb_core', 
    '$tdp', 
    '$version_boite', 
    '$finesse_gravure', 
    '$controleur_integre', 
    '$modele', 
    '$support', 
    '$plateforme', 
    '$chipset', 
    '$nom_core'
);

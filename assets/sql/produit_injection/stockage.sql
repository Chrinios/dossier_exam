USE `db_pcompare`;

INSERT INTO `stockage` (
    `id`, 
    `marque`, 
    `prix`, 
    `capacite`, 
    `vitesse_rotation`, 
    `taille_cache`, 
    `format_disque`, 
    `utilisation`, 
    `techno_enregistrement`
)
VALUE (
    NULL, 
    '$marque', 
    '$prix', 
    '$capacite', 
    '$vitesse_rotation', 
    '$taille_cache', 
    '$format_disque', 
    '$utilisation', 
    '$techno_enregistrement'
);
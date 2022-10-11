USE `db_pcompare`;

INSERT INTO `carte_graphique` (
    `id`, 
    `marque`, 
    `prix`, 
    `overclock`, 
    `vr`, 
    `chipset`, 
    `taille_memoire_video`, 
    `utilisation`, 
    `bus`, 
    `sorties_videos`, 
    `type_refrodissement`
)
VALUE (
    NULL,
    '$marque', 
    '$prix', 
    '$overclock', 
    '$vr', 
    '$chipset', 
    '$taille_memoire_video', 
    '$utilisation', 
    '$bus', 
    '$sorties_videos', 
    '$type_refrodissement'
);
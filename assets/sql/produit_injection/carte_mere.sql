USE `db_pcompare`;

INSERT INTO `carte_mere` (
    `id`, 
    `marque`, 
    `prix`, 
    `nb_slot`, 
    `led`, 
    `raid_support`, 
    `support_proc`, 
    `format`, 
    `chipset`, 
    `type_memoire`, 
    `frequence`, 
    `type_multi_gpu`, 
    `connecteur_graph`, 
    `connecteur_disque`, 
    `norme_reseaux`, 
    `utilisation`
)
VALUE (
    NULL, 
    '$marque', 
    '$prix', 
    '$nb_slot', 
    '$led', 
    '$raid_support', 
    '$support_proc', 
    '$format', 
    '$chipset', 
    '$type_memoire', 
    '$frequence', 
    '$type_multi_gpu', 
    '$connecteur_graph', 
    '$connecteur_disque', 
    '$norme_reseaux', 
    '$utilisation'
);


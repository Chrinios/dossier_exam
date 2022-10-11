USE `db_pcompare`;

INSERT INTO `boitier` (
    `id`, 
    `marque`, 
    `prix`, 
    `fenetre`, 
    `watercooling`, 
    `alim_fournie`, 
    `systeme_fixation_sans_vis`, 
    `format_boitier`, 
    `format_carte_mere`, 
    `couleur`, 
    `led_rgb`, 
    `materiaux`, 
    `connecteur_disponible`
)
VALUE (
    NULL, 
    '$marque', 
    '$prix', 
    '$fenetre', 
    '$watercooling', 
    '$alim_fournie', 
    '$systeme_fixation_sans_vis', 
    '$format_boitier', 
    '$format_carte_mere', 
    '$couleur',
    '$led_rgb', 
    '$materiaux', 
    '$connecteur_disponible'
);
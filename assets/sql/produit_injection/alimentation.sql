USE `db_pcompare`;

INSERT INTO `alimentation` (
        `id`,
        `marque`,
        `prix`,
        `puissance`,
        `modulaire`,
        `silencieux`,
        `format_alim`,
        `norme_80_plus`,
        `norme_alim`,
        `multi_gpu`,
        `compatibilite_psu_cm`
    )
VALUE (
    NULL, 
    '$marque', 
    '$prix', 
    '$puissance', 
    '$modulaire', 
    '$silencieux', 
    '$format_alim', 
    '$norme_80_plus', 
    '$norme_alim', 
    '$multi_gpu', 
    '$compatibilite_psu_cm');
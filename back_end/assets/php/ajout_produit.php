<?php
    if(isset($_POST['ajout_alim'])){
        $marque = $_POST['alim-marque'];
        $prix = $_POST['alim-prix'];
        $puissance = $_POST['alim-puissance'];
        $modulaire = $_POST['alim-modulaire'];
        $silencieux = $_POST['alim-silencieux'];
        $format = $_POST['alim-format'];
        $norme_80_plus = $_POST['alim-norme-80'];
        $norme_alim = $_POST['alim-norme-alim'];
        $multi_gpu = $_POST['alim-multi'];
        $compatibilite_psu_cm = $_POST['alim-compatibilite'];

        add_alim(
            $marque, 
            $prix, 
            $puissance, 
            $modulaire, 
            $silencieux, 
            $format, 
            $norme_80_plus, 
            $norme_alim,
            $multi_gpu, 
            $compatibilite_psu_cm
        );
    }
    elseif (isset($_POST['ajout_boitier'])) {
        $marque = $_POST['boitier-marque'];
        $prix = $_POST['boitier-prix'];
        $fenetre = $_POST['boitier-fenetre'];
        $watercooling = $_POST['boitier-water'];
        $alim_fournie = $_POST['boitier-alim'];
        $systeme_fixation_sans_vis = $_POST['boitier-fixation'];
        $format_boitier = $_POST['boitier-format-boitier'];
        $format_carte_mere = $_POST['boitier-format-cm'];
        $couleur = $_POST['boitier-couleur'];
        $led_rgb = $_POST['boitier-led-rgb'];
        $materiaux = $_POST['boitier-materiaux'];
        $connecteur_disponible = $_POST['boitier-connecteur'];

        add_boitier(
            $marque, 
            $prix, 
            $fenetre, 
            $watercooling, 
            $alim_fournie, 
            $systeme_fixation_sans_vis, 
            $format_boitier, 
            $format_carte_mere, 
            $couleur,
            $led_rgb, 
            $materiaux, 
            $connecteur_disponible
        );
    }
    
    elseif (isset($_POST['ajout_cg'])) {
        $marque = $_POST['cg-marque'];
        $prix = $_POST['cg-prix'];
        $overclock = $_POST['cg-overclock'];
        $vr = $_POST['cg-vr'];
        $chipset = $_POST['cg-chipset'];
        $taille_memoire_video = $_POST['cg-taille_memoire'];
        $utilisation = $_POST['cg-utilisation'];
        $bus = $_POST['cg-bus'];
        $sorties_videos = $_POST['cg-sortie_video'];
        $type_refrodissement = $_POST['cg-refroidissement'];

        add_cg(
            $marque,
            $prix, 
            $overclock, 
            $vr, 
            $chipset, 
            $taille_memoire_video, 
            $utilisation, 
            $bus, 
            $sorties_videos, 
            $type_refrodissement
        );
    }
    elseif (isset($_POST['ajout_cm'])) {
        $prix = $_POST['cm-marque'];
        $nb_slot = $_POST['cm-prix'];
        $led = $_POST['cm-led'];
        $raid_support = $_POST['cm-raid'];
        $support_proc = $_POST['cm-support-processeur'];
        $format = $_POST['cm-format'];
        $chipset = $_POST['cm-chipset'];
        $type_memoire = $_POST['cm-memoire'];
        $frequence = $_POST['cm-frequence'];
        $type_multi_gpu = $_POST['cm-type-gpu'];
        $connecteur_graph = $_POST['cm-connecteur-graphique'];
        $connecteur_disque = $_POST['cm-connecteur-dique'];
        $norme_reseaux = $_POST['cm-norme-reseaux'];
        $utilisation = $_POST['cm-utilisation'];

        add_cm(
            $prix, 
            $nb_slot, 
            $led, 
            $raid_support, 
            $support_proc, 
            $format, 
            $chipset, 
            $type_memoire, 
            $frequence, 
            $type_multi_gpu, 
            $connecteur_graph, 
            $connecteur_disque, 
            $norme_reseaux, 
            $utilisation
        );
    }
    elseif (isset($_POST['ajout_memoire'])) {
        $marque = $_POST['memoire-marque'];
        $prix = $_POST['memoire-prix'];
        $capacite = $_POST['memoire-capacite'];
        $nb_barrette = $_POST['memoire-nb-barette'];
        $radiateur = $_POST['memoire-radiateur'];
        $utilisation = $_POST['memoire-utilisation'];
        $type_memoire = $_POST['memoire-type-memoire'];
        $frequence = $_POST['memoire-frequence'];
        $format = $_POST['memoire-format'];
        $spécification = $_POST['memoire-specification'];
        $couleur_radiateur = $_POST['memoire-couleur-radiateur'];

        add_memoire(
            $marque,
            $prix, 
            $capacite, 
            $nb_barrette, 
            $radiateur, 
            $utilisation, 
            $type_memoire, 
            $frequence, 
            $format, 
            $spécification, 
            $couleur_radiateur
        );
    }
    elseif (isset($_POST['ajout_processeur'])) {
        $marque = $_POST['processeur-marque'];
        $prix = $_POST['processeur-prix'];
        $frequence = $_POST['processeur-frequence'];
        $nb_core = $_POST['processeur-nb-core'];
        $tdp = $_POST['processeur-tdp'];
        $version_boite = $_POST['processeur-boite'];
        $finesse_gravure = $_POST['processeur-finesse-gravure'];
        $controleur_integre = $_POST['processeur-controleur-integre'];
        $modele = $_POST['processeur-modele'];
        $support = $_POST['processeur-support'];
        $plateforme = $_POST['processeur-plateforme'];
        $chipset = $_POST['processeur-chipset'];
        $nom_core = $_POST['processeur-nom-core'];

        add_processeur(
            $marque, 
            $prix, 
            $frequence, 
            $nb_core, 
            $tdp, 
            $version_boite, 
            $finesse_gravure, 
            $controleur_integre, 
            $modele, 
            $support, 
            $plateforme, 
            $chipset, 
            $nom_core
        );
    }
    elseif (isset($_POST['ajout_stockage'])) {
        $marque = $_POST['stockage-marque'];
        $prix = $_POST['stockage-prix'];
        $capacite = $_POST['stockage-capacite'];
        $vitesse_rotation = $_POST['stockage-vitesse-rotation'];
        $taille_cache = $_POST['stockage-taille-cache'];
        $format_disque = $_POST['stockage-format'];
        $utilisation = $_POST['stockage-utilisation'];
        $techno_enregistrement = $_POST['stockage-enregistrement'];

        add_stockage(
            $marque, 
            $prix, 
            $capacite, 
            $vitesse_rotation, 
            $taille_cache, 
            $format_disque, 
            $utilisation, 
            $techno_enregistrement,
        );
    }
?>



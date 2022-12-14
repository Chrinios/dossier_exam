<?php
    //Début Partie Produit
        function pdo_connect(){

            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'db_pcompare';
        
            try{
                return $connect_pdo = new PDO(
                    'mysql:host='.$DATABASE_HOST. ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS
                );
            } 
            catch(PDOException $exception){
                exit('failed to connect bdd');
            }
        }

        //Début Ajout produit
            function add_alim(
                $marque, 
                $prix, 
                $puissance, 
                $modulaire, 
                $silencieux, 
                $format_alim, 
                $norme_80_plus, 
                $norme_alim, 
                $multi_gpu, 
                $compatibilite_psu_cm
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `alimentation` (
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
                    '$compatibilite_psu_cm'
                );";
                    
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }

            function add_boitier(
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
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `boitier` (
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
                    );";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }

            function add_cg(
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
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `carte_graphique` (
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
                        `type_refroidissement`
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
                        '$type_refroidissement'
                    );";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }

            function add_cm(
                    $marque, 
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
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `carte_mere` (
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
                    );";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }

            function add_memoire(
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
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `memoire` (
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
                    );";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }

            function add_processeur(
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
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `processeur` (
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
                    );";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }
            
            function add_stockage(
                    $marque, 
                    $prix, 
                    $capacite, 
                    $vitesse_rotation, 
                    $taille_cache, 
                    $format_disque, 
                    $utilisation, 
                    $techno_enregistrement
                ){
                try{
                    $pdo = pdo_connect();
                    $sql = "INSERT INTO `stockage` (
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
                    );";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }
        //Fin Ajout produit

        //Début Modification Produit
            function modif_produit(){

            }
        //Fin Modification Produit
        
        //Début Suppression Produit
            function suppr_produit($categorie ,$new_id){
                try{
                    $pdo = pdo_connect();
                    $sql = "DELETE FROM `$categorie` 
                            WHERE `id` = '$new_id'; ";
                    $pdo->exec($sql);
                }
                catch(PDOException $a){
                    echo $sql . $a->getMessage();
                }
            }
        //Fin Suppression Produit
    //Fin Partie Produit
    
    //Début Partie Compte
        function pdo_connect_account(){

            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'db_pcompare_account';
        
            try{
                return new PDO('mysql:host='.$DATABASE_HOST. ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            } 
            catch(PDOException $exception){
                exit('failed to connect bdd');
            }
        }

        //Pour créer un message
        function sendmessage($nom, $prenom, $email, $phone, $titre, $message){
            try{
                $pdo = pdo_connect_account();
                $sql = "INSERT INTO `message`(`id`,`nom`,`prenom`,`email`,`phone`,`titre`,`message`)
                        VALUE (NULL, '$nom','$prenom','$email','$phone','$titre','$message');";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        //Pour créer un compte
        function create($username, $email, $mdp){
            try{
                $pdo = pdo_connect_account();
                $sql = "INSERT INTO `account`(`id`,`username`,`email`,`password`)
                        VALUE (NULL, '$username','$email','$mdp');";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        //Pour modifier le compte
        function modify($email, $new_mdp){
            try{
                $pdo = pdo_connect_account();
                $sql = "UPDATE `account` 
                        SET `password` = '$new_mdp'
                        WHERE `account`.`email` = '$email'; ";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        //Pour supprimer le compte
        function suppr_client($id_client){
            try{
                $pdo = pdo_connect_account();
                $sql = "DELETE FROM `account` 
                        WHERE `id` = '$id_client'; ";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        /*----------------PAS FONCTIONNEL------------------*/

        //Pour log-in dans un compte
        function enter($username, $email, $password){
            try{
                $pdo = pdo_connect_account();
                $sql = "SELECT `id`, `username`, `email`, `password` 
                        FROM `account` 
                        WHERE 1";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }
    //Fin Partie Compte

    //Début partie Connexion

        function init_session():bool{
            //Si il y a pas d'id de session alors on commence la session et on generer un id.
            if(!session_id()){
                session_start();
                session_regenerate_id();
                return true;
            }
            else{
                return false;
            }

        }

        function is_connected():bool{
            return true; 
        }

        function unset_session() :void{
            session_unset();
            session_destroy();
        }
    //Fin partie Connexion
?>
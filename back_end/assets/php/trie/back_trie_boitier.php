<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `boitier` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_boitier_marque'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_prix'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_fenetre'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY fenetre ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_watercooling'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY watercooling ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_alim'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY alim_fournie ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_fixation'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY systeme_fixation_sans_vis ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_boitier'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY format_boitier ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_norme_cm'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY format_carte_mere ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_couleur'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY couleur ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_led_rgb'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY led_rgb ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_materiaux'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY materiaux ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_boitier_connecteur'])){
            $dbb_get = "SELECT * FROM `boitier` ORDER BY connecteur_disponible ASC";
            $go = $pdo->query($dbb_get);
        }
    //Fin Partie Triage

    //Début partie Affichage
        while($row = $go->fetch(PDO::FETCH_OBJ != NULL)){
            echo "<tr><td>";
                echo $row['id'];
            echo "</td><td>";
                echo $row['marque'];
            echo "</td><td>";
                echo $row['prix'];
            echo "</td><td>";
                echo $row['fenetre'];
            echo "</td><td>";
                echo $row['watercooling'];
            echo "</td><td>";
                echo $row['alim_fournie'];
            echo "</td><td>";
                echo $row['systeme_fixation_sans_vis'];
            echo "</td><td>";
                echo $row['format_boitier'];
            echo "</td><td>";
                echo $row['format_carte_mere'];
            echo "</td><td>";
                echo $row['couleur'];
            echo "</td><td>";
                echo $row['led_rgb'];
            echo "</td><td>";
                echo $row['materiaux'];
            echo "</td><td>";
                echo $row['connecteur_disponible'];
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
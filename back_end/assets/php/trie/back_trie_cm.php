<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `carte_mere` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_cm_marque'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_prix'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_nb_slot'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY nb_slot ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_led'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY led ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_raid'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY raid_support ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_support_proc'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY support_proc ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_format'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY `format` ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_chipset'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY chipset ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_type_memoire'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY type_memoire ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_frequence-memoire'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY frequence ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_type_multi_gpu'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY type_multi_gpu ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_connecteur_graphique'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY connecteur_graph ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_connecteur_disque'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY connecteur_disque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_norme_reseaux'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY norme_reseaux ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cm_utilisation'])){
            $dbb_get = "SELECT * FROM `carte_mere` ORDER BY utilisation ASC";
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
                echo $row['nb_slot'];
            echo "</td><td>";
                echo $row['led'];
            echo "</td><td>";
                echo $row['raid_support'];
            echo "</td><td>";
                echo $row['support_proc'];
            echo "</td><td>";
                echo $row['format'];
            echo "</td><td>";
                echo $row['chipset'];
            echo "</td><td>";
                echo $row['type_memoire'];
            echo "</td><td>";
                echo $row['frequence'];
            echo "</td><td>";
                echo $row['connecteur_graph'];
            echo "</td><td>";
                echo $row['connecteur_disque'];
            echo "</td><td>";
                echo $row['norme_reseaux'];
            echo "</td><td>";
                echo $row['utilisation'];
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
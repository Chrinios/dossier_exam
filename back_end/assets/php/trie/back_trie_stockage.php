<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `stockage` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_stockage_marque'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_stockage_prix'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_stockage_capacite'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY capacite ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_rotation'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY vitesse_rotation ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_stockage_cache'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY taille_cache ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_stockage_format'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY format_disque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_stockage_utilisation'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY utilisation ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_stockage_technologie'])){
            $dbb_get = "SELECT * FROM `stockage` ORDER BY techno_enregistrement ASC";
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
                echo $row['capacite'];
            echo "</td><td>";
                echo $row['vitesse_rotation'];
            echo "</td><td>";
                echo $row['taille_cache'];
            echo "</td><td>";
                echo $row['format_disque'];
            echo "</td><td>";
                echo $row['utilisation'];
            echo "</td><td>";
                echo $row['techno_enregistrement'];
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
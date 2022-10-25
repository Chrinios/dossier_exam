<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `memoire` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_memoire_marque'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_prix'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_capacite'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY capacite ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_nombre_barrette'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY nb_barrette ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_radiateur'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY radiateur ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_utilisation'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY utilisation ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_type_memoire'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY type_memoire ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_frequence'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY frequence ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_format'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY `format` ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_specification'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY spécification ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_memoire_couleur'])){
            $dbb_get = "SELECT * FROM `memoire` ORDER BY couleur_radiateur ASC";
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
                echo $row['nb_barrette'];
            echo "</td><td>";
                echo $row['radiateur'];
            echo "</td><td>";
                echo $row['utilisation'];
            echo "</td><td>";
                echo $row['type_memoire'];
            echo "</td><td>";
                echo $row['frequence'];
            echo "</td><td>";
                echo $row['format'];
            echo "</td><td>";
                echo $row['spécification'];
            echo "</td><td>";
                echo $row['couleur_radiateur']; 
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
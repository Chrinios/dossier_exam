<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `processeur` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_processeur_marque'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_prix'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_frequence'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY frequence ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_nb_core'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY nb_core ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_tdp'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY tdp ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_version_boite'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY version_boite ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_finesse_gravure'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY finesse_gravure ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_controleur_integre'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY controleur_integre ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_modele'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY modele ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_support'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY support ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_plateforme'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY plateforme ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_chipset'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY chipset ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_processeur_nom_core'])){
            $dbb_get = "SELECT * FROM `processeur` ORDER BY nom_core ASC";
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
                echo $row['frequence'];
            echo "</td><td>";
                echo $row['nb_core'];
            echo "</td><td>";
                echo $row['tdp'];
            echo "</td><td>";
                echo $row['version_boite'];
            echo "</td><td>";
                echo $row['finesse_gravure'];
            echo "</td><td>";
                echo $row['controleur_integre'];
            echo "</td><td>";
                echo $row['modele'];
            echo "</td><td>";
                echo $row['support'];
            echo "</td><td>";
                echo $row['plateforme'];
            echo "</td><td>";
                echo $row['chipset'];
            echo "</td><td>";
                echo $row['nom_core'];
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
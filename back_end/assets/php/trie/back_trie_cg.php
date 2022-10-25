<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `carte_graphique` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_cg_marque'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_prix'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_overclock'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY overclock ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_vr'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY vr ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_chipset'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY chipset ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_taille_memoire_video'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY taille_memoire_video ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_utilisation'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY utilisation ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_bus'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY bus ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_sorties_videos'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY sorties_videos ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_cg_compatibilite'])){
            $dbb_get = "SELECT * FROM `carte_graphique` ORDER BY compatibilite_psu_cm ASC";
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
                echo $row['overclock'];
            echo "</td><td>";
                echo $row['vr'];
            echo "</td><td>";
                echo $row['chipset'];
            echo "</td><td>";
                echo $row['taille_memoire_video'];
            echo "</td><td>";
                echo $row['utilisation'];
            echo "</td><td>";
                echo $row['bus'];
            echo "</td><td>";
                echo $row['sorties_videos'];
            echo "</td><td>";
                echo $row['type_refroidissement'];
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
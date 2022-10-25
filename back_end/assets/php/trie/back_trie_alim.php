<?php
    //Prendre les infos du serveur
    $dbb_get = "SELECT * FROM `alimentation` WHERE 1";
    $go = $pdo->query($dbb_get);

    //Début Partie Triage grâce a la requête SQL
        if(isset($_POST['sort_alim_marque'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY marque ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_prix'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY prix ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_puissance'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY puissance ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_modulaire'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY modulaire ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_silencieux'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY silencieux ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_format'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY format_alim ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_norme_80'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY norme_80_plus ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_norme_alim'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY norme_alim ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_multi'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY multi_gpu ASC";
            $go = $pdo->query($dbb_get);
        }
        else if(isset($_POST['sort_alim_compatibilite'])){
            $dbb_get = "SELECT * FROM `alimentation` ORDER BY compatibilite_psu_cm ASC";
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
                echo $row['puissance'];
            echo "</td><td>";
                echo $row['modulaire'];
            echo "</td><td>";
                echo $row['silencieux'];
            echo "</td><td>";
                echo $row['format_alim'];
            echo "</td><td>";
                echo $row['norme_80_plus'];
            echo "</td><td>";
                echo $row['norme_alim'];
            echo "</td><td>";
                echo $row['multi_gpu'];
            echo "</td><td>";
                echo $row['compatibilite_psu_cm'];
            echo "</td></tr>";
        };
    //Fin partie Affichage
?>
<?php
    if(isset($_POST['comparer'])){
        foreach((array)$_POST['check'] as $prod){
            
            $try = "SELECT * FROM `stockage` WHERE `id` = $prod ";
            $jack = $pdo->query($try);

            $number = 1;

            while($row = $jack->fetch(PDO::FETCH_OBJ != NULL)){
                echo "<tr><td>";
                    echo 'Produit '.$number++.'';
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
        }
    }
?>
<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `stockage` WHERE `id` = $prod";
            $jack = $pdo->query($grab);
            
            while($row = $jack->fetch(PDO::FETCH_OBJ != NULL)){
                echo "<ul style='border: 3px solid red;'><li class='liste'>";
                    echo 'Produit '.$number++.'';

                echo "</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "</li><li class='liste'>";
                    echo $row['marque'];

                echo "</li><li class='liste'>";
                    echo $row['prix'];
                    echo " €";

                echo "</li><li class='liste'>";
                    echo $row['capacite'];
                    echo " To";

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['vitesse_rotation'];
                    echo "<br />(RPM)";

                echo "</li><li class='liste'>";
                    echo $row['taille_cache'];
                    echo " Mo";

                echo "</li><li class='liste'>";
                    echo $row['format_disque'];

                echo "</li><li class='liste'>";
                    echo $row['utilisation'];

                echo "</li><li class='liste'>";
                    echo $row['techno_enregistrement'];
                echo "</li></ul>";
            };
        }
    }
?>
<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `carte_graphique` WHERE `id` = $prod";
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
                    echo $row['chipset'];

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['taille_memoire_video'];
                    echo " MHz";

                echo "</li><li class='liste'>";
                    echo $row['overclock'];

                echo "</li><li class='liste'>";
                    echo $row['vr'];

                echo "</li><li class='liste'>";
                    echo $row['utilisation'];

                echo "</li><li class='liste'>";
                    echo $row['bus'];

                echo "</li><li class='liste'>";
                    echo $row['sorties_videos'];

                echo "</li><li class='liste'>";
                    echo $row['type_refroidissement'];
                echo "</li></ul>";
            };
        }
    }
?>
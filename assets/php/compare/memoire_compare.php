<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `memoire` WHERE `id` = $prod";
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

                echo "</li><li class='liste'>";
                    echo $row['capacite'];

                echo "</li><li class='liste'>";
                    echo $row['type_memoire'];

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['nb_barrette'];

                echo "</li><li class='liste'>";
                    echo $row['radiateur'];

                echo "</li><li class='liste'>";
                    echo $row['utilisation'];

                echo "</li><li class='liste'>";
                    echo $row['frequence'];

                echo "</li><li class='liste'>";
                    echo $row['format'];

                echo "</li><li class='liste'>";
                    echo $row['spécification'];

                echo "</li><li class='liste'>";
                    echo $row['couleur_radiateur'];
                echo "</li></ul>";
            };
        }
    }
?>
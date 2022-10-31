<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `carte_mere` WHERE `id` = $prod";
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
                    echo $row['format'];

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['nb_slot'];

                echo "</li><li class='liste'>";
                    echo $row['led'];

                echo "</li><li class='liste'>";
                    echo $row['raid_support'];

                echo "</li><li class='liste'>";
                    echo $row['support_proc'];

                echo "</li><li class='liste'>";
                    echo $row['chipset'];

                echo "</li><li class='liste'>";
                    echo $row['type_memoire'];

                echo "</li><li class='liste'>";
                    echo $row['frequence'];

                echo "</li><li class='liste'>";
                    echo $row['type_multi_gpu'];

                echo "</li><li class='liste'>";
                    echo $row['connecteur_graph'];

                echo "</li><li class='liste'>";
                    echo $row['connecteur_disque'];

                echo "</li><li class='liste'>";
                    echo $row['norme_reseaux'];

                echo "</li><li class='liste'>";
                    echo $row['utilisation'];
                echo "</li></ul>";
            };
        }
    }
?>
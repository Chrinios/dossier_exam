<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `alimentation` WHERE `id` = $prod";
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
                    echo $row['puissance'];
                    echo " W (Watt)";

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['modulaire'];

                echo "</li><li class='liste'>";
                    echo $row['silencieux'];
                    echo "<br><p></p>";

                echo "</li><li class='liste'>";
                    echo $row['format_alim'];
                    echo "<br><p></p>";

                echo "</li><li class='liste'>";
                    echo $row['norme_80_plus'];

                echo "</li><li class='liste'>";
                    echo $row['norme_alim'];
                    echo "<br><p></p>";

                echo "</li><li class='liste'>";
                    echo $row['multi_gpu'];

                echo "</li><li class='liste'>";
                    echo $row['compatibilite_psu_cm'];
                echo "</li></ul>";
            };
        }
    }
?>
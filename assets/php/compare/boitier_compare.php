<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `boitier` WHERE `id` = $prod";
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
                    echo $row['format_boitier'];

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['fenetre'];

                echo "</li><li class='liste'>";
                    echo $row['watercooling'];
                    echo "<br><p></p>";

                echo "</li><li class='liste'>";
                    echo $row['alim_fournie'];
                    echo "<br><p></p>";

                echo "</li><li class='liste'>";
                    echo $row['systeme_fixation_sans_vis'];

                echo "</li><li class='liste'>";
                    echo $row['format_carte_mere'];

                echo "</li><li class='liste'>";
                    echo $row['couleur'];

                echo "</li><li class='liste'>";
                    echo $row['led_rgb'];

                echo "</li><li class='liste'>";
                    echo $row['materiaux'];
                    echo "<br><p></p>";

                echo "</li><li class='liste'>";
                    echo $row['connecteur_disponible'];
                    echo "<br><p></p>";
                echo "</li></ul>";
            };
        }
    }
?>
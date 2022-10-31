<?php
    if(isset($_POST['comparer'])){
        //Défini les numéros pour les listes des spécifications des produits
        $number = 1;
        $num = 1;      

        foreach((array)$_POST['check'] as $prod){
            
            $grab = "SELECT * FROM `processeur` WHERE `id` = $prod";
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
                    echo $row['modele'];
                    echo " To";

                echo"</li><li>";
                    echo "<p><strong>------------------------------</strong></p></li>";

                echo "<li class='liste'>";
                    echo $row['frequence'];
                    echo "<br />(MHz)";

                echo "</li><li class='liste'>";
                    echo $row['nb_core'];

                echo "</li><li class='liste'>";
                    echo $row['tdp'];

                echo "</li><li class='liste'>";
                    echo $row['version_boite'];

                echo "</li><li class='liste'>";
                    echo $row['finesse_gravure'];

                echo "</li><li class='liste'>";
                    echo $row['controleur_integre'];

                echo "</li><li class='liste'>";
                    echo $row['plateforme'];

                echo "</li><li class='liste'>";
                    echo $row['chipset'];

                echo "</li><li class='liste'>";
                    echo $row['nom_core'];
                echo "</li></ul>";
            };
        }
    }
?>
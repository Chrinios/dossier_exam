<?php
    /*
        Dire que si le prix | min et petit que le prix de l'article
                            | max et plus grand que le prix de l'article
        Alors on affiche la liste avec les produits ayant le prix correspondant.
    */

    if(isset($_POST['search_affine'])){
        $prix_min = $_POST['prix_min'];
        $prix_max = $_POST['prix_max'];
        
        $prix = "SELECT `id`, `marque`, `prix`, `capacite` FROM `stockage` WHERE prix <= $prix_min AND prix >= $prix_max";
        $go = $pdo->query($prix);

        while($row = $go->fetch(PDO::FETCH_OBJ != NULL)){
            echo "<tr><td>";
                echo $row['marque'];
            echo "</td><td>";
                echo $row['prix'];
            echo "</td><td>";
                echo $row['capacite'];
            echo "</td><td>
                <input type='checkbox' name='check[]' value='id'>
            </td></tr>";
        }
    }
    
?>
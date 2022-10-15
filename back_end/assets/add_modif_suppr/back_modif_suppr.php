<?php
    
    $dbb_get = "SELECT * FROM `stockage` WHERE 1";
    $go = $pdo->query($dbb_get);

    while($row = $go->fetch(PDO::FETCH_OBJ != NULL)){
        echo "<tr><td>";
        echo $row['id'];
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
    }

?>
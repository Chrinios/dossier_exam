<?php
    $dbb_get = "SELECT * FROM `account` WHERE 1";
    $go = $pdo->query($dbb_get);

    while($row = $go->fetch(PDO::FETCH_OBJ != NULL)){
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['username'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['password'];
        echo "</td></tr>";
    }

?>

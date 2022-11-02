<?php
    if(isset($_POST['login'])){
        $name = strip_tags(htmlentities($_POST['username']));
        $mdp = strip_tags(htmlentities($_POST['password']));

        $connect = "SELECT * FROM `account` WHERE username = :user";
        $query = $pdo->prepare($connect);

        $query->bindValue(":user", $name);

        $query->execute();

        $user = $query->fetch();

        if(password_verify($mdp, $user["password"])){
            header("Location: back_end/back_office.php");
        }
        else{
            echo"L'utilisateur ou le mot de passe n'existe pas";
        }        
    }
?>
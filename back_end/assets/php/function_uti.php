<?php   
    //Pour supprimer le compte client
    if(isset($_POST['suppr_client'])){
        $id_client = $_POST['id_client'];

        suppr_client( 
            $id_client
        );
    }

    elseif(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mdp = password_hash($_POST['pwd'], PASSWORD_BCRYPT);

        create(
            $username, $email, $mdp
        );
    }

    elseif(isset($_POST['recreate'])){
        $email = $_POST['email'];
        $new_mdp = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
        modify(
            $email, $new_mdp
        );
    }
?>
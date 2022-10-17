<?php
    require_once('assets/php/function.php');
    $db = pdo_connect_account();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../dossier_exam/assets/css/style.css">
        <title>PCompare</title>
    </head>
    <body>
        <header>
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/header.php') 
            ?>
        </header>
        <div class="content">
            <div class="case">
                <form action="" method="post">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <button name="newpwd">
                        Régénérer le mot de passe.
                    </button>
                    <?php
                        require_once('assets/php/password.php');
                    ?>
                    <button type="submit" name="recreate">
                        Enregistrer le Nouveau Mot de Passe
                    </button>
                </form>
            </div>
        </div>
        <footer>
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/footer.php');
            
                if(isset($_POST['recreate'])){
                    $email = $_POST['email'];
                    $password = $_POST['pwd'];
                    modify(
                        $email, $password
                    );
                }
            ?>
        </footer>
    </body>
</html>
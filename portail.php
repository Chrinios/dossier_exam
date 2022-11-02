<?php
    ini_set('display_errors', true);
    require_once('assets/php/function.php');
    $pdo = pdo_connect_account();

    session_start();
    /*init_session();*/
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../dossier_exam/assets/css/style.css">
        <link rel="stylesheet" href="../dossier_exam/assets/css/portail.css">
        <title>PCompare Portail</title>
    </head>
    <body>
        <?php
            include_once('../dossier_exam/assets/Fh/header.php')
        ?>
        <div class="portail">
            <!--Partie pour les forms-->
            <div class="formulaire">
                <div id="form_log-in">
                    <div class="form_portail">
                        <h1>
                            <u>
                                Se Connecter
                            </u>
                        </h1>
                        <form action="" method="post" class="form-input">
                            <input type="text" name="username" id="username" class="input" placeholder="Nom d'utilisation" required>
                            <input type="password" name="password" id="password" class="input" placeholder="Mot de passe" required>
                            <button type="submit" name="login">Se connecter</button>
                        </form>
                        <div style="display:flex;">
                            <?php
                                include_once('assets/php/connect.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            include_once('../dossier_exam/assets/Fh/footer.php');
        ?>
    </body>
</html>
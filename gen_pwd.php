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
        <link rel="stylesheet" href="assets/css/gen_mdp.css">
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
                <h2>
                    <u>
                        Re-Création de votre Mot de passe.
                    </u>
                </h2>
                <form action="" method="post" id="form_new_mdp">
                    <div id="part_mdp">
                        <button name="newpwd">
                            Régénérer le mot de passe.
                        </button>
                        <div id="mdp">
                            <p id="mdp_desc">
                                Votre <strong>nouveau</strong> mot de passe va apparaitre ici <i class="fa-sharp fa-solid fa-arrow-right"></i>
                            </p>
                            <?php
                                require_once('assets/php/password.php');
                            ?>
                        </div>
                    </div>
                    <div id="part_end">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <button type="submit" name="recreate">
                            Enregistrer le Nouveau Mot de Passe
                        </button>
                    </div>
                    
                </form>
            </div>
            <div>
                <form action="portail.php">
                    <button>
                        Retourné au login ?
                    </button>
                </form>
            </div>
        </div>
        <footer>
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/footer.php');
            
                if(isset($_POST['recreate'])){
                    $email = $_POST['email'];
                    $new_mdp = $_POST['pwd'];
                    modify(
                        $email, $new_mdp
                    );
                }
            ?>
        </footer>
    </body>
</html>
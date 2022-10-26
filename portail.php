<?php
    ini_set('display_errors', true);
    require_once('assets/php/function.php');
    $pdo = pdo_connect_account();
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
            <!--Partie btn pour choisir entre les forms-->
            <div class="btn_portail">
                <button id="log_in" onclick=abracadabra()>
                    Log-in
                </button>
                <button id="hide" onclick=hideabracadabra()>
                    Tout cacher
                </button>
                <form action="back_end/back_office.php">
                    <button>
                        !TEST! back office
                    </button>
                </form>
                <button id="register" onclick=abracadabrasse()>
                    Register
                </button>
            </div>
            <!--Partie pour les forms-->
            <div class="formulaire">
                <div id="form_log-in">
                    <div class="form_portail">
                        <h1>
                            <u>
                                Se Connecter
                            </u>
                        </h1>
                        <form action="" method="get" class="form-input">
                            <input type="text" name="username" id="username" class="input" placeholder="Nom d'utilisation" required>
                            <input type="password" name="password" id="password" class="input" placeholder="Mot de passe" required>
                            <input type="submit" value="Log-In">
                        </form>
                        <p>
                            <!--Pour recréer sont password sur une nouvelle page, ou il y aura le nv mdp + le btn pour revenir a l'acceuil-->
                            <a href="gen_pwd.php">
                                Forget you Password?
                            </a>
                        </p>
                    </div>
                </div>
                <div id="form_register">
                    <div class="form_portail">
                        <h1>
                            <u>
                                S'Enregistrer
                            </u>
                        </h1>
                        <form action="" method="post" class="form-input">
                            <input type="text" name="username" id="username" class="input" placeholder="Nom d'utilisation" required>
                            <input type="email" name="email" id="email" class="input" placeholder="Email" required>
                            <input type="password" name="password" id="password" class="input" placeholder="Mot de Passe" required>
                            <input type="submit" value="Register" name="register">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <?php 
            include_once('../dossier_exam/assets/Fh/footer.php');

            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                create(
                    $username, $email, $password
                );
            }
        ?>
        <script src="assets/js/switch.js"></script>
    </body>
</html>
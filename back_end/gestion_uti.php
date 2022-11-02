<?php
    ini_set('display_errors', true);
    require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/function.php');
    $pdo= pdo_connect_account();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/back_css.css">
        <link rel="stylesheet" href="assets/css/uti_css.css">
        <title>
            Gestion Utilisateur
        </title>
    </head>
    <body>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/Fh/back_header.php');
        ?>
        <!--Permet de modifier / supprimer des produits-->
        <div id="modif_suppr_produit">
            <div class="table">
                <table id="myTable">
                    <tr>
                        <th>
                            <button>
                                Id
                            </button>
                        </th>
                        <th>
                            <button>
                                Username
                            </button>
                        </th>
                        <th>
                            <button>
                                Email
                            </button>
                        </th>
                        <th>
                            <button>
                                Password
                            </button>
                        </th>
                    </tr>  
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/account_gestion/account_gestion.php');
                    ?>
                </table>
            </div>
            <div id="form_register">
                <h1>
                    <u>
                        Créer un autre Accés au Back-end
                    </u>
                </h1>
                <form action="" method="post" class="form-input">
                    <input type="text" name="username" id="username" class="input" placeholder="Nom d'utilisation" required>
                    <input type="email" name="email" id="email" class="input" placeholder="Email" required>
                    <input type="password" name="password" id="password" class="input" placeholder="Mot de Passe" required>
                    <input type="submit" value="Register" name="register">
                </form>
            </div>
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/account_gestion/suppr.php') 
            ?>
        </div>

        <div>
            <h2>
                <u>
                    Re-Création de votre Mot de passe.
                </u>
            </h2>
            <form action="" method="post">
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

        <!--Permet de faire la connection entre les données inséré dans le form et dans les emplacements pour envoyer a la bdd-->
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/ajout_produit.php');
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/function_uti.php');
        ?>
        <script src="assets/js/appear_produit.js"></script>
    </body>
</html>
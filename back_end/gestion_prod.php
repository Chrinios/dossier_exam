<?php
    ini_set('display_errors', true);
    require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/function.php');
    $pdo = pdo_connect();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/back_css.css">
        <link rel="stylesheet" href="assets/css/back_produit.css">
        <title>
            Gestion Produit
        </title>
    </head>
    <body>
        <header id="header">
            <a href="back_office.php">
                <button>Retourner a l'accueil du back_office</button>
            </a>
        </header>
        <h1>
            Gestionnaire de produit
        </h1>
        
        <button class="btn-add-produit" onclick="appear_all_produit()">
            Ajouter un produit ?
        </button>
        <button class="btn-modif-suppr-produit" onclick="appear_modif_suppr()">
            Modifiez ? Supprimer un produit ?
        </button>

        <!--Permet d'ajouter des produits a la bdd-->
        <div id="add_all_produit">
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/add_modif_suppr/back_add_form.php') ?>
        </div>

        <!--Permet de modifier / supprimer des produits-->
        <div id="list_produit">
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/add_modif_suppr/back_modif_form.php');
            ?>
        </div>
        
        <!--Permet de faire la connection entre les données inséré dans le form et dans les emplacements pour envoyer a la bdd-->
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/ajout_produit.php');
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/function_suppr.php');
        ?>
        <script src="assets/js/appear_produit.js"></script>
    </body>
</html>
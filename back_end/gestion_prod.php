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
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/Fh/back_header.php');
        ?>
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
                            <button onclick="">
                                Marque
                            </button>
                        </th>
                        <th>
                            <button onclick="sortTable()">
                                Prix(€)
                            </button>
                        </th>
                        <th>
                            <button onclick="sortTable()">
                                Capacite(To)
                            </button>
                        </th>
                        <th>
                            <button onclick="sortTable()">
                                Vitesse_rotation (RPM)
                            </button>
                        </th>
                        <th>
                            <button onclick="sortTable()">
                                Taille_cache (Mo)
                            </button>
                        </th>
                        <th>
                            <button onclick="sortTable()">
                                Format_disque
                            </button>
                        </th>
                        <th >
                            <button onclick="">
                                Utilisation
                            </button>
                        </th>
                        <th >
                            <button onclick="">
                                Techno_enregistrement
                            </button>
                        </th>
                    </tr>  
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/add_modif_suppr/back_modif_suppr.php') 
                    ?>
                </table>
            </div>
            
        </div>

        <!--Permet de faire la connection entre les données inséré dans le form et dans les emplacements pour envoyer a la bdd-->
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/ajout_produit.php');
        ?>
        <script src="assets/js/appear_produit.js"></script>
        <script src="assets/js/sort_table.js"></script>
    </body>
</html>
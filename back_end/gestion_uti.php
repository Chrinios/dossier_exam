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
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/account_gestion/suppr.php') 
            ?>
        </div>

        <!--Permet de faire la connection entre les données inséré dans le form et dans les emplacements pour envoyer a la bdd-->
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/ajout_produit.php');
            
            //Pour supprimer le compte client
            if(isset($_POST['suppr_client'])){
                $id_client = $_POST['id_client'];

                suppr_client( 
                    $id_client
                );
            }
        ?>
        <script src="assets/js/appear_produit.js"></script>
    </body>
</html>
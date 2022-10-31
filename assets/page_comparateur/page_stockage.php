<?php
    ini_set('display_errors', true);
    require_once('../php/function.php');
    $pdo = pdo_connect();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/style_comparateur.css">
        <script src="../js/btn_affineur.js"></script>
        <title>PCompare - Liste et comparateur</title>
    </head>
    <body>
        <header>
            <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/light_header.php');
            ?>
        </header>
        <div id="liste">
            <h1>
                <u>
                    Comparer vos produits ICI
                </u>
                
            </h1>
            <a href="../../index.php">Revenir a l'Accueil ?</a>
            <div id="affinage">
                <!--Emplacement pour trier les produits et enlever les produits non correspondant a ce qui est demandé-->
                <div id="case_sort">
                    <!--
                        Groupe de Formulaire pour aller afficher 
                        les produits correspondants au filtre demandé
                    -->
                    
                    <form action="" method="post" class="affine_recherche" id="marque">
                        <!--Partie pour demander la marque choisi-->
                        <p>Marque</p>
                        <select name="marquos">
                            <option value="">Marque</option>
                            <option value="Seagate IronWolf">Seagate IronWolf</option>
                            <option value="Seagate Barracuda">Seagate Barracuda</option>
                            <option value="Toshiba">Toshiba</option>
                            <option value="WD_Black">WD_Black</option>
                            <option value="Western Digital">Western Digital</option>
                        </select>
                        <button type="submit" name="search_marque" class="regler">Régler</button>
                    </form>
                        
                    <form action="" method="post" class="affine_recherche" id="prix">
                        <p>Prix</p>
                        <!--Partie demande du prix-->
                        <input type="number" name="prix_max" id="prix_max" placeholder="Prix Minimum(€)">
                        <input type="number" name="prix_min" id="prix_min" placeholder="Prix Maximum(€)">
                        <button type="submit" name="search_affine" class="regler">Régler</button>
                    </form>
                    <form action="" method="post" class="affine_recherche" id="capacite">
                        <p>Stockage</p>
                        <!--Partie demande pour la capacité de stockage-->
                        <input type="number" name="capacite_min" id="capacite_min" placeholder="Stockage Minimum (To)">
                        <input type="number" name="capacite_max" id="capacite_max" placeholder="Stockage Maximum (To)">
                        <button type="submit" name="search_stockage" class="regler">Régler</button>
                    </form>   
                </div>
                <!--Emplacement pour afficher la liste des produits sans entrer dans toute leurs options-->
                <div id="case_list">
                    <table>
                        <tr>
                            <th>Marque</th>
                            <th>Prix (€)</th>
                            <th>Capacité (Go)</th>
                        </tr>
                        <form action="" method="post">
                            <?php
                                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/stockage_lister.php');
                            ?>
                            <button type="submit" name="comparer" onclick="appear_comparateur()">
                                Comparer
                            </button>
                        </form>
                    </table>
                </div>
            </div>        
            <div id="comparateur">
                <div id="sous_titre">
                    <h2>Vos Produits a comparé apparaitront ici-bas !</h2>
                </div>
                <div id="comparateur_table">
                    <table>
                        <ul style='border: 3px solid green;'>
                            <li class='liste'>
                                Produit :
                            </li>
                            <div>
                                <p><strong>Principal----------------</strong></p>
                                <li class='liste'>
                                    Marque
                                </li>
                                <li class='liste'>
                                    Prix(€)
                                </li>
                                <li class='liste'>
                                    Capacite(To)
                                </li>
                            </div>
                            <div>
                                <p><strong>Secondaire--------------</strong></p>
                                <li class='liste'>
                                    Vitesse_rotation (RPM)
                                </li>
                                <li class='liste'>
                                    Taille_cache (Mo)
                                </li>
                                <li class='liste'>
                                    Format_disque
                                </li>
                                <li class='liste'>
                                    Utilisation
                                </li>
                                <li class='liste'>
                                    Techno_enregistrement
                                </li>
                            </div>
                            
                        </ul>
                        <div id="appear_product_select">
                            <form action="" method="post">
                                <?php
                                    include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/stockage_compare.php');
                                ?>
                            </form>
                        </div>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/footer.php');   
            ?>
        </footer>
    </body>
</html>
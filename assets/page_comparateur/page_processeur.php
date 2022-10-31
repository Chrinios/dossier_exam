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
                        <option value="AMD">AMD</option>
                        <option value="Intel">Intel</option>
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
                    <p>Modèle</p>
                    <!--Partie demande pour la capacité de stockage-->
                    <select name="modeles">
                    <option value="">Modèle</option>
                        <option value="">---AMD--</option>
                        <option value="AMD_Ryzen_3">Ryzen 3</option>
                        <option value="AMD_Ryzen_5">Ryzen 5</option>
                        <option value="AMD_Ryzen_5_Pro">Ryzen 5 Pro</option>
                        <option value="AMD_Ryzen_7">Ryzen 7</option>
                        <option value="AMD_Ryzen_9">Ryzen 9</option>
                        <option value="AMD_Ryzen_Threadripper">Ryzen Threadripper</option>
                        <option value="AMD_Ryzen_Threadripper_Pro">Ryzen Threadripper Pro</option>
                        <option value="">---Intel---</option>
                        <option value="Intel_Celeron">Celeron</option>
                        <option value="Intel_Core_i3">Core i3</option>
                        <option value="Intel_Core_i5">Core i5</option>
                        <option value="Intel_Core_i7">Core i7</option>
                        <option value="Intel_Core_i9">Core i9</option>
                        <option value="Intel_Pentium">Pentium</option>
                    </select>
                    <button type="submit" name="search_modele" class="regler">Régler</button>
                </form>   
            </div>
            <!--Emplacement pour afficher la liste des produits sans entrer dans toute leurs options-->
            <div id="case_list">
                <table>
                    <tr>
                        <th>Marque</th>
                        <th>Prix (€)</th>
                        <th>Modèle</th>
                    </tr>
                    <form action="" method="post">
                        <?php
                            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/processeur_lister.php');
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
                                Modèle
                            </li>
                        </div>
                        <div>
                            <p><strong>Secondaire--------------</strong></p>
                            <li class='liste'>
                                Fréquence (MHz)
                            </li>
                            <li class='liste'>
                                Nombre de Core
                            </li>
                            <li class='liste'>
                                TDP
                            </li>
                            <li class='liste'>
                                Version Boite
                            </li>
                            <li class='liste'>
                                Finesse Gravure
                            </li>
                            <li class='liste'>
                                Contrôleur Intrégrer
                            </li>
                            <li class='liste'>
                                Support
                            </li>
                            <li class='liste'>
                                Plateforme
                            </li>
                            <li class='liste'>
                                Chipset
                            </li>
                            <li class='liste'>
                                Nom du Core
                            </li>
                        </div>
                        
                    </ul>
                    <div id="appear_product_select">
                        <form action="" method="post">
                            <?php
                                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/processeur_compare.php');
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
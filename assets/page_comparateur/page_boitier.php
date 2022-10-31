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
                        <option value="Aérocool">Aérocool</option>
                        <option value="Antec">Antec</option>
                        <option value="ASUS">ASUS</option>
                        <option value="Be-Quiet">Be-Quiet</option>
                        <option value="BitFenix">BitFenix</option>
                        <option value="Cooler_Master_Ltd">Cooler Master Ltd</option>
                        <option value="Corsair">Corsair</option>
                        <option value="DeepCool">DeepCool</option>
                        <option value="Fractal_Design">Fractal Design</option>
                        <option value="Gigabyte">Gigabyte</option>
                        <option value="IN_WIN">IN WIN</option>
                        <option value="Lian_Li">Lian Li</option>
                        <option value="Mars_Gaming">Mars Gaming</option>
                        <option value="MSI">MSI</option>
                        <option value="NZXT">NZXT</option>
                        <option value="Phantek">Phantek</option>
                        <option value="Thermaltake">Thermaltake</option>
                        <option value="Zalman">Zalman</option>
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
                    <p>Chipset</p>
                    <!--Partie demande pour la capacité de stockage-->
                    <select name="boitier">
                        <option value="">Format du Boitier</option>
                        <option value="Desktop">Desktop</option>
                        <option value="Grand_Tour">Grand_Tour</option>
                        <option value="Moyen_Tour">Moyen_Tour</option>
                        <option value="Mini_tour">Mini_tour</option>
                    </select>
                    <button type="submit" name="search_boitier" class="regler">Régler</button>
                </form>   
            </div>
            <!--Emplacement pour afficher la liste des produits sans entrer dans toute leurs options-->
            <div id="case_list">
                <table>
                    <tr>
                        <th>Marque</th>
                        <th>Prix (€)</th>
                        <th>Format de la Tour</th>
                    </tr>
                    <form action="" method="post">
                        <?php
                            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/boitier_lister.php');
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
                                Format de la Tour
                            </li>
                        </div>
                        <div>
                            <p><strong>Secondaire--------------</strong></p>
                            <li class='liste'>
                                Fenêtre
                            </li>
                            <li class='liste'>
                                WaterCooling
                            </li>
                            <li class='liste'>
                                Alimentation Fournie
                            </li>
                            <li class='liste'>
                                Fixation sans vis
                            </li>
                            <li class='liste'>
                                Format Carte mère
                            </li>
                            <li class='liste'>
                                Couleur
                            </li>
                            <li class='liste'>
                                LED / RGB
                            </li>
                            <li class='liste'>
                                Matériaux
                            </li>
                            <li class='liste'>
                                Connecteur Disponible
                            </li>
                        </div>
                    </ul>
                    <div id="appear_product_select">
                        <form action="" method="post">
                            <?php
                                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/boitier_compare.php');
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
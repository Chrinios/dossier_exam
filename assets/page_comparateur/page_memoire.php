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
                        <option value="Ballistix">Ballistix</option>
                        <option value="Corsair">Corsair</option>
                        <option value="Crucial">Crucial</option>
                        <option value="FoxSpirit">FoxSpirit</option>
                        <option value="G.Skill">G.Skill</option>
                        <option value="Gigabyte">Gigabyte</option>
                        <option value="HyperX">HyperX</option>
                        <option value="Kingstorm">Kingstorm</option>
                        <option value="Textorm">Textorm</option>
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
                    <p>Capacité (Go)</p>
                    <!--Partie demande pour la capacité de stockage-->
                    <input type="number" name="capacite_min" id="capacite_min" placeholder="Capacite Maximum(€)">
                    <input type="number" name="capacite_max" id="capacite_max" placeholder="Capacite Minimum(€)">
                    <button type="submit" name="search_capacite" class="regler">Régler</button>
                </form>
                <form action="" method="post" class="affine_recherche" id="capacite">
                    <p>Type de Mémoire</p>
                    <!--Partie demande pour la capacité de stockage-->
                    <select name="type_memoire">
                        <option value="">Mémoire</option>
                        <option value="DDR3">DDR3</option>
                        <option value="DDR4">DDR4</option>
                        <option value="DDR5">DDR5</option>
                    </select>
                    <button type="submit" name="search_type_memoire" class="regler">Régler</button>
                </form> 
            </div>
            <!--Emplacement pour afficher la liste des produits sans entrer dans toute leurs options-->
            <div id="case_list">
                <table>
                    <tr>
                        <th>Marque</th>
                        <th>Prix (€)</th>
                        <th>Capacité</th>
                        <th>Type de Mémoire</th>
                    </tr>
                    <form action="" method="post">
                        <?php
                            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/memoire_lister.php');
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
                                Capacité
                            </li>
                            <li class='liste'>
                                Type de Mémoire
                            </li>
                        </div>
                        <div>
                            <p><strong>Secondaire--------------</strong></p>
                            <li class='liste'>
                                Nombre de Barrettes
                            </li>
                            <li class='liste'>
                                Radiateur
                            </li>
                            <li class='liste'>
                                Utilisation
                            </li>
                            <li class='liste'>
                                Fréquence
                            </li>
                            <li class='liste'>
                                Format
                            </li>
                            <li class='liste'>
                                Spécification
                            </li>
                            <li class='liste'>
                                Couleur du Radiateur
                            </li>
                        </div>
                    </ul>
                    <div id="appear_product_select">
                        <form action="" method="post">
                            <?php
                                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/memoire_compare.php');
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
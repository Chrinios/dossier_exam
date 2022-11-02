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
            
            <!--
                Groupe de Formulaire pour aller afficher 
                les produits correspondants au filtre demandé
            -->
            <div id="case_sort">
                
                <!--Partie pour demander la marque choisi-->
                <form action="" method="post" class="affine_recherche" id="marque">
                    
                    <p>Marque</p>
                    <select name="marquos">
                        <option value="">Marque</option>
                        <option value="ASRock">ASRock</option>
                        <option value="Asus">Asus</option>
                        <option value="Gigabyte">Gigabyte</option>
                        <option value="MSI">MSI</option>
                        <option value="NZXT">NZXT</option>
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
                    <p>Format</p>
                    <!--Partie demande pour la capacité de stockage-->
                    <select name="format">
                        <option value="">Format de la Carte-mère</option>
                        <option value="ATX">ATX</option>
                        <option value="E-ATX">E-ATX</option>
                        <option value="Micro_ATX">Micro ATX</option>
                        <option value="Mini_DTX">Mini DTX</option>
                        <option value="Mini_ITX">Mini ITX</option>
                        <option value="SSI_CEB">SSI CEB</option>
                        <option value="SSI_EEB">SSI EEB</option>
                    </select>
                    <button type="submit" name="search_format" class="regler">Régler</button>
                </form>   
            </div>
            <!--Emplacement pour afficher la liste des produits sans entrer dans toute leurs options-->
            <div id="case_list">
                <table>
                    <tr>
                        <th>Marque</th>
                        <th>Prix (€)</th>
                        <th>Format</th>
                    </tr>
                    <form action="" method="post">
                        <?php
                            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/cm_lister.php');
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
                                Format
                            </li>
                        </div>
                        <div>
                            <p><strong>Secondaire--------------</strong></p>
                            <li class='liste'>
                                Nombre de Slot
                            </li>
                            <li class='liste'>
                                LED
                            </li>
                            <li class='liste'>
                                Support du RAID
                            </li>
                            <li class='liste'>
                                Support Processeur
                            </li>
                            <li class='liste'>
                                Chipset
                            </li>
                            <li class='liste'>
                                Type de Mémoire
                            </li>
                            <li class='liste'>
                                Fréquence Mémoire
                            </li>
                            <li class='liste'>
                                Type de Multi GPU
                            </li>
                            <li class='liste'>
                                Connecteur Graphique
                            </li>
                            <li class='liste'>
                                Connecteur Disque
                            </li>
                            <li class='liste'>
                                Norme Réseaux
                            </li>
                            <li class='liste'>
                                Utilisation
                            </li>
                        </div>
                        
                    </ul>
                    <div id="appear_product_select">
                        <form action="" method="post">
                            <?php
                                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/cm_compare.php');
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
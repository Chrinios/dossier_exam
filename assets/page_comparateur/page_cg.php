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
                        <option value="ASRock">ASRock</option>
                        <option value="ASUS">ASUS</option>
                        <option value="EVGA">EVGA</option>
                        <option value="Gainward">Gainward</option>
                        <option value="Gigabyte">Gigabyte</option>
                        <option value="KFA2">KFA2</option>
                        <option value="MSI">MSI</option>
                        <option value="Palit">Palit</option>
                        <option value="PNY">PNY</option>
                        <option value="Powercolor">Powercolor</option>
                        <option value="Razer">Razer</option>
                        <option value="Sapphire">Sapphire</option>
                        <option value="Zotac">Zotac</option>
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
                    <select name="Chipset">
                        <option value="">Chipset de la Carte-Graphique</option>
                        <option value="">---AMD_Radeon_RX---</option>
                        <option value="AMD_Radeon_RX_6400">6400</option>
                        <option value="AMD_Radeon_RX_6500_XT">6500 XT</option>
                        <option value="AMD_Radeon_RX_6600">6600</option>
                        <option value="AMD_Radeon_RX_6600_XT">6600 XT</option>
                        <option value="AMD_Radeon_RX_6650_XT">6650 XT</option>
                        <option value="AMD_Radeon_RX_6700">6700</option>
                        <option value="AMD_Radeon_RX_6700_XT">6700 XT</option>
                        <option value="AMD_Radeon_RX_6750_XT">6750 XT</option>
                        <option value="AMD_Radeon_RX_6800">6800</option>
                        <option value="AMD_Radeon_RX_6800_XT">6800 XT</option>
                        <option value="AMD_Radeon_RX_6950_XT">6950 XT</option>
                        <option value="">---Nvidia_Geforce---</option>
                        <option value="">---GT---</option>
                        <option value="Nvidia_Geforce_Gt_730">730</option>
                        <option value="Nvidia_Geforce_Gt_1030">1030</option>
                        <option value="">---GTX---</option>
                        <option value="Nvidia_Geforce_Gtx_1630">1630</option>
                        <option value="Nvidia_Geforce_Gtx_1650">1650</option>
                        <option value="Nvidia_Geforce_Gtx_1660_Super">1660 Super</option>
                        <option value="Nvidia_Geforce_Gtx_1660_Ti">1660Ti</option>
                        <option value="Nvidia_Geforce_Gtx_2060">2060</option>
                        <option value="Nvidia_Geforce_Gtx_3050">3050</option>
                        <option value="Nvidia_Geforce_Gtx_3060">3060</option>
                        <option value="Nvidia_Geforce_Gtx_3060_Ti">3060Ti</option>
                        <option value="Nvidia_Geforce_Gtx_3070">3070</option>
                        <option value="Nvidia_Geforce_Gtx_3070_Ti">3070Ti</option>
                        <option value="Nvidia_Geforce_Gtx_3080">3080</option>
                        <option value="Nvidia_Geforce_Gtx_3080_Ti">3080Ti</option>
                        <option value="Nvidia_Geforce_Gtx_3090">3090</option>
                        <option value="Nvidia_Geforce_Gtx_3090_Ti">3090Ti</option>
                    </select>
                    <button type="submit" name="search_Chipset" class="regler">Régler</button>
                </form>   
            </div>
            <!--Emplacement pour afficher la liste des produits sans entrer dans toute leurs options-->
            <div id="case_list">
                <table>
                    <tr>
                        <th>Marque</th>
                        <th>Prix (€)</th>
                        <th>Chipset</th>
                    </tr>
                    <form action="" method="post">
                        <?php
                            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/cg_lister.php');
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
                                Chipset
                            </li>
                        </div>
                        <div>
                            <p><strong>Secondaire--------------</strong></p>
                            <li class='liste'>
                                Taille Mémoire (Mo)
                            </li>
                            <li class='liste'>
                                Overclock
                            </li>
                            <li class='liste'>
                                Vr
                            </li>
                            <li class='liste'>
                                Utilisation
                            </li>
                            <li class='liste'>
                                Bus
                            </li>
                            <li class='liste'>
                                Sorties Videos
                            </li>
                            <li class='liste'>
                                Type de refroidissement
                            </li>
                        </div>
                        
                    </ul>
                    <div id="appear_product_select">
                        <form action="" method="post">
                            <?php
                                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare/cg_compare.php');
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
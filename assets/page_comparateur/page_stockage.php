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
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style_comparateur.css">
    <script src="../js/btn_affineur.js"></script>
    <title>PCompare - Liste et comparateur</title>
</head>
<body>
    <header>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/header.php');
        ?>
    </header>
    <div id="liste">
        <h1>
            <u>
                Comparer vos produits ICI
            </u>
        </h1>
        <div id="affinage">
            <!--Emplacement pour trier les produits et enlever les produits non correspondant a ce qui est demandé-->
            <div id="case_sort">
                <!--Formulaire pour aller afficher les produits correspondants au filtre demandé-->
                <form action="" method="post">
                    <!--Partie pour demander la marque choisi-->
                    <select name="marquos" class="">
                        <option value="">Marque</option>
                        <option value="Seagate Technology">Seagate Technology</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="WD_Black">WD_Black</option>
                        <option value="Western Digital">Western Digital</option>
                    </select>

                    <!--Partie demande du prix-->
                    <input type="number" name="prix_max" id="prix_max" placeholder="Prix Minimum(€)">
                    <input type="number" name="prix_min" id="prix_min" placeholder="Prix Maximum(€)">

                    <!--Partie demande pour la capacité de stockage-->
                    <input type="number" name="capacite_stockage" id="capacite_stockage" placeholder="Stockage (To)">
                    <button type="submit" name="search_affine">Affinez votre recherche</button>
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
                            /*include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/lister.php');*/
                            if(isset($_POST['search_affine'])){
                                $prix_min = $_POST['prix_min'];
                                $prix_max = $_POST['prix_max'];
                                
                                $prix = "SELECT `id`, `marque`, `prix`, `capacite` FROM `stockage` WHERE prix <= $prix_min AND prix >= $prix_max";
                                $go = $pdo->query($prix);
                        
                                while($row = $go->fetch(PDO::FETCH_OBJ != NULL)){
                                    echo "<tr><td>";
                                        echo $row['marque'];
                                    echo "</td><td>";
                                        echo $row['prix'];
                                    echo "</td><td>";
                                        echo $row['capacite'];
                                    echo "</td><td>
                                        <input type='checkbox' name='check[]' value='id'>
                                    </td></tr>";
                                }
                            }
                        ?>
                        <button type="submit" name="comparer" onclick="appear_comparateur()">
                            Comparer
                        </button>
                    </form>
                </table>
                <!--<a href="comparateur/comparer_stockage.php">-->
                    
                <!--</a>-->
            </div>
        </div>
        
        <div id="comparateur">
            <table id="comparateur_table">
                <tr>
                    <th>
                        Produit
                    </th>
                    <th>
                        Marque
                    </th>
                    <th>
                        Prix(€)
                    </th>
                    <th>
                        Capacite(To)
                    </th>
                    <th>
                        Vitesse_rotation (RPM)
                    </th>
                    <th>
                        Taille_cache (Mo)
                    </th>
                    <th>
                        Format_disque
                    </th>
                    <th>
                        Utilisation
                    </th>
                    <th>
                        Techno_enregistrement
                    </th>
                </tr>
                <?php
                    include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/compare.php');
                ?>
            </table>
        </div>
    </div>
    <footer>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/footer.php');   
        ?>
        
    </footer>
</body>
</html>
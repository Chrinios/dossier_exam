<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PCompare</title>
    </head>
    <body>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/header.php');
        ?>
        <div class="contenu">
            <!--Partie Supérieur de l'acceuil avec Logo et descriptif du site rapide + phrase acrocheur-->
            <div class='logo-descriptif'>
                <div class='logo'>
                    <img src="assets/img/compare.jpg" alt="">
                </div>
                <div class='descriptif'>
                    <p>
                        Bienvenue !<br />
                        Vous voici sur l'acceuil du site PCompare! <br />
                        Qui VOUS permet de comparer les différents produits <br /> 
                        Et de trouver le meilleur produit pour VOS critères.
                    </p>
                </div>
            </div>
            <!--Quand on click sur chaque button, sa nous amene sur la liste des produits-->
            <div class='boite-composant'>
                <!--Premiere ligne et premier bouton-->
                <div class='boite'>
                    <a href="assets/page_comparateur/page_boitier.php">
                        <button class='btn-compare'><img src="assets/img/boitier.png" alt="">
                            <p>
                                Boitier
                            </p>
                        </button>
                    </a>
                </div>
                <!--Partie Bouton pour avoir accès au différentes liste de produits du site-->
                <div class='composant'>
                    <!--Seconde Ligne-->
                    <div class='CSP'>
                        <a href="assets/page_comparateur/page_cg.php">
                            <button class='btn-compare'><img src="assets/img/cg.png" alt="">
                                <p>
                                    Carte Graphique
                                </p>
                            </button>
                        </a>

                        <a href="assets/page_comparateur/page_stockage.php">
                            <button class='btn-compare'><img src="assets/img/stockage.png" alt="">
                                <p>
                                    Stockage
                                </p>
                            </button>
                        </a>

                        <a href="assets/page_comparateur/page_processeur.php">
                            <button class='btn-compare'><img src="assets/img/processeur.png" alt="">
                                <p>
                                    Processeur
                                </p>
                            </button>
                        </a>
                    </div>
                    <!--Troisème Ligne-->
                    <div class='MCA'>
                        <a href="assets/page_comparateur/page_memoire.php">
                            <button class='btn-compare'>
                                <img src="assets/img/memoire_ram.png" alt="">
                                <p>
                                    Mémoire
                                </p>
                            </button>
                        </a>

                        <a href="assets/page_comparateur/page_cm.php">
                            <button class='btn-compare'>
                                <img src="assets/img/carte-mere.jpg" alt="">
                                <p>
                                    Carte Mère
                                </p>
                            </button>
                        </a>

                        <a href="assets/page_comparateur/page_alimentation.php">
                            <button class='btn-compare'>
                                <img src="assets/img/boite_alimentation.jpg" alt="">
                                <p>
                                    Alimentation
                                </p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/footer.php');
        ?>
    </body>
</html>
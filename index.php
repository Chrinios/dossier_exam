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
            include_once('assets/Fh/header.php');
        ?>
        <div>
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
            <div class='boite-composant'>
                <form action="comparateur.php" class='boite'>
                    <button class='btn-compare'><img src="assets/img/boitier.png" alt="">
                        <p>
                            Boitier
                        </p>
                    </button>
                </form>
                <div class='composant'>
                    <form action="comparateur.php" class='CSP'>
                        <button class='btn-compare'><img src="assets/img/cg.png" alt="">
                            <p>
                                Carte Graphique
                            </p>
                        </button>

                        <button class='btn-compare'><img src="assets/img/stockage.png" alt="">
                            <p>
                                Stockage
                            </p>
                        </button>

                        <button class='btn-compare'><img src="assets/img/processeur.png" alt="">
                            <p>
                                Processeur
                            </p>
                        </button>
                    </form>
                    <form action="comparateur.php" class='MCA'>
                        <button class='btn-compare'><img src="assets/img/memoire_ram.png" alt="">
                            <p>
                                Mémoire
                            </p>
                        </button>

                        <button class='btn-compare'><img src="assets/img/carte-mere.jpg" alt="">
                            <p>
                                Carte Mère
                            </p>
                        </button>

                        <button class='btn-compare'><img src="assets/img/boite_alimentation.jpg" alt="">
                            <p>
                                Alimentation
                            </p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include_once('assets/Fh/footer.php');
        ?>
    </body>
</html>
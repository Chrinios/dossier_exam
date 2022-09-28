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
                    <button class='btn-compare'>Boitier</button>
                </form>
                <div class='composant'>
                    <form action="comparateur.php" class='CSP'>
                        <button class='btn-compare'>Carte Graphique</button>
                        <button class='btn-compare'>Stockage</button>
                        <button class='btn-compare'>Processeur</button>
                    </form>
                    <form action="comparateur.php" class='MCA'>
                        <button class='btn-compare'>Mémoire</button>
                        <button class='btn-compare'>Carte Mémoire</button>
                        <button class='btn-compare'>Alimentation</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include_once('assets/Fh/footer.php');
        ?>
    </body>
</html>
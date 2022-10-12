<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/back_css.css">
    <title>PCompare : Back_Office</title>
</head>
<body>
    <h1>
        BACK OFFICE
    </h1>
    <p>
        <strong>
            Bienvenue !
        </strong>
    </p>
    <p>
        Vous voici dans le back_end du site <strong>PCompare</strong>, ici vous pourrez gerer vos utilisateur ainsi que votre propre produits
    </p>
    <p>
        Ainsi que de voir les statistiques de votre site web.
    </p>
    <div class="btn_choice">
        <div id="btn_prod">
            <form action="gestion_prod.php">
                <button class="btn_back">
                    Gerer vos produits
                </button>
            </form>
        </div>
        <div>
            <form action="gestion_stat.php">
                <button class="btn_back">
                    Regarder vos statistiques
                </button>
            </form>
        </div>
        <div id="btn_uti">
            <form action="gestion_uti.php">
                <button class="btn_back">
                    Gerer vos utilisateur
                </button>
            </form>
        </div>
    </div>
</body>
</html>
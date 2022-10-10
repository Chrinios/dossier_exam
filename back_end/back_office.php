<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/back_css.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('Fh/back_header.php');
    ?>
    <h1>
        BACK OFFICE
    </h1>
    <div>
        <form action="gestion_prod.php">
            <button>
                Gerer vos produits
            </button>
        </form>
    </div>
    <div>
        <form action="gestion_uti.php">
            <button >
                Gerer vos utilisateur
            </button>
        </form>
    </div>
    <?php
        include_once('Fh/back_footer.php');
    ?>
</body>
</html>
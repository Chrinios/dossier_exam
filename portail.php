<?php
    ini_set('display_errors',true);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../dossier_exam/assets/css/style.css">
        <link rel="stylesheet" href="../dossier_exam/assets/portail/css/portail.css">
        <title>PCompare Portail</title>
    </head>
    <body>
        <?php
            include_once('../dossier_exam/assets/Fh/header.php')
        ?>
        <div class="portail">
            <!--Partie btn pour choisir entre les forms-->
            <div class="btn_portail">
                <button class="log_in" onclick="switchs">
                    Log-in
                </button>
                <button class="register" onclick="switcher">
                    Register
                </button>
            </div>
            <!--Partie pour les forms-->
            <div class="appear">
                <p>
                    Bonjour
                </p>
            </div>
        </div>
        <?php 
            include_once('../dossier_exam/assets/Fh/footer.php')
        ?>
        <script src="assets/portail/switch.js"></script>
    </body>
</html>
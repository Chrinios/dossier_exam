<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <title>PCompare - Liste et comparateur</title>
    </head>
    <body>
        <header>
            <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/header.php');
            ?>
        </header>
        <div id="comparateur">
            <div>
                <?php
                    foreach($_POST['check[]'] as $prod){
                        echo $prod;
                    }
                ?>
            </div>
        </div>
        <footer>
            <?php
                include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/Fh/footer.php');
            ?>
        </footer>
    </body>
</html>
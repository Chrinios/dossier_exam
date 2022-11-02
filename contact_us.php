<?php
    ini_set('display_errors', true);
    require_once('assets/php/function.php');
    $pdo = pdo_connect_account();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../dossier_exam/assets/css/style.css">
        <link rel="stylesheet" href="../dossier_exam/assets/css/contact.css">
        <title>
            PCompare-Contact
        </title>
    </head>
    <body>
        
        <?php
            include_once('assets/Fh/header.php')
        ?>
        <div class="contenu">
            <div class="formulaire">
                <p>
                    <strong>
                        Formulaire de Contact
                    </strong>
                </p>
                <form action="" method="post" class="form">
                    <div id="npet">
                        <div id="nom_prenom">
                            <input type="text" placeholder="Nom" class="input" name="nom">
                            <input type="text" placeholder="Prénom" class="input" name="prenom">
                        </div>
                        <div id="prenom_num">
                            <input type="text" placeholder="email" class="input" name="email">
                            <input type="number" placeholder="Numéro de télèphone" class="input" name="phone">
                        </div>
                    </div>
                    <input type="text" placeholder="Titre du message" class="title" name="titre">
                    <textarea name="message" cols="30" rows="10">
                        Placer votre message ici.
                    </textarea>
                    <div class="submit">
                        <input type="submit" value="Envoyer" class="envoyer">
                    </div>
                </form>
            </div>
            <div class="return">
                <p>
                    <a href="index.php">
                        <button>
                            You want to return ?
                        </button>
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['envoyer'])){
        $nom = strip_tags(htmlentites($_POST['nom']));
        $prenom = strip_tags(htmlentites($_POST['prenom']));
        $email = strip_tags(htmlentites($_POST['email']));
        $phone = strip_tags(htmlentites($_POST['phone']));
        $titre = strip_tags(htmlentites($_POST['titre']));
        $message = strip_tags(htmlentites($_POST['message']));
        die(
            sendmessage(
                $nom, $prenom, $email, $phone, $titre, $message
            )
        );
    }
?>
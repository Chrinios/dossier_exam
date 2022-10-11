<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/back_css.css">
        <title>
            Gestion Produit
        </title>
    </head>
    <body>
        <?php
            include_once('Fh/back_header.php');
        ?>
        <h1>
            Gestionnaire de produit
        </h1>
        <div class="add_all_produit">
            <div id="alimentation">
                <button>Alimentation</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Puissance" required>
                    <input type="text" name="" id="" placeholder="Modulaire" required>
                    <input type="text" name="" id="" placeholder="Silencieux" required>
                    <input type="text" name="" id="" placeholder="Format" required>
                    <input type="text" name="" id="" placeholder="Norme 80+" required>
                    <input type="text" name="" id="" placeholder="Norme Alim" required>
                    <input type="text" name="" id="" placeholder="Multi GPU" required>
                    <input type="text" name="" id="" placeholder="Compatibilité PSU CM" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
            <div id="boitier">
                <button>Boitier</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Fenetré ?" required>
                    <input type="text" name="" id="" placeholder="Watercooling ?" required>
                    <input type="text" name="" id="" placeholder="Alim fournie ?" required>
                    <input type="text" name="" id="" placeholder="Fixation sans vis ?" required>
                    <input type="text" name="" id="" placeholder="Format boitier" required>
                    <input type="text" name="" id="" placeholder="Format carte mère" required>
                    <input type="text" name="" id="" placeholder="Couleur" required>
                    <input type="text" name="" id="" placeholder="LED RGB ?" required>
                    <input type="text" name="" id="" placeholder="Matériaux" required>
                    <input type="text" name="" id="" placeholder="Connecteur disponible" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
            <div id="carte_graphique">
                <button>Carte Graphique</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Overclocké ?" required>
                    <input type="text" name="" id="" placeholder="VR ?" required>
                    <input type="text" name="" id="" placeholder="Chipset" required>
                    <input type="text" name="" id="" placeholder="Taille mémoire video" required>
                    <input type="text" name="" id="" placeholder="Utilisation" required>
                    <input type="text" name="" id="" placeholder="Bus" required>
                    <input type="text" name="" id="" placeholder="Sorties vidéos" required>
                    <input type="text" name="" id="" placeholder="Type de refroidissement" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
            <div id="carte_mere">
                <button>Carte Mère</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Nombre de slot" required>
                    <input type="text" name="" id="" placeholder="LED" required>
                    <input type="text" name="" id="" placeholder="Raid support ?" required>
                    <input type="text" name="" id="" placeholder="Support Processeur" required>
                    <input type="text" name="" id="" placeholder="Format" required>
                    <input type="text" name="" id="" placeholder="Chipset" required>
                    <input type="text" name="" id="" placeholder="Type de mémoire" required>
                    <input type="text" name="" id="" placeholder="Fréquence" required>
                    <input type="text" name="" id="" placeholder="Type de Multi GPU" required>
                    <input type="text" name="" id="" placeholder="Connecteur Graphique" required>
                    <input type="text" name="" id="" placeholder="Connecteur disque" required>
                    <input type="text" name="" id="" placeholder="Norme réseaux" required>
                    <input type="text" name="" id="" placeholder="Utilisation" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
            <div id="memoire">
                <button>Memoire</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Capacité" required>
                    <input type="text" name="" id="" placeholder="Nombre de barrettes" required>
                    <input type="text" name="" id="" placeholder="Radiateur" required>
                    <input type="text" name="" id="" placeholder="Utilisation" required>
                    <input type="text" name="" id="" placeholder="Type de mémoire" required>
                    <input type="text" name="" id="" placeholder="Fréquence" required>
                    <input type="text" name="" id="" placeholder="Format" required>
                    <input type="text" name="" id="" placeholder="Spécification" required>
                    <input type="text" name="" id="" placeholder="Couleur du radiateur" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
            <div id="processeur">
                <button>Processeur</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Fréquence" required>
                    <input type="text" name="" id="" placeholder="Nombre de core" required>
                    <input type="text" name="" id="" placeholder="Tdp (Enveloppe Thermique)" required>
                    <input type="text" name="" id="" placeholder="Version boite ?" required>
                    <input type="text" name="" id="" placeholder="Finesse gravure" required>
                    <input type="text" name="" id="" placeholder="Contrôleur Intégré" required>
                    <input type="text" name="" id="" placeholder="Modèle" required>
                    <input type="text" name="" id="" placeholder="Support" required>
                    <input type="text" name="" id="" placeholder="Plateforme" required>
                    <input type="text" name="" id="" placeholder="Chipset" required>
                    <input type="text" name="" id="" placeholder="Nom de core" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
            <div id="stockage">
                <button>Stockage</button>
                <form action="" method="post">
                    <input type="text" name="" id="" placeholder="Marque" required>
                    <input type="text" name="" id="" placeholder="Prix" required>
                    <input type="text" name="" id="" placeholder="Capacité" required>
                    <input type="text" name="" id="" placeholder="Vitesse de rotation" required>
                    <input type="text" name="" id="" placeholder="Taille du cache" required>
                    <input type="text" name="" id="" placeholder="Format du disque" required>
                    <input type="text" name="" id="" placeholder="Utilisation" required>
                    <input type="text" name="" id="" placeholder="Technologie d'enregistrement" required>
                    <input type="submit" value="Enregistrer le produit">
                </form>
            </div>
        </div>
        <div class="modif_all_produit"></div>
        <div class="suppr_all_produit"></div>
    </body>
</html>
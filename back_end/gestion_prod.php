<?php
    ini_set('display_errors', true);
    require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/assets/php/function.php');
    $pdo = pdo_connect();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/back_css.css">
        <link rel="stylesheet" href="assets/css/back_produit.css">
        <title>
            Gestion Produit
        </title>
    </head>
    <body>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/Fh/back_header.php');
        ?>
        <h1>
            Gestionnaire de produit
        </h1>
        
        <button class="btn-add-produit" onclick="appear_all_produit()">
            Ajouter un produit ?
        </button>
        <button class="btn-modif-suppr-produit" onclick="appear_modif_suppr()">
            Modifiez ? Supprimer un produit ?
        </button>

        <div id="add_all_produit">
            <div class="alim_boitier_cg">
                <div id="alimentation">
                    <button class="btn-gestion" onclick="appear_alim()">Alimentation</button>
                    <form action="" method="post" id="alim.form">
                        <input type="text" name="alim.marque" placeholder="Marque" required>
                        <input type="number" name="alim.prix" placeholder="Prix" required>
                        <input type="number" name="alim.puissance" placeholder="Puissance" required>
                        <input type="number" name="alim.modulaire" placeholder="Modulaire" required>
                        <input type="number" name="alim.silencieux" placeholder="Silencieux" required>
                        <input type="text" name="alim.format" placeholder="Format" required>
                        <input type="text" name="alim.norme-80" placeholder="Norme 80+" required>
                        <input type="text" name="alim.norme-alim" placeholder="Norme Alim" required>
                        <input type="text" name="alim.multi" placeholder="Multi GPU" required>
                        <input type="text" name="alim.compatibilite" placeholder="Compatibilité PSU CM" required>
                        <input type="submit" name="ajout_alim" value="Enregistrer le produit" class="enregistrer">
                    </form>
                </div>
                <div id="boitier">
                    <button class="btn-gestion" onclick="appear_boitier()">Boitier</button>
                    <form action="" method="post" id="boitier.form">
                        <input type="text" name="boitier.marque" placeholder="Marque" required>
                        <input type="number" name="boitier.prix" placeholder="Prix" required>
                        <input type="number" name="boitier.fenetre" placeholder="Fenetré ?" required>
                        <input type="number" name="boitier.water" placeholder="Watercooling ?" required>
                        <input type="number" name="boitier.alim" placeholder="Alim fournie ?" required>
                        <input type="number" name="boitier.fixation" placeholder="Fixation sans vis ?" required>
                        <input type="text" name="boitier.format-boitier" placeholder="Format boitier" required>
                        <input type="text" name="boitier.format-cm" placeholder="Format carte mère" required>
                        <input type="text" name="boitier.couleur" placeholder="Couleur" required>
                        <input type="text" name="boitier.led-rgb" placeholder="LED RGB ?" required>
                        <input type="text" name="boitier.materiaux" placeholder="Matériaux" required>
                        <input type="text" name="boitier.connecteur" placeholder="Connecteur disponible" required>
                        <input type="submit" name="ajout_boitier" value="Enregistrer le produit" class="enregistrer">
                    </form>
                </div>
                <div id="carte_graphique">
                    <button class="btn-gestion" onclick="appear_cg()">Carte Graphique</button>
                    <form action="" method="post" id="cg.form">
                        <input type="text" name="cg.marque" placeholder="Marque" required>
                        <input type="number" name="cg.prix" placeholder="Prix" required>
                        <input type="number" name="cg.overclock" placeholder="Overclocké ?" required>
                        <input type="number" name="cg.vr" placeholder="VR ?" required>
                        <input type="text" name="cg.chipset" placeholder="Chipset" required>
                        <input type="number" name="cg.taille-memoire" placeholder="Taille mémoire video" required>
                        <input type="text" name="cg.utilisation" placeholder="Utilisation" required>
                        <input type="text" name="cg.bus" placeholder="Bus" required>
                        <input type="text" name="cg.sortie-video" placeholder="Sorties vidéos" required>
                        <input type="text" name="cg.refroidissement" placeholder="Type de refroidissement" required>
                        <input type="submit" name="ajout_cg" value="Enregistrer le produit" class="enregistrer">
                    </form>
                </div>
            </div>
            <div class="cm_memoire_processeur">
                <div id="carte_mere">
                    <button class="btn-gestion" onclick="appear_cm()">Carte Mère</button>
                    <form action="" method="post" id="cm.form">
                        <input type="text" name="cm.marque" placeholder="Marque" required>
                        <input type="number" name="cm.prix" placeholder="Prix" required>
                        <input type="number" name="cm.nb-slot" placeholder="Nombre de slot" required>
                        <input type="number" name="cm.led" placeholder="LED" required>
                        <input type="number" name="cm.raid" placeholder="Raid support ?" required>
                        <input type="text" name="cm.support-processeur" placeholder="Support Processeur" required>
                        <input type="text" name="cm.format" placeholder="Format" required>
                        <input type="text" name="cm.chipset" placeholder="Chipset" required>
                        <input type="text" name="cm.memoire" placeholder="Type de mémoire" required>
                        <input type="number" name="cm.frequence" placeholder="Fréquence" required>
                        <input type="text" name="cm.type-gpu" placeholder="Type de Multi GPU" required>
                        <input type="text" name="cm.connecteur-graphique" placeholder="Connecteur Graphique" required>
                        <input type="text" name="cm.connecteur-disque" placeholder="Connecteur disque" required>
                        <input type="text" name="cm.norme-reseaux" placeholder="Norme réseaux" required>
                        <input type="text" name="cm.utilisation" placeholder="Utilisation" required>
                        <input type="submit" name="ajout_cm" value="Enregistrer le produit" class="enregistrer">
                    </form>
                </div>
                <div id="memoire">
                    <button class="btn-gestion" onclick="appear_memoire()">Memoire</button>
                    <form action="" method="post" id="memoire.form">
                        <input type="text" name="memoire.marque" placeholder="Marque" required>
                        <input type="number" name="memoire.prix" placeholder="Prix" required>
                        <input type="number" name="memoire.capacite" placeholder="Capacité" required>
                        <input type="number" name="memoire.nb-barette" placeholder="Nombre de barrettes" required>
                        <input type="number" name="memoire.radiateur" placeholder="Radiateur" required>
                        <input type="text" name="memoire.utilisation" placeholder="Utilisation" required>
                        <input type="text" name="memoire.type-memoire" placeholder="Type de mémoire" required>
                        <input type="text" name="memoire.frequence" placeholder="Fréquence" required>
                        <input type="text" name="memoire.format" placeholder="Format" required>
                        <input type="text" name="memoire.specification" placeholder="Spécification" required>
                        <input type="text" name="memoire.couleur-radiateur" placeholder="Couleur du radiateur" required>
                        <input type="submit" name="ajout_memoire" value="Enregistrer le produit" class="enregistrer">
                    </form>
                </div>
                <div id="processeur">
                    <button class="btn-gestion" onclick="appear_processeur()">Processeur</button>
                    <form action="" method="post" id="processeur.form">
                        <input type="text" name="processeur.marque" placeholder="Marque" required>
                        <input type="number" name="processeur.prix" placeholder="Prix" required>
                        <input type="number" name="processeur.frequence" placeholder="Fréquence" required>
                        <input type="number" name="processeur.nb-core" placeholder="Nombre de core" required>
                        <input type="number" name="processeur.tdp" placeholder="Tdp (Enveloppe Thermique)" required>
                        <input type="number" name="processeur.boite" placeholder="Version boite ?" required>
                        <input type="number" name="processeur.finesse-gravure" placeholder="Finesse gravure" required>
                        <input type="number" name="processeur.controleur-intergre" placeholder="Contrôleur Intégré" required>
                        <input type="text" name="processeur.modele" placeholder="Modèle" required>
                        <input type="text" name="processeur.support" placeholder="Support" required>
                        <input type="text" name="processeur.plateforme" placeholder="Plateforme" required>
                        <input type="text" name="processeur.chipset" placeholder="Chipset" required>
                        <input type="text" name="processeur.nom-core" placeholder="Nom de core" required>
                        <input type="submit" name="ajout_processeur" value="Enregistrer le produit" class="enregistrer">
                    </form>
                </div>
            </div>
            <div id="stockage">
                <button class="btn-gestion" onclick="appear_stockage()">Stockage</button>
                <form action="" method="post" id="stockage.form">
                    <input type="text" name="stockage.marque" placeholder="Marque" required>
                    <input type="number" name="stockage.prix" placeholder="Prix" required>
                    <input type="number" name="stockage.capacite" placeholder="Capacité" required>
                    <input type="number" name="stockage.vitesse-rotation" placeholder="Vitesse de rotation" required>
                    <input type="number" name="stockage.taille-cache" placeholder="Taille du cache" required>
                    <input type="text" name="stockage.format" placeholder="Format du disque" required>
                    <input type="text" name="stockage.utilisation" placeholder="Utilisation" required>
                    <input type="text" name="stockage.enregistrement" placeholder="Technologie d'enregistrement" required>
                    <input type="submit" name="ajout_stockage" value="Enregistrer le produit" class="enregistrer">
                </form>
            </div>
        </div>
        <div class="modif_all_produit"></div>
        <div class="suppr_all_produit"></div>

        <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/ajout_produit.php')
        ?>
        <script src="assets/js/add_produit.js"></script>
    </body>
</html>
<h2>Liste des produits</h2>
<div>
    <div id="btn-alim-boitier-cg">
        <div>
            <button onclick="appear_alimentation_liste()" class="btn-list">Alimentation</button>
            <!--Liste pour l'Alimentation -->
            <form action="" method="post" class="table">
                <table id="table_alim">
                    <tr>
                        <th>
                            <button type="submit" name="sort_alim_id">
                                Id
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_marque">
                                Marque
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_prix">
                                Prix (€)
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_puissance">
                                Puissance (W)
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_modulaire">
                                Modulaire
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_silencieux">
                                Silencieux
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_format">
                                Format
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_norme_80">
                                Norme 80+
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_norme_alim">
                                Norme Alimentation
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_multi">
                                Multi-GPU
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_alim_compatibilite">
                                Compatibilité PSU-CM
                            </button>
                        </th>
                    </tr>
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_alim.php') 
                    ?>
                </table>
            </form>
        </div>
        <div>
            <button onclick="appear_boitier_liste()" class="btn-list">
                Boitier
            </button>
            <!--Liste pour le Boitier-->
            <form action="" method="post" class="table">
                <table id="table_boitier">
                    <tr>
                        <th>
                            <button type="submit" name="sort_boitier_id">
                                Id
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_marque">
                            Marque 
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_prix">
                                Prix
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_fenetre">
                                Fenêtre
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_watercooling">
                                Watercooling
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_alim">
                                Alim_fournie
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_fixation">
                                Fixation sans vis
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_format">
                                Format
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_format_cm">
                                Format Carte-mère
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_couleur">
                                Couleur
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_led_rgb">
                                LED RGB
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_materiaux">
                                Matériaux
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_boitier_connecteur">
                                Connecteur Disponible
                            </button>
                        </th>
                    </tr>
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_boitier.php') 
                    ?>
                </table>
            </form>
        </div>
        <div>
            <button onclick="appear_cg_liste()" class="btn-list">
                Carte-Graphique
            </button>
            <!--Liste pour les Carte Graphiques -->
            <form action="" method="post" class="table">
                <table id="table_cg">
                    <tr>
                        <th>
                            <button type="submit" name="sort_cg_id">
                                Id
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_marque">
                                Marque
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_prix">
                                Prix
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_overclock">
                                Overclock
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_vr">
                                Vr
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_chipset">
                                Chipset
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_taille_memoire_video">
                                Taille Mémoire
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_utilisation">
                                Utilisation
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_bus">
                                Bus
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_sorties">
                                Sorties Vidéos
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cg_refroidissement">
                                Type de refroidissement
                            </button>
                        </th>
                    </tr>
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_cg.php') 
                    ?>
                </table>
            </form>
        </div>
    </div>
    <div id="btn-cm-memoire-processeur">
        
        <div>
            <button onclick="appear_memoire_liste()" class="btn-list">
                Memoire
            </button>
            <!--Liste pour le Mémoire Vive / RAM -->
            <form action="" method="post" class="table">
                <table id="table_memoire">
                    <tr>
                        <th>
                            <button type="submit" name="sort_memoire_id">
                                Id
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_marque">
                                Marque
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_prix">
                                Prix (€)
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_capacite">
                                Capacité (Go)
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_nombre_barrette">
                                Nombre de Barrettes
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_radiateur">
                                Radiateur
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_utilisation">
                                Utilisation
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_type_memoire">
                                Type de mémoire
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_frequence">
                                Fréquence
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_format">
                                Format
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_specification">
                                Spécification
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_memoire_couleur">
                                Couleur du radiateur
                            </button>
                        </th>
                    </tr>
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_memoire.php') 
                    ?>
                </table>
            </form>
        </div>
        <div>
            <button onclick="appear_cm_liste()" class="btn-list">
                Carte-Mère
            </button>
            <!--Liste pour les Carte mères -->
            <form action="" method="post" class="table">
                <table id="table_cm">
                    <tr>
                        <th>
                            <button type="submit" name="sort_cm_id">
                                Id
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_marque">
                                Marque
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_prix">
                                Prix
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_nb_slot">
                                Nombre de slot
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_led">
                                LED
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_raid">
                                RAID supporté
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_support_proc">
                                Support Processeur
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_format">
                                Format
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_chipset">
                                Chipset
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_type_memoire">
                                Type de mémoire
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_frequence_memoire">
                                Fréquence Mémoire
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_type_multi_gpu">
                                Type Multi GPU
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_connecteur_graphique">
                                Connecteur Graphique
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_connecteur_disque">
                                Connecteur Disque
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_norme_réseaux">
                                Norme Réseaux
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_cm_utilisation">
                                Utilisation
                            </button>
                        </th>
                    </tr>
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_cm.php') 
                    ?>
                </table>
            </form>
        </div>
        <div>
            <button onclick="appear_processeur_liste()" class="btn-list">
                Processeur
            </button>
            <!--Liste pour le Processeur-->
            <form action="" method="post" class="table">
                <table id="table_processeur">
                    <tr>
                        <th>
                            <button type="submit" name="sort_processeur_id">
                                Id
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_marque">
                                Marque
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_prix">
                                Prix
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_frequence">
                                Fréquence
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_nb_core">
                                Nombre de core
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_tdp">
                                Tdp (Thermal Design Power)
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_version_boite">
                                Version Boite
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_finesse_gravure">
                                Finesse Gravure
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_controleur_integre">
                                Contrôleur Intègré
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_modele">
                                Modèle
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_support">
                                Support
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_plateforme">
                                Plateforme
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_chipset">
                                Chipset
                            </button>
                        </th>
                        <th>
                            <button type="submit" name="sort_processeur_nom_core">
                                Nom du Core
                            </button>
                        </th>
                    </tr>
                    <?php 
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_processeur.php') 
                    ?>
                </table>
            </form>
        </div>
        
    </div>
    <div id="btn_stockage_sort">
        <button onclick="appear_stockage_liste()" class="btn-list">
            Stockage
        </button>
        <!--Liste pour le Stockage-->
        <form name="sort_product" action="" method="post" class="table">
            <table id="table_stockage">
                <tr>
                    <th>
                        <button type="submit" name="sort_stockage_id">
                            Id
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_marque">
                            Marque
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_prix">
                            Prix(€)
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_capacite">
                            Capacite(To)
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_rotation">
                            Vitesse_rotation (RPM)
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_cache">
                            Taille_cache (Mo)
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_format">
                            Format_disque
                        </button>
                    </th>
                    <th>
                        <button type="submit" name="sort_stockage_utilisation">
                            Utilisation
                        </button>
                    </th>
                    <th >
                        <button type="submit" name="sort_stockage_technologie">
                            Techno_enregistrement
                        </button>
                    </th>
                </tr>  
                <?php 
                    require_once($_SERVER['DOCUMENT_ROOT'] . '/dossier_exam/back_end/assets/php/trie/back_trie_stockage.php') 
                ?>
            </table>
        </form>
    </div>
</div>
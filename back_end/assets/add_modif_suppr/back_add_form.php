<div class="alim_boitier_cg">
    <div id="alimentation">
        <button class="btn-gestion" onclick="appear_alim()">Alimentation</button>
        <form action="" method="post" id="alim.form">

            <select name="alim-marque" class="form_add_select">
                <option value="">Marque</option>
                <option value="Aerocool">Aerocool</option>
                <option value="Antec">Antec</option>
                <option value="Asus">Asus</option>
                <option value="Be_Quiet">Be Quiet</option>
                <option value="Cooler_Master_Ltd">Cooler Master Ltd</option>
                <option value="Corsair">Corsair</option>
                <option value="Enermax">Enermax</option>
                <option value="Fox_Spirit">Fox Spirit</option>
                <option value="FSP">FSP</option>
                <option value="Gigabyte">Gigabyte</option>
                <option value="Kolink">Kolink</option>
                <option value="MSI">MSI</option>
                <option value="NZXT">NZXT</option>
                <option value="Seasonic">Seasonic</option>
                <option value="Textorm">Textorm</option>
                <option value="Thermaltake">Thermaltake</option>
            </select>

            <input type="number" name="alim-prix" class="form_input" placeholder="Prix">
            <input type="number" name="alim-puissance" class="form_input" placeholder="Puissance">

            <select name="alim-modulaire" class="form_add_select">
                <option value="">Modulaire ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="alim-silencieux" class="form_add_select">
                <option value="">Silencieux ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="alim-format" class="form_add_select">
                <option value="">Format</option>
                <option value="ATX_EPS">ATX EPS</option>
                <option value="SFX">SFX</option>
                <option value="SFX_L">SFX L</option>
            </select>

            <select name="alim-norme-80" class="form_add_select">
                <option value="">Norme 80+</option>
                <option value="80_Plus">80_Plus</option>
                <option value="">---80 Plus---</option>
                <option value="80_Plus_Bronze">Bronze</option>
                <option value="80_Plus_Gold">Gold</option>
                <option value="80_Plus_Platinium">Platinium</option>
                <option value="80_Plus_Titanium">Titanium</option>
            </select>

            <select name="alim-norme-alim" class="form_add_select">
                <option value="">Norme Alim</option>
                <option value="ATX_12V">ATX_12V</option>
                <option value="EPS_12V">EPS_12V</option>
                <option value="SFX">SFX</option>
            </select>

            <select name="alim-multi" class="form_add_select">
                <option value="">Multi GPU</option>
                <option value="Aucun">Aucun</option>
                <option value="">---3 Way---</option>
                <option value="3-way_CrossFireX">CrossFireX</option>
                <option value="3-way_SLi">SLi</option>
                <option value="">---4 Way---</option>
                <option value="4-way_CrossfireX">CrossfireX</option>
                <option value="4-way_SLi">SLi</option>
                <option value="">---Autre---</option>
                <option value="CrossfireX">CrossfireX</option>
                <option value="NVLink">NVLink</option>
                <option value="SLi">SLi</option>
            </select>

            <select name="alim-compatibilite" class="form_add_select">
                <option value="">Compatibilité PSU-CM</option>
                <option value="Aucun">Aucun</option>
                <option value="">---12V---</option>
                <option value="12V_P4">P4</option>
                <option value="12V_P4_et_12V_P4">P4 et P4</option>
                <option value="12V_P8">P8</option>
                <option value="12V_P8_et_12V_P4">P8 et P4</option>
                <option value="12V_P8_et_12V_P8">P8 et P8</option>
            </select>

            <button type="submit" name="ajout_alim" class="enregistrer">
                Enregistrer le produit
            </button>
        </form>
    </div>
    <div id="boitier">
        <button class="btn-gestion" onclick="appear_boitier()">Boitier</button>
        <form action="" method="post" id="boitier.form" class="form_add">

            <select name="boitier-marque" class="form_add_select">
                <option value="">Marque</option>
                <option value="Aérocool">Aérocool</option>
                <option value="Antec">Antec</option>
                <option value="ASUS">ASUS</option>
                <option value="Be-Quiet">Be-Quiet</option>
                <option value="BitFenix">BitFenix</option>
                <option value="Cooler_Master_Ltd">Cooler Master Ltd</option>
                <option value="Corsair">Corsair</option>
                <option value="DeepCool">DeepCool</option>
                <option value="Fractal_Design">Fractal Design</option>
                <option value="Gigabyte">Gigabyte</option>
                <option value="IN_WIN">IN WIN</option>
                <option value="Lian_Li">Lian Li</option>
                <option value="Mars_Gaming">Mars Gaming</option>
                <option value="MSI">MSI</option>
                <option value="NZXT">NZXT</option>
                <option value="Phantek">Phantek</option>
                <option value="Thermaltake">Thermaltake</option>
                <option value="Zalman">Zalman</option>
            </select>

            <input type="number" name="boitier-prix" class="form_input" placeholder="Prix">

            <select name="boitier-fenetre" class="form_add_select">
                <option value="">Fenetré ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="boitier-water" class="form_add_select">
                <option value="">Watercooling ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="boitier-alim" class="form_add_select">
                <option value="">Alim fournie ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="boitier-fixation" class="form_add_select">
                <option value="">Fixation sans vis ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="boitier-format-boitier" class="form_add_select">
                <option value="">Format du Boitier</option>
                <option value="Desktop">Desktop</option>
                <option value="Grand_Tour">Grand_Tour</option>
                <option value="Moyen_Tour">Moyen_Tour</option>
                <option value="Mini_tour">Mini_tour</option>
            </select>

            <select name="boitier-format-cm" class="form_add_select">
                <option value="">Format Carte-mère</option>
                <option value="ATX">ATX</option>
                <option value="DTX">DTX</option>
                <option value="E-ATX">E-ATX</option>
                <option value="Micro_ATX">Micro_ATX</option>
                <option value="">---Mini---</option>
                <option value="Mini_ATX">ATX</option>
                <option value="Mini_DTX">DTX</option>
                <option value="Mini_ITX">ITX</option>
                <option value="">---SSI---</option>
                <option value="SSI_CEB">CEB</option>
                <option value="SSI_EEB">EEB</option>
                <option value="">---XL---</option>
                <option value="XL_ATX">ATX</option>
            </select>

            <select name="boitier-couleur" class="form_add_select">
                <option value="">Couleur</option>
                <option value="Anthracite">Anthracite</option>
                <option value="Argent">Argent</option>
                <option value="Blanc">Blanc</option>
                <option value="Bleu">Bleu</option>
                <option value="Gris">Gris</option>
                <option value="Jaune">Jaune</option>
                <option value="Noir">Noir</option>
                <option value="Orange">Orange</option>
                <option value="Rose">Rose</option>
                <option value="Rouge">Rouge</option>
                <option value="Violet">Violet</option>
            </select>

            <select name="boitier-led-rgb" class="form_add_select">
                <option value="">LED / RGB ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="boitier-materiaux" class="form_add_select">
                <option value="">Matériaux</option>
                <option value="ABS">ABS</option>
                <option value="Acier">Acier</option>
                <option value="Acier/Aluminium">Acier/Aluminium</option>
                <option value="Acrylique">Acrylique</option>
                <option value="Aluminium">Aluminium</option>
                <option value="Mesh">Mesh</option>
                <option value="Métal">Métal</option>
                <option value="Plastique">Plastique</option>
                <option value="PVC">PVC</option>
                <option value="Verre_Trempe">Verre Trempé</option>
            </select>

            <select name="boitier-connecteur" class="form_add_select">
                <option value="">Connecteur disponible</option>
                <option value="">---Casque Jack---</option>
                <option value="Casque_jack_3.5mm_Femelle">3.5mm Femelle</option>
                <option value="Casque_jack_6.35mm">6.35mm</option>
                <option value="">---Jack + 3.5mm---</option>
                <option value="Jack_3.5mm_Femelle_stereo">Femelle_stéréo</option>
                <option value="Jack_3.5mm_Male_stereo">Male_stéréo</option>
                <option value="">---Line IN---</option>
                <option value="Line_IN_jack_3.5mm_Femelle">jack_3.5mm_Femelle</option>
                <option value="Line_IN/Micro_3.5mm_Femelle">Micro_3.5mm_Femelle</option>
                <option value="">---Micro Jack 3.5mm---</option>
                <option value="Micro_jack_3.5mm_Femelle">Femelle</option>
                <option value="">---SD Secure---</option>
                <option value="SD_Secure_Digital">Digital</option>
                <option value="">---USB---</option>
                <option value="USB_2.0">USB_2.0</option>
                <option value="">---3.0---</option>
                <option value="USB_3.0">USB_3.0</option>
                <option value="USB_3.0_type_A_Femelle">type A Femelle</option>
                <option value="USB_3.0_type_C">type C</option>
                <option value="">---3.1---</option>
                <option value="USB_3.1_type_A_Femelle">type A Femelle</option>
                <option value="USB_3.1_type_C">type C</option>
                <option value="USB_3.1_type_C_Femelle">type C Femelle</option>
                <option value="">---3.2---</option>
                <option value="USB_3.2_type_C">type C</option>
                <option value=""></option>
            </select>

            <button type="submit" name="ajout_boitier" class="enregistrer">
                Enregistrer le produit
            </button>
        </form>
    </div>
    <div id="carte_graphique">
        <button class="btn-gestion" onclick="appear_cg()">Carte Graphique</button>
        <form action="" method="post" id="cg.form" class="form_add">
            <select name="cg-marque" class="form_add_select">
                <option value="">Marque</option>
                <option value="AMD">AMD</option>
                <option value="ASRock">ASRock</option>
                <option value="ASUS">ASUS</option>
                <option value="EVGA">EVGA</option>
                <option value="Gainward">Gainward</option>
                <option value="Gigabyte">Gigabyte</option>
                <option value="KFA2">KFA2</option>
                <option value="MSI">MSI</option>
                <option value="Palit">Palit</option>
                <option value="PNY">PNY</option>
                <option value="Powercolor">Powercolor</option>
                <option value="Razer">Razer</option>
                <option value="Sapphire">Sapphire</option>
                <option value="Zotac">Zotac</option>
            </select>

            <input type="number" name="cg-prix" class="form_input" placeholder="Prix">

            <select name="cg-overclock" class="form_add_select">
                <option value="">Overclocké ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>

            </select>

            <select name="cg-vr" class="form_add_select">
                <option value="">VR ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="cg-chipset" class="form_add_select">
                <option value="">Chipset</option>
                <option value="">---AMD_Radeon_RX---</option>
                <option value="AMD_Radeon_RX_6400">6400</option>
                <option value="AMD_Radeon_RX_6500_XT">6500 XT</option>
                <option value="AMD_Radeon_RX_6600">6600</option>
                <option value="AMD_Radeon_RX_6600_XT">6600 XT</option>
                <option value="AMD_Radeon_RX_6650_XT">6650 XT</option>
                <option value="AMD_Radeon_RX_6700">6700</option>
                <option value="AMD_Radeon_RX_6700_XT">6700 XT</option>
                <option value="AMD_Radeon_RX_6750_XT">6750 XT</option>
                <option value="AMD_Radeon_RX_6800">6800</option>
                <option value="AMD_Radeon_RX_6800_XT">6800 XT</option>
                <option value="AMD_Radeon_RX_6950_XT">6950 XT</option>
                <option value="">---Nvidia_Geforce---</option>
                <option value="">---GT---</option>
                <option value="Nvidia_Geforce_Gt_730">730</option>
                <option value="Nvidia_Geforce_Gt_1030">1030</option>
                <option value="">---GTX---</option>
                <option value="Nvidia_Geforce_Gtx_1630">1630</option>
                <option value="Nvidia_Geforce_Gtx_1650">1650</option>
                <option value="Nvidia_Geforce_Gtx_1660_Super">1660 Super</option>
                <option value="Nvidia_Geforce_Gtx_1660_Ti">1660Ti</option>
                <option value="Nvidia_Geforce_Gtx_2060">2060</option>
                <option value="Nvidia_Geforce_Gtx_3050">3050</option>
                <option value="Nvidia_Geforce_Gtx_3060">3060</option>
                <option value="Nvidia_Geforce_Gtx_3060_Ti">3060Ti</option>
                <option value="Nvidia_Geforce_Gtx_3070">3070</option>
                <option value="Nvidia_Geforce_Gtx_3070_Ti">3070Ti</option>
                <option value="Nvidia_Geforce_Gtx_3080">3080</option>
                <option value="Nvidia_Geforce_Gtx_3080_Ti">3080Ti</option>
                <option value="Nvidia_Geforce_Gtx_3090">3090</option>
                <option value="Nvidia_Geforce_Gtx_3090_Ti">3090Ti</option>
            </select>

            <input type="number" name="cg-taille-memoire" class="form_input" placeholder="Taille mémoire video">

            <select name="cg-utilisation" class="form_add_select">
                <option value="">Utilisation</option>
                <option value="">---Gamer---</option>
                <option value="Gamer_AMD">AMD</option>
                <option value="Gamer_Nvidia_GTX">Nvidia GTX</option>
                <option value="Gamer_Nividia_RTX">Nividia RTX</option>
                <option value="">---Multimédia---</option>
                <option value="Multimédia_Nvidia_GT">Nvidia GT</option>
            </select>

            <select name="cg-bus" class="form_add_select">
                <option value="">Bus</option>
                <option value="">---PCI_Express---</option>
                <option value="">---2.0---</option>
                <option value="PCI_Express_2.0_16x">16x</option>
                <option value="">---3.0---</option>
                <option value="PCI_Express_3.0_16x">16x</option>
                <option value="PCI_Express_3.0_16x_4x">16x 4x</option>
                <option value="">---4.0---</option>
                <option value="PCI_Express_4.0_16x">16x</option>
                <option value="PCI_Express_4.0_16x_8x">16x 8x</option>
                <option value="">---Autre---</option>
                <option value="Thunderbolt_3">Thunderbolt 3</option>
            </select>

            <select name="cg-sortie-video" class="form_add_select">
                <option value="">Sorties Vidéos</option>
                <option value="">---Display_Port---</option>
                <option value="DisplayPort__Femelle">Femelle</option>
                <option value="DisplayPort_USB_Type_C">USB Type C</option>
                <option value="">---Autre---</option>
                <option value="DVI_Femelle">DVI Femelle</option>
                <option value="HDMI_Femelle">HDMI Femelle</option>
                <option value="VGA_D-sub_15_Femelle">VGA D-sub 15 Femelle</option>
            </select>

            <select name="cg-refroidissement" class="form_add_select">
                <option value="">Refroidissement</option>
                <option value="Actif_fansink">Actif Fansink</option>
                <option value="Passif_fanless">Passif Fanless</option>
                <option value="Watercooling">Watercooling</option>
            </select>

            <button type="submit" name="ajout_cg" class="enregistrer">
                Enregistrer le produit
            </button>
        </form>
    </div>
</div>
<div class="cm_memoire_processeur">
    <div id="carte_mere">
        <button class="btn-gestion" onclick="appear_cm()">Carte Mère</button>
        <form action="" method="post" id="cm.form" class="form_add">
            <select name="cm-marque" class="form_add_select">
                <option value="">Marque</option>
                <option value="ASRock">ASRock</option>
                <option value="Asus">Asus</option>
                <option value="Gigabyte">Gigabyte</option>
                <option value="MSI">MSI</option>
                <option value="NZXT">NZXT</option>
            </select>

            <input type="number" name="cm-prix" class="form_input" placeholder="Prix">

            <select name="cm-nb-slot" class="form_add_select">
                <option value="0">Nombre de slot</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <select name="cm-led" class="form_add_select">
                <option value="">LED ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="cm-raid" class="form_add_select">
                <option value="">Support Raid ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="cm-support-processeur" class="form_add_select">
                <option value="">Support pour le Processeur</option>
                <option value="">---AMD---</option>
                <option value="AMD_AM4">AM4</option>
                <option value="AMD_AM5">AM5</option>
                <option value="AMD_SWRX8">SWRX8</option>
                <option value="">---Intel---</option>
                <option value="Intel_1151">1151</option>
                <option value="Intel_1200">1200</option>
                <option value="Intel_1700">1700</option>
                <option value="Intel_2066">2066</option>
            </select>

            <select name="cm-format" class="form_add_select">
                <option value="">Format de la Carte-mère</option>
                <option value="ATX">ATX</option>
                <option value="E-ATX">E-ATX</option>
                <option value="Micro_ATX">Micro ATX</option>
                <option value="Mini_DTX">Mini DTX</option>
                <option value="Mini_ITX">Mini ITX</option>
                <option value="SSI_CEB">SSI CEB</option>
                <option value="SSI_EEB">SSI EEB</option>
            </select>

            <select name="cm-chipset" class="form_add_select">
                <option value="">Chipset</option>
                <option value="">---AMD---</option>
                <option value="AMD_A320">A320</option>
                <option value="AMD_A520">A520</option>
                <option value="AMD_B450">B450</option>
                <option value="AMD_B550">B550</option>
                <option value="AMD_WRX80">WRX80</option>
                <option value="AMD_X570">X570</option>
                <option value="AMD_X670">X670</option>
                <option value="AMD_X670E">X670E</option>
                <option value="">---Intel---</option>
                <option value="Intel_B560_Express">B560_Express</option>
                <option value="Intel_B660_Express">B660_Express</option>
                <option value="Intel_H310_Express">H310_Express</option>
                <option value="Intel_H410_Express">H410_Express</option>
                <option value="Intel_H470_Express">H470_Express</option>
                <option value="Intel_H510_Express">H510_Express</option>
                <option value="Intel_H610_Express">H610_Express</option>
                <option value="Intel_H670_Express">H670_Express</option>
                <option value="Intel_X299_Express">X299_Express</option>
                <option value="Intel_Z490_Express">Z490_Express</option>
                <option value="Intel_Z590_Express">Z590_Express</option>
                <option value="Intel_Z690_Express">Z690_Express</option>
                <option value="Intel_Z790_Express">Z790_Express</option>
            </select>

            <select name="cm-memoire" class="form_add_select">
                <option value="">Type de mémoire</option>
                <option value="DDR4">DDR4</option>
                <option value="DDR4_ECC">DDR4_ECC</option>
                <option value="DDR5">DDR5</option>
            </select>

            <select name="cm-frequence" class="form_add_select">
                <option value="">Fréquence Mémoire Possible</option>
                <option value="">---DDR4---</option>
                <option value="DDR4_1866_MHz">1866 MHz</option>
                <option value="DDR4_2133_MHz">2133 MHz</option>
                <option value="DDR4_2400_MHz">2400 MHz</option>
                <option value="DDR4_2666_MHz">2666 MHz</option>
                <option value="DDR4_2800_MHz">2800 MHz</option>
                <option value="DDR4_2933_MHz">2933 MHz</option>
                <option value="DDR4_3000_MHz">3000 MHz</option>
                <option value="DDR4_3066_MHz">3066 MHz</option>
                <option value="DDR4_3200_MHz">3200 MHz</option>
                <option value="DDR4_3300_MHz">3300 MHz</option>
                <option value="DDR4_3333_MHz">3333 MHz</option>
                <option value="DDR4_3400_MHz">3400 MHz</option>
                <option value="DDR4_3466_MHz">3466 MHz</option>
                <option value="DDR4_3533_MHz">3533 MHz</option>
                <option value="DDR4_3600_MHz">3600 MHz</option>
                <option value="DDR4_3666_MHz">3666 MHz</option>
                <option value="DDR4_3733_MHz">3733 MHz</option>
                <option value="DDR4_3800_MHz">3800 MHz</option>
                <option value="DDR4_3866_MHz">3866 MHz</option>
                <option value="DDR4_4000_MHz">4000 MHz</option>
                <option value="DDR4_4066_MHz">4066 MHz</option>
                <option value="DDR4_4133_MHz">4133 MHz</option>
                <option value="DDR4_4200_MHz">4200 MHz</option>
                <option value="DDR4_4266_MHz">4266 MHz</option>
                <option value="DDR4_4300_MHz">4300 MHz</option>
                <option value="DDR4_4333_MHz">4333 MHz</option>
                <option value="DDR4_4400_MHz">4400 MHz</option>
                <option value="DDR4_4466_MHz">4466 MHz</option>
                <option value="DDR4_4500_MHz">4500 MHz</option>
                <option value="DDR4_4533_MHz">4533 MHz</option>
                <option value="DDR4_4600_MHz">4600 MHz</option>
                <option value="DDR4_4666_MHz">4666 MHz</option>
                <option value="DDR4_4700_MHz">4700 MHz</option>
                <option value="DDR4_4733_MHz">4733 MHz</option>
                <option value="DDR4_4800_MHz">4800 MHz</option>
                <option value="DDR4_4866_MHz">4866 MHz</option>
                <option value="DDR4_4933_MHz">4933 MHz</option>
                <option value="DDR4_5000_MHz">5000 MHz</option>
                <option value="DDR4_5066_MHz">5066 MHz</option>
                <option value="DDR4_5100_MHz">5100 MHz</option>
                <option value="DDR4_5133_MHz">5133 MHz</option>
                <option value="DDR4_5200_MHz">5200 MHz</option>
                <option value="DDR4_5300_MHz">5300 MHz</option>
                <option value="DDR4_5333_MHz">5333 MHz</option>
                <option value="DDR4_5400_MHz">5400 MHz</option>
                <option value="DDR4_5600_MHz">5600 MHz</option>
                <option value="">---DDR5---</option>
                <option value="DDR5_4000_MHz">4000 MHz</option>
                <option value="DDR5_4400_MHz">4400 MHz</option>
                <option value="DDR5_4800_MHz">4800 MHz</option>
                <option value="DDR5_5000_MHz">5000 MHz</option>
                <option value="DDR5_5066_MHz">5066 MHz</option>
                <option value="DDR5_5200_MHz">5200 MHz</option>
                <option value="DDR5_5333_MHz">5333 MHz</option>
                <option value="DDR5_5400_MHz">5400 MHz</option>
                <option value="DDR5_5600_MHz">5600 MHz</option>
                <option value="DDR5_5800_MHz">5800 MHz</option>
                <option value="DDR5_6000_MHz">6000 MHz</option>
                <option value="DDR5_6133_MHz">6133 MHz</option>
                <option value="DDR5_6200_MHz">6200 MHz</option>
                <option value="DDR5_6400_MHz">6400 MHz</option>
                <option value="DDR5_6600_MHz">6600 MHz</option>
                <option value="DDR5_6666_MHz">6666 MHz</option>
                <option value="DDR5_6800_MHz">6800 MHz</option>
                <option value="DDR5_7000_MHz">7000 MHz</option>
                <option value="DDR5_7200_MHz">7200 MHz</option>
                <option value="DDR5_7400_MHz">7400 MHz</option>
                <option value="DDR5_7600_MHz">7600 MHz</option>
                <option value="DDR5_7800_MHz">7800 MHz</option>
                <option value="DDR5_8000_MHz">8000 MHz</option>
            </select>

            <select name="cm-type-gpu" class="form_add_select">
                <option value="">Type de multi-GPU</option>
                <option value="3-way_CrossfireX">3-way CrossfireX</option>
                <option value="3-way_SLi">3-way SLi</option>
                <option value="4-way_CrossfireX">4-way CrossfireX</option>
                <option value="4-way_SLi">4-way SLi</option>
                <option value="CrossfireX">CrossfireX</option>
                <option value="Sli">Sli</option>
            </select>

            <select name="cm-connecteur-graphique" class="form_add_select">
                <option value="">Connecteur Graphique</option>
                <option value="">---PCI Express--</option>
                <option value="PCI_Express_2.0_16x_4x">2.0 16x 4x</option>
                <option value="">---3.0---</option>
                <option value="PCI_Express_3.0_16x">16x</option>
                <option value="PCI_Express_3.0_16x_2x">16x 2x</option>
                <option value="PCI_Express_3.0_16x_4x">16x 4x</option>
                <option value="PCI_Express_3.0_16x_8x">16x 8x</option>
                <option value="PCI_Express_3.0_4x">4x</option>
                <option value="">---4.0---</option>
                <option value="PCI_Express_4.0_16x">16x</option>
                <option value="PCI_Express_4.0_16x_2x">16x 2x</option>
                <option value="PCI_Express_4.0_16x_4x">16x 4x</option>
                <option value="PCI_Express_4.0_16x_8x">16x 8x</option>
                <option value="PCI_Express_4.0_8x">8x</option>
                <option value="">---5.0---</option>
                <option value="PCI_Express_5.0_16x">16x</option>
                <option value="PCI_Express_5.0_16x_4x">16x 4x</option>
                <option value="PCI_Express_5.0_16x_8x">16x 8x</option>
            </select>

            <select name="cm-connecteur-disque" class="form_add_select">
                <option value="">Connecteur Disque</option>
                <option value="DIMM.2_PCI-E_4.0_4x">DIMM.2 PCI-E 4.0 4x</option>
                <option value="">---M.2_PCI-E---</option>
                <option value="">---2.0--</option>
                <option value="M.2_PCI-E_2.0_4x">4x</option>
                <option value="M.2_PCI-E_2.0_4x_SATA_6Gb/s">4x + SATA 6Gb/s</option>
                <option value="">---3.0---</option>
                <option value="M.2_PCI-E_3.0_2x">2x</option>
                <option value="M.2_PCI-E_3.0_2x_SATA_6Gb/s">2x + SATA 6Gb/s</option>
                <option value="M.2_PCI-E_3.0_4x">4x</option>
                <option value="M.2_PCI-E_3.0_4x_SATA_6Gb/s">4x + SATA 6Gb/s</option>
                <option value="">---4.0---</option>
                <option value="M.2_PCI-E_4.0_2x">2x</option>
                <option value="M.2_PCI-E_4.0_2x_SATA_6Gb/s">2x + SATA 6Gb/s</option>
                <option value="M.2_PCI-E_4.0_4x">4x</option>
                <option value="M.2_PCI-E_4.0_4x_SATA_6Gb/s">4x + SATA 6Gb/s</option>
                <option value="">---5.0---</option>
                <option value="M.2_ PCI-E_5.0_4x">4x</option>
                <option value="">---Spécial---</option>
                <option value="M.2_SATA_6Gb/s">M.2 SATA 6Gb/s</option>
                <option value="M.2_ PCI-E_1x_SATA_6Gb/s">M.2 PCI-E 1x SATA 6Gb/s</option>
                <option value="Serial_ATA_6Gb/s_SATA_Revision_3">Serial ATA 6Gb/s SATA Revision 3</option>
                <option value="">---PCI-E 3.0 4x NVMe---</option>
                <option value="U.2_SFF-86438_PCI-E_3.0_4x_NVMe">U.2 SFF-86438</option>
                <option value="U.2_PCI-E_3.0_4x_NVMe">U.2</option>
            </select>

            <select name="cm-norme-reseaux" class="form_add_select">
                <option value="">Norme Réseaux</option>
                <option value="">---Ethernet---</option>
                <option value="10_Gbps_Gigabit_Ethernet_10_GbE">10Gbps 10GbE</option>
                <option value="10/100/1000_Mbps">10/100/1000_Mbps</option>
                <option value="100/1000_Mbps">100/1000_Mbps</option>
                <option value="2.5_Gbps_Gigabit_Ethernet_2.5GbE">2.5Gbps 2.5GbE</option>
                <option value="5_Gbps_Gigabit_Ethernet_2.5GbE">5Gbps 2.5GbE</option>
                <option value="BlueTooth">---BlueTooth---</option>
                <option value="BlueTooth_4.2">4.2</option>
                <option value="BlueTooth_5.0">5.0</option>
                <option value="BlueTooth_5.1">5.1</option>
                <option value="BlueTooth_5.2">5.2</option>
                <option value="BlueTooth_5.3">5.3</option>
                <option value="">---Wi-Fi---</option>
                <option value="Wi-Fi_6_AX">6 AX</option>
                <option value="Wi-Fi_6E">6E</option>
                <option value="Wi-Fi_AC">AC</option>
            </select>

            <select name="cm-utilisation" class="form_add_select">
                <option value="">Utilisation</option>
                <option value="Bureautique">Bureautique</option>
                <option value="Gamer">Gamer</option>
                <option value="Multimédia">Multimédia</option>
                <option value="Serveur">Serveur</option>
            </select>
            <button type="submit" name="ajout_cm" class="enregistrer">
                Enregistrer le produit
            </button>
        </form>
    </div>
    <div id="memoire">
        <button class="btn-gestion" onclick="appear_memoire()">Memoire</button>
        <form action="" method="post" id="memoire.form" class="form_add">

            <select name="memoire-marque" class="form_add_select">
                <option value="">Marque</option>
                <option value="Ballistix">Ballistix</option>
                <option value="Corsair">Corsair</option>
                <option value="Crucial">Crucial</option>
                <option value="Fox_Spirit">Fox Spirit</option>
                <option value="G.Skill">G.Skill</option>
                <option value="Gigabyte">Gigabyte</option>
                <option value="HyperX">HyperX</option>
                <option value="Kingston">Kingston</option>
                <option value="Textorm">Textorm</option>
            </select>

            <input type="number" name="memoire-prix" class="form_input" placeholder="Prix">
            <input type="number" name="memoire-capacite" class="form_input" placeholder="Capacité">

            <select name="memoire-nb-barette" class="form_add_select">
                <option value="0">Nombre de Barette</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>

            <select name="memoire-radiateur" class="form_add_select">
                <option value="">Radiateur ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="memoire-utilisation" class="form_add_select">
                <option value="">Utilisation</option>
                <option value="PC_bureau">PC de bureau</option>
                <option value="PC_portable">PC portable</option>
            </select>

            <select name="memoire-type-memoire" class="form_add_select">
                <option value="">Type</option>
                <option value="DDR3" onclick="">DDR3</option>
                <option value="DDR4" onclick="">DDR4</option>
                <option value="DDR5" onclick="">DDR5</option>
            </select>

            <select name="memoire-frequence" class="form_add_select">
                <option value="">Fréquence de la mémoire</option>
                <option value="">--Début DDR3--</option>
                <option value="1066_MHz">1066 MHz</option>
                <option value="1333_MHz">1333 MHz</option>
                <option value="1600_MHz">1600 MHz</option>
                <option value="">--Début DDR4--</option>
                <option value="1866_MHz">1866 MHz</option>
                <option value="2133_MHz">2133 MHz</option>
                <option value="2400_MHz">2400 MHz</option>
                <option value="">---Fin DDR3---</option>
                <option value="2666_MHz">2666 MHz</option>
                <option value="2800_MHz">2800 MHz</option>
                <option value="2933_MHz">2933 MHz</option>
                <option value="3000_MHz">3000 MHz</option>
                <option value="3200_MHz">3200 MHz</option>
                <option value="3300_MHz">3300 MHz</option>
                <option value="3333_MHz">3333 MHz</option>
                <option value="3400_MHz">3400 MHz</option>
                <option value="3466_MHz">3466 MHz</option>
                <option value="3600_MHz">3600 MHz</option>
                <option value="3666_MHz">3666 MHz</option>
                <option value="3733_MHz">3733 MHz</option>
                <option value="3800_MHz">3800 MHz</option>
                <option value="3866_MHz">3866 MHz</option>
                <option value="4000_MHz">4000 MHz</option>
                <option value="4133_MHz">4133 MHz</option>
                <option value="4200_MHz">4200 MHz</option>
                <option value="4266_MHz">4266 MHz</option>
                <option value="4300_MHz">4300 MHz</option>
                <option value="4333_MHz">4333 MHz</option>
                <option value="4400_MHz">4400 MHz</option>
                <option value="4500_MHz">4500 MHz</option>
                <option value="4600_MHz">4600 MHz</option>
                <option value="4700_MHz">4700 MHz</option>
                <option value="">--Début DDR5--</option>
                <option value="4800_MHz">4800 MHz</option>
                <option value="">-Exclusif DDR4-</option>
                <option value="5066_MHz">5066 MHz</option>
                <option value="5333_MHz">5333 MHz</option>
                <option value="">---Fin DDR4---</option>
                <option value="5200_MHz">5200 MHz</option>
                <option value="5600_MHz">5600 MHz</option>
                <option value="6000_MHz">6000 MHz</option>
                <option value="6200_MHz">6200 MHz</option>
                <option value="6400_MHz">6400 MHz</option>
                <option value="6600_MHz">6600 MHz</option>
                <option value="">---Fin DDR5---</option>
            </select>

            <select name="memoire-format" class="form_add_select">
                <option value="">Format de la mémoire</option>
                <option value="DIMM_240_pins_DDR3">DIMM 240 pins DDR3</option>
                <option value="DIMM_288_pins_DDR4">DIMM 288 pins DDR4</option>
                <option value="DIMM_288_pins_DDR5">DIMM 288 pins DDR5</option>
                <option value="SO_DIMM_204_pins_DDR3">SO DIMM 204 pins DDR3</option>
                <option value="SO_DIMM_260_pins_DDR4">SO DIMM 260 pins DDR4</option>
                <option value="SO_DIMM_262_pins_DDR5">SO DIMM 262 pins DDR5</option>
            </select>

            <select name="memoire-specification" class="form_add_select">
                <option value="">Spécification</option>
                <option value="Dual_Rank">Dual Rank</option>
                <option value="Low_Voltage">Low Voltage</option>
                <option value="Single_Rank">Single Rank</option>
                <option value="Unbuffered">Unbuffered</option>
            </select>

            <select name="memoire-couleur-radiateur" class="form_add_select">
                <option value="">Couleur du Radiateur</option>
                <option value="Argent">Argent</option>
                <option value="Blanc">Blanc</option>
                <option value="Bleu">Bleu</option>
                <option value="Gris">Gris</option>
                <option value="Noir">Noir</option>
                <option value="Or">Or</option>
                <option value="Rouge">Rouge</option>
                <option value="Noir_argent">Noir Argent</option>
                <option value="Noir_bleu">Noir Bleu</option>
                <option value="Noir_gris">Noir Gris</option>
                <option value="Noir_rouge">Noir Rouge</option>
            </select>
            <button type="submit" name="ajout_memoire" class="enregistrer">
                Enregistrer le produit
            </button>
        </form>
    </div>
    <div id="processeur">
        <button class="btn-gestion" onclick="appear_processeur()">Processeur</button>
        <form action="" method="post" id="processeur.form" class="form_add">
            <select name="processeur-marque" class="form_add_select">
                <option value="AMD">AMD</option>
                <option value="INTEL">Intel</option>
            </select>

            <input type="number" name="processeur-prix" class="form_input" placeholder="Prix">
            <input type="number" name="processeur-frequence" class="form_input" placeholder="Fréquence">
            <input type="number" name="processeur-nb-core" class="form_input" placeholder="Nombre de core">
            <input type="number" name="processeur-tdp" class="form_input" placeholder="Tdp (Enveloppe Thermique)">

            <select name="processeur-boite" class="form_add_select">
                <option value="">Version Boite ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="processeur-finesse-gravure" class="form_add_select">
                <option value="">Finesse Gravure en Nm</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            </select>

            <select name="processeur-controleur-intergre" class="form_add_select">
                <option value="">Contrôleur Intégré ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <select name="processeur-modele" class="form_add_select">
                <option value="">Modèle</option>
                <option value="">---AMD--</option>
                <option value="AMD_Ryzen_3">Ryzen 3</option>
                <option value="AMD_Ryzen_5">Ryzen 5</option>
                <option value="AMD_Ryzen_5_Pro">Ryzen 5 Pro</option>
                <option value="AMD_Ryzen_7">Ryzen 7</option>
                <option value="AMD_Ryzen_9">Ryzen 9</option>
                <option value="AMD_Ryzen_Threadripper">Ryzen Threadripper</option>
                <option value="AMD_Ryzen_Threadripper_Pro">Ryzen Threadripper Pro</option>
                <option value="">---Intel---</option>
                <option value="Intel_Celeron">Celeron</option>
                <option value="Intel_Core_i3">Core i3</option>
                <option value="Intel_Core_i5">Core i5</option>
                <option value="Intel_Core_i7">Core i7</option>
                <option value="Intel_Core_i9">Core i9</option>
                <option value="Intel_Pentium">Pentium</option>
            </select>

            <select name="processeur-support" class="form_add_select">
                <option value="">Support</option>
                <option value="">---AMD---</option>
                <option value="AMD_AM4">AM4</option>
                <option value="AMD_AM5">AM5</option>
                <option value="AMD_STRX4">STRX4</option>
                <option value="AMD_SWRX8">SWRX8</option>
                <option value="">---Intel---</option>
                <option value="Intel_1200">1200</option>
                <option value="Intel_1700">1700</option>
                <option value="Intel_2066">2066</option>
            </select>

            <select name="processeur-plateforme" class="form_add_select">
                <option value="">Plateforme</option>
                <option value="">---AMD---</option>
                <option value="AMD_Zen_2">Zen_2</option>
                <option value="AMD_Zen_3">Zen_3</option>
                <option value="AMD_Zen_4">Zen_4</option>
                <option value="AMD_Zen+">Zen+</option>
                <option value="">---Intel---</option>
                <option value="Intel_Alder_Lake-S">Alder Lake-S</option>
                <option value="Intel_Cascade_Lake">Cascade Lake</option>
                <option value="Intel_Comet_Lake">Comet Lake</option>
                <option value="Intel_Comet_Lake-S">Comet Lake-S</option>
                <option value="Intel_Rocket_Lake">Rocket Lake</option>
                <option value="Intel_Raptor_Lake-S">Raptor Lake-S</option>
            </select>

            <select name="processeur-chipset" class="form_add_select">
                <option value="">Chipset ?</option>
                <option value="Aucune">Aucune</option>
                <option value="">---AMD---</option>
                <option value="AMD_Radeon_Graphics">Radeon Graphics</option>
                <option value="AMD_Radeon_Vega_7_Graphics">Radeon Vega 7 Graphics</option>
                <option value="AMD_Radeon_Vega_8_Graphics">Radeon Vega 8 Graphics</option>
                <option value="">---Intel---</option>
                <option value="">---UHD Graphics---</option>
                <option value="Intel_UHD_Graphics_610">610</option>
                <option value="Intel_UHD_Graphics_630">630</option>
                <option value="Intel_UHD_Graphics_710">710</option>
                <option value="Intel_UHD_Graphics_730">730</option>
                <option value="Intel_UHD_Graphics_750">750</option>
                <option value="Intel_UHD_Graphics_770">770</option>
            </select>

            <select name="processeur-nom-core" class="form_add_select">
                <option value="">Nom du Core</option>
                <option value="Alder_Lake">Alder Lake</option>
                <option value="Cascade_Lake_X">Cascade_Lake X</option>
                <option value="Castle_Peak">Castle Peak</option>
                <option value="Chagall">Chagall</option>
                <option value="Comet_Lake">Comet Lake</option>
                <option value="Comet_Lake_Refresh">Comet Lake Refresh</option>
                <option value="Cézanne">Cézanne</option>
                <option value="Matisse">Matisse</option>
                <option value="Picasso">Picasso</option>
                <option value="Raphael">Raphael</option>
                <option value="Raptor_Lake">Raptor Lake</option>
                <option value="Renoir">Renoir</option>
                <option value="Rocket_Lake-S">Rocket Lake-S</option>
                <option value="Vermeer">Vermeer</option>
            </select>

            <button type="submit" name="ajout_processeur" class="enregistrer">
                Enregistrer le produit
            </button>
        </form>
    </div>
</div>
<div id="stockage">
    <button class="btn-gestion" onclick="appear_stockage()">Stockage</button>
    <form action="" method="post" id="stockage.form" class="form_add">

        <select name="stockage-marque" class="form_add_select">
            <option value="">Marque</option>
            <option value="Seagate Technology">Seagate Technology</option>
            <option value="Toshiba">Toshiba</option>
            <option value="WD_Black">WD_Black</option>
            <option value="Western Digital">Western Digital</option>
        </select>

        <input type="number" name="stockage-prix" class="form_input" placeholder="Prix">
        <input type="number" name="stockage-capacite" class="form_input" placeholder="Capacité">
        <input type="number" name="stockage-vitesse-rotation" class="form_input" placeholder="Vitesse de rotation">
        <input type="number" name="stockage-taille-cache" class="form_input" placeholder="Taille du cache">

        <select name="stockage-format" class="form_add_select">
            <option value="">Format/Taille</option>
            <option value="2 pouces 1/2">2" 1/2</option>
            <option value="3 pouces 1/2">3" 1/2</option>
        </select>

        <select name="stockage-utilisation" class="form_add_select">
            <option value="">Utilisation</option>
            <option value="Pour NAS">NAS</option>
            <option value="PC de bureau">PC de bureau</option>
            <option value="PC portable">PC Portable</option>
            <option value="Serveur">Serveur</option>
        </select>

        <select name="stockage-enregistrement" class="form_add_select">
            <option value="">Techno d'Enregistrement</option>
            <option value="CMR">CMR</option>
            <option value="EAMR">EAMR</option>
            <option value="PMR">PMR</option>
            <option value="SMR">SMR</option>
            <option value="TDMR">TDMR</option>
        </select>
        <button type="submit" name="ajout_stockage" class="enregistrer">
            Enregistrer le produit
        </button>
    </form>
</div>
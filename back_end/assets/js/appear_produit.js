//Faire apparaitre les boutons des catégories de produits et les faire disparaitre
function appear_all_produit(){
    document.getElementById("add_all_produit").style.display = "block";
    document.getElementById("list_produit").style.display = "none";
    //formulaire pour ajouter des produit
    document.getElementById("alim.form").style.display = "none";
    document.getElementById("boitier.form").style.display = "none";
    document.getElementById("cg.form").style.display = "none";
    document.getElementById("cm.form").style.display = "none";
    document.getElementById("memoire.form").style.display = "none";
    document.getElementById("processeur.form").style.display = "none";
    document.getElementById("stockage.form").style.display = "none";
}

function appear_modif_suppr(){
    document.getElementById("add_all_produit").style.display = "none";
    document.getElementById("list_produit").style.display = "block";
    //formulaire pour ajouter des produit
    document.getElementById("alim.form").style.display = "none";
    document.getElementById("boitier.form").style.display = "none";
    document.getElementById("cg.form").style.display = "none";
    document.getElementById("cm.form").style.display = "none";
    document.getElementById("memoire.form").style.display = "none";
    document.getElementById("processeur.form").style.display = "none";
    document.getElementById("stockage.form").style.display = "none";
}


//Début partie Ajout de produit
    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_alim(){
        document.getElementById("alim.form").style.display = "block";
        document.getElementById("boitier.form").style.display = "none";
        document.getElementById("cg.form").style.display = "none";
        document.getElementById("cm.form").style.display = "none";
        document.getElementById("memoire.form").style.display = "none";
        document.getElementById("processeur.form").style.display = "none";
        document.getElementById("stockage.form").style.display = "none";
    }

    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_boitier(){
        document.getElementById("alim.form").style.display = "none";
        document.getElementById("boitier.form").style.display = "block";
        document.getElementById("cg.form").style.display = "none";
        document.getElementById("cm.form").style.display = "none";
        document.getElementById("memoire.form").style.display = "none";
        document.getElementById("processeur.form").style.display = "none";
        document.getElementById("stockage.form").style.display = "none";
    }

    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_cg(){
        document.getElementById("alim.form").style.display = "none";
        document.getElementById("boitier.form").style.display = "none";
        document.getElementById("cg.form").style.display = "block";
        document.getElementById("cm.form").style.display = "none";
        document.getElementById("memoire.form").style.display = "none";
        document.getElementById("processeur.form").style.display = "none";
        document.getElementById("stockage.form").style.display = "none";
    }

    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_cm(){
        document.getElementById("alim.form").style.display = "none";
        document.getElementById("boitier.form").style.display = "none";
        document.getElementById("cg.form").style.display = "none";
        document.getElementById("cm.form").style.display = "block";
        document.getElementById("memoire.form").style.display = "none";
        document.getElementById("processeur.form").style.display = "none";
        document.getElementById("stockage.form").style.display = "none";
    }

    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_memoire(){
        document.getElementById("alim.form").style.display = "none";
        document.getElementById("boitier.form").style.display = "none";
        document.getElementById("cg.form").style.display = "none";
        document.getElementById("cm.form").style.display = "none";
        document.getElementById("memoire.form").style.display = "block";
        document.getElementById("processeur.form").style.display = "none";
        document.getElementById("stockage.form").style.display = "none";
    }

    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_processeur(){
        document.getElementById("alim.form").style.display = "none";
        document.getElementById("boitier.form").style.display = "none";
        document.getElementById("cg.form").style.display = "none";
        document.getElementById("cm.form").style.display = "none";
        document.getElementById("memoire.form").style.display = "none";
        document.getElementById("processeur.form").style.display = "block";
        document.getElementById("stockage.form").style.display = "none";
    }

    //Faire apparaitre le form lui étant associé et faire disparaitre les autres
    function appear_stockage(){
        document.getElementById("alim.form").style.display = "none";
        document.getElementById("boitier.form").style.display = "none";
        document.getElementById("cg.form").style.display = "none";
        document.getElementById("cm.form").style.display = "none";
        document.getElementById("memoire.form").style.display = "none";
        document.getElementById("processeur.form").style.display = "none";
        document.getElementById("stockage.form").style.display = "block";
    }
//Fin de la partie Ajout de produit

//Début de la partie Modification + Suppression Produit

    //
    function appear_alimentation_liste(){
        document.getElementById("table_alim").style.display = "block";
        document.getElementById("table_boitier").style.display = "none";
        document.getElementById("table_cg").style.display = "none";
        document.getElementById("table_cm").style.display = "none";
        document.getElementById("table_memoire").style.display = "none";
        document.getElementById("table_processeur").style.display = "none";
        document.getElementById("table_stockage").style.display = "none";
    }
    //
    function appear_boitier_liste(){
        document.getElementById("table_alim").style.display = "none";
        document.getElementById("table_boitier").style.display = "block";
        document.getElementById("table_cg").style.display = "none";
        document.getElementById("table_cm").style.display = "none";
        document.getElementById("table_memoire").style.display = "none";
        document.getElementById("table_processeur").style.display = "none";
        document.getElementById("table_stockage").style.display = "none";
    }
    
    //
    function appear_cg_liste(){
        document.getElementById("table_alim").style.display = "none";
        document.getElementById("table_boitier").style.display = "none";
        document.getElementById("table_cg").style.display = "block";
        document.getElementById("table_cm").style.display = "none";
        document.getElementById("table_memoire").style.display = "none";
        document.getElementById("table_processeur").style.display = "none";
        document.getElementById("table_stockage").style.display = "none";
    }

    //
    function appear_cm_liste(){
        document.getElementById("table_alim").style.display = "none";
        document.getElementById("table_boitier").style.display = "none";
        document.getElementById("table_cg").style.display = "none";
        document.getElementById("table_cm").style.display = "block";
        document.getElementById("table_memoire").style.display = "none";
        document.getElementById("table_processeur").style.display = "none";
        document.getElementById("table_stockage").style.display = "none";
    }

    //
    function appear_memoire_liste(){
        document.getElementById("table_alim").style.display = "none";
        document.getElementById("table_boitier").style.display = "none";
        document.getElementById("table_cg").style.display = "none";
        document.getElementById("table_cm").style.display = "none";
        document.getElementById("table_memoire").style.display = "block";
        document.getElementById("table_processeur").style.display = "none";
        document.getElementById("table_stockage").style.display = "none";
    }

    //
    function appear_processeur_liste(){
        document.getElementById("table_alim").style.display = "none";
        document.getElementById("table_boitier").style.display = "none";
        document.getElementById("table_cg").style.display = "none";
        document.getElementById("table_cm").style.display = "none";
        document.getElementById("table_memoire").style.display = "none";
        document.getElementById("table_processeur").style.display = "block";
        document.getElementById("table_stockage").style.display = "none";
    }

    //
    function appear_stockage_liste(){
        document.getElementById("table_alim").style.display = "none";
        document.getElementById("table_boitier").style.display = "none";
        document.getElementById("table_cg").style.display = "none";
        document.getElementById("table_cm").style.display = "none";
        document.getElementById("table_memoire").style.display = "none";
        document.getElementById("table_processeur").style.display = "none";
        document.getElementById("table_stockage").style.display = "block";
    }
//Fin de la partie Modification + Suppression Produit
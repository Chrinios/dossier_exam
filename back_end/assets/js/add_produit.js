//Faire apparaitre les boutons des catégories de produits et les faire disparaitre
function appear_all_produit(){
    document.getElementById("add_all_produit").style.display = "block";
}

function appear_modif_suppr(){
    document.getElementById("add_all_produit").style.display = "none";
}

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
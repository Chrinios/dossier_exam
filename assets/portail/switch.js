
//Fait apparaitre le form log-in et fait disparaitre le form register
function abracadabra(){
    document.getElementById("form_log-in").style.display = "block";
    document.getElementById("form_register").style.display = "none";
}

function hideabracadabra(){
    document.getElementById("form_log-in").style.display = "none";
    document.getElementById("form_register").style.display = "none";
}

//Fait apparaitre le form register et fait disparaitre le form login
function abracadabrasse(){
    document.getElementById("form_register").style.display = "block";
    document.getElementById("form_log-in").style.display = "none";
}
<?php
    ini_set('display_errors', true);

    if(array_key_exists('newpwd', $_POST)){
        $mdp = generatepassword();
        echo '<input type="text" name="pwd" value="'.$mdp.'">';
        echo '<br />Notez le Bien!';   
    }

    //Cette fonction nous générera un mdp.
    function generatepassword(){
        //On défini les caractère utilisable dans le mdp
        $ch = '+-*/0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
        //On casse la liste de caractère pour pouvoir les utiliser un par un
        $chs = str_split($ch);
        //On défini le nombre de caractère dans le mdp
        $lg = rand(10,16);
        $mdp ='';

        /*
            Tant que le nombre de caractère du mot de passe généré par la fonction n'a pas atteint
            le nombre de caractère dit par la varable LG, on increments */
        for($i=0;$i<=$lg;$i++)
        {
            $c = rand(0,count($chs)-1);
            $mdp.= $chs[$c];
        }
        return $mdp;
    }
?>
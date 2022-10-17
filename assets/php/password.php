<?php

    
ini_set('display_errors', true);
    

    if(array_key_exists('newpwd', $_POST)){
        $mdp = generatepassword();
        echo '<input type="text" name="pwd" value="'.$mdp.'">';   
    }

    //Cette fonction nous générera un mdp.
    function generatepassword(){
        //On défini les caractère utilisable dans le mdp
        $ch = '&éèàç=0123456789-+azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
        //On casse la liste de caractère pour pouvoir les utiliser un par un
        $chs = str_split($ch);
        //On défini le nombre de caractère dans le mdp
        $lg = rand(10,16);
        $mdp ='';

        for($i=0;$i<=$lg;$i++)
        {
            $c = rand(0,count($chs)-1);
            $mdp.= $chs[$c];
        }
        return $mdp;
    }
?>
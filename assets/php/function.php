<?php
    function pdo_connect(){
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'db_pcompare_account';

        try{
            return new PDO('mysql:host='.$DATABASE_HOST.';dbname='.$DATABASE_NAME, $DATABASE_USER, $DATABASE_PASS);
        }
        catch(PDOException $exeption){
            exit('failed to connect bdd');
        }
    }

    function create($username, $email, $password, $phone){
        try{
            $pdo = pdo_connect();
            $sql = "INSERT INTO `list_contact`(`id`,`username`,`email`,`mail`,`phone`)
                    VALUE (NULL, '$username','$email','$password','$phone');";
            $pdo->exec($sql);
        }
        catch(PDOException $a){
            echo $sql . $a->getMessage();
        }
    }
?>
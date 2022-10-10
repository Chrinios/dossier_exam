<?php
    //Début Partie Produit
        function pdo_connect(){

            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'db_pcompare';
        
            try{
                return new PDO('mysql:host='.$DATABASE_HOST. ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            } 
            catch(PDOException $exception){
                exit('failed to connect bdd');
            }
        }

    //Fin Partie Produit
    //Début Partie Compte
        function pdo_connect_account(){

            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'db_pcompare_account';
        
            try{
                return new PDO('mysql:host='.$DATABASE_HOST. ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            } 
            catch(PDOException $exception){
                exit('failed to connect bdd');
            }
        }

        //Pour créer un message
        function sendmessage($nom, $prenom, $email, $phone, $titre, $message){
            try{
                $pdo = pdo_connect();
                $sql = "INSERT INTO `message`(`id`,`nom`,`prenom`,`email`,`phone`,`titre`,`message`)
                        VALUE (NULL, '$nom','$prenom','$email','$phone','$titre','$message');";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        //Pour créer un compte
        function create($username, $email, $password){
            try{
                $pdo = pdo_connect_account();
                $sql = "INSERT INTO `account`(`id`,`username`,`email`,`password`)
                        VALUE (NULL, '$username','$email','$password');";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        /*----------------PAS FONCTIONNEL------------------*/

        //Pour log-in dans un compte
        function enter($username, $email, $password){
            try{
                $pdo = pdo_connect_account();
                $sql = "SELECT `id`, `username`, `email`, `password` 
                        FROM `account` 
                        WHERE 1";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        //Pour modifier le compte
        function modif($username, $email, $password){
            try{
                $pdo = pdo_connect_account();
                $sql = "UPDATE `account` 
                        SET `id`='[value-1]',`username`='$username',`email`='$email',`password`='$password'
                        WHERE 1";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

        //Pour supprimer le compte
        function suppr($username, $email, $password){
            try{
                $pdo = pdo_connect_account();
                $sql = "DELETE FROM `account` 
                        WHERE 0";
                $pdo->exec($sql);
            }
            catch(PDOException $a){
                echo $sql . $a->getMessage();
            }
        }

    //Fin Partie Compte
?>
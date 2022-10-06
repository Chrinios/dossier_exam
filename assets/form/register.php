<?php
    ini_set('display_errors', true);
    //Doesn't work, seem to need $_SERVER['DOCUMENT_ROOT']
    require_once('../dossier_exam/assets/php/function.php');
    $pdo = pdo_connect();
?>


<form action="" method="post">
    <input type="email" name="email" id="email" required>
    <input type="text" name="username" id="username" required>
    <input type="password" name="password" id="password" required>
    <input type="number" name="phone" id="phone">
    <input type="submit" value="Register">
</form>

<?php
    if(isset($_POST['upload'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        die(
            create(
                $username, $email, $password, $phone
            )
        );
    }
?>
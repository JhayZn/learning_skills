<pre>
<?php
    require 'db.php';

    $sql = "INSERT INTO users(usr_login, usr_password, usr_mail, usr_creation, usr_isAdmin) 
            VALUES ('". $_POST['username'] ."', '". password_hash($_POST['password'], PASSWORD_BCRYPT) ."', '". $_POST['mail'] ."','". date('Y-m-d H:i:s') ."', 0)";

    $sqlExist = "SELECT usr_login FROM users WHERE usr_login = '". $_POST['username'] ."'";
    $query = $conn->query($sqlExist);
    $userFetch = $query->fetchAll(PDO::FETCH_ASSOC);
    $userResult = $userFetch[0];
    $userExist = $userResult['usr_login'];

    try{
        
        if($userExist){

            echo ("Aïe ! Un autre utilisateur <strong>".$_POST['username'] ."</strong> existe déjà, nous en  sommes désolés...");

        }elseif($_POST['username'] != null){

            $conn->exec($sql);
            header('location: ../public/index.php?p=signin');

        }else{

            echo("Veuillez renseigner un nom d'utilisateur et un mot de passe");

        }

    }catch(Exception $e){

        echo ("Oops... un problème est survenu lors de la création de votre compte.");
        

    }

?>
</pre>
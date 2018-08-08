<pre>
<?php
    require 'db.php';

    $sql = "INSERT INTO users(usr_login, usr_password, usr_mail, usr_creation, usr_isAdmin) 
            VALUES ('". $_POST['username'] ."', '". password_hash($_POST['password'], PASSWORD_BCRYPT) ."', '". $_POST['mail'] ."','". date('Y-m-d H:i:s') ."','". $_POST['isAdminCheck'] ."')";


    $sqlExist = "SELECT usr_login FROM users WHERE usr_login = '". $_POST['username'] ."'";

    $query = $conn->query($sqlExist);
    $userFetch = $query->fetchAll(PDO::FETCH_ASSOC);

    $userResult = $userFetch[0];
    $userExist = $userResult['usr_login'];

    try{
        
        if($userExist){

            header('location: ../public/index.php?p=create&s=2');
            
        }elseif($_POST['username'] != null){
            
            $conn->exec($sql);
            header('location: ../public/index.php?p=list&s=1');
            echo ("Votre compte a bien été créé !");
            echo (" <p><a href='../public/index.php?p=signin'>Se connecter</a></p>");
            
        }else{
            
            header("location: ../public/index.php?p=create&s=0");
            echo("Veuillez renseigner un nom d'utilisateur et un mot de passe");

        }

    }catch(Exception $e){

        echo ("Oops... un problème est survenu lors de la création de votre compte.");
        

    }

?>
</pre>
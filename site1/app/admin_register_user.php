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
            
        }elseif($_POST['username'] != null && $_SESSION['isAdmin'] == 1){
            
            $conn->exec($sql);
            header('location: ../public/index.php?p=list&s=1');

            
        }else{
            
            header("location: ../public/index.php?p=create&s=0");

        }

    }catch(Exception $e){

        echo ("Oops... un problème est survenu lors de la création de votre compte.");
        

    }

?>
</pre>
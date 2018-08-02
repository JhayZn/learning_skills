<?php

    require 'db.php';
    require 'admin_fetchData_modify.php';

    try{
        
        var_dump($_GET['user']);
    
        $sql = "UPDATE users SET usr_login = '". $_POST['username'] ."',  usr_mail = '". $_POST['mail'] ."' WHERE usr_id = '". $_GET['user'] ."'";
        
        var_dump($_POST['mail']);
        var_dump($userMail);
    
            $updateUser = $conn->prepare($sql);
            $updateUser->execute();

        header('location: ../public/index.php?p=list ');

    }
    catch(Exception $e){

        echo "Oops something going wrong !" . $e->getMessage();

    }

?>

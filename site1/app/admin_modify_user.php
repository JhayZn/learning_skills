<?php

    require 'db.php';
    require 'admin_fetchData_modify.php';

    if($_POST['username'] != $userName || $_POST['mail'] != $userMail || $_POST['isAdminCheck'] != $userIsAdmin){

        try{
        
            $sql = "UPDATE users SET usr_login = '". $_POST['username'] ."',  usr_mail = '". $_POST['mail'] ."',  usr_isAdmin = '". $_POST['isAdminCheck'] ."' WHERE usr_id = '". $_GET['user'] ."'";
        
                $updateUser = $conn->prepare($sql);
                $updateUser->execute();
                
                $queryStatement = $updateUser->execute();

            if($queryStatement){

                header('location: ../public/index.php?p=list&s=2 ');
                
            }else{

                header('location: ../public/index.php?p=list&s=0 ');

            }

        }
        catch(Exception $e){

            echo "Oops something going wrong !" . $e->getMessage();

        }
    }else{

        header('location: ../public/index.php?p=list');

    }

?>

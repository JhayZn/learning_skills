<pre>
<?php
    session_start();

    require 'db.php';
    
    if(isset($_POST['login']) && isset($_POST['password'])){
        
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $sql = "SELECT usr_login, usr_password, usr_isAdmin FROM users WHERE usr_login = '$login' OR usr_mail = '$login' ";
        $query = $conn->query($sql);
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $userDataFetch = $row[0];
        $_SESSION['user'] = $userDataFetch['usr_login'];
        $passwordMatch = $userDataFetch['usr_password'];
        $userIsAdmin = $userDataFetch['usr_isAdmin'];
        $_SESSION['isAdmin'] = $userIsAdmin;
        
        if(password_verify($password, $passwordMatch)){
            
            if($userIsAdmin == 1){
                
                header("location: ../public/index.php?p=admin");
                
            }else{

                header("location: ../public/index.php?p=dashboard");

            }

        }else{
            
            header("location: ../public/index.php?p=signin");

        }
    }
?>
</pre>
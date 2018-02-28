<pre>
<?php
    require 'db.php';
    
    if(isset($_POST['login']) && isset($_POST['password'])){

        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT usr_login, usr_password FROM users WHERE usr_login = '$login' OR usr_mail = '$login' ";
        $query = $conn->query($sql);

        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        $userDataFecth = $row[0];
        $_SESSION['user'] = $userDataFecth['usr_login'];
        $passwordMatch = $userDataFecth['usr_password'];

        if(password_verify($password, $passwordMatch)){

            echo('<h1>Bienvenue '. $_SESSION['user'] .' !');

        }else{

            echo('Login ou password incorrect...');

        }

    }else{

        echo('Merci de renseigner les champs de connexion.');
    }

    

?>
</pre>

<h1>Bienvenue sur votre tableau de bord <strong><? $_SESSION['user'] ?></strong>:)</h1>
<?php

    if(isset($_SESSION['user'])){
        echo("Welcome ". $_SESSION['user'] ."");
    }
    else{
        echo("pas d'infos user...");
    }
?>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>
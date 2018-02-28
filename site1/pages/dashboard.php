<?php
    if(isset($_SESSION['user'])){

        echo ("Bienvenue sur votre tableau de bord <strong>". $_SESSION['user'] ."</strong>.");
    }
    else{
        echo("pas d'infos user...");
    }
?>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>
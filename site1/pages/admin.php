<?php
$p = "Administration panel";
?>
<br>
<?php
    /*if(isset($_SESSION['user'])){
        echo("Welcome"." ". $_SESSION['user'] ."");
    }
    else{
        echo("pas d'infos user...");
    }*/
?>
<ul class="adminMenu">
    <li><a href="index.php?p=list">Accounts lists</a></li>
    <li><a href="index.php?p=create">Create account</a></li>
    <li><a href="">Delete account</a></li>
    <li><a href="">Reset password</a></li>
</ul>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>
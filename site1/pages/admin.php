<?php
$p = "Administration panel";

//var_dump($_SESSION);

if(empty($_SESSION)){

    http_response_code(401);
    $p = http_response_code(). " - Unauthorized -";
    echo "<h3>You are not authenticated by the server.</h3>";
    
}elseif(!empty($_SESSION) && $_SESSION['isAdmin'] !== 1){
    
    http_response_code(403);
    $p = http_response_code(). " - Forbidden -";
    echo "<h3>You are not allowed to access to this page.</h3>";

}else{

?>

<br>

<ul class="adminMenu">
    <li><a href="index.php?p=list">Accounts lists</a></li>
    <li><a href="index.php?p=create">Create account</a></li>
    <li><a href="">Delete account</a></li>
    <li><a href="">Reset password</a></li>
</ul>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>

<?php } ?>
<?php
    $dsn = 'mysql:dbname=learning;host=localhost';
    $user = 'root';
    $password = '';
try{

    $conn = new PDO($dsn, $user, $password);

}catch(PDOException $e){

    echo 'Connection to database failed'. $e->getMessage();

}

?>
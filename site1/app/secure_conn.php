<?php

    function secureAdmConn(){

        if(empty($_SESSION)){

            http_response_code(401);
            echo (http_response_code(). " - Unauthorized -");
            echo "<h3>You are not authenticated by the server.</h3><br>";
            echo $_SERVER['SERVER_SOFTWARE'];
            //header('location: ../public/index.php?p=signin');
            
        }elseif(!empty($_SESSION) && $_SESSION['isAdmin'] != 1){
            
            http_response_code(403);
            echo (http_response_code(). " - Forbidden -");
            echo "<h3>You are not allowed to access to this page.</h3><br>";
            echo $_SERVER['SERVER_SOFTWARE'];
            //header('location: ../public/index.php?p=dashboard');

        }
    }

?>
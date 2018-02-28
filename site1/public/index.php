<?php
    session_start();
    session_set_cookie_params(0, NULL, NULL, FALSE, TRUE);


    require '../app/db.php';
    
    if(isset($_GET['p'])){
        
        $p = $_GET['p'];
        
    }else{
        
        $p = 'home';
        
    }
    
    ob_start();
    if($p === 'home'){
        
        require '../pages/home.php';
        
    }elseif($p === 'signin'){
        
        require '../pages/sign_in.php';
        
    }elseif($p === 'dashboard'){
        
        require '../pages/dashboard.php';
        
    }
    $content = ob_get_clean();
    require '../pages/template/default.php';
    
?>
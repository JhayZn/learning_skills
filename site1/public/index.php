<?php
    session_start();
    session_set_cookie_params(0, NULL, NULL, FALSE, TRUE);


    require '../app/db.php';
    require '../app/secure_conn.php';
    
    if(isset($_GET['p'])){
        
        $p = $_GET['p'];
        
    }else{
        
        $p = 'home';
        
    }
    
    ob_start();

    if($p === 'home'){
        
        require '../pages/home.php';
        
    }elseif($p === 'register'){

        require '../pages/register.php';

    }elseif($p === 'signin'){
        
        require '../pages/sign_in.php';
        
    }elseif($p === 'dashboard'){
        
        require '../pages/dashboard.php';
        
    }elseif($p === 'admin'){

            require '../pages/admin.php';

    }elseif($p === 'list'){

        require '../pages/list_accounts.php';
        
    }elseif($p === 'create'){

        require '../pages/create_account.php';
        
    }elseif($p === 'modify'){

        require '../pages/modify_account.php';
        
    }else{

        http_response_code(404);
        $p = '404 Not Found';
        require '../pages/404.php';
        
    }
    
    $content = ob_get_clean();
    require '../pages/template/default.php';
    
?>
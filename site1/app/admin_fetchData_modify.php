<?php   

    $sql = "SELECT usr_login, usr_mail, usr_isAdmin FROM users WHERE usr_id = '". $_GET['user'] ."'";
    $query = $conn->prepare($sql);
    $query->execute();
    $userData = $query->fetchAll(PDO::FETCH_ASSOC);
    $userDataFetch = array();

    foreach($userData as $userDataFetch){

        $userName = $userDataFetch['usr_login'];
        $userMail = $userDataFetch['usr_mail'];
        $userIsAdmin = $userDataFetch['usr_isAdmin'];

    }

?>
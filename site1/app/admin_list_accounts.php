<?php

    $sql = "SELECT usr_id, usr_login, usr_mail, DATE_FORMAT(usr_creation, \"%d/%m/%Y\") AS inscription FROM users ORDER BY usr_creation ";
    $query = $conn->prepare($sql);

?>
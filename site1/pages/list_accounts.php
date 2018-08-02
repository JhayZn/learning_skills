<?php
    $p = "Administration panel";
    require '../app/admin_list_accounts.php';
?>

<ul>
    <li class="selected"><a href="index.php?p=list">Accounts lists</a></li>
    <li><a href="index.php?p=create">Create account</a></li>
    <li><a href="">Delete account</a></li>
    <li><a href="">Reset password</a></li>
</ul>
<div>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Mail</th>
                <th>Creation</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query->execute();
                while($dataRows = $query->fetchAll(PDO::FETCH_ASSOC)){

                    $dataFetch = array();

                    foreach($dataRows as $dataFetch){

                        $userId = $dataFetch['usr_id'];
                        $userName = $dataFetch['usr_login'];
                        $userMail = $dataFetch['usr_mail'];
                        $userCreation = $dataFetch['inscription'];
        
                        echo "<tr>";
                        echo "<td>" . $userName . "</td>";
                        echo "<td>" . $userMail . "</td>";
                        echo "<td>" . $userCreation . "</td>";
                        echo "<td class='modify_button'><a class='btn btn-primary btn-sm' href='../public/index.php?p=modify&user={$userId}'>Modify</a></td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</div>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>
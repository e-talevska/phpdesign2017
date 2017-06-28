<?php
require 'db.php';
$users = fetchUsers();
var_dump($users);
?>

<html>
    <head>
        <title>List Users</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
            </tr>
            <?php
            foreach ($users as $user){
                echo "<tr>"
                . "<td>{$user['username']}</td>"
                . "<td>{$user['firstname']}</td>"
                . "<td>{$user['lastname']}</td>";
                if($user['profile'] != '' && file_exists("uploads/{$user['profile']}")){
                  // echo "<td><img src='uploads/{$user['profile']}'></td>"; Za da se pecati sodrzinata
                    echo "<td><a href='download.php?file={$user['profile']}'>Download</a></td>"; // Za da se downlodira sodrzinata
                } else {
                    echo "<td></td>";
                }
                
                echo "</tr>";
            }
            ?>
               
        </table>
        
    </body>
</html>


<?php

require('connect2.php');

$pdo->query("UPDATE QA_Player SET LOGGEDIN = 1 WHERE PLAYERID=$_GET['id']");

echo 'Logged In';

?>

<html>
    <head>
        <style>
            .container {
            width: 100%;
            display: flex;
            height: 100vh;
            justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <a href="loggedOut.php?id= <?php echo $_GET['id']?>">Logout</a>
        </div>
    </body>
</html>
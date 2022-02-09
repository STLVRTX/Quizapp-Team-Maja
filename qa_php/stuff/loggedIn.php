<?php

require('connect2.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    #$pdo->query("UPDATE QA_Player SET LOGGEDIN = 1 WHERE PLAYERID=$id");
    
    echo 'Logged In User: ' . $id;
}
else {
    echo 'error';
}
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
            <a href="loggedOut.php?id= <?php echo $id?>">Logout</a>
        </div>
    </body>
</html>
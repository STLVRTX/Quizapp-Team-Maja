<?php
    require('connection2.php');

    $sql = 'SELECT * FROM QA_Account';

    #foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row){
    #    echo json_encode($row);
    #}
?>

<html>

    <head>
        <style>
            .container {display: flex; justify-content: center;}
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post">
                Username
                <input type="text" id="username">
            </form>
        </div>
    </body>
</html>
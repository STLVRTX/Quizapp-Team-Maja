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
            <form method="post" style="align-self: center">
                Username:
                <input type="text" name="input_un">
                Password:
                <input type="text" name="input_pw">
                <input type="submit" name="submit">
            </form>
        </div>
    </body>
</html>
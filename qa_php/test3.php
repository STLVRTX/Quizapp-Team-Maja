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
            body {
    margin: 0;
    padding: 0;
    text-align: center; /* !!! */
}

.container {
    margin: 0 auto;
    text-align: left;
    width: 800px;
}
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
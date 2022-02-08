<?php
    require('connection.php');

    foreach ($pdo->query('SELECT * FROM QA_Account;') as $row) {
        echo $row['Username'];
    }

    echo 'done';
?>
<?php
    require('connection2.php');

    foreach ($pdo->query('SELECT * FROM QA_Account where id=1') as $row) {
        echo $row['Username'];
    }

    echo 'done';
?>
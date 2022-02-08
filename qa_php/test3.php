<?php
    require('connection2.php');

    foreach ($pdo->query('SELECT * FROM QA_Question') as $row) {
        echo $row[1];
    }

    echo 'done';
?>
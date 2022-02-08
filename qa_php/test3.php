<?php
    require('connection2.php');

    foreach ($pdo->query('SELECT * FROM QA_Answer') as $row) {
        echo json_encode($row);
        echo '<br>';
    }

    echo 'done';
?>
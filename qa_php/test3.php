<?php
    require('connection2.php');

    foreach ($pdo->query('SELECT * FROM QA_Question where QuestionID = 18') as $row) {
        echo json_encode($row);
        echo '<br>';
    }

    echo 'done';
?>
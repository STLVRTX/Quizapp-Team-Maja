<?php
    require('connection2.php');

    foreach ($pdo->query('SELECT * FROM QA_Account')->fetch_assoc() as $row) {
        echo json_encode($row);
        echo '<br>';
    }
?>
<?php
    require('connection2.php');

    $sql = 'SELECT * FROM QA_Account';

    foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row){
        echo json_encode($row);
    }
?>
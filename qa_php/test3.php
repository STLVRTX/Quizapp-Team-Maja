<?php
    require('connection2.php');

    $data = $pdo->query('SELECT * FROM QA_Account');

    $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
        echo '<br>';
?>
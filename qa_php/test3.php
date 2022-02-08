<?php
    require('connection2.php');

    foreach ($pdo->query('SELECT * FROM QA_Account') as $row) {
        $result = $row->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row);
        echo '<br>';
    }
?>
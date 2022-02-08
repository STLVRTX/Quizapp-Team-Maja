<?php
    require('connection2.php');

    #foreach (as $row) {
    #    $row = $row->fetchAll(PDO::FETCH_ASSOC);
    #    echo json_encode($row);
    #    echo '<br>';
    #}

    $sth = $pdo->prepare("SELECT * FROM QA_Account");
    foreach ($sth->execute() as $row) {
        $result = $row->fetchAll();
        echo($result);
    }
?>
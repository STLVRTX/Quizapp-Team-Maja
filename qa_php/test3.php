<?php
    require('connection2.php');

    #foreach (as $row) {
    #    $row = $row->fetchAll(PDO::FETCH_ASSOC);
    #    echo json_encode($row);
    #    echo '<br>';
    #}

    $sth = $dbh->prepare("SELECT * FROM QA_Account");
    $sth->execute();

    /* Fetch all of the remaining rows in the result set */
    print("Fetch all of the remaining rows in the result set:\n");
    $result = $sth->fetchAll();
    print_r($result);
?>
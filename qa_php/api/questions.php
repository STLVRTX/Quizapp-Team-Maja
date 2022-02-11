<?php
    $tableName = 'QA_Question';

    #/index.php/questions/DIFFICULTYID/AMOUNT 

    $difficultyID = (int) $url[5];
    $amount = (int) $url[6];

    echo 'DIFFICULTYID: ' . $difficultyID;
    echo '<br>AMOUNT: ' . $amount;
?>
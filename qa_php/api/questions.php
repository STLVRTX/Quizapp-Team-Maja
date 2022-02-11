<?php
    $tableName = 'QA_Question';

    #/index.php/questions/DIFFICULTYID/AMOUNT 

    $difficultyID = (int) $url[6];
    $amount = (int) $url[7];

    echo 'DIFFICULTYID: ' . $difficultyID;
    echo '<br>AMOUNT: ' . $amount;
?>
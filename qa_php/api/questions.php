<?php
    $tableName = 'QA_Question';

    #/index.php/questions/DIFFICULTYID/AMOUNT 

    $difficultyID = (int) $url[5];
    $amount = (int) $url[6];

    $data = DB::query("SELECT * FROM QA_Question WHERE DIFFICULTYID=:id", array(':id' => $difficultyID));
    foreach($data as $row){
        echo '[';
        echo json_encode($row);
        foreach(DB::query("SELECT * FROM QA_Answer WHERE QUESTIONID=:id", array(':id' => $row['QUESTIONID'])) as $row2){
            echo json_encode($row2);
        }
        echo ']';
    }
?>
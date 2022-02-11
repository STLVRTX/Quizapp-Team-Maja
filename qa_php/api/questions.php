<?php
    $tableName = 'QA_Question';

    #/index.php/questions/DIFFICULTYID/AMOUNT 

    $difficultyID = (int) $url[5];
    $amount = (int) $url[6];

    $data = DB::query("SELECT * FROM QA_Question WHERE DIFFICULTYID=:id", array(':id' => $difficultyID));
    foreach($data as $row_question){
        echo '[';
        echo json_encode($row_question);
        foreach(DB::query("SELECT * FROM QA_Answer WHERE QUESTIONID=:id", array(':id' => $row_question['QUESTIONID'])) as $row_answer){
            echo json_encode($row_answer);
        }
        echo ']';
    }
?>
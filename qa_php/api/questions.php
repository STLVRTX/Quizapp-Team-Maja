<?php
    $tableName = 'QA_Question';

    #/index.php/questions/DIFFICULTYID/AMOUNT 

    $difficultyID = (int) $url[5];
    $amount = (int) $url[6];

    $data = DB::query("SELECT * FROM QA_Question WHERE DIFFICULTYID=:id", array(':id' => $difficultyID));
    #echo json_encode($data);
    foreach ($data->fetchAll() as $row){
        echo json_encode($row);
    }
?>
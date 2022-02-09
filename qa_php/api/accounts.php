<?php
    $tableName = 'QA_Account';
    if($method == 'GET'){
        if($id){
            $data = DB::query("SELECT * FROM $tableName WHERE ACCOUNTID=:id", array(':id' => $id));
            if($data != null){
                echo json_encode($data);
            }
            else {
                echo json_encode(['message' => 'user does not exist']);
            }
        }
        else {
            $data = DB::query("SELECT * FROM $tableName");
            echo json_encode($data);
        }
    }

?>
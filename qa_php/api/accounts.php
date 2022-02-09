<?php
    $tableName = 'QA_Account';
    if($method == 'GET'){
        if($id){
            $data = DB::query("SELECT * FROM $tableName WHERE ACCOUNTID=:id", array(':id' => $id));
            if($data != null){
                echo json_encode($data);
            }
        }
    }

?>
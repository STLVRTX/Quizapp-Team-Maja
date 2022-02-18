<?php
    $tableName = 'QA_Category';

    $category = (string) $url[5];

    if($method == 'GET'){
        if($category != null){
            if($category == 'categories'){
                $data = DB::query("SELECT * FROM :tableName", array(':tableName' => $tableName));
                echo json_encode($data);
            }
        }
    }   
?>
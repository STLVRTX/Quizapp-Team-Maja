<?php
    $tableName = 'QA_Account';
    if($method == 'GET'){
        if($username){
            $data = DB::query("SELECT * FROM $tableName WHERE USERNAME=':username'", array(':username' => $username));
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
    elseif ($method == 'POST'){
        if($_POST != null){
            #extract($_POST);
            #DB::query("INSERT INTO $tableName (USERNAME, PASSWORD, EMAIL) VALUES (:username, :password, :email)", array(':username' => $username, ':password' => $password, ':email' => $email));
        }
    }

?>
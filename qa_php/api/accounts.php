<?php
    $tableName = 'QA_Account';
    if($method == 'GET'){
        if($username != null){
            $data = DB::query("SELECT * FROM $tableName WHERE USERNAME=:username", array(':username' => $username));
            if($data != null){
                echo json_encode($data);
            }
            else {
                echo json_encode(['message' => 'user does not exist']);
            }
        }
    }
    elseif ($method == 'POST'){
        if($_POST != null){
            extract($_POST);
            DB::query("INSERT INTO $tableName (USERNAME, PASSWORD, EMAIL) VALUES (:username, :password, :email)", array(':username' => $post_username, ':password' => $post_password, ':email' => $post_email));
            echo 'success';
        }
    }
    elseif ($method == 'PUT'){
        if($username != null){
            $data = DB::query("SELECT * FROM $tableName WHERE USERNAME=:username", array(':username' => $username));
            if($data != null){
                $_PUT = file_get_contents('php://input'), true);
                print_r($_PUT);
            }
        }
        else {
            echo json_encode(['message' => 'please specify a username']);
        }
    }
?> 
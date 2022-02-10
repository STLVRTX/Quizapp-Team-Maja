<?php
    $tableName = 'QA_Account';
    if($method == 'GET'){
        if($username != null){
            $data = DB::query("SELECT * FROM $tableName WHERE USERNAME=:username", array(':username' => $username));
            if($data != null){
                echo $url[6];
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
            DB::query("INSERT INTO QA_PLAYER (USERNAME, POINTS) VALUES (:username, 0)", array(':username' => $post_username));
            echo 'success';
        }
    }
    elseif ($method == 'PUT'){
        if($username != null){
            $data = DB::query("SELECT * FROM $tableName WHERE USERNAME=:username", array(':username' => $username));
            if($data != null){
                extract(json_decode(file_get_contents('php://input'), true));
                if($put_email == null){
                    DB::query("UPDATE $tableName SET PASSWORD=:password WHERE USERNAME=:username", array(':password' => $put_password, ':username' => $username));
                    echo json_encode(['message' => 'password updated successfully']);
                }
                else {
                    DB::query("UPDATE $tableName SET PASSWORD=:password, EMAIL=:email WHERE USERNAME=:username", array(':password' => $put_password, ':email' => $put_email, ':username' => $username));
                    echo json_encode(['message' => 'data updated successfully']);
                }
            }
            else {
                echo json_encode(['message' => 'user does not exist']);
            }
        }
        else {
            echo json_encode(['message' => 'please specify a username']);
        }
    }
?> 
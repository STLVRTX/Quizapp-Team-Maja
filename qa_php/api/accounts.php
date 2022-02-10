<?php
    $tableName = 'QA_Account';
    if($method == 'GET'){
        if($username != null){
            $data = DB::query("SELECT * FROM $tableName WHERE USERNAME=:username", array(':username' => $username));
            if($data != null){
                if($url[6] == 'login=true'){
                    DB::query("UPDATE QA_PLAYER SET LOGGEDIN=1 WHERE USERNAME=:username", array(':username' => $username));
                }
                elseif($url[6] == 'login=false'){
                    DB::query("UPDATE QA_PLAYER SET LOGGEDIN=0 WHERE USERNAME=:username", array(':username' => $username));
                }
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
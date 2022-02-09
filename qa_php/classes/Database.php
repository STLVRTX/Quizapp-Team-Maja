<?php

class DB {
    private static function connect(){
        $tns = "quizzapp_high"; 
        $user = "quizzteam4"; 
        $password = "QuizzApp8535"; 

        $pdo = new PDO("oci:dbname=".$tns, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function query($query, $params = array()){
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);

        if(explode(' ', $query)[0] == 'SELECT'){
            $data = $stmt->fetchAll();
            
            return $data;
        }
    }
}

?>
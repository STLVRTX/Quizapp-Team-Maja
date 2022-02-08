<?php
   $tns = "quizzapp_high"; 

   $user = "QUIZZDEMO"; 

   $password = "QuizzApp2506"; 
   try { 

        $conn = new PDO("oci:dbname=".$tns, $user, $password); 

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        echo 'Connected to database'; 

        foreach ($conn->query('SELECT * FROM QA_Account;') as $row) {
            echo $row['Username'];
        }

   } 
   catch(PDOException $e) { 

        echo 'ERROR: ' . $e->getMessage(); 

   } 
?>
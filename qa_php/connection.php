<?php
$tns = "quizzapp_high"; 

$user = "quizzteam4"; 

$password = "QuizzApp8535"; 
try { 

     $pdo = new PDO("oci:dbname=".$tns, $user, $password); 

     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

     echo 'Connected to database'; 

} 
catch(PDOException $e) { 

     echo 'ERROR: ' . $e->getMessage(); 

} 
?>
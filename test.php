#!/usr/bin/php 
<?php  
try { 
        $conn = oci_connect("QUIZZDEMO", "QuizzApp2506", "quizzapp_high"); 
        echo "<br>OCI Connect extension found.. opening connnection..."; 

        if (!$conn) { 
                echo "<br>Function 'oci_connect' found and working but cannot connect to Oracle:<br>"; 
                $m = oci_error(); 
                echo $m['message'], "\n"; 
                exit; 
        } else { 
                echo "<br>SUCCESS: Connected to Oracle!"; 
        } 
    } catch (Exception $e) { 
            echo $e->getMessage(); 
} 

$sql = oci_parse($conn, 'select * from admin.test'); 

oci_execute($sql); 

while ($row = oci_fetch_assoc($sql)) { 

        echo $row['BEZEICHNUNG'] . "<br>"; 

} 

// Close the Oracle connection 
oci_close($conn); 
?> 
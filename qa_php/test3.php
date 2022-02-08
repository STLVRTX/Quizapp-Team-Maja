<?php
    require('connection2.php');

    $sql = 'SELECT * FROM QA_Account';

    foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row){
        echo json_encode($row);
    }
?>

<html>

<head>
</head>
<body>
<div style="position: absolute; top:50%; left:50%">
Test
</div>
</body>
</html>
<?php
    require('connection2.php');

    $sql = "SELECT * FROM QA_Account";

    if(isset($_POST['submit'])){
        
        $sql = "SELECT * FROM QA_Account WHERE Username='" . $_POST['input_un'] . "';"; 

        foreach($pdo->query($sql) as $row){
            echo json_encode($row);
        }
    }

    #foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row){
    #    echo json_encode($row);
    #}
?>

<html>
    <head>
        <style>
            .container {
            width: 100%;
            display: flex;
            height: 100vh;
            justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post" style="align-self: center">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="input_un"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="input_pw"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
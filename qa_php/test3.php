<?php
    require('connection2.php');

    $sql = "SELECT * FROM QA_Account";

    if(isset($_POST['submit'])){
        
        $name = $_POST['input_un'];
       foreach($pdo->query("SELECT * FROM QA_Account WHERE Username='$name'", PDO::FETCH_ASSOC) as $row){
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
        <table>
                    <tr>
                        <form method="post" style="align-self: center">
                        <td>Username:</td>
                        <td><input type="text" name="input_un"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="input_pw"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Login"></td>
                </form>
                    <td>
                        <form method="post" action="createAccount.php" style="align-self: center">
                            <input type="submit" name="input_createAccount" value="Create New Account">        
                        </form>
                    </td>
                </tr> 
            </table>
        </div>
    </body>
</html>
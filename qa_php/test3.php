<?php
    require('connection2.php');

    $sql = "SELECT * FROM QA_Account";

    if(isset($_POST['submit'])){
        $name = $_POST['input_un'];
        $password = $_POST['input_pw'];
        foreach($pdo->query("SELECT * FROM QA_Account WHERE Username='$name'", PDO::FETCH_ASSOC) as $row){   
            if($password == $row['Password']){
                header('Location: loggedIn.php');
            }
            else {
                echo 'Incorrect Username or Password';
            }
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
                        <td>
                            <a href="createAccount.php" style="align-self: center">Create New Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="input_un"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="input_pw"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
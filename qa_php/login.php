<?php
    require('connection2.php');

    if(isset($_POST['submit'])){

        $name = $_POST['input_username'];
        $password = $_POST['input_password'];
        
        foreach($pdo->query("SELECT * FROM QA_Account WHERE Username='$name'", PDO::FETCH_ASSOC) as $row){  
            if($password == $row['PASSWORD']){
                header('Location: loggedIn.php?id=' . $row['ACCOUNTID']);
            }
            else {
                echo 'Incorrect Username or Password';
            }
       }
    }

    if(isset($_GET['accountCreated'])){
        echo 'Account created';
    }
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
                        <td><input type="text" name="input_username" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="input_password" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
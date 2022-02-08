<?php
    require('connection2.php');

    if(isset($_POST['submit'])){

        $name = $_POST['input_username'];
        $mail = $_POST['input_mail'];
        $password = $_POST['input_password'];
        $repeatPassword = $_POST['input_password_repeat'];

        $result = $pdo->query("SELECT * FROM QA_Account WHERE Username='$name'", PDO::FETCH_ASSOC);
        $row = $result->fetch();

        if(! $row){
            echo 'user does not exist';
        }
       #if($password == $repeatPassword){
            
       #} 
       #else {
           #echo 'The passwords must match';
       #}
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
                        <td>Username:</td>
                        <td><input type="text" name="input_username" required></td>
                    </tr>
                    <tr>
                        <td>E-Mail:</td>
                        <td><input type="email" name="input_mail" ></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="input_password" ></td>
                    </tr>
                    <tr>
                        <td>Repeat Password:</td>
                        <td><input type="text" name="input_password_repeat" ></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Create Account"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
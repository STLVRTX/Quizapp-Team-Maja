<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            .container {
            width: 100%;
            display: flex;
            height: 100vh;
            justify-content: center;
            }
        </style>
        <script>
            var xhr = null;

            function getJSONFromDatabase(x){
                xhr = new XMLHttpRequest();
                xhr.open('GET', 'index.php/accounts/' + x, true);
                xhr.onload = handleAccountCreation;
                xhr.send(null);
            }

            function handleAccountCreation(){
                console.log(xhr.responseText);
                if(xhr.responseText == '{"message":"user does not exist"}'){
                    if(document.getElementById('password').value == document.getElementById('password2').value){
                        sendJSONToDatabase();
                    }
                    else {
                        console.log('The passwords do not match');
                    }
                }
                else {
                    console.log('This username is already taken');
                }
            }

            function sendJSONToDatabase(){
                let un = document.getElementById('name').value;
                let pw = document.getElementById('password').value;
                let em = document.getElementById('email').value;

                console.log(un);
                console.log(pw);
                console.log(em);

                /*xhr = new XMLHttpRequest();
                xhr.open('POST', 'index.php/accounts/', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form')
                xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    }
                };
                xhr.send(null);*/
            }

        </script>
    </head>
    <body>
        <div class="container">
            <table style="align-self: center">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" id="name"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" id="password"></td>
                </tr>
                <tr>
                    <td>Password Repeat:</td>
                    <td><input type="text" id="password2"></td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td><input type="text" id="email"></td>
                </tr>
                <tr>
                <td><button onclick="getJSONFromDatabase(document.getElementById('name').value)">Go</button></td>
                </tr>
            </table>
        </div>
    </body>
</html>
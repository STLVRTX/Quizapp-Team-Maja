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
                xhr.onload = handleLogin;
                xhr.send(null);
            }

            function handleLogin(){
                if(xhr.responseText != null){
                    console.log(xhr.responseText);
                    let user = JSON.parse(xhr.responseText);
                    if(document.getElementById('password').value == user[0]['PASSWORD']){
                        console.log('Logged In');
                    }
                    else {
                        console.log('Incorrect username or password');
                    }
                }
                else{
                    console.log('Incorrect username or password');
                }
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
                <td><button onclick="getJSONFromDatabase(document.getElementById('name').value)">Go</button></td>
                </tr>
            </table>
        </div>
    </body>
</html>
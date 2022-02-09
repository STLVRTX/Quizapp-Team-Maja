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
                xhr.onload = function(){
                    document.getElementById('ausgabe').innerHTML = xhr.responseText;
                }
                xhr.send(null);
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
            <p id="ausgabe">Test</p>
        </div>
    </body>
</html>
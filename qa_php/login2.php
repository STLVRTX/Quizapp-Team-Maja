<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
        <script>
            var xhr = null;

            function getJSONFromDatabase(x){
                xhr = new XMLHttpRequest();
                xhr.open('GET', 'index.php/accounts/' + x, true);
                /*xhr.onload = function(){
                    document.getElementById('ausgabe').innerHTML = xhr.responseText;
                }*/
                xhr.onload = fillForm;
                xhr.send(null);
            }

            function fillForm() {
                if(xhr.readyState == 4){
                    var myObj = xhr.responseText;
                    myObj = eval("(" + myObj + ")");
                    document.getElementById('usr_name').setAttribute('value', myObj[0]['USERNAME']);
                    document.getElementById('usr_password').setAttribute('value', myObj[0]['PASSWORD']);
                }
            }
        </script>
    </head>
    <body onload="getJSONFromDatabase('Marko')">
        <form method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><Input type="text" id="usr_name" name="usr_name" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><Input type="text" id="usr_password" name="usr_password" value=""></td>
                </tr>
                <tr>
                    <td colspan="2"><Input type="submit" value="Save Data" name="submit" onclick="getJSONFromDatabase('Marko')"></td>
                </tr>
            </table>
        </form>
        <p id="ausgabe">Test</p>
    </body>
</html>
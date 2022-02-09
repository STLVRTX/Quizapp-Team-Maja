<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
        <script>
            var xhr = null;

            function getJSONFromDatabase(x){
                xhr = new XMLHttpRequest();
                alert(x);
                /*if(x != null){
                xhr.open('GET', 'index.php/accounts/' + x, true);
                xhr.onreadystatechange = fillForm;
                xhr.send(null);*/
                }
            }

            function fillForm() {
                if(xhr.readyState == 4){
                    var myObj = xhr.responseText;
                    document.getElementById("output").innerHTML = json_encode(myObj);
                    /*myObj = eval("(" + myObj + ")");
                    document.getElementById('usr_name').setAttribute('value', myObj[0]['USERNAME']);
                    document.getElementById('usr_password').setAttribute('value', myObj[0]['PASSWORD']);*/
                }
            }
        </script>
    </head>
    <body>
        <form method="post" onsubmit="getJSONFromDatabse('usr_name')">
            <table>
                <tr>
                    <td>Username</td>
                    <td><Input type="text" id="usr_name" name="usr_name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><Input type="text" id="usr_password" name="usr_password"></td>
                </tr>
                <tr>
                    <td colspan="2"><Input type="submit" value="Save Data" name="submit"></td>
                </tr>
            </table>
        </form>
        <div id="output"></div>
    </body>
</html>
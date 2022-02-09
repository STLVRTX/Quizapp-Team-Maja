<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
        <script>
            var xhr = null;

            function getJSONFromDatabase(){
                xhr = new XMLHttpRequest();
                xhr.open('GET', 'index.php/accounts/Marko', true);
                var myObj = xhr.responseText;
                myObj = eval("(" + myObj + ")");
                xhr.onreadystatechange = document.getElementById('ausgabe').innerHTML = json_encode(myObj);
                xhr.send(null);
            }
        </script>
    </head>
    <body onload="getJSONFromDatabase()">
    <p id="ausgabe">Test</p>
    </body>
</html>
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
                xhr.onreadystatechange = document.getElementById('ausgabe').innerHTML = JSON.parse(myObj[0]);
                xhr.send(null);
            }
        </script>
    </head>
    <body onload="getJSONFromDatabase()">
    <p id="ausgabe">Test</p>
    </body>
</html>
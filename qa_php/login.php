<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
        <script>
            var xhr = null;

            function getJSONFromDatabase(){
                xhr = new XMLHttpRequest();
                if(x != null){
                xhr.open('GET', 'index.php/accounts/Marko', true);
                xhr.onreadystatechange = document.getElementById('ausgabe').innerHTML = xhr.responseText;
                xhr.send(null);
                }
            }
        </script>
    </head>
    <body onload="getJSONFromDatabase()">
    <p id="ausgabe">Test</p>
    </body>
</html>
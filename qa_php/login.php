<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
        <script>
            var xhr = null;

            function getJSONFromDatabase(){
                xhr = new XMLHttpRequest();
                xhr.open('GET', 'index.php/accounts/Marko', true);
                xhr.onload = function(){
                    document.getElementById('ausgabe').innerHTML = xhr.responseText;
                }
                xhr.send(null);
            }
        </script>
    </head>
    <body>
    <button onclick="getJSONFromDatabase()">Go</button>
    <p id="ausgabe">Test</p>
    </body>
</html>
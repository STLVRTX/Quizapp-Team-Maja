<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
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
        <input type="text" id="name" value="Marko">
    <button onclick="getJSONFromDatabase(document.getElementById('name').value)">Go</button>
    <p id="ausgabe">Test</p>
    </body>
</html>
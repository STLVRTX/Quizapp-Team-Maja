<?php
    if(isset($_POST['submit'])){

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>JSON-Aufgabe</title>
        <script>
            var xhr = null;

            function getJSONFromDatabase(x){
                xhr = new XMLHttpRequest();
                if(x != null){
                xhr.open('GET', 'main.php?id=' + x, true);
                xhr.onreadystatechange = fillForm;
                xhr.send(null);
                }
            }

            function fillForm() {
                if(xhr.readyState == 4){
                    var myObj = xhr.responseText;
                    myObj = eval("(" + myObj + ")");
                    document.getElementById('usr_name').setAttribute('value', myObj[0]['Username']);
                    document.getElementById('usr_password').setAttribute('value', myObj[0]['Password']);
                }
            }
        </script>
    </head>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>ID</td>
                    <td>
                        <select name="usr_id" id="id_select" onchange="getJSONFromDatabase(this.value)">
                            <option value=""></option>
                            <?php
                                    
                            ?>
                    </td>
                </tr>
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
    </body>
</html>
<?php

require('connect2.php');

$pdo->query("UPDATE QA_Player SET LOGGEDIN = 0 WHERE PLAYERID=$_GET['id']");

header('Location: login.php');

?>
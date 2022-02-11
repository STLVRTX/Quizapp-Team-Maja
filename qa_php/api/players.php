<?php
$tableName = 'QA_Player';

$username = (string) $url[5];
$points = (int) $url[6];

$data = DB::query("UPDATE QA_PLAYER SET POINTS=:points WHERE username=:username", array(':points' => $points, ':username' => $username));
?>
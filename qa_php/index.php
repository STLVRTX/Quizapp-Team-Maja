<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');

$method = $_SERVER['REQUEST_METHOD'];

$request_uri = $_SERVER['REQUEST_URI'];

$tables = ['accounts'];

$url = rtrim($request_uri, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

$tableName = (string) $url[4];

if($url[5] != null){
    $username = (int) $url[5];
}
else {
    $username = null;
}

if(in_array($tableName, $tables)){
    include_once './classes/Database.php';
    include_once './api/accounts.php';
}
else {
    echo 'table does not exist';
}
?>
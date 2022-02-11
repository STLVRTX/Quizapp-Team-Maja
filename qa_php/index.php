<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');

$method = $_SERVER['REQUEST_METHOD'];

$request_uri = $_SERVER['REQUEST_URI'];

$tables = ['accounts', 'questions'];

$url = rtrim($request_uri, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

$tableName = (string) $url[4];
echo $tableName;

#if(in_array($tableName, $tables)){
#   # if($tableName = 'accounts'){
#        include_once './classes/Database.php';
#        include_once './api/accounts.php';
#    }
#    elseif($tableName = 'questions'){
#        include_once './classes/Database.php';
#        include_once './api/questions.php';
#    }
#}
#else {
#    echo 'table does not exist';
#}
?>
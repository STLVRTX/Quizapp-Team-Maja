<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');

$method = $_SERVER['REQUEST_METHOD'];

$request_uri = $_SERVER['REQUEST_URI'];

$url = rtrim($request_uri, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
echo $url;
?>
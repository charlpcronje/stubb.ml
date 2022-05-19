<?php
require_once './vendor/autoload.php';

$data = json_decode(file_get_contents('../data/urls.json'));
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$log = (object)[
    'date'    => date('Y-m-d H:i:s'),
    'env'     => $_ENV,
    'req'     => include './app/detectRequest.php',
    'headers' => include './app/detectHeaders.php',
    'device'  => include './app/detectDevice.php',
    'url'     => include './app/detectUrl.php',
    'title'   => include './app/detectTitle.php'
];

file_put_contents('../data/clicks.json',json_encode($log,JSON_PRETTY_PRINT),FILE_APPEND);
header('Location: '.$data->{$log->headers['Host']});

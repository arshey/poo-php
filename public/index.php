<?php
use Router\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);


$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/about', 'App\Controllers\BlogController@about');
$router->get('/posts/:id', 'App\Controllers\BlogController@index');

$router->run();
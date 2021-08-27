<?php

require '../Core/Router.php';

$router = new Router();

// echo get_class($router);

// add the routes

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('/posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('/posts/new', ['controller' => 'Posts', 'action' => 'new']);

// display routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';


// match the requested route
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo "<pre>";
    echo "Hello hunter";
    var_dump($router->getParams());
    echo "</pre>";
} else {
    echo "No route found for URL ".$url." ";
}























<?php

/**
 *  Front Controller
 *  PHP 7.2.0 (cli)
 *  17/01/2018
 *  Sheraz Ali (Developer) https://github.com/sherazali123
 */

// Routing
require "../Core/Router.php";
$router = new Router();

$router->add('',                    ['controller' => 'Home', 'action' => 'index']);
$router->add('auth',                ['controller' => 'Auth', 'action' => 'index']);
$router->add('auth/login',          ['controller' => 'Auth', 'action' => 'login']);
$router->add('auth/logout',         ['controller' => 'Auth', 'action' => 'login']);
$router->add('auth/register',       ['controller' => 'Auth', 'action' => 'register']);

$router->add('admin/dashboard',     ['controller' => 'Admin\Dashboard', 'action' => 'index']);

// match the request route
$route = $_SERVER['QUERY_STRING'];
error_log("Route: ".$route, 0);
if($router->match($route)){
    var_dump($router->getParams());
} else {
    die("Hey, I'm not real!");
}
die;


?>
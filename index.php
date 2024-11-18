<?php

require_once 'vendor/autoload.php';

use \Quantr\PhpIsDead\Router;

$route=new Router();
$route->add('/index', 'peter');
echo $router->toString();

<?php

require_once 'vendor/autoload.php';

use \Quantr\PhpIsDead\Router;

$router=new Router();
$router->add('/index', 'peter');
echo $router->toString();

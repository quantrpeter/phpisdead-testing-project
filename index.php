<?php

require_once 'vendor/autoload.php';

use \Quantr\PhpIsDead\PhpIsDead;

// $router=new Router();
// $router->add('/index', 'peter');
// echo $router->toString();

$phpIsDead = new PhpIsDead();
$phpIsDead->start();

$phpIsDead->router->add('/index', 'peter');
echo $phpIsDead->router->toString();

echo "<br>" . $_SERVER['REQUEST_URI'];

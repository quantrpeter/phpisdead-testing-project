<?php

require_once 'vendor/autoload.php';

use \Quantr\PhpIsDead\PhpIsDead;

$phpIsDead = new PhpIsDead();
$phpIsDead->start();
$phpIsDead->router->add('/index', 'peter');
echo $phpIsDead->router->toString();

echo "<br>" . $_SERVER['REQUEST_URI'];

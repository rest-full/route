<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/pathServer.php';

use Restfull\Route\Route;

$route = new Route();
$route->get('/main/index','Main.index','main+index');
echo $route->uri('post');
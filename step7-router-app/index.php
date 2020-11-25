<?php

use src\core\Router;
use src\controller\UserController;

define('ROOT', __dir__);
define('BASE_URI', '/step7-router-app');

define('VIEW', ROOT . '/templates');

print_pre($_SERVER);

include_once(ROOT . '/src/core/lib.php');

$router = new Router(BASE_URI);

$router->get('/', function ($param) {
    include_once(VIEW . '/main.php');
});

new UserController($router);

$router->run();


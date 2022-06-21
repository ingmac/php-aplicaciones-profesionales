<?php
require '../vendor/autoload.php';

$router = new AltoRouter();
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$router->map('GET', '/', 'FrontController#home', 'home');

$match = $router->match();

if ($match===false) {
    open404Error();
} else {
    callController($match);
}

function open404Error() {
    header($_SERVER["SERVER_PROTOCOL"]. '404 Not Found');
    $objectFrontController = new App\Controllers\FrontController;
    $objectFrontController->error404();
}

function callController($match) {
    list($controller, $action) = explode('#', $match['target']);
    $controller = 'App\\Controllers\\' . $controller;
    if (method_exists($controller, $action)) {
        $objectFrontController = new $controller;
        call_user_func_array(array($objectFrontController, $action), $match['params']);
    } else {
        open404Error();
    }
}
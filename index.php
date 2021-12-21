<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/', function() {
    require 'views/home.php';
});

$router->get('/about', function() {
    require 'views/about.php';
});

$router->run();
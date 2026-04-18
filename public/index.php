<?php

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;
$config =[
    'db' => [
        'dsn' => $_ENV['DB_DSN'] ?? '',
        'user' => $_ENV['DB_USER'] ?? '',
        'password' => $_ENV['DB_PASSWORD'] ?? '',
    ]
];
$app = new Application(dirname(__DIR__), $config);
// $app->router->get('/', 'home'); // Assuming you have a view named 'home.php' in your views directory
$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/about', function() {
    return "This is the about page.";
});


// $app->router->get('/contact', 'contact'); // Assuming you have a view named 'contact.php' in your views directory
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->run();

// echo "Hello, World! This is a simple PHP application ";


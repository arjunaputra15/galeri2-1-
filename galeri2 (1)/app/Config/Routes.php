<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'AuthController::index');
$routes->get('/detail', 'AuthController::detail');

// routes.php

$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');


// Route untuk redirect ke halaman beranda setelah login berhasil
$routes->get('/', 'Home::index');
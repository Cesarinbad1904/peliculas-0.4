<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');


// Rutas agrupadas en dashboard
$routes->group('dashboard', ['namespace'=>'\App\Controllers\Dashboard'], function ($routes) {
    $routes->presenter('pelicula');
    
    $routes->presenter('categoria');
});
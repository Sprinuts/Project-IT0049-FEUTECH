<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

// index route (redirection for login)
$routes->get('/', 'Index::index');
$routes->get('index', 'Index::index');

//users route
$routes->get('users', 'Users::index');

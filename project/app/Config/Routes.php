<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

// default routings
$routes->get('/', 'Index::index');
$routes->get('index', 'Index::index');
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
$routes->get('users', 'Users::index'); //list of users
$routes->get('users/add', 'Users::add'); //add new user direct
$routes->post('users/add', 'Users::add'); //add new user by post
$routes->get('users/activate/(:any)', 'Users::activate/$1'); //activate user
$routes->get('users/delete/(:num)', 'Users::delete/$1'); //delete user


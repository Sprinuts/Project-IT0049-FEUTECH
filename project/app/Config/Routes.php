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
$routes->get('users/edit/(:num)', 'Users::edit/$1'); //edit user
$routes->post('users/edit/(:num)', 'Users::edit/$1'); //edit user by post
$routes->get('users/view/(:num)', 'Users::view/$1'); //view user

//login route
$routes->get('login', 'Index::login'); //login page
$routes->post('login', 'Index::login'); //login page by post

//reset password route
$routes->get('resetpassword', 'Index::resetpassword'); //reset password page
$routes->post('resetpassword', 'Index::resetpassword'); //reset password page by post
$routes->get('reset/(:any)', 'Index::reset/$1'); //reset password page by post
$routes->post('reset/(:any)', 'Index::reset/$1'); //reset password page by post

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

// index route (redirection for login)
$routes->get('/', 'Index::index');
$routes->get('(?i)index', 'Index::index');

//welcome route
$routes->get('(?i)welcomeitso', 'Index::welcomeitso'); //welcome page for ITSO

//users route
$routes->get('(?i)users', 'Users::index'); //list of users
$routes->get('(?i)users/add', 'Users::add'); //add new user direct
$routes->post('(?i)users/add', 'Users::add'); //add new user by post
$routes->get('(?i)users/activate/(:any)', 'Users::activate/$1'); //activate user
$routes->get('(?i)users/delete/(:num)', 'Users::delete/$1'); //delete user
$routes->get('(?i)users/edit/(:num)', 'Users::edit/$1'); //edit user
$routes->post('(?i)users/edit/(:num)', 'Users::edit/$1'); //edit user by post
$routes->get('(?i)users/view/(:num)', 'Users::view/$1'); //view user

//login route
$routes->get('(?i)login', 'Index::login'); //login page
$routes->post('(?i)login', 'Index::login'); //login page by post
$routes->get('(?i)logout', 'Index::logout');

//reset password route
$routes->get('(?i)resetpassword', 'Index::resetpassword'); //reset password page
$routes->post('(?i)resetpassword', 'Index::resetpassword'); //reset password page by post
$routes->get('(?i)reset/(:any)', 'Index::reset/$1'); //reset password page by post
$routes->post('(?i)reset/(:any)', 'Index::reset/$1'); //reset password page by post

//equipment route
$routes->get('(?i)equipments', 'Equipments::index'); //list of equipment 
$routes->get('(?i)equipments/add', 'Equipments::add'); //add new equipment direct
$routes->post('(?i)equipments/add', 'Equipments::add'); //add new equipment by post
$routes->get('(?i)equipments/delete/(:num)', 'Equipments::delete/$1'); //delete equipment
$routes->get('(?i)equipments/edit/(:num)', 'Equipments::edit/$1'); //edit equipment
$routes->post('(?i)equipments/edit/(:num)', 'Equipments::edit/$1'); //edit equipment by post
$routes->get('(?i)equipments/view/(:num)', 'Equipments::view/$1'); //view equipment
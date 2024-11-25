<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

// default routings
$routes->get('/', 'Operations::index');
$routes->get("(?i)operations", 'Operations::index');
$routes->get("(?i)Operations/index", "Operations::index");
$routes->get("(?i)index", "Operations::index");

// displayInfo routings
$routes->get("(?i)operations/displayInfo", "Operations::displayInfo");
$routes->get("(?i)operations/displayInfo/(:num)", "Operations::displayInfo/$1");
$routes->get("(?i)operations/displayInfo/(:num)/(:segment)", "Operations::displayInfo/$1/$2");
$routes->get("(?i)operations/displayInfo/(:num)/(:segment)/(:segment)", "Operations::displayInfo/$1/$2/$3");
$routes->get("(?i)operations/displayInfo/(:num)/(:segment)/(:segment)/(:segment)", "Operations::displayInfo/$1/$2/$3/$4");
$routes->get("(?i)Operations/displayInfo/(:num)/(:segment)/(:segment)/(:segment)/(:segment)", "Operations::displayInfo/$1/$2/$3/$4/$5");

// compute routings
$routes->get("(?i)operations/compute", "Operations::compute");
$routes->get("(?i)operations/compute/(:num)", "Operations::compute/$1");
$routes->get("(?i)operations/compute/(:num)/(:num)", "Operations::compute/$1/$2");
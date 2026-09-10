<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages/about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
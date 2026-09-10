<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Landing & About Pages
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');

// Customer Accounts Page
$routes->get('customers', 'Customers::index');

// User Accounts Page
$routes->get('users', 'Users::index');
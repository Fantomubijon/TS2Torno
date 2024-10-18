<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/','Index::index');
$routes->get('index','Index::index');
$routes->get('index/index','Index::index');
$routes->get('home','Index::index');


// Login and Registration Process
$routes->get('login', 'Index::login');
$routes->post('login', 'Index::login');
$routes->get('registration', 'Index::add');
$routes->post('registration', 'Index::add');

// CRUD Products
$routes->get('products', 'Products::index');
$routes->get('products/add', 'Products::add');
$routes->post('products/add', 'Products::add');
$routes->get('products/view/(:num)', 'Products::view/$1');
$routes->get('products/edit/(:num)', 'Products::edit/$1');
$routes->post('products/edit/(:num)', 'Products::edit/$1');
$routes->get('products/delete/(:num)', 'Products::delete/$1');
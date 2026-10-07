<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/services', 'Services::index');
$routes->match(['get', 'post'], '/contact', 'Contact::index');

// Register
$routes->get('/register', 'Register::index');
$routes->post('/register', 'Register::create');

// Login session
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::authenticate');
$routes->get('/logout', 'Login::logout');

// Dashboard and customer account CRUD
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/account/create', 'Home::createAccount');
$routes->post('/account/store', 'Home::storeAccount');
$routes->get('/account/(:num)', 'Home::viewAccount/$1');
$routes->get('/account/edit/(:num)', 'Home::editAccount/$1');
$routes->post('/account/update/(:num)', 'Home::updateAccount/$1');
$routes->post('/account/delete/(:num)', 'Home::deleteAccount/$1');
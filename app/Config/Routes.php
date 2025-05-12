<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');
$routes->get('/userdata', 'Home::user_data');
$routes->get('/insert', 'Home::insert');
$routes->get('/update', 'Home::update');
$routes->get('/delete', 'Home::delete');



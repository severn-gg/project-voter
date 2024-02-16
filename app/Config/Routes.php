<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/test', 'Home::test');
$routes->get('/admin', 'Admin::index');
$routes->post('/admin/insert_candidate', 'Admin::insert_candidate');
$routes->get('/voters', 'Voters::index');

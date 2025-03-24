<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('karyawan', 'KaryawanController::index');
$routes->get('karyawan/create', 'KaryawanController::create');
$routes->post('karyawan/store', 'KaryawanController::store');
$routes->get('karyawan/edit/(:num)', 'KaryawanController::edit/$1');
$routes->post('karyawan/update/(:num)', 'KaryawanController::update/$1');
$routes->get('karyawan/delete/(:num)', 'KaryawanController::delete/$1');
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/members', 'Member::index');
$routes->get('/member/profile', 'Home::memberProfile');

$routes->get('/import', 'CsvImportController::index');
$routes->post('csv-import', 'CsvImportController::import');

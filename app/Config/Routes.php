<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setAutoRoute(false);

$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/events', 'EventController::index');
$routes->get('/gallery', 'GalleryController::index');
$routes->get('/member/profile/(:segment)', 'Member::memberProfile/$1');
$routes->get('/members/all', 'Member::index');
$routes->get('/members/dice-and-working-committee', 'Member::working_committee');
$routes->get('/members/single/(:segment)', 'Member::single/$1');

$routes->get('/import', 'CsvImportController::index');
$routes->post('csv-import', 'CsvImportController::import');

$routes->set404Override(function () {
    echo view('Pages/404', ['title' => '404 Error']);
});

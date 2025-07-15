<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/form', 'FormController::form');
$routes->post('/kirim', 'FormController::kirim');
$routes->get('/latihan', 'HelloWorld::index');
$routes->get('/profil', 'profil::index'); 
$routes->get('/profilku', 'PageController::profilku');
$routes->get('/skill', 'PageController::skill');


$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->post('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');








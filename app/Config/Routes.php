<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('EjController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'InicioController::index');
$routes->get('/iniciocontroller', 'InicioController::index');
$routes->get('/aboutuscontroller', 'AboutUsController::index');
$routes->get('/investigadorescontroller', 'InvestigadoresController::index');
$routes->post('/investigadorescontroller', 'InvestigadoresController::index');
$routes->get('/investigadorescontroller/add', 'InvestigadoresController::add');
$routes->post('/investigadorescontroller/add', 'InvestigadoresController::add');
$routes->get('/investigadorescontroller/save', 'InvestigadoresController::save');
$routes->post('/investigadorescontroller/save', 'InvestigadoresController::save');
$routes->get('/investigadorescontroller/upt', 'InvestigadoresController::upt');
$routes->post('/investigadorescontroller/upt', 'InvestigadoresController::upt');
$routes->get('/investigadorescontroller/del', 'InvestigadoresController::del');
$routes->post('/investigadorescontroller/del', 'InvestigadoresController::del');
$routes->get('/investigadorescontroller/edit/(:any)', 'InvestigadoresController::edit/$1');
$routes->post('/investigadorescontroller/edit/(:any)', 'InvestigadoresController::edit/$1');
$routes->get('/investigadorescontroller/list', 'InvestigadoresController::list');
$routes->post('/investigadorescontroller/list', 'InvestigadoresController::list');
$routes->get('/equiposcontroller', 'EquiposController::index');
$routes->post('/equiposcontroller', 'EquiposController::index');
$routes->get('/equiposcontroller/add', 'EquiposController::add');
$routes->post('/equiposcontroller/add', 'EquiposController::add');
$routes->get('/equiposcontroller/upt', 'EquiposController::upt');
$routes->post('/equiposcontroller/upt', 'EquiposController::upt');
$routes->get('/equiposcontroller/edit/(:any)', 'EquiposController::edit/$1');
$routes->post('/equiposcontroller/edit/(:any)', 'EquiposController::edit/$1');
$routes->get('/equiposcontroller/save', 'EquiposController::save');
$routes->post('/equiposcontroller/save', 'EquiposController::save');
$routes->get('/equiposcontroller/list', 'EquiposController::list');
$routes->post('/equiposcontroller/list', 'EquiposController::list');
$routes->get('/facultadcontroller', 'FacultadController::index');
$routes->post('/facultadcontroller', 'FacultadController::index');
$routes->get('/facultadcontroller/add', 'FacultadController::add');
$routes->post('/facultadcontroller/add', 'FacultadController::add');
$routes->get('/facultadcontroller/edit/(:any)', 'FacultadController::edit/$1');
$routes->post('/facultadcontroller/edit/(:any)', 'FacultadController::edit/$1');
$routes->get('/facultadcontroller/upt', 'FacultadController::upt');
$routes->post('/facultadcontroller/upt', 'FacultadController::upt');
$routes->get('/facultadcontroller/save', 'FacultadController::save');
$routes->post('/facultadcontroller/save', 'FacultadController::save');
$routes->get('/facultadcontroller/list', 'FacultadController::list');
$routes->post('/facultadcontroller/list', 'FacultadController::list');
$routes->get('/reservascontroller', 'ReservasController::index');
$routes->post('/reservascontroller', 'ReservasController::index');
$routes->get('/reservascontroller/add', 'ReservasController::add');
$routes->post('/reservascontroller/add', 'ReservasController::add');
$routes->get('/reservascontroller/upt', 'ReservasController::upt');
$routes->post('/reservascontroller/upt', 'ReservasController::upt');
$routes->get('/reservascontroller/edit/(:any)', 'ReservasController::edit/$1');
$routes->post('/reservascontroller/edit/(:any)', 'ReservasController::edit/$1');
$routes->get('/reservascontroller/save', 'ReservasController::save');
$routes->post('/reservascontroller/save', 'ReservasController::save');
$routes->get('/reservascontroller/list', 'ReservasController::list');
$routes->post('/reservascontroller/list', 'ReservasController::list');
$routes->get('/equiposcontroller/del', 'EquiposController::del');
$routes->post('/equiposcontroller/del', 'EquiposController::del');
$routes->get('/facultadcontroller/del', 'FacultadController::del');
$routes->post('/facultadcontroller/del', 'FacultadController::del');
$routes->get('/reservascontroller/del', 'ReservasController::del');
$routes->post('/reservascontroller/del', 'ReservasController::del');
$routes->get('/investigadorescontroller/del', 'InvestigadoresController::del');
$routes->post('/investigadorescontroller/del','InvestigadoresController::del');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

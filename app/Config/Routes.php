<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ruta2', 'Home::Mruta2');

/*$routes->get('/(:any)
(:segment)
(:num)
(:alpanum)
(:hash)
', 'CSuma::MSumar');*/

// http://localhost/ProyectoDWf2/rutaurl/3
$routes->get('/rutaurl/3', 'CSuma::MSumar');
// http://localhost/ProyectoDWf2/rutaurl/(:num)
$routes->get('/rutaurl/(:any)', 
'CSuma::MSumarVariable/$1');

$routes->post('/resultado', 'CSuma::MPostSuma');


$routes->get('/testconexion', 'CBdd::testconexion');
$routes->get('/insertusuario', 'CBdd::MetodoVerFormularioUsuario');
// Esta es la ruta post para crear
$routes->post('/UsuarioCreado', 'CBdd::MetodoInsertarUsuario');










$routes->get('/Select', 'ControladorSelect::SelectUsuarioFC');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ruta2', 'Home::Mruta2');

// Rutas para la calculadora
$routes->get('/rutaurl/3', 'CSuma::MSumar');
$routes->get('/rutaurl/(:any)', 'CSuma::MSumarVariable/$1');
$routes->post('/resultado', 'CSuma::MPostSuma');

// Rutas para la gestión de usuarios
$routes->get('/testconexion', 'CBdd::testconexion');
$routes->get('/insertusuario', 'CBdd::MetodoVerFormularioUsuario');
$routes->post('/UsuarioCreado', 'CBdd::MetodoInsertarUsuario');

// Rutas para mostrar resultados
$routes->get('VResultado', 'CBdd::VResultado');
$routes->post('CBdd/MPostSuma', 'CBdd::MPostSuma');
$routes->get('CBdd/VResultado', 'CBdd::VResultado');
$routes->post('CBdd/guardarResultado', 'CBdd::guardarResultado');

// Ruta para seleccionar usuarios
$routes->get('/Select', 'ControladorSelect::SelectUsuarioFC');
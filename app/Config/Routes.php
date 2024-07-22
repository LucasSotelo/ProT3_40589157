<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('registro','Home::registro');
$routes->get('principal','Home::index');
$routes->get('quienes_somos','Home::quienes_somos');
/* rutas del Registro de Usuarios */
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');

/* rutas del login */
$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

// Rutas de la gestión de usuarios
$routes->get('/usuarios', 'UsuarioController::listar', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/usuarios/create', 'UsuarioController::create', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/usuarios/edit/(:num)', 'UsuarioController::edit/$1', ['filter' => 'auth']);
$routes->get('/usuarios/delete/(:num)', 'UsuarioController::delete/$1', ['filter' => 'auth']);
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dsg', 'Home::dsg');
$routes->get('precio', 'Home::precio');

$routes->post('enviar', 'EmailController::enviar');
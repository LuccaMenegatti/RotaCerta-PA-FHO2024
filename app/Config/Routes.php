<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Home');

$routes->get('/', 'Home::index');
$routes->get('aboutUs', 'AboutUsController::index');
$routes->get('map', 'MapController::index');
$routes->post('map', 'MapController::calcularRota');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->post('/saveMusic', 'MainController::addMusic');
$routes->get('/modals', 'MainController::getPlaylist');
$routes->post('/edit', 'MainController::edit');
$routes->get('/search', 'MainController::index');


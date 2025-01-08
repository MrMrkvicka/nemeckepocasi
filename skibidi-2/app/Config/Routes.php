<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get("index1", "Main::index1");
$routes->get("tabulka", "Main::tabulka");
$routes->get('zeme/(:num)', 'Main::zeme/$1');
$routes->get('stanice/(:num)', 'Main::stanice/$1');
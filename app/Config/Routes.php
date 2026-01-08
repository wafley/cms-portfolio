<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PagesController::home');
$routes->get('/about', 'PagesController::about');
$routes->get('/education', 'PagesController::education');
$routes->get('/activities', 'PagesController::activities');

// Guest Routes
$routes->group('', ['filter' => 'guest'], function ($routes) {
    // Login Routes
    $routes->get('/login', 'Auth\LoginController::index');
    $routes->post('/login', 'Auth\LoginController::process');
});

// Authenticated Routes
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    // Dashboard Route
    $routes->get('dashboard', 'Admin\DashboardController::index');

    // Icons Dokumentation Route
    $routes->get('icons', 'Admin\IconsController::index');

    // Biodata Routes
    $routes->group('biodata', function ($routes) {
        $routes->get('/', 'Admin\ProfileController::index');
        $routes->get('(:num)/edit', 'Admin\ProfileController::edit/$1');
        $routes->post('update/(:num)', 'Admin\ProfileController::update/$1');
    });

    // Biodata Routes
    $routes->group('educations', function ($routes) {
        $routes->get('/', 'Admin\EducationController::index');
        $routes->get('create', 'Admin\EducationController::create');
        $routes->post('store', 'Admin\EducationController::store');
        $routes->get('(:num)/edit', 'Admin\EducationController::edit/$1');
        $routes->post('update/(:num)', 'Admin\EducationController::update/$1');
        $routes->post('delete/(:num)', 'Admin\EducationController::delete/$1');
    });

    // Biodata Routes
    $routes->group('activities', function ($routes) {
        $routes->get('/', 'Admin\ActivityController::index');
        $routes->get('create', 'Admin\ActivityController::create');
        $routes->post('store', 'Admin\ActivityController::store');
        $routes->get('(:num)/edit', 'Admin\ActivityController::edit/$1');
        $routes->post('update/(:num)', 'Admin\ActivityController::update/$1');
        $routes->post('delete/(:num)', 'Admin\ActivityController::delete/$1');
    });

    // Biodata Routes
    $routes->group('socials', function ($routes) {
        $routes->get('/', 'Admin\SocialController::index');
        $routes->get('create', 'Admin\SocialController::create');
        $routes->post('store', 'Admin\SocialController::store');
        $routes->get('(:num)/edit', 'Admin\SocialController::edit/$1');
        $routes->post('update/(:num)', 'Admin\SocialController::update/$1');
        $routes->post('delete/(:num)', 'Admin\SocialController::delete/$1');
    });

    // Logout Route
    $routes->post('logout', 'Auth\LoginController::logout');
});

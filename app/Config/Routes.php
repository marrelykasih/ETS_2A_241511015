<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login & Logout
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

// tambahan biar form <form action="/auth/login"> bisa jalan
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::login');

$routes->get('/logout', 'Auth::logout');

// Admin dashboard
$routes->get('/admin', 'Admin::index');

// Anggota (Public)
$routes->get('/', 'Anggota::index');

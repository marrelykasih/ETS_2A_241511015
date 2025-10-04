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

// Anggota (CRUD)
$routes->get('/admin/anggota', 'AnggotaAdmin::index');
$routes->get('/admin/anggota/create', 'AnggotaAdmin::create');
$routes->post('/admin/anggota/store', 'AnggotaAdmin::store');
$routes->get('/admin/anggota/edit/(:num)', 'AnggotaAdmin::edit/$1');
$routes->post('/admin/anggota/update/(:num)', 'AnggotaAdmin::update/$1');
$routes->get('/admin/anggota/delete/(:num)', 'AnggotaAdmin::delete/$1');

// Komponen Gaji (CRUD)
$routes->get('/admin/komponen', 'KomponenAdmin::index');
$routes->get('/admin/komponen/create', 'KomponenAdmin::create');
$routes->post('/admin/komponen/store', 'KomponenAdmin::store');
$routes->get('/admin/komponen/edit/(:num)', 'KomponenAdmin::edit/$1');
$routes->post('/admin/komponen/update/(:num)', 'KomponenAdmin::update/$1');
$routes->get('/admin/komponen/delete/(:num)', 'KomponenAdmin::delete/$1');

// Penggajian (CRUD)
$routes->get('/admin/penggajian', 'PenggajianAdmin::index');
$routes->get('/admin/penggajian/create', 'PenggajianAdmin::create');
$routes->post('/admin/penggajian/store', 'PenggajianAdmin::store');
$routes->get('/admin/penggajian/detail/(:num)', 'PenggajianAdmin::detail/$1');
$routes->get('/admin/penggajian/edit/(:num)', 'PenggajianAdmin::edit/$1');
$routes->post('/admin/penggajian/update/(:num)', 'PenggajianAdmin::update/$1');
$routes->get('/admin/penggajian/delete/(:num)', 'PenggajianAdmin::delete/$1');

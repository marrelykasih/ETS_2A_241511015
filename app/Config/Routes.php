<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default halaman root langsung ke login
$routes->get('/', 'Auth::login');

// AUTH
$routes->get('/login', 'Auth::login');       // Tampilkan form login
$routes->post('/login', 'Auth::check');      // Proses login
$routes->get('/logout', 'Auth::logout');     // Logout

// MAHASISWA CRUD
$routes->get('/mahasiswa', 'Mahasiswa::index');                    // Tampil list
$routes->get('/mahasiswa/create', 'Mahasiswa::create');            // Form tambah
$routes->post('/mahasiswa/store', 'Mahasiswa::store');             // Simpan data
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');      // Form edit
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1'); // Update data
$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');  // Hapus data

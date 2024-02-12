<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::admin');
$routes->get('/kasir', 'Home::kasir');

//produk
$routes->get('/produk','Produk::index');
$routes->get('/produk/tampil','Produk::ambilSemua');
$routes->post('/produk/simpan','Produk::simpan');
$routes->get('/produk/edit','Produk::edit');
$routes->post('/produk/update','Produk::update');
$routes->post('/produk/delete','Produk::delete');

//register
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

//user 
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
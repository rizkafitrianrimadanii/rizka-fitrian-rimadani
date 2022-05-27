<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// membuka halaman login untuk awal atau saat gagal login
$routes->get('/login', 'Admin::index');
// dijalankan saat menekan tombol login
$routes->post('/login', 'Admin::login');
// membuat route untuk user yang sukses login
$routes->get('/dashboard', 'Dashboardpengguna::index',['filter'=>'otentifikasi']);


######### ROUTE UNTUK MENGELOLA FASILITAS HOTEL #############

// menjalankan tampilan fasilitas hotel
$routes->get('/tampil-fasilitas-hotel','Fasilitashotel::index',['filter'=>'otentifikasi']);
// menjalankan tambah
$routes->get('/tambah-fasilitas-hotel','Fasilitashotel::tambah',['filter'=>'otentifikasi']);
$routes->post('/tambah-fasilitas-hotel','Fasilitashotel::tambah',['filter'=>'otentifikasi']);
// untuk menjalankan hapus di fasilitas hotel
$routes->get('/hapus-fasilitas-hotel/(:num)','Fasilitashotel::hapus/$1',['filter'=>'otentifikasi']);
// untuk menjalankan edit di fasilitas hotel
$routes->get('/edit-fasilitas-hotel/(:num)','Fasilitashotel::edit/$1',['filter'=>'otentifikasi']);
$routes->post('/edit-fasilitas-hotel','Fasilitashotel::edit',['filter'=>'otentifikasi']);


######### ROUTE UNTUK MENGELOLA FASILITAS KAMAR #############

// menjalankan tampilan fasilitas kamar
$routes->get('/tampil-fasilitas-kamar','Fasilitaskamar::index',['filter'=>'otentifikasi']);
// menjalankan tambah
$routes->get('/tambah-fasilitas-kamar','Fasilitaskamar::tambah',['filter'=>'otentifikasi']);
$routes->post('/tambah-fasilitas-kamar','Fasilitaskamar::tambah',['filter'=>'otentifikasi']);
// Menjalankan hapus di fasilitas kamar
$routes->get('/hapus-fasilitas-kamar/(:num)','Fasilitaskamar::hapus/$1',['filter'=>'otentifikasi']);
// Menajalankan edit difasilitas kamar
$routes->get('/edit-fasilitas-kamar/(:num)','Fasilitaskamar::edit/$1',['filter'=>'otentifikasi']);
$routes->post('/edit-fasilitas-kamar','Fasilitaskamar::edit',['filter'=>'otentifikasi']);



######################## ROUTE UNTUK MENGELOLA KAMAR ###############################

$routes->get('/tampil-kamar', 'Kamar::index',['filter'=>'otentifikasi']);

$routes->get('/tambah-kamar', 'Kamar::tambah',['filter'=>'otentifikasi']);

$routes->post('/tambah-kamar','Kamar::tambah',['filter'=>'otentifikasi']);

$routes->get('/hapus-kamar/(:num)','Kamar::hapus/$1',['filter'=>'otentifikasi']);

$routes->get('/edit-kamar/(:num)','Kamar::edit/$1',['filter'=>'otentifikasi']);

$routes->post('/edit-kamar','Kamar::edit',['filter'=>'otentifikasi']);



##################### RUTE untuk mengelola  Reservasi #############################

$routes->get('/tampil-reservasi','Reservasi::index',['filter'=>'otentifikasi']);

$routes->post('/tampil-reservasi','Reservasi::index',['filter'=>'otentifikasi']);

$routes->get('/set-cek-in/(:num)','Reservasi::setStatusIn/$1',['filter'=>'otentifikasi']);

$routes->get('/set-cek-out/(:num)','Reservasi::setStatusOut/$1',['filter'=>'otentifikasi']);

$routes->get('/cek-kamar','Reservasi::cekKamar',['filter'=>'otentifikasi']);


############### RUTE HALAMAN DEPAN #####################

$routes->get('/', 'Home::index');

$routes->get('/fasilitashotel','Fasilitashotel::tampilDiHome');

$routes->get('/fasilitaskamar','Fasilitaskamar::tampilDiHome');

$routes->get('/order/(:num)','Reservasi::order/$1');

$routes->get('/cetak-invoice/(:num)','Reservasi::invoice/$1');

$routes->post('/order','Reservasi::order');

$routes->post('/hasil-cari','Reservasi::hasilCari');

###################### RUTE LOGOUT  ############################
// membuat logout
$routes->get('/logout', 'Admin::index');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Perpus/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/perpus'] = 'Awal/index';
// MILIK BUKU
$route['api/perpus/tambahBuku'] = 'Awal/tambah_buku';
$route['api/perpus/hapusBuku/(:any)'] = 'Awal/hapus_buku/$1';
$route['api/perpus/spesifikBuku/(:any)'] = 'Awal/buku_spesifik/$1';
$route['api/perpus/updateBuku/(:any)'] = 'Awal/update_buku/$1';
// MILIK PENERBIT
$route['api/perpus/tambahPenerbit'] = 'Awal/tambah_penerbit';
$route['api/perpus/hapusPenerbit/(:any)'] = 'Awal/hapus_penerbit/$1';
$route['api/perpus/spesifikPenerbit/(:any)'] = 'Awal/penerbit_spesifik/$1';
$route['api/perpus/updatePenerbit/(:any)'] = 'Awal/update_penerbit/$1';

$route['api/akun/tambahAkun'] = 'Akun/tambah_akun';
$route['api/akun/masukAkun'] = 'Akun/masuk_akun';

$route['perpus'] = 'Perpus/halaman';
$route['login'] = 'Perpus/login';
$route['register'] = 'Perpus/register';
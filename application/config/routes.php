<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// route admin dashboard
$route['admin'] = 'auth';
$route['admin/login'] = 'auth/login';
$route['admin/logout'] = 'auth/logout';
$route['admin/beranda'] = 'admin/beranda';
$route['admin/prestasi'] = 'admin/prestasi';
$route['admin/prestasi/add'] = 'admin/prestasi/add';

$route['news'] = 'news'; 

//$route['admin/prestasi/(:any)'] = 'prestasi/view/$1';
$route['admin/prestasi/edit/(:any)'] = 'admin/prestasi/edit/$1'; // dia sebenarnya route ke folder admin baru masuk ke controller class prestasi method edit admin/prestasi/edit/parameter
$route['admin/prestasi/delete/(:any)'] = 'admin/prestasi/delete/$1';

$route['(:any)'] = 'admin/beranda/$1';

//$route['admin'] = 'admin';
$route['default_controller'] = 'welcome';
//route halaman depan
$route['prestasi'] = 'prestasi_control';
$route['(:any)'] = 'welcome/page/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

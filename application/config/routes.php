<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/beranda';
$route['admin/prestasi'] = 'admin/prestasi';
$route['admin/prestasi/add'] = 'admin/prestasi/add';
$route['admin/prestasi/edit/(:any)'] = 'prestasi/edit/$1';
$route['admin/prestasi/(:any)'] = 'prestasi/view/$1';
$route['default_controller'] = 'welcome';

//$route['admin'] = 'admin';
// $route['(:any)'] = 'admin/beranda/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['prestasi'] = 'prestasi';
$route['prestasi/add'] = 'prestasi/add';
$route['prestasi/edit/(:any)'] = 'prestasi/edit/$1';
$route['prestasi/(:any)'] = 'prestasi/view/$1';

$route['default_controller'] = 'admin/beranda';
//$route['admin'] = 'admin';
$route['(:any)'] = 'admin/beranda/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

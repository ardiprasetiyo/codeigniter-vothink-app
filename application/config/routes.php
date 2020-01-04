<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth_Controller/login_peserta';
$route['tps/login/peserta'] = 'Auth_Controller/login_peserta';
$route['login/admin'] = 'Auth_Controller/login_admin';
$route['admin'] = 'Admin_Controller/home';
$route['admin/live/count'] = 'Admin_Controller/live_count';
$route['admin/logout'] = 'Auth_Controller/logout_admin';
$route['panitia/absen'] = 'Panitia_Controller/absen_peserta';
$route['panitia/absen/search'] = 'Panitia_Controller/search_peserta';
// $route['admin/peserta'] = 'Admin_Controller/peserta_lookup';
// $route['admin/peserta/pages/(:num)'] = 'Admin_Controller/peserta_lookup/$1';
$route['login/admin/verifikasi'] = 'Auth_Controller/do_login_admin';
$route['tps/login/verifikasi/peserta'] = 'Auth_Controller/do_login_peserta';
$route['tps/coblos'] = 'TPS_Controller/coblos';
$route['tps/coblos/kandidat/(:num)'] = 'TPS_Controller/do_coblos/$1';
$route['tps'] = 'TPS_Controller/coblos';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

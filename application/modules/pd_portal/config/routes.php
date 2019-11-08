<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
//  $route['event/about'] = 'pd_event/event/index/about';
//  $route['event/goal'] = 'pd_event/event/index/goal';
//  $route['event/speaker'] = 'pd_event/event/index/speaker';
// $route['event/administrative-arrangement'] = 'pd_event/event/index/readm';
// $route['event/contact-us'] = 'pd_event/event/index/contus';

$route['portal'] = 'pd_portal/home/index';
$route['portal/document'] = 'pd_portal/document/index';
$route['portal/document/tambah'] = 'pd_portal/document/tambah_document';
$route['portal/document/save'] = 'pd_portal/document/insert_document';
$route['portal/document/edit'] = 'pd_portal/document/update_dokumen';
$route['portal/document/hapus/(:num)'] = 'pd_portal/document/hapus_document/$1';
$route['portal/document/edit/(:num)'] = 'pd_portal/document/edit_document/$1';
$route['portal/login'] = 'pd_portal/login';
// $route['event/about'] = 'pd_event/event/index/about';
// $route['event/goal'] = 'pd_event/event/index/goal';

// $route['(:any)/international_event'] = 'pd_intern/intern_event/index';

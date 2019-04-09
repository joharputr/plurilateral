<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$route['home'] = 'welcome/index';

$route['national'] = 'welcome/national';
$route['national/data'] = 'welcome/national/data';
$route['national/preview'] = 'welcome/national/preview';
$route['national/preview/(:any)'] = 'welcome/national/preview';

$route['workshop'] = 'welcome/workshop';
$route['steeringcommittee'] = 'welcome/steeringCommittee';
$route['paper'] = 'welcome/paper';
$route['journal'] = 'welcome/journal';
$route['videos'] = 'welcome/videos';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
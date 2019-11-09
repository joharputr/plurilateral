<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$route['home'] = 'welcome/index';

$route['national'] = 'welcome/national';
$route['national/data'] = 'welcome/national/data';
$route['national/preview'] = 'welcome/national/preview';
$route['national/preview/(:any)'] = 'welcome/national/preview';

$route['workshop'] = 'welcome/workshop';
$route['workshop/data'] = 'welcome/workshop/data';
$route['workshop/preview'] = 'welcome/workshop/preview';
$route['workshop/preview/(:any)'] = 'welcome/workshop/preview';

$route['steeringcommittee'] = 'welcome/steeringCommittee';
$route['paper'] = 'Paper/index';
$route['paper/data'] = 'Paper/data';
$route['paper/data/(:num)'] = 'Paper/data/$1';

$route['journal'] = 'Journal/index';
$route['journal/data'] = 'Journal/data';
$route['journal/data/(:num)'] = 'Journal/data/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$route['home'] = 'welcome/index';

$route['national'] = 'national/index';
$route['national/data'] = 'national/data/data';
$route['national/preview/(:any)'] = 'national/preview/$1';

$route['workshop'] = 'workshop/index';
$route['workshop/data'] = 'workshop/data/data';
$route['workshop/preview/(:any)'] = 'workshop/preview/$1';

$route['paper'] = 'Paper/index';
$route['paper/data'] = 'Paper/data';
$route['paper/data/(:num)'] = 'Paper/data/$1';

$route['journal'] = 'Journal/index';
$route['journal/data'] = 'Journal/data';
$route['journal/data/(:num)'] = 'Journal/data/$1';

$route['steeringcommittee'] = 'welcome/steeringCommittee';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
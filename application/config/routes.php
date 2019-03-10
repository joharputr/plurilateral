<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 $route['home'] = 'welcome/index';
 $route['national'] = 'welcome/national';
 $route['workshop'] = 'welcome/workshop';
 $route['steeringcommittee'] = 'welcome/steeringCommittee';
  $route['paper'] = 'welcome/paper';
   $route['journal'] = 'welcome/journal';
   $route['videos'] = 'welcome/videos';
// $route['event'] = 'pd_intern/index';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

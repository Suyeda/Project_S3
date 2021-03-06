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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'bets';
$route['/bets/edit/(:any)'] = 'bets/edit/$1';
$route['/bets/duel/(:any)/(:any)'] = 'bets/duel/$1/$2';
$route['/bets/hold_bet/(:any)'] = 'bets/hold_bet/$1';
$route['/bets/battle/(:any)'] = 'bets/battle/$1';
$route['/bets/team_profile/(:any)'] = 'bets/team_profile/$1';
$route['success'] = 'bets/success';
$route['log_reg'] = 'bets/log_reg';
$route['results'] = 'bets/results';
$route['wager'] = 'bets/wager';
$route['teams'] = 'bets/teams';
$route['bets/team_profile/(:any)'] = 'bets/team_profile/$1';
$route['dash'] = 'bets/dash';
$route['battle'] = 'bets/battle';
$route['admin'] = 'bets/admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['edit_team'] = '/bets/edit_team';
$route['edit_user'] = '/bets/edit_user';

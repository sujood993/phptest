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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'maincontroller';


$route['1'] = "Accounts/all_accounts/";
$route['1.a'] = "Accounts/pending_accounts/";
$route['1.b'] = "Accounts/all_blocked_accounts/";
$route['1.c'] = "Accounts/newaccount/";
$route['1.d'] = "Accounts/wait_message/";
$route['1/(:num)'] = "Accounts/account_profile/$1";

$route['2'] = "Admins/all_admins/";
$route['2.a'] = "Admins/newadmin_view/";
$route['2/(:num)'] = "Admins/profile/$1";
$route['22/(:num)'] = "Admins/update_profile/$1";

$route['3'] = "Appusers/all_users/";
$route['3.a'] = "Appusers/all_blocked_appusers/";
$route['3/(:num)'] = "Appusers/user_profile/$1";

$route['4'] = "Categories/all_categories/";

$route['5'] = "Events/all_events/";
$route['5/(:num)'] = "Events/event_details/$1";



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

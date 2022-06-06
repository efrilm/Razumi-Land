<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['sign-in'] = 'auth/signIn';
$route['a/dashboard'] = 'admin/dashboard';
$route['a/user'] = 'admin/user';
$route['a/add-user'] = 'admin/user/add';
$route['a/properties'] = 'admin/property';
$route['a/add-property'] = 'admin/property/add';
$route['a/edit-property/(:any)'] = 'admin/property/edit/$1';
$route['a/cities'] = 'admin/city';
$route['a/add-city'] = 'admin/city/index/add';
$route['a/edit-city/(:any)'] = 'admin/city/index/edit/$1';
$route['a/detail/(:any)'] = 'admin/property/detail/$1';
$route['a/add-type/(:any)'] = 'admin/property/addType/$1';
$route['a/edit-type/(:any)'] = 'admin/property/editType/$1';
$route['a/add-images/(:any)'] = 'admin/property/addImages/$1';
$route['a/add-seo/(:any)'] = 'admin/property/addSeo/$1';
$route['a/edit-seo/(:any)'] = 'admin/property/editSeo/$1';
$route['a/web-configuration'] = 'admin/config';


$route['detail-property/(:any)'] = 'property/propertyDetail/$1';

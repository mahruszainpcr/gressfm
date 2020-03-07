<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');
=======
defined('BASEPATH') OR exit('No direct script access allowed');
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c

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
<<<<<<< HEAD
|    example.com/class/method/id/
=======
|	example.com/class/method/id/
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
<<<<<<< HEAD
|    https://codeigniter.com/user_guide/general/routing.html
=======
|	https://codeigniter.com/user_guide/general/routing.html
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
<<<<<<< HEAD
|    $route['default_controller'] = 'welcome';
=======
|	$route['default_controller'] = 'welcome';
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
<<<<<<< HEAD
|    $route['404_override'] = 'errors/page_missing';
=======
|	$route['404_override'] = 'errors/page_missing';
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
<<<<<<< HEAD
|    $route['translate_uri_dashes'] = FALSE;
=======
|	$route['translate_uri_dashes'] = FALSE;
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
<<<<<<< HEAD
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
=======
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'awal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
>>>>>>> d04ba2d49e43028dd6155ac08abcc8bcf2a6132c

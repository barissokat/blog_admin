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
/*PANEL-ADMIN*/
$route['admin'] = 'panel/index';
/*AUTH*/
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
/*SETTINGS*/
$route['admin/ayarlar'] = 'setting/index';
$route['admin/ayarlar/profil/(:num)'] = 'profile/edit_profile/$1';
$route['admin/ayarlar/profil/(:num)/guncelle'] = "profile/update/$1";
$route['admin/ayarlar/guvenlik/(:num)'] = 'profile/change_password/$1';
$route['admin/ayarlar/guvenlik/(:num)/guncelle'] = "profile/update/$1";
$route['admin/ayarlar/olustur'] = 'setting/create';
$route['admin/ayarlar/(:num)/detay'] = 'setting/show/$1';
$route['admin/ayarlar/(:num)/duzenle'] = 'setting/edit/$1';
$route['admin/ayarlar/(:num)/guncelle'] = 'setting/update/$1';
$route['admin/ayarlar/(:num)/sil'] = 'setting/destroy/$1';
/*CATEGORIES*/
$route['admin/kategoriler'] = 'category/index';
$route['admin/kategoriler/olustur'] = 'category/create';
$route['admin/kategoriler/(:num)/detay'] = 'category/show/$1';
$route['admin/kategoriler/(:num)/duzenle'] = 'category/edit/$1';
$route['admin/kategoriler/(:num)/guncelle'] = 'category/update/$1';
$route['admin/kategoriler/(:num)/sil'] = 'category/destroy/$1';
/*BLOGS*/
$route['admin/bloglar'] = 'blog/index';
$route['admin/bloglar/olustur'] = 'blog/create';
$route['admin/bloglar/(:num)/detay'] = 'blog/show/$1';
$route['admin/bloglar/(:num)/duzenle'] = 'blog/edit/$1';
$route['admin/bloglar/(:num)/guncelle'] = 'blog/update/$1';
$route['admin/bloglar/(:num)/sil'] = 'blog/destroy/$1';
/*USERS*/
$route['admin/kullanicilar'] = 'user/index';
$route['admin/kullanicilar/olustur'] = 'user/create';
$route['admin/kullanicilar/(:num)/detay'] = 'user/show/$1';
$route['admin/kullanicilar/(:num)/duzenle'] = 'user/edit/$1';
$route['admin/kullanicilar/(:num)/guncelle'] = 'user/update/$1';
$route['admin/kullanicilar/(:num)/sil'] = 'user/destroy/$1';
/*FRONT-FRONT*/
$route['about'] = 'front/about';
$route['scroll'] = 'front/scroll';
$route['contact'] = 'front/contact';
$route['default_controller'] = 'front/index';
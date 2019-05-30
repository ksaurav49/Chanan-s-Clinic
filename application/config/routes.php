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
$route['default_controller'] = 'User_c';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'User_c/index';
$route['about'] = 'User_c/aboutus_c';
$route['contact'] = 'User_c/contactus_c';
$route['event'] = 'User_c/event_c';
$route['faq'] = 'User_c/faq_c';
$route['gallery'] = 'User_c/gallery_c';
$route['services'] = 'User_c/services_c';
$route['adminRegister'] = 'AdminController/register';
$route['adminLogin'] = 'AdminController/login';
$route['adminDash'] = 'AdminSideController/dashLoad';
$route['adminSlide'] = 'AdminSideController/addSlider';
$route['delSlider'] = 'AdminSideController/deleteSlider';
$route['ga'] = 'AdminSideController/addGallery';
$route['gad'] = 'AdminSideController/delGallery';
$route['gav'] = 'AdminSideController/addGalleryv';
$route['gadv'] = 'AdminSideController/delGalleryv';
$route['fav'] = 'AdminSideController/faqView';
$route['far/:any'] = 'AdminSideController/faqReply';
$route['fam'] = 'AdminSideController/faqManage';
$route['apoint'] = 'AdminSideController/appointManage';
$route['apointt'] = 'AdminSideController/appointManageT';
$route['apr/:any'] = 'AdminSideController/appointSubmit';
$route['pe'] = 'AdminSideController/patientEntry';
$route['pay/:any'] = 'AdminSideController/payment';
$route['pa/:any'] = 'AdminSideController/payg';
$route['ep'] = 'AdminSideController/exprofile';
$route['pd/:any'] = 'AdminSideController/Detail';
$route['apa/:any'] = 'AdminSideController/appointAdmin';
$route['pga/:any'] = 'AdminSideController/paddGallery';
$route['pgav/:any'] = 'AdminSideController/paddGalleryv';
$route['evm'] = 'AdminSideController/evmh';




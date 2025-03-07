<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Faccueil/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$config['enable_query_strings'] = FALSE;
$config['uri_protocol'] = 'REQUEST_URI';


$route['verification-im.html']      = "ApiController/verificationIm";
$route['verification-cin.html']     = "ApiController/verificationCin";
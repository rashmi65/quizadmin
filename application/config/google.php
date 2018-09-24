<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '735612341741-be3t2qi32qenkhc45nb9a7juhhnmqam5.apps.googleusercontent.com';
$config['google']['client_secret']    = 'iVkkP2q2Wnun3sIoqnQd9RAh';
$config['google']['redirect_uri']     = 'http://localhost/shopcart/index.php/welcome/googleindex';
$config['google']['application_name'] = 'Login to CodexWorld.com';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();
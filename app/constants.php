<?php
$base="";
$base = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$host = '';
if (!empty($_SERVER['HTTP_HOST'])) {
  $host = $_SERVER['HTTP_HOST'];
}
$base .= '://'.$host . str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

define('BASE_PATH', $base.'');


// Front End Part
//define('URL_FRONTEND_EXAMS_LIST', PREFIX.'exams/list');
//define('URL_FRONTEND_START_EXAM', PREFIX. 'exams/start-exam/');
//define('URL_FRONTEND_FINISH_EXAM', PREFIX. 'exams/finish-exam/');


//define('ProPayPal', 0);
//if(ProPayPal){
//    define("PayPalClientId", "ATsTXf9YbG6BmRUbPTOYA_tBd8qHtPCwOjdw1-QrfWifVn0AYtcMX7FKVoIHynEmUEYSwdHCDBPsPeAN");
//    define("PayPalSecret", "EMNpGhRJ6pWIcIWEUHjXWhX3s5D_5XS3NJkjvYdm1gzJ5SeXCW2n4cSNE7D_NItxwrOmL2K7H_GPs0x7");
//    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
//    define("PayPalENV", "production");
//} else {
//    define("PayPalClientId", "ARYbyWUQ7sYk_cFmGHCqdVDhWED-s_yZJ4VMJi1Yl1RJF5f5lFOBGuQa2kJ3SSAgMDhEKxIGma_MxvTz");
//    define("PayPalSecret", "EJqNLezQGGnbAU7ZSWVTZGz4a4FdoN1tbhOxllr71R7apDO8jCmj22hJ3xup5jGIt2l_CZWo-Dg2bPa5");
//    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
//    define("PayPalENV", "sandbox");
//}


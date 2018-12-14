<?php 
/* The date_default_timezone_set()function is used to set the defaiult
 * timezone used by all date/time functon in a script.
 */



//bool date_default_timezone_set('$timezone_identifier')

//set timezone
date_default_timezone_set('Asia/Kolkata');

//create 
$timezone_object = date_default_timezone_get();

//compare the timezone with ini-set timezone
if (strcmp($timezone_object, ini_get('dat.timezone'))){
    echo 'script timezone differs from ini-set timezone.';
} else {
    echo 'script timezone and ini-set timezone match.';
}

?>
<?php 

/* This function is used to create a Date Time object by using
 * a date/time string and timezone
 */


//DateTime date_create(time,timezone);


$date=date_create("2018-03-15");

// using date_format() function to format date
echo date_format($date, "Y/m/d H:i:s");



?>
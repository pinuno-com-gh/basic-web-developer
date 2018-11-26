<?php 

/* The date_offset_get()function is an in-built function used to
 * returns the timezone offset.
 */

//int date_offset_get($object)

$date1 = date_create('2018-20-11', timezone_open('Asia/kolkata'));
$date2 = date_create('2018-09-18', timezone_open('Asia/Singapore'));

echo date_offset_get($date1) . "\n";
echo date_offset_get($date2) . "\n";
?>
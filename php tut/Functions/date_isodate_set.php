<?php 
/*This is an in-built functtion in php used to sets the ISO
 * (INTERNATIONAL ORGANIZATION for STANDARDIZATION) date.
 * this function set the date according to the ISO 8601
 */

//date_isodate_set($object,$year,$week,$day)

$date = date_create();

date_isodate_set($date, 2018, 47);
echo date_format($date, 'Y-m-d') ; "\n";

"\n";


date_isodate_set($date, 2019,47);
echo date_format($date, 'Y-m-d');



?>
<?php 
/*The timezone_open()function is used to create a 
 * a new date timezone object. 
 */

// timezone_open($timezone)


// creating a new timezone object
$timezone = timezone_open ("America/chicago");

echo ("The new DateTimeZone objects created is"
     .timezone_name_get($timezone));

?>
<?php 
/* The timezone_offset_get()function is used to 
 * to return the timezone offset from GMT
 */

//int timezone_offset_get ($oject, $datetime)

//open the timezone of America/Chicago

$timezone = timezone_open ("America/Chicago");


// Displaying the offset of America/Chicago and Europen/Amsterdam
$datetime_eur = date_create ("now", timezone_open ("Europe/Amsterdam"));
echo timezone_offset_get ($timezone, $datetime_eur);


?>
<?php 
/*The date_parse_from_format is a in-built function in PHP
 * which is used to get information about given date formatted
 * according to the specfied format.
 */ 


// array date_parse_from_format($format,$date)
$date = "2018.0.9";

// this function is used to return the detail about date.
print_r(date_parse_from_format("j.n.Y H:ip", $date));

?>


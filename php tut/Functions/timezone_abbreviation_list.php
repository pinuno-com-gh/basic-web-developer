<?php 
/* The timezone_abbreviations_list() function is an inbuilt function in PHP which is used to return an
 *  associative array containing dst, offset, and the timezone name. 
 * No parameters are required to send to the timezone_abbreviations_list() 
 * function and it returns an associative array on success or False on failure.
*/


//array timezone_abbreviation_list()


$timezone_list = timezone_abbreviations_list();
print_r($timezone_list["acst"]);

?>
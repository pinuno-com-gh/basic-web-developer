<?php 

/* The date_default_timezone_get() function is an inbuilt function in PHP which is used to gets 
 *the default timezone used by all date/time functions in a script.
 */



//string date_default_timezone+_get(void)
 
//set the default timezone
 date_default_timezone_set('Asia/Kolkata');
 
 //create timezone object 
  $timezone_object = date_default_timezone_get();
  
  // if timezone object true
   if ($timezone_object) {
   echo 'date_default_timezone_set: ' . date_default_timezone_get();
   }

?>

<?php 
/* the date_get_last_errors()function is an inbuilt function in 
 * php whcih is used to returns the warnings and errors.
 */

//array date_get_last_errors(void)
$date = date_create();
print_r(date_get_last_errors());

?>
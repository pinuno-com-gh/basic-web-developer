<?php 
/* The timezone_identifiers_list()function is used to
 * return an indexed array containing all the timezone
 * identifiers
 */

//arary timezone_identifers_list($datetimezone, $country)

//displaying all the timezone identifiers of Antartica

echo ("All the timezones availabe in this timezone are");
print_r (timezone_identifiers_list(4));


?>
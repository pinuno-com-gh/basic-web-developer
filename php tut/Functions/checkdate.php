<?php 
/*the checkdate()function is an inbuilt function in PHP which checks the validity
 * of the date passed in the arguments. it accept the date in the format mm/dd/yy/
 * the function returns a boolean value, returns true if date is valide
 *  and else false
 */

// checkdate($month,$day,$year)

$month = 12;
$day = 31;
$year= 2016;
 var_dump(checkdate($month,$day,$year));

echo "\n";


/*php to checkdate function incase of a leap year
 */
$month = 2;
$day = 29;
$year = 2018;
//return boolean value after validation
var_dump(checkdate($month,$day,$year));



$month = 2;
$day = 29;
$year = 2018;
//returns a boolean value after validation
var_dump(checkdate($month, $day, $year));


?>
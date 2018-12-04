<?php 

/* The easter_days()function is used to return the number of days
 * after March 21, that the easter days in a given year. 
 * when no year is given the current year is taken as the default
 * value.
 */

// easter_days( $year, $method )


$year = 2016;

// no of days for Easter after March 21 of 2016
echo easter_days($year), "\n";

//the easter date of 2016
echo date("M-d-Y", easter_days($year));

// easter_days() function when all parameters are passed.
$year = 2018;

echo easter_days($year,CAL_EASTER_ROMAN), "\N";
?>
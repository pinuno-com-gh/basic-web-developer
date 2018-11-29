<?php 
/* The cal_days_in_month()function in php is an in built function used
 * to return the number of days in a month for a specific year and according 
 * to a specific calendar, say french calendar,jewish calendar or the Gregorian 
 * calendar.
 */


// cal_days_in_month($calendar,$month,$year)

$days = cal_days_in_month(CAL_JEWISH, 2, 1966);
echo "February 1966 had $days days.<br>";


"\n";

// using a different calendar
$days = cal_days_in_month(CAL_GREGORIAN, 2, 2004);
echo "february 2004 had $days days";

?>
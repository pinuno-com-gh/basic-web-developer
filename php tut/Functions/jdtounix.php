<?php 
/* The jdtounix() function which is used to convert a
 *  julian day into a unix Timestamp. This function returns a unix timestamp
 *  that corresponds to a julian day.
 * 
 */

// jdtounix ($jd)

//converting greogian date to julian date
$julian_date = gregoriantojd(01, 02, 1997);

"\n";

//conerting julian date to unix Timestamp
echo jdtounix($julian_date);

?>
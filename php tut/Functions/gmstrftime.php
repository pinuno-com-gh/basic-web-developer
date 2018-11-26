<?php 
/*The gmstrftime()function is an in-built function in PHP which is used to
 * format a GMT/UTC time/date according to local settings.
 * The gmstrftime is the same as strftime() just that the time returned by the
 * gmstrftime()function is a Greenwich Mean Time
 */

//string gmstrftime($format,$timestamp)


// Using gmstrftime() function to return the GMT time
echo(gmstrftime("%B %d %Y, %X %Z", mktime(14, 0, 0, 8, 31, 18)));


?>
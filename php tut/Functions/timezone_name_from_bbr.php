<?php 
/*The timezone_name_from_abbr()func is used to return the time zone
 * name from abbreviation
 */
//string timezone_name_from_abbr($abbr, $gmtoffset, $isdst )

//displaying the name of timezone using the abbreviation

$abbr = timezone_name_from_abbr ("PST");
echo ("PST stands for " . $abbr);


?>
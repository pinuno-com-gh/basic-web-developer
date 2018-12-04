<?php 
/* This gregoriantojd()function is used to converts a gregorian
 *  date to a julian day count
 */

// gregoriantojd($month, $day, $year)


$jd = gregoriantojd(4,27,2018);
echo ($jd);

"\n";

// when month is out of range

$jd = gregoriantojd(13,29,2018);
echo ($jd);

?>
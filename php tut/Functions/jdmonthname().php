<?php 
/*The jdmonthname()function is used to return the month name of
 * julian day number passed as the argument.
 */ 


//jdmonthname($jd, $mode)
$jd = gregoriantojd(4, 27, 2018);

echo (jdmonthname($jd, 0));

"\n";

$jd = gregoriantojd(4, 27, 2018);
echo (jdmonthname($jd,1));


?>
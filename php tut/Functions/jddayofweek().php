<?php 
/* The jddayofweek is a php function used to return the given day of the week
 * of a julian integer passed in the argument.
 */

// jddayofweek ($jd $mode)


$jd = gregoriantojd(4, 27, 2018);
echo jddayofweek($jd); 



//when the mode passed is 1


$jd = gregoriantojd(4, 27, 2018);
echo jddayofweek($jd, 1);

?>
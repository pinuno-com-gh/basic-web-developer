<?php 
/* The jdtogregorian() function is a built in function, used to convert
 * a julian integer to Gregorian date
 */

// jdtogregorian($jd)


// converting to julian integer 
$jd = gregoriantojd(3,31,2018);


//converts the julian day to gregrian
$date = jdtogregorian($jd);

echo ($date);

?>
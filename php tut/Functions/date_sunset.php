<?php 

/*The date_sunset()is an in built function in PHP 
 * which is used to find the time for a specified 
 * day and location
 * 
 */

//date_sunset($timestamp,$format,$latitude,$longitude,$zenith,$gmtoffset)

echo date("D M D Y");
echo ("\nsunset time: ");
echo (date_sunset(time(), SUNFUNCS_RET_STRING,
      28.6139, 77.2090, 90, 5.30));




?>
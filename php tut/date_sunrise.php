<?php 

/*This date sunrise is an in-built function in PHP 
 * which is used to find the sunrise time for a specific day and 
 * location
 */


//date_sunrise($timestamp,$format,$latidue,$Longitude,$zenith,$gmtoffset))





echo date("D M d Y");
echo("\nsunrise time: ");
echo(date_sunrise(time(), SUNFUNCS_RET_STRING,
    28.501120, 77.409989, 90, 5.30));






?>
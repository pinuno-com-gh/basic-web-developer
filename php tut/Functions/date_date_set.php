<?php 
/* This is a built-in function in PHP which is used to set a 
 * new date, this function has four parameters, which includes 
 * $object, $year, $month and $day and returns DateTime object on success
 * or false on failure
 */


//date_date_set($object,$year,$month,$day)

//object oriented style to print DateTime
$date = new DateTime();
$date->setdate(11,20,2018);
echo $date->format('m/d/y');

?>
<?php 
/*the time function is a built-in function in PHP which returns the current
 * time meaured 
 */


//int time()

//program to illustrate the use of current date since unix Epoch
 
//variable to store the time in seconds
$currentTimeinseconds = time();

//convert the time in seconds to current date
$currentdate = date('y-m-d', $currentTimeinseconds);

//print the current date
print_r($currentdate);

?>
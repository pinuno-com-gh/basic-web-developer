<?php 
// php to demonstrate

//demonstrating the strtotime()function when the english text is now.

// this print the current time in seconds
echo strtotime('now');
echo "\n";
//this print the current time in date format
echo date("y-m-d",strtotime("now"));



echo "\n";

// demonstrating the strtotime() when the english text is date
echo "\n";
echo strtotime("24th August 2017");
echo "\n";
//print the above in date format
echo date ("y-m-d", strtotime("24th August 2017")). "\n";

?>
<?php 

// The date is an inbuilt function in php, it can be used to alter
//the timestamp of date Time object.



//date_modify(DateTme$object,string$modify);

// PHP program to illustrate date_modify()
// function

// creating DateTime object
$date=date_create("2018-11-16");

// calling of date modify function
// with two required parameters
date_modify($date, "+0 days");

// printing the modified date in "y-m-d" format
echo date_format($date, "Y-m-d"); 


?>
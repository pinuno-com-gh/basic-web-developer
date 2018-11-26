<?php 

// mktime is a function in  PHP which is used to return the unix timestamp for a date

//int mktime($hour,$minute,$second,$month,$day,$year,is_dst)
// they are all optinoal depending on what you want to use


//using mktime() function to know the day
echo "August 24, 2018 was on " . date("4", mktime(0, 0, 0, 8, 24, 2018));


?>
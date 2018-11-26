<?php 

/*date and time ate the most used in PHP,some are predefined
 * eg PHP date()function
 */

//date(format,timestamp)

echo "Today's date is :";
$today = date("d,m,y");
echo $today;

echo "\n";

// showing date in different format

echo "Date in different formats:" . "\n";

echo date("d/m/Y") . "\n";
echo date("d-m-Y") . "\n";
echo date("d.m.Y") . "\n";
echo date("d.M.Y/D"); 


?>

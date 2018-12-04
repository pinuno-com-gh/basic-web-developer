<?php 
/*The jdtofrench() function convert a julian day integer to French date
*/


// jdtofrench($jd)

$jd = frenchtojd(1, 7, 13);

//print the julain date integer
echo "The julian day integer is ", $jd, "\n";

//convert the julian day to french date
$date = jdtofrench($jd);

// print the date
echo "The french date initialy taken was ",($date);


"\n";

// converts date to julian integer
$jd = frenchtojd(1, 7, 18);

"\n";
// prints the julian day integer as 0 as year is out of range
echo "The julian day integer is ", $jd, "\n";

// converts the Julian day to French date
$date = jdtofrench($jd);

// prints the date as 0/0/0 as french year is out of range
echo "The french date initially taken was ", ($date), "\n";  

?>
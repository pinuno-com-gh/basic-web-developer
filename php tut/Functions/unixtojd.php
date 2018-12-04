<?php 


//takes the current date as unix timestamp
$jd = unixtojd();

// prints the julian Day integer
echo "The Julian Day integer is ", ($jd), "\n";

// prints the corresponding Gregorian date
echo "The Gregorian date is ", jdtogregorian($jd);


?>
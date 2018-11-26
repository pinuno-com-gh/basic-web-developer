<?php 

/*The vsprintf()functions in php is an inbuilt function
 * and is used to display arrays values as a formatted string
 */
//vsprintf()format,arr_arguments)
//string space specified program

$str1 = "Geeks";
$str2 = "Geeksforgeeksarticle";

// print string-1 only
echo vsprintf("%s\n", array(
    $str1
));

// print string-15 space
echo vsprintf("%15s\n", array(
    $str1
));

// print string-1 with space
echo vsprintf("%-25s\n", array(
    $str1
));

// print string with zero
echo vsprintf("%020s\n", array(
    $str1
));

// print string with * symbol
echo vsprintf("%'*10s\n", array(
    $str1
));

// print string-2
echo vsprintf("%s\n", array(
    $str2
));

// print string-2 with decimal point
echo vsprintf("%2.10s\n", array(
    $str2
));

// print string-2 with space
echo vsprintf("%30s\n", array(
    $str2
));

// print string-2 with zero
echo vsprintf("%030s", array(
    $str2
));


?>
<?php 

/* The vprintf() function in php is an inbuilt function in 
 * php used to display array values as formatted string
 * 
 */
//vprintf(format,array_arguments)


$obj = new stdClass();
$obj->val1 = 9;
$obj->val2 = 10;
$obj->val3 = 15;
$obj->val4 = -1;
echo "using %% format:";

//using vprint function for printing % format
vprintf('%% %%', $obj);
echo "\nusing %b format:";

//using vprint function for %b
vprintf('%b %b', $obj);
echo "\nusisng %d format:";


//using vprintf function for %d format
vprintf('%d %d', $obj);
echo "\nusisng %d %d format:";

//vprintf for %u format function
vprintf('%u %u', $obj);
echo "\nusing %u format:";

//vprintf for %x format 
vprintf('%x %x', $obj);
echo "\nusing %x format:";

//vprintf %X format uppercase
vprintf('%X %X', $obj);
echo "\nusing %X format:";

//vprintf function of %f 
vprintf('%f %f', $obj);
echo "\nusing %f format: ";

//vprintf function of %F format
vprintf('%F %F', $obj);
echo "\nusing %F format: ";


//vprintf of %o format 
vprintf('%o %o', $obj);
echo "\nusing %o format: ";













?>
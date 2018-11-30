<?php 
/* imploding and exploding are php functions which can be applied on strings
 *  or arrays. these provides us with two functions whicn are 
 *  1mplode() and explode() function, implode method joins array element with string segement
 *  that works as a glue and explode() function does the excat oppoiste.
 */ 

// string implode(glue ,pieces) or
// string imlpode (pieces)








// PHP code to illustrate the working of implode()

$array1 = array('www', 'geeksforgeeks', 'org');
echo(implode('.',$array1)."<br>");

$array2 = array('H', 'E', 'L', 'L', 'O');
echo(implode($array2)); 


?>
<?php 
/* it is a superglobals variables which is used to access global
 * variables from anywhere in the PHP script. 
 * PHP stores the global variables in arry $[GLOBALS]
 */

$x = 300;
$y = 400;

 function multiplication()
 {
    $GLOBALS["z"] = $GLOBLAS["x"] * $GLOBLAS["y"]; 
}

multilpication();
echo $z

/* The global variables were declared $x and $y
 * which were assign values to them, 300 and 400 respectively.
 * then the function multiplication is defined to multiply the values
 * $x and $y and store in another variable $z 
 */
?>
<?php 
/*these are used to basically operate with conditional 
 * statements and expressions. A condition can either be 
 * met or not
 */
$x = 50;
$y = 30;

   if ($x == 50 and $y == 30)
     echo "AND  true \n";
 
    if ($x == 50 or $y == 20)
         echo "OR false \n";
     
     if ($x == 50 xor $y == 20)
         echo " XOR true since one of the condition is true \n";
    
     if ($x == 50 && $y == 30)
         echo " && true if both are true else false \n";

     if ($x == 50 || $y == 30 ) 
         echo "|| true if either is true \n";
     
         if (!$z)
             echo "! success \n";

?>
<?php 
/* is_float() is an inbuilt function in php used to find whether
 * a variable is a float or not.
 */

//boolean is_float($variable_name)

//demonstrating the php float
$variable_name1 = 67.099;
$variable_name2 = 0632 ;
$variable_name3 = "abcd";
$variable_name4 = TWO;



//$variable_name1 is float, gives TRUE

if (is_float($variable_name1))
    echo "$variable_name1 is a float. \n";
else 
    echo "$variable_name1 is not a float value \n";

    if (is_float($variable_name2))
        echo "$variable_name2 is a float. \n";
    else 
        echo"$variable_name2 is not a float value. \n";
    
     if (is_float($variable_name3))
         echo "$variable_name3 is a float. \n";
     else 
         echo "$variable_name3 is not a float. \n";
     
         if(is_float($variable_name4))
             echo "TWO is a float. \n";
         else 
             echo"TWO is not a float. \n";
         
?>
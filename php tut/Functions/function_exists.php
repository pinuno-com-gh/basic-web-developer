<?php 
/* The function_exists() is an inbulit function in php
 * used to check whether a function exists or not in the php 
 * script
 */


// boolean function_exist($function_name)

//checking if the in_array() built-in function exists or not
if (function_exists('in_array'))
{
    echo "in_array() function is avalible. \n";
    
}
else 
{
    echo "in_array() function is not avalible \n";
    
}






?>
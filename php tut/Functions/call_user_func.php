<?php 
/* The call_user_fun() function is used to call the callback given by the first parameter and passes the remaining paramters as argument
 * it use to call the user defined functions
 */

//mixed call_user_func ($function_name[, mixed $value1[, mmixed $... ]])

function GFG ($value)
{
    echo "This is $value site. \n";
}

call_user_func('GFG', "GeeksforGeeks");
call_user_func('GFG',"content");

?>
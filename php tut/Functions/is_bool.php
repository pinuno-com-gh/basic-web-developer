<?php 
/* inbuilt function in PHP, used to find whether a varaible is an @author m.akyempon
boolean or not */

$variable_name1 = false;
$variable_name2 = 32;

// if variable name is boolean, gives TRUE
if (is_bool($variable_name1))

echo "variable is a boolean. \n";
else 
    echo "variable is not a boolean. \n";

    // $variable_name2 is a boolean, gives FALSE
    if (is_bool($variable_name2))
        echo "32 is a boolean. \n";
    else 
        echo "32 is not a boolean";

?>
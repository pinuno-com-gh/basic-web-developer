<?php 
// function with default parameter
function defGeek ($str, $num=12)
{
    echo "$str is $num years old \n";
}

//calling the function 
defGeek ("Ram", 15);

// in this call, the default value 12 wil be considered
defGeek("Adam");

?>
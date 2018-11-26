<?php 
//this is a built in function in php and is used to check
//bolean is_a($object,$class)

// sample program tto illustratte the is_a()function
// sample class
class GeeksforGeeks
{
    var $store = 'geeks';
  
    
}

// create a new object 
$geek = new GeeksforGeeks();

// check if $geek is an object of class GeeksforGeeks
if (is_a($geek, 'GeeksforGeeks'))
{
    
    echo "yes";
}

?>
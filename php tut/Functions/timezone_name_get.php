<?php 
/* The timezone_name_get()function is used to return the name of the 
 * timezone.
 */

//string timezone_name_get ($object)

//opening the timezone of America/chicago
$timezone = timezone_open ("America/chicago");

//Displaying the name of the timezone
echo ("The name of the timezone is " . timezone_name_get($timezone));

"\n";


// Opening the default timezone
echo ("Default time zone is " . date_default_timezone_get());
echo "\n";

// Declaring a new timezone
$new_timezone = 'America/Chicago';

if( date_default_timezone_set( $new_timezone) )
{
    echo "New time zone is ". date_default_timezone_get();
} 


?>
<?php 
/* The timezone_location_get()function is used return the location 
 * information for the given timezone.
 */

// timezone_location_get ($object)

//opeing a timezone
$timezone = timezone_open ("Asia/Kolkata");

//displaying the location details of the timezone
echo ("location details of the specified timezone:\n");

print_r($timezone -> getlocation());


"\n";

// Declaring a timezone
$timeZone = new DateTimeZone("Asia/Kolkata");

// Displaying the location details of a timezone
echo ("Location Details of the Specified Timezone:\n");

print_r($timeZone->getLocation()); 

?>
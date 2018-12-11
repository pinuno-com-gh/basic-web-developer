<?php 
/* The timezone_version_get()function is an inbuilt
 *  used to return the version of the timezone database
 */

// string timezone_version_get()

// Displaying the version of the timezone databse
$timezone_db = timezone_version_get();
echo ("Timezone Databse version" .$timezone_db);

?>
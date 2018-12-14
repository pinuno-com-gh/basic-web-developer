<?php 
/* The timezone_transitions_get() function is used to returns
 * all transitions for the timezone
 */


/* procedure style*/
//timezone_transition_get ($object, $timestamp_begin, $timestamp_end)

/*  object oriented style*/
//DatetimeZone::getTransitions($timestamp_begin, $timesamp_end)

//set time zone object
$time_zone = timezone_open('Asia/Kolkata');

// set the transition of time_zone
$transition = timezone_transitions_get( $time_zone );

//display an array containing associative array of all transition
print_r(array_slice($transition, 0, 3));

?>
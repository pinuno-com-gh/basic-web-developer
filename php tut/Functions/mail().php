<?php 
/* mail is one of the server side utilites that is required
 *  in most of the web servers today.servers is uesd for 
 *  advertisement today, account recovery, subscription.
 */


//bool mail(to,subj, message,additional_headers,additional_parameters)

$to = "recipient@example.com";
$sub = "Generic Mail";
$msg = "Hello Geek! this is generic email. ";
if (mail($to,$sub,$msg))
    echo "your email is sent successufully.";

else 
    echo "your mail not sent. try again. ";


?>
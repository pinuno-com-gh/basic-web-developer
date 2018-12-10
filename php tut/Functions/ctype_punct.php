<?php 

/*  The stype_punct()function is used to check printable
 * character which is not whitespace or an alphanumeric
 *character*/

// bool ctype_punct ( $text )

$string1 = 'GeeksforGeeks';
if (ctype_punct($string1))
        echo "Yes\n";
    else
        echo "No\n";
    
        
    $string2 = '$%^&@';
    if ( ctype_punct($string2))
            echo "Yes\no";
    else
            echo "No\n";
?>
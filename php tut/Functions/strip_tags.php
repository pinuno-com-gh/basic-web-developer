<?php 
/*  The strip_tags() function in php is used to strips a string
 * fromm html and php tags
 */

// string strip_tags ($str, $allowable_tags)



//strip_tag without allow parameter
echo strip_tags("Hello <b> GeeksforGeeks! </b>");

// strip_tag with allow parameter

echo strip_tags("Hello <b> <i>GeeksorGeeks!</i></b>", "<b>");
?>
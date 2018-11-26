<?php 
// in addition to all the conditional statemenet, PHP provides a shortand way
// of writing if..else, called the ternary operators


$x  = -12;

if ($x > 0) {
    echo "The number is positive \n";
}

else {
    echo "The number is negative \n";
}
// all this can be written in this way

echo ($x > 0) ? 'The number is positive' :
                'The number is negative';

?>
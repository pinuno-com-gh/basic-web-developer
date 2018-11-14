<?php 
$randomguess = mt_rand(0,20);
$guess = $_POST['guess'];
$number = $_POST['number_entered'];
$submitname = $_POST['submitname'];
$name = $_POST['name'];
echo "hello $name";


if($submitname)
{
    if($number < 10);
    echo "guess is higher";
    
    if  ($number > 10);
    echo "Guess is lower";
    
    if ($number == $randomguess);
    echo "Congratulations $name"; 
}




?>
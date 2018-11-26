<!DOCTYPE HTML>
<html>
<head>
 <title> Guessing Game</title>

<meta http-equiv="content-type" content="text/html;charset=UTF-8">
 </head>

<body> 
<form action="<gue.html>" method="POST">
<h2>Please Enter your name :</h2>
<input type="text" name="name">
<input type="submit" value="submit Name">

<p> <br></p>

Guess :
<input type="number" name="guess"><br/>
<input type="submit" name="submit" value="click to check if guess is right">

</form>

<?php 
$rand=rand(0,20);

$guess = $_POST['guess']
$submit = $_POST['submit'];

if (isset ($submit)) {
 
}

$name = $_POST['name'];
echo "hello $name";

?> 




 </body>

</html>
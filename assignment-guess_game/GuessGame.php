
<!DOCTYPE html>
<html>
<body style="background-color:cyan">
<div class='header' align="center">
<h2>GUESSING GAME</h2>
<p align="center">*************************************************</p>
<p align=center>***************************************************</p>
</div>

</br>
</br>
<!-- the above is not xhtml -->

<h3 align=center> WELCOME <?php echo $_POST["name"]; ?> !!!</h3>
<p align=center>We are ready to play, the computer has generated random 
numbers from 0-20, guess any number within 0-20 and see if your
 guess is right.
 </p>
 <h4 align="center">AM GLADE YOU HAVE MADE IT HERE!!!</h4> 

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Guess A Number</title>
	</head>
 	<!-- structure of html document violation head & body declaration again here -->
	<body>
		<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
		   
		    <input type="text" name="guess" />
		    <input name="number" type="hidden" value="<?= $number ?>" />
		    <!-- $number is not initiated yet, will cause an error -->
		    <input name="submit" type="submit"/>
		</form>
	</body>

 
 
 
<?php
 
session_start();
 
if(isset($_SESSION['number']))
{
   $number = $_SESSION['number'];
}
else
{
   $_SESSION['number'] = mt_rand(0,20);
}
 
 
if($_POST["guess"]){
  

    if ($guess < $number)
	{ 
        echo "You guessed is too low";
    }
	elseif($guess > $number)
	{
        echo "You guessed is too high";
    }
	elseif($guess == $number)
	{
        echo "Congratulation !!! you guessed right";
    }
 
}
?>
<!-- where does the session end? -->
<!-- You should at atleast get the html layout right.-->
</html>

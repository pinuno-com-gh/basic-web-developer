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

 
 
<h3 align=center> WELCOME <?php echo $_POST["name"]; ?> !!!</h3>
<p align=center>We are ready to play, the computer has generated random 
numbers from 0-20, guess any number within 0-20 and see if your
 guess is right.
 </p>

<form action="" >
<h4 align="center">AM GLADE YOU HAVE MADE IT HERE!!!</h4> 
<input type="number" name="guess"> 
<input type="submit" name="submit" value="guess">
</form>




<?php 

 $number = $_POST['guess'];
 $submit = $_POST['submit'];
 $rand = mt_rand(0,20);
?>
 




</body>
</html>
<html>
<body>

<?php 
session_start();

$_SESSION['randnum'] = isset($_SESSION['randnum'])?
$_SESSION['randnum'] : mt_rand(0,20);
$_SESSION['Guess'] = isset($_SESSION['Guess'])?
$_SESSION['Guess'] : 0;


$randnum = $_SESSION['randnum'];
$userguess = $_POST['userguess'];

if (isset($Guess)) {
if ($Guess < $randnum) {
echo "guess too low!";
$_SESSION['randnum']++;
}

if ($Guess>$randnum){
echo "guess too high";
$_SESSION['randnum']++;
} 
if (Guess==$randnum){
echo "congratulations you guessed right!!!";
unset($_SESSION["randnum"], $_SESSION['Guess']);
   }
}

else{
echo "all attempts finished";
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title> Wonder full people </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
  </style>
</head>
<body>
<h1>Welcome</h1>
<?php
  	 $dT = date("m/d/y G.i:s", time());
	 $t = date("j of F Y, \a\\t g.i ", time()); 
?>
	<h2>It is: <?php echo "$dT"; ?></h2>
	<div class="footer">
	<h2>Powered by pinuno</h2>
	</div>
</body>
</html>

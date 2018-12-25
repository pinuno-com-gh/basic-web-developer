<!DOCTYPE html>
<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family:Arial, Helvetica,sans-serif;}
* {box-sizing: border-box;}


input [type=text], select, textarea {
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius: 4px;
box-sizing:border-size;
margin-top:6px;
margin-buttom:16px;
resize:vertical;
}

input[type=submit] {
background-color:green;
color:white;
padding:12px 20px;
border:none;
border-radius:14px;
cursor:pointer;
}
input[type=submit]:hover {
background-color: #45a049;
}

.container {
border-radius:5px;
background-color: #f2f2f2;
padding:20px;
}



</style>
<title> contact form </title>
</head>
<body>

<h2> CONTACT FORM</h2>
<div class="container"> 
<form action="">
<label for="Firstname">First Name</label>
<input type="text" id="fname"  name="Firstname" placeholder="please enter your first name..">

<label for="lname"> Last Name</label>
<input type="text" id="lname" name="lastname" placeholder="Please enter your last name..">

<label for ="country"> Country</label>
<select id="country" name="country">
<option value="Ghana"> Ghana</option>
<option value="Togo"> Togo </option>
</select>

<label for="subject"> Subject</label>
<textarea id="subject" name="subject" placeholder="tell us your challenge.."
style="height:200px"></textarea>

<input type="submit" value="submit">
</form>
</div>



</body>
</html>
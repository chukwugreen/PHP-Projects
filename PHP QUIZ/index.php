<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-WEBACADEMY.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<style>
	body{
		background:#eee;
	}
	.loginbox{
		width:300px;
		height:auto;
		padding:20px;
		border-radius:5px;
		background:grey;
	}
	
	input{
	
		border-top:0;
		border-left:0;
		border-right:0;
		border-bottom: 2px solid #fff;
		width:250px;
		padding-left:10px;
		font-family:aveltica;
		font-size:25px;
		background:grey;
		color:#fff;

	}
	
	input[type="submit"]{
		border:1px solid #eee;
		background:#eee;
		color:#444;
		width:150px;
		padding:15px;
		border-radius:20px;
	}
	input[type="submit"]:hover{
		background:#fff;
		color:#444;
	}
		
	
	
	</style>
	</head>
	
	<body>
	<center>
	<div class ="loginbox">
	
	<p style="font-family:san-serif; font-size:25px; padding-bottom:10px; color:#eee;"> PLEASE REGISTER </p>
	
	<form  action="login.php" method="post" >
	<input type ="text" name="firstname" placeholder="Firstname" required>
	<br><br>
	
	<input type ="text" name="lastname" placeholder="Lastname" required>
	
		<br><br>
	
	<input type ="text" name="Email" placeholder="Email" required>
		<br><br>

	<input type ="submit" value="Sign In" style="cursor:pointer;">
	
	
	</form>
	</div>
	
	
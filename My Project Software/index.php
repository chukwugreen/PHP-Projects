<!Doctype html>
<html>
<head>
<title>www.MouauResultportal.edu.ng</title>

<link rel="stylesheet" type="text/css" href="indexresponsive.css">
<style>
body{
	margin:0;
	padding:0;
	background: #F4FFE4;
	font-family:san-serif;
}

center{
	color: green;
	font-weight:bold;
	font-family:aveltica;
	font-size:35px;
	margin-bottom:5px;
	padding-top:20px;
	
}


.loginbox{
	
	width:330px;
	height:350px;
	box-sizing:border:box;
    background:#6b8e23;
	border-raduis:50px;
	opacity:0.8;
}
	.loginbox:hover{
		opacity:0.9;
	}
.loginbox input{
	border:none;
	border-bottom:1px solid #fff;
	width:80%;
	margin-bottom:15px;
	height:40px;
	outline:none;
	color:#fff;
	font-size:16px;
	background:transparent;
}

.loginbox input[type="submit"]{
	background:limegreen;
	cursor:pointer;
	border-radius:20px;
	border-bottom:none;
	width:60%;
}
.loginbox input[type="submit"]:hover{
	background:#fff;
	color:#6b8e23;
	border-raduis:20px;
	
	
}

.user {
	width: 100px;
	height:100px;
	border-radius:50px;
	overflow:hidden;
	border-raduis:50px;


}
.loginbox p{
	font-family:san-serif;
	font-size: 10px;
}





</style>

<script src="jquery.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
 $('.navigation').click(function(){
 $('#menu').slideToggle();
 $('.navigation').addClass('changebg');
   });
 });
</script>

</head>



<body>

<img src ="mouau.jpg" style ="width:150px; height:130px; float :left;">
 <center><span>MICHEAL OKPARA UNIVERSITY OF <br >AGRICULTURE UMUDIKE</center> </span>

<br><br>
<P id ="welcome" style="background:#6b8e23; color:#fff; font-family:san-serif; padding:10px;margin-bottom:15px; text-indent:20%;">WELCOME MOUAU ONLINE RESULT CHECKING APP....LOG IN TO CHECK YOUR RESULT </P>

<center>
<div class="loginbox">
<img src ="cartoon.jpg" style="width:100px; height:80px; "class ="user" >
<form action ="signin.php" method="post">
<input type ="text" id ="name" name ="name" placeholder=" Surname &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  Firstname"required>

<input type ="password" id="password" name ="password" placeholder=" Reg No" required>

<input type="submit" name="Submit"value="Sign In"><br>
<span style ="color:#fff; padding-left:50px; font-size:15px;">Forgot Password?</span>

</form>
</div>
</center>


</body>

</html>
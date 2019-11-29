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
	p{
		font-size:20px;
		font-family: san-serif;
		
	}

#quiz_time_left{
		background:green;
		width:100%;
		padding-left:20px;
		margin-left:0px;
	
	}
	
#registration{
		background:#444;
		width:100%;
		padding-left:20px;
		margin-left:0px;
	
	}
	
	#question{
	margin-left:15px;
	}
		
	</style>
	
	</head>
	
	<body>
	
	<div id ="quiz_time_left" style ="color:#fff; font-size:25px;">
	
	</div>
	<script type="text/javascript">
	var total_seconds = 60*10;
	var c_minutes = parseInt(total_seconds/60);
	var c_seconds = parseInt(total_seconds%60);
	//write the checktime function
	function CheckTime(){
		document.getElementById("quiz_time_left").innerHtml = 'Time Left:'+ c_minutes +' minutes'+ c_seconds+'seconds';
		if(total_seconds <= 0){
			setTimeout('document.quiz.submit()',1);
		}
		else{
			total_seconds = total_seconds -1;
			c_minutes = parseInt(total_seconds/60);
			c_seconds = parseInt(total_seconds%60);
			setTimeout("CheckTime()",1000);
	}}
	setTimeout("CheckTime()",1000);
	 
	</script>
	<div id="registration">
	<p style ="color:#fff; font-size:25px;">Please Re-Enter Your Details </p>
	
	<form name="quiz" action ="process.php" method="post">
	
	
	<input type ="text" name="firstname" placeholder="Firstname" required 
	style ="
		border-top:0;
		border-left:0;
		border-right:0;
		border-bottom: 2px solid #fff;
		width:250px;
		padding-left:10px;
		font-family:aveltica;
		font-size:25px;
		background:#444;
		color:#fff;
">
	<br><br>
	
	<input type ="text" name="lastname" placeholder="Lastname" required
	style="
		border-top:0;
		border-left:0;
		border-right:0;
		border-bottom: 2px solid #fff;
		width:250px;
		padding-left:10px;
		font-family:aveltica;
		font-size:25px;
		background:#444;
		color:#fff;
">
	
		<br><br>
	
	<input  type ="text" name="Email" placeholder="Email" required 
	style="margin-bottom:20px; 
		border-top:0;
		border-left:0;
		border-right:0;
		border-bottom: 2px solid #fff;
		width:250px;
		padding-left:10px;
		font-family:aveltica;
		font-size:25px;
		background:#444;
		color:#fff;
">
		<br><br>
		</div>
		
		
		<div id="question">
	<p>1. 25 * 2 / 5 = ?</p>
	a. <input type ="radio" name ="answer" value ="10" required>10 <br>
	
	b. <input type ="radio" name ="answer" value ="40"  required>40 <br>
	
	c. <input type ="radio" name ="answer" value ="50">50 <br>
	
	d. <input type ="radio" name ="answer" value ="30"  required>30 <br>
	
	
	<p>2. 5 ^ 2 * 2</p>
	
	a. <input type ="radio" name ="answer1" value ="100"  required>100  <br>
	
	b. <input type ="radio" name ="answer1" value ="25"  required>25  <br>
	
	c. <input type ="radio" name ="answer1" value ="50"  required>50  <br>
	
	d. <input type ="radio" name ="answer1" value ="20"  required>20  <br>
	
	<p>3. 50 / 5 * 2 - 5</p>
	
	a. <input type ="radio" name ="answer2" value ="60"  required>60 <br>
	
	b. <input type ="radio" name ="answer2" value ="15"  required>15 <br>
	
	c. <input type ="radio" name ="answer2" value ="10"  required>10 <br>
	
	d. <input type ="radio" name ="answer2" value ="20"  required>20 <br><br>

	
	 <input type ="submit"  value ="submit">
	 
	</form>
	</div>
	</body>
	</html>
	
	
	
	
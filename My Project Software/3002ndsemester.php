<!Doctype html>
<html>
<head>
<title>www.MouauResultportal.edu.ng</title>
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

#welcome {
	background:#6b8e23;
	color:#fff;
	font-family:san-serif;
	padding:10px; 
	margin-bottom:15px;
	padding-left:30%;
	text-indent:7%;
	width:100%;
}

table{
	width:500px;
	height:auto;
	margin-left:25%;
	margin-top:20px;
	border-left:1px solid #6b8e23;
	border-right:1px solid #6b8e23;
	border-bottom:1px solid #6b8e23;
    margin-bottom:10px;
    border-collapse:collapse;	
}

 th{
	text-align:center;
	color:#fff;
	background:#6b8e23;
	font-family:san-serif;
	font-weight:bold;
	padding:7px;
	margin-right:0;
	border-left:2px solid #fff;
}
	tr{
		background:#eee;
		color:grey;
		padding:5px;
		margin-left:0;
		margin-right:0;
		border-top:1px solid #fff;
		border-bottom:1px solid #fff;
		border-left:1px solid #6b8e23;
		border-right:1px solid #6b8e23;
	}
	td{
		text-align:center;
		font-family:san-san-serif;
		font-weight:bold;
		padding:5px;
		border-left:1px solid #fff;
		border-right:1px solid #fff;
	}
	
	#next{
		background:#6b8e23;
		border-raduis:30px; 
		color:#fff;
		width:60px;
		padding:7px;
		padding-left:5px;
		padding-right:5px;
		text-align:center;
		margin-left:68%; 
		font-family:san-serif;
		font-weight:bold;
		font-size:18px;
	}

	#click{
		color:#fff;
		background:#6b8e23;
	    font-family:#san-serif;
	    font-weight:bold;
		font-size:20px;
		padding-top:10px;
		padding-left:40%;
		padding-bottom:10px;
		width:100%;
		
	}
	


nav{
		background:#F4FFE4;
		float:left;
	   padding-left:20%;
}
ul{
	list-style-type:none;
	margin:0;
	padding:0;
	font-family:san-serif;

	
}

ul::after{
	content:"";
	clear:both;
	display:block;
}

li{
		list-style:none;
         display:inline-block;
         
	}

a{
	display: block;
	padding:15px;
	color:green;
	text-decoration:none;
}

a:hover{
	background:#F4FFE4;
}

.dropdown{
	position:relative;
	
	
}

.dropdown-content{
	display:none;
	position:absolute;
	min-width:100px;
	background:#F4FFE4;
	color:green;
	
	
}
.dropdown:hover .dropdown-content{
	display:block;
	transition: 0.9s ease-in-out;
	transform: scale(0.5%,);
	
	color:#fff;

  
}




.toggle
{
	width:100%;
	padding:10px 20px; 
	background:#333;
	text-align:right;
	box-sizing:border-box;
	color:#fff;
	font-size:20px;
	display:none;
}
@media (max-width:768px) {


	.toggle
	{
		display:block;
	}
nav{
	
	background: rgba(225,225,255,.1);
}
ul
{
	width:100%;
	height:auto;
	overflow:hidden;
	background: rgba(0,0,0,.4);
	box-shadow: 2px 4px 8px 2px  rgba(225,225,255,.4);
	display: none;

}
ul li
{
	display:block;
	margin: 0 auto;
	text-align:center;
	float:none;
}
	

 .menu
{
	display:block;
}



  .navigation
  {  
	
	  background-color:#333;
	  color:#fff;
	  padding:10px;
  }
  .changebg{
	  color: #fff;
	  background: #333;
  }
  .navigation:hover
  {
	  cursor:pointer;
	  background-color:#000;
	  color:#fff;
  }
  
  .dropdown{
overflow:hidden;
  }
  
}

</style>
</head>



<body>

<img src ="mouau.jpg" style ="width:150px; height:130px; float :left;">
 <center>MICHEAL OKPARA UNIVERSITY OF <br >AGRICULTURE UMUDIKE</center> <br>
 
  <nav>
  <div class="toggle">
    <span class="navigation " aria-hidden="true" >&#9776;
	</span>
	</div>
     <ul id="menu">
    
<li><a href =" index.php">Log Out</a></li>
<li class ="dropdown">Check Results<span class= "fa-fa-angle-down">
<ul class="dropdown-content">
  
<li><a href="200firstsemester.php">200 Level</a></li>
<li><a href=" 300level.html">300 Level</a></li>
</ul>
</li>

<li><a href ="2nd.php">First semester </a></li>



  </ul>
  </nav>
 

<br><br>
<P id ="welcome">
WELCOME NWACHUKWU GREEN!!!!<br>CHECK OUT YOUR 300L SECOND SESMESTER RESULT </P>

<div>

<table>
<tr>
<th>COURSE CODES</th>

<th> CREDIT LOADS</th>

<th>GRADE POINT</th>

<th>GRADES</th>
</tr>


<?php

$con = mysqli_connect("localhost","root", "green94") or die("cannot connect to the server");
mysqli_select_db($con,"project")or die("cannot select the database");


$display ="SELECT * FROM 300secondsemester  order by id" ;
$result = mysqli_query($con,$display);

if($result-> num_rows > 0){
while($rows=mysqli_fetch_assoc($result)){
	
	echo "</td><td>". $rows["CourseCodes"]."</td><td>". $rows["CreditLoads"]
	."</td><td>". $rows["GradePoints"]."</td><td>". $rows["Grades"]."</td></tr>";
}
echo"</table>";
}
else{
	echo"no result";
}


?>
</table>
</div>
</body>
</html>

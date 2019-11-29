<?php

include("connect.php");
if(!empty($_POST['name'])){
$username = $_POST['name'];
$password = $_POST['password'];


//to avoid sql injection

//query the database to select the parameters needed

$result=mysql_query("SELECT * from studentlogin where StudentName ='$username' && Password='$password'" )or die("failed to query database".mysql_error());


//fectch parameters from database to the browser
$row = mysql_fetch_array($result);


//check if username and password match or is incorrect
if($row['StudentName'] ==$username && $row['Password'] ==$password){
	echo "login successful!!! welcome ", $row['StudentName'];
	
	//redirect to the page you want the user to log into
	header("location:200firstsemester.php");
	
}else {
echo "failed to login..Wrong username or password";
}	
}

?>


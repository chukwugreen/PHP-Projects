<?php
include("connect.php");
global $con;
if(!empty($_POST['name']) && !empty($_POST['password'])){
$username = $_POST['name'];
$password = $_POST['password'];

//to avoid sql injection

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


//query the database to select the parameters needed
$result =mysql_query("select * from student where StudentName = '$username' && Password ='$password'")
or die ("failed to query database".mysql_error());

//fectch parameters from database to the browser
$row = mysql_fetch_array($result);

//check if username and password match or is incorrect
if($row['StudentName'] ==$username && $row['password'] ==$password){
	echo "login successful!!! welcome ", $row['StudentName'];
	
	//redirect to the page you want the user to log into
	header("location:200firstsemester.php");
	
}else {
echo "failed to login..Invalid details";
}	
}

?>

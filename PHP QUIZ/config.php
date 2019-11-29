<?php
//create database
$host="localhost";
$username="root";
$pasword=" green94";
$db_name="php_quiz";
	
$con = mysqli_connect("localhost","root", "green94") or die("cannot connect to the server");
mysqli_select_db($con,"php_quiz")or die("cannot select the database");
?>
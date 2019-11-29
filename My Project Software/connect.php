<?php

//create database
$host="localhost";
$username="root";
$pasword=" green94";
$db_name="project";

//connect to the database
$con = mysql_connect("localhost","root", "green94") or die("cannot connect to the server");
mysql_select_db("project")or die("cannot select the database");

?>


<?php
include("config.php");
global $con;
if(!empty($_POST['firstname']) && !empty($_POST['lastname'])  && !empty($_POST['Email']) ){
	$fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['Email'];


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 //section validate
 
 
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
  echo "Invalid name, Only letters and white space allowed";
}


if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
  echo "Invalid name, Only letters and white space allowed";
}
 
 

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}


else { 
	
header("location:quiz.php");

		$sql = "INSERT INTO certification(firstname,lastname,Email,dates) VALUES('$fname','$lname','$email',NOW())";

        $res =mysqli_query ($con,$sql);

		if($res){
			echo "message successfully sent";
}else{
	echo "fail to insert";
}

}
}
?>
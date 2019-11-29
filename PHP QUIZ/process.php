<?php
include("config.php");
if(!empty($_POST['answer'])){  
	$answer = $_POST['answer'];
		$answer1 = $_POST['answer1'];
			$answer2 = $_POST['answer2'];
			
	$fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['Email'];
			 
			
  //prevent sql injection
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

			
  $correctAnswer ="";
  $correctAnswer1 ="";
  $correctAnswer2 ="";
  $totalScore="";
  


	$correctAnswer = 10;
	$score="";
	
	if($answer == $correctAnswer){
		$score = 10;
	} else{
		$score= 0;
	}
	
	//question2
	
$answer1 = $_POST['answer1'];
	$correctAnswer1 = 100;
	$score1="";
	
	if ($answer1 == $correctAnswer1){
		$score1 = 10;
	} else{
		$score1= 0;
	}
	
	//question3
	
	$answer2 = $_POST['answer2'];
	$correctAnswer2 = 15;
	$score2="";
	
	if ($answer2 == $correctAnswer2){
		$score2 = 10;
	} else{
		$score2= 0;
	}


	$totalScore = $score + $score1 + $score2;
	
	

 //section validate
 
 
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
  echo "Invalid name, Only letters and white space allowed"."<br>";
}

if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
  echo "Invalid name, Only letters and white space allowed"."<br>";
}
 
 

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}

				
	

	else if($totalScore < 15 ){
		echo "sorry, You failed your certication examination";
		
	} 
		

else if ($totalScore> 15){
	

		$sql = "INSERT INTO successcandidates(firstname,lastname,Email,score,dates) VALUES('$fname','$lname','$email','$totalScore',NOW())";
        $res =mysqli_query ($con,$sql);

		if($res){
			echo "Congratulations $fname $lname!!!"."<br>";
			echo "You passed Your Certification Examination"."<br>";
		
		echo "Your total score is ";
		echo $totalScore."<br>";
		
		echo "Your certificate will be forwarded to your Email ";
		}else{
	echo "fail to insert";
}

}

}

?>


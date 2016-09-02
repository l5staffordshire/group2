<?php
$logNameErr = $logPassErr = "";
$logName = $logPass = "";

//check for request method
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//Check for invalidity
	if (empty($_POST["LOGNAME"])){
		$logNameErr = "Please enter Your name!";
	}
	else {
		$logName = test_form($_POST["LOGNAME"]);
		//check if input contains invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$logName)){
			$logNameErr = "Only letters and whitespace allowed!";
		}
	}
	if (empty($_POST["LOGPASS"])){
		$logPassErr = "Please enter your password!";
	}
	else {
		$logPass = test_form($_POST["LOGPASS"]);
		//check if input contains invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$logPass)){
			$logPassErr = "Only letters and whitespace allowed!";
		}
	}	
}



function test_form($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
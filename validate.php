<?php
$fnameErr = $lnameErr = $dobErr = $prolevErr = $phoneErr = $emailErr = $raddressErr = $postaddressErr = $kfnameErr = $klnameErr = $kinemailErr = $kinphoneErr = $relationshipErr ="";
$fname = $lname = $dob = $prolev = $phone = $email = $raddress = $postaddress = $kfname = $klname = $kinemail = $kinphone = $relationship ="";

//Check if request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//check if input is empty
	if (empty($_POST["FNAME"])){
		$fnameErr = "Please enter Your First name!";
	}
	else {
		$fname = test_form($_POST["FNAME"]);
		//check if input contains invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)){
			$fnameErr = "Only letters and whitespace allowed!";
		}
	}	
	if (empty($_POST["LNAME"])){
		$lnameErr = "Please enter Your Last name!";
	}
	else {
		$lname = test_form($_POST["LNAME"]);
		//check for invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)){
			$lnameErr = "Only letters and whitespace allowed!";
		}
	}	
	if (empty($_POST["DOB"])){
		$dobErr = "Please enter Your date of birth!";
	}
	else {
		$dob = test_form($_POST["DOB"]);
	}
	if (empty($_POST["PROLEV"])){
		$prolevErr = "Please enter Your Program Level!";
	}
	else {
		$prolev = test_form($_POST["PROLEV"]);
	}
	if (empty($_POST["PHONE"])){
		$phnoneErr = "Please enter Your Phone number!";
	}
	else {
		$phone = test_form($_POST["PHONE"]);
		//Check for numeric validity
		if (!filter_var($phone, FILTER_VALIDATE_INT) === false){
			$phone = "Please enter numeric characters!";
		}
	}
	if (empty($_POST["EMAIL"])){
		$emailErr = "Please enter Your email!";
	}
	else {
		$email = test_form($_POST["EMAIL"]);
		//check if email format is valid
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid Email format!";
		}
	}
	if (empty($_POST["RADDRESS"])){
		$raddressErr = "Please enter Your Residential address!";
	}
	else {
		$raddress = test_form($_POST["RADDRESS"]);
		//check for invalid characters
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$raddress)){
			$raddressErr = "Only letters and numbers allowed!";
		}
	}
	if (empty($_POST["POSTADDRESS"])){
		$postaddressErr = "Please enter Your Postal address!";
	}
	else {
		$postaddress = test_form($_POST["POSTADDRESS"]);
		//check for invalid characters
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$postaddress)){
			$postaddressErr = "Only letters and numbers allowed!";
		}
	}
	
	
	//Next of Kin Details
	if (empty($_POST["KFNAME"])){
		$kfnameErr = "Please enter the name!";
	}
	else {
		$kfname = test_form($_POST["KFNAME"]);
		//check for invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$kfname)){
			$kfnameErr = "Only letters and whitespace allowed!";
		}
	}
	if (empty($_POST["KLNAME"])){
		$klnameErr = "Please enter the name!";
	}
	else {
		$klname = test_form($_POST["KLNAME"]);
		//check for invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$klname)){
			$klnameErr = "Only letters and whitespace allowed!";
		}
	}
	if (empty($_POST["KINEMAIL"])){
		$kinemailErr = "Please enter the email!";
	}
	else {
		$kinemail = test_form($_POST["KINEMAIL"]);
		//check email validity
		if (!filter_var($kinemail,FILTER_VALIDATE_EMAIL)){
			$kinemailErr = "Invalid Email format!";
		}
	}
	if (empty($_POST["KINPHONE"])){
		$kinphoneErr = "Please enter the phone number!";
	}
	else {
		$kinphone = test_form($_POST["KINPHONE"]);
		//Check for numeric validity
		if (!filter_var($kinphone, FILTER_VALIDATE_INT) === false){
			$kinphoneErr = "Please enter numeric characters!";
		}
	}
	if (empty($_POST["RELATIONSHIP"])){
		$relationshipErr = "Please specify the relationship!";
	}
	else {
		$relationship = test_form($_POST["RELATIONSHIP"]);
		//check for invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$relationship)){
			$relationshipErr = "Only letters and whitespace allowed!";
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
<?php
	require_once 'database.php';
	session_start();
	
	$salt1 = "@€‹£";
	$salt2 = "™¢¶∞";
	
	function queryDB($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		return $result;
	}
	
	
	
	
	/*
	 * Login
	 */
	if(isset($_POST['emailLogin']) && isset($_POST['passwordLogin']) && !empty($_POST['emailLogin']) && !empty($_POST['passwordLogin'])){
		$email = sanitizeString($_POST['emailLogin']);
		$pass = sanitizeString($_POST['passwordLogin']);
		
		$pass = hash('ripemd128', $salt1.$pass.$salt2 );
		$query = "SELECT * FROM user WHERE password='$pass' AND email='$email' ";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result) == 0){
			echo"<span id='noMatch'>Incorrect email and password combination. <a href='/rookie'>Try again</a></span";
			die("0");
		}
			
		
		else{
			//die("1");
			$_SESSION['mail'] = $email;
			header("location:session.php");
		}
			
	}
	
	/*
	 * Sign Up
	 */
	if( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password']) && isset($_POST['email']) ){
			 	
			 	$email = sanitizeString($_POST['email']);
			 	$password = sanitizeString($_POST['password']);
			 	$firstname = sanitizeString($_POST['firstname']);
			 	$lastname = sanitizeString($_POST['lastname']);
			 	$phone = sanitizeString($_POST['phone']);
			 	$gender = sanitizeString($_POST['gender']);
			 	$progLevel = sanitizeString($_POST['progLevel']);
			 	$address = sanitizeString($_POST['address']);
			 	$addressPostal = sanitizeString($_POST['addressPostal']);
			 	$dob = sanitizeString($_POST['dob']);
			 	
			 	$kinname = sanitizeString($_POST['kinname']);
			 	$kinmail = sanitizeString($_POST['kinmail']);
			 	$kinphone = sanitizeString($_POST['kinphone']);
			 	$relationship = sanitizeString($_POST['relationship']);
			 	
			 	$password = hash('ripemd128', $salt1.$password.$salt2 );
			 	
			 	$query = "INSERT INTO user VALUES('$firstname','$lastname','$dob','$email','$password','$gender','$progLevel',
			 			'$phone','$address','$addressPostal')";
			 	$result = mysqli_query($conn, $query);
			 	
			 	$query = "INSERT INTO nextOfKin VALUES('$email','$kinname','$kinphone','$kinmail','$relationship')";
			 	$result2 = mysqli_query($conn, $query);
			 	
			 	if($result && $result2 ){
			 		echo "1";
			 		$_SESSION['mail'] = $email;
			 		header("location:session.php");
			 	}
			 		
			 	else {
			 		echo "<span>Sign Up failed. <a href='/rookie'>Try again</a></span>";
			 		echo "0";
			 	}
			 		
			 	
	}
	
	
	
?>
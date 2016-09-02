<?php 
require_once 'database.php';
session_start();

$changed = false;
$deleted = true;
/*
 * Logging Out
 */
if(isset($_GET['logout'])){
	$_SESSION=array();
	session_destroy();
	
}

/*
 * Deleting Account
 */
if(isset($_GET['delete'])){
	

	$email = $_SESSION['mail'];
	$query = "DELETE FROM user WHERE email='$email' ";
	$result = mysqli_query($conn, $query);

	$query = "DELETE FROM nextOfKin WHERE userMail='$email' ";
	$result2 = mysqli_query($conn, $query);

	if($result){
		$deleted = true;
		$_SESSION=array();
		session_destroy();
		header("location:/rookie");
	}
		
	else 
		$deleted = false;
}

	if(!isset($_SESSION['mail']))
		header("location:/rookie");
	
		
		/*
		 * Update
		 */
		if( isset($_POST['upfirstname']) && isset($_POST['lastname'])){
				
			$email = sanitizeString($_SESSION['mail']);
			$firstname = sanitizeString($_POST['upfirstname']);
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
				
				
			$query = "UPDATE user SET firstname = '$firstname',lastname = '$lastname',dob='$dob',
				gender='$gender',programLevel='$progLevel',phoneNumber='$phone',residentialAddress='$address',postalAddress='$addressPostal'
			WHERE email = '$email'";
			$result = mysqli_query($conn, $query);
				
			$query = "UPDATE nextOfKin SET name ='$kinname',phone='$kinphone',email='$kinmail',relationship='$relationship'";
			$result2 = mysqli_query($conn, $query);
				
			if($result && $result2 ){
				$changed = true;
				
			}
		
			else {
				$changed = false;
			}
		
				
		}// if
		
	$email = $_SESSION['mail'];
	
	$query = "SELECT * FROM user WHERE email='$email' ";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['firstname']." ".$row['lastname'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$phone = $row['phoneNumber'];
		$address = $row['residentialAddress'];
		$programLevel = $row['programLevel'];
		$dob = $row['dob'];
		$adPostal = $row['postalAddress'];
		$gender = $row['gender'];
	}
	
	$query = "SELECT * FROM nextOfKin WHERE userMail='$email' ";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		$kinname = $row['name'];
		$kinphone = $row['phone'];
		$kinmail = $row['email'];
		$rel = $row['relationship'];
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $name; ?></title>

	<link rel='stylesheet' type='text/css' href='rookie.css'>
	
	<script type="text/javascript" src="rookie.js"></script>
	
</head>
<body>

	<h1>Welcome <?php echo $name; ?></h1>
	<div> You can view your details and edit them here. <a href='?logout'>Logout</a> </div><br>
	
	<form id='signUp' method='post' action='session.php'>
		
		<label>Personal Information </label><?php if($changed) echo "<span id='changes'>Changes saved</span>";?>
		<?php if(!$deleted) echo "<span id='deleted'>Account Deletion failed</span>";?><br>
		<input type='text' id='firstname' name='upfirstname' placeholder='first name' required value='<?php echo $firstname; ?>'>
		<input type='text' id='lastname' name='lastname' placeholder='last name' required value='<?php echo $lastname; ?>'>
		<input type='email' id='email' name='email' placeholder='email' required disabled value='<?php echo $email; ?>'>
		<input type='number' id='phone' name='phone' placeholder='phone number' minlength='10' required value='<?php echo $phone; ?>'>
		
		
		<input type='date' id='dob' name='dob' placeholder='date of birth(yy-mm-dd)' required value='<?php echo $dob; ?>'>
		<input type='number' id='progLevel' name='progLevel' placeholder='program Level' min='4' max='400' required value='<?php echo $programLevel; ?>'>
		
		<input type='text' id='address' name='address' placeholder='residential address' required value='<?php echo $address; ?>'>
		<input type='text' id='addressPostal' name='addressPostal' placeholder='postal address' required value='<?php echo $adPostal; ?>'><br>
		<select id='gender' name='gender' required value='<?php echo $gender; ?>'>
			<option value='male'>male</option>
			<option value='female'>female</option>
		</select>
		<br><br>
		<label>Next Of Kin</label>
		<br>
		<input type='text' id='kinname' name='kinname' placeholder='name' required value='<?php echo $kinname; ?>'>
		<input type='email' id='kinmail' name='kinmail' placeholder='email' required value='<?php echo $kinmail; ?>'>
		<input type='phone' id='kinphone' name='kinphone' placeholder='phone number' required value='<?php echo $kinphone; ?>'>
		<input type='text' id='relationship' name='relationship' placeholder='relationship' required value='<?php echo $rel; ?>'>
		<br>
		<button id='signSubmit' type='submit'>Save Changes</button><br><br>
		
		
		
 	</form>

		<button id='delete' onclick='View()'>Delete Account</button>
		<div id='sure'>
			<label>Are you sure you want to delete your account?</label><br>
			<a href='?delete'><button id='yes'>Yes</button></a>
			<button id='no' onclick='No()'>No</button>
		</div>
		
</body>
</html>
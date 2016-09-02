<?php
$host="localhost";
$user="root";
$password="";
$database = "rookie";
$conn = mysqli_connect($host, $user, $password, $database);

function sanitizeString($var)
{
	global $conn;
	$var = strip_tags($var);
	$var = htmlentities($var);
	$var = stripslashes($var);
	$var = trim($var);
	return $conn->real_escape_string($var);
}// end sanitizeString

if (mysqli_connect_errno($conn)) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
else{
	//echo 'Connection Successful';
}

?>

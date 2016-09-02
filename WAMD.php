<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-with initial-scale=1.0">
	<!--<link rel="stylesheet" href="CSS\Menu.css" type="text/css">-->
    <link rel="stylesheet" href="CSS\bootstrap.min.css" type="text/css">
	<title>WAMD &bull; Register</title>
    
</head>

<body>

<header>
<div class="jumbotron">
<div class="container">
<center><h1>The Mysterious CRUD Project</h1></center>
</div>
</div>
</header>

<!-- Our Sexy looking tab -->
<div class="container well">
<ul class="nav nav-tabs nav-justified">
<li class="active"><a href="#" data-toggle="tab">Register</a></li>
<li><a href="login.php" data-toggle="tab">Login</a></li>
<li><a href="#Update" data-toggle="tab">Update Records</a></li>
<li><a href="#Delete" data-toggle="tab">Delete Records</a></li>
</ul>
</div>
<!--------------------------------------------------->



<!-- Form Stuff Below -->
<div class="container well">

<form class="" action="validate.php" method="post">
<div class="row form-group">

<div class="col-sm-6">
<legend>Personal Information</legend>
<label>First Name</label>			<br>
<input type="text" class="form-control" name="FNAME" placeholder="First Name" required>	<br>
<label>Last Name</label>			<br>
<input type="text" class="form-control" name="LNAME" placeholder="Last Name" required>	<br>
<label>Password</label>						<br>
<input type="password" class="form-control" name="PASSWORD" placeholder="Password" required> <br>
<label>Confrim Password</label>		<br>
<input type="password" class="form-control" name="CPASSWORD" placeholder="Confirm Password" required> <br>
<label>Date of Birth</label>		<br>
<input type="date" class="form-control" name="DOB" required>		<br>
<label>Program Level</label>		<br>
<input type="number" class="form-control" min="4" max="6" name="PROLEV" placeholder="Select your current level">	<br>
<label>Phone Number</label>			<br>
<input type="text" class="form-control" name="PHONE" placeholder="Phone Number" required>	<br>
<label>Email Address</label>		<br>
<input type="text" class="form-control" name="EMAIL" placeholder="Email Address" required>	<br>
<label>Residential Address</label>	<br>
<input type="text" class="form-control" name="RADDRESS" placeholder="Residential Address" required>	<br>
<label>Postal Address</label>		<br>
<input type="text" class="form-control" name="POSTADDRESS" placeholder="Postal Address" required><br>
</div>

<div class="col-sm-6">
<legend>Next of Kin Information</legend>
<label>First Name</label>					<br>
<input type="text" class="form-control" name="KFNAME" placeholder="First Name" required>	<br>
<label>Last Name</label>					<br>
<input type="text" class="form-control" name="KLNAME" placeholder="Last Name" required>	<br>
<label>Email Address</label>		<br>
<input type="text" class="form-control" name="KINEMAIL" placeholder="Email Address" required>	<br>
<label>Phone Number</label>			<br>
<input type="text" class="form-control" name="KNIPHONE" placeholder="Phone Number" required>	<br>
<label>Relationship</label>			<br>
<input type="text" class="form-control" name="RELATIONSHIP" placeholder="father, mother, etc" required>	<br>
<input type="submit" class="btn btn-primary" value="Submit">
</div>

</form>
</div>
</div>
<!-- Form Stuff Above -->


<footer>
<div class="jumbotron">
<center><h6>Created by EJA Staff &copy; | Copyright <?php echo date("Y"); ?></h6></center>
</div>
</footer>

</body>
</html>

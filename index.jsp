



<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%String displayName = (String) session.getAttribute("name");%>
<%! 
    public String setUserName (String name)
        {
            if (name == null){
                return("");
            } else {
                return("Welcome, " + name);
            }
    }
%>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS\bootstrap.min.css" type="text/css">
    <title>Human Resource</title>
    
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row well">
                <div class="col-xs-2 col-xs-offset-10">
                    <button type="button" class="btn btn-default">
                        <span><%=setUserName(displayName)%></span>
                    </button>
                </div>
            </div>
        </div>
<header>
<div class="jumbotron">
<div class="container well">
<center><h2>The Human Resource System</h2></center>
<center><h4>Register</h4></center>
</div>
</div>
</header>

<!-- Our Sexy looking tab -->
<div class="container well">
<ul class="nav nav-tabs nav-justified">
<li class="active"><a href="#" data-toggle="tab">Register</a></li>
<li><a href="list.jsp" data-toggle="tab">List</a></li>
<li><a href="update.jsp" data-toggle="tab">Update</a></li>
</ul>
</div>
<!--------------------------------------------------->



<!-- Form Stuff Below -->
<div class="container well">

<form action="show.jsp" method="post">
<div class="row form-group">

<div class="col-sm-4">
<legend>Personal Information</legend>
<label>First Name</label>			<br>
<input type="text" class="form-control" name="FNAME" placeholder="First Name" >	<br>
<label>Middle Name</label>			<br>
<input type="text" class="form-control" name="MNAME" placeholder="Middle Name" >	<br>
<label>Last Name</label>			<br>
<input type="text" class="form-control" name="LNAME" placeholder="Last Name" >	<br>
<label>Password</label>				<br>
<input type="password" class="form-control" name="PASSWORD" placeholder="Password" > <br>
<label>Confirm Password</label>		<br>
<input type="password" class="form-control" name="CPASSWORD" placeholder="Confirm Password" > <br>
<label>Date of Birth</label>		<br>
<input type="date" class="form-control" name="DOB" >		<br>
<label>
<input type="radio" name="Gender" value="M" id="Gender_1"> Male</label>
<label>
<input type="radio" name="Gender" value="F" id="Gender_2"> Female</label>	<br>
</div>

<div class="col-sm-4">

<legend>Contact Information</legend>
<label>Phone Number</label>			<br>
<input type="text" class="form-control" name="PHONE" placeholder="Phone Number" >	<br>
<label>Email Address</label>		<br>
<input type="email" class="form-control" name="EMAIL" placeholder="Email Address" >	<br>
<label>Residential Address</label>	<br>
<input type="text" class="form-control" name="RADDRESS" placeholder="Residential Address" >	<br>
<label>Postal Address</label>		<br>
<input type="text" class="form-control" name="POSTADDRESS" placeholder="Postal Address" ><br>
</div>

<div class="col-sm-4 ">
<legend>Employment Information</legend>
<label>Employment Duration</label>			<br>
<input type="text" class="form-control" name="DURATION" placeholder="How many years?..." >	<br>
<label>Staff Type</label>			<br>
<input type="text" class="form-control" name="STAFF_TYPE" placeholder="" >	<br>
<label>Department</label>			<br>
<input type="text" class="form-control" name="DEPARTMENT" placeholder="Department" >	<br>
<label>Rank</label>			<br>
<input type="text" class="form-control" name="RANK" placeholder="Rank" >	<br>
</div>

</div>
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<center><input type="submit" class="btn btn-primary" value="Submit"></center>
</div>
</div>
</form>
</div>
<!-- Form Stuff Above -->

<footer>
<div class="jumbotron">
<center><h6>Created by EJAM Staff &copy; | Copyright 2016</h6></center>
</div>
</footer>
</div>
                        
                        

</html>


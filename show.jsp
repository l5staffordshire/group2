

<%@page contentType="text/html" pageEncoding="UTF-8"%>
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
<% 
    String fname = request.getParameter("FNAME");
    session.setAttribute("name",fname);
    String displayName = (String) session.getAttribute("name");
%>
<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-with initial-scale=1.0">
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
<center><h4>List of Information</h4></center>
</div>
</div>
</header>

<!-- Our Sexy looking tab -->
<div class="container well">
<ul class="nav nav-tabs nav-justified">
<li><a href="index.jsp" data-toggle="tab">Register</a></li>
<li class="active"><a href="#" data-toggle="tab">List</a></li>
<li><a href="update.jsp" data-toggle="tab">Update</a></li>
</ul>
</div>
<!--------------------------------------------------->

<div class="container">
<div class="panel panel-default panel-primary">
<div class="panel-heading"><center><h3 class="panel-title">Personal Information</h3></center></div>
<div class="panel-body">
<table class="table table-responsive table-striped">
<tr>
<th>First name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Date of Birth</th>
</tr>
<tr>
    <td><%=request.getParameter("FNAME")%></td>
    <td><%= request.getParameter("MNAME")%></td>
    <td><%= request.getParameter("LNAME")%></td>
    <td><%= request.getParameter("DOB")%></td>
</tr>
</table>
</div>
</div>

<div class="panel panel-default panel-primary">
<div class="panel-heading"><center><h3 class="panel-title">Contact Information</h3></center></div>
<div class="panel-body">
<table class="table table-responsive table-striped">
<tr>
<th>Phone Number</th>
<th>Email Address</th>
<th>Residential Address</th>
<th>Postal Address</th>
</tr>
<tr>
    <td><%= request.getParameter("PHONE")%></td>
    <td><%= request.getParameter("EMAIL")%></td>
    <td><%= request.getParameter("RADDRESS")%></td>
    <td><%= request.getParameter("POSTADDRESS")%></td>
</tr>


</table>
</div>
</div>

<div class="panel panel-default panel-primary">
<div class="panel-heading"><center><h3 class="panel-title">Employment Information</h3></center></div>
<div class="panel-body">
<table class="table table-responsive table-striped">
<tr>
<th width="25%">Employment Duration</th>
<th width="25%">Type of Staff</th>
<th width="25%">Department</th>
<th width="25%">Rank</th>
</tr>
<tr>
    <td><%= request.getParameter("DURATION")%></td>
    <td><%= request.getParameter("STAFF_TYPE")%></td>
    <td><%= request.getParameter("DEPARTMENT")%></td>
    <td><%= request.getParameter("RANK")%></td>
</tr>
</table>
</div>
</div>


</div>

<footer>
<div class="jumbotron">
<center><h6>Created by EJAM Staff &copy; | Copyright 2016</h6></center>
</div>
</footer>

</div>




</body>
</html>



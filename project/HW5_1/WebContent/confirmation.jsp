<%@page import = "java.util.Date" %>
<% 
	String workoutName = request.getParameter("workoutName");
%>
<!DOCTYPE html>
<!-- This is the login page for returning users to view their past workouts -->
<html>
<head>
    <title>WorkOut Buddy</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main1.css"/>
    <link rel="icon" href="../../favicon.ico">
</head>
<body>
<!-- navigation bar added used bootstrap -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">Fitness Buddy</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="" onclick="goBack();">Back</a></li>
            <li><a href="index.html">Home</a></li>
            <li ><a href="index.jsp">Login</a></li>
            <li class="active"><a href="workout.html">Start a Workout</a></li>
        </ul>
    </div>
</nav></br></br></br></br>
 <center>
 	<h1> You completed <%= workoutName %> at <%= new Date() %></h1>
 </center>

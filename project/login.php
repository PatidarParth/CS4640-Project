<!DOCTYPE html>
<!-- This is the login page for returning users to view their past workouts -->
<html>
<head>
    <title>WorkOut Buddy</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main1.css"/>
    <link rel="icon" href="../../favicon.ico">
    <script>
        // function to add back function
        function goBack() {
            window.history.go(-1);
        }
    </script>
</head>
<body>
  <?php

         if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form

            $myemail = $_POST["inputEmail"];
            $mypassword = $_POST["password"];

         }
      ?>

<!-- navigation bar added used bootstrap -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">Fitness Buddy</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="" onclick="goBack();">Back</a></li>
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="login.html">Login</a></li>
            <li><a href="workout.html">Start a Workout</a></li>
        </ul>
    </div>
</nav>
<!--login username and password is set here using bootstrap -->

<div class="container"></br>
    <h2 class="text-center">  Welcome to Workout Buddy</h2>
    <h4 class="text-center">Your email address is: <?php echo $myemail?></h4></br>
</div> <!-- /container -->

<!-- footer added using bootstrap -->
<footer class="footer-bs">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <h2>Fitness Buddy</h2>
            <p>Track your workouts here</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">

            <div class="col-md-6">
                <ul class="list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="workout.html">Workout</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

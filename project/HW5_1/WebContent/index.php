<!DOCTYPE html>
<html>
<head>
<title>PHP Function Example: Returning values</title>
</head>
<body>
<?php


alert("Lets Start the Workout");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg')</script>";
}

?>
<!DOCTYPE html>
<!-- This is the home page that introduces our site -->
<html>
<head>
    <title>WorkOut Buddy</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="main1.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

        // function to add back function
        function goBack() {
            window.history.go(-1);
        }
    </script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">Fitness Buddy</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="" onclick="goBack();">Back</a></li>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="index.jsp">Login</a></li>
            <li><a href="workout.html">Start a Workout</a></li>
        </ul>
    </div>
</nav>

<!--image background modal is set up here -->

<img id='mainImage' src="images/main.jpg" alt="main" width=100% height=75%>

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
                    <li><a href="index.jsp">Login</a></li>
                    <li><a href="workout.html">Workout</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
</body>
</html>

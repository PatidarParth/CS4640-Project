<!DOCTYPE html>
<!-- This page allows the user to begin building their workout by selecting the
areas that they want to work on -->
<html>
<head>
  <title>WorkOut Buddy</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- adding bootstrap and the css page here -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="main1.css" />
  <script language="JavaScript">
  //function to check how many boxed where selected-
  function handleChange(checkbox) {
	    if(checkbox.checked == true){
	    	var value = parseInt(document.getElementById("numselected").innerHTML);
	    	value++;
	    	document.getElementById("numselected").innerHTML = value.toString();
	    }else{
	    	var value = parseInt(document.getElementById("numselected").innerHTML);
	    	value--;
	    	document.getElementById("numselected").innerHTML = value.toString();
	   }
	}
  // function to add back function
  function goBack() {
	    window.history.go(-1);
	}
  </script>
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
      <li ><a href="index.html">Home</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="workout.html">Start a Workout</a></li>
      <li class="active"><a href="workout.php">Your Workout</a></li>
    </ul>
  </div>
</nav>

<!--image background and table added to figure out what body part you are working out -->

<div class="image" >
  <?php
   if (isset( $_POST["core"])) { ?>
     <div class="form" id="core" style="display;">
         <h2 class="text-center">Core Strength</h2></header>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["flexibility"])) { ?>
     <div class="form" id="flexibility" style="display;">
         <h2 class="text-center">Flexibility</h2></header>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["back"])) { ?>
     <div class="form" id="back" style="display;">
         <h2 class="text-center">Back</h2></header>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["cardio"])) { ?>
     <div class="form" id="cardio" style="display;">
         <h2 class="text-center">Cardio</h2></header>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["arm"])) { ?>
     <div class="form" id="arm" style="display;">
         <h2 class="text-center">Arms</h2></header>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["leg"])) { ?>
     <div class="form" id="leg" style="display;">
         <h2 class="text-center">Legs</h2></header>
       </div>
  <?php } ?>
      <h2 id="WorkoutFont">Number of exercises selected:</h2><p id="numselected">0</p>
      <button id="signin" class="btn btn-primary center-block" type="submit">Completed</button>
</div>


<!-- footer added using bootstrap -->

</br>
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

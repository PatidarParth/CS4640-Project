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
  $choices = array();
   if (isset( $_POST["core"])) {
     array_push($choices, $_POST["core"]);
     ?>
     <div class="form" id="core" style="display;">
         <h2 class="text-center">Core Strength</h2></header>
         <p class="text-center"><input name= "twists" type="checkbox" value="twists" onclick='handleChange(this);'> 1 minute Russian Twists<br>
         <input name= "crunches" type="checkbox" value="crunches" onclick='handleChange(this);'> 1 minute crunches<br>
         <input name= "plank" type="checkbox" value="plank" onclick='handleChange(this);'> 1 minute plank<br>
         <input name= "scissor" type="checkbox" value="scissor" onclick='handleChange(this);'> 30 second scissor kicks<br>
         <input name= "vups" type="checkbox" value="vups" onclick='handleChange(this);'> 20 V-Ups<br>
         </p>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["flexibility"])) {
     array_push($choices, $_POST["flexibility"]);
     ?>
     <div class="form" id="flexibility" style="display;">
         <h2 class="text-center">Flexibility</h2></header>
                  <p class="text-center"><input name= "side" type="checkbox" value="side" onclick='handleChange(this);'> Standing Side Stretch<br>
         <input name= "hang" type="checkbox" value="hang" onclick='handleChange(this);'> Forward Hang<br>
         <input name= "arch" type="checkbox" value="arch" onclick='handleChange(this);'> Low Lunge Arch<br>
         <input name= "backtwist" type="checkbox" value="backtwist" onclick='handleChange(this);'> Seated Back Twist<br>
         <input name= "hipflexor" type="checkbox" value="hipflexor" onclick='handleChange(this);'> Hip Flexor Stretch<br>
         <input name= "calf" type="checkbox" value="calf" onclick='handleChange(this);'> Calf Stretch</p>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["back"])) {
     array_push($choices, $_POST["back"]);
      ?>
     <div class="form" id="back" style="display;">
         <h2 class="text-center">Back</h2></header>
		         <p class="text-center"><input name= "snow" type="checkbox" value="snow" onclick='handleChange(this);'>1 min Reverse Snow Angels<br>
         <input name= "dolphin" type="checkbox" value="dolphin" onclick='handleChange(this);'>30 sec Dolphin Kick<br>
         <input name= "superman" type="checkbox" value="superman" onclick='handleChange(this);'>30 sec Superman<br>
         <input name= "hip" type="checkbox" value="hip" onclick='handleChange(this);'>15 Hip Hinges<br>
         <input name= "pullup" type="checkbox" value="pullup" onclick='handleChange(this);'> 5 Pull-Ups</p>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["cardio"])) {
     array_push($choices, $_POST["cardio"]);
      ?>
     <div class="form" id="cardio" style="display;">
         <h2 class="text-center">Cardio</h2></header>
         <p class="text-center"><input name= "mountain" type="checkbox" value="mountain" onclick='handleChange(this);'> 30 sec Mountain Climbers<br>
         <input name= "highknees" type="checkbox" value="highknees" onclick='handleChange(this);'> 1 min High Knees<br>
         <input name= "jack" type="checkbox" value="jack" onclick='handleChange(this);'> 30 Jumping Jacks<br>
         <input name= "burpee" type="checkbox" value="burpee" onclick='handleChange(this);'> 10 Burpees<br>
         <input name= "stepup" type="checkbox" value="stepup" onclick='handleChange(this);'> 1 min Step-Up</p>
         
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["arm"])) {
     array_push($choices, $_POST["arm"]);
      ?>
     <div class="form" id="arm" style="display;">
         <h2 class="text-center">Arms</h2></header>
         <p class="text-center"><input name= "pulse" type="checkbox" value="pulse" onclick='handleChange(this);'> 30 sec Single Chest Press Pulse<br>
         <input name= "circles" type="checkbox" value="circles" onclick='handleChange(this);'> 30 sec Arm Circles<br>
         <input name= "tricep" type="checkbox" value="tricep" onclick='handleChange(this);'> 20 Tricep Dips<br>
         <input name= "pushup" type="checkbox" value="pushup" onclick='handleChange(this);'> 10 Pushups<br>
         <input name= "dog" type="checkbox" value="dog" onclick='handleChange(this);'> 1 min Downward Dog</p>
       </div>
  <?php } ?>
  <?php
   if (isset( $_POST["leg"])) {
     array_push($choices, $_POST["leg"]);
     ?>
     <div class="form" id="leg" style="display;">
         <h2 class="text-center">Legs</h2></header>
         <p class="text-center"><input name= "squat" type="checkbox" value="squat" onclick='handleChange(this);'> 30 Squats<br>
         <input name= "fire" type="checkbox" value="fire" onclick='handleChange(this);'> 30 sec Fire Hydrant<br>
         <input name= "lunges" type="checkbox" value="lunges" onclick='handleChange(this);'> 30 Lunges<br>
         <input name= "wallsit" type="checkbox" value="wallsit" onclick='handleChange(this);'> 1 min Wall Sit<br>
         <input name= "butt" type="checkbox" value="butt" onclick='handleChange(this);'> 30 Butt Lifts</p>
       </div>
  <?php } ?>
    <h2 id="WorkoutFont">Focusing on: <?php echo implode(", ", $choices)?></h2>
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

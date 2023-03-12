<!DOCTYPE html>
<html>
<body>

<link href="../SmallTownSteam/css/bootstrap.css" rel="stylesheet">
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
    <div id="header">
	</div>
    </header>
          


<?php

$track = $_POST["track"];
$course = $_POST["course"];
#$month = $_POST["month"];
$date = $_POST["date"];
#$year = $_POST["year"];


#echo $track;
#echo $date;
#echo $course;

?>
 <div class="p-5 mb-4 text-bg-light rounded-3">
    <div class="container-fluid py-5">
   <h1 class="displa-5 fwy-bold"><p style="color:white">Registration Form</h1></p>
  <p style="font-size:25px"><p style="color:white">Thank you for your interest in the <?php echo $track; ?> course titled <?php echo $course; ?> on <?php echo $date; ?>. Please fill out the following form to register for the course!
  <form action="confirm_registration.php" method="post">
  <p style="font-size:17px"> <p style="color:white"> Full Name: <input type="text" name="name"><br> </p></p>
  <p style="font-size:17px"><p style="color:white"> E-mail:‎ ‎ ‎ ‎ ‎ ‎ ‎  <input type="text" name="email"><br> </p></p>
    <input type="hidden" name="track" value='<?php echo "$track";?>'>
    <input type="hidden" name="course" value='<?php echo "$course";?>'>
    <input type="hidden" name="date" value='<?php echo "$date";?>'>
    <input type="submit">
  </form>
</p></p></p>
 </div>
 </div>


</body>
</html>

<div id="footer">
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
	<script>$(function(){
  		$("#header").load("navBar.html");
                $("#footer").load("footer.html");
		}); 
	</script>


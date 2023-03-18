<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Register for Class</title>
<link rel="icon" type="image/x-icon" href="icon.png">
</head>
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
   <h1 class="displa-5 fwy-bold"><p style="color:white"> Registration Form </h1></p>
   <p style="color:white;font-size:25px;">Thank you for your interest in the SmallTown Steam <?php echo $track ?> track! <?php echo $course?>.</p>
   <p style="color:white;font-size:25px;">You are registering for the course titled "<?php echo $course?>". </p>
   <p style="color:white;font-size:25px;">This course will take place on <?php echo $date ?>. </p>
   <p style="color:white;font-size:25px;">Please fill out the short form below to sign up for the course! </p>
  <form action="confirm_registration.php" method="post">
  <p style="color:white;font-size:17px;"> Full Name: <input type="text" name="name"><br></p>
  <p style="color:white;font-size:17px;"> E-mail:‎ ‎ ‎ ‎ ‎ ‎ ‎  <input type="text" name="email"><br></p>
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


<!DOCTYPE html>
<html>

<head>
<title>Confirm Registration</title>
<link rel="icon" type="image/x-icon" href="icon.png">
<link href="../SmallTownSteam/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom"> 
    <div id="header">
	</div>
    </header>
<?php  
?>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$track = $_POST["track"];
$course = $_POST["course"];
$date = $_POST["date"];


$attendee_detail = "$name===$email \n";
$filename = "$track-$date.txt";
?>

<div class="p-5 mb-4 text-bg-light rounded-3">
    <div class="container-fluid py-5">
   <h1 class="displa-5 fwy-bold"><p style="color:white">Thank You for <?php echo $name; ?> Registering!</h1></p>
   <h1 class="display-6"><p style="color:white"> Your registration for the <?php echo $course; ?> on <?php echo $date; ?> has been processed. You will receive a confirmation email at <?php echo $email; ?></p></p>
</div>
</div>

<?php
#$attendee = $thisname;
$filename = "classes_and_registration/$track-$date.txt";
$channel = fopen($filename, "a");
fwrite($channel, $attendee_detail);
fclose($channel);

?>
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



</body>
</html>
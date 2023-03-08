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
?>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$track = $_POST["track"];
$course = $_POST["course"];
$date = $_POST["date"];

$attendee_detail = "$name===$email \n";
$filename = "$track-$date.txt";


$filename = "classes_and_registration/$track-$date.txt";
echo "Thank you $name for registering for the $course on $date. You will receive a confirmation email at $email";


#$attendee = $thisname;

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
<html>
<body>
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




</body>
</html>
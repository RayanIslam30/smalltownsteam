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

#echo $date;
echo $filename;
echo $attendee_detail;
#echo " is the file we will write to"


#$attendee = $thisname;

$channel = fopen($filename, "a");
fwrite($channel, $attendee_detail);
fclose($channel);

?>




</body>
</html>
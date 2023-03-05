



<!DOCTYPE html>
<html>
<body>


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

Thank you for your interest in the <?php echo $track; ?> couser titled <?php echo $course; ?> on <?php echo $date; ?>... Please fill out the following form to register for the course

<form action="confirm_registration.php" method="post">
    Full Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="hidden" name="track" value='<?php echo "$track";?>'>
    <input type="hidden" name="course" value='<?php echo "$course";?>'>
    <input type="hidden" name="date" value='<?php echo "$date";?>'>
    <input type="submit">
  </form>


</body>
</html>


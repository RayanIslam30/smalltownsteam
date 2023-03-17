<!DOCTYPE html>
<html>
<head>
<title>Add Class</title>
<link rel="icon" type="image/x-icon" href="icon.png">
<link href="../SmallTownSteam/css/bootstrap.css" rel="stylesheet">
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom"> 
    <div id="header">
	</div>
    </header>
</head>
<body>

<?php
$track = $_POST["track"];
$date = $_POST["date"];
$title = $_POST["title"]; 
?>
 <div class="p-5 mb-4 text-bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><p style="color:white">Course to Be Added</h1></p>
        <p style="font-size:40px"><p style="color:white"> <?php echo "A $track course, on $date, titled $title." ?></p></p>
		<form action="classes_and_registration/upcoming-classes.php" method="post">
	    <input type="hidden" name="track" value='<?php echo "$track";?>'>
    <input type="hidden" name="title" value='<?php echo "$title";?>'>
    <input type="hidden" name="date" value='<?php echo "$date";?>'>
    <input type="submit" name="Confirm New Class">
</form>

      </div>
    </div>
<p id="newcourse"><?php echo $track?>===<?php echo $date?>===<?php echo $title?></p> 
<script>
let str = document.getElementById("newcourse").innerHTML; 
let res = str.replace(/-/g, "===");
document.getElementById("newcourse").innerHTML = res;
</script>

<?php
$newcourse = $_POST["newcourse"];
echo $newcourse;
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
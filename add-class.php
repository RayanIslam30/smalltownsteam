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
$month = $_POST["month"];
$date = $_POST["date"];
$year = $_POST["year"];
$title = $_POST["title"]; 
$newcourse = "$track===$month===$date===$year===$title"

?>


 <div class="p-5 mb-4 text-bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><p style="color:white">Course to Be Added</h1></p>
        <p style="font-size:50px"><p style="color:white"> <?php echo "A $track course, on $month $date, $year,  titled $title." ?></p></p>
        <button class="btn btn-white" type="button"><a href="index.html">Return to Home</a></button>  
        &nbsp; &nbsp; &nbsp; 
        <button class="btn btn-white" type="button"><a href="adminPage.html">Return to Admin Page</a></button>
      </div>
    </div>

<?php
$myfile = fopen("classes_and_registration/upcoming-classes copy.txt", "a"); 
fwrite($myfile, "\n");
fwrite($myfile, $newcourse);
fclose($myfile);
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
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
$date = $_POST["date"];
$title = $_POST["title"]; 
$new_course = "$track===$date===$title \n"
?>
This is the Course that will be added
<p id="newcourse"><?php echo $track?>===<?php echo $date?>===<?php echo $title?></p>
<script>
let str = document.getElementById("newcourse").innerHTML; 
let res = str.replace(/-/g, "===");
document.getElementById("newcourse").innerHTML = res;
</script>

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
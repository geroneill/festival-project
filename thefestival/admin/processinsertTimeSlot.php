<?php
include('../conn.php');

// how to store the info allocating artist performance information
$artist_id= $conn->real_escape_string($_POST['artist_id']);
$artist_date= $conn->real_escape_string($_POST['date']);
$artist_time = $conn->real_escape_string($_POST['time']);
$stagename = $conn->real_escape_string($_POST['stage_name']);

//$upload = $_FILES['uploadfile']['name'];
//$location = $_FILES['uploadfile']['tmp_name'];

//echo "<p>$upload $location</p>";

//$move = move_uploaded_file($location,"../images/$upload");

$sqlinsert = "INSERT INTO $table_name2 (artist_id, date,time, stage_name) VALUES ('$artist_id', '$artist_date', '$artist_time', '$stagename')" ;

$result = $conn->query($sqlinsert);

?>

<!doctype html>
<html lang="en">
  <head>
  <?php
     include('../static/head.html');
     ?>
  </head>

<body>
<header>
<?php

include('../static/admin_navbar.html');

?>
</header>
<div id='headadmin'>
	<h2>process page</h2> 
	<a href='index.php'><img src=''>
	</a>
</div>

<div class="container customwidth">

<h1>Artist time, date and stage allocated.</h1>

<?php

?>
			
</div>
<?php

include('../static/footer.html');
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

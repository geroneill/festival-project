<?php
session_start();
$myuser = $_SESSION['userid']; //gains access to this session variable created in login.php
include('../conn.php');

$updateartistURL = $_POST['editurl'];
$id = $_POST['rowid'];
$updateartistInfo = $_POST['editinformation']; 
$updateartistmusic = $_POST['editmusiclink']; 
$updateartistInsta = $_POST['editinsta']; 
$updateartistTwitter = $_POST['edittwitter']; 
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

<h1>Details Updated.</h1>
<!-- $id below replaced from $myuser";->
<?php
 
$updateartistprofile = "UPDATE $table_festival_artists 
SET artistURL='$updateartistURL', artistInformation='$updateartistInfo',artist_music_link='$updateartistmusic', artistInstagram='$updateartistInsta',artistTwitter='$updateartistTwitter' 
WHERE artist_id = $id";

 
$result = $conn->query($updateartistprofile);
 
if(!$result){
        echo $conn->error;
}

//$read="SELECT * FROM $table_festival_artists WHERE artist_id='$myuser' ";

//$readresult = $conn -> query($read);

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

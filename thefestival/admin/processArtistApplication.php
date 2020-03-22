<?php
session_start();
$myuser = $_SESSION['userid'];
/*administrator can view the pending applications and accept relevant artists*/

$row_id=$_POST['rowid'];

include('../conn.php');

// stores data from index.php
$artistname=$conn->real_escape_string($_POST['artistname']);
//$row_id=$_POST['rowid'];
//$row_id=$conn->real_escape_string($_POST['rowid']);
//$artistURL=$conn->real_escape_string($_POST['artistURL']);
//$artistemail=$conn->real_escape_string($_POST['artistemail']);

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

<h1>Congratulations!</h1>

<?php
$acceptArtist=" UPDATE festival_artists SET performer_id='1' WHERE
artist_id='$row_id' ";
$acceptresult=$conn->query($acceptArtist);
if(!$acceptresult){
  echo $conn->error;
}

$applicationinsert= " UPDATE festival_users SET username='$artistname', password='madcool' WHERE artist_id='$row_id' " ;
$applicationresult=$conn->query($applicationinsert);
if(!$applicationresult)
	{
	echo $conn->error;
		}else{
  echo "<p>The application for <strong>$artistname</strong> has been accepted.</p>
  <p>Send an email to the artist with the following information: </p>
  <p><i>Congratulation $artistname, you are performing at MadCool 2020 Festival.</i></p>
  <p><i>Your username is your band name as you entered it e.g. <i>$artistname</i> and your password is <i>madcool</i>.</p> 
  <p><i><a href='login.php' class='btn btn-outline-info'>log in</a> and complete your profile page.</i></p>
  <p><i> We look forward to seeing you at Madcool 2020.</i></p>";
}

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

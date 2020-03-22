<?php
session_start();
//if(!isset($_SESSION['adminuser'])){
  //header("location:login.php");
//}
$myuser = $_SESSION['userid'];//undeleted this
include('../conn.php');

/*processes the artist's application and send information to 2 tables in database: artist entered into festival_artist table 
with performer_id='0' meaning inactive, pending acceptance by admin. Therefore user account cannot be used. 
2. inactive account created in festival user table*/

// how to store the info from artists applying

$artistnamedata= $conn->real_escape_string($_POST['artistname']);
$artisturldata = $conn->real_escape_string($_POST['artisturl']);
$artistemaildata=$conn->real_escape_string($_POST['artistemail']);
$artistinfodata = $conn->real_escape_string($_POST['artistinfo']);
$artistmusic=$conn->real_escape_string(($_POST['artistmusic']));
$artistinsta=$conn->real_escape_string(($_POST['artistinsta']));
$artisttwitter=$conn->real_escape_string(($_POST['artisttwitter']));

$upload = $_FILES['uploadfile']['name'];
$location = $_FILES['uploadfile']['tmp_name'];

echo "<p>$upload $location</p>";

$move = move_uploaded_file($location,"../images/$upload");

$sqlinsert = "INSERT INTO festival_artists (artistName, artistURL, artist_email, artistInformation, artist_music_link,artistInstagram, artistTwitter,image, performer_id) 
VALUES ('$artistnamedata', '$artisturldata', '$artistemaildata','$artistinfodata','$artistmusic','$artistinsta','$artisttwitter','$upload','0')" ;

$result = $conn->query($sqlinsert);

$last = $conn->insert_id;

$insertuser = "INSERT INTO festival_users (username, password, usertype, artist_id) VALUES('$artistnamedata', 'madcool', '2','$last') ";

$result2 = $conn->query($insertuser);


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

<!--<h1>Artist added.</h1>-->

<?php

if(!$result)
	{
	echo $conn->error;
		}else{
  echo "<h2><p>The application for $artistnamedata has been received</p><p>We will contact you shortly.</p></h2>";
  /*echo $sqlinsert;
  echo $last;*/

}

if(!$result2)
	{
	echo $conn->error;
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

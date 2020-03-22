<?php 
// stores data from index.php
if(!isset($_SESSION)){
  session_start();
}
if(!isset($_SESSION['adminuser'])){
  header("location:login.php");
}
include("../conn.php");
//accessing session data
$user=$_SESSION['login'];// just added
$pass=$_SESSION['password'];// just added
$id=$_SESSION['userid']; // added from login.php

/*SELECT statement to ensure user has correct login credentials*/
$readuser =" SELECT * FROM festival_artists JOIN $table_festival_users ON $table_festival_artists.artist_id=$table_festival_users.artist_id 
WHERE username='$user' AND password='$pass' ";
$resultuser = $conn->query($readuser);
if(!$resultuser){
  echo $conn->error;
}

/*SELECT statement to list artist applications where performer_id=0 meaning not yet approved and do not have access to the login system */
$readartistapplication="SELECT * FROM festival_artists WHERE performer_id = '0' ";
$resultapplication = $conn->query($readartistapplication);
if(!$resultapplication){
  echo $conn->error;
}

$typeofuser = $_SESSION['usertype']; //has been created in login.php and now being putting into local variable

?>

<!DOCTYPE html>
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
<h2>Dashboard</h2>
  <?php
  
?> 

</div>
<br>
<br>
<div class="container-sm">

<h1><?php echo $typeofuser;?> Dashboard</h1>

<p>
<h3>Options for: <?php echo "$typeofuser";?></h3>
<?php
if($typeofuser=='Administrator'){ // options for administrator approving artist applications

 while($row = $resultapplication->fetch_assoc()){
  $artistnamedata=$row['artistName'];
  $artistURL = $row['artistURL'];
  $artistInfo =$row['artistInformation'];
  $artistmusic=$row['artist_music_link'];
  $artistInsta=$row['artistInstagram'];
  $artistTwitter=$row['artistTwitter'];
  $row_id = $row['artist_id'];
$performer_status=$row['performer_id'];


echo"<form method='POST' action='processArtistApplication.php' class='form-inline'>
<input type='hidden' value='$row_id' name='rowid'/>
  <div class='form-group'>
    <input class='form-control' id='exampleFormControlSelect1' name='artistname' value='$artistnamedata' readonly='readonly'>

    <input type='submit' class='btn btn-primary mr-sm-2' role='button' value='Accept application'>
  </div>
</form>";
}
}

?>
<br>
<br>			

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

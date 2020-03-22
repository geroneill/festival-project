<?php 
// 1. take $row_id out - is this needed?
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
$readuser =" SELECT * FROM festival_artists JOIN $table_festival_users ON $table_festival_artists.artist_id=$table_festival_users.artist_id 
WHERE username='$user' AND password='$pass' ";
$resultuser = $conn->query($readuser);
if(!$resultuser){
  echo $conn->error;
}



$readartistapplication="SELECT * FROM festival_artists WHERE performer_id = '0' ";
$resultapplication = $conn->query($readartistapplication);
if(!$resultapplication){
  echo $conn->error;
}

$typeofuser = $_SESSION['usertype']; //has been created in login.php and now being putting into local variable
//$row_id=$_SESSION['artist_id']


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
  echo "<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm'>
  <a href='adminAccept_Reject_Artist.php' class='btn btn-success'>View Pending Artist Applications</a>
</div>
<div class='col-sm'>
</div>
</div>";
  echo "<div class='row'>
  <div class='col-sm'>
  <a href='adminInsertFridayTimeSlot.php' class='btn btn-success'>Allocate Friday Time Slot</a>
  </div>
  <div class='col-sm'>
  </div>
  </div>";
  echo "<div class='row'>
  <div class='col-sm'>
  <a href='adminInsertSaturdayTimeSlot.php' class='btn btn-success'>Allocate Saturday Time Slot</a>
  </div>
  <div class='col-sm'>
  </div>
  </div>";
  echo "<div class='row'>
  <div class='col-sm'>
  <a href='adminInsertSundayTimeSlot.php' class='btn btn-success'>Allocate Sunday Time Slot</a>
  </div>
  <div class='col-sm'>
  </div>
  </div>";

}
if($typeofuser=='Artist'){ //this section shows the options for an artist logging in
echo "<a href='artistUpdateArtist.php' class='btn btn-success'>Update Artist Profile</a>";

}
?>
<br>
<br>			
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

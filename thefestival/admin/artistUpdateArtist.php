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



$typeofuser = $_SESSION['usertype']; //has been created in login.php and now being putting into local variable
//$row_id=$_SESSION['artist_id']
?>
<?php

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
<br>
<br>
<br>
<?php
while($row = $resultuser->fetch_assoc()){
  $artistnamedata = $row['artistName'];
  $artistURL = $row['artistURL'];
  $artistInfo =$row['artistInformation'];
  $artistmusic=$row['artist_music_link'];
  $artistInsta=$row['artistInstagram'];
  $artistTwitter=$row['artistTwitter'];
  $row_id = $row['artist_id'];
    
  echo "<p class='text-center'><h2>Update artist profile for : <strong>$artistnamedata</strong></h2></p>";

echo "
<form action='processedit.php' method='POST'>
<input type='hidden' value='$row_id' name ='rowid'/> 
  <div class='form-row'>
    <div class='form group'>
       <label class='label'>Insert/Edit Artist URL: </label>
          <input class='input' type='text' value='$artistURL' name='editurl'>    
    </div>
  </div>
  <div class='form-row'>
    <div class='form-group'>";
      echo "<label class='label'>Artist Information: </label>
     <input class='input' type='text' value='$artistInfo' name='editinformation'>
    </div>
</div>
  </div>
  <div class='form-row'>
    <div class='form-group'>
      <label class='label'>Artist Music Link: </label>
     <input class='input' type='text' value='$artistmusic' name='editmusiclink'>
    </div>
  </div>
  <div class='form-row'>
  <div class='form-group'>
    <label class='label'>Instagram: </label>
   <input class='input' type='text' value='$artistInsta' name='editinsta'>
  
  </div>
</div>
<div class='form-row'>
  <div class='form-group'>
  <img src='img/twitter.png' class='img-fluid' alt='twitter logo'>
   <input class='input' type='text' value='$artistTwitter' name='edittwitter'>
  </div>
</div>";
/*artist can submit the information by pressing submit button*/
  echo "<div class='form-row'>
    <div class='form group'>
   <button class='button is-link'>Submit</button>
   <div class='control'>
  </div>
  </p>
</div>
</div>
</div>";
}
?>



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

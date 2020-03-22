<?php
  session_start();
    //connection code
    include("conn.php");
    $artistid=$_GET['artist_lineup_profile'];
    $read= "SELECT * FROM $table_festival_artists WHERE artist_id='$artistid' ";
    $result = $conn->query($read);
    if(!$result){
       echo $conn->error;
    }
  
?>
<!doctype html>
<html lang="en">
  <head>
    
  <?php

include('static/head.html');

?>
  </head>

<body>
<header>
<?php

include('static/landingpage_navbar.html');

?>
</header>
    <div class="container-sm">

    <div class="row">
        <div class=" four columns u-pull-right">
            
           
</div>

    <div class="row">
      

        </div>

        </div>
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="container menutop">
            <div class="row">
                
                <?php
                while($row=$result->fetch_assoc()){
                  $artistdata = $row["artistName"];
                  $artistURLdata = $row["artistURL"];
                  $artistInfodata = $row["artistInformation"];
                  $artistmusic=$row['artist_music_link'];
                  $artistInsta=$row['artistInstagram'];
                  $artistTwitter=$row['artistTwitter'];
                  $artistimage=$row['image'];
                  $artistid = $row["artist_id"];
  
                echo "<div class='artist-container'>
                <div class='row'>
                <div class='col-6'><h2><span class='border-top'>$artistdata</h2></span></div>
  <div class='col-6'><a href='$artistURLdata'><img src='img/$artistimage' class='img-fluid' alt='Responsive image that links to band website'></a></div></div>
 </div>
  <div class='w-100'></div>
    <div class='col'>$artistInfodata</div>
   <div class='col'><a href='$artistInsta'><img src='img/insta.png' class='img-fluid'></div>
   <div class='w-100'></div>
    <div class='col'><a href='$artistTwitter'><img src='img/twitter.png' class='img-fluid'></div>
    <div class='col'><a href='$artistmusic'><img src='img/youtube.png' class='img-fluid'></div>
</div>
</div>";
  }

?>

<!-- 16:9 aspect ratio
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="..."></iframe>
</div>-->

        <?php

include('static/footer.html');
?>

         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </body>

        </html>
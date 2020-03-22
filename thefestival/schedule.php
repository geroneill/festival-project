<?php

    session_start();

    //connection code
    include("conn.php");
  // this statement goes takes artists that have been allocated a time slot
/*$readschedule = "  SELECT * FROM $table_festival_artists JOIN festival_Date_and_Times 
    ON $table_festival_artists.artist_id=festival_Date_and_Times.artist_id ORDER by date"; 

    if(!$result){
        echo $conn->error;
    }*/

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
    
<br>
<br>
<br>
<br>
      <div class="container">
        <div class="row">
          <div class="col">
               <!--This displays artists performing on Friday 10 July on the Main Stage-->
            <?php
            $readFridayScheduleMain=" SELECT * FROM festival_artists JOIN festival_Date_and_Times ON festival_artists.artist_id=festival_Date_and_Times.artist_id 
            WHERE date='2020-07-10' AND stage_name='Main Stage' ";

            $resultFridayMain = $conn->query($readFridayScheduleMain);
                if(!$resultFridayMain){
                    echo $conn->error;
                 }
                 echo "<p><h2><strong>Friday 10 July Main Stage: </strong></h2></p>";

            while($row=$resultFridayMain->fetch_assoc()){
            $artistdata = $row['artistName'];
            //$artistURLdata = $row["artistURL"];
            //$artistInfodata = $row["artistInformation"];
            $artistid = $row['artist_id'];

                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <p>$artistdata</p> 
                                      </div>";
            
            }
                  ?>    

                </div>
                   <!--This displays artists performing on Friday 10 July on the The Loop-->
                <?php
            $readFridayScheduleLoop=" SELECT * FROM festival_artists JOIN festival_Date_and_Times ON festival_artists.artist_id=festival_Date_and_Times.artist_id 
            WHERE date='2020-07-10' AND stage_name='The Loop' ";

            $resultFridayLoop = $conn->query($readFridayScheduleLoop);
                if(!$resultFridayLoop){
                    echo $conn->error;
                 }
                 echo "<p><h2><strong>Friday 10 July The Loop: </strong></h2></p>";

            while($row=$resultFridayLoop->fetch_assoc()){
            $artistdata = $row['artistName'];
            $artistid = $row['artist_id'];

                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <p>$artistdata</p> 
                                      </div>";
            
            }
                  ?>    

                </div>
                <!--This displays artists performing on Saturday 11 July on the Main Stage-->
                <?php
                $readSaturdayScheduleMain=" SELECT * FROM festival_artists JOIN festival_Date_and_Times ON festival_artists.artist_id=festival_Date_and_Times.artist_id 
            WHERE date='2020-07-11' AND stage_name='Main Stage' ";

            $resultSaturdayMain = $conn->query( $readSaturdayScheduleMain);
                if(!$resultSaturdayMain){
                    echo $conn->error;
                 }
                 echo "<p><h2><strong>Saturday 11 July Main Stage: </strong></h2></p>";

            while($row=$resultSaturdayMain->fetch_assoc()){
            $artistdata = $row['artistName'];
            $artistid = $row['artist_id'];

                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <p>$artistdata</p> 
                                      </div>";
            
            }
                  ?>    

                </div>
                    <!--This displays artists performing on Saturday 11 July on the The Loop-->
                    <?php
                $readSaturdayScheduleLoop=" SELECT * FROM festival_artists JOIN festival_Date_and_Times ON festival_artists.artist_id=festival_Date_and_Times.artist_id 
            WHERE date='2020-07-11' AND stage_name='The Loop' ";

            $resultSaturdayLoop = $conn->query( $readSaturdayScheduleLoop);
                if(!$resultSaturdayLoop){
                    echo $conn->error;
                 }
                 echo "<p><h2><strong>Saturday 11 July The Loop: </strong></h2></p>";

            while($row=$resultSaturdayLoop->fetch_assoc()){
            $artistdata = $row['artistName'];
            $artistid = $row['artist_id'];

                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <p>$artistdata</p> 
                                      </div>";
            
            }
                  ?>    

                </div>
                     <!--This displays artists performing on Sunday 12 July on the Main Stage-->
                     <?php
                $readSundayScheduleMain=" SELECT * FROM festival_artists JOIN festival_Date_and_Times ON festival_artists.artist_id=festival_Date_and_Times.artist_id 
            WHERE date='2020-07-12' AND stage_name='Main Stage' ";

            $resultSundayMain = $conn->query($readSundayScheduleMain);
                if(!$resultSundayMain){
                    echo $conn->error;
                 }
                 echo "<p><h2><strong>Sunday 12 July Main Stage: </strong></h2></p>";

            while($row=$resultSundayMain->fetch_assoc()){
            $artistdata = $row['artistName'];
            $artistid = $row['artist_id'];

                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <p>$artistdata</p> 
                                      </div>";
            
            }
                  ?>    

                </div>
                      <!--This displays artists performing on Sunday 12 July on the Loop-->
                      <?php
                $readSundayScheduleLoop=" SELECT * FROM festival_artists JOIN festival_Date_and_Times ON festival_artists.artist_id=festival_Date_and_Times.artist_id 
            WHERE date='2020-07-12' AND stage_name='The Loop' ";

            $resultSundayLoop = $conn->query( $readSundayScheduleLoop);
                if(!$resultSundayLoop){
                    echo $conn->error;
                 }
                 echo "<p><h2><strong>Sunday 12 July The Loop: </strong></h2></p>";

            while($row=$resultSundayLoop->fetch_assoc()){
            $artistdata = $row['artistName'];
            $artistid = $row['artist_id'];

                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <p>$artistdata</p> 
                                      </div>";
            
            }
                  ?>    

                </div>

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
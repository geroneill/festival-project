<?php
    session_start();

    //connection code
    include("conn.php");
  // this statement goes takes artists that have been allocated a time slot
    /*$read = "  SELECT * FROM $table_festival_artists JOIN festival_Date_and_Times 
    ON $table_festival_artists.artist_id=festival_Date_and_Times.artist_id ORDER by date;";*/ 

    //this statement takes all the artist from the db
    $read="SELECT * FROM $table_festival_artists";
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
    
<br>
<br>
<br>
<br>
      <div class="container">
        <div class="row">
          <div class="col">
            
            <?php
            while($row=$result->fetch_assoc()){
            $artistdata = $row["artistName"];
            $artistURLdata = $row["artistURL"];
            $artistInfodata = $row["artistInformation"];
            $artistid = $row["artist_id"];

            //$_SESSION['artistName_LineUp']=$artistid;

                          /*echo "<div class='section'>
                                  <h3>$artistdata</h3>
                                    <a href='artist.php?id=artistid'/a> 
                                    </div>";*/
                                    echo "<div class='container'>
                                    <div class='row justify-content-start'>
                                      <div class='col-4'>
                                        <a href='artist.php?artist_lineup_profile=$artistid' class='btn btn-link'>$artistdata</a> 
                                      </div>
                                      <div class='col-4'>
                                        
                                      </div>
                                    </div>
                                    <div class='row justify-content-cente'>
                                      <div class='col-4'>
                                       
                                      </div>
                                      <div class='col-4'>
                                        
                                      </div>
                                    </div>
                                    <div class='row justify-content-end'>
                                      <div class='col-4'>
                                       
                                      </div>
                                      <div class='col-4'>
                                       
                                      </div>
                                    </div>
                                    <div class='row justify-content-around'>
                                      <div class='col-4'>
                                        
                                      </div>
                                      <div class='col-4'>
                                        
                                      </div>
                                    </div>
                                    <div class='row justify-content-between'>
                                      <div class='col-4'>
                                        
                                      </div>
                                      <div class='col-4'>
                                        
                                      </div>
                                    </div>
                                  </div>";
          }
                  ?>
                    </div>    
          <div class="col">
          <a href='index.php'><img src='img/madCool2020.png' class='imgres'/>
	</a>
          </div>
         
        </div>
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
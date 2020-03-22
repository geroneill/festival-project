<?php

    //connection code
    include("conn.php");

    $read = "SELECT * FROM festivalVersion1";

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

<main role="main">
  <?php
  include('static/carousel.html');
  ?>

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
//<?php
//session_start();

//if(!isset($_SESSION))
//?>
<!--Admin can allocate day and time slot for Saturday 11 July -->
<!doctype html>
<html lang="en">
  <head>
  <?php
     include('../static/head.html');
     ?>
  </head>

  <header>
  <?php

include('../static/admin_navbar.html');

?>
</header>
<body>

<div id='headadmin'>
	
</div>

<div class="container customwidth">
<p>
<a href='index.php' class='btn'>Dashboard</a>
</p>
<h1>Allocate Artist Time Slot </h1>
<!--Admin can allocate artist to perform at 1. main stage or 2. The Loop -->
<form method='POST' action='processinsertTimeSlot.php' enctype='multipart/form-data' >
  <div class="form-group">
    <label for="exampleFormControlInput1">artist name</label>
    <input type="text" name="artist_id" class="form-input" id="artistname" placeholder="artist name as on database">
  </div>
  <div class="form-group">
    <label for="allocateDateTime">Saturday 11 July 2020</label>
    <select class="form-control" name="date" id="exampleFormControlSelect1">
      <option>2020-07-11</option>
      <option>2020-07-11</option>
      <option>2020-07-11</option>
      <option>2020-07-11</option>
    </select>
    </div>
    <div class="form-group">
    <label for="allocateDateTime">Time</label>
    <select class="form-control" name="time" id="exampleFormControlSelect1">
      <option>2020-07-11 19:00:00</option>
      <option>2020-07-11 20:00:00</option>
      <option>2020-07-11 21:00:00</option>
      <option>2020-07-11 22:00:00</option>
    </select>
  </div>
  <div class="form-group">
    <label for="allocateStage">Stage</label>
    <select class="form-control" name="stage_name" id="exampleFormControlSelect1">
      <option>Main Stage </option>
      <option>The Loop</option>
    </select>
  </div>
  <p>
<input type='submit' value='allocate' class='btn btn-primary'>
</p>
</form>
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

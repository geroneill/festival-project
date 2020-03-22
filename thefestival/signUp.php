<?php
session_start(); 
    //connection code
    include("conn.php");
   
?>
<!--allows artist to complete details in form to apply to perform-->
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
<div id='head'>
	<a href='index.php'><img src='img/madCool2020.png' class='imgres'/>
	</a>
    
</div>
<!--application form-->
<div class="container customwidth">
 <h3>Artists - Do you want to perform at Mad Cool?<h3>
 <h4>Apply below :</h4>

<form method='POST' action ='admin/processinsert.php'enctype='multipart/form-data'>


<div class='form-group col-md-6'>
Artist/Band name: 
<input type='text' value='' name='artistname' placeholder='artistname' class='form-input'/>
</div>

<div class='form-group col-md-6'>
Website:
<input type='text' value=' ' name='artisturl' placeholder='website' class='form-input'/>
</div>


<div class="form group col-md-6">
  Email:
      <input type="text" name='artistemail' placeholder='artist email'>
    </div>

<div class='form-group col-md-4'>
Music (youtube or other): 
<input type='text' value='' name='artistmusic' placeholder='music' class='form-input'/>
</div>

<div class='form-group col-md-4'>
Instagram: 
<input type='text' value='' name='artistinsta' placeholder='instagram' class='form-input'/>
</div>

<div class='form-group col-md-4'>
Twitter:
<input type='text' value=' ' name='artisttwitter' placeholder='twitter' class='form-input'/>
</div>
<div class='form-group'>
artist Information: 
<textarea class='form-control' id='please enter artist information' value='' name='artistinfo' placeholder='use this space to tell us about your band' rows='3'/>
</textarea>
</div>
<p>upload image: <input type='file' value='add image' name='uploadfile'></p>
  <button type="submit" class="btn btn-primary">Apply</button>
</form>
</div>
<?php

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

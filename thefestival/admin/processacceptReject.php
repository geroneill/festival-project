<?php
include('../conn.php');

// how to store the info allocating artist performance information
$artist_id= $conn->real_escape_string($_POST['artist_id']);
$artist_date= $conn->real_escape_string($_POST['date']);
$artist_time = $conn->real_escape_string($_POST['time']);
$stagename = $conn->real_escape_string($_POST['stage_name']);

//$upload = $_FILES['uploadfile']['name'];
//$location = $_FILES['uploadfile']['tmp_name'];

//echo "<p>$upload $location</p>";

//$move = move_uploaded_file($location,"../images/$upload");

$sqlinsert = "INSERT INTO $table_name2 (artist_id, date,time, stage_name) VALUES ('$artist_id', '$artist_date', '$artist_time', '$stagename')" ;

$result = $conn->query($sqlinsert);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Trying to get Carousel working</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

   <!-- Favicons -->
   <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
   <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
   <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
   <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
   <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
   <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
   <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
   <meta name="theme-color" content="#563d7c">

   <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
  </head>

<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../lineUp.php">Line Up</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="signUp.php">Apply</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin/login.php">Artist Log in</a>
        </li>
        <li class="nav-item active">
                <a class="navbar-brand" href="#">
                  <img src="img/madCool2020.png" width="30" height="30" alt="">
                </a>
        </li>
      </ul> 
    </div>
    <form method ='POST' action='logout.php' enctype='multipart/form-data'class="form-inline">
   
    <button class="btn btn-primary my-2 my-sm-0" type='submit' value='logout'>Log Out</button>
  </form>
  </nav>
</header>
<div id='headadmin'>
	<h2>process accept or reject page</h2> 
	<a href='index.php'><img src=''>
	</a>
</div>

<div class="container customwidth">

<h1>process accept or reject page.</h1>

<?php

//if(!$result)
	//{
	//echo $conn->error;
		//}else{
	//echo "<p>$artist_id has been added successfully.</p>";
//}

?>
			
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['adminuser']))
{
  header("Location: login.php");
}else{
  unset($_SESSION['adminuser']);
  header("Location: login.php");
}
?>

<!doctype html>
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
<br>
<br>
<br>

<div id='headadmin'>
	<a href='index.php'><img src=''>
	</a>
</div>

<div class="container customwidth">

<h1>Login</h1>

<form method='POST' action='login.php' enctype='multipart/form-data' >
<p>
username:
<input type='text' value='' name='loginname' class='form-input'/>
</p>
<p>
password:
<input type='password' value='' name='loginpw' class='form-input'/>
</p>
<p>
<input type='submit' value='login' class='btn btn-primary'>
</p>

</form>

<?php
?>
			
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

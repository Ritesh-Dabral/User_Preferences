<!DOCTYPE html>
<html>
<head>
	<title>COURSE-ERA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>

    h3{
      color: white;
    }
    body{
      background-image: linear-gradient(to right, #6E48AA, #9D50BB);
    }
    #coursera{
      font-family: cursive;
    }
  </style>
</head>

<body>
	<h1 class="text-center" id="coursera">COURSE-ERA</h1>
<div class="form-check mt-4 border-top border-bottom" align="center">
<?php
  require_once('other/form.php');
?>
</div>
<div class="form-check mt-5 border-top border-bottom" align="center">
  <form action="other/preference.php" method="post">
    <div>
      <h3>Enter your phone number to check your preference</h3>
      <input type="text" name="phone_no">
    </div><br>
    <div><button type="submit" class="btn btn-warning col-md-2">SHOW</button></div>
  </form>
</div>
</body>
</html>

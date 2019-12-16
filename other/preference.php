<!DOCTYPE html>
<html>
<head>
	<title>COURSE-ERA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<style>
		h1,h4{
			font-family: cursive;
      color: white;
		}
		h3{
			font-family: monospace;
		}
		body{
        background: linear-gradient(to right, #7B920A, #ADD100);
    }
    table{
      text-align: center;
      font-size: 1.5em;
    }
	</style>
</head>

<body>
	<h1 class="text-center">PREFERENCE</h1>
<?php
  require_once('user.php');
  setup_conn();

  $sql = 'SELECT name,course,college FROM prefrence WHERE phone_no = ' . ' " ' . $_POST["phone_no"] . ' " ';
  show($sql);
?>

<div class="form-check mt-5" align="center">
	<a href="../index.php"><button class="btn btn-primary col-md-2">EXIT</button></a>
</div>

</body>
</html>

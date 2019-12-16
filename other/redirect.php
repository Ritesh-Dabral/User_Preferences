<!DOCTYPE html>
<html>
<head>
	<title>COURSE-ERA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<style>
		h1,h4{
			font-family: cursive;
		}
		h3{
			font-family: monospace;
		}
		body{
				background-image: linear-gradient(to right, #12FFF7, #B3FFAB);
		}
	</style>
</head>

<body>
	<h1 class="text-center">COURSE-ERA</h1>
<?php
	require_once('user.php');
	setup_conn();

	//$sql = "INSERT INTO student (first_name, last_name, class, stream) VALUES (".$first_name.",".$last_name.",".$class.",".$stream.");";
	$sql = 'INSERT INTO prefrence (name, course, college, phone_no) VALUES ('. ' " '. $_POST["name"] . ' "," ' . $_POST["course"] . ' "," '.$_POST["college"] .' "," '.$_POST["phone_no"]. '")';
	insert($sql);
  //echo $_POST["name"]." ".$_POST["course"]." ".$_POST["college"];
?>
<div class="form-check mt-4" align="center">
	<h4>You Just Selected: </h4>
	<table class="table border-top border-bottom">
	  <thead>
	    <tr>
	      <th scope="col">COURSE</th>
	      <th scope="col">COLLEGE</th>
	    </tr>
	  </thead>
	  <tr>
	    <td><?php echo $_POST["course"]?></td>
	    <td><?php echo $_POST["college"]?></td>
	  </tr>
	</table>
</div>
<div class="form-check mt-5" align="center">
	<a href="../index.php"><button class="btn btn-primary col-md-2">EXIT</button></a>
</div>
</body>
</html>

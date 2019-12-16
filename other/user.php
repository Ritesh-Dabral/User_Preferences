<?php

	$host = 'localhost';
	$user = 'id11963554_root';
	$pass = 'admin1234';
	$db = 'id11963554_student_management';

	$conn; //connection variable

	//setup_connection
	function setup_conn()
	{
		global $host,$user,$pass,$db,$conn;

		$conn = new mysqli($host, $user, $pass, $db);
		// Check connection
		if (mysqli_connect_error())
			die("Database connection failed: " . mysqli_connect_error());
		else
		{
			$sql = "CREATE TABLE prefrence (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(30) NOT NULL,
					course TEXT NOT NULL,
					college TEXT,
					phone_no TEXT
					)";
					$conn->query($sql);
		}
	}

	//insert
	function insert($sql)
	{
		global $conn;

		if ($conn->query($sql) === TRUE)
			echo "<script>alert(". '"Preference Added Successfully"' . ')</script>';
		else
			echo "<br><h3>Error: " . $conn->error . '</h3>';

	}

	//delete
	function delet($sql)
	{
		global $conn;
		if ($conn->query($sql) === TRUE)
			echo "Record Deleted";
		else
			echo "Error Deleting record: ";

	}

	//update
	function update($sql)
	{
		global $conn;
		if ($conn->query($sql) === TRUE)
			echo "Record Updated Successfully";
		else
			echo "Error updating record: ". $conn->error;
	}

	//view
	function show($sql)
	{
		global $conn;

		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table class=".'"table"><thead><tr><th>Name</th><th>Course</th><th>College</th></tr></thead>';
			while($row = $result->fetch_assoc()) {
				echo "<tr class=><td>" . $row['name'] . "</td><td>" . $row['course'] . "</td><td>" . $row['college'] . "</td></tr>";
			}
			echo "</table>"; //Close the table in HTML
		}
		else
			echo "<h1>0 results</h1>";

	}
?>

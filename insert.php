<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "student");	
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$uid = $_REQUEST['id'];
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		// $gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $first_name.$last_name.'@hospicesource.net';
		$location = $_REQUEST['location'];
		$phone = $_REQUEST['phone'];
		$position = $_REQUEST['position'];
		$sled = $_REQUEST['sled'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO equipment VALUES ('$uid', '$first_name',
			'$last_name','$address', '$email', '$location', '$phone', '$position', '$sled')";

		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("$uid\n" ."\n$first_name.$last_name\n "
				. "$address\n" . "$email\n"  .  "$location\n" . "$phone\n". "$position\n". "$sled\n" );
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		header("location:index.php");

		?><!-- <a href="index.php"><button style="padding-left:50%; padding-right: 50%; height: 40em;margin-top:3%%;">GO BACK</button> -->
	</center>
</body>

</html>

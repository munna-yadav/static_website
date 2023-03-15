<?php
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
		$conn = mysqli_connect("localhost", "root", "", "website");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$comment=$_REQUEST['comment'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact_dralion VALUES ('$name',
			'$address','$phone','$email','$comment')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>Message received successfully.</h1>";
            echo"<h2>We will get back to you soon!.</h2>";
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
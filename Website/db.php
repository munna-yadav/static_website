<?php

	$conn = mysqli_connect("localhost", "root", "password", "website");
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
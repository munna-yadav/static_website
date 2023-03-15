
<!DOCTYPE html>

<html>

<head>
	<title>Opportunities</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="script.js" rel="dynamic" type="script"/>
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon" />

    <title>Dralion Construction</title>
    <body>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="header">
          <div class="header-left">
            <a href="index.html" class="logo"><img src="logo.jpeg"  alt="logo" width="200" height="145"></a>

          </div>
            <div class="header-right">

              <a  href="index.html">Home</a>
              <a href="aboutus.html">About Us</a>
              <a href="Expertise.html">Expertise</a>
              <a href="ourservices.html">Our Services</a>
              <a href="projects.html">Projects</a>
              <a href="whyus.html">why us?</a>
              <a class="active" href="opportunities.html">Opportunities</a>
              <a href="contactus.html">Contact Us</a>

            </div>
          </div>
         
<body>
    <style>
        .h1{
            color: #161541;
            width: 100%;
        }
    </style>
	
		<?php

	$conn = mysqli_connect("localhost", "root", "password", "website");
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		// Define variables to store form data
		$id=$_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		
		// Upload CV (PDF file)
		$cv_dir = './admin/cv/'; // Directory where uploaded CVs will be stored
		$cv_name = $_FILES['cv']['name'];
		$cv_tmp_name = $_FILES['cv']['tmp_name'];
		$cv_file_type = $_FILES['cv']['type'];
		$cv_file_size = $_FILES['cv']['size'];
		$cv_file_error = $_FILES['cv']['error'];
		$cv_ext = strtolower(pathinfo($cv_name, PATHINFO_EXTENSION));
		$cv_allowed_exts = array('pdf');
		
		if (in_array($cv_ext, $cv_allowed_exts)) {
			if ($cv_file_error === 0) {
				if ($cv_file_size < 5000000) { // Maximum file size: 1MB
					$cv_upload_path = $cv_dir . $cv_name;
					move_uploaded_file($cv_tmp_name, $cv_upload_path);
				} else {
					echo 'CV file size is too large.';
				}
			} else {
				echo 'Error uploading CV file.';
			}
		} else {
			echo 'Invalid CV file type.';
		}
		
		// Insert form data into MySQL database
		$sql = "INSERT INTO application_dralion(name,address,phone,email,cv) VALUES ('$name', '$address', '$phone', '$email', '$cv_name')";
		
		if (mysqli_query($conn, $sql)) {
			echo '<h1>Application submitted successfully.<h1>';
			echo'<h2> We will get bak to you soon!!</h2>';
		} else {
			echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
		}
		
		// Close the database connection
		mysqli_close($conn);
		
?>

</body>

</html>

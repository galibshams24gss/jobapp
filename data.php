<?php
$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'project');
$err = '';


	$fullname = $_POST['fullname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$edulevel = $_POST['edulevel'];
	$university = $_POST['university'];
	$address = $_POST['address'];
	$postcode = $_POST['postcode'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	
	if(mysqli_query($conn, "INSERT INTO userdata VALUES('$fullname','$age', '$email', '$contact', '$edulevel', '$university', '$address', '$postcode', '$city', '$country', '$gender')"))
	//$sql = 	mysqli_query($conn, "INSERT INTO userdata VALUES('$fullname','$age', '$email', '$contact', '$edulevel', '$university', '$address', '$postcode', '$city', '$country', '$gender')");
	//$rows = mysqli_num_rows($sql);
	//if( $rows == 1)
	header("Location: upl.php");
	else
		echo "Not Inserted all Information";
?>
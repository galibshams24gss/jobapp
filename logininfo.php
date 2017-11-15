<?php
$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'project');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($conn,"SELECT * FROM userlogin WHERE(username='$username' AND password='$password')");

	$rows = mysqli_num_rows($sql);
	if( $rows == 1){
		header("Location: userdata.php");
	}
	else{
		echo "LOGIN FAILED";
	}
//mysqli_close($conn);
?>
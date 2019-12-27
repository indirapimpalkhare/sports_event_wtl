<?php
require_once("../dbconn.php");

$select_query = "select * from users where (username ='$_POST[uname]' and pwd = '$_POST[pswd]')";
$result = $conn->query($select_query);

	if ($result->num_rows > 0) {
		header('Location: /sports_event/home/homepage.html');
	} 
	else {
		$message = "Wrong Login. Please try again.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh: 0 ; url = /sports_event/login/login.html"); 
		
	}
?>


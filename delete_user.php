<link rel="stylesheet" type="text/css" href="sign_up.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<?php
session_start();

require_once("dbconn.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){

	// Prepare an insert statement
	//$username = $_SESSION["username"];
	$uname = $_POST["username"];
	$sql ="DELETE FROM users WHERE username = ?";
	echo "sql done" . "<br>";
	echo $uname . "<br>" ;
	if($stmt = mysqli_prepare($conn, $sql)){
		echo "prep done" . "<br>";
	// Bind variables to the prepared statement as parameters

		mysqli_stmt_bind_param($stmt, "s", $uname);
		echo "sql done" . "<br>" ;
		//Set parameters

		// Attempt to execute the prepared statement
		if(mysqli_stmt_execute($stmt)){
		// Redirect to home page
			echo '<div class="alert alert-success">Delete Success!</div>' . "<br>" ;
			//header('Location: /sports_event/home/homepage_admin.php');
		} 
		else{
			echo '<div class="alert alert-danger">Something went wrong. PLease try again!</div>' . "<br>" ;
			//header('Location: /sports_event/all_users.php');
		}
	}
	// Close statement
	mysqli_stmt_close($stmt);

	// Close connection
	mysqli_close($conn);
	}
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
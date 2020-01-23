<link rel="stylesheet" type="text/css" href="sign_up.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<?php
session_start();

require_once("../dbconn.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){

	// Prepare an insert statement
	$username = $_SESSION["username"];
	$event_name = $_POST["event_name"];
	$reg_fees=$_POST["registration_fees"];
	$prize_money=$_POST["prize_money"];
	$link=$_POST["links"];
	$sport_details=$_POST["sports"];
	$addr=$_POST["address"];
	$event_id = $_POST["eid"];
	$sql ="UPDATE events SET event_name = ?, reg_fees = ?,prize_money = ?,link = ?,sport_details = ? ,addr = ? WHERE (username=? AND event_id = ?) ;";
	echo "sql done";
	echo $event_name;
	if($stmt = mysqli_prepare($conn, $sql)){
	// Bind variables to the prepared statement as parameters

	mysqli_stmt_bind_param($stmt, "ssssssss", $event_name, $reg_fees,$prize_money,$link,$sport_details,$addr,$username,$event_id);
	echo "sql done";
	// Set parameters

	// Attempt to execute the prepared statement
	if(mysqli_stmt_execute($stmt)){
	// Redirect to home page
		echo '<div class="alert alert-success">Update Success!</div>';
		header('Location: /sports_event/events/my_events.php');
	} 
	else{
		echo '<div class="alert alert-danger">Something went wrong. PLease try again!</div>';
		header('Location: /sports_event/events/my_events.php');
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
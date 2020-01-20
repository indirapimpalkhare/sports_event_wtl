<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="new_event.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
  <!--meta tag used for ease of viewing on any device-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--bootstrap-->
  <!--we use style tag for internal css inside head tag-->
</head>
<?php
echo "<script src='update.js'></script>";
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo '<div class="alert alert-warning">You need to log in first! Redirecting to log in page.</div>';
	header("Refresh: 1; URL=/sports_event/login/log_in.php");
    exit;
}
echo file_get_contents("../navbar.html");
require_once("../dbconn.php");
$uname = $_SESSION["username"];
$eid = $_POST["event_id"];
/* create a prepared statement */
if ($stmt = mysqli_prepare($conn, "SELECT event_name,reg_fees,prize_money,link,sport_details,addr FROM events WHERE username=? AND event_id = ?")) {

	/* bind parameters for markers */
	mysqli_stmt_bind_param($stmt, "ss", $uname, $eid);

	/* execute query */
	mysqli_stmt_execute($stmt);
	/* bind result variables */
	mysqli_stmt_bind_result($stmt,$event_name,$reg_fees,$prize_money,$link,$sport_details,$addr );
	/* fetch value */
	mysqli_stmt_fetch($stmt);
	
	echo "<body onload='clear_input()'>";
	echo " <form id='update_event' name = 'update_event' action='update_event_page.php' method = 'post' >";
	echo "<div class='container'>";
	echo "<h1>Update Event</h1>";
	echo " <hr>";

	echo "<label for='event_name' ><b>Event Name</b></label><b for='event_name' class = 'star'>*</b>";
	echo "<input type='text' placeholder='Enter Event Name' name='event_name' value = '" . $event_name . "' required>";

/*	echo "<label for='start_date' ><b>Event Start Date</b></label><b for='start_date' class = 'star'>*</b>";
	echo "<input type='date' placeholder='dd/mm/yyyy' name='start_date' value = ' " . $newformat . "' required>";

	echo "<label for='end_date'><b>Event End Date</b></label><b for='end_date' class = 'star'>*</b>";
	echo "<input type='date' placeholder='dd/mm/yyyy' name='end_date' value = ' " . $end_date . "' required>";
*/
/*echo "<label for='ldate'><b>Last Date for Registration</b></label>";
	echo "<input type='date' placeholder='dd/mm/yyyy' name='ldate'  value = ' " . $reg_last_date . "'>";
*/
	echo "<label for='registration_fees' id='reg'><b>Registration fees</b></label>";
	echo "<input type='text' placeholder='ex- 1000' name='registration_fees' value = '" . $reg_fees . "' >";
	echo "<input type = 'hidden' name = 'eid' value = ' " . $eid . " '>";
	
	echo "<label for='prize'><b>Prize Money</b></label>";
	echo "<input type='text' placeholder='ex- 50000' name='prize_money' value = ' " . $prize_money . "'>";

	echo "<label for='links'><b>Event Link</b></label>";
	echo "<input type='text' placeholder='Enter your registration link' name='links' value = ' " . $link . "' >";

	echo "<label for='sports'><b>Sports Available</b></label>";
	echo "<textarea placeholder='ex- Cricket, Football, Basketball' name='sports' >" . $sport_details . "</textarea>";

	echo "<label for='address'><b>Address</b></label>";
	echo "<textarea placeholder='Enter event address' name='address'>" . $addr . "</textarea>";

	echo "<hr>";
	echo "<button type='submit' class='registerbtn' onclick='return validate()' >Update Event</button>";
	echo "</div>";

	echo "<div class='container signin'>";
	echo "<p>Get back <a href='/sports_event/home/homepage.php'>Home Page</a></p>";
	echo "</div>";
	echo "</form>";

	echo "</body>";
	mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($conn);
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

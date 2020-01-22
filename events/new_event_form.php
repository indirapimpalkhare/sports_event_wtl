<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo '<div class="alert alert-warning">You need to log in first! Redirecting to log in page.</div>';
	header("Refresh: 1; URL=/sports_event/login/log_in.php");
    exit;
}

if($_SESSION["username"] == "admin"){
	include("../navbar_admin.html");
}
else{
	include("../navbar.html");
}
?>

<?php include("new_event.html"); ?>


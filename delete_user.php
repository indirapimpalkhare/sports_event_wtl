<link rel="stylesheet" type="text/css" href="sign_up.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<?php
session_start();
echo file_get_contents("navbar_admin.html");
require_once("dbconn.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){

$uname = $_POST["username"];
/* create a prepared statement */
if ($stmt = mysqli_prepare($conn, "DELETE FROM users where username = ?")) {

	/* bind parameters for markers */
	mysqli_stmt_bind_param($stmt, "s", $uname);
	
	/* execute query */
	if(mysqli_stmt_execute($stmt)){
        // Redirect to home page
        //echo "<script type='text/javascript'>alert('Event removed Successfully'); </script>";
        //header('Location: /sports_event/home/homepage.php');
		echo '<div class="alert alert-success">Delete Success!</div>' . "<br>" ;
    } else{
		echo '<div class="alert alert-danger">Something went wrong. PLease try again!</div>' . "<br>" ;
        //echo "Something went wrong. Please try again later.";
        //header('Location: /sports_event/home/homepage.php');

    }
    
}


// Close connection
mysqli_close($conn);
}
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
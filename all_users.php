<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="homepage.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
  <!--meta tag used for ease of viewing on any device-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--bootstrap-->
  <!--we use style tag for internal css inside head tag-->

</head>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["username"] !== "admin"){
    echo '<div class="alert alert-warning">You need to log in first! Redirecting to log in page.</div>';
	header("Refresh: 1; URL=/sports_event/login/log_in.php");
    exit;
}
?>

<body>

<?php
echo file_get_contents("navbar_admin.html");
//echo "I tried";
?>
<br>
<div class = "container">

</body>
<?php
require_once("dbconn.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		if($row["username"] !== "admin"){
			echo "<div class='card' style='width: 100%;'>";
			echo "<div class='card-body'>";
			echo "<h5 class='card-title'>" .$row["username"] . "</h5>";
			echo "</div>";
			echo "<ul class='list-group list-group-flush'>";
			echo "<li class='list-group-item'> <b> College : </b>" . $row["college_name"] . "</li>";
			echo "<li class='list-group-item'><b> City : </b>" . $row["college_city"] . "</li>" ;
			echo "</ul>";
			//echo "<hr>";
			//echo "<div class = 'row'>";
			//echo "<form action='../events/update_event.php' method = 'post'>"."<button class='btn my-2 my-sm-0 buttonlc' style='outline: auto; outline-color: lightcoral;' type='submit' value = ' " . $row["event_id"]. "' name = 'event_id'>UPDATE</button>" . " </form>" ;
			echo "&nbsp;&nbsp;&nbsp;";
			echo "<form action='delete_user.php' method = 'post'>"."<button class='btn my-2 my-sm-0 buttonlc' style='outline: auto; outline-color: lightcoral;' type='submit' value = ' " . $row["username"]. "' name = 'username'>DELETE</button>" . " </form>" ;
			//echo "</div>";
			echo "</div>";
			//echo "</div>";
			echo "<hr>";
		}
	}
} 
else {
	echo "0 results";
}
$conn ->close();
?>
  <!--img class="card-img-top" src="..." alt="Card image cap"-->
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
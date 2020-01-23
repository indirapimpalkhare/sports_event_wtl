<!DOCTYPE html>
<html>
    <head>
    <title>
        About Us
    </title>
    <style>
        body{
            background-color: #f4f4f4;
            color:#555555;
            font:normal 16px Arial,Helvetic.sans-serif;
            line-height: 1.6em;
            margin:0;
        }
        .block{
            float: left;
            width: 33.3%;
            border:1px solid #ccc;
            padding: 10px;
            /*so that it considers the border and padding while setting the width*/
            box-sizing: border-box;
        }
        /*to cleat the float*/
        .clr{
            clear: both;
        }
        .container{
            /*px not responsive so use percentages
            width: 500px; */
            width: 80%;
            margin: auto;
            
        }
    
    </style>
    </head>
    
    <body>
    <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo '<div class="alert alert-warning">You need to log in first! Redirecting to log in page.</div>';
	header("Refresh: 1; URL=/sports_event/login/log_in.php");
    exit;
}
?>
        <?php
if($_SESSION["username"] == "admin"){
	echo file_get_contents("navbar_admin.html");
}
else{
	echo file_get_contents("navbar.html");
}
//echo "I tried";
?>
        <div class="container">
        <h1>About Us</h1>
        <p>
         <h2> T.Y.B.TECH CSE PANEL 3 Students </h2>
        </p>
        <div class="block">
			<h3>INDIRA PIMPALKHARE</h3>
			<p>
                <h4>Roll No- PC 21 ,Basketball Team Member.</h4>
                <h4>Contact no- 9604372622 </h4>
                <h4> Mail Id- indira.pimpalkhare@gmail.com </h4>
            </p>
        </div>
        <div class="block">
			<h3>KSHITIJA KULKARNI</h3>
			<p>
                <h4>Roll No- PC 31 ,Volleyball Team Member.</h4>
                <h4>Contact no- 9403316397 </h4>
                <h4> Mail Id- kshitija12feb99@gmail.com </h4>
            </p>
        </div>
        <div class="block">
			<h3>KHUSHBOO AGARWAL</h3>
			<p>
                <h4>Roll No- PC 45</h4>
                <h4>Contact no- 9765594481 </h4>
                <h4> Mail Id- khushbooagarwal720@gmail.com </h4>
            </p>
		</div>
		

		<!-- to clear the float we need to reset -->
		<div class="clr"></div>
    </div>
    </body>
</html>
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
            font:normal 25px Arial,Helvetic.sans-serif;
            line-height: 1.6em;
            margin:0;
        }
        .block{
            float: left;
            width: 33.3%;
            /*border:1px solid #ccc;*/
			
            padding: 10px;
            /*so that it considers the border and padding while setting the width*/
            box-sizing: border-box;
        }
        /*to cleat the float*/
        .clr{
            clear: both;
        }
        .container{
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
		 <hr>
		 <br>
        </p>
        <div class="block">
			<h3>INDIRA PIMPALKHARE</h3>
			<p>
               <strong> Roll No- PC 21 </strong>,Basketball Team Member.
				<br>
                Contact no- 9604372622
				<br>
                Mail Id- indira.pimpalkhare@gmail.com 
            </p>
        </div>
        <div class="block">
			<h3>KSHITIJA KULKARNI</h3>
			<p>
               <strong> Roll No- PC 31 </strong>,Volleyball Team Member.
				<br>
                Contact no- 9403316397 
				<br>
                Mail Id- kshitija12feb99@gmail.com 
            </p>
        </div>
        <div class="block">
			<h3>KHUSHBOO AGARWAL</h3>
			<p>
                <strong>Roll No- PC 45 </strong>
				<br>
                Contact no- 9765594481 
				<br>
                Mail Id- khushbooagarwal720@gmail.com 
            </p>
		</div>
		

		<!-- to clear the float we need to reset -->
		<div class="clr"></div>
    </div>
    </body>
</html>
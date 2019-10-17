<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Nameless Blackboard</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
			
			<div id="section">
				
				<div class="content">
					<h1 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h1>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>
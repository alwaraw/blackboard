<div class="sidebar"><br>

<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="educator_home.php"> Classes</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>	
		';
	}
	else{
		echo'
			<li class="li"><a href="student_home.php">Classes</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>	
		';
	}
?>
	
</ul>

</div>
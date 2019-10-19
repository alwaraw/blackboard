<div class="navbar">

			<ul class="list">
				<b style="color:white;float:left;line-height:50px;margin-left:15px;font-family:Cooper Black;">
				Nameless Dashboard</b>
			<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
				
						<li><a href="educator_home.php">Educator Home</a></li>
				        <li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["TID"]))
				{
					echo'
				
						<li><a href="student_home.php">Student Home</a></li>
				        <li><a href="logout.php">Logout</a></li>
					';
				}
				else{
					echo'
					
						<li><a href="index.php">educator Login</a></li>
						<li><a href="student_login.php">Student Login</a></li>
				    ';
				}
			?>
				
			</ul>
		</div>
		
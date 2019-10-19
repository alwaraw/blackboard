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
				<?php include"sidebar.php";?><br>
				<div class="content">
					<h4 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h4>
					<hr>
				</div>
				
			<div class="tbox">
					<h1 style="margin-top:30px;"> Available Courses - Current Semester</h1><br>
					<hr>
					<br><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="3px" >
						<tr>
							<th>Course Id</th>
							<th>Class Name</th>
							<th>Section</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from class";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
											<td>{$r["CSID"]}</td>
											<td>{$r["CNAME"]}</td>
											<td>{$r["CSEC"]}</td>
											<td><a href='delete.php?id={$r["CID"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
				</div>
				
			<div class="content1">
					
						<h3 class="add_class2"> Add Class Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into class(CSID,CNAME,CSEC) values('{$_POST["csid"]}','{$_POST["cname"]}','{$_POST["sec"]}')";
							if($db->query($sq))
							{
								//header("Location:educator_home.php");
								//exit;
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}
							
							
						}
					
					?>
						
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Class Id</label><br>
					
				<select name="csid"  required class="input2">
						<option value="">Select</option>
						<option value="COMP-1000">COMP-1000</option>
						<option value="COMP-1047">COMP-1047</option>
						<option value="COMP-1400">COMP-1400</option>
						<option value="COMP-1410">COMP-1410</option>
						<option value="COMP-2057">COMP-2057</option>
						<option value="COMP-2067">COMP-2067</option>
						<option value="COMP-2077">COMP-2077</option>
						<option value="COMP-2097">COMP-2097</option>
						<option value="COMP-2120">COMP-2120</option>
						<option value="COMP-2140">COMP-2140</option>
						<option value="COMP-2310">COMP-2310</option>
						<option value="COMP-2540">COMP-2540</option>
						<option value="COMP-2560">COMP-2560</option>
						<option value="COMP-2650">COMP-2650</option>
						<option value="COMP-2660">COMP-2660</option>
						<option value="COMP-2707">COMP-2707</option>
						<option value="COMP-2750">COMP-2750</option>
						<option value="COMP-2800">COMP-2800</option>
						<option value="COMP-2980">COMP-2980</option>
						<option value="COMP-3057">COMP-3057</option>
						<option value="COMP-3077">COMP-3077</option>
						<option value="COMP-3110">COMP-3110</option>
						<option value="COMP-3150">COMP-3150</option>
						<option value="COMP-3220">COMP-3220</option>
						<option value="COMP-3300">COMP-3300</option>
						<option value="COMP-3340">COMP-3340</option>
						<option value="COMP-3400">COMP-3400</option>
						<option value="COMP-3500">COMP-3500</option>
						<option value="COMP-3520">COMP-3520</option>
						<option value="COMP-354">COMP-354</option>
						<option value="COMP-3670">COMP-3670</option>
						<option value="COMP-3680">COMP-3680</option>
						<option value="COMP-3710">COMP-3710</option>
						<option value="COMP-3750">COMP-3750</option>
						<option value="COMP-3760">COMP-3760</option>
						<option value="COMP-3770">COMP-3770</option>
						<option value="COMP-3980">COMP-3980</option>
						<option value="COMP-4110">COMP-4110</option>
						<option value="COMP-4150">COMP-4150</option>
						<option value="COMP-4200">COMP-4200</option>
						<option value="COMP-4220">COMP-4220</option>
						<option value="COMP-4250">COMP-4250</option>
						<option value="COMP-4400">COMP-4400</option>
						<option value="COMP-1410">COMP-4410</option>
						<option value="COMP-4540">COMP-4540</option>
						<option value="COMP-4670">COMP-4670</option>
						<option value="COMP-4680">COMP-4680</option>
						<option value="COMP-4700">COMP-4700</option>
						<option value="COMP-4730">COMP-4730</option>
						<option value="COMP-4740">COMP-4740</option>
						<option value="COMP-4750">COMP-4750</option>
						<option value="COMP-4760">COMP-4760</option>
						<option value="COMP-4770">COMP-4770</option>
						<option value="COMP-4800">COMP-4800</option>
						<option value="COMP-4960">COMP-4960</option>
						<option value="COMP-4970">COMP-4970</option>
						<option value="COMP-4980">COMP-4980</option>
						<option value="COMP-4990">COMP-4990</option>
						
					</select><br><br>
				<label>Class Name</label><br>
				<select name="cname"  required class="input2">
						<option value="">Select</option>
						<option value="Key Concepts in Computer Science">Key Concepts in Computer Science</option>
						<option value="Computer Concepts for End-Users">Computer Concepts for End-Users</option>
						<option value="Introduction to Algorithms and Programming I">Introduction to Algorithms and Programming I</option>
						<option value="Introduction to Algorithms and Programming II">Introduction to Algorithms and Programming II</option>
						<option value="Introduction to the Internet">Introduction to the Internet</option>
						<option value="Programming for Beginners">Programming for Beginners</option>
						<option value="Problem Solving and Information on the Internet">Problem Solving and Information on the Internet</option>
						<option value="Social Media Marketing for End Users">Social Media Marketing for End Users</option>
						<option value="Object-Oriented Programming Using Java">Object-Oriented Programming Using Java</option>
						<option value="Computer Languages, Grammars, and Translators">Computer Languages, Grammars, and Translators</option>
						<option value="Theoretical Foundations of Computer Science">Theoretical Foundations of Computer Science</option>
						<option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
						<option value="Systems Programming">Systems Programming</option>
						<option value="Computer Architecture I: Digital Design">Computer Architecture I: Digital Design</option>
						<option value="Computer Architecture II: Microprocessor Programming">Computer Architecture II: Microprocessor Programming</option>
						<option value="Advanced Web Design, Construction, and Deployment">Advanced Web Design, Construction, and Deployment</option>
						<option value="Selected Topics">Selected Topics</option>
						<option value="Software Development">Software Development</option>
						<option value="Co-op Work Term I">Co-op Work Term I</option>
						<option value="Cyber-Ethics">Cyber-Ethics</option>
						<option value="Web-Based Data Management">Web-Based Data Management</option>
						<option value="Introduction to Software Engineering">Introduction to Software Engineering</option>
						<option value="Database Management Systems">Database Management Systems</option>
						<option value="IObject-Oriented Software Analysis and Design">Object-Oriented Software Analysis and Design</option>
						<option value="Operating Systems Fundamentals">Operating Systems Fundamentals</option>
						<option value="World Wide Web Information Systems Development">World Wide Web Information Systems Development</option>
						<option value="Advanced Object Oriented System Design Using C++">Advanced Object Oriented System Design Using C++</option>
						<option value="Introduction to Multimedia Systems">Introduction to Multimedia Systems</option>
						<option value="Introduction to Computer Graphics">Introduction to Computer Graphics</option>
						<option value="Theory of Computation">Theory of Computation</option>
						<option value="Computer Networks">Computer Networks</option>
						<option value="Network Practicum">Network Practicum</option>
						<option value="Artificial Intelligence Concepts">Artificial Intelligence Concepts</option>
						<option value="Selected Topics">Selected Topics</option>
						<option value="Game Design, Development and Tools">Game Design, Development and Tools</option>
						<option value="Co-op Work Term II">Co-op Work Term II</option>
						<option value="Software Verification and Testin"> Software Verification and Testing</option>
						<option value="Advanced and Practical Database Systems">Advanced and Practical Database Systems</option>
						<option value="Mobile Application Development">Mobile Application Development</option>
						<option value="Agile Software Development">Agile Software Development</option>
						<option value="Big Data Analytics and Database Design">Big Data Analytics and Database Design</option>
						<option value="Principles of Programming Languages">Principles of Programming Languages</option>
						<option value="Multimedia System Development">Multimedia System Development</option>
						<option value="Design and Analysis of Computer Algorithms"> Design and Analysis of Computer Algorithms</option>
						<option value="Network Security"> Network Security</option>
						<option value="Advanced Networking">Advanced Networking</option>
						<option value="Project Using Selected Tools">Project Using Selected Tools</option>
						<option value="Advanced Topics in Artificial Intelligence II">Advanced Topics in Artificial Intelligence II</option>
						<option value="Advanced Topics in Artificial Intelligence II">Advanced Topics in Artificial Intelligence II</option>
						<option value="Artificial Intelligence for Games"> Artificial Intelligence for Games</option>
						<option value="Selected Topics in Software Engineering">Selected Topics in Software Engineering</option>
						<option value="Research Project">Research Project</option>
						<option value="Co-op Work Term III"> Co-op Work Term III</option>
						<option value="Co-op Work Term IV">Co-op Work Term IV</option>
						<option value="Project Management: Techniques and Tools">Project Management: Techniques and Tools</option>
						
					</select><br><br>
					<label>Section </label><br>
					<select name="sec"  required class="input2">
						<option value="">Select</option>
						<option value="-">-</option>
						<option value="001">001</option>
						<option value="002">002</option>
						<option value="003">003</option>
						<option value="004">004</option>
						<option value="005">005</option>
						<option value="006">006</option>
						<option value="007">007</option>
						<option value="008">008</option>
						<option value="009">009</option>
						<option value="010">010</option>
						<option value="Distance Education">Distance Education</option>
					
					</select>
					<br>
					<button type="submit" class="btn" name="submit" onclick="return mes()">Add Class Details</button>
				</form>
				
				<script type="text/javascript">
				function mes(){
					
					alert ("Added Successfully");
					return true;
				}
				</script>
				
				</div>
			
			
			</div>
			
	
								<!--Next semester courses
	--------------------------------------------------------------------------------------
	-------------------------------------------------------------------------------------->
	
			<div class="tboxn">
			<hr>
					<h1 style="margin-top:30px;"> Available Courses - Next Semester</h1><br>
					<hr>
					<br><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<div class="tn">
					<table border="3px" >
						<tr>
							<th>Course Id</th>
							<th>Class Name</th>
							<th>Section</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from class_next";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
											<td>{$r["CSIDN"]}</td>
											<td>{$r["CNAMEN"]}</td>
											<td>{$r["CSECN"]}</td>
											<td><a href='delete_N.php?id={$r["CIDN"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
					</div>
				</div>
				
			<div class="content1">
					
						<h3  class="add_class"> Add Class Details</h3><br>
						
					<?php
						if(isset($_POST["submitN"]))
						{
							 $sq="insert into class_next(CSIDN,CNAMEN,CSECN) values('{$_POST["csidN"]}','{$_POST["cnameN"]}','{$_POST["secN"]}')";
							if($db->query($sq))
							{
								//header("Location:educator_home.php");
								//exit;
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}
							
							
						}
					
					?>
						
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Class Id</label><br>
					
				<select name="csidN"  required class="input2">
						<option value="">Select</option>
						<option value="COMP-1000">COMP-1000</option>
						<option value="COMP-1047">COMP-1047</option>
						<option value="COMP-1400">COMP-1400</option>
						<option value="COMP-1410">COMP-1410</option>
						<option value="COMP-2057">COMP-2057</option>
						<option value="COMP-2067">COMP-2067</option>
						<option value="COMP-2077">COMP-2077</option>
						<option value="COMP-2097">COMP-2097</option>
						<option value="COMP-2120">COMP-2120</option>
						<option value="COMP-2140">COMP-2140</option>
						<option value="COMP-2310">COMP-2310</option>
						<option value="COMP-2540">COMP-2540</option>
						<option value="COMP-2560">COMP-2560</option>
						<option value="COMP-2650">COMP-2650</option>
						<option value="COMP-2660">COMP-2660</option>
						<option value="COMP-2707">COMP-2707</option>
						<option value="COMP-2750">COMP-2750</option>
						<option value="COMP-2800">COMP-2800</option>
						<option value="COMP-2980">COMP-2980</option>
						<option value="COMP-3057">COMP-3057</option>
						<option value="COMP-3077">COMP-3077</option>
						<option value="COMP-3110">COMP-3110</option>
						<option value="COMP-3150">COMP-3150</option>
						<option value="COMP-3220">COMP-3220</option>
						<option value="COMP-3300">COMP-3300</option>
						<option value="COMP-3340">COMP-3340</option>
						<option value="COMP-3400">COMP-3400</option>
						<option value="COMP-3500">COMP-3500</option>
						<option value="COMP-3520">COMP-3520</option>
						<option value="COMP-3540">COMP-354</option>
						<option value="COMP-3670">COMP-3670</option>
						<option value="COMP-3680">COMP-3680</option>
						<option value="COMP-3710">COMP-3710</option>
						<option value="COMP-3750">COMP-3750</option>
						<option value="COMP-3760">COMP-3760</option>
						<option value="COMP-3770">COMP-3770</option>
						<option value="COMP-3980">COMP-3980</option>
						<option value="COMP-4110">COMP-4110</option>
						<option value="COMP-4150">COMP-4150</option>
						<option value="COMP-4200">COMP-4200</option>
						<option value="COMP-4220">COMP-4220</option>
						<option value="COMP-4250">COMP-4250</option>
						<option value="COMP-4400">COMP-4400</option>
						<option value="COMP-1410">COMP-4410</option>
						<option value="COMP-4540">COMP-4540</option>
						<option value="COMP-4670">COMP-4670</option>
						<option value="COMP-4680">COMP-4680</option>
						<option value="COMP-4700">COMP-4700</option>
						<option value="COMP-4730">COMP-4730</option>
						<option value="COMP-4740">COMP-4740</option>
						<option value="COMP-4750">COMP-4750</option>
						<option value="COMP-4760">COMP-4760</option>
						<option value="COMP-4770">COMP-4770</option>
						<option value="COMP-4800">COMP-4800</option>
						<option value="COMP-4960">COMP-4960</option>
						<option value="COMP-4970">COMP-4970</option>
						<option value="COMP-4980">COMP-4980</option>
						<option value="COMP-4990">COMP-4990</option>
						
					</select><br><br>
				<label>Class Name</label><br>
				<select name="cnameN"  required class="input2">
						<option value="">Select</option>
						<option value="Key Concepts in Computer Science">Key Concepts in Computer Science</option>
						<option value="Computer Concepts for End-Users">Computer Concepts for End-Users</option>
						<option value="Introduction to Algorithms and Programming I">Introduction to Algorithms and Programming I</option>
						<option value="Introduction to Algorithms and Programming II">Introduction to Algorithms and Programming II</option>
						<option value="Introduction to the Internet">Introduction to the Internet</option>
						<option value="Programming for Beginners">Programming for Beginners</option>
						<option value="Problem Solving and Information on the Internet">Problem Solving and Information on the Internet</option>
						<option value="Social Media Marketing for End Users">Social Media Marketing for End Users</option>
						<option value="Object-Oriented Programming Using Java">Object-Oriented Programming Using Java</option>
						<option value="Computer Languages, Grammars, and Translators">Computer Languages, Grammars, and Translators</option>
						<option value="Theoretical Foundations of Computer Science">Theoretical Foundations of Computer Science</option>
						<option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
						<option value="Systems Programming">Systems Programming</option>
						<option value="Computer Architecture I: Digital Design">Computer Architecture I: Digital Design</option>
						<option value="Computer Architecture II: Microprocessor Programming">Computer Architecture II: Microprocessor Programming</option>
						<option value="Advanced Web Design, Construction, and Deployment">Advanced Web Design, Construction, and Deployment</option>
						<option value="Selected Topics">Selected Topics</option>
						<option value="Software Development">Software Development</option>
						<option value="Co-op Work Term I">Co-op Work Term I</option>
						<option value="Cyber-Ethics">Cyber-Ethics</option>
						<option value="Web-Based Data Management">Web-Based Data Management</option>
						<option value="Introduction to Software Engineering">Introduction to Software Engineering</option>
						<option value="Database Management Systems">Database Management Systems</option>
						<option value="IObject-Oriented Software Analysis and Design">Object-Oriented Software Analysis and Design</option>
						<option value="Operating Systems Fundamentals">Operating Systems Fundamentals</option>
						<option value="World Wide Web Information Systems Development">World Wide Web Information Systems Development</option>
						<option value="Advanced Object Oriented System Design Using C++">Advanced Object Oriented System Design Using C++</option>
						<option value="Introduction to Multimedia Systems">Introduction to Multimedia Systems</option>
						<option value="Introduction to Computer Graphics">Introduction to Computer Graphics</option>
						<option value="Theory of Computation">Theory of Computation</option>
						<option value="Computer Networks">Computer Networks</option>
						<option value="Network Practicum">Network Practicum</option>
						<option value="Artificial Intelligence Concepts">Artificial Intelligence Concepts</option>
						<option value="Selected Topics">Selected Topics</option>
						<option value="Game Design, Development and Tools">Game Design, Development and Tools</option>
						<option value="Co-op Work Term II">Co-op Work Term II</option>
						<option value="Software Verification and Testin"> Software Verification and Testing</option>
						<option value="Advanced and Practical Database Systems">Advanced and Practical Database Systems</option>
						<option value="Mobile Application Development">Mobile Application Development</option>
						<option value="Agile Software Development">Agile Software Development</option>
						<option value="Big Data Analytics and Database Design">Big Data Analytics and Database Design</option>
						<option value="Principles of Programming Languages">Principles of Programming Languages</option>
						<option value="Multimedia System Development">Multimedia System Development</option>
						<option value="Design and Analysis of Computer Algorithms"> Design and Analysis of Computer Algorithms</option>
						<option value="Network Security"> Network Security</option>
						<option value="Advanced Networking">Advanced Networking</option>
						<option value="Project Using Selected Tools">Project Using Selected Tools</option>
						<option value="Advanced Topics in Artificial Intelligence II">Advanced Topics in Artificial Intelligence II</option>
						<option value="Advanced Topics in Artificial Intelligence II">Advanced Topics in Artificial Intelligence II</option>
						<option value="Artificial Intelligence for Games"> Artificial Intelligence for Games</option>
						<option value="Selected Topics in Software Engineering">Selected Topics in Software Engineering</option>
						<option value="Research Project">Research Project</option>
						<option value="Co-op Work Term III"> Co-op Work Term III</option>
						<option value="Co-op Work Term IV">Co-op Work Term IV</option>
						<option value="Project Management: Techniques and Tools">Project Management: Techniques and Tools</option>
						
					</select><br><br>
					<label>Section </label><br>
					<select name="secN"  required class="input2">
						<option value="">Select</option>
						<option value="-">-</option>
						<option value="001">001</option>
						<option value="002">002</option>
						<option value="003">003</option>
						<option value="004">004</option>
						<option value="005">005</option>
						<option value="006">006</option>
						<option value="007">007</option>
						<option value="008">008</option>
						<option value="009">009</option>
						<option value="010">010</option>
						<option value="Distance Education">Distance Education</option>
					
					</select>
					<br>
					<button type="submitN" class="btn" name="submitN" onclick="return mes()">Add Class Details</button>
				</form>
				
				<script type="text/javascript">
				function mes(){
					
					alert ("Added Successfully");
					return true;
				}
				</script>
				
				</div>
			
			
			</div>
		<?php include"footer.php";?>
	</body>
</html>
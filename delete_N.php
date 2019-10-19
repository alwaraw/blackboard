<?php
	include"database.php";
	session_start();
	
	$s="delete from class where CIDN={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('student_home.php?mes=Data Deleted.','_self');</script>"
?>
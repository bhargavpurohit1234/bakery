<?php session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
	
	$_SESSION['mysession'] = "";
	unset($_SESSION['mysession']);
	header("location:index.php");
	exit;
	
?>

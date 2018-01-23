<?php session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
	
if(!isset($_SESSION['mysession']))
{
	header("location:index.php");
	exit;	
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>
</head>

<body>
<center>
<h1>Welcome to my Website  <?php echo ucfirst($_SESSION['mysession']['username']); ?></h1>
<br />
<a href="logout.php">LOGOUT</a>
</center>
</body>
</html>
<?php session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");

$msg = "";	
if(isset($_SESSION['mysession']))
{
	header("location:dashbord.php");
	exit;	
}

if(isset($_POST['submit']))
{
	$user = trim($_POST['txtuser']);
	$pass = trim($_POST['txtpass']);
	
 	$query = "select * from admin where user_name='".$user."' and password= '".$pass."' ";
	$result = mysql_query($query);
	 echo mysql_num_rows($result);
	 exit;
	if(mysql_num_rows($result) > 0)
	{
		$row= mysql_fetch_array($result);
		$_SESSION['mysession']=$row;
		echo '<script language="javascript">document.location="dashbord.php";</script>';
		exit;
	}
	else
	{
		$msg = "Invalid Username Or Password" ;
	}
	
	
	
	
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Login</title>
</head>

<body>

<form method="post">
<table border="1" cellpadding="10" cellspacing="0" align="center" width="30%">
<tr>
	<td colspan="2"><?php if($msg!='') { echo $msg ; } ?></td>
</tr>
	<tr>
    	<td>USERNAME</td>
        <td><input type="text" name="txtuser" id="txtuser" placeholder="Enter Username"  required/></td>	
    </tr>
	<tr>
    	<td>PASSWORD</td>
        <td><input type="password" name="txtpass" id="txtpass" placeholder="Enter Password" required/></td>	
    </tr>    
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Login" name="submit" id="submit" /></td> 
    </tr>
</table>
</form>
</body>
</html>
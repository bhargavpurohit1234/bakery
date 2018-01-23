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
	
	
	
	
 	$query = "select * from login where user_name='".$user."' and password= '".$pass."' ";
	$result = mysql_query($query);
	
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
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login | Bakery Shop</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <?php if($msg!='') { echo $msg ; } ?>
                    
                    <form  class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="txtuser" id="txtuser" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                          <input type="password"  name="txtpass" id="txtpass" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>                        </div>
                        <div class="col-md-6">
                        <input type="submit" value="Login" name="submit" id="submit"  class="btn btn-info btn-block">
                            
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 AppName                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>                    </div>
                </div>
            </div>
        </div>
    </body>
</html>







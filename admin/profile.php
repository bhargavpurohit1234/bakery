<?php session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
//	echo $_SESSION['mysession']['name'];

	if(!isset($_SESSION['mysession']))
	{
		header("location:index.php");
		exit;
	}
//	echo $_SESSION['mysession']['id'];
$msg = '';
?>	
<?php
  if(isset($_POST['txtsubmit']))
{ 
  $name=$_POST['txtname'];
  $address=$_POST['txtaddress'];
  $city=$_POST['txtcity'];
  $mob_no=$_POST['txtmob_no'];
  $user_name=$_POST['txtuser_name'];
  $password=$_POST['txtpassword'];
  $id=$_SESSION['mysession']['id'];
  
   $query="update login set name='".$name."',address='".$address."',city='".$city."',mob_no='".$mob_no."',user_name='". $user_name."',password='".$password."' where id='".$_SESSION['mysession']['id']."'";
  
  
  $result=mysql_query($query);

  
  echo '<script language="javascript">alert("Profile Details Updated Succefully!...");</script>' ;
  
  $msg = "Profile Details Updated Succefully!..." ; 
}
?>

<?php

	$query = "select * from login where id ='".$_SESSION['mysession']['id']."'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$name=$row['name'];
	$address=$row['address'];
	$city=$row['city'];
	$mob_no=$row['mob_no'];
	$user_name=$row['user_name'];
	$password=$row['password'];
?>	
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
             <div class="page-sidebar">
             <?php include "includes/menu.php" ; ?>
           </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                     
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashbord.php">Dashbord</a></li>
                     <li class="active"><a href="profile.php">Profile</a></li>
                    
                                  </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                           
                          
                          <?php if($msg != '')
						  { ?>
                           	<div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong><?php echo $msg; ?></strong>
                            </div>
                          <?php } ?>  
                           
                            
                            <form class="form-horizontal"  method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Profile</strong> </h3>
                                    
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                      <input type="text" name="txtname" id="txtname" class="form-control" required/ value="<?php echo $name; ?>">
                                                    </div>                                            
                                                    <span class="help-block">Enter your name</span>                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Address</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                <textarea class="form-control" rows="5" name="txtaddress" id="txtaddress" value="<?php echo $address; ?>"></textarea>
                                                    <span class="help-block">Enter your address</span>                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">City</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class=""><span class=""></span></span>
                                                        <input type="text" class="form-control" name="txtcity" id="txtcity" value="<?php echo $city; ?>"/>
                                                    </div>            
                                                    <span class="help-block">Enter your city</span>                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Mobile number</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                       <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" name="txtmob_no" id="txtmob_no" class="form-control" required/value="<?php echo $mob_no; ?>">
                                                   </div>                                            
                                                    <span class="help-block">Enter your mob number</span>                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">User Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="txtuser_name" id="txtuser_name" class="form-control" required/ value="<?php echo $user_name; ?>">
                                                    </div>                                            
                                                    <span class="help-block">Enter user name</span>                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                         <input type="password" class="form-control" name="txtpassword" id="txtpassword" required/value="<?php echo $password; ?>">
                                                    </div>            
                                                    <span class="help-block">Enter Password </span>                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                   
                                    <button class="btn btn-primary pull-right" name="txtsubmit" id="txtsubmit">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <?php include "includes/logout.php" ; ?>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->

        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>







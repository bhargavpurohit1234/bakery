<?php session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
//	echo $_SESSION['mysession']['name'];

	if(!isset($_SESSION['mysession']))
	{
		header("location:index.php");
		exit;
	}
	
?>	
<?php

	$name ='';



if(isset($_POST['cmdsubmit']))
{

	if($_POST['action']=='Edit')
	{
	
		$name = trim($_POST['name']);
		
		
		if($_FILES['txtimage']['name']!='')
		{
			$round = rand(1000,10000);									//		77777
			$image = $round."_".$_FILES['txtimage']['name'];			//		7777_a.jpg
			$img = "img/offer/".$image;								//		img/offer/7777_a.jpg
			move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
			$img = $_FILES['txtimage']['name'];
			if($img!='') {  unlink("img/offer/".$_POST['imgId']); } 
			
		}
		else
		{
		
			$image = $_POST['imgId']	;
		}
		
		$query = "update offer set name='".$name."', image='".$image."' where id='".$_POST['id']."'  ";
		$result = mysql_query($query);
		echo '<script language="javascript">alert("Offer Updated Successfully") ; </script>"'	;
		echo '<script language="javascript">document.location="offer_view.php";</script>"'	;		
		exit;
		
	}
	
	
	
	else
	{	
		
		
		
		
		$name = trim($_POST['name']);				
		$round = rand(1000,10000);									//		77777
		$image = $round."_".$_FILES['txtimage']['name'];			//		7777_a.jpg
		$img = "img/offer/".$image;								//		img/offer/7777_a.jpg
		move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
		
		

		
		
			 $query = "insert into offer (image,name) values ('".$image."','".$name."')";
			

		$result = mysql_query($query);
		echo '<script language="javascript">alert("Offer Added Successfully") ; </script>"'	;
		echo '<script language="javascript">document.location="offer_view.php";</script>"'	;		
		exit;
	}	
		
	
}	
	
?>
<?php


?>
<?php if(isset($_GET['editId']))
{
	$query = "select * from offer where id ='".$_GET['editId']."'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	
	$name = $row['name'];
	
	
	
	
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="txtimage/x-icon" />
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
                    <li><a href="#">offer</a></li>
                    <li class="active"><a href="offer_create.php">Create offer</a></li>
                   
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>offer</strong></h3>
                                    
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="name" id="name" required value="<?php echo $name; ?>"/>
                                            </div>                                            
                                            <span class="help-block"></span>                                        </div>
                                    </div>
                                    
                                                                  
                                    
                                  
                                    
                                    
                                    
                                                                      
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                              <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file" value="<?php echo $image; ?>" />
                                                    <span class="help-block"> image</span> 
                                                    
                                                   <?php if(isset($_GET['editId']))
													{ ?>
                                                    
                                                    <img src="img/offer/<?php echo $row['image'] ?>" height="50" width="50">                                              		<?php } ?>                                  </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                                                        
                                     <?php if(isset($_GET['editId']))
									{ ?>
                                  	<input type="hidden" name="action" id="action" value="Edit">
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId']; ?>" > 
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $row['image'] ?>" >                                    
                                   <?php } ?> 
                                
                                
                                                                     
                                    <button class="btn btn-primary pull-right" name="cmdsubmit" id="cmdsubmit">Submit</button>
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


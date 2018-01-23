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

	$cat ='';
	$title ='';
	$des ='';
	$price ='';
	$av ='';


if(isset($_POST['cmdsubmit']))
{

	if($_POST['action']=='Edit')
	{
	
		$cat = trim($_POST['cat']);
		$title = trim($_POST['txtpro']);
		$txtdes = trim($_POST['txtdes']);
		$txtpri = trim($_POST['txtpri']);
		$txtav = trim($_POST['txtav']);
		
		
		if($_FILES['txtimage']['name']!='')
		{
			$round = rand(1000,10000);									//		77777
			$image = $round."_".$_FILES['txtimage']['name'];			//		7777_a.jpg
			$img = "img/product/".$image;								//		img/product/7777_a.jpg
			move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
			$img = $_FILES['txtimage']['name'];
			if($img!='') {  unlink("img/product/".$_POST['imgId']); } 
			
		}
		else
		{
		
			$image = $_POST['imgId']	;
		}
		
		$query = "update product_master set category='".$cat."',title='".$title."',description='".$txtdes."',price='".$txtpri."',photo='".$image."' where id='".$_POST['id']."' ,avalible='".$txtav."' ";
		$result = mysql_query($query);
		echo '<script language="javascript">alert("Product Updated Successfully") ; </script>"'	;
		echo '<script language="javascript">document.location="product_view.php";</script>"'	;		
		exit;
		
	}
	
	
	
	else
	{	
		
		
		
		
		$cat = trim($_POST['cat']);
		$title = trim($_POST['txtpro']);
		$txtdes = trim($_POST['txtdes']);
		$txtpri = trim($_POST['txtpri']);
		$txtav = trim($_POST['txtav']);
		
		$date = date('Y-m-d');
		
		
		
		$round = rand(1000,10000);									//		77777
		$image = $round."_".$_FILES['txtimage']['name'];			//		7777_a.jpg
		$img = "img/product/".$image;								//		img/product/7777_a.jpg
		move_uploaded_file($_FILES['txtimage']['tmp_name'],$img);
		
		

		
		
		$query = "insert into product_master (category,title,description,price,photo,avalible,create_date) values ('".$cat."','".$title."','".$txtdes."','".$txtpri."','".$image."','".$txtav."','".$date."')";

		$result = mysql_query($query);
		echo '<script language="javascript">alert("Product Added Successfully") ; </script>"'	;
		echo '<script language="javascript">document.location="product_view.php";</script>"'	;		
		exit;
	}	
		
	
}	
	
?>
<?php
$pro = '';

?>
<?php if(isset($_GET['editId']))
{
	$query = "select * from product_master where id ='".$_GET['editId']."'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	
	$cat = $row['category'];
	$title = $row['title'];
	$des = $row['description'];
	$price = $row['price'];
	$av = $row['avalible'];
	
	
	
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
                    <li><a href="#">Product</a></li>
                    <li class="active"><a href="product_create.php">Create Product</a></li>
                   
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Product Master</strong> </h3>
                                    
                                </div>
                                
                                 <div class="panel-body"> 
                                
                                    <div class="row">
                                    
                                         <div class="col-md-6">
                                   
                                 
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Category</label>
                                                <div class="col-md-9">                                                                             
                                            <select class="form-control select" data-style="btn-success" name="cat" id="cat" >
                                            <?php if(isset($_GET['editId']))
											{ ?>
											 
											<option value="<?php echo $cat  ; ?>"><?php echo $cat  ; ?></option>	
											<?php } ?>

                                            <option value="">-Select Category-</option>

                                            
                                              <?php 
											   $query= "select * from category_master order by name";
											   $result = mysql_query($query);
											   while($rows = mysql_fetch_array($result)) 
											   {
											   ?>
                                               <option value="<?php echo $rows['name'] ; ?>"><?php echo $rows['name'] ; ?></option>
                                               <?php   } ?>
                                            </select>
                                        </div>
                                        </div>
                                        
                                    </div>             
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="txtpro" class="form-control" id="txtpro" required value="<?php echo $title ; ?>"/>
                                                    </div>                                            
                                                                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="txtdes" class="form-control" id="txtdes"/> <?php echo $des; ?>  </textarea>
                                                    <span class="help-block">Default textarea field</span>                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Price</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"></span>
                                                        <input type="txt" class="form-control" name="txtpri" id="txtpri" value="<?php echo $price ; ?>"/>
                                                    </div>            
                                                    <span class="help-block">Password field sample</span>                                                </div>
                                            </div>
                                            
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Product Photo</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <input type="file" class="fileinput btn-primary" name="txtimage" id="txtimage" title="Browse file" value=""/>
                                                    <span class="help-block">Product Photo</span> 
                                                    
                                                   <?php if(isset($_GET['editId']))
													{ ?>
                                                    
                                                    <img src="img/product/<?php echo $row['photo'] ?>" height="50" width="50">                                              		<?php } ?>
                                                    	
                                            </div>
                                        </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Avalible</label>
                                                <div class="col-md-9">                                                                                                                                        
                                            <label class="check"><input type="radio" name="txtav" id="txtav" value="Yes" <?php if($av=='Yes' || $av=='') { echo "checked" ; }  ?>> Yes </label>
                                                    &nbsp;&nbsp;
           <label class="check"><input  type="radio" name="txtav" id="txtav" value="No" <?php if($av=='No') { echo "checked"  ;}  ?> >  No  </label>
                                                    <span class="help-block"></span>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                <?php if(isset($_GET['editId']))
									{ ?>
                                  	<input type="hidden" name="action" id="action" value="Edit">
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId']; ?>" > 
                                    <input type="hidden" name="imgId" id="imgId" value="<?php echo $row['photo'] ?>" >                                    
                                   <?php } ?> 
                                
                                
                                    <button class="btn btn-default">Clear Form</button>                                    
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
